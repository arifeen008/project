<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>สวัสดิการสมาชิก</h1>
    </div>
    <table class="table table-striped">
        <thead>
            <tr align="center">
                <td>เลขสมาชิก</td>
                <td>สาขา</td>
                <td>วันครบกำหนดต่อตะกาฟุล</td>
            </tr>
        </thead>
        <tbody>
            <tr align="center">
                <td><?= $result->MEM_ID ?></td>
                <td><?= $result->BR_NAME ?></td>
                <td><?php echo thaidate('j M Y', strtotime($result->EXCHG_DATE))  ?> </td>
            </tr>
        </tbody>
    </table>
</div>