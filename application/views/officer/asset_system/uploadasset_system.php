<div class="col-lg-9">
    <div class="card my-3">
        <div class="card-body text-dark">
            <div class="d-flex justify-content-between align-items-center border-bottom card-title ">
                <h5>นำเข้าสินทรัพย์</h5>
            </div>
        </div>
        <form action="<?php echo site_url('officer/asset_upload') ?>" method="post" enctype="multipart/form-data">
            <div class="row mx-2 mb-2">
                <div class="col-md-12 mb-4">
                    <div class="form-outline">
                        <input type="text" id="form14" class="form-control" name="title" />
                        <label class="form-label" for="form14">หัวข้อ</label>
                        <div class="form-helper"></div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="text" id="form14" class="form-control" name="description1" />
                        <label class="form-label" for="form14">รายละเอียด 1</label>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="text" id="form14" class="form-control" name="description2" />
                        <label class="form-label" for="form14">รายละเอียด 2</label>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="text" id="form14" class="form-control" name="contact" />
                        <label class="form-label" for="form14">ติดต่อ</label>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <select class="select" name="asset_type">
                        <option value="1">บ้านพร้อมที่ดิน</option>
                        <option value="2">ที่ดินเปล่า</option>
                        <option value="3">คอนโด</option>
                    </select>
                    <label class="form-label select-label">ประเภท</label>
                </div>
                <div class="col-md-12 mb-4">
                    <label for="formFileMultiple" class="form-label">รูปภาพนำเข้า</label>
                    <input class="form-control" type="file" name="asset_pictures[]" id="formFileMultiple" multiple />
                </div>
            </div>
            <button type="submit" class="ms-4 mb-4 btn btn-primary">อัพโหลด</button>
            <button type="reset" class="mb-4 btn btn-warning">clear</button>
            <a href="#" class="mb-4 btn btn-danger">back</a>
        </form>
    </div>
</div>