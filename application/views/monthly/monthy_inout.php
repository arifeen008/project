<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>
<div class="col-lg-9">
    <div class="col-12" id="main">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>รายงานข้อมูลสมาชิกทุนเรือนหุ้น</h1>
        </div>
        <div class="col">
            <div class="card border-success">
                <div class="card-body">
                    <table class="table table-bordered border border-success">
                        <tr>
                            <td align="center" rowspan="2"><br>รหัสสาขา</td>
                            <td align="center" rowspan="2"><br>สาขา</td>
                            <td align="center" colspan="5">ข้อมูลสมาชิก</td>
                        </tr>
                        <tr align="center">

                            <td>ยกมา(คน)</td>
                            <td>ลด(คน)</td>
                            <td>เพิ่ม(คน)</td>
                            <td>ยกไป(คน)</td>
                            <td>ผลต่าง(คน)</td>
                        </tr>
                        <?php foreach ($result->result() as $row) { ?>
                            <tr align="center">
                                <td><?= $row->BR_NO ?></td>
                                <td><?= $row->BR_NAME ?></td>
                                <td><?= number_format($row->mem_number) ?></td>
                                <td><?= number_format($row->mem_number) ?></td>
                                <td><?= number_format($row->mem_number) ?></td>
                                <td><?= number_format($row->mem_number) ?></td>
                                <td><?= number_format($row->mem_number) ?></td>
                            </tr>
                        <?php } ?>
                        <tr align="center">
                            <td colspan="2">รวม</td>
                            <td><?= number_format($summary->sum_member) ?></td>
                            <td><?= number_format($summary->sum_member) ?></td>
                            <td><?= number_format($summary->sum_member) ?></td>
                            <td><?= number_format($summary->sum_member) ?></td>
                            <td><?= number_format($summary->sum_member) ?></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>