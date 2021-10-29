<div class="col-lg-9">
    <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>เงินฝากพนักงานประจำวัน</h1>
    </div>
    <div class="card border-success">
        <form action="<?php echo site_url('officer/depositreport_summary') ?>" method="post">
            <div class="card-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="start">จาก :</label>
                            <input type="date" class="form-control" id="start" name="startdate" value="<?php echo date("Y-m-d"); ?>">
                        </div>
                        <div class="col">
                            <label for="end">ถึง :</label>
                            <input type="date" class="form-control" id="end" name="enddate" value="<?php echo date("Y-m-d", strtotime("+1 day")); ?>" >
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mb-2">ดูข้อมูล</button>
            </div>

        </form>
    </div>

    <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>เงินฝากในบัญชีสมาชิก</h1>
    </div>
    <div class="card border-success">
        <form action="<?php echo site_url('officer/list_deposit_member') ?>" method="post">
            <div class="card-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="mem_id">เลขบัญชี :</label>
                            <input class="form-control" type="text" placeholder="เลขบัญชี..." name="account_number">
                        </div>
                        <div class="col">
                            <label for="mem_id">เลขสมาชิก :</label>
                            <input class="form-control" type="text" placeholder="เลขสมาชิก..." name="mem_id">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="mem_id">ชื่อ :</label>
                            <input class="form-control" type="text" placeholder="กรุณาใส่ชื่อ" name="fname">
                        </div>
                        <div class="col">
                            <label for="mem_id">นามสกุล :</label>
                            <input class="form-control" type="text" placeholder="กรุณาใส่นามสกุล" name="lname">
                        </div>
                    </div>
                    <br>
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
                </div>
                <button type="submit" class="btn btn-success mb-2">ค้นหา</button>
        </form>
    </div>
</div>