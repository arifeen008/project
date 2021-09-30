<?php $i = 1; ?>

<div class="col-lg-9">
    <div class="col-12" id="main">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>รายงานสินเชื่อประจำปี รวมสาขา</h1>
        </div>
        <div class="col">

            <table class="table table-bordered">
                <tr>
                    <td align="center" rowspan="3"><br><br>ลำดับ</td>
                    <td align="center" rowspan="3"><br><br>ประเภทสินเชื่อ</td>
                    <td align="center" colspan="9">ประเภท</td>
                </tr>
                <tr align="center">
                    <td colspan="4">จ่ายเงินยืม</td>
                    <td colspan="5">รับชำระเงินยืม</td>
                </tr>
                <tr align="center">
                    <td>จำนวนสัญญา</td>
                    <td>เงินต้น</td>
                    <td>กำไร</td>
                    <td>รวม</td>
                    <td>จำนวนสัญญา</td>
                    <td>เงินต้น</td>
                    <td>กำไร</td>
                    <td>ส่วนลด</td>
                    <td>รวม</td>
                </tr>
                <?php foreach ($result->result() as $row) { ?>
                    <tr align="center">
                        <td><?= $i++ ?></td>
                        <td><?= $row->LSUB_NAME ?></td>
                        <td><?= $row->LCONT_ID ?></td>
                        <td><?= number_format($row->LCONT_APPROVE_SAL, 2) ?></td>
                        <td><?= number_format($row->LCONT_APPROVE_SAL, 2) ?></td>
                        <td><?= number_format($row->LCONT_APPROVE_SAL, 2) ?></td>
                        <td><?= number_format($row->LCONT_APPROVE_SAL, 2) ?></td>
                        <td><?= number_format($row->LCONT_APPROVE_SAL, 2) ?></td>
                        <td><?= number_format($row->LCONT_APPROVE_SAL, 2) ?></td>
                        <td><?= number_format($row->LCONT_APPROVE_SAL, 2) ?></td>
                        <td><?= number_format($row->LCONT_APPROVE_SAL, 2) ?></td>
                    </tr>

                <?php } ?>
                <tr align="center">
                    <td colspan="2">รวม</td>
                    <td><?= number_format($summary->LCONT_ID) ?></td>
                    <td><?= number_format($summary->LCONT_APPROVE_SAL, 2) ?></td>
                    <td><?= number_format($summary->LCONT_APPROVE_SAL, 2) ?></td>
                    <td><?= number_format($summary->LCONT_APPROVE_SAL, 2) ?></td>
                    <td><?= number_format($summary->LCONT_APPROVE_SAL, 2) ?></td>
                    <td><?= number_format($summary->LCONT_APPROVE_SAL, 2) ?></td>
                    <td><?= number_format($summary->LCONT_APPROVE_SAL, 2) ?></td>
                    <td><?= number_format($summary->LCONT_APPROVE_SAL, 2) ?></td>
                    <td><?= number_format($summary->LCONT_APPROVE_SAL, 2) ?></td>
                </tr>

            </table>
        </div>

    </div>
</div>