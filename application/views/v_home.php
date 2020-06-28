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


    <h2>INI DATA EVENT</h2><BR>
    <table class="table table-striped">

      <tr>
        <th>No</th>
        <th>Event</th>
        <th>Alamat</th>
        <th>Deskripsi</>
        <th>Aksi</th>
      </tr>
      <?php
      $no = 1;
      foreach ($tb_event as $u) {
      ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $u->event ?></td>
          <td><?php echo $u->alamat ?></td>
          <!-- <td><?php echo $u->image ?></td> -->
          <td><?php echo $u->deskripsi ?></td>
          <td>
            <?php echo anchor('home/edit/' . $u->id, 'Edit'); ?> ||
            <?php echo anchor('home/hapus/' . $u->id, 'Hapus'); ?>
          </td>
        </tr>
      <?php } ?>
    </table>
    <div align="center">
      <a type="button" href="<?php echo site_url('home/tambah') ?>" class="btn btn-primary">Tambah Data</a>
    </div>
  </div>
</body>