<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
    <div class="col-12" id="main">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">สินเชื่อ คุณ <?php echo $name->FNAME ?> <?php echo $name->LNAME ?></h1>
        </div>

        <div class="row">
            <div class="col">
                <div class="card-body border-success">
                    <table class="table table-striped">
                        <thead>
                            <tr align="center">
                                <td>เลขที่สัญญา</td>
                                <td>ชื่อสัญญา</td>
                                <td>วันที่ทำสัญญา</td>
                                <td>วันที่หมดสัญญา</td>
                                <td>ยอดอนุมัติสินเชื่อ</td>
                                <td>จำนวนงวดคงเหลือ</td>
                                <td>ยอดคงเหลือ</td>
                                <td></td>
                            </tr>
                        </thead>
                        <?php if ($result->result() == null) { ?>
                            <td colspan="7" align="center">ไม่มีข้อมูลสินเชื่อ</td>
                        <?php  } ?>
                        <?php foreach ($result->result() as $row) { ?>
                            <tr align="center">
                                <td><?= $row->LCONT_ID ?></td>
                                <td><?php if ($row->L_TYPE_CODE === "1" && $row->LSUB_CODE === "1") {
                                        echo 'ฉุกเฉิน';
                                    } elseif ($row->L_TYPE_CODE === "2" && $row->LSUB_CODE === "1") {
                                        echo 'สามัญ ';
                                    } elseif ($row->L_TYPE_CODE === "3" && $row->LSUB_CODE === "1") {
                                        echo 'พิเศษ';
                                    } elseif ($row->L_TYPE_CODE === "3" && $row->LSUB_CODE === "2") {
                                        echo 'โครงการ';
                                    } elseif ($row->L_TYPE_CODE === "2" && $row->LSUB_CODE === "2") {
                                        echo 'สามัญฉุกเฉิน';
                                    } elseif ($row->L_TYPE_CODE === "3" && $row->LSUB_CODE === "3") {
                                        echo 'โครงการสินทรัพย์';
                                    } else {
                                        echo 'เจ้าหน้าที่';
                                    }
                                    ?>
                                </td>
                                <td><?= thaidate('j M Y ', strtotime($row->LCONT_DATE))  ?></td>
                                <td><?= thaidate('j M Y ', strtotime($row->END_PAYDEPT)) ?></td>
                                <td><?= number_format($row->LCONT_APPROVE_SAL, 2); ?> </td>
                                <td><?= $row->LCONT_AMOUNT_INST ?></td>
                                <td><?= number_format($row->LCONT_AMOUNT_SAL, 2);  ?></td>
                                <td><a href="<?php echo site_url('manager/credit_officer_detail/' . $row->CODE . '/' . $row->BR_NO)  ?>" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eyeglasses" viewBox="0 0 16 16">
                                            <path d="M4 6a2 2 0 1 1 0 4 2 2 0 0 1 0-4zm2.625.547a3 3 0 0 0-5.584.953H.5a.5.5 0 0 0 0 1h.541A3 3 0 0 0 7 8a1 1 0 0 1 2 0 3 3 0 0 0 5.959.5h.541a.5.5 0 0 0 0-1h-.541a3 3 0 0 0-5.584-.953A1.993 1.993 0 0 0 8 6c-.532 0-1.016.208-1.375.547zM14 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
                                        </svg></a></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
        <a href="<?php echo site_url('manager/checkcredit_officer/' . $name->MEM_ID . '/' . $name->BR_NO) ?>" class="btn btn-success btn-sm">สัญญาสินเชื่อที่ปิดไปแล้ว</a>
    </div>
</div>