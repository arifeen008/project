<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<main id="content" style="margin-top: 10px">
    <div class="container pt-4 pt-lg-5">
        <div class="card my-3">
            <div class="card-body text-dark">
                <div class="d-flex flex-row-reverse"><a href="<?php echo site_url('officer/upload_asset') ?>" class="btn btn-success"><i class="fas fa-plus me-2"></i>upload</a></div>
                <h5 class="card-title pb-2 border-bottom">สินทรัพย์</h5>
                <div class="datatable" data-mdb-bordered="true" data-mdb-striped="true">
                    <table>
                        <thead>
                            <tr>
                                <th data-mdb-sort="false">ประเภท</th>
                                <th data-mdb-sort="false">ชื่อ</th>
                                <th data-mdb-sort="false">รายละเอียด</th>
                                <th data-mdb-sort="false">วันที่</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($result as $row) { ?>
                                <tr>
                                    <td><?= $row->asset_name ?></td>
                                    <td><?= $row->title ?></td>
                                    <td><?= $row->description1 ?></td>
                                    <td><?= thaidate('j M Y ', strtotime($row->date)) ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>