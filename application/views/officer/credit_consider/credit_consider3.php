<main id="content" style="margin-top: 10px">
    <div class="container pt-4 pt-lg-5">
        <div class="card my-3" style="font-family: 'Sarabun';">
            <div class="card-body text-dark">
                <div class="d-flex justify-content-between align-items-center border-bottom card-title ">
                    <h3>พิจารณาสินเชื่อ 3</h3>
                </div>
                <table class="table table-bordered text-center">
                    <thead class="bg-light">
                        <tr>
                            <th>รหัสสมาชิก</th>
                            <th>ชื่อ-สกุล</th>
                            <th>เลขสินเชื่อ</th>
                            <th>ปี</th>
                            <th>สาขา</th>
                            <th>ประเภท</th>
                            <th>วันที่</th>
                            <th>สถานะ</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php foreach ($result as $row) { ?>
                        <tr>
                            <td><?= $row->mem_id   ?></td>
                            <td><?= $row->fname . " " . $row->lname  ?></td>
                            <td><?= $row->lnumber_id   ?></td>
                            <td><?= $row->loan_year  ?></td>
                            <td><?= $row->branch_id  ?></td>
                            <td><?= $row->loan_id  ?></td>
                            <td><?= $row->date  ?></td>
                            <td><a href="<?php echo site_url('officer/credit_consider_detail2/' . $row->credit_consider_id) ?>" class="btn btn-outline-success" data-mdb-ripple-color="success">ดูรายละเอียด</button></td>
                        </tr>
                    <?php  } ?>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>