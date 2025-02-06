@include('layout.header')
<body>
    <nav>
            <div>
                    <img src="{{asset('img/logo-svg.svg')}}" class="img-logo" alt="">
            </div>
            <div>
                    <div class="hero-txt-nav">
                        <li class="nav-txt"><a href="{{route('employee.page')}}">Employee dashboard</a></li>
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
                <div class="hero-employee-button"><a href="{{route('employee.page')}}">Employee Dashboard</a></div>
            </div>
            <div class="hero-employee">
                <div class="hero-employee-rect"><img src="{{asset('img/streamline_information-desk-customer-solid.svg')}}" alt=""></div>
                <div class="hero-employee-button"><a href="">Customer Dashboard</a></div>
            </div>
        </div>
    </section>

@include('layout.footer')
</body>
</html>
