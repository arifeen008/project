<div class="col-lg-9">
    <div class="col-12" id="main">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">รายชื่อสมาชิกที่ค้นหา</h1>
        </div>
        <div class="col">
            <div class="card border-success">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr align="center">
                                <td>ที่</td>
                                <td>ชื่อ</td>
                                <td>นามสกุล</td>
                                <td>สาขา</td>
                                <td></td>
                            </tr>
                        </thead>
                        <?php if ($result->result() == null) { ?>
                            <td colspan="4" align="center">ไม่มีข้อมูล</td>
                        <?php  } ?>
                        <?php $i = 1 ?>
                        <?php foreach ($result->result() as $row) { ?>
                            <tr align="center">
                                <td><?=  $i++ ?></td>
                                <td><?= $row->FNAME ?></td>
                                <td><?= $row->LNAME ?></td>
                                <td><?= $row->BR_NAME; ?></td>
                                <td><a href="<?php echo site_url('manager/datashare_member/' . $row->MEM_ID . '/' . $row->BR_NO) ?>" class="btn btn-success">ดูข้อมูล</a></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>