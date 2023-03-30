<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<main id="content" style="margin-top: 10px">
    <div class="container pt-4 pt-lg-5">
        <div class="card my-3" style="font-family: 'Sarabun';">
            <div class="card-body">
                <h2 class="card-title text-dark">แบบฟอร์มฝ่ายบุคคล</h2>
                <div class="datatable" data-mdb-borderless="true" data-mdb-sm="true">
                <table>
                    <thead>
                        <tr>
                            <th class="text-center">ประกาศ</th>
                            <th class="text-center">วันที่</th>
                            <th class="text-center">ดาวน์โหลด</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $row) { ?>
                            <tr>
                                <td><?= $row->title ?></td>
                                <td><?= thaidate('j M Y ', strtotime($row->date))  ?></td>
                                <td><a href="<?php echo site_url('officer/download_form/' . $row->internal_id) ?>" class="btn btn-outline-success btn-rounded" data-mdb-ripple-color="dark"><i class="fas fa-file-download"></i></a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>