<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
    <div class="col-12" id="main">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>รายงานบัญชีเงินฝากประจำปี</h1>
        </div>
        <div class="col">
            <div class="card border-success">
                <div class="card-body">
                    <table class="table table-bordered border-success">
                        <tr>
                            <td align="center" rowspan="2"><br>รหัสสาขา</td>
                            <td align="center" rowspan="2"><br>สาขา</td>
                            <td align="center" colspan="5">ข้อมูลบัญชี</td>
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
                                <td><?= $row->BR_NO ?></td>
                                <td><?= $row->BR_NAME ?></td>
                                <td><?= number_format($row->deposit_money) ?></td>
                                <td><?= number_format(($row->deposit_money) + ($row->deposit_money)) ?></td>
                                <td><?= number_format(($row->deposit_money) - ($row->deposit_money)) ?></td>
                                <td><?= number_format(($row->deposit_money) * ($row->deposit_money)) ?></td>
                                <td><?= number_format(($row->deposit_money) - ($row->deposit_money), 2) ?></td>
                            </tr>
                        <?php } ?>
                        <tr align="center">
                            <td colspan="2">รวม</td>
                            <td><?= number_format($summary->deposit_money) ?></td>
                            <td><?= number_format($summary->deposit_money) ?></td>
                            <td><?= number_format($summary->deposit_money) ?></td>
                            <td><?= number_format($summary->deposit_money) ?></td>
                            <td><?= number_format($summary->deposit_money) ?></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>