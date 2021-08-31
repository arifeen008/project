<div class="col-lg-9">
    <div class="col-12">
        <br><br><br><br>
        <div class="col">
            <table class="table table-hover">
                <thead>
                    <tr align="center">
                        <td>รหัสสมาชิก</td>
                        <td>ชื่อ</td>
                        <td>นามสกุล</td>
                        <td>สาขา</td>
                        <td></td>
                    </tr>
                </thead>
                <?php if ($result->result() == null) { ?>
                    <td colspan="4" align="center">ไม่มีข้อมูล</td>
                <?php  } ?>
                <?php foreach ($result->result() as $row) { ?>
                    <tr align="center">
                        <td><?= $row->MEM_ID ?></td>
                        <td><?= $row->FNAME ?></td>
                        <td><?= $row->LNAME ?></td>
                        <td><?= $row->BR_NAME; ?></td>
                        <td><a href="<?php echo site_url('officer/credit_officer/' . $row->MEM_ID . '/' . $row->BR_NO) ?>" class="btn btn-success">ดูข้อมูล</a></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>