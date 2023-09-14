<main id="content" style="margin-top: 10px">
    <div class="container pt-4 pt-lg-5">
        <div class="card my-3" style="font-family: 'Sarabun';">
            <div class="card-body text-dark">
                <div class="d-flex justify-content-between align-items-center border-bottom card-title ">
                    <h3>พิจารณาสินเชื่อ</h3>
                </div>
                <div class="d-flex flex-row-reverse me-3 my-3"><a href="<?php echo site_url('officer/uploadcredit_consider') ?>" class="btn btn-success"><i class="fas fa-plus me-2"></i>ส่งสินเชื่อ</a></div>
                <table class="table table-hover align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr class="text-center">
                            <th>รหัสสมาชิก</th>
                            <th>ชื่อ - สกุล</th>
                            <th>เลขสินเชื่อ</th>
                            <th>สาขา</th>
                            <th>ประเภท</th>
                            <th>วันที่</th>
                            <th>สถานะ</th>
                            <th>ติดตามสถานะ</th>
                            <th class="text-danger">หมายเหตุ*</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php foreach ($result as $row) { ?>
                        <tr class="text-center">
                            <td><?= $row->mem_id   ?></td>
                            <td><?= $row->fname . " " . $row->lname  ?></td>
                            <td><?= $row->lnumber_id   ?></td>
                            <td><?= $row->name_branch  ?></td>
                            <td><?= $row->credit_name  ?></td>
                            <td><?= $row->date  ?></td>
                            <td><?= $row->status_name  ?></td>
                            <td><a class="btn btn-outline-success" href="<?php echo site_url('officer/credit_consider_process/' . $row->credit_consider_id) ?>"><i class="fab fa-algolia"></i></a></td>
                            <td><?= $row->note ?></td>
                        </tr>
                    <?php  } ?>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>