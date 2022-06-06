<div class="col-lg-9">
    <div class="card my-3">
        <div class="card-body text-dark">
            <div class="d-flex flex-row-reverse"><a href="<?php echo site_url('officer/uploadcreditfile') ?>" class="btn btn-success"><i class="fas fa-plus me-2"></i>อัพโหลดสินเชื่อ</a></div>
            <h5 class="card-title pb-2 border-bottom">ค้นหาสินเชื่อ</h5>
            <form action="<?php echo site_url('officer/searchcredit') ?>" method="post">
                <div class="row mt-4">
                    <div class="col-md-12 mb-4">
                        <div class="form-outline">
                            <input type="text" id="form14" class="form-control" minlength="5" maxlength="5" name="mem_id" />
                            <label class="form-label" for="form14">เลขที่สมาชิก</label>
                            <div class="form-helper"></div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <input type="text" id="form14" class="form-control" name="fname" />
                            <label class="form-label" for="form14">ชื่อ</label>
                            <div class="form-helper"></div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <input type="text" id="form14" class="form-control" name="lname" />
                            <label class="form-label" for="form14">นามสกุล</label>
                            <div class="form-helper"></div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <input type="text" name="lcon_id" id="form14" class="form-control" />
                            <label class="form-label" for="form14">เลขที่สัญญา</label>
                            <div class="form-helper"></div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <select class="select" name="year">
                            <option value="2564">2564</option>
                            <option value="2565">2565</option>
                        </select>
                        <label class="form-label select-label">ปีสัญญา</label>
                    </div>
                    <div class="col-md-6 mb-4">
                        <select class="select" name="branch">
                            <option value="klongyang">คลองยาง</option>
                            <option value="krabi">กระบี่</option>
                            <option value="aoluk">อ่าวลึก</option>
                            <option value="kohlanta">เกาะลันตา</option>
                            <option value="klongthom">คลองท่อม</option>
                            <option value="huyluk">ห้วยลึก</option>
                            <option value="karnjanadit">กาญจนดิษฐ์</option>
                        </select>
                        <label class="form-label select-label">สาขา</label>
                    </div>
                    <div class="col-md-6 mb-4">
                        <select class="select" name="type">
                            <option value="shukshen">ฉุกเฉิน</option>
                            <option value="samanshukshen">สามัญฉุกเฉิน</option>
                            <option value="saman">สามัญ</option>
                            <option value="phisede">พิเศษ</option>
                            <option value="phisedekrongkarn">พิเศษโครงการ</option>
                            <option value="krongkarnsinsub">โครงการสินทรัพย์</option>
                            <option value="sawadekarnjaohnatee">สวัสดิการเจ้าหน้าที่</option>
                        </select>
                        <label class="form-label select-label">ประเภทสัญญา</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-success"><i class="fas fa-search me-3"></i>ค้นหา</button>
            </form>
        </div>
    </div>
</div>