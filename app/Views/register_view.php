<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/regis.css') ?>">
  </head>
  <body class="d-flex flex-column h-100">
  <section id="regis">
        <div class="container h-100">
            <div class="row h-100">
                <h1 class="pt-4">Futtosaru</h1>
                <div class="col my-100">
                    <div class="p-3 bg-transparent mt-5">
                        <img src="<?= base_url('Asset/img/lepi.svg') ?>" alt="">
                        <h3 class="text-center text-light">Register Now !!</h3>
                        <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
                    </div>
                </div>
                <div class="col ms-5">
                    <div class="card mb-3 text-light" style="max-width: 450px;">
                        <div class="row g-0 form">
                            <div class="col-md-10 mx-auto">
                                <div class="card-body text-md-left">
                                    <h2 class="card-title text-center mb-4 text-decoration-underline">Register</h2>
                                    <form method="post" action="<?= base_url(); ?>/register/process">
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Username">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="@gmail.com">
                                            <div id="emailHelp" class="form-text text-warning">We'll never share your email with anyone else.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="********">
                                        </div>
                                        <div class="mb-3">
                                            <label for="ulangpass" class="form-label">Repeat Password</label>
                                            <input type="password" class="form-control" id="password_conf" name="password_conf">
                                        </div>
                                        <div class="button text-center">
                                            <button type="submit" class="btn btn-success col-md-6">Regis</button>
                                        </div>
                                        <p class="mb-0 mt-3">Have any Account ? <a href="<?= base_url('login') ?>">Sign In</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
</body>
</html>