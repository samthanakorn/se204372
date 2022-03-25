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
                    <span class="TypeUser">Company</span>
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
                    <div class="arrowGone"></div>
                    <div class="about__data2">
                        <div class="about__info">
                            <div class="about__box2">
                                <h3 class="about__title2">บริษัทกรอกข้อมูล</h3>
                                <span class="about__subtitle">แบบแสดงความประสงค์รับนิสิตฝึกงาน/สหกิจฝึกษา
                                </span>
                            </div>

                            <div class="about__box2">
                                <span class="about__subtitle">กรรมการประจำหลักสูตร</span>
                                <h3 class="about__title2">พิจารณาข้อมูล</h3>
                                <span class="about__subtitle">ที่บริษัทแจ้งความจำนง</span>
                            </div>

                            <div class="about__box2">
                                <h3 class="about__title2">ประกาศแจ้งนิสิตทราบ</h3>
                                <span class="about__subtitle">สำหรับบริษัทที่ผ่านการพิจารณา</span>
                            </div>

                            <div class="about__box2">
                                <h3 class="about__title2">นิสิตยื่นความจำนง</h3>
                                <span class="about__subtitle">ฝึกงาน/สหกิจฝึกษา</span>
                            </div>
                        </div>

                        <div class="areabutton">
                            <a href="#FormCompany" class="button">Next</a>
                        </div>
                     </div>
                </div>
            </section>


            <section class="contact section" id="FormCompany">
            <span class="section__subtitle">กรอกข้อมูล</span>
            <h2 class="section__title">เกี่ยวกับบริษัท</h2>

            <div class="contact__container1 container grid">
                <div class="contact__content">
                    <div class="contact__info">
                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">ชื่อบริษัท</label>
                            <input type="text" name="company_name" placeholder="กรอกชื่อบริษัทของคุณ" class="contact__form-input">
                        </div>
                    </div>
                </div>

            </div>

            <div class="contact__container container grid">
                <div class="contact__content">

                    <div class="contact__form">
                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">ประเภทบริษัท</label>
                            <input type="text" name="company_type" placeholder="กรอกประเภทบริษัทของคุณ" class="contact__form-input">
                        </div>

                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">เบอร์โทรศัพท์ ของสถานประกอบการ/หน่วยงาน</label>
                            <input type="text" name="company_phone" placeholder="กรอกเบอร์โทรศัพท์ ของสถานประกอบการ/หน่วยงาน" class="contact__form-input">
                        </div>

                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">อีเมล (E-mail) ของสถานประกอบการ/หน่วยงาน</label>
                            <input type="text" name="company_manager" placeholder="กรอกอีเมล ของสถานประกอบการ/หน่วยงาน" class="contact__form-input">
                        </div>


                    </div>
                </div>

                <div class="contact__content">


                    <form action="" class="contact__form">

                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">ที่อยู่ ของสถานประกอบการ/หน่วยงาน</label>
                            <input type="text" name="company_address" placeholder="กรอกที่อยู่ ของสถานประกอบการ/หน่วยงาน" class="contact__form-input">
                        </div>

                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">เบอร์โทรสาร ของสถานประกอบการ/หน่วยงาน</label>
                            <input type="text" name="company_fax" placeholder="กรอกเบอร์โทรสาร ของสถานประกอบการ/หน่วยงาน" class="contact__form-input">
                        </div>

                    </form>
                </div>



            </div>

           
            
            
            
            
            <div class="contact__container1 container grid">
                <div class="contact__content">
                    <div class="contact__info">
                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">ชื่อผู้จัดการ สถานประกอบการ/หน่วยงาน</label>
                            <input type="text" name="company_email" placeholder="กรอกชื่อผู้จัดการ สถานประกอบการ/หัวหน้าหน่วยงาน" class="contact__form-input">
                        </div>
                    </div>
                </div>


            </div>

            <div class="contact__container container grid">
                <div class="contact__content">

                    <div class="contact__form">
                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">ตำแหน่งงาน ของผู้จัดการ/หัวหน้าหน่วยงาน</label>
                            <input type="text" name="company_posManager" placeholder="กรอกตำแหน่งงาน ของผู้จัดการ/หัวหน้าหน่วยงาน" class="contact__form-input">
                        </div>

                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">ตำแหน่งของผู้ประสานงาน</label>
                            <input type="text" name="company_posCoordinator" placeholder="ตำแหน่งของผู้ประสานงาน" class="contact__form-input">
                        </div>

                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">เบอร์โทรศัพท์ของผู้ประสานงาน</label>
                            <input type="text" name="coordinator_phone" placeholder="กรอกเบอร์โทรศัพท์ของผู้ประสานงาน" class="contact__form-input">
                        </div>


                    </div>
                </div>

                <div class="contact__content">


                    <form action="" class="contact__form">

                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">ชื่อผู้ประสานงาน ของสถานประกอบการ/หน่วยงาน</label>
                            <input type="text" name="company_coordinator" placeholder="กรอกชื่อผู้ประสานงาน ของสถานประกอบการ/หน่วยงาน" class="contact__form-input">
                        </div>

                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">แผนก/ฝ่าย ของผู้ประสานงาน</label>
                            <input type="text" name="company_department" placeholder="กรอกแผนก/ฝ่าย ของผู้ประสานงาน" class="contact__form-input">
                        </div>

                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">อีเมล (E-mail) ของผู้ประสานงาน</label>
                            <input type="text" name="coordinator_email" placeholder="กรอกอีเมล (E-mail) ของผู้ประสานงาน" class="contact__form-input">
                        </div>


                    </form>
                </div>
            </div>

            <div class="contact__container1 container grid">
                <div class="contact__content">
                    <div class="contact__info">
                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">ฝ่าย/แผนก ที่นิสิตฝึกงาน/สหกิจศึกษา</label>
                            <input type="text" name="company_jopTitle " placeholder="กรอกฝ่าย/แผนก ที่นิสิตฝึกงาน/สหกิจศึกษา" class="contact__form-input">
                        </div>
                    </div>
                </div>

            </div>

            <div class="contact__container container grid">
                <div class="contact__content">

                    <div class="contact__form">
                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">ตำแหน่งงานที่ต้องการรับนิสิตฝึกงาน/สหกิจศึกษา</label>
                            <input type="text" name="company_posCooperative" placeholder="กรอกตำแหน่งงานที่ต้องการรับนิสิตฝึกงาน/สหกิจศึกษา" class="contact__form-input">
                        </div>

                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">จำนวน (คน)</label>
                            <input type="text" name="company_numPeople" placeholder="กรอกกรอกจำนวน (คน)" class="contact__form-input">
                        </div>


                    </div>
                </div>

                <div class="contact__content">


                    <form action="" class="contact__form">

                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">ลักษณะงานที่นิสิตต้องปฏิบัติ (Job Description)</label>
                            <input type="text" name="company_natureOfWork" placeholder="กรอกลักษณะงานที่นิสิตต้องปฏิบัติ " class="contact__form-input">
                        </div>

                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">ความสามารถทางวิชาการหรือทักษะที่นิสิตควรมี</label>
                            <input type="text" name="company_selectionStudent" placeholder="กรอกความสามารถทางวิชาการหรือทักษะที่นิสิตควรมี" class="contact__form-input">
                        </div>

                    </form>
                </div>



            </div>
            <div class="test">
                <h2 class="section__title">ตำแหน่งงานที่ต้องการรับนิสิตฝึกงาน/สหกิจศึกษา</h2>
                <div class="test4">
                    <input type="checkbox" id="work1" name="work1" value="summer">
                    <label for="work1"> 18 เมษายน 2565 – 10 มิถุนายน 2565 (ฝึกงาน อย่างน้อย 30 วันทำการ)</label>
                    
                </div>
                <div class="test4">
                    <input type="checkbox" id="work2" name="work2" value="semeter">
                    <label for="work2"> 28 พฤศจิกายน 2565 – 7 เมษายน 2566 (สหกิจศึกษา อย่างน้อย 16 สัปดาห์)</label>
                </div>
            </div>

            
            <div class="contact__container1 container grid">
                <div class="contact__content">
                    <div class="contact__info">
                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">จำนวนค่าตอบแทน (บาท/วัน หรือ บาท/เดือน)</label>
                            <input type="text" name="company_compensation " placeholder="กรอกจำนวนค่าตอบแทนา" class="contact__form-input">
                        </div>
                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">สวัสดิการอื่นๆ ถ้ามี (เช่น อาหาร รถรับส่ง)</label>
                            <input type="text" name="company_room " placeholder="กรอกสวัสดิการ" class="contact__form-input">
                        </div>
                    </div>
                </div>
                <button class="button buttoncompany">Submit</button>

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