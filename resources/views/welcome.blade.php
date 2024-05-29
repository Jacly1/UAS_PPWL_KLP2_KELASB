<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--=============== SWIPER CSS ===============--> 
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        
        <!--=============== CSS ===============--> 
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>To Do List</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <img src="assets/img/logo.png" alt="" class="nav__logo-img">
                    To Do List
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>

                        <li class="nav__item">
                            <a href="#about" class="nav__link">About</a>
                        </li>


                        <a href="{{ url('login') }}" class="button button--ghost">Login</a>
                        
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x'></i>
                    </div>

                    <img src="assets/img/nav-img.png" alt="" class="nav__img">
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>

            </nav>
        </header>

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home container" id="home">
                <div class="swiper home-swiper">
                    <div class="swiper-wrapper">
                        <!-- HOME SLIDER 1 -->
                        <section class="swiper-slide">
                            <div class="home__content grid">
                                <div class="home__group">
                                    <img src="assets/img/home1-img.png" alt="" class="home__img">
                                    
    
                                    
                                </div>
    
                                <div class="home__data">
                                    <h1 class="home__title">To Do List App!!</h1>
                                    <p class="home__description">Welcome to your productivity hub! Let's organize your tasks and conquer your day together.
                                    </p>

                                    <div class="home__buttons">
                                        <a href="/login" class="button">Create Your Activity</a>

    
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- HOME SLIDER 2 -->
                        <section class="swiper-slide">
                            <div class="home__content grid">
                                <div class="home__group">
                                    <img src="assets/img/home2-img.png" alt="" class="home__img">
                                    <div class="home__indicator"></div>
    
                                    <div class="home__details-img">
                                        <h4 class="home__details-title">Adino & Grahami</h4>
                                        <span class="home__details-subtitle">No words can describe them</span>
                                    </div>
                                </div>
    
                                <div class="home__data">
                                    <h1 class="home__title">Task terror: Your Halloween To-Do List companion.</h1>
                                    <p class="home__description">Adino steals cotton candy from his brother and eats them all in one bite, 
                                        a hungry beast. Grahami can no longer contain his anger towards Adino.
                                    </p>

                                    <div class="home__buttons">
                                    <a href="/login" class="button">Create Your Activity</a>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- HOME SLIDER 3 -->
                        <section class="swiper-slide">
                            <div class="home__content grid">
                                <div class="home__group">
                                    <img src="assets/img/home3-img.png" alt="" class="home__img">
                                    <div class="home__indicator"></div>
    
                                    <div class="home__details-img">
                                        <h4 class="home__details-title">Captain Sem</h4>
                                        <span class="home__details-subtitle">Veteran Spooky Ghost</span>
                                    </div>
                                </div>
    
                                <div class="home__data">
                                    <h1 class="home__title">Don't be spooked<br> by your tasks.</h1>
                                    <p class="home__description">In search for cute little puppy, Captain Sem has come back from his tragic death. 
                                        With his hogwarts certified power he promise to be a hero for all of ghostkind.
                                    </p>

                                    <div class="home__buttons">
                                    <a href="/login" class="button">Create Your Activity</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>
            
            <!--==================== CATEGORY ====================-->
            <section class="section category">
                <h2 class="section__title">Favorite Scare <br> To Do List</h2>

                <div class="category__container container grid">
                    <div class="category__data">
                        <img src="assets/img/category1-img.png" alt="" class="category__img">
                        <h3 class="category__title">Ghosts</h3>
                        <p class="category__description">Choose the ghosts, the scariest there are.</p>
                    </div>

                    <div class="category__data">
                        <img src="assets/img/category2-img.png" alt="" class="category__img">
                        <h3 class="category__title">Pumpkins</h3>
                        <p class="category__description">You look at the scariest pumpkins there is.</p>
                    </div>

                    <div class="category__data">
                        <img src="assets/img/category3-img.png" alt="" class="category__img">
                        <h3 class="category__title">Witch Hat</h3>
                        <p class="category__description">Pick the most stylish witch hats out there.</p>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="section about" id="about">
                <div class="about__container container grid">
                    <div class="about__data">
                        <h2 class="section__title about__title">About To Do List<br> Application</h2>
                        <p class="about__description">Meet your new productivity partner: Our To-Do List app. Stay organized, set reminders, and conquer tasks effortlessly. Download now and get things done!
                        </p>
                        <a href="#" class="button">Know more</a>
                    </div>

                    <img src="assets/img/about-img.png" alt="" class="about__img">
                </div>
            </section>


            <!--==================== OUR NEWSLETTER ====================-->
            <section class="section newsletter">
                <div class="newsletter__container container">
                    <h2 class="section__title">Our Newsletter</h2>
                    <p class="newsletter__description">
                        Promotion new products and sales. Directly to your inbox
                    </p>

                    <form action="" class="newsletter__form">
                        <input type="text" placeholder="Enter your email" class="newsletter__input">
                        <button class="button">
                            Subscribe
                        </button>
                    </form>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
            <footer class="footer section">
                <div class="footer__container container grid">
                    <div class="footer__content">
                        <a href="#" class="footer__logo">
                            <img src="assets/img/logo.png" alt="" class="footer__logo-img">
                            Halloween
                        </a>

                        <p class="footer__description">Enjoy the scariest night <br> of your life.</p>
                        
                        <div class="footer__social">
                            <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                                <i class='bx bxl-facebook'></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                                <i class='bx bxl-instagram-alt' ></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                                <i class='bx bxl-twitter' ></i>
                            </a>
                        </div>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">About</h3>
                        
                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">About Us</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Features</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">News</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">Our Services</h3>
                        
                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">Pricing</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Discounts</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Shipping mode</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">Our Company</h3>
                        
                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">Blog</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">About us</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Our mision</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <span class="footer__copy">&#169; Bedimcode. All rigths reserved</span>

                <img src="assets/img/footer1-img.png" alt="" class="footer__img-one">
                <img src="assets/img/footer2-img.png" alt="" class="footer__img-two">
            </footer>

            <!--=============== SCROLL UP ===============-->
            <a href="#" class="scrollup" id="scroll-up">
                <i class='bx bx-up-arrow-alt scrollup__icon'></i>
            </a>
        
        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>
        
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>