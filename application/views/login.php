<div class="container my-5 py-5">
    <section class="mb-10">
        <h1 class="text-dark text-center mb-3"> เข้าสู่ระบบ</h1>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <form action="<?php echo site_url('officer/login_officer') ?>" method="post">
                    <div class="form-outline mb-4">
                        <input type="text" id="form2Example1" name="user_id" class="form-control" />
                        <label class="form-label" for="form2Example1"><?php echo lang('username') ?></label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="password" id="form2Example2" name="password" class="form-control" />
                        <label class="form-label" for="form2Example2"><?php echo lang('password') ?></label>
                    </div>
                    <button type="submit" style="background-color: #25d321;" class="btn btn-block text-light">
                        <b style="font-family: 'Kanit';" class="h5"><?php echo lang('login') ?></b>
                    </button>
                    <div class="text-center">
                        <p>or sign up with:</p>
                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-facebook-f"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-google"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->

</div>
<!-- Container for demo purpose -->