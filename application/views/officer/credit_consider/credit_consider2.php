<main id="content" style="margin-top: 10px">
    <div class="container pt-4 pt-lg-5">
        <div class="card my-3" style="font-family: 'Sarabun';">
            <div class="card-body text-dark">
                <div class="d-flex justify-content-between align-items-center border-bottom card-title ">
                    <h3>พิจารณาสินเชื่อ 2</h3>
                </div>
                <table class="table table-hover align-middle mb-0 bg-white">
                    <thead class="bg-light text-center">
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
                    <tbody class="text-center">
                        <tr>
                            <?php foreach ($result as $row) { ?>
                        <tr>
                            <td><?= $row->mem_id   ?></td>
                            <td><?= $row->fname . " " . $row->lname  ?></td>
                            <td><?= $row->lnumber_id   ?></td>
                            <td><?= $row->loan_year  ?></td>
                            <td><?= $row->name_branch  ?></td>
                            <td><?= $row->credit_name  ?></td>
                            <td><?= $row->date  ?></td>
                            <td><?= $row->status_name  ?></td>
                            <td><a href="<?php echo site_url('officer/credit_consider_detail/' . $row->credit_consider_id) ?>" class="btn btn-outline-success" data-mdb-ripple-color="success">ดูรายละเอียด</button></td>
                        </tr>
                    <?php  } ?>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
