<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delete User</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>">
  </head>
  <body>
    <br>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-12">
                <div class="card text-center">
                    <div class="card-body">
                        <h2>Delete Data</h2>
                         <p>Are you sure?</p>

                <?= form_open("/admin/delete/".$delete->id) ?>
                <button class="btn btn-primary">Yes</button>
                <a href="<?= site_url('/admin') ?>">Cancel</a>
                </form>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>