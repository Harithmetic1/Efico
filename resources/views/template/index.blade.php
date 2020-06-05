<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Efico</title>
    <link rel="icon" href="{{ asset('template/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/index.css') }}">
    <script src="{{ asset('template/assets/js/script.js') }}"></script>
</head>
<body>
    <div class="top__bg flex col">
        <header class="flex row">
            <div class="logo flex col">
                <img src="{{ asset('template/assets/img/efico_logo.svg') }}" alt="">
                <p id="your" style="font-size=9px;">...your education will make sense</p>
            </div>
            <nav id="nav" class="flex row">
                 <div id="nav-icon">
                            <div></div>
                            <div></div>
                            <div></div>
                </div>
                <ul class="flex row">
                    <li>
                        <a href="/">home</a>
                    </li>
                    <li>
                        <a href="/about">about</a>
                    </li>
                    <li>
                        <a href="/contact">contact us</a>
                    </li>
                    <li>
                        <a href="/services">services</a>
                    </li>
                    <li>
                        <a href="/news">news</a>
                    </li>
                    <li>
                        <a href="/faqs">faqs</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="flex row">
            <div class="content flex col">
                <p>We help <span class="special">undergraduates</span> discover themselves using a Personalized
                    self-assessment test</p>
                <button>Get Started</button>
            </div>
            <img src="{{ asset('template/assets/img/startup.svg') }}" alt="photo_illustration" class="illustration">
            <div class="slide flex row">
                <div class="current"></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </main>
    </div>
    <section class="section-one mission flex col">
        <h1>our mission</h1>
        <ul class="flex row">
            <li class="flex col">
                <span>Training</span>
                <figure>
                    <figcaption hidden>Image illustrating Training</figcaption>
                    <img src="{{ asset('template/assets/img/business.png') }}" alt="training illustration">
                </figure>
            </li>
            <li class="flex col">
                <span>Training</span>
                <figure>
                    <figcaption hidden>Image illustrating Training</figcaption>
                    <img src="{{ asset('template/assets/img/business.png') }}" alt="training illustration">
                </figure>
            </li>
            <li class="flex col">
                <span>Training</span>
                <figure>
                    <figcaption hidden>Image illustrating Training</figcaption>
                    <img src="{{ asset('template/assets/img/business.png') }}" alt="training illustration">
                </figure>
            </li>
        </ul>
    </section>
    <section class="section-two achievements">
        <h1 hidden>achievements</h1>
        <ul class="flex row">
            <li>
                <p><span class="special">1000+</span> <br>students trained</p>
            </li>
            <li>
                <p><span class="special">70+</span> <br>student ambassadors</p>
            </li>
            <li>
                <p><span class="special">30+</span> <br>universities</p>
            </li>
        </ul>
    </section>
    <section class="section-three reviews flex col">   
            <h1>reviews</h1>
            <div class="carousel flex row">
                <div class="control previous flex col"><img src="{{ asset('template/assets/img/prev.svg') }}" alt="previous button"></div>
                <div class="review flex row">
                    <figure>
                        <figcaption hidden>Photo of reviewer</figcaption>
                        <img src="{{ asset('template/assets/img/reviewer.jpg') }}" alt="Picture of reviewer">
                    </figure>
                    <div class="content flex col">
                        <p class="reviewer__name">heritage alabi</p>
                        <p class="review__content">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligulaeget dolor.
                            Aenean massa. lor
                        </p>
                    </div>
                </div>
                <div class="control next flex col"><img src="{{ asset('template/assets/img/next.svg') }}" alt="next button"></div>
            </div>      
    </section>
    <section class="section-four team flex col">
        <h1>our team</h1>
        <ul class="flex row">
            <li class="flex col">
                    <img src="{{ asset('template/assets/img/david.jpg') }}" alt="">
                <p class="member__name">David Adefunmilayo</p>
                <p class="member__position">Founder and Director</p>
            </li>
            <li class="flex col">
                    <img src="{{ asset('template/assets/img/onome.jpg') }}" alt="">
                <p class="member__name">Onome Agbi</p>
                <p class="member__position"> Human Resource Manager</p>
            </li>
            <li class="flex col">
                    <img src="{{ asset('template/assets/img/dami.jpg') }}" alt="">
                <p class="member__name">Damilola Adesanmi</p>
                <p class="member__position">COO/ Assistant Director</p>
            </li>
            <li class="flex col">
                    <img src="{{ asset('template/assets/img/joy.jpg') }}" alt="">
                <p class="member__name">Joy  Emekpo</p>
                <p class="member__position">Head of Finance</p>
            </li>
        </ul>
    </section>
    <footer class="flex row">
        <ul>
            <h1>quick links</h1>
            <li>about us</li>
            <li>newsletter
            <li>
        </ul>
        <ul>
            <h1>services</h1>
            <li>Career talks</li>
            <li>internship</li>
            <li>scholarship</li>
        </ul>
        <ul class="flex col follow">
            <h1>follow us</h1>
            <div class="flex row">
                <li>
                    <a href="twitter-link"><img src="{{ asset('template/assets/img/twitter.svg') }}" alt=""></a>
                </li>
                <li>
                    <a href="twitter-link"><img src="{{ asset('template/assets/img/ig.svg') }}" alt=""></a>
                </li>
                <li>
                    <a href="twitter-link"><img src="{{ asset('template/assets/img/fb.svg') }}" alt=""></a>
                </li>
                <li>
                    <a href="twitter-link"><img src="{{ asset('template/assets/img/youtube.svg') }}" alt=""></a>
                </li>
                <li>
                    <a href="twitter-link"><img src="{{ asset('template/assets/img/linkedin.svg') }}" alt=""></a>
                </li>
            </div>
        </ul>
    </footer>
    <script src="{{ asset('template/assets/js/index.js') }}"></script>
</body>
</html>