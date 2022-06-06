<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
    <div class="card my-3">
    </div>
    <div class="card my-3">
        <h5 class="card-title text-dark">แบบฟอร์มฝ่ายบุคคล</h5>
        <div class="datatable" data-mdb-hover="true" data-mdb-full-pagination="true">
            <table>
                <thead>
                    <tr>
                        <th>ประกาศ</th>
                        <th>วันที่</th>
                        <th>ดาวน์โหลด</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $row) { ?>
                        <tr>
                            <td><?= $row->title ?></td>
                            <td><?= thaidate('j M Y ', strtotime($row->date))  ?></td>
                            <td><a href="<?php echo site_url('officer/download_form/' . $row->internal_id) ?>" class="btn btn-primary"><i class="fas fa-file-download"></i></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>