<div class="col-lg-9">
    <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>สมาชิกเข้าใหม่ - ลาออกประจำเดือน</h1>
    </div>
    <form action="<?php echo site_url('manager/monthly_inout') ?>" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="select_month">เดือน</label>
                        <select class="form-control" id="select_month" name="select_month">
                            <option value="1">มกราคม</option>
                            <option value="2">กุมภาพันธ์</option>
                            <option value="3">มีนาคม</option>
                            <option value="4">เมษายน</option>
                            <option value="5">พฤษภาคม</option>
                            <option value="6">มิถุนาคม</option>
                            <option value="7">กรกฏาคม</option>
                            <option value="8">สิงหาคม</option>
                            <option value="9">กันยายน</option>
                            <option value="10">ตุลาคม</option>
                            <option value="11">พฤษจิกายน</option>
                            <option value="12">ธันวาคม</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="select_year">ปี</label>
                        <select class="form-control" id="select_year" name="select_year">
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
        <h1>ทุนเรือนหุ้นประจำเดือน</h1>
    </div>
    <form action="<?php echo site_url('manager/monthly_share_capital') ?>" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="select_month">เดือน</label>
                        <select class="form-control" id="select_month" name="select_month">
                            <option value="01">มกราคม</option>
                            <option value="02">กุมภาพันธ์</option>
                            <option value="03">มีนาคม</option>
                            <option value="04">เมษายน</option>
                            <option value="05">พฤษภาคม</option>
                            <option value="06">มิถุนาคม</option>
                            <option value="07">กรกฏาคม</option>
                            <option value="08">สิงหาคม</option>
                            <option value="09">กันยายน</option>
                            <option value="10">ตุลาคม</option>
                            <option value="11">พฤษจิกายน</option>
                            <option value="12">ธันวาคม</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="select_year">ปี</label>
                        <select class="form-control" id="select_year" name="select_year">
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
        <h1>บัญชีเงินฝากประจำเดือน(เลือกประเภท)</h1>
    </div>
    <form action="<?php echo site_url('manager/monthly_deposit_account_type') ?>" method="post">
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
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="select_month">เดือน</label>
                        <select class="form-control" id="select_month" name="select_month">
                            <option value="01">มกราคม</option>
                            <option value="02">กุมภาพันธ์</option>
                            <option value="03">มีนาคม</option>
                            <option value="04">เมษายน</option>
                            <option value="05">พฤษภาคม</option>
                            <option value="06">มิถุนาคม</option>
                            <option value="07">กรกฏาคม</option>
                            <option value="08">สิงหาคม</option>
                            <option value="09">กันยายน</option>
                            <option value="10">ตุลาคม</option>
                            <option value="11">พฤษจิกายน</option>
                            <option value="12">ธันวาคม</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="select_year">ปี</label>
                        <select class="form-control" id="select_year" name="select_year">
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
        <h1>บัญชีเงินฝากประจำเดือน(เลือกสาขา)</h1>
    </div>

    <form action="<?php echo site_url('manager/monthly_deposit_account_branch') ?>" method="post">
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
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="select_month">เดือน</label>
                        <select class="form-control" id="select_month" name="select_month">
                            <option value="01">มกราคม</option>
                            <option value="02">กุมภาพันธ์</option>
                            <option value="03">มีนาคม</option>
                            <option value="04">เมษายน</option>
                            <option value="05">พฤษภาคม</option>
                            <option value="06">มิถุนาคม</option>
                            <option value="07">กรกฏาคม</option>
                            <option value="08">สิงหาคม</option>
                            <option value="09">กันยายน</option>
                            <option value="10">ตุลาคม</option>
                            <option value="11">พฤษจิกายน</option>
                            <option value="12">ธันวาคม</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="select_year">ปี</label>
                        <select class="form-control" id="select_year" name="select_year">
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
        <h1>สินเชื่อรับจ่ายประจำเดือน</h1>
    </div>
    <form action="<?php echo site_url('manager/monthly_credit') ?>" method="post">
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
                        <label for="select_month">เดือน</label>
                        <select class="form-control" id="select_month" name="select_month">
                            <option value="01">มกราคม</option>
                            <option value="02">กุมภาพันธ์</option>
                            <option value="03">มีนาคม</option>
                            <option value="04">เมษายน</option>
                            <option value="05">พฤษภาคม</option>
                            <option value="06">มิถุนาคม</option>
                            <option value="07">กรกฏาคม</option>
                            <option value="08">สิงหาคม</option>
                            <option value="09">กันยายน</option>
                            <option value="10">ตุลาคม</option>
                            <option value="11">พฤษจิกายน</option>
                            <option value="12">ธันวาคม</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="select_year">ปี</label>
                        <select class="form-control" id="select_year" name="select_year">
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
        <h1>สินเชื่อรับจ่ายประจำเดือน (รวมสาขา)</h1>
    </div>

    <form action="<?php echo site_url('manager/monthly_credit_allbranch') ?>" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="select_month">เดือน</label>
                        <select class="form-control" id="select_month" name="select_month">
                            <option value="01">มกราคม</option>
                            <option value="02">กุมภาพันธ์</option>
                            <option value="03">มีนาคม</option>
                            <option value="04">เมษายน</option>
                            <option value="05">พฤษภาคม</option>
                            <option value="06">มิถุนาคม</option>
                            <option value="07">กรกฏาคม</option>
                            <option value="08">สิงหาคม</option>
                            <option value="09">กันยายน</option>
                            <option value="10">ตุลาคม</option>
                            <option value="11">พฤษจิกายน</option>
                            <option value="12">ธันวาคม</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="select_year">ปี</label>
                        <select class="form-control" id="select_year" name="select_year">
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
        <h1>สินเชื่อประจำเดือน</h1>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="<?php echo site_url('manager/credit_branch') ?>" method="post">
                <div class="form-group">
                    <h3>แยกสาขา ทุกประเภท</h3>
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
                                <label for="select_month">เดือน</label>
                                <select class="form-control" id="select_month" name="select_month">
                                    <option value="01">มกราคม</option>
                                    <option value="02">กุมภาพันธ์</option>
                                    <option value="03">มีนาคม</option>
                                    <option value="04">เมษายน</option>
                                    <option value="05">พฤษภาคม</option>
                                    <option value="06">มิถุนาคม</option>
                                    <option value="07">กรกฏาคม</option>
                                    <option value="08">สิงหาคม</option>
                                    <option value="09">กันยายน</option>
                                    <option value="10">ตุลาคม</option>
                                    <option value="11">พฤษจิกายน</option>
                                    <option value="12">ธันวาคม</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mb-2">ค้นหา</button>
            </form>
            <form action="<?php echo site_url('manager/credit_allbranch') ?>" method="post">
                <h3>รวมสาขา ทุกประเภท</h3>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="select_month">เดือน</label>
                                <select class="form-control" id="select_month" name="select_month">
                                    <option value="01">มกราคม</option>
                                    <option value="02">กุมภาพันธ์</option>
                                    <option value="03">มีนาคม</option>
                                    <option value="04">เมษายน</option>
                                    <option value="05">พฤษภาคม</option>
                                    <option value="06">มิถุนาคม</option>
                                    <option value="07">กรกฏาคม</option>
                                    <option value="08">สิงหาคม</option>
                                    <option value="09">กันยายน</option>
                                    <option value="10">ตุลาคม</option>
                                    <option value="11">พฤษจิกายน</option>
                                    <option value="12">ธันวาคม</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mb-2">ค้นหา</button>
            </form>
            <form action="<?php echo site_url('manager/credit_type_allbranch') ?>" method="post">
                <h3>แยกประเภททุกสาขา</h3>
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
                                    <option value="1">พิเศษ</option>
                                    <option value="1">ฉุกเฉิน</option>
                                    <option value="1">สามัญ</option>
                                    <option value="1">เจ้าหน้าที่</option>
                                    <option value="2">สามัญฉุกเฉิน</option>
                                    <option value="2">โครงการ</option>
                                    <option value="3">โครงการสินทรัพย์</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="select_month">เดือน</label>
                                <select class="form-control" id="select_month" name="select_month">
                                    <option value="01">มกราคม</option>
                                    <option value="02">กุมภาพันธ์</option>
                                    <option value="03">มีนาคม</option>
                                    <option value="04">เมษายน</option>
                                    <option value="05">พฤษภาคม</option>
                                    <option value="06">มิถุนาคม</option>
                                    <option value="07">กรกฏาคม</option>
                                    <option value="08">สิงหาคม</option>
                                    <option value="09">กันยายน</option>
                                    <option value="10">ตุลาคม</option>
                                    <option value="11">พฤษจิกายน</option>
                                    <option value="12">ธันวาคม</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mb-2">ค้นหา</button>
            </form>
        </div>
    </div>

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
                            <option value="">ฉุกเฉิน</option>
                            <option value="">สามัญ</option>
                            <option value="">พิเศษ</option>
                            <option value="">โครงการ</option>
                            <option value="">สามัญฉุกเฉิน</option>
                            <option value="">โครงการสินทรัพย์</option>
                            <option value="">เจ้าหน้าที่</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="select_month">เดือน</label>
                        <select class="form-control" id="select_month" name="select_month">
                            <option value="">มกราคม</option>
                            <option value="">กุมภาพันธ์</option>
                            <option value="">มีนาคม</option>
                            <option value="">เมษายน</option>
                            <option value="">พฤษภาคม</option>
                            <option value="">มิถุนาคม</option>
                            <option value="">กรกฏาคม</option>
                            <option value="">สิงหาคม</option>
                            <option value="">กันยายน</option>
                            <option value="">ตุลาคม</option>
                            <option value="">พฤษจิกายน</option>
                            <option value="">ธันวาคม</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="select_year">ปี</label>
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
    </form> -->

    <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>รายงานแยกชั้นลูกหนี้</h1>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="<?php echo site_url('manager/deptor_branch_report') ?>" method="post">
                <div class="form-group">
                    <h3>แยกสาขา ทุกประเภท</h3>
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
                                <label for="select_month">เดือน</label>
                                <select class="form-control" id="select_month" name="select_month">
                                    <option value="01">มกราคม</option>
                                    <option value="02">กุมภาพันธ์</option>
                                    <option value="03">มีนาคม</option>
                                    <option value="04">เมษายน</option>
                                    <option value="05">พฤษภาคม</option>
                                    <option value="06">มิถุนาคม</option>
                                    <option value="07">กรกฏาคม</option>
                                    <option value="08">สิงหาคม</option>
                                    <option value="09">กันยายน</option>
                                    <option value="10">ตุลาคม</option>
                                    <option value="11">พฤษจิกายน</option>
                                    <option value="12">ธันวาคม</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mb-2">ค้นหา</button>
            </form>
            <form action="<?php echo site_url('manager/deptor_allbranch_report') ?>" method="post">
                <h3>รวมสาขา ทุกประเภท</h3>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="select_month">เดือน</label>
                                <select class="form-control" id="select_month" name="select_month">
                                    <option value="01">มกราคม</option>
                                    <option value="02">กุมภาพันธ์</option>
                                    <option value="03">มีนาคม</option>
                                    <option value="04">เมษายน</option>
                                    <option value="05">พฤษภาคม</option>
                                    <option value="06">มิถุนาคม</option>
                                    <option value="07">กรกฏาคม</option>
                                    <option value="08">สิงหาคม</option>
                                    <option value="09">กันยายน</option>
                                    <option value="10">ตุลาคม</option>
                                    <option value="11">พฤษจิกายน</option>
                                    <option value="12">ธันวาคม</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mb-2">ค้นหา</button>
            </form>
            <form action="<?php echo site_url('manager/deptor_typeallbranch_report') ?>" method="post">
                <h3>แยกประเภททุกสาขา</h3>
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
                                    <option value="1">พิเศษ</option>
                                    <option value="1">ฉุกเฉิน</option>
                                    <option value="1">สามัญ</option>
                                    <option value="1">เจ้าหน้าที่</option>
                                    <option value="2">สามัญฉุกเฉิน</option>
                                    <option value="2">โครงการ</option>
                                    <option value="3">โครงการสินทรัพย์</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="select_month">เดือน</label>
                                <select class="form-control" id="select_month" name="select_month">
                                    <option value="01">มกราคม</option>
                                    <option value="02">กุมภาพันธ์</option>
                                    <option value="03">มีนาคม</option>
                                    <option value="04">เมษายน</option>
                                    <option value="05">พฤษภาคม</option>
                                    <option value="06">มิถุนาคม</option>
                                    <option value="07">กรกฏาคม</option>
                                    <option value="08">สิงหาคม</option>
                                    <option value="09">กันยายน</option>
                                    <option value="10">ตุลาคม</option>
                                    <option value="11">พฤษจิกายน</option>
                                    <option value="12">ธันวาคม</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mb-2">ค้นหา</button>
            </form>
        </div>
    </div>

    <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>รายงานรับ-จ่าย อื่นๆ ประจำเดือน</h1>
    </div>

    <form action="#" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="select_month">เดือน</label>
                        <select class="form-control" id="select_month" name="select_month">
                            <option value="">มกราคม</option>
                            <option value="">กุมภาพันธ์</option>
                            <option value="">มีนาคม</option>
                            <option value="">เมษายน</option>
                            <option value="">พฤษภาคม</option>
                            <option value="">มิถุนาคม</option>
                            <option value="">กรกฏาคม</option>
                            <option value="">สิงหาคม</option>
                            <option value="">กันยายน</option>
                            <option value="">ตุลาคม</option>
                            <option value="">พฤษจิกายน</option>
                            <option value="">ธันวาคม</option>
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
        <h1>รายงานหุ้นและเงินฝากทุกสาขาประจำเดือน</h1>
    </div>

    <form action="#" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="select_month">เดือน</label>
                        <select class="form-control" id="select_month" name="select_month">
                            <option value="">มกราคม</option>
                            <option value="">กุมภาพันธ์</option>
                            <option value="">มีนาคม</option>
                            <option value="">เมษายน</option>
                            <option value="">พฤษภาคม</option>
                            <option value="">มิถุนาคม</option>
                            <option value="">กรกฏาคม</option>
                            <option value="">สิงหาคม</option>
                            <option value="">กันยายน</option>
                            <option value="">ตุลาคม</option>
                            <option value="">พฤษจิกายน</option>
                            <option value="">ธันวาคม</option>
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
</div>