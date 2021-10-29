<div class="col-lg-9">
    <div class="col-12">
        <br><br><br><br>
        <div class="col">
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th>รหัสสมาชิก</ะ>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>สาขา</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result->result() as $row) { ?>
                        <tr>
                            <td><?= $row->MEM_ID ?></td>
                            <td><?= $row->FNAME ?></td>
                            <td><?= $row->LNAME ?></td>
                            <td><?= $row->BR_NAME ?></td>
                            <td><a href="<?php echo site_url('officer/credit_officer/' . $row->MEM_ID . '/' . $row->BR_NO) ?>" class="btn btn-success">ดูข้อมูล</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>