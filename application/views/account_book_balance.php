<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
    <div class="col-12" id="main">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>เงินฝากพนักงานประจำวัน</h1>
        </div>
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr align="center">
                        <td>เลขบัญชี</td>
                        <td>ชื่อบัญชี</td>
                        <td>ยอดคงเหลือ </td>
                        <td>ยอดที่ถอนได้ </td>
                    </tr>
                </thead>
                <?php if ($result->result() == null) { ?>
                            <td colspan="4" align="center">ไม่มียอดเงินในบัญชี</td>
                        <?php  } ?>
                <?php foreach ($result->result() as $row) { ?>
                    <tr align="center">
                        <td><?= BankAccount($row->ACCOUNT_NO)   ?></td>
                        <td><?= $row->ACCOUNT_NAME ?></td>
                        <td><?= $row->BALANCE ?></td>
                        <td><?= $row->AVAILABLE ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>