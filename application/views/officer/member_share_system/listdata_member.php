<div class="col-lg-9">
    <div class="col-12" id="main">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
            <h1>รายชื่อสมาชิกที่ค้นหา</h1>
        </div>
        <p align="right"><?php echo 'ผลการค้นหา  ' .  number_format($result->num_rows()) . ' รายการ' ?> </p>
        <div class="col">
            <table class="table table-hover">
                <thead>
                    <tr align="center">
                        <td>ลำดับ</td>
                        <td>ชื่อ</td>
                        <td>นามสกุล :</td>
                        <td>สาขา </td>
                        <td></td>
                    </tr>
                </thead>
                <?php if ($result->result() == null) { ?>
                    <td colspan="4" align="center">ไม่มีข้อมูล</td>
                <?php  } ?>
                <?php $i = 1 ?>
                <?php foreach ($result->result() as $row) { ?>
                    <tr align="center">
                        <td><?= $i++ ?></td>
                        <td><?= $row->FNAME ?></td>
                        <td><?= $row->LNAME ?></td>
                        <td><?= $row->BR_NAME; ?></td>
                        <td><a href="<?php echo site_url('officer/seedata_member/' . $row->MEM_ID . '/' . $row->BR_NO) ?>" class="btn btn-success">ดูข้อมูล</a></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>