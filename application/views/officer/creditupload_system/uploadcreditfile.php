<div class="col-lg-9">
    <div class="card my-3">
        <div class="card-body text-dark">
            <h5 class="card-title border-bottom">อัพโหลดไฟล์สินเชื่อ</h5>
            <form action="<?php echo site_url('officer/uploadFileCredit') ?>" method="post" enctype="multipart/form-data">
                <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" id="form14" class="form-control" name="lcon_id" data-mdb-showcounter="true" maxlength="6" minlength="6" placeholder="ใส่ตัวเลข 6 หลัก เช่น 00014" />
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
                    <div class="col-md-12 mb-4">
                        <label class="form-label" for="customFile">อัพโหลดไฟล์</label>
                        <input type="file" name="creditFile" class="form-control" id="customFile" />
                    </div>
                    <button type="submit" class="btn btn-success bg-gradient btn-block"><i class="fas fa-upload me-4"></i>อัพโหลดไฟล์</button>
                </div>
            </form>
        </div>
    </div>
</div>