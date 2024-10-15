<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="Welcome to Daniel Mihai's portfolio! I am a Fullstack developer with experience in Laravel, PHP, JavaScript and many other technologies. Check out my projects and see how I can help you.">
    <meta name="keywords" content="Fullstack разработчик, веб-разработка, Laravel, PHP, JavaScript, портфолио, сайты, приложения, Fullstack developer, web development, Laravel, PHP, JavaScript, portfolio, websites, applications">
    <meta property="og:title" content="Daniel Mihai - Software developer">
    <meta property="og:description" content="Check out my work and find out how I can help your business.">
    <meta property="og:image" content="URL_к_изображению_вашего_портфолио">
    <meta property="og:url" content="URL_вашего_портфолио">
    <meta property="og:type" content="website">
    <!-- Подключение CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <title>Daniel Mihai - Software developer</title>
</head>
<body>
    <!-- Шапка сайта -->
    <header>
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="">
            <h1>danielmihai</h1>
        </div>

        <div class="links">
            <a href="#">Skills</a>
            <a href="#">Projects</a>
            <a href="#">Testimonial</a>
            <a href="#">Experience</a>
            <a href="#">About me</a>
            <a href="#">Price List</a>
            <a href="#">FAQ</a>
            <a href="#">Contact</a>
        </div>

        <div class="resume">
            <a href="https://drive.google.com/file/d/1I5ljSCsa0r0zkjLNn4lRlZSKUhuQ_h5A/view" target="_blank">Resume</a>
        </div>
    </header>

    <!-- Блок Hero -->
    <div class="hero">
        <div class="main-text">
            <h2>Hello I’am <b>Daniel Mihai</b></h2>
            <h1>Software <b>Developer</b></h1>
            <h2>Based In <b>Moldova.</b></h2>

            <div class="main-text--sub">
                <span>Hi! I'm Daniel Mihai, an experienced fullstack developer with over a year in software development. Clients trust me to build reliable, secure solutions, ensuring their business needs are met efficiently. I focus on delivering high-quality, user-friendly applications while staying ahead in technology.</span>
            </div>

            <div class="main-text--socials">
                <a href="/"><img src="{{ asset('images/linkedin.png') }}" alt="LinkedIn"></a>
                <a href="/"><img src="{{ asset('images/instagram.png') }}" alt="Instagram"></a>
                <a href="/"><img src="{{ asset('images/github.png') }}" alt="GitHub"></a>
            </div>
        </div>

        <div class="hero-img">
            <img src="{{ asset('images/hero.png') }}">
        </div>
    </div>
</body>
</html>