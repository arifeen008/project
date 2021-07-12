<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
    <div class="col-12" id="main">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>หุ้นและเงินฝากทุกสาขาประจำวัน</h1>
        </div>
        <div class="col">
            <div class="card border-success">
                <div class="card-body">
                    <table class="table table-bordered border-success">
                        <tr>
                            <td align="center"></td>
                            <td align="center" colspan="5">ยอดเงินสดทุกสาขา</td>
                        </tr>
                        <tr align="center">
                            <td>รายการประจำวัน</td>
                            <td>ยกมา</td>
                            <td>เดบิตจ่าย</td>
                            <td>เครดิตรับ</td>
                            <td>ยกไป</td>
                            <td>ผลต่าง รับ-จ่าย</td>
                        </tr>
                        <?php foreach ($result->result() as $row) { ?>
                            <tr align="center">
                                <td><?= $row->ACC_DESC ?></td>
                                <td><?= number_format(($row->last_dep), 2) ?></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>
                        <?php } ?>
                        <tr align="center">
                            <td>รวม</td>
                            <td><?= number_format(($summary->last_dep), 2) ?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>