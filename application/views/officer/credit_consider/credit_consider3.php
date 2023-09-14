<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<main id="content" style="margin-top: 10px">
    <div class="container pt-4 pt-lg-5">
        <div class="card my-3" style="font-family: 'Sarabun';">
            <div class="card-body text-dark">
                <div class="d-flex justify-content-between align-items-center border-bottom card-title ">
                    <h3>พิจารณาสินเชื่อ 2</h3>
                </div>

                <table class="table table-hover align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                            <th>รหัสสมาชิก</th>
                            <th>ชื่อ - สกุล</th>
                            <th>เลขสินเชื่อ</th>
                            <th>วันที่</th>
                            <th>สถานะ</th>
                            <th>ติดตามสถานะ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $row) { ?>
                            <tr>
                                <td><?= $row->mem_id   ?></td>
                                <td><?= $row->fname . "  " . $row->lname  ?></td>
                                <td>
                                    <p class="fw-normal mb-1"><?= $row->lnumber_id   ?></p>
                                    <p class="fw-normal mb-1"><?= $row->name_branch  ?></p>
                                    <p class="fw-normal mb-1"><?= $row->credit_name  ?></p>
                                    <p class="fw-normal mb-0"><?= $row->loan_year  ?></p>
                                </td>
                                <td>
                                    <p><?= thaidate('j M Y ', strtotime($row->date)) ?></p>
                                    <p><?= thaidate('H:i', strtotime($row->date)) ?></p>
                                </td>
                                <td><?= $row->status_name  ?></td>
                                <td><a href="<?php echo site_url('officer/credit_consider_detail/' . $row->credit_consider_id) ?>" class="btn btn-outline-success" data-mdb-ripple-color="success">ดูรายละเอียด</button></td>
                                </td>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>