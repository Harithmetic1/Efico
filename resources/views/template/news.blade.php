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
        <img src="logo.png" width="70" height="30" alt="" loading="lazy">
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
      <div class="container py-4 mx-auto">    
          <div class="card card-deck mb-3 mx-auto" style="max-width: 90%;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ asset('template/Business_SVG 2.png') }}" class="card-img" alt="...">
                  </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit eum quae sit doloribus voluptates modi! Nam dolore ipsum voluptatem, culpa delectus eos dignissimos labore deleniti necessitatibus deserunt, atque nisi architecto.</p>
                  <a href="#" class="card-link">More</a>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>      
            </div>
          </div>
          <br>
          <div class="card card-deck mb-3 mx-auto mt-3" style="max-width: 90%; margin-top: 20%;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ asset('template/Business_SVG 2.png') }}" class="card-img" alt="...">
                  </div>

              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit eum quae sit doloribus voluptates modi! Nam dolore ipsum voluptatem, culpa delectus eos dignissimos labore deleniti necessitatibus deserunt, atque nisi architecto.</p>
                  <a href="#" class="card-link">More</a>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>   
                </div>
              </div>
              
            </div>
          </div>
          <br>
          <div class="card card-deck mb-3 mx-auto py-3 mt-3" style="max-width: 90%; margin-top: 20%;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ asset('template/Business_SVG 2.png') }}" class="card-img" alt="...">
                  </div>

              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit eum quae sit doloribus voluptates modi! Nam dolore ipsum voluptatem, culpa delectus eos dignissimos labore deleniti necessitatibus deserunt, atque nisi architecto.</p>
                  <a href="#" class="card-link">More</a>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>        
                </div>
              </div>
              
            </div>
          </div>
      </div>
      <div class="container-fluid footer py-5 " style="background-color: #3c185b; text-align: center; color: white;">
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
</body>
<script src="https://kit.fontawesome.com/dc7f1f050e.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>
