<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WEBSITE</title>

        {{-- font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        @vite(['resources/sass/app.scss'])
    </head>
    <body>
        <nav class="navbar">
            <div class="logo">
                <img src="{{ asset('assets/images/logobrand.png') }}" />
            </div>
            <ul class="nav">
                <li><a href="#">About Green Haven</a></li>
                <li><a href="#">Event Details</a></li>
                <li><a href="#">Our Sponsors</a></li>
                <li><a href="#">Leaderboard</a></li>
            </ul>
            <button class="btn">Plant a Mangrove</button>
        </nav>
        <section class="hero">
            <div class="main">
                <div class="support">
                    <button>Green Haven Project - Mangrove</button>
                    <h1>Green Horizons Await, Join Us in <br/> Planting 10,000 Mangroves!</h1>
                    <div class="mission">
                        <div class="text">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon-tree.png') }}" />
                            </div>
                            <p><span>5,690</span>/ 10,000 Pohon</p>
                            <button>Support Our Mission <img src="{{ asset('assets/images/arrow-right.png') }}" /></button>
                        </div>
                        <div class="wrapper-meter">
                            <div class="bgmeter">
                                <div class="meter"></div>
                            </div>
                        </div>
                    </div>
                    <img class="img-support" src="{{ asset("assets/images/img-support.png") }}" >
                </div>
                <div class="line"></div>
                <div class="leaderboard">
                    <h1>Leaderboard</h1>
                    <div class="btn">
                        <button>Most Donation</button>
                        <button class="btn-recent">Most Recent</button>
                    </div>
                    <div class="content">
                        <div class="user">
                            <div class="number">
                                <h1>01</h1>
                            </div>
                            <div class="icon">
                                <img src="{{ asset('assets/images/planet-earth 1.png') }}" alt="">
                            </div>
                            <div class="name">
                                <p>Mangrove Maven</p>
                                <h1>Budi Hartanto</h1>
                            </div>
                            <div class="tree">
                                <img src="{{ asset('assets/images/icon-tree.png') }}" alt="">
                                <p><span>350</span>Pohon</p>
                            </div>
                        </div>
                        <div class="user">
                            <div class="number">
                                <h1>02</h1>
                            </div>
                            <div class="icon">
                                <img src="{{ asset('assets/images/planet-earth 1.png') }}" alt="">
                            </div>
                            <div class="name">
                                <p>Mangrove Maven</p>
                                <h1>Dewi Sartika</h1>
                            </div>
                            <div class="tree">
                                <img src="{{ asset('assets/images/icon-tree.png') }}" alt="">
                                <p><span>330</span>Pohon</p>
                            </div>
                        </div>
                        <div class="user">
                            <div class="number">
                                <h1>03</h1>
                            </div>
                            <div class="icon">
                                <img src="{{ asset('assets/images/planet-earth 1.png') }}" alt="">
                            </div>
                            <div class="name">
                                <p>Mangrove Maven</p>
                                <h1>Eko Wahyudi</h1>
                            </div>
                            <div class="tree">
                                <img src="{{ asset('assets/images/icon-tree.png') }}" alt="">
                                <p><span>200</span>Pohon</p>
                            </div>
                        </div>
                        <div class="user u4">
                            <div class="number">
                                <h1>04</h1>
                            </div>
                            <div class="icon">
                                <img src="{{ asset('assets/images/planet-earth 1-0.png') }}" alt="">
                            </div>
                            <div class="name">
                                <p>Guardian of the Grove</p>
                                <h1>Rina Kartika</h1>
                            </div>
                            <div class="tree">
                                <img src="{{ asset('assets/images/icon-tree.png') }}" alt="">
                                <p><span>190</span>Pohon</p>
                            </div>
                        </div>
                        <div class="user u5">
                            <div class="number">
                                <h1>05</h1>
                            </div>
                            <div class="icon">
                                <img src="{{ asset('assets/images/planet-earth 1-0.png') }}" alt="">
                            </div>
                            <div class="name">
                                <p>Guardian of the Grove</p>
                                <h1>Agus Prasetyo</h1>
                            </div>
                            <div class="tree">
                                <img src="{{ asset('assets/images/icon-tree.png') }}" alt="">
                                <p><span>140</span>Pohon</p>
                            </div>
                        </div>
                        <div class="user u6">
                            <div class="number">
                                <h1>06</h1>
                            </div>
                            <div class="icon">
                                <img src="{{ asset('assets/images/planet-earth 1-1.png') }}" alt="">
                            </div>
                            <div class="name">
                                <p>Mangrove Master</p>
                                <h1>Irfan Setiawan</h1>
                            </div>
                            <div class="tree">
                                <img src="{{ asset('assets/images/icon-tree.png') }}" alt="">
                                <p><span>80</span>Pohon</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sponsor">
                <div class="logo-sponsor"><img src="{{ asset("assets/images/img1.png") }}" alt=""></div>
                <div class="logo-sponsor"><img src="{{ asset("assets/images/img2.png") }}" alt=""></div>
                <div class="logo-sponsor"><img src="{{ asset("assets/images/img3.png") }}" alt=""></div>
                <div class="logo-sponsor"><img src="{{ asset("assets/images/img4.png") }}" alt=""></div>
                <div class="logo-sponsor"><img src="{{ asset("assets/images/img5.png") }}" alt=""></div>
                <div class="logo-sponsor"><img src="{{ asset("assets/images/img6.png") }}" alt=""></div>
            </div>
        </section>
        <section class="about">
            <div class="logo">
                <div class="logosatu">
                    <img src="{{ asset("assets/images/Polygon 1.png") }}" />
                </div>
                <div class="logodua">
                    <img src="{{ asset("assets/images/Polygon 2.png") }}" />
                </div>
            </div>
            <div class="text">
                <h1>About Green Haven Project</h1>
                <p>The Green Haven Project - Mangrove aims to restore coastal ecosystems and raise awareness by planting <br/> mangroves and educating participants about the importance of these areas. This six-hour event will involve JCI <br/> members, local farmers, and students, focusing on combating beach erosion and promoting ESG values.</p>
            </div>
            <div class="content-img">
                <div class="wrapper-img1">
                    <img src="{{ asset("assets/images/img-left-about.jpeg") }}" alt="">
                    <h1>Before mangroves were planted</h1>
                </div>
                <div class="bg-arrow">
                    <div class="logo"><img src="{{ asset('assets/images/logo-arrow.png') }}" alt=""></div>
                    <h1>TRANSFORMATION</h1>
                </div>
                <div class="wrapper-img2">
                    <img src="{{ asset("assets/images/img-right-about.png") }}" alt="">
                    <h1>After mangroves were planted</h1>
                </div>
            </div>
        </section>
    </body>
</html>
