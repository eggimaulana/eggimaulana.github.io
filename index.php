<?php
// panggil koneksinya
require_once 'connect.php';
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
      <!--mulai navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-secondary ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Maulana</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallery">gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#komentar">Comment</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
      <!--akhir navbar-->

      <!--awal dari foto-->
      <div class="container-fluid navbar-dark bg-warning text-center pt-5 pb-5">
        <img src="https://th.bing.com/th/id/OIP.oIPNtsyOpVwgC4bbWUMyAAHaJ4?w=139&h=185&c=7&r=0&o=5&dpr=1.3&pid=1.7" height="150" width="150" class="img-thumbnail"  alt="">
        <h3>maruf amin</h3>
        <br>
        <h6>saya wakil presiden</h6>
      </div> 
      <!--akhir dari foto--> 

      <!--deskripsi foto -->
      <section id="about">
        <div class="container">
            <div class="row pt-5 pb-5 text-center">
                <h2>About us</h2>
            </div>
            <div class="row pt-5 justify-content-around">
                <?php

                // Tampilkan semua data
                $q = $con->query("SELECT * FROM tentang");
                while ($dt = $q->fetch_assoc()) :
                    ?>
                    <div class="col-sm-5 p-3 tengah">
                        <?=$dt['about'] ?>
                    </div>

                    <?php
                    endwhile;
                    ?>
            </div>
        </div>
      </section>
  <!-- deskripsi end foto-->

      <!-- awal galery -->
      <section id="gallery">
        <div class="container">
            <div class="row text-center pt-5 pb-5">
                <h3>Galery</h3>
          </div>
          <div class="container text-center">
              <div class="row justify-content-evenly">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                      <img src="https://th.bing.com/th/id/OIP.Q10bZsSVzKON2orkDwg3EQHaE8?w=249&h=181&c=7&r=0&o=5&dpr=1.25&pid=1.7" class="card-img-top" style="box-shadow: 25px 25px 10px rgb(0 0 0 / 50%); border-radius: 20px;" alt="...">
                        <div class="card-body">
                        </div>
                      </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://th.bing.com/th/id/OIP.VB5nGGPKRuV9e7qage6u8wHaFQ?w=258&h=183&c=7&r=0&o=5&dpr=1.25&pid=1.7" class="card-img-top" style="box-shadow: 25px 25px 10px rgb(0 0 0 / 50%); border-radius: 20px;" alt="...">
                        <div class="card-body">
                        </div>
                      </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://th.bing.com/th/id/OIP.otBNzW6qpP04LNMKvF_lAQHaEH?w=331&h=183&c=7&r=0&o=5&dpr=1.25&pid=1.7" class="card-img-top" style="box-shadow: 25px 25px 10px rgb(0 0 0 / 50%); border-radius: 20px;" alt="...">
                        <div class="card-body">
                        </div>
                      </div>
                    </div>
                </section>
      <!-- akhir galery -->

      <!-- start form -->
      <section id="contact">
        <div class="container-fluid pt-3;" style="background-color: #000000;"> 
          <div class="container">
          <div class="row text-center judul1" style="padding: 15px;">
            <h2 style="color: #ffffff" id="contact"><strong>Contact Us</strong></h2>
      </div>
      <div class="row pt-3">
        <form method ="post" action="add.php">
          <div class="mt-2">
            <label for="exampleInputName" name="nama" class="form-label"><strong style="color: #ffffff">Name</strong></label>
            <input type="text" name="nama" class="form-control" id="exampleInputName">
          </div>
          <div class=""mt-5>
            <label for="exampleInputEmail1" name="email" class="form-label"><strong style="color: #ffffff">Email address</strong></label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text" style="color: #ffffff">We'll never share your email with anyone else.</div>
          </div>
            <label for="exampleInputEmail1" name="comment" class="form-label"><strong style="color: #ffffff">Comment</strong></label>
            <input type="text" name="comment" class="form-control" id="floatingInputValue" placeholder="comment"> <br>
            <input type="submit" name="submit" style="margin: 25px; background-color: #8b0101; border-radius: 20px; height: 40px; width: 1070px; color: #ffffff; font-size: 18px;"></button>
          </form>
        </div>
        </div>
        </div>
        </section>
      <!-- end form -->
   
      <!-- start footer -->
        <footer class="container-fluid p-4 text-center" style="font-size: large;background-color: darkslategrey;"><strong style="color: #ffffff;">Created by @eggi maulana. All Rights Reserved</strong>
        </footer>
      <!-- end footer -->
<!-- Read atau menampilkan -->
<table class="table table-dark table-hover">
    <tr>
      <th>No.</th> 
      <th>Nama</th>
      <th>Email</th>
      <th>Comment</th>
      <th colspan="2">Aksi</th>
    </tr>
<?php
    // Tampilkan semua data
    $q = $con->query("SELECT * FROM komentar");
$no = 1; // nomor urut
    while ($dt = $q->fetch_assoc()) :
    ?>
<tr>  
      <td><?= $no++ ?></td>
      <td><?= $dt['Nama'] ?></td>
      <td><?= $dt['Email'] ?></td>
      <td><?= $dt['Komentar'] ?></td>
      <td><a href="update.php?id=<?= $dt['id'] ?>">Ubah</a></td>
      <td><a href="delete.php?id=<?= $dt['id'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
    </tr>
<?php
    endwhile;
    ?>
</table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html> 