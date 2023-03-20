<div class="container-fluid my-3">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-2">
                    <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" data-mdb-toggle="pill" href="#member" role="tab" aria-selected="true">ยอดสมาชิกสหกรณ์</a>
                        <a class="nav-link" data-mdb-toggle="pill" href="#yearaccount" role="tab" aria-selected="false">สมาชิกบัญชี</a>
                        <a class="nav-link" data-mdb-toggle="pill" href="#shared" role="tab" aria-selected="false"> ทุนเรือนหุ้น</a>
                        <a class="nav-link" data-mdb-toggle="pill" href="#education" role="tab" aria-selected="false">เงินฝากประเภทเพี่อการศึกษา</a>
                        <a class="nav-link" data-mdb-toggle="pill" href="#hadjumrah" role="tab" aria-selected="false">เงินฝากประเภทฮัจญ์และอุมเราะห์ ระยะเวลา 1 ปี ปีบัญชี 2566</a>
                        <a class="nav-link" data-mdb-toggle="pill" href="#is1224" role="tab" aria-selected="false">เงินฝากประเกทอิส 12 และ 24 ระยะเวลา 1 ปี ปีบัญชี 2566</a>
                        <a class="nav-link" data-mdb-toggle="pill" href="#takaful" role="tab" aria-selected="false">ตะกาฟุล 2566</a>
                    </div>
                </div>
                <div class="col-10">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="member" role="tabpanel">
                            <div class="row">
                                <div class="col-8">
                                    <canvas id="member-balance"></canvas>
                                </div>
                                <div class="col-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card m-2">
                                                <div class="card-body">
                                                    <h5 class="card-title">
                                                        <canvas data-mdb-chart="pie" data-mdb-dataset-label="Traffic" data-mdb-labels="['Monday', 'Tuesday']" data-mdb-dataset-data="[2112, 2343]" data-mdb-dataset-background-color="['rgba(63, 81, 181, 0.5)', 'rgba(77, 182, 172, 0.5)']"></canvas>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card m-2">
                                                <div class="card-body">
                                                    <h5 class="card-title">
                                                        <canvas data-mdb-chart="pie" data-mdb-dataset-label="Traffic" data-mdb-labels="['Monday', 'Tuesday']" data-mdb-dataset-data="[2112, 2343]" data-mdb-dataset-background-color="['rgba(63, 81, 181, 0.5)', 'rgba(77, 182, 172, 0.5)']"></canvas>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card m-2">
                                                <div class="card-body">
                                                    <h5 class="card-title">
                                                        <canvas data-mdb-chart="pie" data-mdb-dataset-label="Traffic" data-mdb-labels="['Monday', 'Tuesday']" data-mdb-dataset-data="[2112, 2343]" data-mdb-dataset-background-color="['rgba(63, 81, 181, 0.5)', 'rgba(77, 182, 172, 0.5)']"></canvas>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card m-2">
                                                <div class="card-body">
                                                    <h5 class="card-title">
                                                        <canvas data-mdb-chart="pie" data-mdb-dataset-label="Traffic" data-mdb-labels="['Monday', 'Tuesday']" data-mdb-dataset-data="[2112, 2343]" data-mdb-dataset-background-color="['rgba(63, 81, 181, 0.5)', 'rgba(77, 182, 172, 0.5)']"></canvas>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="yearaccount" role="tabpanel">
                            <canvas id="target-member"></canvas>
                        </div>
                        <div class="tab-pane fade" id="shared" role="tabpanel">
                            <canvas id="shared-bar"></canvas>
                        </div>
                        <div class="tab-pane fade" id="education" role="tabpanel">
                            <canvas id="education-bar"></canvas>
                        </div>
                        <div class="tab-pane fade" id="hadjumrah" role="tabpanel">
                            <canvas id="hadjumrah-bar"></canvas>
                        </div>
                        <div class="tab-pane fade" id="is1224" role="tabpanel">
                            <canvas id="istigomah-bar"></canvas>
                        </div>
                        <div class="tab-pane fade" id="takaful" role="tabpanel">
                            <canvas id="takaful-bar"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>