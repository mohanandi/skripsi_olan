<div class="col-lg-12">
    <div class="p-5">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
        </div>
        <form class="user" method="POST" action="">
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter Username...">
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" id="customCheck">
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
                Login
            </button>
            <hr>
        </form>
        <hr>
        <div class="text-center">
            <!-- <a class="small" href="<?= base_url('Auth/create_account'); ?>">Create an Account!</a> -->
        </div>
    </div>
</div>