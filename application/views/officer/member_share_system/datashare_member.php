<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
    <div class="col-12" id="main">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>ข้อมูลหุ้น</h1>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr align="center">
                    <td>เลขที่สมาชิก</td>
                    <td>สาขาที่สังกัด</td>
                    <td>เงินคงเหลือ</td>
                    <td>คะแนนสะสมคงเหลือ</td>
                </tr>
            </thead>
            <?php if ($result->result() == null) { ?>
                <td colspan="4" align="center">ไม่มีข้อมูลหุ้น</td>
            <?php  } ?>
            <tr align="center">
                <td><?= $resume->MEM_ID ?></td>
                <td><?= $resume->BR_NAME ?></td>
                <td><?= $resume->SHR_SUM_BTH ?></td>
                <td><?= $resume->POINT_SHR  ?></td>
            </tr>
        </table>
        <br>
        <table class="table table-hover" id="myTable">
            <thead>
                <tr align="center">
                    <td>เลขที่ใบเสร็จ</td>
                    <td>ประเภทหุ้น</td>
                    <td>จำนวนหุ้น</td>
                    <td>จำนวนเงิน</td>
                    <td>วันที่ทำรายการ</td>
                    <td>จำนวนเงินคงเหลือ</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result->result() as $row) { ?>
                    <tr align="center">
                        <td><?= $row->SLIP_NO ?></td>
                        <td><?= $row->SHR_NA ?></td>
                        <td><?= $row->TMP_SHARE_QTY ?></td>
                        <td><?= $row->TMP_SHARE_BHT ?></td>
                        <td><?= thaidate('j M Y ', strtotime($row->TMP_DATE_TODAY)) ?></td>
                        <td><?= $row->SHR_SUM_BTH ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>