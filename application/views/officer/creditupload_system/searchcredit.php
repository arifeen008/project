<div class="col-lg-9">
    <div class="card my-3">
        <div class="card-body text-dark">
            <div class="d-flex flex-row-reverse"><a href="<?php echo site_url('officer/uploadcreditfile') ?>" class="btn btn-success"><i class="fas fa-plus me-2"></i>อัพโหลดสินเชื่อ</a></div>
            <h5 class="card-title border-bottom">ค้นหาสินเชื่อ</h5>
            <form action="<?php echo site_url('officer/uploadcreditfile') ?>" method="post">
                <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" id="form14" class="form-control" data-mdb-showcounter="true" maxlength="6" placeholder="ใส่ตัวเลข 6 หลัก เช่น 00014" />
                            <label class="form-label" for="form14">เลขที่สัญญา</label>
                            <div class="form-helper"></div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <select class="select">
                            <option value="2564">2564</option>
                            <option value="2565">2565</option>
                        </select>
                        <label class="form-label select-label">ปีสัญญา</label>
                    </div>
                    <div class="col-md-6 mb-4">
                        <select class="select">
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
                        <select class="select">
                            <option value="shukshen">ฉุกเฉิน</option>
                            <option value="samanshukshen">สามัญฉุกเฉิน</option>
                            <option value="saman">สามัญ</option>
                            <option value="phisede">พิเศษ</option>
                            <option value="phisede">พิเศษโครงการ</option>
                            <option value="krongkarnsinsub">โครงการสินทรัพย์</option>
                            <option value="sawadekarnjaohnatee">สวัสดิการเจ้าหน้าที่</option>
                        </select>
                        <label class="form-label select-label">ประเภทสัญญา</label>
                    </div>
                    <button type="submit" class="btn btn-success btn-block mb-4"><i class="fas fa-search me-3"></i>ค้นหา</button>
                </div>
            </form>
        </div>
    </div>
</div>