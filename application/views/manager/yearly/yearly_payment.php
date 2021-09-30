<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
    <div class="col-12" id="main">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>รับ-จ่ายประจำปี</h1>
        </div>
        <div class="col">
            <table class="table table-bordered border-success">
                <tr align="center">
                    <td rowspan="2"><br>รหัสสาขา</td>
                    <td rowspan="2"><br>สาขา</td>
                    <td colspan="5">รายรับ-รายจ่ายประจำเดือน</td>
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
                        <td><?= number_format(($row->share_money), 2) ?></td>
                        <td><?= number_format(($row->share_money) + ($row->share_money)) ?></td>
                        <td><?= number_format(($row->share_money) - ($row->share_money)) ?></td>
                        <td><?= number_format(($row->share_money) * ($row->share_money)) ?></td>
                        <td><?= number_format(($row->share_money) - ($row->share_money), 2) ?></td>
                    </tr>
                <?php } ?>
                <tr align="center">
                    <td colspan="2">รวม</td>
                    <td><?= number_format($summary->share_money) ?></td>
                    <td><?= number_format($summary->share_money) ?></td>
                    <td><?= number_format($summary->share_money) ?></td>
                    <td><?= number_format($summary->share_money) ?></td>
                    <td><?= number_format($summary->share_money) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>