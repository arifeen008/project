<div class="col-lg-9">
    <div class="card my-3">
        <div class="card-body text-dark">
            <div class="d-flex justify-content-between align-items-center border-bottom card-title ">
                <h5>อัพโหลดไฟล์สินเชื่อ</h5>
                <a href="<?php echo site_url('officer/creditupload_system') ?>" class="btn btn-success mb-3"><i class="fas fa-search me-2"></i>กลับหน้าค้นหา</a>
            </div>
        </div>
        <form action="<?php echo site_url('officer/uploadFileCredit') ?>" method="post" enctype="multipart/form-data">
            <div class="row mx-2">
                <div class="col-md-12 mb-4">
                    <div class="form-outline">
                        <input type="text" id="form14" class="form-control" minlength="5" maxlength="5" name="mem_id" />
                        <label class="form-label" for="form14">เลขที่สมาชิก</label>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="text" id="form14" class="form-control" name="fname" />
                        <label class="form-label" for="form14">ชื่อ</label>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="text" id="form14" class="form-control" name="lname" />
                        <label class="form-label" for="form14">นามสกุล</label>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
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
                        <option value="000">สำนักงานใหญ่</option>
                        <option value="001">กระบี่</option>
                        <option value="002">คลองยาง</option>
                        <option value="003">อ่าวลึก</option>
                        <option value="004">กาญจนดิษฐ์</option>
                        <option value="005">คลองท่อม</option>
                        <option value="006">อ่าวนาง</option>
                        <option value="007">ห้วยลึก</option>
                        <option value="008">เกาะลันตา</option>
                    </select>
                    <label class="form-label select-label">สาขา</label>
                </div>
                <div class="col-md-6 mb-4">
                    <select class="select" name="type">
                        <option value="1">ฉุกเฉิน</option>
                        <option value="2">สามัญฉุกเฉิน</option>
                        <option value="3">สามัญ</option>
                        <option value="4">พิเศษ</option>
                        <option value="5">พิเศษโครงการ</option>
                        <option value="6">โครงการสินทรัพย์</option>
                        <option value="7">สวัสดิการเจ้าหน้าที่</option>
                    </select>
                    <label class="form-label select-label">ประเภทสัญญา</label>
                </div>
                <div class="col-md-12 mb-4">
                    <label class="form-label" for="customFile">อัพโหลดไฟล์</label>
                    <input type="file" name="creditFile" class="form-control" id="customFile" accept=".pdf" />
                </div>
            </div>
            <button type="submit" class="btn btn-success ms-4 mb-3"><i class="fas fa-upload me-4"></i>อัพโหลดไฟล์</button>
        </form>
    </div>
</div>