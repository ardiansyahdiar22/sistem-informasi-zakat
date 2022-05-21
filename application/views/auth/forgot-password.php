<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Fogot Password</h1>
                            </div>
                            
                            <?= $this->session->flashdata('flash'); ?>

                            <form class="user" method="post" action="<?= base_url('auth/forgotPassword'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        id="email" aria-describedby="email" name="email"
                                        placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                        <small class="text-form text-danger"><?= form_error('email'); ?></small>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Reset Password
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth'); ?>">Back To Login Page</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>
