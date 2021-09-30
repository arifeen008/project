<div class="col-lg-9">
    <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>สมาชิกเข้าใหม่ - ลาออกประจำปี</h1>
    </div>
    <form action="<?php echo site_url('manager/yearly_inout') ?>" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="select_year">ประจำปีบัญชี</label>
                        <select class="form-control" id="select_year" name="select_year">
                            <option value="2022">2565</option>
                            <option value="2021">2564</option>
                            <option value="2020">2563</option>
                            <option value="2019">2562</option>
                            <option value="2018">2561</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mb-2">ค้นหา</button>
    </form>

    <!-- <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>สมาชิกเข้าใหม่ - ลาออกใหม่ประจำปี สรุปรายปี</h1>
    </div>
    <form action="<?php echo site_url('manager/yearly_summarymember') ?>" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="branch_number">สาขา</label>
                        <select class="form-control" id="branch_number" name="branch_number">
                            <option value="000">สาขาสำนักงานใหญ่</option>
                            <option value="001">สาขากระบี่</option>
                            <option value="002">สาขาคลองยาง</option>
                            <option value="003">สาขาอ่าวลึก</option>
                            <option value="004">สาขากาญจนดิษฐ์</option>
                            <option value="005">สาขาคลองท่อม</option>
                            <option value="006">สาขาอ่าวนาง</option>
                            <option value="007">สาขาห้วยลึก</option>
                            <option value="008">สาขาเกาะลันตา</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="select_year">ประจำปีบัญชี</label>
                        <select class="form-control" id="select_year" name="select_year">
                            <option value="2022">2565</option>
                            <option value="2021">2564</option>
                            <option value="2020">2563</option>
                            <option value="2019">2562</option>
                            <option value="2018">2561</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mb-2">ค้นหา</button>
    </form> -->

    <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>ทุนเรือนหุ้นประจำปี</h1>
    </div>
    <form action="<?php echo site_url('manager/yearly_share_capital') ?>" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="select_year">ประจำปีบัญชี</label>
                        <select class="form-control" id="select_year" name="select_year">
                            <option value="2022">2565</option>
                            <option value="2021">2564</option>
                            <option value="2020">2563</option>
                            <option value="2019">2562</option>
                            <option value="2018">2561</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mb-2">ค้นหา</button>
    </form>

    <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>บัญชีเงินฝากประจำปี(เลือกประเภท)</h1>
    </div>
    <form action="<?php echo site_url('manager/yearly_deposit_account_type') ?>" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="account_type">ประเภทบัญชี</label>
                        <select class="form-control" id="account_type" name="account_type">
                            <option value="04">เพื่อการศึกษา</option>
                            <option value="02">วาดีอะห์</option>
                            <option value="03">มูฏอรอบะห์</option>
                            <option value="05">กองทุนฮัจญ์</option>
                            <option value="06">อิสติกอมะฮ 3</option>
                            <option value="07">อิสติกอมะฮ 12</option>
                            <option value="08">ยุวษะกอฟะฮ</option>
                            <option value="10">กุรบาน</option>
                            <option value="11">วาดีอะห์ ATM</option>
                            <option value="12">อิสติกอมะฮ 24</option>
                            <option value="09">อิสติกอมะฮ 6</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="select_year">ประจำปีบัญชี</label>
                        <select class="form-control" id="select_year" name="select_year">
                            <option value="">2565</option>
                            <option value="">2564</option>
                            <option value="">2563</option>
                            <option value="">2562</option>
                            <option value="">2561</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mb-2">ค้นหา</button>
    </form>


    <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>บัญชีเงินฝากประจำปี(เลือกสาขา)</h1>
    </div>

    <form action="<?php echo site_url('manager/yearly_deposit_account_branch') ?>" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="branch_number">สาขา</label>
                        <select class="form-control" id="branch_number" name="branch_number">
                            <option value="000">สาขาสำนักงานใหญ่</option>
                            <option value="001">สาขากระบี่</option>
                            <option value="002">สาขาคลองยาง</option>
                            <option value="003">สาขาอ่าวลึก</option>
                            <option value="004">สาขากาญจนดิษฐ์</option>
                            <option value="005">สาขาคลองท่อม</option>
                            <option value="006">สาขาอ่าวนาง</option>
                            <option value="007">สาขาห้วยลึก</option>
                            <option value="008">สาขาเกาะลันตา</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="select_year">ประจำปีบัญชี</label>
                        <select class="form-control" id="select_year" name="select_year">
                            <option value="2022">2565</option>
                            <option value="2021">2564</option>
                            <option value="2020">2563</option>
                            <option value="2019">2562</option>
                            <option value="2018">2561</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mb-2">ค้นหา</button>
    </form>


    <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>สินเชื่อประจำปี (เลือกประเภท)</h1>
    </div>

    <form action="<?php echo site_url('manager/yearly_credit') ?>" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="main_type">ประเภทหลัก</label>
                        <select class="form-control" id="main_type" name="main_type">
                            <option value="1">ฉุกเฉิน</option>
                            <option value="2">สามัญ</option>
                            <option value="3">พิเศษ</option>
                            <option value="4">สวัสดิการ</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="sub_type">ประเภทย่อย</label>
                        <select class="form-control" id="sub_type" name="sub_type">
                            <option value="1">1 - พิเศษ</option>
                            <option value="1">1 - ฉุกเฉิน</option>
                            <option value="1">1 - สามัญ</option>
                            <option value="1">1 - เจ้าหน้าที่</option>
                            <option value="2">2 - สามัญฉุกเฉิน</option>
                            <option value="2">2 - โครงการ</option>
                            <option value="3">3 - โครงการสินทรัพย์</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="select_year">ประจำปีบัญชี</label>
                        <select class="form-control" id="select_year" name="select_year">
                            <option value="2022">2565</option>
                            <option value="2021">2564</option>
                            <option value="2020">2563</option>
                            <option value="2019">2562</option>
                            <option value="2018">2561</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mb-2">ค้นหา</button>
    </form>


    <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>สินเชื่อทุกสาขาประจำปี </h1>
    </div>

    <form action="<?php echo site_url('manager/yearly_credit_allbranch') ?>" method="post">

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="select_year">ประจำปีบัญชี</label>
                        <select class="form-control" id="select_year" name="select_year">
                            <option value="2022">2565</option>
                            <option value="2021">2564</option>
                            <option value="2020">2563</option>
                            <option value="2019">2562</option>
                            <option value="2018">2561</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mb-2">ค้นหา</button>
    </form>

    <!-- <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>ตารางวิเคราะห์รายได้สินเชื่อควรเข้ามา</h1>
    </div>

    <form action="#" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="main_type">ประเภทหลัก</label>
                        <select class="form-control" id="main_type" name="main_type">
                            <option value="">ฉุกเฉิน</option>
                            <option value="">สามัญ</option>
                            <option value="">พิเศษ</option>
                            <option value="">สวัสดิการ</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="sub_type">ประเภทย่อย</label>
                        <select class="form-control" id="sub_type" name="sub_type">
                            <option value="">พิเศษ</option>
                            <option value="">ฉุกเฉิน</option>
                            <option value="">สามัญ</option>
                            <option value="">เจ้าหน้าที่</option>
                            <option value="">สามัญฉุกเฉิน</option>
                            <option value="">โครงการ</option>
                            <option value="">โครงการสินทรัพย์</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="mem_id">ค้างชำระตั้งแต่ :</label>
                        <input class="form-control" type="number" name="start" min="0" max="20">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="mem_id">ถึง :</label>
                        <input class="form-control" type="number" name="end" min="0" max="20">
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mb-2">ค้นหา</button>
    </form> -->

    <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>รับ - จ่ายประจำปี</h1>
    </div>
    <form action="<?php echo site_url('manager/yearly_payment') ?>" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="select_year">ประจำปีบัญชี</label>
                        <select class="form-control" id="select_year" name="select_year">
                            <option value="2022">2565</option>
                            <option value="2021">2564</option>
                            <option value="2020">2563</option>
                            <option value="2019">2562</option>
                            <option value="2018">2561</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success mb-2">ค้นหา</button>
    </form>
    <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>รายงานหุ้นและเงินฝากทุกสาขาประจำปี</h1>
    </div>
    <form action="<?php echo site_url('manager/yearly_shared_deposit_report') ?>" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="select_year">ประจำปีบัญชี</label>
                        <select class="form-control" id="select_year" name="select_year">
                            <option value="2022">2565</option>
                            <option value="2021">2564</option>
                            <option value="2020">2563</option>
                            <option value="2019">2562</option>
                            <option value="2018">2561</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success mb-2">ค้นหา</button>
    </form>
</div>