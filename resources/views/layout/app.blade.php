<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chipi Chapa Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
            <div>
                    <img src="{{asset('img/logo-svg.svg')}}" class="img-logo" alt="">
            </div>
            <div>
                    <div class="hero-txt-nav">
                        <li class="nav-txt"><a href="">Employee dashboard</a></li>
                        <li class="nav-txt"><a href="">Customer dashboard</a></li>
                    </div>
            </div>
            <div>
                <div class="hero-sign-nav">
                    <div class="hero-sign-up">
                        <a class="nav-signup" href="">Sign Up</a>
                    </div>
                    <div class="hero-sign-in">
                        <a class="nav-signin" href="">Sign In</a>
                    </div>
                </div>
            </div>
    </nav>

    <div class="bg-white"></div>

    <section class="txt-header">
            <div class="hero-main-txt">
                <div>
                    <div class="chipi-chapa-group-txt">
                        <div>
                            <span class="chipi-txt">Chipi</span>
                            <span class="chapa-txt">Chapa</span>
                        </div>
                        <span class="group-txt">Group</span>
                    </div>
                    <div>
                        <span class="desc-txt"><b>Choose </b>the company dashboard</span>
                    </div>
                    <div>
                        <span class="desc-txt">See the dashboard and <b>growth</b> our company.</span>
                    </div>
                </div>
                <div class="logo-landing">
                    <img src="{{asset('img/logo-svg.svg')}}" alt="" >
                </div>
            </div>
    </section>

    <section class="choose-dash-sec">
        <div class="chs-dash">Choose dashboard</div>
        <div class="employee-cust-dash">
            <div class="hero-employee">
                <div class="hero-employee-rect"><img src="{{asset('img/clarity_employee-group-solid.svg')}}" alt=""></div>
                <div class="hero-employee-button"><a href="">Employee Dashboard</a></div>
            </div>
            <div class="hero-employee">
                <div class="hero-employee-rect"><img src="{{asset('img/streamline_information-desk-customer-solid.svg')}}" alt=""></div>
                <div class="hero-employee-button"><a href="">Customer Dashboard</a></div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-container-hero">
            <div>
                <p class="copyright-footer">@2024 Copyrights all right reserved</p>
            </div>
            <div class="line-footer"></div>
            <div class="footer-container">
                <div class="foot-left">
                    <div class="left-1-foot">
                        <img src="{{asset('img/logo-svg.svg')}}" alt="">
                        <span class="chipichapa-foot">ChipiChapaGroup</span>
                    </div>
                    <div>
                        <span class="foot-txt-left">Make your future brighten wish us</span>
                        <br>
                        <span class="foot-txt-left">by love with ourheart.</span>
                    </div>
                    <div class="contact-foot">
                        <img src="{{asset('img/ig.svg')}}" alt="">
                        <img src="{{asset('img/gmail.svg')}}" alt="">
                        <img src="{{asset('img/github.svg')}}" alt="">
                    </div>
                </div>
                <div class="foot-right">
                    <div class="subtext-right">
                        <a class="bold-foot" href="">About us</a>
                        <a class="light-foot" href="">Our product</a>
                        <a class="light-foot" href="">Gallery</a>
                        <a class="light-foot" href="">Pricelist</a>
                    </div>
                    <div  class="subtext-right">
                        <a class="bold-foot" href="">Portofolio</a>
                        <a class="light-foot" href="">Latest</a>
                        <a class="light-foot" href="">Oldest</a>
                        <a class="light-foot" href="">Trending</a>
                    </div>
                    <div  class="subtext-right">
                        <a class="bold-foot" href="">Contact Us</a>
                        <a class="bold-foot" href="">FAQs</a>
                        <a class="bold-foot" href="">Terms of Service</a>
                        <a class="bold-foot" href="">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    @yield('content')
</body>
</html>
