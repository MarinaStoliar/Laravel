<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{mix('css/main.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('images/Logo.svg')}}" type="image/x-icon">
</head>
<body>
<header class="header">
    <div class="container">
        <a href="#" class="logo"><img src="{{asset('images/Logo.svg')}}" alt="Logo"></a>
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Our App</a></li>
            <li><a href="#">Contacts</a></li>
        </ul>
        <a href="#" class="text">Log in</a>
        <a href="#" class="btn_login">Sign up</a>
    </div>
</header>

<main>
    <div class="container">
        <div class="block business">
            <div class="startup">
                <h1>
                    We boost growth for your startup business
                </h1>
                <p>
                    Our goal is top at the heart of creativity services industry as a digital creator. In has a after comment
                </p>
                <ul class="menu">
                    <li><a href="#" class="btn_contacts">Get Started</a></li>
                    <li><a href="#"><img src="{{asset('images/Icon.svg')}}" alt="" class="icon"></a></li>
                    <li><a href="#">Learn More</a></li>
                </ul>
            </div>
        </div>
        <div class="block goal">
                <h4>SERVICE</h4>
                <h2>Our Vison & Our Goal</h2>
            <div class="goal_list">
                <div class="design">
                    <a href="#" ><img src="{{asset('images/icondesign.svg')}}" alt="Design" class="icondesign"></a>
                    <h3>Graphic Design</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dui mi, bibendum eu erat id, ultricies semper metus. Nunc dapibus laoreet dolor nec imperdiet.</p>
                    <a href="#" class="btn_contacts">Learn More</a>
                </div>
                <div class="video">
                    <a href="#"><img src="{{asset('images/iconvideo.svg')}}" alt="Video" class="iconvideo"></a>
                    <h3>Video Editing</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dui mi, bibendum eu erat id, ultricies semper metus. Nunc dapibus laoreet dolor nec imperdiet.</p>
                    <a href="#" class="btn_contacts">Learn More</a>
                </div>
                <div class="marketing">
                    <a href="#" ><img src="{{asset('images/iconmarketing.svg')}}" alt="Marketing" class="iconmarketing"></a>
                    <h3>Digital Marketing</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dui mi, bibendum eu erat id, ultricies semper metus. Nunc dapibus laoreet dolor nec imperdiet.</p>
                    <a href="#" class="btn_contacts">Learn More</a>
                </div>
            </div>
        </div>

        <div class="block framework">
            <div class="complex">
                <ul>
                    <li>
                        <h3>Many Blocks and Components</h3>
                    </li>
                    <li>
                        <p>Startup Framework contains components and complex blocks which can easily be integrated into almost any design. </p>
                    </li>
                    <li>
                        <a href="#" class="btn_contacts">Explore</a>
                    </li>
                </ul>
            </div>
            <div class="play">
                <img src="{{asset('images/mask.png')}}" alt="mask" class="img_second pos1">
                <img src="{{asset('images/iconplay.svg')}}" alt="" class="img_second pos2">
            </div>
        </div>

        <div class="block testmonials">
            <h4>TESTMONIALS</h4>
            <h2>What Clients say about us</h2>
        </div>
        <div class="Rayhan">
            <img src="{{asset('images/Rayhan.svg')}}" alt="" class="img_second pos1">
            <p>Get a fully retina ready site when you build with Startup Framework. Websites look sharper and more gorgeous on devices with retina display support</p>
            <span>Rayhan Curran</span>
        </div>


        <div>
            <img src="{{asset('images/Kayley.svg')}}" alt="" class="img_second pos1">
            <img src="{{asset('images/Gene.svg')}}" alt="" class="img_second pos1">
            <img src="{{asset('images/Allan.svg')}}" alt="" class="img_second pos1">

        </div>

    </div>
</main>
<footer>
</footer>
</body>
</html>
