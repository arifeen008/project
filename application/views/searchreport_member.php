<div class="col-lg-9">
    <div class="col-12">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>สวัสดิการสมาชิก</h1>
        </div>
        <table class="table table-striped">
            <thead>
                <tr align="center">
                    <td>สาขา</td>
                    <td>ชื่อ - สกุล</td>
                    <td>จำนวนเงินหุ้น</td>
                    <td>จำนวนเงินฝาก</td>
                    <td>เบอร์โทร</td>
                </tr>
            </thead>
            <?php foreach ($result->result() as $row) { ?>
                <tr align="center">
                    <td><?= $row->BR_NAME ?></td>
                    <td><?= $row->FNAME ?>&nbsp;&nbsp; <?= $row->LNAME ?></td>
                    <td><?= number_format($row->SHR_SUM_BTH, 2) ?></td>
                    <td><?= number_format($row->BALANCE, 2) ?></td>
                    <td><?= $row->MOBILE_TEL ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>