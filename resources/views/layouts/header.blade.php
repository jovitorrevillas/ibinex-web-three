
    <!--Contact Bar-->
    <div class="d-lg-flex justify-content-center d-none">
        <div class="contact-container d-flex justify-content-end align-items-center">
            <div class="distance-phone">
                <i class="fas fa-phone fa-rotate-90 fa-sm"></i><span class="phone-text">1-800-972-3981</span>
            </div>
            <div class="distance-chat"><i class="fas fa-comments"></i><span class="live-chat">Live Chat</span></div>
            <div class="join-telegram-distance">
                <button type="button" class="join-telegram">
                    <div class="row">
                        <img src="{{asset("./img/home/telegram.png")}}" alt="telegram" class="telegram-logo"><span>join our telegram community</span>
                    </div>
                </button>
            </div>
        </div>
    </div>
    <header>
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-expand-lg nav-menu">
                    <!--Brand-->
                    <a href="#" class="navbar-brand brand-mobile"><img src="{{asset("./img/home/Vector Smart Object.png")}}" alt="ibinex-logo"></a>
                    <!--Toggle-Sidebar-->
                    <span class="toggle d-lg-none" onclick="open_nav()">&#9776;</span>

                    <div class="collapse navbar-collapse bottom-nav" id="navbarNavAltMarkup">
                        <a href="#" class="nav-name home-and-why-ibinex-distance">Home</a>
                        <a href="#" class="nav-name home-and-why-ibinex-distance">Why Ibinex</a>
                        <a href="#" class="nav-name nav-distance">Pricing</a>
                        <a href="#" class="nav-name home-and-why-ibinex-distance">Services</a>
                        <a href="#" class="nav-name nav-distance">About Us</a>
                        <a href="#" class="nav-name nav-security">Security</a>
                        <a href="#" class="nav-name legal-contact">Legal</a>
                        <a href="#" class="nav-name contact-margin">Contact Us</a>
                        <button class="button-demo" type="button">Live Demo</button>
                    </div>
                    <div class="sidenav" id="mySidenav">
                        <ul class="navbar-nav mr-auto d-flex d-md-none d-lg-none">
                            <li class="nav-item"><a href="javascript:void(0)" class="closebtn" onclick="close_nav()">&times;</a></li>
                            <a href="#" class="navbar-brand"><img src="./img/Ibinex-logo.png" alt="ibinex-logo" class="logo-ibinex"></a>
                            <li class="nav-item"><a href="#" class="nav-name">Home</a></li>
                            <li class="nav-item"><a href="#" class="nav-name">Why Ibinex</a></li>
                            <li class="nav-item"><a href="#" class="nav-name">Pricing</a></li>
                            <li class="nav-item"><a href="#" class="nav-name">Services</a></li>
                            <li class="nav-item"><a href="#" class="nav-name">About Us</a></li>
                            <li class="nav-item"><a href="#" class="nav-name">Security</a></li>
                            <li class="nav-item"><a href="#" class="nav-name">Legal</a></li>
                            <li class="nav-item"><a href="#" class="nav-name">Contact Us</a></li>
                        </ul>
                        <button class="button-demo button-margin" type="button">Live Demo</button>
                    </div>
            </nav>
        </div>
        </div>

        <div id="crypto-price" class="d-flex align-items-center horizontal-scroll">
            <div class="row">
                <div class="text-center text-white d-lg-inline-block padding-start">
                    <div class="display-crypto first-distance crypto-name">BTC/USD<span class="crypto-amount high-price">12,455.00</span></div>
                    <div class="display-crypto second-distance crypto-name">BTC/USD<span class="crypto-amount high-price">12,455.00</span></div>
                    <div class="display-crypto third-distance crypto-name">ETH/USD<span class="crypto-amount low-price">697.82</span></div>
                    <div class="display-crypto fourth-distance crypto-name">DASH/USD<span class="crypto-amount high-price">957.34</span></div>
                    <div class="display-crypto fifth-distance crypto-name">XPR/USD<span class="crypto-amount low-price">1.89</span></div>
                    <div class="display-crypto fifth-distance crypto-name">LTC/USD<span class="crypto-amount high-price">209.20</span></div>
                    <div class="display-crypto sixth-distance crypto-name">BH/USD<span class="crypto-amount high-price">2455.00</span></div>
                    <div class="display-crypto end-space crypto-name">BH/USD<span class="crypto-amount high-price">2455.00</span></div>
                </div>
            </div>
        </div>
    </header>
