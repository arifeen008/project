<div class="col-lg-9">

    <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>ระบบทะเบียนสมาชิกและหุ้น</h1>
    </div>
    <h4>ข้อมูลสมาชิก</h4>
    <div class="card border-success">
        <form action="<?php echo site_url('officer/listdata_member') ?>" method="post">
            <div class="card-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>ชื่อ :</label>
                            <input type="text" name="fname" class="form-control" required>
                        </div>
                        <div class="col">
                            <label>นามสกุล :</label>
                            <input type="text" name="lname" class="form-control">
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
            </div>
        </form>
    </div>
    <br>

    <h4>ข้อมูลใบเสร็จหุ้นสมาชิก</h4>
    <div class="card border-success">
        <form action="<?php echo site_url('officer/listdatashare_member') ?>" method="post">
            <div class="card-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>ชื่อ :</label>
                            <input type="text" name="fname" class="form-control">
                        </div>
                        <div class="col">
                            <label>นามสกุล :</label>
                            <input type="text" name="lname" class="form-control">
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
            </div>
        </form>
    </div>
</div>