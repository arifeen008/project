<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
    <div class="col-12" id="main">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>รายงานบัญชีเงินฝากประจำวัน</h1>
        </div>
        <div class="col">
            <div class="card border-success">
                <div class="card-body">
                    <table class="table table-bordered border-success">
                        <tr>
                            <td align="center" rowspan="2"><br>รหัส</td>
                            <td align="center" rowspan="2"><br>ประเภทบัญชี</td>
                            <td align="center" colspan="5">ข้อมูลสาขา</td>
                        </tr>
                        <tr align="center">
                            <td>ยกมา</td>
                            <td>เดบิตจ่าย</td>
                            <td>เครดิตรับ</td>
                            <td>ยกไป</td>
                            <td>ผลต่างรับ-จ่าย</td>
                        </tr>
                        <?php foreach ($result->result() as $row) { ?>
                            <tr align="center">
                                <td><?= $row->ACC_TYPE ?></td>
                                <td><?= $row->ACC_DESC ?></td>
                                <td><?= number_format($row->sum_dast_dep) ?></td>
                                <td><?= number_format(($row->sum_dast_dep) + ($row->sum_dast_dep)) ?></td>
                                <td><?= number_format(($row->sum_dast_dep) - ($row->sum_dast_dep)) ?></td>
                                <td><?= number_format(($row->sum_dast_dep) * ($row->sum_dast_dep)) ?></td>
                                <td><?= number_format(($row->sum_dast_dep) - ($row->sum_dast_dep), 2) ?></td>
                            </tr>
                        <?php } ?>
                        <tr align="center">
                            <td colspan="2">รวม</td>
                            <td><?= number_format($summary->sum_dast_dep) ?></td>
                            <td><?= number_format($summary->sum_dast_dep) ?></td>
                            <td><?= number_format($summary->sum_dast_dep) ?></td>
                            <td><?= number_format($summary->sum_dast_dep) ?></td>
                            <td><?= number_format($summary->sum_dast_dep) ?></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>