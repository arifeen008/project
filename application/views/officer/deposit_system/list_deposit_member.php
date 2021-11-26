<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
    <div class="col-12" id="main">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>ผลการค้นหา</h1>
        </div>
        <table class="table table-borderless table-hover" id="myTable">
            <thead>
                <tr align="center">
                    <th>ที่</th>
                    <th>สาขา</th>
                    <th>เลขสมาชิก</th>
                    <th>เลขบัญชี</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($result->result() as $row) { ?>
                    <tr align="center">
                        <td><?= $i++ ?></td>
                        <td><?= $row->BR_NAME ?></td>
                        <td><?= $row->MEM_ID ?></td>
                        <td><?= BankAccount($row->ACCOUNT_NO) ?></td>
                        <td><?= $row->FNAME ?></td>
                        <td><?= $row->LNAME ?></td>
                        <td><a href="<?php echo site_url('officer/deposit_member_detail/' . $row->ACCOUNT_NO)  ?>" class="btn btn-success"><i class="fas fa-eye"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
