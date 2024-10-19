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
                <a href="https://www.linkedin.com/in/danielmihaiit/?locale=en_US" target="_blank"><img src="{{ asset('images/linkedin.png') }}" alt="LinkedIn"></a>
                <a href="" target="_blank"><img src="{{ asset('images/instagram.png') }}" alt="Instagram"></a>
                <a href="https://github.com/messsimo" target="_blank"><img src="{{ asset('images/github.png') }}" alt="GitHub"></a>
            </div>
        </div>

        <div class="hero-img">
            <img src="{{ asset('images/hero.png') }}">
        </div>
    </div>

    <!-- Блок Скиллов -->
    <div class="skills">
        <h2>My <b>Skills</b></h2>

        <div class="skills-container">
            <div class="block">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50"><path d="M9,7l3,34l14,4l14-4c1-11.33,2-22.67,3-34H9z M33.76,35l-7.77,2l-7.76-2l-0.39-5h3.86l0.18,2L26,32.62L30.17,32l0.41-5	H17.59l0.96-12H34l0.7,6H31l-0.23-2h-8.36l-0.32,4h12.66L33.76,35z"></path></svg>
                <span>HTML</span>
            </div>
            <div class="block active">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50"><path fill-rule="evenodd" d="M 42 6 L 39 40 L 25 44 L 11 40 L 8 6 Z M 16.800781 28 L 20.800781 28 L 20.898438 30.5 L 25 31.898438 L 29.101563 30.5 L 29.398438 26 L 20.601563 26 L 20.398438 22 L 29.601563 22 L 29.898438 18 L 16.101563 18 L 15.800781 14 L 34.101563 14 L 33.601563 22 L 32.898438 33.5 L 25 36.101563 L 17.101563 33.5 Z"></path></svg>
                <span>CSS</span>
            </div>
            <div class="block">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50"><path d="M 43.335938 4 L 6.667969 4 C 5.195313 4 4 5.195313 4 6.667969 L 4 43.332031 C 4 44.804688 5.195313 46 6.667969 46 L 43.332031 46 C 44.804688 46 46 44.804688 46 43.335938 L 46 6.667969 C 46 5.195313 44.804688 4 43.335938 4 Z M 27 36.183594 C 27 40.179688 24.65625 42 21.234375 42 C 18.140625 42 15.910156 39.925781 15 38 L 18.144531 36.097656 C 18.75 37.171875 19.671875 38 21 38 C 22.269531 38 23 37.503906 23 35.574219 L 23 23 L 27 23 Z M 35.675781 42 C 32.132813 42 30.121094 40.214844 29 38 L 32 36 C 32.816406 37.335938 33.707031 38.613281 35.589844 38.613281 C 37.171875 38.613281 38 37.824219 38 36.730469 C 38 35.425781 37.140625 34.960938 35.402344 34.199219 L 34.449219 33.789063 C 31.695313 32.617188 29.863281 31.148438 29.863281 28.039063 C 29.863281 25.179688 32.046875 23 35.453125 23 C 37.878906 23 39.621094 23.84375 40.878906 26.054688 L 37.910156 27.964844 C 37.253906 26.789063 36.550781 26.328125 35.453125 26.328125 C 34.335938 26.328125 33.628906 27.039063 33.628906 27.964844 C 33.628906 29.109375 34.335938 29.570313 35.972656 30.28125 L 36.925781 30.691406 C 40.171875 32.078125 42 33.496094 42 36.683594 C 42 40.117188 39.300781 42 35.675781 42 Z"></path></svg>
                <span>JavaScript</span>
            </div>
            <div class="block">
               <img src="{{ asset('images/php.png') }}" alt="PHP">
               <span>PHP</span>
            </div>
            <div class="block">
                <img src="{{ asset('images/laravel.png') }}" alt="Laravel">
                <span>Laravel</span>
            </div>
            <div class="block">
                <img src="{{ asset('images/sql.png') }}" alt="SQL">
                <span>SQL</span>
            </div>
            <div class="block">
                <img src="{{ asset('images/mysql.png') }}" alt="mySQL">
                <span>mySQL</span>
            </div>
            <div class="block">
                <img src="{{ asset('images/docker.png') }}" alt="Docker">
                <span>Docker</span>
            </div>
            <div class="block">
                <img src="{{ asset('images/git.png') }}" alt="Git">
                <span>Git</span>
            </div>
            <div class="block">
                <img src="{{ asset('images/figma.png') }}" alt="Figma">
                <span>Figma</span>
            </div>
        </div>
    </div>

    <!-- Блок с кейсами работ -->
    <div class="cases">
        <h2>My <b>Projects</b></h2>

        <div class="cases-container">
            <div class="block">
                <img src="{{ asset('images/krud.png') }}" alt="Krud Restaurant">
                <div class="block--text">
                    <h3>01</h3>
                    <h4>Krud Restaurant</h4>
                    <span>Krud Restaurant is a responsive web application for a restaurant in Iasi, Romania, offering full CRUD functionality to manage products. It adapts to any screen size, from desktop to mobile. Users can view the menu, add items to the cart, and place orders through an intuitive checkout form. The app integrates with OpenStreetMap to display the restaurant's location, ensuring easy access for customers. Designed for smooth user interaction and efficient restaurant management, Krud Restaurant combines functionality with reliability.</span>
                    <div class="link">
                        <a href="https://github.com/messsimo/krud_restaurant" target="_blank">
                            <span>Repository on GitHub ↗</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="block">
                <div class="block--text">
                    <h3>02</h3>
                    <h4>Rondo Lounge Cafe</h4>
                    <span>Rondo Lounge Cafe is a responsive CRUD web application for a restaurant in Chisinau, Moldova. It offers full CRUD functionality to manage product information, adaptable to any screen size from 1920px to 360px. The home page displays all products and categories, allowing users to easily browse. The shopping cart enables adding, updating, and removing items, providing a smooth ordering experience. Rondo Lounge Cafe ensures efficient management and a user-friendly interface.</span>
                    <div class="link">
                        <a href="https://github.com/messsimo/rondo_cafe" target="_blank">
                            <span>Repository on GitHub ↗</span>
                        </a>
                    </div>
                </div>
                <img class="reverse-img" src="{{ asset('images/rondo.png') }}" alt="Rondo Lounge Cafe">
            </div>

            <div class="block">
                <img src="{{ asset('images/fitness.png') }}" alt="FitnessLove - Fitness Club">
                <div class="block--text">
                    <h3>03</h3>
                    <h4>FitnessLove - Fitness Club</h4>
                    <span>I LOVE FITNESS is a sports complex in Moscow, Russia. The website provides detailed information about the club and allows users to book subscriptions at affordable prices. It is fully adapted for all screen sizes, from 1920px to 360px. The home page features club details and a booking form for subscriptions. Additionally, an API integration with OpenStreetMap displays the club's location for easy navigation.</span>
                    <div class="link">
                        <a href="https://github.com/messsimo/fitness-love" target="_blank">
                            <span>Repository on GitHub ↗</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Блок отзывов -->
    <div class="reviews">
        <h2>My <b>Testimonial</b></h2>

        <div class="reviews-container">
            <div class="block">
                <img src="{{ asset('images/elena.png') }}" alt="">
                <div class="block--text">
                    <span>An exceptional website! Seamless subscription booking and flawless adaptation. Highly recommend Daniel as a developer.</span>
                    <div class="hr"></div>
                    <p>Elena Voronina</p>
                </div>
            </div>
            <div class="block active">
                <img src="{{ asset('images/sandu.png') }}" alt="">
                <div class="block--text">
                    <span>Daniel delivered a high-quality solution. The product management system is smooth, and customers love the ease of use.</span>
                    <div class="hr"></div>
                    <p>Alexandru Rusu</p>
                </div>
            </div>
            <div class="block">
                <img src="{{ asset('images/anton.png') }}" alt="">
                <div class="block--text">
                    <span>Outstanding development! The site is user-friendly, and the shopping cart integration is perfect. Daniel is a top-tier developer.</span>
                    <div class="hr"></div>
                    <p>Anton Ionescu</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Блок с опытом работы -->
    <div class="exp">
        <h2>My <b>Experience</b></h2>

        <div class="exp-container">
            <div class="block">
                <div class="block--top">
                    <h3>Middle Web Developer at Oxem Studio</h3>
                    <p>August 2024 – Present</p>
                </div>
                <span>Developed custom web applications and websites for clients in e-commerce, fintech, and education, leading full-cycle project development using Laravel, MySQL, and RESTful APIs. Optimized processes to reduce project delivery times by 15% and collaborated with clients to define technical specifications while ensuring clear communication throughout development. Conducted code reviews to maintain quality and built interactive user interfaces.</span>
            </div>
            <div class="block active">
                <div class="block--top">
                    <h3>Junior FullStack Developer at ZapTab</h3>
                    <p>February 2024 – July 2024</p>
                </div>
                <span>Developed a web application for fitness club management, optimizing database interactions by 20% and creating a responsive interface with Laravel Blade. Implemented a filtering system for services and trainers, integrated third-party APIs for scheduling, and collaborated with UX/UI designers on user-friendly dashboards.</span>
            </div>
        </div>
    </div>

    <!-- Блок с информацией обо мне -->
    <div class="aboutme">
        <div class="aboutme-container">
            <img src="{{ asset('images/me.png') }}" alt="Me">

            <div class="text">
                <h2>About <b>Me</b></h2>
                <span>My name is Daniel, and I am an experienced web developer with several years of expertise in commercial projects across various industries, including fintech, e-commerce, and educational platforms. I leverage modern technologies such as Laravel, MySQL, and RESTful APIs to create efficient and reliable solutions for my clients. </span>
                <span>My communication skills and ability to listen allow me to connect easily with clients, helping me to gain a deeper understanding of their needs and challenges. I take pride in the fact that my clients trust me with their projects and ideas, knowing that I will put in the effort to achieve their goals.</span>
                <span>If you are looking for a professional who can bring your project to life at a high level and offer innovative solutions, feel free to reach out to me. Let’s discuss how I can help you succeed and elevate your business to new heights!</span>
                <div class="resume">
                    <a href="https://drive.google.com/file/d/1I5ljSCsa0r0zkjLNn4lRlZSKUhuQ_h5A/view" target="_blank">Resume</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Блок с Прайс-листом -->
    <div class="price-list" id="price-list">
        <h2>Price <b>List</b></h2>

        <div class="price-list--container">
            <!-- Пакет#1 -->
            <div class="block">
                <h3>From 200$</h3>
                <p>Basic</p>
                <div class="advantages">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.cls-1{fill:#fff;opacity:0;}.cls-2{fill:#231f20;}</style></defs><title>checkmark-square</title><g id="Layer_2" data-name="Layer 2"><g id="checkmark-square"><g id="checkmark-square-2" data-name="checkmark-square"><rect class="cls-1" width="24" height="24"/><path class="cls-2" d="M20,11.83a1,1,0,0,0-1,1V18.4a.6.6,0,0,1-.6.6H5.6a.6.6,0,0,1-.6-.6V5.6A.6.6,0,0,1,5.6,5h9.57a1,1,0,1,0,0-2H5.6A2.61,2.61,0,0,0,3,5.6V18.4A2.61,2.61,0,0,0,5.6,21H18.4A2.61,2.61,0,0,0,21,18.4V12.83A1,1,0,0,0,20,11.83Z"/><path class="cls-2" d="M10.72,11a1,1,0,0,0-1.44,1.38l2.22,2.33a1,1,0,0,0,.72.31h0a1,1,0,0,0,.72-.3l6.78-7a1,1,0,1,0-1.44-1.4l-6.05,6.26Z"/></g></g></g></svg>
                        <span>Hosting and Domain setup</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.cls-1{fill:#fff;opacity:0;}.cls-2{fill:#231f20;}</style></defs><title>checkmark-square</title><g id="Layer_2" data-name="Layer 2"><g id="checkmark-square"><g id="checkmark-square-2" data-name="checkmark-square"><rect class="cls-1" width="24" height="24"/><path class="cls-2" d="M20,11.83a1,1,0,0,0-1,1V18.4a.6.6,0,0,1-.6.6H5.6a.6.6,0,0,1-.6-.6V5.6A.6.6,0,0,1,5.6,5h9.57a1,1,0,1,0,0-2H5.6A2.61,2.61,0,0,0,3,5.6V18.4A2.61,2.61,0,0,0,5.6,21H18.4A2.61,2.61,0,0,0,21,18.4V12.83A1,1,0,0,0,20,11.83Z"/><path class="cls-2" d="M10.72,11a1,1,0,0,0-1.44,1.38l2.22,2.33a1,1,0,0,0,.72.31h0a1,1,0,0,0,.72-.3l6.78-7a1,1,0,1,0-1.44-1.4l-6.05,6.26Z"/></g></g></g></svg>
                        <span>Adaptive design</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.cls-1{fill:#fff;opacity:0;}.cls-2{fill:#231f20;}</style></defs><title>checkmark-square</title><g id="Layer_2" data-name="Layer 2"><g id="checkmark-square"><g id="checkmark-square-2" data-name="checkmark-square"><rect class="cls-1" width="24" height="24"/><path class="cls-2" d="M20,11.83a1,1,0,0,0-1,1V18.4a.6.6,0,0,1-.6.6H5.6a.6.6,0,0,1-.6-.6V5.6A.6.6,0,0,1,5.6,5h9.57a1,1,0,1,0,0-2H5.6A2.61,2.61,0,0,0,3,5.6V18.4A2.61,2.61,0,0,0,5.6,21H18.4A2.61,2.61,0,0,0,21,18.4V12.83A1,1,0,0,0,20,11.83Z"/><path class="cls-2" d="M10.72,11a1,1,0,0,0-1.44,1.38l2.22,2.33a1,1,0,0,0,.72.31h0a1,1,0,0,0,.72-.3l6.78-7a1,1,0,1,0-1.44-1.4l-6.05,6.26Z"/></g></g></g></svg>
                        <span>Feedback forms</span>
                    </div>
                </div>
                <div class="buy">
                    <a href="">Choose a service</a>
                </div>
            </div>
            <!-- Пакет#2 -->
            <div class="block">
                <h3>From 300$</h3>
                <p>Standart</p>
                <div class="advantages">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.cls-1{fill:#fff;opacity:0;}.cls-2{fill:#231f20;}</style></defs><title>checkmark-square</title><g id="Layer_2" data-name="Layer 2"><g id="checkmark-square"><g id="checkmark-square-2" data-name="checkmark-square"><rect class="cls-1" width="24" height="24"/><path class="cls-2" d="M20,11.83a1,1,0,0,0-1,1V18.4a.6.6,0,0,1-.6.6H5.6a.6.6,0,0,1-.6-.6V5.6A.6.6,0,0,1,5.6,5h9.57a1,1,0,1,0,0-2H5.6A2.61,2.61,0,0,0,3,5.6V18.4A2.61,2.61,0,0,0,5.6,21H18.4A2.61,2.61,0,0,0,21,18.4V12.83A1,1,0,0,0,20,11.83Z"/><path class="cls-2" d="M10.72,11a1,1,0,0,0-1.44,1.38l2.22,2.33a1,1,0,0,0,.72.31h0a1,1,0,0,0,.72-.3l6.78-7a1,1,0,1,0-1.44-1.4l-6.05,6.26Z"/></g></g></g></svg>
                        <span>Basic package</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.cls-1{fill:#fff;opacity:0;}.cls-2{fill:#231f20;}</style></defs><title>checkmark-square</title><g id="Layer_2" data-name="Layer 2"><g id="checkmark-square"><g id="checkmark-square-2" data-name="checkmark-square"><rect class="cls-1" width="24" height="24"/><path class="cls-2" d="M20,11.83a1,1,0,0,0-1,1V18.4a.6.6,0,0,1-.6.6H5.6a.6.6,0,0,1-.6-.6V5.6A.6.6,0,0,1,5.6,5h9.57a1,1,0,1,0,0-2H5.6A2.61,2.61,0,0,0,3,5.6V18.4A2.61,2.61,0,0,0,5.6,21H18.4A2.61,2.61,0,0,0,21,18.4V12.83A1,1,0,0,0,20,11.83Z"/><path class="cls-2" d="M10.72,11a1,1,0,0,0-1.44,1.38l2.22,2.33a1,1,0,0,0,.72.31h0a1,1,0,0,0,.72-.3l6.78-7a1,1,0,1,0-1.44-1.4l-6.05,6.26Z"/></g></g></g></svg>
                        <span>Work with API</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.cls-1{fill:#fff;opacity:0;}.cls-2{fill:#231f20;}</style></defs><title>checkmark-square</title><g id="Layer_2" data-name="Layer 2"><g id="checkmark-square"><g id="checkmark-square-2" data-name="checkmark-square"><rect class="cls-1" width="24" height="24"/><path class="cls-2" d="M20,11.83a1,1,0,0,0-1,1V18.4a.6.6,0,0,1-.6.6H5.6a.6.6,0,0,1-.6-.6V5.6A.6.6,0,0,1,5.6,5h9.57a1,1,0,1,0,0-2H5.6A2.61,2.61,0,0,0,3,5.6V18.4A2.61,2.61,0,0,0,5.6,21H18.4A2.61,2.61,0,0,0,21,18.4V12.83A1,1,0,0,0,20,11.83Z"/><path class="cls-2" d="M10.72,11a1,1,0,0,0-1.44,1.38l2.22,2.33a1,1,0,0,0,.72.31h0a1,1,0,0,0,.72-.3l6.78-7a1,1,0,1,0-1.44-1.4l-6.05,6.26Z"/></g></g></g></svg>
                        <span>Basic support and error correction for 1-3 months</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.cls-1{fill:#fff;opacity:0;}.cls-2{fill:#231f20;}</style></defs><title>checkmark-square</title><g id="Layer_2" data-name="Layer 2"><g id="checkmark-square"><g id="checkmark-square-2" data-name="checkmark-square"><rect class="cls-1" width="24" height="24"/><path class="cls-2" d="M20,11.83a1,1,0,0,0-1,1V18.4a.6.6,0,0,1-.6.6H5.6a.6.6,0,0,1-.6-.6V5.6A.6.6,0,0,1,5.6,5h9.57a1,1,0,1,0,0-2H5.6A2.61,2.61,0,0,0,3,5.6V18.4A2.61,2.61,0,0,0,5.6,21H18.4A2.61,2.61,0,0,0,21,18.4V12.83A1,1,0,0,0,20,11.83Z"/><path class="cls-2" d="M10.72,11a1,1,0,0,0-1.44,1.38l2.22,2.33a1,1,0,0,0,.72.31h0a1,1,0,0,0,.72-.3l6.78-7a1,1,0,1,0-1.44-1.4l-6.05,6.26Z"/></g></g></g></svg>
                        <span>Work with large databases</span>
                    </div>
                </div>
                <div class="buy">
                    <a href="">Choose a service</a>
                </div>
            </div>
            <!-- Пакет#3 -->
            <div class="block">
                <h3>From 600$</h3>
                <p>Premium</p>
                <div class="advantages">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.cls-1{fill:#fff;opacity:0;}.cls-2{fill:#231f20;}</style></defs><title>checkmark-square</title><g id="Layer_2" data-name="Layer 2"><g id="checkmark-square"><g id="checkmark-square-2" data-name="checkmark-square"><rect class="cls-1" width="24" height="24"/><path class="cls-2" d="M20,11.83a1,1,0,0,0-1,1V18.4a.6.6,0,0,1-.6.6H5.6a.6.6,0,0,1-.6-.6V5.6A.6.6,0,0,1,5.6,5h9.57a1,1,0,1,0,0-2H5.6A2.61,2.61,0,0,0,3,5.6V18.4A2.61,2.61,0,0,0,5.6,21H18.4A2.61,2.61,0,0,0,21,18.4V12.83A1,1,0,0,0,20,11.83Z"/><path class="cls-2" d="M10.72,11a1,1,0,0,0-1.44,1.38l2.22,2.33a1,1,0,0,0,.72.31h0a1,1,0,0,0,.72-.3l6.78-7a1,1,0,1,0-1.44-1.4l-6.05,6.26Z"/></g></g></g></svg>
                        <span>Standard package</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.cls-1{fill:#fff;opacity:0;}.cls-2{fill:#231f20;}</style></defs><title>checkmark-square</title><g id="Layer_2" data-name="Layer 2"><g id="checkmark-square"><g id="checkmark-square-2" data-name="checkmark-square"><rect class="cls-1" width="24" height="24"/><path class="cls-2" d="M20,11.83a1,1,0,0,0-1,1V18.4a.6.6,0,0,1-.6.6H5.6a.6.6,0,0,1-.6-.6V5.6A.6.6,0,0,1,5.6,5h9.57a1,1,0,1,0,0-2H5.6A2.61,2.61,0,0,0,3,5.6V18.4A2.61,2.61,0,0,0,5.6,21H18.4A2.61,2.61,0,0,0,21,18.4V12.83A1,1,0,0,0,20,11.83Z"/><path class="cls-2" d="M10.72,11a1,1,0,0,0-1.44,1.38l2.22,2.33a1,1,0,0,0,.72.31h0a1,1,0,0,0,.72-.3l6.78-7a1,1,0,1,0-1.44-1.4l-6.05,6.26Z"/></g></g></g></svg>
                        <span>Content management system (Admin Panel)</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.cls-1{fill:#fff;opacity:0;}.cls-2{fill:#231f20;}</style></defs><title>checkmark-square</title><g id="Layer_2" data-name="Layer 2"><g id="checkmark-square"><g id="checkmark-square-2" data-name="checkmark-square"><rect class="cls-1" width="24" height="24"/><path class="cls-2" d="M20,11.83a1,1,0,0,0-1,1V18.4a.6.6,0,0,1-.6.6H5.6a.6.6,0,0,1-.6-.6V5.6A.6.6,0,0,1,5.6,5h9.57a1,1,0,1,0,0-2H5.6A2.61,2.61,0,0,0,3,5.6V18.4A2.61,2.61,0,0,0,5.6,21H18.4A2.61,2.61,0,0,0,21,18.4V12.83A1,1,0,0,0,20,11.83Z"/><path class="cls-2" d="M10.72,11a1,1,0,0,0-1.44,1.38l2.22,2.33a1,1,0,0,0,.72.31h0a1,1,0,0,0,.72-.3l6.78-7a1,1,0,1,0-1.44-1.4l-6.05,6.26Z"/></g></g></g></svg>
                        <span>High optimization</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.cls-1{fill:#fff;opacity:0;}.cls-2{fill:#231f20;}</style></defs><title>checkmark-square</title><g id="Layer_2" data-name="Layer 2"><g id="checkmark-square"><g id="checkmark-square-2" data-name="checkmark-square"><rect class="cls-1" width="24" height="24"/><path class="cls-2" d="M20,11.83a1,1,0,0,0-1,1V18.4a.6.6,0,0,1-.6.6H5.6a.6.6,0,0,1-.6-.6V5.6A.6.6,0,0,1,5.6,5h9.57a1,1,0,1,0,0-2H5.6A2.61,2.61,0,0,0,3,5.6V18.4A2.61,2.61,0,0,0,5.6,21H18.4A2.61,2.61,0,0,0,21,18.4V12.83A1,1,0,0,0,20,11.83Z"/><path class="cls-2" d="M10.72,11a1,1,0,0,0-1.44,1.38l2.22,2.33a1,1,0,0,0,.72.31h0a1,1,0,0,0,.72-.3l6.78-7a1,1,0,1,0-1.44-1.4l-6.05,6.26Z"/></g></g></g></svg>
                        <span>High data protection</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.cls-1{fill:#fff;opacity:0;}.cls-2{fill:#231f20;}</style></defs><title>checkmark-square</title><g id="Layer_2" data-name="Layer 2"><g id="checkmark-square"><g id="checkmark-square-2" data-name="checkmark-square"><rect class="cls-1" width="24" height="24"/><path class="cls-2" d="M20,11.83a1,1,0,0,0-1,1V18.4a.6.6,0,0,1-.6.6H5.6a.6.6,0,0,1-.6-.6V5.6A.6.6,0,0,1,5.6,5h9.57a1,1,0,1,0,0-2H5.6A2.61,2.61,0,0,0,3,5.6V18.4A2.61,2.61,0,0,0,5.6,21H18.4A2.61,2.61,0,0,0,21,18.4V12.83A1,1,0,0,0,20,11.83Z"/><path class="cls-2" d="M10.72,11a1,1,0,0,0-1.44,1.38l2.22,2.33a1,1,0,0,0,.72.31h0a1,1,0,0,0,.72-.3l6.78-7a1,1,0,1,0-1.44-1.4l-6.05,6.26Z"/></g></g></g></svg>
                        <span>Technical support for 6 months</span>
                    </div>
                </div>
                <div class="buy">
                    <a href="">Choose a service</a>
                </div>
            </div>
            <!-- Пакет#4 -->
            <div class="block active">
                <h3>From 50$ <i>/month</i></h3>
                <p>Technical support</p>
                <div class="advantages">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.cls-1{fill:#fff;opacity:0;}.cls-2{fill:#231f20;}</style></defs><title>checkmark-square</title><g id="Layer_2" data-name="Layer 2"><g id="checkmark-square"><g id="checkmark-square-2" data-name="checkmark-square"><rect class="cls-1" width="24" height="24"/><path class="cls-2" d="M20,11.83a1,1,0,0,0-1,1V18.4a.6.6,0,0,1-.6.6H5.6a.6.6,0,0,1-.6-.6V5.6A.6.6,0,0,1,5.6,5h9.57a1,1,0,1,0,0-2H5.6A2.61,2.61,0,0,0,3,5.6V18.4A2.61,2.61,0,0,0,5.6,21H18.4A2.61,2.61,0,0,0,21,18.4V12.83A1,1,0,0,0,20,11.83Z"/><path class="cls-2" d="M10.72,11a1,1,0,0,0-1.44,1.38l2.22,2.33a1,1,0,0,0,.72.31h0a1,1,0,0,0,.72-.3l6.78-7a1,1,0,1,0-1.44-1.4l-6.05,6.26Z"/></g></g></g></svg>
                        <span>Uptime monitoring and prompt troubleshooting/span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.cls-1{fill:#fff;opacity:0;}.cls-2{fill:#231f20;}</style></defs><title>checkmark-square</title><g id="Layer_2" data-name="Layer 2"><g id="checkmark-square"><g id="checkmark-square-2" data-name="checkmark-square"><rect class="cls-1" width="24" height="24"/><path class="cls-2" d="M20,11.83a1,1,0,0,0-1,1V18.4a.6.6,0,0,1-.6.6H5.6a.6.6,0,0,1-.6-.6V5.6A.6.6,0,0,1,5.6,5h9.57a1,1,0,1,0,0-2H5.6A2.61,2.61,0,0,0,3,5.6V18.4A2.61,2.61,0,0,0,5.6,21H18.4A2.61,2.61,0,0,0,21,18.4V12.83A1,1,0,0,0,20,11.83Z"/><path class="cls-2" d="M10.72,11a1,1,0,0,0-1.44,1.38l2.22,2.33a1,1,0,0,0,.72.31h0a1,1,0,0,0,.72-.3l6.78-7a1,1,0,1,0-1.44-1.4l-6.05,6.26Z"/></g></g></g></svg>
                        <span>Optimizing website loading speed</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.cls-1{fill:#fff;opacity:0;}.cls-2{fill:#231f20;}</style></defs><title>checkmark-square</title><g id="Layer_2" data-name="Layer 2"><g id="checkmark-square"><g id="checkmark-square-2" data-name="checkmark-square"><rect class="cls-1" width="24" height="24"/><path class="cls-2" d="M20,11.83a1,1,0,0,0-1,1V18.4a.6.6,0,0,1-.6.6H5.6a.6.6,0,0,1-.6-.6V5.6A.6.6,0,0,1,5.6,5h9.57a1,1,0,1,0,0-2H5.6A2.61,2.61,0,0,0,3,5.6V18.4A2.61,2.61,0,0,0,5.6,21H18.4A2.61,2.61,0,0,0,21,18.4V12.83A1,1,0,0,0,20,11.83Z"/><path class="cls-2" d="M10.72,11a1,1,0,0,0-1.44,1.38l2.22,2.33a1,1,0,0,0,.72.31h0a1,1,0,0,0,.72-.3l6.78-7a1,1,0,1,0-1.44-1.4l-6.05,6.26Z"/></g></g></g></svg>
                        <span>Supporting security against DDoS attacks and eliminating vulnerabilities</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.cls-1{fill:#fff;opacity:0;}.cls-2{fill:#231f20;}</style></defs><title>checkmark-square</title><g id="Layer_2" data-name="Layer 2"><g id="checkmark-square"><g id="checkmark-square-2" data-name="checkmark-square"><rect class="cls-1" width="24" height="24"/><path class="cls-2" d="M20,11.83a1,1,0,0,0-1,1V18.4a.6.6,0,0,1-.6.6H5.6a.6.6,0,0,1-.6-.6V5.6A.6.6,0,0,1,5.6,5h9.57a1,1,0,1,0,0-2H5.6A2.61,2.61,0,0,0,3,5.6V18.4A2.61,2.61,0,0,0,5.6,21H18.4A2.61,2.61,0,0,0,21,18.4V12.83A1,1,0,0,0,20,11.83Z"/><path class="cls-2" d="M10.72,11a1,1,0,0,0-1.44,1.38l2.22,2.33a1,1,0,0,0,.72.31h0a1,1,0,0,0,.72-.3l6.78-7a1,1,0,1,0-1.44-1.4l-6.05,6.26Z"/></g></g></g></svg>
                        <span>24/7 content updates</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.cls-1{fill:#fff;opacity:0;}.cls-2{fill:#231f20;}</style></defs><title>checkmark-square</title><g id="Layer_2" data-name="Layer 2"><g id="checkmark-square"><g id="checkmark-square-2" data-name="checkmark-square"><rect class="cls-1" width="24" height="24"/><path class="cls-2" d="M20,11.83a1,1,0,0,0-1,1V18.4a.6.6,0,0,1-.6.6H5.6a.6.6,0,0,1-.6-.6V5.6A.6.6,0,0,1,5.6,5h9.57a1,1,0,1,0,0-2H5.6A2.61,2.61,0,0,0,3,5.6V18.4A2.61,2.61,0,0,0,5.6,21H18.4A2.61,2.61,0,0,0,21,18.4V12.83A1,1,0,0,0,20,11.83Z"/><path class="cls-2" d="M10.72,11a1,1,0,0,0-1.44,1.38l2.22,2.33a1,1,0,0,0,.72.31h0a1,1,0,0,0,.72-.3l6.78-7a1,1,0,1,0-1.44-1.4l-6.05,6.26Z"/></g></g></g></svg>
                        <span>SEO support</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.cls-1{fill:#fff;opacity:0;}.cls-2{fill:#231f20;}</style></defs><title>checkmark-square</title><g id="Layer_2" data-name="Layer 2"><g id="checkmark-square"><g id="checkmark-square-2" data-name="checkmark-square"><rect class="cls-1" width="24" height="24"/><path class="cls-2" d="M20,11.83a1,1,0,0,0-1,1V18.4a.6.6,0,0,1-.6.6H5.6a.6.6,0,0,1-.6-.6V5.6A.6.6,0,0,1,5.6,5h9.57a1,1,0,1,0,0-2H5.6A2.61,2.61,0,0,0,3,5.6V18.4A2.61,2.61,0,0,0,5.6,21H18.4A2.61,2.61,0,0,0,21,18.4V12.83A1,1,0,0,0,20,11.83Z"/><path class="cls-2" d="M10.72,11a1,1,0,0,0-1.44,1.38l2.22,2.33a1,1,0,0,0,.72.31h0a1,1,0,0,0,.72-.3l6.78-7a1,1,0,1,0-1.44-1.4l-6.05,6.26Z"/></g></g></g></svg>
                        <span>Customer support and consultations</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.cls-1{fill:#fff;opacity:0;}.cls-2{fill:#231f20;}</style></defs><title>checkmark-square</title><g id="Layer_2" data-name="Layer 2"><g id="checkmark-square"><g id="checkmark-square-2" data-name="checkmark-square"><rect class="cls-1" width="24" height="24"/><path class="cls-2" d="M20,11.83a1,1,0,0,0-1,1V18.4a.6.6,0,0,1-.6.6H5.6a.6.6,0,0,1-.6-.6V5.6A.6.6,0,0,1,5.6,5h9.57a1,1,0,1,0,0-2H5.6A2.61,2.61,0,0,0,3,5.6V18.4A2.61,2.61,0,0,0,5.6,21H18.4A2.61,2.61,0,0,0,21,18.4V12.83A1,1,0,0,0,20,11.83Z"/><path class="cls-2" d="M10.72,11a1,1,0,0,0-1.44,1.38l2.22,2.33a1,1,0,0,0,.72.31h0a1,1,0,0,0,.72-.3l6.78-7a1,1,0,1,0-1.44-1.4l-6.05,6.26Z"/></g></g></g></svg>
                        <span>Developing new functionality</span>
                    </div>
                </div>
                <div class="buy">
                    <a href="">Choose a service</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Блок FAQ -->
    <div class="faq">
        <h2>FAQ</h2>

        <div class="faq-container">
            <!-- Вопрос#1 -->
            <div class="block">
                <div class="question">
                    <p>What is the cost of website development?</p>
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M895 3506 c-67 -29 -105 -105 -90 -183 6 -34 100 -131 843 -875 744 -743 841 -837 875 -843 94 -18 39 -66 949 843 909 909 861 855 843 949 -9 49 -69 109 -118 118 -94 18 -46 59 -875 -768 l-762 -762 -758 757 c-424 424 -769 762 -785 768 -38 14 -85 12 -122 -4z"/></g></svg>
                </div>
                <div class="answer">
                    <span>You can buy a package of any type, the price depends on the services and the degree of complexity in development. <a href="#price-list"><i>Click here</i></a> for more information.</span>
                </div>
            </div>
            <!-- Вопрос#2 -->
            <div class="block">
                <div class="question">
                    <p>How long will the development process take?</p>
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M895 3506 c-67 -29 -105 -105 -90 -183 6 -34 100 -131 843 -875 744 -743 841 -837 875 -843 94 -18 39 -66 949 843 909 909 861 855 843 949 -9 49 -69 109 -118 118 -94 18 -46 59 -875 -768 l-762 -762 -758 757 c-424 424 -769 762 -785 768 -38 14 -85 12 -122 -4z"/></g></svg>
                </div>
                <div class="answer">
                    <span>Development time ranges from 4 days and depends on the complexity of the project and type of development. Lead time is discussed at the approval stage.</span>
                </div>
            </div>
            <!-- Вопрос#3 -->
            <div class="block">
                <div class="question">
                    <p>What experience do you have in website development?</p>
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M895 3506 c-67 -29 -105 -105 -90 -183 6 -34 100 -131 843 -875 744 -743 841 -837 875 -843 94 -18 39 -66 949 843 909 909 861 855 843 949 -9 49 -69 109 -118 118 -94 18 -46 59 -875 -768 l-762 -762 -758 757 c-424 424 -769 762 -785 768 -38 14 -85 12 -122 -4z"/></g></svg>
                </div>
                <div class="answer">
                    <span>I am a Middle Software Developer with experience in web development and successfully completed projects. My approach is based on a deep understanding of client needs and creating functional, attractive websites. I guarantee quality support after the completion of the project and strive for long-term cooperation.</span>
                </div>
            </div>
            <!-- Вопрос#4 -->
            <div class="block">
                <div class="question">
                    <p>What technologies do you use for development?</p>
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M895 3506 c-67 -29 -105 -105 -90 -183 6 -34 100 -131 843 -875 744 -743 841 -837 875 -843 94 -18 39 -66 949 843 909 909 861 855 843 949 -9 49 -69 109 -118 118 -94 18 -46 59 -875 -768 l-762 -762 -758 757 c-424 424 -769 762 -785 768 -38 14 -85 12 -122 -4z"/></g></svg>
                </div>
                <div class="answer">
                    <span>We work with modern technologies to create high-quality web solutions: HTML and CSS for aesthetic design, JavaScript for interactivity, PHP and Laravel for a powerful backend, and SQL and MySQL for reliable data management. Docker and Git help us manage projects efficiently and ensure stability.</span>
                </div>
            </div>
            <!-- Вопрос#5 -->
            <div class="block">
                <div class="question">
                    <p>How does the process of coordinating design and functionality take place?</p>
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M895 3506 c-67 -29 -105 -105 -90 -183 6 -34 100 -131 843 -875 744 -743 841 -837 875 -843 94 -18 39 -66 949 843 909 909 861 855 843 949 -9 49 -69 109 -118 118 -94 18 -46 59 -875 -768 l-762 -762 -758 757 c-424 424 -769 762 -785 768 -38 14 -85 12 -122 -4z"/></g></svg>
                </div>
                <div class="answer">
                    <span>We understand the importance of matching design and functionality, which is why we have a two-step process to accommodate your needs. First, we meet or call to carefully listen to your preferences. We then present your vision concept. If you have ideas for improvement, we are always open to your edits and are ready to update the concept so that it fully meets your expectations.</span>
                </div>
            </div>
            <!-- Вопрос#6 -->
            <div class="block">
                <div class="question">
                    <p>What is the process for testing a site before launch?</p>
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M895 3506 c-67 -29 -105 -105 -90 -183 6 -34 100 -131 843 -875 744 -743 841 -837 875 -843 94 -18 39 -66 949 843 909 909 861 855 843 949 -9 49 -69 109 -118 118 -94 18 -46 59 -875 -768 l-762 -762 -758 757 c-424 424 -769 762 -785 768 -38 14 -85 12 -122 -4z"/></g></svg>
                </div>
                <div class="answer">
                    <span>Testing is a key stage before launching a project. We carefully check each functionality at all stages of development using CI/CD processes. This allows you to minimize risks and ensure that your project runs smoothly and meets high standards.</span>
                </div>
            </div>
            <!-- Вопрос#7 -->
            <div class="block">
                <div class="question">
                    <p>Will the site be adapted for mobile devices?</p>
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M895 3506 c-67 -29 -105 -105 -90 -183 6 -34 100 -131 843 -875 744 -743 841 -837 875 -843 94 -18 39 -66 949 843 909 909 861 855 843 949 -9 49 -69 109 -118 118 -94 18 -46 59 -875 -768 l-762 -762 -758 757 c-424 424 -769 762 -785 768 -38 14 -85 12 -122 -4z"/></g></svg>
                </div>
                <div class="answer">
                    <span>Yes, the site will be adaptive for all devices.</span>
                </div>
            </div>
            <!-- Вопрос#8 -->
            <div class="block">
                <div class="question">
                    <p>Do you provide services for maintaining and updating the site after it is launched?</p>
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M895 3506 c-67 -29 -105 -105 -90 -183 6 -34 100 -131 843 -875 744 -743 841 -837 875 -843 94 -18 39 -66 949 843 909 909 861 855 843 949 -9 49 -69 109 -118 118 -94 18 -46 59 -875 -768 l-762 -762 -758 757 c-424 424 -769 762 -785 768 -38 14 -85 12 -122 -4z"/></g></svg>
                </div>
                <div class="answer">
                    <span>Yes, you can purchase monthly support separately, or when you purchase the Standard and Premium packages, you get from 1 month and 6 months of free support.</span>
                </div>
            </div>
            <!-- Вопрос#9 -->
            <div class="block">
                <div class="question">
                    <p>What is the policy for making changes after development has begun?</p>
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M895 3506 c-67 -29 -105 -105 -90 -183 6 -34 100 -131 843 -875 744 -743 841 -837 875 -843 94 -18 39 -66 949 843 909 909 861 855 843 949 -9 49 -69 109 -118 118 -94 18 -46 59 -875 -768 l-762 -762 -758 757 c-424 424 -769 762 -785 768 -38 14 -85 12 -122 -4z"/></g></svg>
                </div>
                <div class="answer">
                    <span>If the changes are not critical and do not affect all further or previous development, then the edit is free, otherwise you will need to pay extra for such edits depending on the complexity.</span>
                </div>
            </div>
            <!-- Вопрос#10 -->
            <div class="block">
                <div class="question">
                    <p>What is the process for transferring rights to the site once it is completed?</p>
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M895 3506 c-67 -29 -105 -105 -90 -183 6 -34 100 -131 843 -875 744 -743 841 -837 875 -843 94 -18 39 -66 949 843 909 909 861 855 843 949 -9 49 -69 109 -118 118 -94 18 -46 59 -875 -768 l-762 -762 -758 757 c-424 424 -769 762 -785 768 -38 14 -85 12 -122 -4z"/></g></svg>
                </div>
                <div class="answer">
                    <span>We ensure a reliable transfer of rights to the site to your customer through several key steps. First, we collect all the necessary documents and transfer the project files (code, databases) through secure channels. We guarantee the transfer of the domain and, if necessary, the transfer of hosting to the customer's account. Upon completion, we sign the acceptance certificate and draw up an agreement on the transfer of rights. We are also ready to discuss the terms of post-warranty service so that you can be confident in the successful operation of the site.</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Блок формы обратной связи -->
    <div class="contact-form">
        <form action="" method="POST">
            @csrf

            <input type="text" placeholder="Your name*" name="name" require><br>
            <input type="email" placeholder="Email*" name="email" require><br>
            <textarea name="message" placeholder="How can I help?"></textarea><br>

            <div class="link-socials">
                <button type="submit">Get In Touch</button>
                <a class="active" href="https://www.linkedin.com/in/danielmihaiit/?locale=en_US" target="_blank"><img src="{{ asset('images/linkedin.png') }}" alt="LinkedIn"></a>
                <a href="" target="_blank"><img src="{{ asset('images/instagram.png') }}" alt="Instagram"></a>
                <a href="https://github.com/messsimo" target="_blank"><img src="{{ asset('images/github.png') }}" alt="GitHub"></a>
            </div>
        </form>

        <div class="maint-text">
            <h2>Let’s talk for</h2>
            <h2>Something special</h2>
            <div class="quotation">
                <span>I believe that a successful project is a result of not only quality code, but also a deep understanding of the client's needs. My goal is to create solutions that not only meet requirements, but also exceed expectations.</span>
            </div>
            <p>danielmihai.it@mail.ru</p>
            <p>+373 60029911</p>
        </div>
    </div>

    <!-- Футер -->
    <footer>
        <h2>danielmihai</h2>
        <img src="{{ asset('images/logo_white.png') }}">
        <p>Powered by Daniel Mihai</p>
    </footer>

    <!-- Подключение JS -->
    <script src="{{ asset('js/dropdown.js') }}"></script>
</body>
</html>