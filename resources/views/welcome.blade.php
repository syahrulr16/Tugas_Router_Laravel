<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MyProfile</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <style type="text/css"> 
      .banner {
        background:url("image/8.jpg");
        background-size: cover;
        padding-top: 20%;
        padding-bottom: 20%;
        color: #fff;
      }
      
      .lingkaran {
        display: inline-block;
        border-radius: 50%;
        width: 150px;
        margin: auto;
        height: 150px;
        color: black;
        background-color: yellow;
      }
      
      .lingkaran i {
        position: relative;
        top: 30px;
      }
      
      .crop-img {
        object-fit: cover;
      }
      
      .tim img {
        width: 250px;
        border: 10px solid #cccccc;
      }
      
      a.social {
        display: inline-block;
        width: 40px;
        height: 40px;
        color: #fff;
        border-radius: 50%;
        background-color: #333;
        line-height: 40px;
      }
      
      .client img {
        height: auto;
        max-height: 50px;
      }
      
      .kontak {
        background: url("https://wallpaperaccess.com/full/1867010.jpg") no-repeat
          center center;
        background-size: cover;
        padding-bottom: 20%;
        padding-top: 20%;
        color: #fff;
      }
    </style>

  </head>
  <body>
    <!-- navigasi -->
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top"
    >
      <div class="container">
        <a class="navbar-brand" href="#">ProfileSyahrul.com</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#layanan">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#galeri">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tentang">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#staff">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kontak">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- banner -->
    <div class="container-fluid banner">
      <div class="container text-center">
        <h4 class="display-6">Selamat Datang di Profile Saya</h4>
        <h3 class="display-1"><b>Halo! Perkenalkan Saya Syahrul!</b></h3>
      </div>
    </div>
    <!-- layanan -->
    <div class="container-fluid layanan pt-5 pb-5">
      <div class="container text-center">
        <h2 class="display-3" id="layanan">Beranda</h2>
        <p>
          Beranda berisi kepribadian dan siapa saya sekarang
        </p>
        <div class="row pt-4">
          <div class="col-md-4">
            <span class="lingkaran"><i class="fas fa-home fa-5x"></i></span>
            <h3 class="mt-3">Anak Rumahan</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat,
              a!
            </p>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"><i class="fas fa-male fa-5x"></i></span>
            <h3 class="mt-3">Anak Laki Baik</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat,
              a!
            </p>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"
              ><i class="fas fa-school fa-5x"></i
            ></span>
            <h3 class="mt-3">Masih Pelajar</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat,
              a!
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- portofolio -->
    <div class="container-fluid pt-5 pb-5 bg-light">
      <div class="container text-center">
        <h2 class="display-3" id="galeri">Galeri</h2>
        <p>
          Galeri berisi kegiatan saya sebagai pelajar, kesibukan saya dirumah dan disekolah
        </p>
        <div class="row pt-4 gx-4 gy-4">
          <div class="col-md-4">
            <div class="card crop-img bg-warning">
              <img
                src="image/1.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Lorem, ipsum.</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis
                  odit atque nam animi dolores itaque.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card crop-img bg-warning">
              <img
                src="image/6.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Lorem, ipsum.</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis
                  odit atque nam animi dolores itaque.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img bg-warning">
              <img
                src="image/5.JPG"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Lorem, ipsum.</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis
                  odit atque nam animi dolores itaque.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img bg-warning">
              <img
                src="image/2.JPG"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Lorem, ipsum.</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis
                  odit atque nam animi dolores itaque.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img bg-warning">
              <img
                src="image/4.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Lorem, ipsum.</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis
                  odit atque nam animi dolores itaque.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img bg-warning">
              <img
                src="image/3.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Lorem, ipsum.</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis
                  odit atque nam animi dolores itaque.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- tentang -->
    <div class="container-fluid pt-5 pb-5">
      <div class="container">
        <h2 class="display-3 text-center" id="tentang">Tentang Saya</h2>
        <p class="text-center">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, ex!
        </p>
        <div class="clearfix pt-5">
          <img
            src="image/7.jpg"
            class="col-md-6 float-md-end mb-3 crop-img"
            width="300"
            height="300"
          />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat
            veritatis at voluptate commodi officiis sapiente.
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat
            veritatis at voluptate commodi officiis sapiente.
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat
            veritatis at voluptate commodi officiis sapiente.
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Dignissimos laboriosam excepturi exercitationem qui expedita, ex
            temporibus natus necessitatibus accusamus voluptatibus.
          </p>
        </div>
      </div>
    </div>
    <!-- tim -->
    <div class="container-fluid pt-5 pb-5 bg-light">
      <div class="container text-center">
        <h2 class="display-3" id="staff">Profile</h2>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et deleniti
          quas at magni, iusto voluptates neque corrupti dolorum! Repellat,
          quod.
        </p>
        <div class="row pt-4 gx-4 gy-4">
          <div class="text-center tim">
            <img
              src="image/syahrul.jpg"
              class="rounded-circle mb-3"
            />
            <h4>Mukhamad Syahrul R</h4>
            <p>Ketua Ekstrakulikuler Pramuka 2020/2021</p>
            <p>
              <a href="https://wa.me/qr/VJ7J6JFFX7CWP1" class="social"><i class="fab fa-whatsapp"></i></a>
              <a href="https://www.instagram.com/rsyhrll/" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="https://www.facebook.com/lukman.romadoni/" class="social"><i class="fab fa-instagram"></i></a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- kontak -->
    <div class="container-fluid pt-5 pb-5 kontak">
      <div class="container">
        <h2 class="display-3 text-center" id="kontak">Kontak Saya</h2>
        <p class="text-center">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, porro.
        </p>
        <div class="row pb-3">
          <div class="col-md-6">
            <input
              class="form-control form-control-lg mb-3"
              type="text"
              placeholder="Nama"
            />
            <input
              class="form-control form-control-lg mb-3"
              type="text"
              placeholder="Email"
            />
            <input
              class="form-control form-control-lg"
              type="text"
              placeholder="No. Phone"
            />
          </div>
          <div class="col-md-6">
            <textarea class="form-control form-control-lg" rows="5"></textarea>
          </div>
        </div>
        <div class="col-md-3 mx-auto text-center">
          <button type="button" class="btn btn-warning btn-lg">
            Kirim Pesan
          </button>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
