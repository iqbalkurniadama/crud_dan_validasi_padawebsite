<!DOCTYPE html>
<html lang="en">

<head>
    <title>rekayasa web 2020</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <!-- this for nvbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin:24px 0;">
            <a class="navbar-brand" href="javascript:void(0)">DATA EVENT</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link disabled" href="javascript:void(0)"><?php echo $this->session->userdata('nama') ?></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a href="<?php echo site_url('login/logout') ?>" class="btn btn-success my-2 my-sm-0" type="button">Logout</a>
                </form>
            </div>
        </nav>
        <!-- this for nvbar -->

        <body>
            <div class="container">
                <h2>EDIT DATA EVENT</h2>
                <?php foreach ($tb_event as $u) { ?>
                    <form action="<?php echo base_url() . 'home/update'; ?>" method="post">
                        <table style="margin:20px auto;">
                            <input type="hidden" name="id" value="<?php echo $u->id ?>">
                            <div class="form-group">
                                <label for="event">Event :</label>
                                <input type="text" class="form-control" id="event" placeholder="Masukkan event" name="event" value="<?php echo $u->event ?>">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat :</label>
                                <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat" name="alamat" value="<?php echo $u->alamat ?>">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi :</label>
                                <input type="text" class="form-control" id="deskripsi" placeholder="Masukkan deskripsi" name="deskripsi" value="<?php echo $u->deskripsi ?>">
                                <tr>
                                    <td></td>
                                    <td><input type="submit" class="btn btn-primary" value="Simpan"></td>
                                </tr>
                        </table>
                    </form>
                <?php } ?>
        </body>