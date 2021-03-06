<div class="col-lg-9">
    <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>สอบถามยอดสินเชื่อในสมุดของบัญชี</h1>
    </div>
    <div class="card border-success">
        <form action="<?php echo site_url('officer/credit_officer') ?>" method="post">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <h6>เลขที่สมาชิก</h6>
                            <input class="form-control" type="text" name="mem_id" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <h6>สาขา</h6>
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
                <button type="submit" class="btn btn-success mb-2">ดึงข้อมูล</button>
            </div>
        </form>
    </div>

    <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>สอบถามยอดสินเชื่อที่ปิดแล้วในสมุดของบัญชี</h1>
    </div>
    <div class="card border-success">
        <form action="<?php echo site_url('officer/closed_credit_officer') ?>" method="post">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <h6>เลขที่สมาชิก</h6>
                            <input class="form-control" type="text" name="mem_id" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <h6>สาขา</h6>
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
                <button type="submit" class="btn btn-success mb-2">ดึงข้อมูล</button>
            </div>
        </form>
    </div>
</div>