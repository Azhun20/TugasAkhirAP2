<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.css') ?>">
  </head>
  <body>
    

<?= $this->include('layout/navbar') ?>
<?= $this->include('layout/header') ?>  

<br>

<div class="container">
        <div class="row">
            <div class="col-md-8">
                <?= $this->renderSection('content') ?>
            </div>
            <div class="col-md-4">
                <?= $this->include('layout/sidebar') ?>
            </div>
        </div>
    </div>

<?= $this->include('layout/footer') ?>

	  <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
  </body>
</html>