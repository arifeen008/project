<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
    <div class="col-12" id="main">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>เงินฝากพนักงานประจำวัน</h1>
        </div>
        <div class="col">
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <td>วันที่</td>
                        <td>เงินฝาก</td>
                        <td>เงินถอน </td>
                        <td>ยอดคงเหลือ </td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result->result() as $row) { ?>
                        <tr>
                            <td><?= thaidate('j M Y ', strtotime($row->F_DATE)) ?></td>
                            <td><?= number_format($row->F_DEP, 2) ?></td>
                            <td><?= number_format($row->F_WDL, 2) ?></td>
                            <td><?= number_format($row->F_BALANCE, 2) ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>