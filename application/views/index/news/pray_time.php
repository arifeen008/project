<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php"); ?>
<div class="container mt-2">
    <table class="table table-hover table-bordered table-sm text-center">
        <thead>
            <tr>
                <td>วันที่</td>
                <td>Fajr</td>
                <td>Sunrise</td>
                <td>Dhuhr</td>
                <td>Asr</td>
                <td>Sunset</td>
                <td>Maghrib</td>
                <td>Isha</td>
                <td>Imsak</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pray_time->data as $row) { ?>
                <tr>
                    <td><?= thaidate('j M Y ', strtotime($row->date->readable)) ?></td>
                    <td><?= $row->timings->Fajr ?></td>
                    <td><?= $row->timings->Sunrise ?></td>
                    <td><?= $row->timings->Dhuhr ?></td>
                    <td><?= $row->timings->Asr ?></td>
                    <td><?= $row->timings->Sunset ?></td>
                    <td><?= $row->timings->Maghrib ?></td>
                    <td><?= $row->timings->Isha ?></td>
                    <td><?= $row->timings->Imsak ?></td>
                </tr>
            <?php  } ?>
        </tbody>
        <caption>
            <?php echo $pray_time->data[0]->meta->method->name  ?>
        </caption>
    </table>
</div>