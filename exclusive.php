<?php 
   if($_SERVER['REQUEST_METHOD']==='POST'){
       if(isset($_POST['name']) && isset($_POST['venue']) && isset($_POST['email']) && isset($_POST['location'])  && isset($_POST['firstcontact']) && isset($_POST['phone'] ))

       {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $location = $_POST['location'];
        $firstcontact = $_POST['firstcontact'];
        $phonenumber = $_POST['phone'];
      
        $platform="Exclusive";
        $learn= $_POST['venue'];
        $text = $_POST['text'];
      

              
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'pluralcode.academy/academyAPI/api/websanex.php',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{
            "name" : '.json_encode($name).',
            "email":'.json_encode($email ).',
            "phonenumber":'.json_encode($phonenumber).',
            "location":'.json_encode( $location).',
            "contact":'.json_encode($firstcontact).',
            "platform":'.json_encode($platform).',
            "learn": '.json_encode($learn).',
            "text": '.json_encode($text).'
        }',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);

        $result = json_decode($response);
        if(empty($result) ){
            $message ="All field ";
        }else{
            $message = $result->message;
        }
        
       }else{
        $message ="All field are required";
       }
      
        

        
      
        


   }



?>











<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PluralCode Academy </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="icon.png">
      	<script>
        
        
       // var loc = window.location.href+'';
//if (loc.indexOf('http://')==0){
  //  window.location.href = loc.replace('http://','https://');
//}
        
    </script>
    
    
    <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '145075080864752');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=145075080864752&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
  
    <style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  margin-bottom:10px;
  border-top: 1px solid #333;
}

.activea, .accordion:hover {
  background-color: #ccc;
}

.panela {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
  padding:15px
}

.martins{
    background-image: url('bg.png');
    background-repeat: no-repeat;
    background-size: cover;
}

.martins2{
    background-image: url('Group 35.png');
    background-repeat: no-repeat;
    background-size: cover;
    
}
.bgframe{
    background-image: url('frame 85.png');
    background-repeat: no-repeat;
    background-size: cover;
}
.owl-prev {
    left: -50px;
}
.owl-next {
    right: -50px;
    
}
.owl-prev, .owl-next {
    position: absolute;
    top: 90px;
   
}
.owl-prev span , .owl-next span {
    font-size :107px;
    color:#ffb341;
}
.owl-nav .owl-prev:hover, .owl-nav .owl-next:hover{
      background:none !important;
      outline: none !important;
      opacity:1;
}
.martins3{
    background-image: url('Frame 75.png');
    background-repeat: no-repeat;
    background-size: cover;
}



.radio{
   
    font-weight:20;
    display: inline-block;
    color:#fff;
    position: relative;
    padding-left:40px;
    cursor: pointer;
}
.radio input[type="radio"]{
    display: none;
}
.radio span{
    height: 20px;
    width: 20px;
    border-radius: 50%;
    border: 3px solid #4940D6;
    display:block;
    position: absolute;
    left: 0;
    top: 7px;
}
.radio span:after{
    content: "";
    height: 8px;
    width: 8px;
    background: #4940D6;
    display: block;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%) scale(0);
    border-radius: 50%;
    transition: 300ms ease-in-out 0s;
} 
.radio input[type="radio"]:checked ~ span:after{
    transform: translate(-50%,-50%) scale(1);
}
.mobilebg{
    background-image: url('halfbg.png');
    background-repeat: no-repeat;
    background-size: cover;
}
</style>

    <!-- CSS
	============================================ -->

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome-pro.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-gilroy.css"> -->

    <!-- Plugins CSS (All Plugins Files) -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/select2.min.css">
    <link rel="stylesheet" href="assets/css/plugins/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="assets/css/plugins/photoswipe.css">
    <link rel="stylesheet" href="assets/css/plugins/photoswipe-default-skin.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css"> -->

    <!-- Main Style CSS -->


    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="../assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="../assets/css/plugins/plugins.min.css">
  <link rel="stylesheet" href="../assets/css/style.min.css">
 <link rel="stylesheet" href="../assets/css/style.css">

 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,700;0,800;0,900;1,600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background-color: #0A0F23">

    <div  id="page" class="section" >
          <!-- Header Section Start -->
          <div   class="header-section header-fluid fixed-top section">
            <div style="background-color: #0A0F23;"  class="header-inner" >
                <div    class="container position-relative">
                    <div   class="row justify-content-between align-items-center">
                      
                        <!-- Header Logo Start -->
                        <div  class="col-xl-3 col-auto">
                            <div class="header-logo">
                                <a href="index.php">
                                    <img class="dark-logo" src="pluralcodex.png" alt="Learts Logo" style=" margin-left:23px">
                                   
                                </a>
                            </div>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Main Menu Start -->
                        <div class="col d-none d-xl-block position-static">
                            <nav   class="site-main-menu">
                                <ul>
                                <li class="has-children" >
                                        <a href="#" style="color:white;font-weight:250"><span class="menu-text">Platforms</span></a>
                                        <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                        <ul class="sub-menu" style="background-color: #0A0F23">
                                            <li><a href="../index.php#webseries"><span class="menu-text"style="color:white" >Webseries</span></a></li>
                                            <li><a href="../index.php#sandbox"><span class="menu-text"style="color:white">Sandbox</span></a></li>
                                             <li><a href="../index.php#exclusive"><span class="menu-text"style="color:white">Pluralcode X</span></a></li>
                                            
                                           
                                              
                                              
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#" style="color:white;font-weight:250"><span class="menu-text">Courses</span></a>
                                        <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                        <ul class="sub-menu" style="background-color: #0A0F23">
                                            <li><a href="../webdesign.php"><span class="menu-text"style="color:white">Website Development</span></a></li>
                                            <li><a href="../digitalmarketing.php"><span class="menu-text"style="color:white">Digital Marketing</span></a></li>
                                             <li><a href="../uiux.php"><span class="menu-text"style="color:white">Product Design(UI/UX)</span></a></li>
                                             <li><a href="../datascience.php"><span class="menu-text"style="color:white">Data Science</span></a></li>
                                            
                                           
                                              
                                              
                                        </ul>
                                    </li>
                                    
                                    <li class="has-children">
                                        <a href="#" style="color:white;font-weight:250"><span class="menu-text">services</span></a>
                                        <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                        <ul class="sub-menu" style="background-color: #0A0F23">
                                            <li><a href="../services/index.php#webdesign"><span class="menu-text" style="color:white">Website Development</span></a></li>
                                            <li><a href="../services/index.php#mobiledev"><span class="menu-text"style="color:white">Mobile Appdevelopment</span></a></li>
                                             <li><a href="../services/index.php#customsoftware"><span class="menu-text" style="color:white">Custom Software</span></a></li>
                                             <li><a href="../services/index.php#productdesign"><span class="menu-text"style="color:white">Product Design</span></a></li>
                                            
                                           
                                              
                                              
                                        </ul>
                                    </li>

                                    <li class="has-children">
                                        <a href="#" style="color:white;font-weight:250"><span class="menu-text">About Us</span></a>
                                        <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                        <ul class="sub-menu"style="background-color: #0A0F23">
                                            <li><a href="../index.php#aboutus"><span class="menu-text" style="color:white">Who We Are</span></a></li>
                                            <li><a href="../index.php#questions"><span class="menu-text"style="color:white">FAQ</span></a></li>

                                        </ul>
                                    </li>



                                    <li class="">
                                        <a href="../mentor.php" style="color:white;font-weight:250"><span class="menu-text">Become a Mentor</span></a>

                                    </li>


                                   


                                </ul>
                            </nav>
                        </div>
                        <!-- Header Main Menu End -->

                        <!-- Header Right Start -->
                        <div class="d-none d-xs-none d-lg-block d-md-block d-sm-none col-xl-3 col-auto">
                            <div class="header-right">
                                <div class="inner">
                                <a href="../contact.php" style="color:white;font-weight:250;margin-right:20px"><span class="menu-text">Contact Us</span></a>
                                <a href="../mentor.php" style="margin-right:40px;color:white;font-weight:250"><span class="menu-text">Sign in</span></a>
                                
                                <a href="https://play.google.com/store/apps/details?id=com.pluralcodeacademy" target="_blank" style="margin-right:30px;"><span class="menu-text btn btn-outline-warning">Download</span></a>

                                  

                                    <!-- Header Mobile Menu Toggle Start -->
                                    <div class="header-mobile-menu-toggle d-xl-none ml-sm-2">
                                        <button class="toggle">
                                            <i class="icon-top"></i>
                                            <i class="icon-middle"></i>
                                            <i class="icon-bottom"></i>
                                        </button>
                                    </div>
                                    <!-- Header Mobile Menu Toggle End -->
                                </div>
                            </div>
                        </div>


                        <div  class=" d-xs-block d-lg-none d-md-none d-sm-block col-xl-3 col-auto"style="margin-top:0px">
                            <div class="header-right">
                                <div class="inner">
                                
                                <a href="https://play.google.com/store/apps/details?id=com.pluralcodeacademy" target="_blank"><span class="menu-text btn btn-outline-warning">Download</span></a>



                                    <!-- Header Mobile Menu Toggle Start -->
                                    <div class="header-mobile-menu-toggle d-xl-none ml-sm-2">
                                        <button class="toggle">
                                            <i class="icon-top"></i>
                                            <i class="icon-middle"></i>
                                            <i class="icon-bottom"></i>
                                        </button>
                                    </div>
                                    <!-- Header Mobile Menu Toggle End -->
                                </div>
                            </div>
                        </div>
                        <!-- Header Right End -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Header Section End -->

         <section class="d-none d-xs-none d-lg-block d-md-block d-sm-none martins" data-aos="fade-up"  >
        
              <div class="container-fluid"  >
             
                    <div class="row align-items-center justify-content-center " >
                   
                    <div   class="col martins2" style="height:720px;margin-top:5%">
                       
                    </div>

                    <div class="col "   >
                              <h1 style="color:white;font-family: 'Nunito Sans', sans-serif;font-size:64px;font-weight:800">Pluralcode Exclusive</h1>
                              <p style="color:white">sgn up for one of our best package so far. It’s custom-made for you to suit you. <br> We understand that there are alot o people who desire to learn a tech skill <br> but are limited by time, so we came up with a plan that is just right for these set of people.</p>
                              
                              <a href="" target="_blank" class="btn" style="color:white;margin-top:1px;background: linear-gradient(90deg, #3F64F7 -18.69%, #5319B2 44.86%, #4940D6 112.15%);">Join Us</a>
                   
                         </div>
                    </div>
                </div>
                  
              
              
</section>




<section class=" d-xs-block d-lg-none d-md-none d-sm-block martins" data-aos="fade-up"  >
        
        <div class="container-fluid"  >
       
              <div class="row align-items-center justify-content-center " >
             

              <div class="col-xs-12 mobilebg"   style="width:100%;height:745px;margin-top:17%">
                        <h1 style="margin-left:5px;margin-top:145px;color:white;font-family: 'Nunito Sans', sans-serif;font-size:40px;font-weight:800">Pluralcode Exclusive</h1>
                        <p style="margin-left:5px;color:white">sgn up for one of our best package so far. <br> It’s custom-made for you to suit you.  We understand <br>that there are alot of people who  desire to learn <br> a tech skill  but are limited by time, so we <br>came up with a plan that is <br> just right for these set of people.</p>
                        
                        <a href="" target="_blank" class="btn" style="width:35%;margin-left:5px; color:white;margin-top:1px;background: linear-gradient(90deg, #3F64F7 -18.69%, #5319B2 44.86%, #4940D6 112.15%);">Join Us</a>
             
                   </div>
              </div>
          </div>
            
        
        
</section>















    
   
<section class="d-none d-lg-block d-sm-none d-md-none d-xs-none " style="margin-top:50px">
    
    <div class="container">
    <img src="Vector 1.png" alt="" style="margin-top:50px">
           <div class="row">

           <div class="col-lg-6 col-sm-12 col-md-12 col-xs-12 mt-5">
               <img src="aboutexclusive.png" alt="" style="margin-top:50px">
           </div>
           <div class="col-lg-6 col-sm-12 col-md-12 col-xs-12 mt-5">
                   <h2 style="color:white;margin-top:170px">About Pluralcode Exclusive</h2>
                   <p class="mt-4" style="color:white">Are you passionate about technology? Are you unsure about which of the 
technological skills you should focus on? Do you need a guide to walk you 
through the path? BE a part of our weekly discussion as Nduka Ukpabi 
(Founder of pluralcode), and other tech enthuthiasts abd industry experts 
impacts you with valuable information</p>
           </div>
           </div>
           <img src="Vector 1.png" alt="" style="margin-top:70px">
    </div>
</section>
         

<section class=" d-lg-none d-sm-block d-md-block d-xs-block " style="margin-top:50px">
    
    <div class="container">
    <img src="Vector 1.png" alt="" style="margin-top:50px;width:100%">
           <div class="row justify-content-center align-items-center" style="width:100%">

           <div class="col-lg-6 col-sm-12 col-md-12 col-xs-12 mt-5">
               <img src="aboutexclusive.png" alt="" style="width:100%">
           </div>
           <div class="col-lg-6 col-sm-12 col-md-12 col-xs-12 mt-5">
                   <h2 style="color:white;">About Pluralcode Exclusive</h2>
                   <p class="mt-4" style="color:white">Are you passionate about technology? Are you unsure about which of the 
technological skills you should focus on? Do you need a guide to walk you 
through the path? BE a part of our weekly discussion as Nduka Ukpabi 
(Founder of pluralcode), and other tech enthuthiasts abd industry experts 
impacts you with valuable information</p>
           </div>
           </div>
           <img src="Vector 1.png" alt="" style="margin-top:30px;idth:100%;width:100%">
    </div>
</section>
         






          <!--mobile banner -->
          <!--
          <section class="d-xs-block d-lg-none d-md-none d-sm-block"  data-aos="fade-up" style="width:100%;background: linear-gradient(90deg, #3F64F7 -18.69%, #5319B2 44.86%, #4940D6 112.15%);">
                <div class="container-fluid">
                    <div class="row "  style="width:100%;">
                          
                    <div  style="margin-top:120px" class="col-lg-6 col-md-12 col-xs-12 col-sm-12">
                          <img src="Frame 85.png"alt="" style="width:100%;margin-left:22px">
                    </div>
                    <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12"  >
                             <h5  style="text-align:center; color:white;font-family: 'Nunito Sans', sans-serif;">LEARN, <span class="text-warning">CREATE,</span> INOVATE</h5> <br><h1 style="text-align:center;color:white;font-family: 'Nunito Sans', sans-serif;font-size:54px;font-weight:800">Acquire Tech Skills <br> For a Better You</h1>
                             <div class="container">
                             <div class="row align-items-center justify-content-center">
                                 <div class="col-6 ">
                              <a style="" class="btn btn-warning">Enroll Now</a>
                              </div>
                              <div class="col-6" style="width:120%">
                              <div class="" style="width:130%"><a href="" style=""> <img src="pngwing 1.png" alt="" style=""> </a></div>
                                
                              </div>
                                </div>
                                </div>
                         </div>
                    </div>
                </div>
                     
</section>
-->


       
        <!-- Slider/Intro Section End -->
        <section>
        <!-- Feature Section Start -->
        <div class="section d-none d-lg-block d-sm-none d-xl-block d-md-none d-xs-none">
        <h5 class="text-warning"  style="margin-top:85px; font-weight:120; color:white; text-align:center;font-family: 'Nunito Sans', sans-serif;"></h5>
                           

                     <div class="row mt-5 justify-content-center ">
                         <div class="col-lg-5 col-md-12 col-xs-12 col-sm-12"style="background-color:#1C1F2C;width:100%;border-radius:7px">
                          <div class="row" style="padding:40px">
                                   <div class="col-3">
                                   <img src="double-arrow 1.png" alt="">
                                   </div>
                                   <div class="col-8">
                                      <h3 class="mt-2"style="color:white;font-weight:800">Flexibity</h3>
                                      <p  style="color:white;font-weight:150">You set the time that best work for you and you can change 
                                                                   it at will but with an appropriate notice to your mentor</p>
                                   </div>
                          </div>
                         
                         </div>
                         <div class="" style="width:17px;">
                           
                         </div>
                         <div class="col-lg-5 col-md-12 col-xs-12 col-sm-12" style="background-color:#1C1F2C;border-radius:7px">
                         <div class="row"  style="padding:40px">
                             <div class="col-3">
                             <img src="eos-icons_project-outlined.png" alt="">
                             </div>
                             <div class="col-8">
                                      <h3 class="mt-2"style="color:white;font-weight:800">Project-Based Learning</h3>
                                      <p  style="color:white;font-weight:150">Build real-life projects for real clients, gain experience and build your portfolio while you learn.</p>
                                   </div>
                         </div>
                         
                         
                         </div>
                     </div>
  
                        
                 
                     <div class="row mt-3 justify-content-center mb-4">
                         <div class=" col-lg-5 col-md-12 col-xs-12 col-sm-12"style="background-color:#1C1F2C; border-radius:7px">
                         
                         <div class="row"  style="padding:40px">
                             <div class="col-3">
                             <img src="Vector.png" alt="">
                             </div>
                             <div class="col-8">
                                      <h3 class="mt-2"style="color:white;font-weight:800">Exclusive</h3>
                                      <p  style="color:white;font-weight:150">You get a first class treatment in that the attention of the 
                                        Mentor is solely focused on youand not shared with others</p>
                                   </div>
                         </div>
                         
                         </div>
                         <div class="" style="width:17px;">
                           
                           </div>
                         <div class=" col-lg-5 col-md-12 col-xs-12 col-sm-12" style="background-color:#1C1F2C;border-radius:7px">
                         <div class="row"  style="padding:40px">
                             <div class="col-3">
                             <img src="clarity_computer-solid-badged.png" alt="">
                             </div>
                             <div class="col-8">
                                      <h3 class="mt-2"style="color:white;font-weight:800">Remote Learning</h3>
                                      <p  style="color:white;font-weight:150">You can also learn online. Access a vast library of our classes,get mentored online and grow</p>

                                   </div>
                         </div>
                         
                         
                         
                         </div>
                     </div>
                              
                        
                               
    
                      
                                 
                                       
            
            
                      
        </div>
        <!-- Feature Section End -->

</section>
        <!-- mobile view -->

        <div class="section d-lg-none d-xl-none d-sm-block d-md-block ">
                         <div class="container-fluid">
                              <h5 class="text-warning"  style="margin-top:85px; font-weight:120; color:white; text-align:center;font-family: 'Nunito Sans', sans-serif;"></h5>
                             <h3 style="margin-top:25px;color:white;  text-align:center;font-size:35px;font-weight:400"></h3> 
                              
                     <div class="row mt-5 justify-content-center ">
                    
                         <div class=" col-xs-12 col-sm-12"style="background-color:#1C1F2C;width:100%;border-radius:7px">
                          <div class="row justify-content-center align-items-center" style="padding:40px;width:100%">
                                   <div class="col-12">
                                   <img src="double-arrow 1.png" alt="" style="margin-left:20px">
                                   </div>
                                   <div class="col-12">
                                      <h3 class="mt-2"style="color:white;font-weight:800;margin-left:20px;padding-top:10px">Flexibity</h3>
                                      <p  style="color:white;font-weight:150;margin-left:20px">You set the time that best work for you and you can change 
                                                                   it at will but with an appropriate notice to your mentor.</p>
                                   </div>
                          </div>
                         
                         </div>
                        
                         <div class=" col-xs-12 col-sm-12 mt-4" style="background-color:#1C1F2C;border-radius:7px">
                         <div class="row"  style="padding:40px">
                             <div class="col-12">
                             <img src="eos-icons_project-outlined.png" alt="" style="margin-left:20px">
                             </div>
                             <div class="col-12">
                                      <h3 class="mt-2"style="color:white;font-weight:800;margin-left:20px;padding-top:13px">Project-Based Learning</h3>
                                      <p  style="color:white;font-weight:150;margin-left:20px">Build real-life projects for real clients, gain experience and build your portfolio while you learn.</p>
                                   </div>
                         </div>
                         
                         
                         </div>


                         <div class="  col-md-12 col-xs-12 col-sm-12 mt-4"style="background-color:#1C1F2C; border-radius:7px">
                         
                         <div class="row"  style="padding:40px">
                             <div class="col-12">
                             <img src="Vector.png" alt="" style="margin-left:20px">
                             </div>
                             <div class="col-12">
                                      <h3 class="mt-2"style="color:white;font-weight:800;margin-left:20px;padding-top:10px">Exclusive</h3>
                                      <p  style="color:white;font-weight:150;margin-left:20px">You get a first class treatment in that the attention of the 
Mentor is solely focused on youand not shared with others</p>
                                   </div>
                         </div>
                         
                         </div>
                       
                         <div class="  col-md-12 col-xs-12 col-sm-12 mt-4" style="background-color:#1C1F2C;border-radius:7px">
                         <div class="row"  style="padding:40px">
                             <div class="col-12">
                             <img src="../clarity_computer-solid-badged.png" alt="" style="margin-left:20px">
                             </div>
                             <div class="col-12">
                                      <h3 class="mt-2"style="color:white;font-weight:800;margin-left:20px;padding-top:10px">Remote Learning</h3>
                                      <p  style="color:white;font-weight:150;margin-left:20px">You can also learn online. Access a vast library of our classes,get mentored online and grow</p>

                                   </div>
                         </div>
                         
                         
                         
                         </div>
                     </div>
                     </div>
                     </div>
  
                        
                 
                   
<!-- end mobile -->










             <!--large screen view 
                    
                     <section id="aboutus" class="d-none d-lg-block d-xl-block d-sm-none d-xs-none d-md-none">
        <div >

<div class="container-fluid">
    <div class="row justify-content-center align-items-center" style="padding-top:50px">
        <div class="col-lg-6" style="margin-right:-187px;height:465px" >
           
            <div style="background: linear-gradient(90deg, #3F64F7 -18.69%, #5319B2 44.86%, #4940D6 112.15%);border-radius: 26px 0px 0px 26px; width:90%;height:465px;margin-right:73px">
            <div class="about-content  "  style=" width:100%;height:450px;margin-left:60px;">
                <h3 class="text-warning" style="padding-top:60px;">About us</h3>
                <h2 class="title" style="color:white">Pluralcode Exclusive</h2>
                <p style="color:white">PluralCode Academy exists for the sole purpose of creating a major impact by raising the next generation of Africa's tech geniuses, we partner with the most skilled professional and industry elites to make this vision happen everyday.</p>
                <a  class="btn btn-warning" style="width:40%">Get started today</a>
            </div>
        </div>
          
          
        </div>

        <div class="col-lg-6 justify-content-center" style=" height:465px">
        <div class="about-me-video-wrapper about-us-one-video pr-55 pr-sm-0 pr-xs-0"  style=" width:97%;margin-left:80px" >


<a href="video.mp4" class="about-me-video video-popup" data-aos="fade-up" style="border-radius: 0px 26px 26px 0px;" >
    <img class="image" src="image 9.png" alt="" class="mt-3"style="height:465px;border-radius: 0px 26px 26px 0px;">
   <img class="icon" src="../assets/images/icons/icon-youtube-play.png" alt="" >
</a>


</div>
    </div>
</div>
</div>


</section>-->


        




<section class="d-none d-sm-none d-lg-block d-md-none d-xs-none d-xl-block  pb-4" >
    <div class="container">
                <div class="row">
                    <div class="col">
                    <img src="exclusivereg.png" alt="" style="margin-top:70px">
                    </div>
                      
                </div>
    </div>
</section>


<section class=" d-lg-none d-sm-block d-md-block d-xs-block d-xl-none ">
    <div class="container">
                <div class="row " style="height:300px">
                      <div class="col-12 martins3 mt-4" style="border-radius: 0px 26px 26px 0px;">
                      <h1 class="title" style="color:white;font-size:30px;text-align:center;margin-top:26px">Pluralcode Exclusive</h1>
                <h5 style="color:white;text-align:center;font-weight:200">Join our Pluracode Exclusive were we will be teaching you cutting edge 
technologies in various fields of tech such as web development, IOT, Data science and more..</h5>
                      </div>
                </div>
    </div>
</section>

 <section class="d-none d-lg-block d-sm-none d-xl-block d-xs-none ">
     <div class="container-fluid">
     <?php if(isset($message)):  ?>
              
              <div class="alert alert-primary" role="alert" style="width:80%;margin-left:147px">
             <h4 style="color:black;text-align:center">  <?php echo $message ?></h4> 
           </div> 
            <?php  endif; ?>
     <form action="" method="post">
          <div class="row align-items-center justify-content-center">
               <div class="col-lg-5" style="">
                   <input type="text"name="name" placeholder="Name" style="background-color: #1C1F2C ; margin-left:39px;height:70px;border:none"> 
                   <input class="mt-4" type="email"name="email" placeholder="Email" style="background-color: #1C1F2C;margin-left:39px;height:70px;border:none"> 
                   <input class="mt-4" type="text"name="location" placeholder="Location(State & Area)" style="background-color: #1C1F2C;margin-left:39px;height:70px;border:none"> 

                   <input class="mt-4" type="tel"name="phone" placeholder="Phone/WhatsApp number" style="background-color: #1C1F2C ;margin-left:39px;height:70px;border:none"> 
               </div>
               <div style="width:40px;">

               </div>
               <div class="col-lg-5" style="">
                   <div class="row" style="background-color:#1C1F2C;border-radius:7px;width:570px;height:230px;padding:25px">
                   <div  style="padding:12px;margin-top:-17px">
                   
                  
                   <h4 style="color:white;font-weight:80">How Did You Hear About Us</h4>
               <label class="radio" style="">
               <input type="radio"name="firstcontact" value="instagram">
               Instagram
              <span></span>
            </label> <br>
               <label class="radio">
               <input type="radio"name="firstcontact" value="Facebook">
               <span></span>
               Facebook
            </label> <br>
            <label class="radio">
               <input type="radio"name="firstcontact" value="Unilag Sandbox">
               <span></span>
               Unilag Sandbox
            </label> <br>
            <label class="radio">
               <input type="radio"name="firstcontact" value="Web Series">
               <span></span>
               Web Series
            </label> <br>
            <label class="radio">
               <input type="radio"name="firstcontact" value="From a friend">
               <span></span>
               From a friend
            </label> <br>
          
            </div>
            </div>
            <div class="row mt-4" style="background-color:#1C1F2C;border-radius:7px;width:570px;height:100px;">
            
                <div style="padding:12px;">
                <h5 style="color:white;font-weight:80">Learning Venue</h5>
                <label class="radio">
               <input type="radio" name="venue" value="online">
               <span class="mb-5"></span>
                  <div class="mt-1"> Online</div> 
            </label> 
            <label class="radio" style="margin-left:5px">
               <input type="radio"name="venue" value="Offline(your home)">
               <span></span>
               <div class="mt-1"> Offline(your home)</div> 
            </label> 
            <label class="radio" style="margin-left:5px">
               <input type="radio"name="venue" value="offline(At our office)">
               <span></span>
               <div class="mt-1"> offline(At our office)</div> 
            </label>
                </div>
           
            </div>
               </div>
                      
              
               
          </div>
          <div class="row mt-4">
                   <textarea name="text"placeholder="Additional Notes (Tell us your Preferred schedule)"style="margin-left:160px;background-color:#1C1F2C;border:none;width:79%"></textarea>
              </div>
         <div class="row mt-4 mb-5"> <div class="col-12" style="margin-left:640px"> <button type="submit" class="btn" style="width:230px;color:white;background: linear-gradient(90deg, #3F64F7 -18.69%, #5319B2 44.86%, #4940D6 112.15%)">submit</button></div></div>
          </form>
     </div>
    
 </section>





 <section class="d-xs-block d-lg-none d-sm-block d-md-none d-xl-none">
     <div class="container-fluid">
     <?php if(isset($message)):  ?>
              
              <div class="alert alert-primary" role="alert" style="width:100%">
             <h4 style="color:black;text-align:center">  <?php echo $message ?></h4> 
           </div> 
            <?php  endif; ?>
     <form action="" method="post">
          <div class="row align-items-center justify-content-center">
               <div class="col-12 mt-4" >
                   <input type="text"name="name" placeholder="Name" required style="background-color: #1C1F2C; height:70px;border:none"> 
                   <input class="mt-4" type="email"name="email" placeholder="Email" required style="background-color:#1C1F2C;height:70px;border:none"> 
                   <input class="mt-4" type="text"name="location" placeholder="Location(State & Area)" required style="background-color:#1C1F2C ;height:70px;border:none"> 

                   <input class="mt-4" type="tel"name="phone" placeholder="Phone/WhatsApp number" required style="background-color:#1C1F2C;height:70px;border:none"> 
               </div>
              
               <div class="col-12 mt-3" style="">
                   <div  style="background-color:#1C1F2C;border-radius:7px;width:100%;">
                   
                   <div style="padding:35px;margin-bottom:20px">
                   <h4 style="color:white">How Did You Hear About Us</h4>
               <label class="radio" style="">
               <input type="radio"name="firstcontact" value="instagram">
               Instagram
              <span></span>
            </label> <br>
               <label class="radio">
               <input type="radio"name="firstcontact" value="Facebook">
               <span></span>
               Facebook
            </label> <br>
            <label class="radio">
               <input type="radio"name="firstcontact" value="Unilag Sandbox">
               <span></span>
               Unilag Sandbox
            </label> <br>
            <label class="radio">
               <input type="radio"name="firstcontact" value="Web Series">
               <span></span>
               Web Series
            </label> <br>
            <label class="radio">
               <input type="radio"name="firstcontact" value="From a friend">
               <span></span>
               From a friend
            </label> <br>
            <label class="radio">
               <input type="radio"name="firstcontact" value="Flyers">
               <span></span>
               Flyers
            </label>
            </div>
            </div>
               </div>
               <div class="col-12">
               <div class=" mt-1 mb-3" style="background-color:#1C1F2C;border-radius:7px;width:100%;height:160px;">
            
            <div style="padding:12px;margin-left:20px" >
            <h5 style="color:white;font-weight:80">Learning Venue</h5>
            <label class="radio">
           <input type="radio" name="venue" value="online">
           <span ></span>
               Online
        </label> <br>
        <label class="radio">
           <input type="radio"name="venue" value=" Offline(your home)">
           <span></span>
            Offline(your home)
        </label> <br>
        <label class="radio">
           <input type="radio"name="venue" value="offline(At our office)">
           <span></span>
            offline(At our office)
        </label>
            </div>
       
        </div>



               </div>
               <div class="col-12">
               <textarea name="text" placeholder="Additional Notes (Tell us your Preferred schedule)"style="background-color:#1C1F2C;border:none;width:100%"></textarea>
               </div>
          </div>
                 <button type="submit" class="mb-4" style="border-radius:10px;width:100%;height:50px;font-size:20px;color:white;background: linear-gradient(90deg, #3F64F7 -18.69%, #5319B2 44.86%, #4940D6 112.15%)">submit</button>
          </form>
     </div>
    
 </section>




















































































        <section class="d-none d-lg-block d-sm-none d-xs-none d-md-none d-xl-block">

<div class="footer-section section " data-bg-color="#171621">
    <div class="container">

        <!-- Footer Top Widgets Start -->
        <div class="row">

            <!-- Footer Widget Start -->
            <div class="col-xl-6 col-md-5 col-12 max-mb-50">
                <div class="footer-widget light-color">
                   <img src="../footerlogo.png" alt="" class="mb-3">
                    <div class="footer-widget-content">
                        <div class="content">
                            <p>4b Toyin Street Ikeja, Lagos State</p>
                            <p>+(234) 803-796-1731 </p>
                            <p><a href="#">support@pluralcode.academy </a></p>
                        </div>
                        <div class="footer-social-inline" style="margin-left:-16px">
                        <a href="https://web.facebook.com/pluralcodeacademy"><img src="../fb.png" alt=""></a>
                            <a href="https://twitter.com/PluralcodeA"><img src="../twit.png" alt="" class=""> </a>
                            
                            <a href="https://instagram.com/Pluralcode_Academy"><img src="../ig.png" alt="" class="mt-2"> </a>
                            <a href=""><img src="../youtube.png" alt="" > </a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Widget End -->

            <!-- Footer Widget Start -->
            <div class="col-xl-3 col-md-4 col-sm-7 col-12 max-mb-50">
                <div class="footer-widget light-color">
                    <h4 class="footer-widget-title">Explore</h4>
                    <div class="footer-widget-content">
                        <ul class="column-2">
                            <li><a href="enroll.php">Enroll Today</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="webdesign.php">Website Design</a></li>
                            <li><a href="digitalmarketing.php">Digital Marketing</a></li>
                            <li><a href="mentor.php">Become Mentor</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- Footer Widget End -->

            <!-- Footer Widget Start -->
            <div class="col-xl-3 col-md-3 col-sm-5 col-12 max-mb-50">
                <div class="footer-widget light-color">
                    <h4 class="footer-widget-title">About Us</h4>
                    <div class="footer-widget-content">
                      <p>PluralCode Academy exists for the sole purpose of creating a major impact by raising the next generation of Africa's tech geniuses.</p>
                    </div>
                </div>
            </div>
            <!-- Footer Widget End -->

        </div>
        <!-- Footer Top Widgets End -->

        <!-- Footer Copyright Start -->
      
        <!-- Footer Copyright End -->

    </div>
</div>

<div class="row " style="background-color:#171621">
            <div style="background: linear-gradient(90deg, #3F64F7 -18.69%, #5319B2 44.86%, #4940D6 112.15%); height:50px;width:400px;">
                <p class="copyright" style="margin-left:90px;margin-top:15px">&copy; 2021 PluralCode Technologies.</p>
            </div>
        </div>

<!-- Scroll Top Start -->
<a href="#" class="scroll-top" id="scroll-top">
    <i class="arrow-top fal fa-long-arrow-up"></i>
    <i class="arrow-bottom fal fa-long-arrow-up"></i>
</a>
<!-- Scroll Top End -->

</div>
</section>


<!-- footer mobile-->
<div class="footer-section section d-xl-none d-lg-none d-sm-block d-xs-block  d-md-block" data-bg-color="#171621">
    <div class="container">

        <!-- Footer Top Widgets Start -->
        <div class="row">

            <!-- Footer Widget Start -->
            <div class="col-xl-6 col-md-5 col-12 max-mb-50">
                <div class="footer-widget light-color">
                <img src="footerlogo.png" alt="" class="mb-3"> 
                    <div class="../footer-widget-content">
                        <div class="content">
                            <p>4b Toyin Street Ikeja, Lagos State</p>
                            <p>+(234) 803-796-1731 </p>
                            <p><a href="#">support@pluralcode.academy </a></p>
                        </div>
                        <div class="footer-social-inline">
                            <a href="https://web.facebook.com/pluralcodeacademy"><img src="../fb.png" alt=""></a>
                            <a href="https://twitter.com/PluralcodeA"><img src="../twit.png" alt="" class=""> </a>
                            
                            <a href="https://instagram.com/Pluralcode_Academy"><img src="../ig.png" alt="" class="mt-2"> </a>
                            <a href=""><img src="../youtube.png" alt="" > </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Widget End -->

            <!-- Footer Widget Start -->
            <div class="col-xl-3 col-md-4 col-sm-7 col-12 max-mb-50">
                <div class="footer-widget light-color">
                    <h4 class="footer-widget-title">Explore</h4>
                    <div class="footer-widget-content">
                        <ul class="column-2">
                            <li><a href="enroll.php">Enroll Today</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="webdesign.php">Website Design</a></li>
                            <li><a href="digitalmarketing.php">Digital Marketing</a></li>
                            <li><a href="mentor.php">Become Mentor</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- Footer Widget End -->

            <!-- Footer Widget Start -->
            <div class="col-xl-3 col-md-3 col-sm-5 col-12 max-mb-50">
                <div class="footer-widget light-color">
                    <h4 class="footer-widget-title">About Us</h4>
                    <div class="footer-widget-content">
                      <p>PluralCode Academy exists for the sole purpose of creating a major impact by raising the next generation of Africa's tech geniuses.</p>
                    </div>
                </div>
            </div>
            <!-- Footer Widget End -->

        </div>
        <!-- Footer Top Widgets End -->

        <!-- Footer Copyright Start -->
        <div class="row max-mt-20" style="background-color:#171621">
            <div class="col" style="">
                <p class="copyright" >&copy; 2021 PluralCode Technologies.</p>
            </div>
        </div>
        <!-- Footer Copyright End -->

    </div>
</div>

<!-- Newsletter Popup Start
<div id="max-popup" class="max-popup-section section">
    <div class="max-popup-dialog animated fadeInUp">
        <button class="max-popup-close"><i class="fal fa-times"></i></button>
        <div class="max-popup-dialog-inner">
            <div class="row">
                <div class="col-md-5 col-12 d-none d-md-block">
                    <div class="freecourse-popup-image">
                        <img src="assets/images/others/popup-free-course.png" alt="">
                    </div>
                </div>
                <div class="col-md-7 col-12 align-self-center">
                    <div class="freecourse-popup-content">
                        <h6 class="sub-title">Get Our Course free</h6>
                        <h2 class="title">Awesome for Website</h2>
                        <div class="freecourse-download-form">
                            <form action="#">
                                <div class="row max-mb-n20">
                                    <div class="col-12 max-mb-20">
                                        <input type="email" placeholder="Your E-mail">
                                    </div>
                                    <div class="col-12 max-mb-20">
                                        <button class="btn btn-primary btn-hover-secondary w-100">Download now</button>
                                    </div>
                                    <div class="col-12 max-mb-20">
                                        <small class="form-text text-center"><i class="fal fa-lock-alt mr-2"></i> Your infomation will never be shared with any third party</small>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter Popup End -->

<!-- Scroll Top Start -->
<a href="#" class="scroll-top" id="scroll-top">
    <i class="arrow-top fal fa-long-arrow-up"></i>
    <i class="arrow-bottom fal fa-long-arrow-up"></i>
</a>
<!-- Scroll Top End -->

</div>

















    <div id="site-main-mobile-menu" class="site-main-mobile-menu" style="background-color:transparent">
                        <div class="site-main-mobile-menu-inner" style="background-image:url('')">
                            <div class="mobile-menu-header"  style="background-color: #0A0F23;">
                                <div class="mobile-menu-logo">
                                    <a href="index.php"><img class="dark-logo" src="pluralcodex.png" alt="Learts Logo" style=" margin-left:23px;width:100%;"></a>
                                </div>
                                <div class="mobile-menu-close">
                                    <button class="toggle">
                                        <i class="icon-top"></i>
                                        <i class="icon-bottom"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="mobile-menu-content" >
                                <nav class="site-mobile-menu" >
                                    <ul>
                                      <li class=" position-static">
                                          <a href="index.php"><span class="menu-text">Home</span></a>


                                      </li>
                                      <li class="has-children">
                                          <a href="#"><span class="menu-text">Courses</span></a>
                                          <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                          <ul class="sub-menu">
                                              <li><a href="webdesign.php"><span class="menu-text">Website Development</span></a></li>
                                              <li><a href="digitalmarketing.php"><span class="menu-text">Digital Marketing</span></a></li>
                                              <li><a href="uiux.php"><span class="menu-text">Product Design(UI/UX)</span></a></li>
                                              <li><a href="datascience.php"><span class="menu-text">Data Science</span></a></li>
                                          </ul>
                                      </li>
                                      <li class="has-children">
                                          <a href="#"><span class="menu-text">Platforms</span></a>
                                          <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                          <ul class="sub-menu">
                                              <li><a href="index.php#pluralcodewebseries"><span class="menu-text">Webseries</span></a></li>
                                              <li><a href="index.php#pluralcodesandbox"><span class="menu-text">Sand Box</span></a></li>
                                              <li><a href="index.php#pluralcodex"><span class="menu-text">Pluralcode X</span></a></li>

                                          </ul>
                                      </li>
                                      <li class="has-children">
                                        <a href="#" style="color:white;font-weight:250"><span class="menu-text">services</span></a>
                                        <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                        <ul class="sub-menu" style="background-color: #0A0F23">
                                            <li><a href="../academysite/services/index.php#webdesign1"><span class="menu-text" style="color:white">Website Development</span></a></li>
                                            <li><a href="../academysite/services/index.php#mobiledev1"><span class="menu-text"style="color:white">Mobile Appdevelopment</span></a></li>
                                             <li><a href="../academysite/services/index.php#customsoftware1"><span class="menu-text" style="color:white">Custom Software</span></a></li>
                                             <li><a href="../academysite/services/index.php#productdesign1"><span class="menu-text"style="color:white">Product Design</span></a></li>
                                            
                                           
                                              
                                              
                                        </ul>
                                    </li>

                                      <li class="">
                                          <a href="index.php#about"><span class="menu-text">About Us</span></a>

                                      </li>
                                      <li class="">
                                          <a href="mentor.php"><span class="menu-text">Become a Mentor</span></a>

                                      </li>
                                      <li class="">
                                          <a href="index.php#faq"><span class="menu-text">FAQ</span></a>

                                      </li>

                                      <li class="">
                                          <a href="contact.php"><span class="menu-text">Contact Us</span></a>

                                      </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>



    <!-- JS
============================================ -->

    <!-- Vendors JS -->
    <!-- <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.1.0.min.js"></script>
<script src="assets/js/vendor/bootstrap.bundle.min.js"></script> -->

    <!-- Plugins JS -->
    <!-- <script src="assets/js/plugins/parallax.min.js"></script>
<script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

    <script>
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1,
            nav:false,
            dots:false
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
</script>


    <script src="../assets/js/vendor/vendor.min.js"></script>
    <script src="../assets/js/plugins/plugins.min.js"></script>
  

    <!-- Main Activation JS -->
    <script src="../assets/js/main.js"></script>

    <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("activea");
        var panela = this.nextElementSibling;
        if (panela.style.display === "block") {
          panela.style.display = "none";
        } else {
          panela.style.display = "block";
        }
      });
    }
    </script>


</body>

</html>
