<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!--================= FAVICON =================-->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

    <!--================= BOXICONS ==================-->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!--================= SWIPER CSS ================-->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

    <!--=================CSS=============-->
    <!--<link rel="stylesheet" href="">-->
    <link rel="stylesheet" href="css/styles.css">

    <title> Online Internship Management Systems </title>
</head>
<body>
    <!--==============HEADER==============Online Internship Management Systems-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">FindW</a>

            <div class="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">
                            <i class='bx bx-home-alt'></i>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#about" class="nav__link">
                            <i class='bx bxs-user' ></i>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#skills" class="nav__link">
                            <i class='bx bxs-book'></i>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#work" class="nav__link">
                            <i class='bx bx-briefcase-alt-2' ></i>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            <i class='bx bx-message-square-detail'></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="text__header dropdown">
                <span>Teacher</span>
                <div class="dropdown-content">
                    <a href="#">Edit Profile</a><br>
                    <a href="index.php">Logout</a>
                </div>
            </div>
        </nav>
    </header>
 
    <!--==============MAIN==============-->
    <main class="main">
            <!--==============HOME==============-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__data">
                        <span class="home__greeting">Hello, This is</span>
                        <h1 class="home__name">Online internship</h1>
                        <h1 class="home__name"> management system</h1>
                        <div class="line__title"></div>
                        <h3 class="home__education">Welcome <?php echo "$Info->Name";?></h3>

                    </div>
                   
                    <div class="home__handle">
                        <img src="img/home.png" alt="" class="home__img">
                    </div>

                    <div class="home__social">
                        <a href="https://www.linkedin.com/" target="_blank" class="home__social-link">
                            <i class='bx bxl-linkedin-square' ></i>
                        </a>
                        <a href="https://github.com/" target="_blank" class="home__social-link">
                            <i class='bx bxl-github' ></i>
                        </a>
                        <a href="https://dribble.com/" target="_blank" class="home__social-link">
                            <i class='bx bxl-dribbble'></i>
                        </a>
                    </div>

                    <a href="#Announcements" class="home__scroll">
                        <i class='bx bx-mouse home__scroll-icon' ></i>
                        <span class="home__scroll-name">Scroll Down</span>

                    </a>
                </div>   
            </section>

            <!--==============SERVICES==============-->
        <section class="services section" id="Announcements">
            <span class="section__subtitle">The University</span>
            <h2 class="section__title">Announcement</h2>

            <div class="services__container container grid">
                <div class="services__card">
                    <h3 class="services__title"><?php echo "$AnnouncementlistOne->ANMCompanyName";?></h3>
                    <div class="line__social"></div>
                    <h4 class="services__inside"><?php echo "$AnnouncementlistOne->ANMBriefDescription";?>
                        <br><br>👉 <?php echo "$AnnouncementlistOne->ANMTimeDescription";?></h4>

                    <div class="areabutton1">
                        <span class="services__button button">
                            See more <i class='bx bx-right-arrow-alt services__icon' ></i>
                        </span>
                    </div>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <i class='bx bx-x services__modal-close' ></i>

                            <h3 class="services__modal-title"><?php echo "$AnnouncementlistOne->ANMCompanyName";?></h3>
                            <div class="line__social"></div>
                            <p class="services__modal-description">
                                <?php echo "$AnnouncementlistOne->ANMFullDescription";?>
                            </p>

                        </div>
                    </div>
                </div>

                <div class="services__card">
                    <h3 class="services__title"><?php echo "$AnnouncementlistTwo->ANMCompanyName";?></h3>
                    <div class="line__social"></div>
                    <h4 class="services__inside"><?php echo "$AnnouncementlistTwo->ANMBriefDescription";?>
                        <br><br>👉 <?php echo "$AnnouncementlistTwo->ANMTimeDescription";?></h4>

                    <div class="areabutton1">
                        <span class="services__button button">
                            See more <i class='bx bx-right-arrow-alt services__icon' ></i>
                        </span>
                    </div>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <i class='bx bx-x services__modal-close' ></i>

                            <h3 class="services__modal-title"><?php echo "$AnnouncementlistTwo->ANMCompanyName";?></h3>
                            <div class="line__social"></div>
                            <p class="services__modal-description">
                                <?php echo "$AnnouncementlistTwo->ANMFullDescription";?>
                            </p>

                        </div>
                    </div>
                </div>

                <div class="services__card">
                    <h3 class="services__title"><?php echo "$AnnouncementlistThree->ANMCompanyName";?></h3>
                    <div class="line__social"></div>
                    <h4 class="services__inside"><?php echo "$AnnouncementlistThree->ANMBriefDescription";?>
                        <br><br>👉 <?php echo "$AnnouncementlistThree->ANMTimeDescription";?></h4>

                    <div class="areabutton1">
                        <span class="services__button button">
                            See more <i class='bx bx-right-arrow-alt services__icon' ></i>
                        </span>
                    </div>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <i class='bx bx-x services__modal-close' ></i>

                            <h3 class="services__modal-title"><?php echo "$AnnouncementlistThree->ANMCompanyName";?></h3>
                            <div class="line__social"></div>
                            <p class="services__modal-description">
                                <?php echo "$AnnouncementlistThree->ANMFullDescription";?>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonial section" id="Internship">
                <span class="section__subtitle">Find All</span>
                <h2 class="section__title">INTERNSHIP</h2>

                <div class="search">Search</div>

                <div class="testimonial__container container swiper">
                    <div class="swiper-wrapper">
                        <div class="testimonial__card swiper-slide">
                            <div class="areabutton1">
                                <img src="img/testimonial1.png" alt="" class="testimonial__img">
                            </div>
                            <div class="line__social"></div>
                            <h3 class="testimonial__name">Microsoft</h3>
                            <p class="testimonial__description">
                                Programmer, Software Engineer, Hardware Engineer
                            </p>
                        </div>
                        <div class="testimonial__card swiper-slide">
                            <img src="img/testimonial1.png" alt="" class="testimonial__img">

                           <h3 class="testimonial__name">Microsoft</h3>
                           <p class="testimonial__description">
                                Programmer, Software Engineer, Hardware Engineer
                           </p>
                        </div>

                        <div class="testimonial__card swiper-slide">
                            <img src="img/testimonial2.png" alt="" class="testimonial__img">

                           <h3 class="testimonial__name">Paula Vusy</h3>
                           <p class="testimonial__description">
                               A really good jop,all aspects of the project were
                               followed step by step and with good results.
                           </p>
                        </div>

                        <div class="testimonial__card swiper-slide">
                            <img src="img/testimonial3.png" alt="" class="testimonial__img">

                           <h3 class="testimonial__name">Sara cill</h3>
                           <p class="testimonial__description">
                               A really good jop,all aspects of the project were
                               followed step by step and with good results.
                           </p>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>


            <section class="about section" id="Profile">
                <h2 class="section__title"><?php echo "$Info->Name $Info->LastName";?></h2>
                <div class="line__title"></div>

                <div class="about__container container grid">
                    <img src="img/myprofile.jpg" alt="" class="about__img">
                  
                    <div class="about__data">
                        <div class="about__info">
                            <div class="about__box">
                                <i class='bx bx-award about__icon' ></i>
                                <h3 class="about__title">Experience</h3>
                                <span class="about__subtitle">8 Years Working</span>
                            </div>

                            <div class="about__box">
                                <i class='bx bx-briefcase-alt about__icon' ></i>
                                <h3 class="about__title">Completed</h3>
                                <span class="about__subtitle">48 + Projects</span>
                            </div>

                            <div class="about__box">
                                <i class='bx bx-support about__icon' ></i>
                                <h3 class="about__title">Support</h3>
                                <span class="about__subtitle">Online 24/7</span>
                            </div>
                        </div>

                        <p class="about__description">
                            Frontend developer, I create web pages with UI / UX userint
                            I have years of experience and many clients are happy
                            with the projects carried out.
                        </p>

                        <a href="#contact" class="button">Contact</a>
                     </div>
                </div>
            </section>
<!--
            <section class="skills section" id="skills">
                <span class="section__subtitle">My abilities</span>
                <h2 class="section__title">My Experience</h2>

                <div class="skills__container container grid">
                    <div class="skills__content">
                        <h3 class="skills__title">Frontend developer</h3>

                        <div class="skills__box">
                            <div class="skills__group">
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check' ></i>

                                    <div>
                                        <h3 class="skills__name">HTML</h3>
                                        <span class="skills__level">Basic</span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <i class='bx bxs-badge-check' ></i>

                                    <div>
                                        <h3 class="skills__name">CSS</h3>
                                        <span class="skills__level">Advanced</span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <i class='bx bxs-badge-check' ></i>

                                    <div>
                                        <h3 class="skills__name">JavaScript</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>
                            </div>

                            <div class="skills__group">
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check' ></i>

                                    <div>
                                        <h3 class="skills__name">Bootstrap</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>
                                
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check' ></i>

                                    <div>
                                        <h3 class="skills__name">Git</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <i class='bx bxs-badge-check' ></i>

                                    <div>
                                        <h3 class="skills__name">React</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="skills__content">
                        <h3 class="skills__title">Backend Developer</h3>

                        <div class="skills__box">
                            <div class="skills__group">
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check' ></i>

                                    <div>
                                        <h3 class="skills__name">PHP</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <i class='bx bxs-badge-check' ></i>

                                    <div>
                                        <h3 class="skills__name">Node Js</h3>
                                        <span class="skills__level">Basic</span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <i class='bx bxs-badge-check' ></i>

                                    <div>
                                        <h3 class="skills__name">Python</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>
                            </div>

                            <div class="skills__group">
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check' ></i>

                                    <div>
                                        <h3 class="skills__name">MySQL</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>
                                
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check' ></i>

                                    <div>
                                        <h3 class="skills__name">Firebase</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>-->

        <section class="work section" id="work">
            <span class="section__subtitle">My Portfolio</span>
            <h2 class="section__title">Recent Works</h2>

            <div class="work__filters">
                <span class="work__item active-work" data-filter='all'>All</span>
                <span class="work__item" data-filter='.web'>Web</span>
                <span class="work__item" data-filter='.movil'>Movil</span>
                <span class="work__item" data-filter='.design'>Design</span>
            </div>

            <div class="work__container container grid">
                <div class="work__card mix web">
                    <img src="img/work1.jpg" alt="" class="work__img">

                    <h3 class="work__title">Web design</h3>

                    <a href="#" class="work__button">
                        Demo <i class='bx bx-right-arrow-alt work__icon' ></i>
                    </a>
                </div>

                <div class="work__card mix movil">
                    <img src="img/work2.jpg" alt="" class="work__img">

                    <h3 class="work__title">App movil</h3>

                    <a href="#" class="work__button">
                        Demo <i class='bx bx-right-arrow-alt work__icon' ></i>
                    </a>
                </div>

                <div class="work__card mix design">
                    <img src="img/work3.jpg" alt="" class="work__img">

                    <h3 class="work__title">Brand design</h3>

                    <a href="#" class="work__button">
                        Demo <i class='bx bx-right-arrow-alt work__icon' ></i>
                    </a>
                </div>

                <div class="work__card mix web">
                    <img src="img/work4.jpg" alt="" class="work__img">

                    <h3 class="work__title">Web design</h3>

                    <a href="#" class="work__button">
                        Demo <i class='bx bx-right-arrow-alt work__icon' ></i>
                    </a>
                </div>

                <div class="work__card mix movil">
                    <img src="img/work5.jpg" alt="" class="work__img">

                    <h3 class="work__title">App movil</h3>

                    <a href="#" class="work__button">
                        Demo <i class='bx bx-right-arrow-alt work__icon' ></i>
                    </a>
                </div>
            </div>
        </section>
<!--
            <section class="contact section" id="contact">
                <span class="section__subtitle">Get in touch</span>
                <h2 class="section__title">Contact Me</h2>

                <div class="contact__container container grid">
                    <div class="contact__content">
                        <h3 class="contact__title">Talk to me</h3>

                        <div class="contact__info">
                            <div class="contact__card">
                                <i class='bx bx-mail-send contact__card-icon' ></i>
                                <h3 class="contact__card-title">Email</h3>
                                <span class="contact__card-data">user@gmail.com</span>

                                <a href="mailto:examplemail@correo.com" target="_blank" class="contact__button">
                                    Write me<i class='bx bx-right-arrow-alt contact__button-icon' ></i>
                                </a>
                            </div>

                            <div class="contact__card">
                                <i class='bx bxl-whatsapp contact__card-icon' ></i>
                                <h3 class="contact__card-title">Whatsapp</h3>
                                <span class="contact__card-data">999-888-777</span>

                                <a href="https://api.whatsapp.com/send?phone=51123456789$text=Hello, more information!" target="_blank" class="contact__button">
                                    Write me<i class='bx bx-right-arrow-alt contact__button-icon' ></i>
                                </a>
                            </div>

                            <div class="contact__card">
                                <i class='bx bxl-messenger contact__card-icon' ></i>
                                <h3 class="contact__card-title">Messenger</h3>
                                <span class="contact__card-data">user.fb123</span>

                                <a href="https://m.me/bedimcode" target="_blank" class="contact__button">
                                    Write me<i class='bx bx-right-arrow-alt contact__button-icon' ></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="contact__content">
                        <h3 class="contact__title">Write me your project</h3>

                        <form action="" class="contact__form">
                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">Names</label>
                                <input type="text" placeholder="Insert your name" class="contact__form-input">
                            </div>

                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">Mail</label>
                                <input type="email" placeholder="Insert your email" class="contact__form-input">
                            </div>

                            <div class="contact__form-div contact__form-area">
                                <label for="" class="contact__form-tag">Project</label>
                                <textarea name="" id="" cols="30" rows="10" placeholder="Write your project" class="contact__form-input"></textarea>
                            </div>

                            <button class="button">Send Message</button>
                        </form>
                    </div>
                </div>
            </section>-->
    </main>

        <!--==============FOOTER==============-->
        <footer class="footer">
            <div class="footer__container container">
                <ul class="footer__list">
                    <li>
                        <a href="#home" class="footer__link">Home</a>
                    </li>
                    <li>
                        <a href="#Announcements" class="footer__link">Announcements</a>
                    </li>
                    <li>
                        <a href="#Internship" class="footer__link">Internship</a>
                    </li>
                    <li>
                        <a href="#Profile" class="footer__link">Profile</a>
                    </li>
                </ul>

                <div class="line__social"></div>

                <ul class="footer__social">
                    <a href="https://www.facebook.com" target="_blank" class="footer__social-link">
                        <i class='bx bxl-microsoft-teams'></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                        <i class='bx bxl-instagram-alt'></i>
                    </a>
                    <a href="https://www.facebook.com" target="_blank" class="footer__social-link">
                        <i class='bx bxl-facebook-circle'></i>  
                    </a>
                </ul>

                <span class="footer__copy">
                    &#169; BoonyaratFC. All rights reserved
                </span>
            </div>
        </footer>

        <!--============== SCROLLREVEAL ==============-->
        <script src="js/scrollreveal.min.js"></script>

        <!--============== SWIPER JS ==============-->
        <script src="js/swiper-bundle.min.js"></script>

        <!--============== MIXITUP FILTER ===========-->
        <script src="js/mixitup.min.js"></script>

        <!--============= MAIN JS==================-->
        <script src="js/main.js"></script>
    </body>
</html>