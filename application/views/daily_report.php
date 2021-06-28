<div class="col-lg-9">

    <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h1">รายงานสมาชิกประจำวัน</h1>
    </div>
    <form action="#" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="start">จาก :</label>
                    <input type="date" class="form-control" id="start" name="startdate" value="<?php echo date("Y-m-d"); ?>">
                </div>
                <div class="col">
                    <label for="end">ถึง :</label>
                    <input type="date" class="form-control" id="end" name="enddate" value="<?php echo date("Y-m-d"); ?>">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mb-2">ค้นหา</button>
    </form>

    <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h1">ทุนเรือนหุ้นประจำวัน</h1>
    </div>
    <form action="#" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="start">จาก :</label>
                    <input type="date" class="form-control" id="start" name="startdate" value="<?php echo date("Y-m-d"); ?>">
                </div>
                <div class="col">
                    <label for="end">ถึง :</label>
                    <input type="date" class="form-control" id="end" name="enddate" value="<?php echo date("Y-m-d"); ?>">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mb-2">ค้นหา</button>
    </form>

    <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h1">บัญชีเงินฝากประจำวัน(เลือกประเภท)</h1>
    </div>
    <form action="#" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="account_type">ประเภทบัญชี</label>
                        <select class="form-control" id="account_type" name="account_type">
                            <option value="">เพื่อการศึกษา</option>
                            <option value="">วาดีอะห์</option>
                            <option value="">มูฏอรอบะห์</option>
                            <option value="">กองทุนฮัจญ์</option>
                            <option value="">อิสติกอมะฮ 3</option>
                            <option value="">อิสติกอมะฮ 12</option>
                            <option value="">ยุวษะกอฟะฮ</option>
                            <option value="">กุรบาน</option>
                            <option value="">วาดีอะห์ ATM</option>
                            <option value="">อิสติกอมะฮ 24</option>
                            <option value="">อิสติกอมะฮ 6</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="start">จาก :</label>
                    <input type="date" class="form-control" id="start" name="startdate" value="<?php echo date("Y-m-d"); ?>">
                </div>
                <div class="col">
                    <label for="end">ถึง :</label>
                    <input type="date" class="form-control" id="end" name="enddate" value="<?php echo date("Y-m-d"); ?>">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mb-2">ค้นหา</button>
    </form>

    <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h1">บัญชีเงินฝากประจำวัน(เลือกสาขา)</h1>
    </div>

    <form action="#" method="post">
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
                    <label for="start">จาก :</label>
                    <input type="date" class="form-control" id="start" name="startdate" value="<?php echo date("Y-m-d"); ?>">
                </div>
                <div class="col">
                    <label for="end">ถึง :</label>
                    <input type="date" class="form-control" id="end" name="enddate" value="<?php echo date("Y-m-d"); ?>">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mb-2">ค้นหา</button>

    </form>


    <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h1">สินเชื่อประจำวัน</h1>
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
                            <option value="">1 - พิเศษ</option>
                            <option value="">1 - ฉุกเฉิน</option>
                            <option value="">1 - สามัญ</option>
                            <option value="">1 - เจ้าหน้าที่</option>
                            <option value="">2 - สามัญฉุกเฉิน</option>
                            <option value="">2 - โครงการ</option>
                            <option value="">3 - โครงการสินทรัพย์</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="start">จาก :</label>
                    <input type="date" class="form-control" id="start" name="startdate" value="<?php echo date("Y-m-d"); ?>">
                </div>
                <div class="col">
                    <label for="end">ถึง :</label>
                    <input type="date" class="form-control" id="end" name="enddate" value="<?php echo date("Y-m-d"); ?>">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mb-2">ค้นหา</button>
    </form>


    <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h1">สินเชื่อประจำวัน(รวมสาขา)</h1>
    </div>

    <form action="#" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="start">จาก :</label>
                    <input type="date" class="form-control" id="start" name="startdate" value="<?php echo date("Y-m-d"); ?>">
                </div>
                <div class="col">
                    <label for="end">ถึง :</label>
                    <input type="date" class="form-control" id="end" name="enddate" value="<?php echo date("Y-m-d"); ?>">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mb-2">ค้นหา</button>
    </form>


    <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h1">รับ-จ่ายประจำวัน</h1>
    </div>

    <form action="#" method="post">

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="start">จาก :</label>
                    <input type="date" class="form-control" id="start" name="startdate" value="<?php echo date("Y-m-d"); ?>">
                </div>
                <div class="col">
                    <label for="end">ถึง :</label>
                    <input type="date" class="form-control" id="end" name="enddate" value="<?php echo date("Y-m-d"); ?>">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mb-2">ค้นหา</button>
    </form>


    <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h1">หุ้นและเงินฝากทุกสาขาประจำวัน</h1>
    </div>

    <form action="#" method="post">

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="start">จาก :</label>
                    <input type="date" class="form-control" id="start" name="startdate" value="<?php echo date("Y-m-d"); ?>">
                </div>
                <div class="col">
                    <label for="end">ถึง :</label>
                    <input type="date" class="form-control" id="end" name="enddate" value="<?php echo date("Y-m-d"); ?>">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mb-2">ค้นหา</button>
    </form>

</div>