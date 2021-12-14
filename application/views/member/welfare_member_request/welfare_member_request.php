<!-- <div class="col-sm">
    <div class="col-12">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>ยื่นขอรับสวัสดิการ</h1>
        </div>

        <form action="#" method="POST">
            <label>สาเหตุ : </label>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">เจ็บป่วย (ผู้ป่วยใน)</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">เสียชีวิต</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option2">
                            <label class="form-check-label" for="inlineRadio3">แต่งงาน</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option2">
                            <label class="form-check-label" for="inlineRadio4">คลอดบุตร</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option2">
                            <label class="form-check-label" for="inlineRadio5">ผู้สูงอายุ</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="exampleInputPassword1">อายุ</label>
                        <input type="text" class="form-control" id="" placeholder="อายุ">
                    </div>
                    <div class="col">
                        <label for="exampleInputPassword1">อายุสมาชิก</label>
                        <input type="text" class="form-control" id="" placeholder="อายุสมาชิก">
                    </div>
                    <div class="col">
                        <label for="exampleInputPassword1">จำนวนหุ้น</label>
                        <input type="text" class="form-control" id="" placeholder="จำนวนหุ้น">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">รายละเอียด</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="กรุณาใส่รายละเอียดคำร้อง"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">ตกลง</button>
        </form>

    </div>
</div> -->
<div class="col-lg-9">
	<div class="card my-3">
		<div class="card-body text-dark">
			<h3 class="card-title border-bottom">ยื่นขอรับสวัสดิการ</h3>
			<form action="#" method="POST">
				<div class="row my-3">
					<div class="col">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1" />
							<label class="form-check-label" for="inlineRadio1">เจ็บป่วย (ผู้ป่วยใน)</label>
						</div>
					</div>

					<div class="col">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2" />
							<label class="form-check-label" for="inlineRadio2">เสียชีวิต</label>
						</div>
					</div>

					<div class="col">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="3" />
							<label class="form-check-label" for="inlineRadio3">แต่งงาน</label>
						</div>
					</div>

					<div class="col">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="4" />
							<label class="form-check-label" for="inlineRadio4">คลอดบุตร</label>
						</div>
					</div>

					<div class="col">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="5" />
							<label class="form-check-label" for="inlineRadio5">ผู้สูงอายุ</label>
						</div>
					</div>
				</div>


				<!-- 2 column grid layout with text inputs for the first and last names -->
				<div class="row mb-4">
					<div class="col">
						<div class="form-outline">
							<input type="text" id="form6Example1" class="form-control" />
							<label class="form-label" for="form6Example1">อายุ</label>
						</div>
					</div>
					<div class="col">
						<div class="form-outline">
							<input type="text" id="form6Example2" class="form-control" />
							<label class="form-label" for="form6Example2">อายุสมาชิก</label>
						</div>
					</div>
					<div class="col">
						<div class="form-outline">
							<input type="text" id="form6Example3" class="form-control" />
							<label class="form-label" for="form6Example3">จำนวนหุ้น</label>
						</div>
					</div>
				</div>

				<!-- Message input -->
				<div class="form-outline mb-4">
					<textarea class="form-control" id="form6Example7" rows="4"></textarea>
					<label class="form-label" for="form6Example7">รายละเอียด</label>
				</div>



				<!-- Submit button -->
				<button type="submit" class="btn btn-outline-success btn-block mb-4" data-mdb-ripple-color="dark">ตกลง</button>
			</form>

		</div>
	</div>
</div>
