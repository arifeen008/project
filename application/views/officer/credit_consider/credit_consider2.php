<main id="content" style="margin-top: 10px">
    <div class="container pt-4 pt-lg-5">
        <div class="card my-3" style="font-family: 'Sarabun';">
            <div class="card-body text-dark">
                <div class="d-flex justify-content-between align-items-center border-bottom card-title ">
                    <h3>พิจารณาสินเชื่อ 2</h3>
                </div>
                <table class="table table-bordered text-center">
                    <thead class="bg-light">
                        <tr>

                            <th>mem_id</th>
                            <th>fname</th>
                            <th>lnumber_id</th>
                            <th>loan_year</th>
                            <th>branch_id</th>
                            <th>loan_id</th>
                            <th>date</th>
                            <th>status</th>
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
                            <td><?= $row->status  ?></td>
                            <td><a href="<?php echo site_url('officer/credit_consider_detail/' . $row->credit_id) ?>" class="btn btn-outline-success" data-mdb-ripple-color="success">ดูรายละเอียด</button></td>
                        </tr>
                    <?php  } ?>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
