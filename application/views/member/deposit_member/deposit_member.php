<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
    <div class="col-12" id="main">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>เงินฝาก</h1>
        </div>


        <table class="table table-striped">
            <thead>
                <tr align="center">
                    <td>ชื่อบัญชี</td>
                    <td>เลขบัญชี</td>
                    <td>ประเภทบัญชี</td>
                    <td>สาขา</td>
                    <td>ยอดเงินคงเหลือ</td>
                    <td></td>
                </tr>
            </thead>
            <?php foreach ($result->result() as $row) { ?>
                <tr>
                    <td align="center"><?= $row->ACCOUNT_NAME ?></td>
                    <td align="center"><?= BankAccount($row->ACCOUNT_NO) ?></td>
                    <td align="center"><?= $row->ACC_DESC ?></td>
                    <td align="center"><?= $row->BR_NAME ?></td>
                    <td align="center"><?= number_format($row->BALANCE, 2); ?></td>
                    <td><a href="<?php echo site_url('member/deposit_member_seedata/' . $row->ACCOUNT_NO . '')  ?>" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16">
                                <path fill-rule="evenodd" d="M1.679 7.932c.412-.621 1.242-1.75 2.366-2.717C5.175 4.242 6.527 3.5 8 3.5c1.473 0 2.824.742 3.955 1.715 1.124.967 1.954 2.096 2.366 2.717a.119.119 0 010 .136c-.412.621-1.242 1.75-2.366 2.717C10.825 11.758 9.473 12.5 8 12.5c-1.473 0-2.824-.742-3.955-1.715C2.92 9.818 2.09 8.69 1.679 8.068a.119.119 0 010-.136zM8 2c-1.981 0-3.67.992-4.933 2.078C1.797 5.169.88 6.423.43 7.1a1.619 1.619 0 000 1.798c.45.678 1.367 1.932 2.637 3.024C4.329 13.008 6.019 14 8 14c1.981 0 3.67-.992 4.933-2.078 1.27-1.091 2.187-2.345 2.637-3.023a1.619 1.619 0 000-1.798c-.45-.678-1.367-1.932-2.637-3.023C11.671 2.992 9.981 2 8 2zm0 8a2 2 0 100-4 2 2 0 000 4z"></path>
                            </svg></a>
                    <td>
                </tr>
            <?php } ?>
        </table>


    </div>
</div>