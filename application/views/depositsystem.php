<div class="col-lg-9">
    <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h1">เงินฝากพนักงานประจำวัน</h1>
    </div>
    <form action="<?php echo site_url('officer/depositreport_summary') ?>" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="start">จาก :</label>
                    <input type="date" class="form-control" id="start" name="startdate" value="<?php echo date("Y-m-d"); ?>">
                </div>
                <div class="col">
                    <label for="end">ถึง :</label>
                    <input type="date" class="form-control" id="end" name="enddate" value="<?php echo date("Y-m-d", strtotime("+1 day")); ?>">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mb-2">ดูข้อมูล</button>
    </form>

    <form action="<?php echo site_url('officer/account_book_balance') ?>" method="post">
        <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h1">เงินฝากในบัญชีสมาชิก</h1>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="mem_id">เลขบัญชี :</label>
                    <input class="form-control" type="text" placeholder="เลขบัญชี..." name="account_number"  required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mb-2">ดึงข้อมูล</button>
    </form>
</div>
</div>