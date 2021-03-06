<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('template/Efico-News-master/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark py-2" style="background-color: #3c185b; width: 100%; margin-left: 0; color: white;" >
        <a class="navbar-brand" href="/">
        <img src="{{ asset('template/logo.png') }}" width="70" height="30" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler but" style="color: white;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse up"  id="navbarSupportedContent" >
          <ul class="navbar-nav mr-auto ">
          <div class="navbar-nav" style="white-space: no-wrap;" >
              <a class="nav-item nav-link" href="/">HOME</a>
              <a class="nav-item nav-link" href="/about">ABOUT US</a>
              <a class="nav-item nav-link" href="/contact">CONTACT US</a>
              <a class="nav-item nav-link" href="/services">SERVICES</a>
              <a class="nav-item nav-link active" href="/news">NEWS <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="/faqs">FAQS</a>
            </div>
            </ul>
      </nav>
      <div class="container-fluid first" style="background-color: #3c185b;">
        <h2 class="text-light p-4 py-5 mb-5 eficoN" >Get the latest News and Articles about Efico and the Educational World</h2>
      </div>
      <div class="container py-4 mx-auto" id="app">
          <news></news>
      </div>
   <footer>
<div class="container-fluid footer py-5">
  <div class="row ">
      <div class="col">
          <p><Strong>QUICK LINKS</Strong></p>
          <a href="#" class="text-light">About Us</a> <br>
          <a href="#" class="text-light">Newsletter</a>
      </div>
      <div class="col">
        <p><Strong>SERVICES</Strong></p>
        
        <a href="#" class="text-light">Career talks</a> <br>
        <a href="#" class="text-light">Internship</a> <br>
        <a href="#" class="text-light">Scholarship</a>
        
    </div>
    <div class="col">
        <p><Strong>FOLLOW US</Strong></p>
    
        <a href="https://twitter.com/EficoResources" class="text-light"><i class="fab fa-twitter"></i></a>
        <a href="http://instagram.com/efico_resources" class="text-light"><i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100044491054245" class="text-light"><i class="fab fa-facebook"></i></a>
        <a href="https://www.youtube.com/channel/UC4BCMxcqIsr_ZBBafiAWV4g" class="text-light"><i class="fab fa-youtube"></i></a>
        <a href="https://www.linkedin.com/company/efico-resources" class="text-light"><i class="fab fa-linkedin"></i></a>
    
    </div>
  </div>
</div>
<div class="container-fluid" style=" background-color: #3c185b; text-align: center; color: white; height: 45px; bottom: 0;">
 Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </p>
</div>
</footer>
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://kit.fontawesome.com/dc7f1f050e.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>
