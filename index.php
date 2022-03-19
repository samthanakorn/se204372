<?php
require("connection_connect.php");

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="Select * From Login where username='".$uname."'AND password='".$password."' limit 1";

    $result = $conn->query($sql);
    $my_row = $result->fetch_assoc();
    $TypeLogin = $my_row['type'];
    if(mysqli_num_rows($result) == 1){
        if($TypeLogin == "nisit")
            header("Location:css/nisit.php");
        else if ($TypeLogin == "teacher")
            header("Location:css/teacher.php");
        else 
            echo "IN Database Type of Login is not correct word!";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>

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

            <!-- Theme change button -->
            <i class='bx bx-moon change-theme' id="theme-button"></i>
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

                        <div class="home__buttons">
                            <a href="css/guest.php" class="button button--ghost">
                                Guest
                            </a>
                            <a class="button loginshow">Login</a>
                        </div>
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

                    <a href="#" class="home__scroll">
                        <i class='bx bx-mouse home__scroll-icon' ></i>
                        <span class="home__scroll-name">Hold On</span>

                    </a>
                </div>   
            </section>

                <div class="services__modal">
                    <div class="services__modal-content">
                        <p class="textLoginTitle">Login</p>
                        <p class="subtextLoginTitle">Nontri Account</p>
                        <div class="line__social"></div>
                        <i class='bx bx-x services__modal-close' ></i>

                        
                        <form method="POST" action="#">
                            <div class="form-input">
                                <p class="textLogin">บัญชีผู้ใช้เครือข่ายนนทรี</p>
                                <input class="INPUTLOGIN" type="text" name="username" placeholder="เช่น b63xxxxxxxx หรือ regxxx"/>	
                            </div>
                            <div class="form-input">
                                <p class="textLogin">รหัสผ่าน</p>
                                <input type="password" name="password" placeholder="รหัสผ่านบัญชีผู้ใช้เครือข่ายนนทรี"/>
                            </div>
                            <input type="submit" type="submit" value="SIGN IN" class="btn-login"/>
                        </form>

                    </div>
                </div>

            

        <!--============== SCROLLREVEAL ==============-->
        <script src="js/scrollreveal.min.js"></script>

        <!--============== SWIPER JS ==============-->
        <script src="js/swiper-bundle.min.js"></script>

        <!--============== MIXITUP FILTER ===========-->
        <script src="js/mixitup.min.js"></script>

        <!--============= MAIN JS==================
        <script src="/js/main.js"></script>-->

        <script>
            const modalViews = document.querySelectorAll('.services__modal'),
            modalBtns = document.querySelectorAll('.loginshow'),
            modalClose = document.querySelectorAll('.services__modal-close')

            let modal = function(modalClick){
                modalViews[modalClick].classList.add('active-modal')
            }

            modalBtns.forEach((mb, i) =>{
                mb.addEventListener('click', () =>{
                    modal(i)
                })
            })

            modalClose.forEach((mc)=>{
                mc.addEventListener('click', () =>{
                    modalViews.forEach((mv) =>{
                        mv.classList.remove('active-modal')
                    })
                })
            })

        </script>
    </body>
</html>