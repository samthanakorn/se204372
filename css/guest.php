<?php
require("../connection_connect.php");

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="Select * From Login where username='".$uname."'AND password='".$password."' limit 1";

    $result = $conn->query($sql);
    $my_row = $result->fetch_assoc();
    $TypeLogin = $my_row['type'];
    if(mysqli_num_rows($result) == 1){
        if($TypeLogin == "nisit")
            header("Location:nisit.php");
        else if ($TypeLogin == "teacher")
            header("Location:teacher.php");
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

        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
        <link rel="stylesheet" href="styles.css">

        <title> Online Internship Management Systems </title>
    </head>
    <body>
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">FindW</a>

                <div class="text__header dropdown">
                    <span>Company</span>
                    <div class="dropdown-content">
                        <a href="#" class="loginshow">Login</a><br>
                        <a href="../index.php">Logout</a>
                    </div>
                </div>
            </nav>
        </header>

        <main class="main">
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__data">
                        <span class="home__greeting">Hello, This is</span>
                        <h1 class="home__name">Online internship
                            <br>management system
                        </h1>

                        <div class="home__buttons">
                            <a href="#DetailIntern" class="button button--ghost">
                                Add Detail of Company
                            </a>
                        </div>
                    </div>
               
                    <div class="home__handle">
                        <img src="../img/home.png" alt="" class="home__img">
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

                    <a href="#DetailIntern" class="home__scroll">
                        <i class='bx bx-mouse home__scroll-icon' ></i>
                        <span class="home__scroll-name">Scroll Down</span>
                    </a>
                </div>   
            </section>

            <section class="about section" id="DetailIntern">
                <span class="section__subtitle">What To</span>
                <h2 class="section__title">Fill Out</h2>

                <div class="about__container container grid">
                    <div class="about__data">
                        <div class="about__info">
                            <div class="about__box">
                                <h3 class="about__title">บริษัทกรอกข้อมูล</h3>
                                <span class="about__subtitle">แบบแสดงความประสงค์รับนิสิตฝึกงาน/สหกิจฝึกษา
                                </span>
                            </div>

                            <div class="about__box">
                                <span class="about__subtitle">กรรมการประจำหลักสูตร</span>
                                <h3 class="about__title">พิจารณาข้อมูล</h3>
                                <span class="about__subtitle">ที่บริษัทแจ้งความจำนง</span>
                            </div>

                            <div class="about__box">
                                <h3 class="about__title">ประกาศแจ้งนิสิตทราบ</h3>
                                <span class="about__subtitle">สำหรับบริษัทที่ผ่านการพิจารณา</span>
                            </div>

                            <div class="about__box">
                                <h3 class="about__title">นิสิตยื่นความจำนง</h3>
                                <span class="about__subtitle">ฝึกงาน/สหกิจฝึกษา</span>
                            </div>
                        </div>

                        <div class="button">Next</div>
                     </div>
                </div>
            </section>

            <footer class="footer">
                <div class="footer__container container">
                    <h1 class="footer__title">สอบถามข้อมูลเพิ่มเติมได้ที่</h1>
                    <h1 class="footer__text">ภาควิชาวิศวกรรมคอมพิวเตอร์ คณะวิศวกรรมศาสตร์ กำแพงแสน มหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตกำแพงแสน
                        <br>โทร : 034-351897 ต่อ 7523 หรือ 096-970-9401 อีเมล์ : fengsstc@ku.ac.th
                        <br>เว็บไซต์ : https://eng.kps.ku.ac.th/cpe
                        <br>Facebook : https://www.facebook.com/cpe.eng.kps
                    </h1>
                    
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

                <div class="services__modal">
                    <div class="services__modal-content">
                        <p class="textLoginTitle">Login</p>
                        <p class="subtextLoginTitle">Nontri Account</p>
                        <div class="line__social"></div>
                        <i class='bx bx-x services__modal-close' ></i>

                        
                        <form method="POST" action="#">
                            <div class="form-input">
                                <p class="textLogin">บัญชีผู้ใช้เครือข่ายนนทรี</p>
                                <input type="text" name="username" placeholder="เช่น b63xxxxxxxx หรือ regxxx"/>	
                            </div>
                            <div class="form-input">
                                <p class="textLogin">รหัสผ่าน</p>
                                <input type="password" name="password" placeholder="รหัสผ่านบัญชีผู้ใช้เครือข่ายนนทรี"/>
                            </div>
                            <input type="submit" type="submit" value="SIGN IN" class="btn-login"/>
                        </form>

                    </div>
                </div>

    </main>
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