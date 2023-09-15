<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<main id="content" style="margin-top: 10px">
    <div class="container pt-4 pt-lg-5">
        <div class="card my-3" style="font-family: 'Sarabun';">
            <div class="card-body text-dark">
                <div class="d-flex justify-content-between align-items-center border-bottom card-title ">
                    <h3>พิจารณาสินเชื่อ 3</h3>
                </div>

                <?php if ($result != NULL) { ?>
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
                                    <td><a href="<?php echo site_url('officer/credit_consider_detail2/' . $row->credit_consider_id) ?>" class="btn btn-outline-success" data-mdb-ripple-color="success"><i class="fas fa-eye"></i></button></td>
                                    </td>
                                </tr>
                            <?php  } ?>
                        </tbody>
                    </table>
                <?php } else { ?>
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title text-center">ไม่มีสินเชื่อ</h1>
                            <p class="text-center"><i class="far fa-clock fa-10x"></i></p>
                        </div>
                    </div>
                <?php   } ?>
            </div>
        </div>
    </div>
</main>