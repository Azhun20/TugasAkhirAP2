<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="<?= base_url('Asset/img/icon.png') ?>">
    <link rel="stylesheet" href="<?= base_url('css/premium.css') ?>">
    <!-- <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>"> -->
    <title>Premium</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
        <div class="container">
            <img class="icn" src="<?= base_url('Asset/img/icon.png') ?>" alt="" width="30">
            <a class="navbar-brand ms-3" href="#">Futtosaru</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link mx-2" href="<?= base_url('homepage') ?>">Home</a>
                    <a class="nav-link active mx-2" aria-current="page" href="<?= base_url('premium') ?>">Premium</a>
                    <a class="nav-link mx-2" href="<?= base_url('event') ?>">Event</a>
                </div>
                <div class="me-3">
                        <form action="<?= base_url('/logout') ?>"><button type="submit" class="btn-danger">Logout</button></form>
                    </div>
            </div>
        </div>
    </nav>

    <section id="hero">
        <div class="container">
        <form action="<?= base_url('user/pembayaran'); ?>" method="POST">
                        <input type="hidden" name="kode_lapangan" value="<?= $lapangan->id_lap; ?>">
                        <h6>Pilih Tanggal Booking</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <input class="form-control digits" id="minMaxExample" value="<?= date('m/d/Y', time()); ?>" name="tgl" type="text">
                                    <button type="button" class="btn btn-primary input-group-append" onclick="tanggalBooking();">set</button>
                                </div>
                            </div>
                        </div>
                        <br>
                        <small>Tap pada item slot waktu dibawah untuk memilih <b>Jam Booking</b></small>
                        <div class="container-jadwal">
                            <fieldset class="checkbox-group">
                                <?php foreach ($jadwal as $j) : ?>

                                    <!-- strpos(string,find,start) -->
                                    <?php if (strstr($jadwal_booked, "$j->kode_jadwal")) : ?>

                                        <div class="checkbox ">
                                            <label class="checkbox-wrapper">
                                                <input type="checkbox" class="checkbox-input" disabled>
                                                <span class="checkbox-tile" style="background-color: #eaeaea;">
                                                    <span class="checkbox-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                            <path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm1 12v-6h-2v8h7v-2h-5z" />
                                                        </svg>
                                                    </span>
                                                    <span class="checkbox-label"><?= $j->jam_jadwal; ?></span>
                                                    <strong class="text-danger">Booked</strong>
                                                </span>
                                            </label>
                                        </div>

                                    <?php else : ?>

                                        <div class="checkbox ">
                                            <label class="checkbox-wrapper">
                                                <input type="checkbox" class="checkbox-input" name="kode_jadwal[]" value="<?= $j->kode_jadwal; ?>,<?= $j->jam_jadwal; ?>">
                                                <span class="checkbox-tile">
                                                    <span class="checkbox-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                            <path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm1 12v-6h-2v8h7v-2h-5z" />
                                                        </svg>
                                                    </span>
                                                    <span class="checkbox-label"><?= $j->jam_jadwal; ?></span>
                                                    <strong class="text-success">Available</strong>
                                                </span>
                                            </label>
                                        </div>

                                    <?php endif ?>

                                <?php endforeach; ?>
                            </fieldset>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3" style="width: 100%;">Bayar</button>
                    </form>
        </div>
    </section>

    <!-- Java Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>