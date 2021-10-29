<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>เงินฝาก</h1>
    </div>

    <table class="table table-hover" id="myTable">
        <thead>
            <tr align="center">
                <td>วันที่</td>
                <td>เงินฝาก</td>
                <td>เงินถอน</td>
                <td>ยอดเงินคงเหลือ</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result->result() as $row) { ?>
                <tr align="center">
                    <td><?= thaidate('j M Y ', strtotime($row->F_TIME)) ?></td>
                    <td><?= number_format($row->F_DEP, 2) ?></td>
                    <td><?= number_format($row->F_WDL, 2) ?></td>
                    <td><?= number_format($row->F_BALANCE, 2) ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>