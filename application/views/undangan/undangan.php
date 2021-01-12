<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">

    <title>couple name</title>
  </head>
  <body>
    <div id="konten">
        <div id="about" style="min-height: 640px;">
            <img src="<?= base_url()?>assets/image/bungaatas.png" style="position: absolute;transform: translate(-50%); left: 50%; top: -60px; z-index: 2">
            <p style="position: absolute; transform: translate(-50%); left: 50%; top: 50px; z-index: 2">about us</p>
            <h3 style="position: absolute; transform: translate(-50%); left: 50%; top: 80px; z-index: 2; text-align: center;">bride and groom</h3>
            <img src="<?= base_url()?>assets/image/bungakanan.png" style="position: absolute; right: 0; top: 148px; z-index: 2">
            <img src="<?= base_url()?>assets/image/bungakiri.png" style="position: absolute; left: 0; top: 347px; z-index: 2">
            <img src="<?= base_url()?>assets/image/bungabawah.png" style="position: absolute; transform: translate(-50%); left: 50%; bottom: -80px; z-index: 2">
            <img src="<?= base_url()?>assets/image/bgwarna.png" style="position: absolute; transform: translate(-50%); left: 50%; bottom: -150px; z-index: 1; width: 150%; max-height: 100%">
            <img src="<?= base_url()?>assets/image/detail.png" style="position: absolute; transform: translate(-50%); left: 50%; top: 100px; z-index: 2; max-width: 80%; max-height: 80%">
        </div><br><br><br>

        <div id="galeri" style="min-height: 640px">
            <p style="position: absolute; transform: translate(-50%); left: 50%; top: 620px; z-index: 2">pray for us</p>
            <img src="<?= base_url()?>assets/image/bgwarna2.png" style="position: absolute; transform: translate(-50%); left: 50%; bottom: -700px; z-index: 1; width: 100%; max-height: 100%">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide" style="background-image:url(./images/nature-1.jpg)"></div>
                  <div class="swiper-slide" style="background-image:url(./images/nature-2.jpg)"></div>
                  <div class="swiper-slide" style="background-image:url(./images/nature-3.jpg)"></div>
                  <div class="swiper-slide" style="background-image:url(./images/nature-4.jpg)"></div>
                  <div class="swiper-slide" style="background-image:url(./images/nature-5.jpg)"></div>
                  <div class="swiper-slide" style="background-image:url(./images/nature-6.jpg)"></div>
                  <div class="swiper-slide" style="background-image:url(./images/nature-7.jpg)"></div>
                  <div class="swiper-slide" style="background-image:url(./images/nature-8.jpg)"></div>
                  <div class="swiper-slide" style="background-image:url(./images/nature-9.jpg)"></div>
                  <div class="swiper-slide" style="background-image:url(./images/nature-10.jpg)"></div>
                </div>
            </div>            
        </div>

        <div>
            
        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>