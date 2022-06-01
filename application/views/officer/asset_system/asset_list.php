<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
    <div class="card my-3">
        <div class="card-body text-dark">
            <div class="d-flex flex-row-reverse"><a href="<?php echo site_url('officer/upload_asset') ?>" class="btn btn-success"><i class="fas fa-plus me-2"></i>เพิ่มเอกสาร</a></div>
            <h5 class="card-title border-bottom">ผลการดำเนินงานประจำปี</h5>
            <div class="datatable" data-mdb-hover="true" data-mdb-full-pagination="true">
                <table>
                    <thead>
                        <tr>
                            <th>ประเภท</th>
                            <th>ชื่อ</th>
                            <th>รายละเอียด</th>
                            <th>วันที่</th>
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