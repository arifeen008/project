<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
    <div class="col-12" id="main">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>ยอดเงินในบัญชี</h1>
        </div>
        <!-- <table class="table table-striped">
            <tr>
                <td>เลขบัญชี</td>
                <td><?= BankAccount($result->ACCOUNT_NO)   ?></td>
            </tr>
            <tr>
                <td>ชื่อบัญชี</td>
                <td><?= $result->ACCOUNT_NAME ?></td>
            </tr>
            <tr>
                <td>ยอดคงเหลือ</td>
                <td><?= number_format($result->BALANCE) ?> บาท</td>
            </tr>
            <tr>
                <td>ยอดที่ถอนได้</td>
                <td><?= number_format($result->AVAILABLE) ?> บาท</td>
            </tr>
        </table> -->
        <br>
        <table class="table" id="myTable">
            <thead>
                <tr align="center">
                    <th>วันที่</th>
                    <th>เงินฝาก</th>
                    <th>เงินถอน</th>
                    <th>ยอดเงินคงเหลือ</th>
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
</div>