<div class="col-lg-9">
    <div class="col-12" id="main">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
            <h1>รายชื่อสมาชิกที่ค้นหา</h1>
        </div>
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th>ที่</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>สาขา</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($result->result() as $row) { ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $row->FNAME ?></td>
                        <td><?= $row->LNAME ?></td>
                        <td><?= $row->BR_NAME; ?></td>
                        <td><a href="<?php echo site_url('officer/seedata_member/' . $row->MEM_ID . '/' . $row->BR_NO) ?>" class="btn btn-success">ดูข้อมูล</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>