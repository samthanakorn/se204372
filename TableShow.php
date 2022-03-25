
<?php
    require_once("models/Table.php");
    $table_list = Table::getAll();
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="http://127.0.0.1:5500/css/styles.css?_cacheOverride=1647979916773">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css?_cacheOverride=1647979916774" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> Online Internship Management Systems </title>
</head>

<body> 
<section class="work section" id="work">
            <div class="header_fixed">
                <table>
                    <thead>
                        <tr>
                            <th>NO.</th>
                            <th>PROFILE</th>
                            <th>NAME</th>
                            <th>INTERNSHIP REPORT</th>
                            <th>APPROVE</th>
                            <th>Internship Result</th>
                        </tr>
                    </thead>

                    <tbody>


                        <?php
                        $d = "Approve.php";
                        $x = 1;
                        foreach ($table_list as $table) {

                            $x = (string)$x;
                            $y = "collapseExample" . $x;
                            $x = (int)$x;

                            echo "
                            
             <tr class='hover' data-toggle='collapse' href='#$y' aria-expanded='false' aria-controls='collapseExaple2'>
             <td>$x</td>
             <td><img src='img/testimonial1.png' alt='' class='Profile'></td>
             <td class='name_box'>
                 Name <div class='show_text'>$table->StudentName $table->StudentLastName</div>
                 Student ID <div class='show_text'>$table->Username</div>
             </td>
             <td class='name_box'>
                 Company <div class='show_text'>$table->CompanyName</div>
                 Type Of Internship <div class='show_text'>$table->InternshipType</div>
             </td>
             <td><div class='textshow_approve'>$table->Status</div></td>
             <td></td>
         </tr>
         
         <tr class='collapse' id='$y'>
             <td class='info'></td>
             <td class='info'></td>
             <td class='info'>
                 <div class='columName'> 
                     <div class='line' style=''></div>
                     Internship Position <div class='show_text'>$table->InternshipPosition</div>
                     Telephone<div class='show_text'>$table->CompanyPhone</div>
                     
                     <div class='columNameRow2'> 
                         <div class='line' style='margin-bottom: 10px;'></div>
                         Address <div class='show_text'>$table->CompanyAddress</div>
                         Manager Name<div class='show_text' style='margin-bottom: 20px;'>$table->CompanyManager</div>
                         
                         <div class='lineC'></div>
                         Coordinator Name<div class='show_text'>$table->CoordinatorName</div>
                         Document Require<div class='show_textDoc'>$table->DocumentRequire</div>
                     </div>
                 </div>
                
             </td>
             
             <td class='info'>
                 <div class='columIntern'>
                     <div class='headInfo'>Student Information</div>
                      Facebook <div class='show_text'>Chusana Kuankure</div>

                      <div class='columInternRow2'>
                         
                         <div class='headInfo'>Company Information</div>
                         Telephone <div class='show_text'>$table->CompanyPhone</div> 
                         Position <div class='show_text' style='margin-bottom: 20px;'>$table->CompanyPosManager</div>
                         <div class='lineC'></div>
                         Telephone<div class='show_text'>$table->CoordinatorPhone</div>
                         <form method='POST' action=''>
                         
                        
                                
                        <button  type='submit' name='Username' value='$table->Username'> Update </button>
                       
                       
                       
                       
                        </form>
                         </div>
                     </div>
                     
             </td>
             <td class='info'>
                 <div class='columApprove'>
                     <div class='line' style=''></div>
                     Internship Start <div class='show_text'>$table->InternshipStart</div>
                     Internship End <div class='show_text'>$table->InternshipEnd</div>
                    
                     <div class='line' style='margin-top: 26px; margin-bottom: 10px;'></div>
                     <div class='columApproveRow2Top'>
                         Email <div class='show_textflexbox1'>$table->CompanyEmail</div>
                         <div class='lineC'></div>
                         Email <div class='show_textflexbox2'>$table->CoordinatorEmail</div>
                     </div>
                 </div>
                 
             </td>
             <td class='info'></td>
            </tr>

                          
             ";
                            $x++;
                        }
                        if (isset($_POST['Username'])) {
                            //$InternStatus = $_POST['Approve'];
                            echo "Heello";
                        }

                        ?>


                        </tr>
                    </tbody>
                </table>

                <form method='get' action=''>
                    <select name='Approve' style='margin-top: 20px;'>
                        <option value=Received>Receive</option>
                        <option value=Considering>Consider</option>
                        <option value=Verifying>Verifying</option>
                        <option value=Approved>Approve</option>
                    </select>
                </form>

            </div>
        </section>

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