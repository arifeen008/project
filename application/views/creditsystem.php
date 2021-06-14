<div class="col-lg-9">
    <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h1">สอบถามยอดสินเชื่อในสมุดของบัญชี</h1>
    </div>
    <form action="<?php echo site_url('officer/credit_officer') ?>" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="mem_id">เลขที่สมาชิก</label>
                    <input class="form-control" type="text" id="mem_id" placeholder="เลขที่สมาชิก..." name="mem_id" maxlength="5" required>

                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="branch_number">เลือกสาขา</label>
                    <select class="form-control" id="branch_number" name="branch_number">
                        <?php foreach ($result->result() as $row) { ?>
                            <option value="<?php echo $row->BR_NO ?>"> <?php echo $row->BR_NO ?> &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp; <?php echo $row->BR_NAME ?></option>
                        <?php  } ?>
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mb-2">ดึงข้อมูล</button>
    </form>
</div>