<main id="content" style="margin-top: 10px">
    <div class="container pt-4 pt-lg-5">
        <div class="card my-3" style="font-family: 'Sarabun';">
            <div class="card-body text-dark">
                <div class="d-flex justify-content-between align-items-center border-bottom card-title ">
                    <h3>พิจารณาสินเชื่อ</h3>
                </div>
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert" role="alert" data-mdb-color="success">
                        <?= $this->session->flashdata('success') ?>
                    </div>
                <?php endif ?>
                <div class="d-flex flex-row-reverse me-3 my-3"><a href="<?php echo site_url('officer/uploadcredit_consider') ?>" class="btn btn-success"><i class="fas fa-plus me-2"></i>ส่งสินเชื่อ</a></div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <!-- <th>id</th> -->
                            <th>username</th>
                            <th>mem_id</th>
                            <th>fname</th>
                            <th>lnumber_id</th>
                            <!-- <th>loan_year</th> -->
                            <!-- <th>branch_id</th> -->
                            <!-- <th>loan_id</th> -->
                            <!-- <th>file_name</th> -->
                            <th>date</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php foreach ($result as $row) { ?>
                        <tr>
                            <!-- <td><?= $row->id ?></td> -->
                            <td><?= $row->username   ?></td>
                            <td><?= $row->mem_id   ?></td>
                            <td><?= $row->fname . " " . $row->lname  ?></td>
                            <td><?= $row->lnumber_id   ?></td>
                            <!-- <td><?= $row->loan_year  ?></td> -->
                            <!-- <td><?= $row->branch_id  ?></td> -->
                            <!-- <td><?= $row->loan_id  ?></td> -->
                            <!-- <td><?= $row->file_name  ?></td> -->
                            <td><?= $row->date  ?></td>
                            <td><?= $row->status  ?></td>
                        </tr>
                    <?php  } ?>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>