<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
    <div class="col-12" id="main">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>เงินฝาก</h1>
        </div>

        <table class="table table-hover" id="myTable">
            <thead align="center">
                <tr>
                    <th>ชื่อบัญชี</th>
                    <th>เลขบัญชี</th>
                    <th>ประเภทบัญชี</th>
                    <th>สาขา</th>
                    <th>ยอดเงินคงเหลือ</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result->result() as $row) { ?>
                    <tr align="center">
                        <td><?= $row->ACCOUNT_NAME ?></td>
                        <td><?= BankAccount($row->ACCOUNT_NO) ?></td>
                        <td><?= $row->ACC_DESC ?></td>
                        <td><?= $row->BR_NAME ?></td>
                        <td><?= number_format($row->BALANCE, 2) ?></td>
                        <td><a href="<?php echo site_url('member/data_deposit_member/' . $row->ACCOUNT_NO)  ?>" class="btn btn-success">ดูข้อมูล</a><td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>