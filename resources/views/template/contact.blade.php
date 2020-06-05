<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('template/contact/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Contact</title>
</head>
<body>

<header>
  <nav class="navbar navbar-expand-lg navbar-dark py-3" style="background-color: #3c185b; width: 100%;   color: white;" >
    <a class="navbar-brand" href="/">
      <img src="{{ asset('template/assets/img/efico_logo.svg') }}" width="70" height="30" alt="" loading="lazy">
    </a>
    <button class="navbar-toggler" style="color: white;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse up" id="navbarSupportedContent" >
      <ul class="navbar-nav mr-auto">
      <div class="navbar-nav op">
          <a class="nav-item nav-link" href="/">HOME</a>
          <a class="nav-item nav-link" href="/about">ABOUT US</a>
          <a class="nav-item nav-link active" href="/contact">CONTACT US <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="/services">SERVICES</a>
          <a class="nav-item nav-link " href="/news">NEWS </a>
          <a class="nav-item nav-link" href="faqs.html">FAQS</a>
        </div>
        </ul>
  </nav>

<br/>
<br/>
<div class="container-fluid first">
  <h2 class="text-light p-3 py-3 mb-3 eficoN" >CONTACT </h2>
    <h2 class="ext-light p-3 py-3 mb-5 eficoN" > Ask us anything, we will be glad to answer</h2>
 
</div>
<!---
<div class="header_text">
<h1 class="top_text"> CONTACT US</h1>
<p class="min_text">Ask us anything, we will be glad to answer</p>
</div>
-->
</header>
<br>

<article>
  <div class="container mx-auto">
  <p class="note"><b>SEND US A MESSAGE</b></p>
    <div class="form mx-auto">
      <form action="#" class="row container">
        <div class="col-6">
          <div class="form-group">
            <input type="text"  placeholder="Name" required class="form-control">
          </div>
        </div>
        <div class="col-6">
          <div class="form-group"> 
            <input type="email" placeholder="Email" required class="form-control">
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <textarea class="message form-control" type="text" required>Message</textarea>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <button class="btn btn-primary form-control" type="submit">Contact Us</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <br>
    <div class="body" style="text-align: center;">
   
      <p class="address mx-auto"><b>ADDRESS</b><br/> Akoka-Yaba</p>
      <p class="number mx-auto"><b>PHONE</b> <br/>
      +2349054078392</p>
      
    </div>

</article>
<br>
<br>
<div class="container-fluid footer py-5 ">
  <div class="row ">
      <div class="col">
          <p><Strong>QUICK LINKS</Strong></p>
          <a href="/about" class="text-light">About Us</a> <br>
          <a href="/news" class="text-light">Newsletter</a>
      </div>
      <div class="col">
        <p><Strong>SERVICES</Strong></p>
        <a href="#" class="text-light">Career talks</a> <br>
        <a href="#" class="text-light">Internship</a> <br>
        <a href="#" class="text-light">Scholarship</a>
        
    </div>
    <div class="col">
        <p><Strong>FOLLOW US</Strong></p>
        <a href="#" class="text-light"><i class="fab fa-twitter"></i></a>
        <a href="#" class="text-light"><i class="fab fa-instagram"></i></a>
        <a href="#" class="text-light"><i class="fab fa-facebook"></i></a>
        <a href="#" class="text-light"><i class="fab fa-youtube"></i></a>
        <a href="#" class="text-light"><i class="fab fa-linkedin"></i></a>
    
    </div>

  </div>
</div>

<script src="https://kit.fontawesome.com/dc7f1f050e.js" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
