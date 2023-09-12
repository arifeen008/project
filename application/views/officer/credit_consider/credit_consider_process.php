<main id="content" style="margin-top: 10px">
    <div class="container pt-4 pt-lg-5">
        <div class="card my-3" style="font-family: 'Sarabun';">
            <div class="card-body text-dark">
                <div class="d-flex justify-content-between align-items-center border-bottom card-title ">
                    <h3>ประวัติ</h3>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <td>วันที่</td>
                            <td>สถานะ</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $row) { ?>
                            <tr>
                                <td><?= $row->date  ?></td>
                                <td><?= $row->status_name  ?></td>
                            </tr>
                        <?php  } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>