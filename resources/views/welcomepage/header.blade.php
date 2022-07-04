
<header class="continer-fluid ">
    <div class="header-top">
        <div class="container">
            <div class="row col-det">
                <div class="col-lg-6 d-none d-lg-block">
                    <ul class="ulleft">
                        <li>
                            <i class="far fa-envelope"></i>
                            sales@smarteyeapps.com
                            <span>|</span>
                        </li>
                        <li>
                            <i class="far fa-clock"></i>

                            <?php
                            date_default_timezone_set('Asia/Manila');
                            // $date = date('m/d/Y h:i:s a', time());
                            $month = date('m', time());
                            $dateObj   = DateTime::createFromFormat('!m', $month);
                            $monthName = $dateObj->format('F'); // March
                            $date = date('d Y ', time());
                            echo 'Date',': ',$monthName,' ', $date, '';
                            ?>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12">
                    <ul class="ulright">
                        <li>
                            <i class="fas fa-cloud-upload-alt"></i>
                            Upload Video
                            <span>|</span>
                        </li>
                        <li>
                            <i class="fas fa-user"></i>
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="menu-jk" class="header-bottom">
        <div class="container">
            <div class="row nav-row">
                <div class="col-md-3 logo">
                    <img src="/images/logo.jpg" alt="">
                </div>
                <div class="col-md-9 nav-col">
                    <nav class="navbar navbar-expand-lg navbar-light">

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="#">Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About Us</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#gallery">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#process">Process</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#blog">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact US</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>