<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WEBSITE</title>

        {{-- swiper --}}
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />

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
                            <p><span>5,690 </span>/ 10,000 Pohon</p>
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
        <section class="event">
            <div class="container">
                <div class="header">
                    <h1>Event Summary</h1>
                    <p>We give you a brief overview of the event to give you a glimpse of what we're doing <br/>
                        in the Green Haven Project, download the detailed PDF to see how you can get involved</p>
                </div>
                <div class="content">
                    <div class="wrapper">
                        <div class="time">
                            <h2>26/04/2024</h2>
                            <h1>08:00 - 11:00 WIB</h1>
                            <p>Join the impactful journey of planting mangroves,  <br/>
                                where you'll learn, collaborate with locals, earn recognition, <br/>
                                and share your story through media coverage</p>
                            <div class="btn">
                                <button>
                                    <div class="wrapper-img">
                                        <img src="{{ asset("assets/images/document-download.png") }}" />
                                    </div>
                                    View Event Details
                                </button>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="wrapper-img">
                                            <img src="{{ asset("assets/images/slide-img.png") }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="wrapper-img">
                                            <img src="{{ asset("assets/images/slide-img.png") }}" alt="">
                                        </div>    
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="wrapper-img">
                                            <img src="{{ asset("assets/images/slide-img.png") }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-swiper">
                                    <div class="swiper-button-prev">
                                        <img src="{{ asset("assets/images/leftarw.png") }}" alt="">
                                    </div>
                                    <div class="swiper-button-next">
                                        <img src="{{ asset("assets/images/rightarw.png") }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list">
                        <div class="box">
                            <h1>01</h1>
                            <p>Introducing the beauty  <br/>of mangroves on a journey <br/> to the planting site.</p>
                        </div>
                        <div class="box box-secondary">
                            <h1>02</h1>
                            <p>Introducing the beauty  <br/>of mangroves on a journey <br/> to the planting site.</p>
                        </div>
                        <div class="box box-secondary">
                            <h1>03</h1>
                            <p>Introducing the beauty  <br/>of mangroves on a journey <br/> to the planting site.</p>
                        </div>
                        <div class="box box-secondary">
                            <h1>04</h1>
                            <p>Introducing the beauty  <br/>of mangroves on a journey <br/> to the planting site.</p>
                        </div>
                        <div class="box box-secondary">
                            <h1>05</h1>
                            <p>Introducing the beauty  <br/>of mangroves on a journey <br/> to the planting site.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="sponsorship">
            <div class="container">
                <div class="header">
                    <h1>Sponsorship Packages</h1>
                    <p>Our sponsorship package offers branding, promotional opportunities, and visibility at <br/> our event, ideal for enhancing company presence and community engagement.</p>
                </div>
                <div class="content">
                    <h1 class="title">Personal Sponsorship Package</h1>
                    <div class="table">
                        <div class="table-head">
                            <div class="box-title">
                                <h1>Membership Tier</h1>
                            </div>
                            <div class="box-title center">
                                <h1>Min. Seeds</h1>
                            </div>
                            <div class="box-title center">
                                <h1>Min. Buy</h1>
                            </div>
                            <div class="box-title center">
                                <h1>Benefits</h1>
                            </div>
                            <div class="box-title center">
                                <h1>donors</h1>
                            </div>
                            <div class="box-title center right">
                                <h1>Action</h1>
                            </div>
                        </div>
                        <div class="table-body">
                            <div class="box-title">
                                <img class="icon" src="{{ asset("assets/images/icon1-sponsorship.png") }}" alt="">
                                <h1>Seedling Scout</h1>
                            </div>
                            <div class="box-title center">
                                <h1>5 Seeds</h1>
                            </div>
                            <div class="box-title center">
                                <h1>IDR 75K</h1>
                            </div>
                            <div class="box-title center">
                                <h1>Badge</h1>
                            </div>
                            <div class="box-title center">
                                <h1>4,900 Donors</h1>
                            </div>
                            <div class="box-title center right">
                                <button>Support Our Mission <img src="{{ asset("assets/images/arrow-right.png") }}" alt=""></button>
                            </div>
                        </div>
                        <div class="table-body bg-light">
                            <div class="box-title">
                                <img class="icon" src="{{ asset("assets/images/icon2-sponsorship.png") }}" alt="">
                                <h1>Sapling Savior</h1>
                            </div>
                            <div class="box-title center">
                                <h1>10 Seeds</h1>
                            </div>
                            <div class="box-title center">
                                <h1>IDR 150K</h1>
                            </div>
                            <div class="box-title center">
                                <h1>Badge + Pin</h1>
                            </div>
                            <div class="box-title center">
                                <h1>4,300 Donors</h1>
                            </div>
                            <div class="box-title center right">
                                <button>Support Our Mission <img src="{{ asset("assets/images/arrow-right.png") }}" alt=""></button>
                            </div>
                        </div>
                        <div class="table-body">
                            <div class="box-title">
                                <img class="icon" src="{{ asset("assets/images/icon3-sponsorship.png") }}" alt="">
                                <h1>Tree Titan</h1>
                            </div>
                            <div class="box-title center">
                                <h1>20 Seeds</h1>
                            </div>
                            <div class="box-title center">
                                <h1>IDR 300K</h1>
                            </div>
                            <div class="box-title center">
                                <h1>Badge + Pin</h1>
                            </div>
                            <div class="box-title center">
                                <h1>15,000 Donors</h1>
                            </div>
                            <div class="box-title center right">
                                <button>Support Our Mission <img src="{{ asset("assets/images/arrow-right.png") }}" alt=""></button>
                            </div>
                        </div>
                        <div class="table-body bg-light">
                            <div class="box-title">
                                <img class="icon" src="{{ asset("assets/images/icon4-sponsorship.png") }}" alt="">
                                <h1>Mangrove Master</h1>
                            </div>
                            <div class="box-title center">
                                <h1>50 Seeds</h1>
                            </div>
                            <div class="box-title center">
                                <h1>IDR 750K</h1>
                            </div>
                            <div class="box-title center">
                                <h1>Badge + Pin + Bag</h1>
                            </div>
                            <div class="box-title center">
                                <h1>5,000 Donors</h1>
                            </div>
                            <div class="box-title center right">
                                <button>Support Our Mission <img src="{{ asset("assets/images/arrow-right.png") }}" alt=""></button>
                            </div>
                        </div>
                        <div class="table-body">
                            <div class="box-title">
                                <img class="icon" src="{{ asset("assets/images/icon5-sponsorship.png") }}" alt="">
                                <h1 class="grove">Guardian of the Grove</h1>
                            </div>
                            <div class="box-title center">
                                <h1>100 Seeds</h1>
                            </div>
                            <div class="box-title center">
                                <h1>IDR 1,500K</h1>
                            </div>
                            <div class="box-title center">
                                <h1>Badge + Pin + Bag</h1>
                            </div>
                            <div class="box-title center">
                                <h1>300 Donors</h1>
                            </div>
                            <div class="box-title center right">
                                <button>Support Our Mission <img src="{{ asset("assets/images/arrow-right.png") }}" alt=""></button>
                            </div>
                        </div>
                        <div class="table-body bg-light">
                            <div class="box-title">
                                <img class="icon" src="{{ asset("assets/images/icon6-sponsorship.png") }}" alt="">
                                <h1>Mangrove Maven</h1>
                            </div>
                            <div class="box-title center">
                                <h1>200 Seeds</h1>
                            </div>
                            <div class="box-title center">
                                <h1>IDR 3,000K</h1>
                            </div>
                            <div class="box-title center">
                                <h1>Badge + Pin + Bag</h1>
                            </div>
                            <div class="box-title center">
                                <h1>10 Donors</h1>
                            </div>
                            <div class="box-title center right">
                                <button>Support Our Mission <img src="{{ asset("assets/images/arrow-right.png") }}" alt=""></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="line-hr"></div>
        <section class="corporat">
            <h1 class="title">Corporate Sponsorship Package</h1>
                <div class="table">
                    <div class="table-head">
                        <div class="box-title">
                            <h1>Benefits</h1>
                        </div>
                        <div class="box-title center">
                            <h1>Eco Trailblazers</h1>
                        </div>
                        <div class="box-title center">
                            <h1>Green Innovators</h1>
                        </div>
                        <div class="box-title center right">
                            <h1>Eco Vanguard</h1>
                        </div>
                    </div>
                    <div class="table-body">
                        <div class="box-title">
                            <h1>Price</h1>
                        </div>
                        <div class="box-title center">
                            <h1>15 Million IDR</h1>
                        </div>
                        <div class="box-title center">
                            <h1>30 Million IDR</h1>
                        </div>
                        <div class="box-title center">
                            <h1>45 Million IDR</h1>
                        </div>
                    </div>
                    <div class="table-body bg-light">
                        <div class="box-title">
                            <h1>CO2 Sequestration</h1>
                        </div>
                        <div class="box-title center">
                            <h1>22,5 ton/year</h1>
                        </div>
                        <div class="box-title center">
                            <h1>45 ton/year</h1>
                        </div>
                        <div class="box-title center">
                            <h1>67,5 ton/year</h1>
                        </div>
                    </div>
                    <div class="table-body">
                        <div class="box-title">
                            <h1>Number of Tress</h1>
                        </div>
                        <div class="box-title center">
                            <h1>1000 Trees</h1>
                        </div>
                        <div class="box-title center">
                            <h1>2000 Trees</h1>
                        </div>
                        <div class="box-title center">
                            <h1>3000 Trees</h1>
                        </div>
                    </div>
                    <div class="table-body bg-light">
                        <div class="box-title">
                            <h1>Logo on JCI Banner</h1>
                        </div>
                        <div class="box-title center">
                            <img src="{{ asset("assets/images/tick-circle.png") }}" alt="">
                        </div>
                        <div class="box-title center">
                            <img src="{{ asset("assets/images/tick-circle.png") }}" alt="">
                        </div>
                        <div class="box-title center">
                            <img src="{{ asset("assets/images/tick-circle.png") }}" alt="">
                        </div>
                    </div>
                    <div class="table-body">
                        <div class="box-title">
                            <h1>Logo on Communal Stainless Plate</h1>
                        </div>
                        <div class="box-title center">
                            <img src="{{ asset("assets/images/tick-circle.png") }}" alt="">
                        </div>
                        <div class="box-title center">
                            <img src="{{ asset("assets/images/tick-circle.png") }}" alt="">
                        </div>
                        <div class="box-title center">
                            <img src="{{ asset("assets/images/tick-circle.png") }}" alt="">
                        </div>
                    </div>
                    <div class="table-body bg-light">
                        <div class="box-title">
                            <h1>Considered as Main Sponsor</h1>
                        </div>
                        <div class="box-title center">
                            <img src="{{ asset("assets/images/tick-circle.png") }}" alt="">
                        </div>
                        <div class="box-title center">
                            <img src="{{ asset("assets/images/tick-circle.png") }}" alt="">
                        </div>
                        <div class="box-title center">
                            <img src="{{ asset("assets/images/tick-circle.png") }}" alt="">
                        </div>
                    </div>
                    <div class="table-body">
                        <div class="box-title">
                            <h1>Dedicated Stainless Plate</h1>
                        </div>
                        <div class="box-title center">
                            {{-- <img src="{{ asset("assets/images/tick-circle.png") }}" alt=""> --}}
                        </div>
                        <div class="box-title center">
                            <img src="{{ asset("assets/images/tick-circle.png") }}" alt="">
                        </div>
                        <div class="box-title center">
                            <img src="{{ asset("assets/images/tick-circle.png") }}" alt="">
                        </div>
                    </div>
                    <div class="table-body bg-light">
                        <div class="box-title">
                            <h1>Report Update on Planted Trees</h1>
                        </div>
                        <div class="box-title center">
                            {{-- <img src="{{ asset("assets/images/tick-circle.png") }}" alt=""> --}}
                        </div>
                        <div class="box-title center">
                            <img src="{{ asset("assets/images/tick-circle.png") }}" alt="">
                        </div>
                        <div class="box-title center">
                            <img src="{{ asset("assets/images/tick-circle.png") }}" alt="">
                        </div>
                    </div>
                    <div class="table-body">
                        <div class="box-title">
                            <h1>Logo on Event Clothings</h1>
                        </div>
                        <div class="box-title center">
                            {{-- <img src="{{ asset("assets/images/tick-circle.png") }}" alt=""> --}}
                        </div>
                        <div class="box-title center">
                            {{-- <img src="{{ asset("assets/images/tick-circle.png") }}" alt=""> --}}
                        </div>
                        <div class="box-title center">
                            <img src="{{ asset("assets/images/tick-circle.png") }}" alt="">
                        </div>
                    </div>
                    <div class="table-body bg-blue">
                        <div class="box-title">
                            <h1>Make a Donation</h1>
                        </div>
                        <div class="box-title center">
                            <button>Support Our Mission <img src="{{ asset("assets/images/arrow-right-blue.png") }}" alt=""></button>
                        </div>
                        <div class="box-title center">
                            <button>Support Our Mission <img src="{{ asset("assets/images/arrow-right-blue.png") }}" alt=""></button>
                        </div>
                        <div class="box-title">
                            <button>Support Our Mission <img src="{{ asset("assets/images/arrow-right-blue.png") }}" alt=""></button>
                        </div>
                    </div>
                </div>
        </section>
        <section class="donate">
            <div class="container">
                <div class="header">
                    <h1>Donate Today and be a <br/>Guardian of the Green Belt.</h1>
                    <p>Join us in our mission to rejuvenate and protect our shorelines <br/> by donating to our mangrove planting project. </p>
                </div>
                <div class="content">
                    <button>Support Our Mission <img src="{{ asset("assets/images/arrow-right.png") }}" alt=""></button>
                </div>
                <div class="wrapper-img">
                    <img class="img-1" src="{{ asset("assets/images/donate-img1.png") }}" alt="">
                    <img class="img-2" src="{{ asset("assets/images/donate-img2.png") }}" alt="">
                    <img class="img-3" src="{{ asset("assets/images/donate-img3.png") }}" alt="">
                    <img class="img-4" src="{{ asset("assets/images/donate-img4.png") }}" alt="">
                    <img class="img-5" src="{{ asset("assets/images/donate-img5.png") }}" alt="">
                </div>
            </div>
        </section>
        <footer class="footer">
            <h1>Nama yang Mengerjakan Test : Hendra Aditya Pratama</h1>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
            });
        </script>
    </body>
</html>
