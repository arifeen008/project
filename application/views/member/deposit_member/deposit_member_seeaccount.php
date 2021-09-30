<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>เงินฝาก</h1>
    </div>

    <table class="table table-striped">
        <thead>
            <tr align="center">
                <td>วันที่</td>
                <td>เงินฝาก</td>
                <td>เงินถอน</td>
                <td>ยอดเงินคงเหลือ</td>
            </tr>
        </thead>
        <?php if ($result->result() == null) { ?>
            <td colspan="4" align="center">ไม่มีข้อมูลในช่วงเวลาดังกล่าว</td>
        <?php  } ?>
        <?php foreach ($result->result() as $row) { ?>
            <tr>
                <td align="center"><?= thaidate('j M Y ', strtotime($row->F_TIME)) ?></td>
                <td align="center"><?= number_format($row->F_DEP, 2) ?></td>
                <td align="center"><?= number_format($row->F_WDL, 2) ?></td>
                <td align="center"><?= number_format($row->F_BALANCE, 2) ?></td>
            </tr>
        <?php } ?>
    </table>


</div>