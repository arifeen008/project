<div class="col-lg-9">
    <div class="col-12">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>รายงานสมาชิกหุ้น</h1>
        </div>
        <p align="right"><a href="<?php echo site_url('officer/reportexcel_member_allbranch/' . $variable['start'] . '/' . $variable['to']) ?>" class="btn btn-success mb-2">ดูไฟล์ Excel</a></p>
        <table class="table" id="myTable">
            <thead>
                <tr align="center">
                    <th>สาขา</th>
                    <th>ชื่อ</td>
                    <th>สกุล</ttd>
                    <th>จำนวนเงินหุ้น</th>
                    <th>จำนวนเงินฝาก</th>
                    <th>เบอร์โทร</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result->result() as $row) { ?>
                    <tr align="center">
                        <td><?= $row->BR_NAME ?></td>
                        <td><?= $row->FNAME ?></td>
                        <td><?= $row->LNAME ?></td>
                        <td><?= number_format($row->SHR_SUM_BTH, 2) ?></td>
                        <td><?= number_format($row->BALANCE, 2) ?></td>
                        <td><?= $row->MOBILE_TEL ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>