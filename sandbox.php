
<?php 
   if($_SERVER['REQUEST_METHOD']==='POST'){
       if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['location'])  && isset($_POST['first']) && isset($_POST['phone'] ))

       {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $location = $_POST['location'];
        $firstcontact = $_POST['first'];
        $phonenumber = $_POST['phone'];
      
        $platform="sandbox";
        $learn="NULL";
        
      

              
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
            "learn": '.json_encode($learn).'
        }',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);

        $result = json_decode($response);
        if(empty($result) ){
            $message ="All field are required";
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
    <title>Webseries</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="public_html/icon.png">

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
.card {
   position: relative;
   transition: all .5s ease-in;
}
 
.card__image {
   display: block;
   width: 100%;
   height: auto;
}
.card__overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  visibility: none;
  transition: .5s ease;
  background-color: #393839;
}
.card:hover .card__overlay {
  opacity: 1;
}
.overlay__text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
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








/* Add padding BETWEEN each column (if you want) */
.row1,
.row1 > .column1 {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column1 {
  float: left;
  width: 33.33%;
  display: none; /* Hide columns by default */
}

/* Clear floats after rows */
.row1:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */


/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn1 {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

/* Add a grey background color on mouse-over */
.btn1:hover {
  background-color: #ddd;
}

/* Add a dark background color to the active button */
.btn1.active1 {
  background-color: #FFB341;
   color: white;
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
.martins3{
    background-image: url('Frame 75.png');
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
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
</head>

<body style="background-color: #0A0F23">
        
           <!-- Header Section Start -->
           <div   class="header-section header-fluid fixed-top section">
            <div style="background-color: #0A0F23;"  class="header-inner" >
                <div    class="container position-relative">
                    <div   class="row justify-content-between align-items-center">
                      
                        <!-- Header Logo Start -->
                        <div  class="col-xl-3 col-auto">
                            <div class="header-logo">
                                <a href="index.php">
                                    <img class="dark-logo" src="../logoplural.png" alt="Learts Logo" style=" margin-left:23px">
                                   
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

<!-- Portfolio Gallery Grid -->
<section id="photo" style="width:100%;margin-top:100px">

<div class="container-fluid">
        <div  class="row justify-content-center">
<div id="myBtnContainer">
  <button style="margin-top:30px;"class="btn btn-outline-warning btn1 active1 mb-4" onclick="filterSelection('all')"> Show all</button>
  <button class="btn btn-outline-warning  btn1 mt-1" onclick="filterSelection('nature')"> Mentors</button>
  
</div>
</div>
<div class=" row1">
    <div class="row mb-4">


    <div class="col-lg-6">
      <div class="row">
    <div class="col-12 column1 mt-3" data-aos="fade-up">
    <div class="content">
      <img  src="mentor3.webp" class="" style="border-radius:30px;width:100%" alt="Nature" >
    
    </div>
    </div>
</div>


    <div class="row mt-3">
      
    <div class="col-lg-6 col-sm-12 col-xs-12 colxl-6 column1 nature mt-3" data-aos="fade-up">
    
    <div class="content">
      <img src="sandbox3.JPG" class="" style="height:50%;width:100%;border-radius:30px" alt="Mountains" style="width:100%">
      
      
    </div>
      
    </div>
    <div class="col-lg-6 col-sm-12 col-xs-12 colxl-6 column1 people mt-3" data-aos="fade-up">
    
    <div class="content">
      <img src="sandbox3.JPG" class="" style="height:50%;width:100%;border-radius:30px"  alt="Mountains" style="width:100%">
      
      
    </div>
      
  
    </div>
</div>


    <div class="row mt-4">
    <div class="col-lg-6 col-sm-12 col-xs-12 colxl-6 column1 nature mt-3" data-aos="fade-up">
    
    <div class="content">
      <img src="sandbox3.JPG" class="" style="height:50%;width:100%;border-radius:30px" alt="Mountains" style="width:100%">
      
      
    </div>
      
    </div>
    <div class="col-lg-6 col-sm-12 col-xs-12 colxl-6 column1 people mt-3" data-aos="fade-up">
    <div class="content">
      <img src="sandbox3.JPG" class="" style="height:50%;width:100%;border-radius:30px" alt="Mountains" style="width:100%">
      
      
    </div>
      
      
    </div>

    
  </div>
    </div>
   
    






    <div class="col-lg-6">
    <div class="row">
      
      <div class="col-lg-6 col-sm-12 col-xs-12 colxl-6 column1 nature mt-3" data-aos="fade-up">
      
      <div class="content">
        <img src="sandbox3.JPG" class="" style="height:50%;width:100%;border-radius:30px" alt="Mountains" style="width:100%">
        
        
      </div>
        
      </div>
      <div class="col-lg-6 col-sm-12 col-xs-12 colxl-6 column1 people mt-3" data-aos="fade-up">
      
      <div class="content">
        <img src="sandbox3.JPG" class=" " style="height:50%;width:100%;border-radius:30px" alt="Mountains" style="width:100%">
        
        
      </div>
        
    
      </div>
  </div>
  
  
      <div class="row" style="margin-top:30px">
      <div class="col-lg-6 col-sm-12 col-xs-12 colxl-6 column1 nature mt-3" data-aos="fade-up">
      
      <div class="content">
        <img src="sandbox3.JPG" class=" " style="height:50%;width:100%;border-radius:30px" alt="Mountains" style="width:100%">
        
        
      </div>
        
      </div>
      <div class="col-lg-6 col-sm-12 col-xs-12 colxl-6 column1 people mt-3" data-aos="fade-up">
      <div class="content">
        <img src="sandbox3.JPG" class=" " style="height:50%;width:100%;border-radius:30px" alt="Mountains" style="width:100%">
        
        
      </div>
        
        
      </div>
  
      
    </div>











      <div class="row ">
    <div class="col-12 column1 people mt-3" data-aos="fade-up">
    <div class="content">
      <img  src="mentor3.webp" class="shadow-lg p-3 mb-5 " style="border-radius:30px" alt="Nature" style="width:100%">
    
    </div>
    </div>
</div>


  
    </div>




  
  </div>
 




 
<!-- END GRID -->
</div>
        
   </div>     
</div>
  </section> 
  
  
  
  <section id="about"style=""class="d-none d-lg-block d-md-none d-sm-none d-xs-none mt-4">
    <div class="container">
    <div class="row justify-content-center align-items-center ">
    <div class="col-lg-6 col-md-12 col-sm-12 " style="">
      <h3 style="color:white">About Sandbox</h3>
            <hp class=""style="color:white;">Are you passionate about technology? Are you unsure about which of the
            technological skills you should focus on? Do you need a guide to walk you through the path? BE a part of our weekly discussion
            as Nduka Ukpabi (Founder of pluralcode), and other tech enthuthiasts abd industry experts impacts you with valuable information
            <br><a class="btn btn-warning mt-2" href="#form">Join Us</a>
</p>
             
        </div>
           <div class="col-lg-6 col-md-12 col-sm-12">
            <img style="height:30%;width:70%"src="aboutsandbox.png" style="margin-right:-20px"> 
        </div>
       
       
    </div>
</section>




<section id="register"style=""class=" d-lg-none d-md-block d-sm-block d-xs-block mt-4">
    <div class="container-fluid">
    <div class="row align-items-center">
           <div class="col-lg-4 col-md-12 col-sm-12">
            <img style="margin-left:50px;height:30%;width:70%"src="aboutsandbox.png"> 
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 " >
        <h3 style="color:white;text-align:center">About Sandbox</h3>
            <p class=""style="padding:20px;color:white">Are you passionate about technology? Are you unsure about which of the
            technological skills you should focus on? Do you need a guide to walk you through the path? BE a part of our weekly discussion
            as Nduka Ukpabi (Founder of pluralcode), and other tech enthuthiasts and industry experts impacts you with valuable information
            <br><a class="btn btn-warning mt-2" style=""href="#form">Join Us</a>
             </p>
        </div>
       
    </div>
    </div>
</section>


  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
        
<section class="d-none d-sm-none d-lg-block d-md-none d-xs-none d-xl-block pb-4">
    <div class="container">
                <div class="row">
                    <div class="col">
                    <img src="Frame 75.png" alt="">
                    </div>
                      
                </div>
    </div>
</section>


<section class=" d-lg-none d-sm-block d-md-block d-xs-block d-xl-none ">
    <div class="container">
                <div class="row " style="height:300px">
                      <div class="col-12 martins3" style="border-radius: 0px 26px 26px 0px;">
                      <h1 class="title" style="color:white;font-size:30px;text-align:center;margin-top:26px">Website Design & Development</h1>
                <h5 style="color:white;text-align:center;font-weight:200">Register and book a seat on our Web Development Masterclass. 
Kindly fill out the form and a member of our support team will reach out to you</h5>
                      </div>
                </div>
    </div>
</section>

 <section class="d-none d-lg-block d-sm-none d-xl-block d-xs-none">

     <div class="container-fluid">
 
       
         <?php if(isset($message)):  ?>
              
            <div class="alert alert-primary" role="alert" style="width:80%;margin-left:147px">
           <h4 style="color:black;text-align:center">  <?php echo $message ?></h4> 
         </div> 
          <?php  endif; ?>
     <form action="" method="POST">
          <div class="row align-items-center justify-content-center">
               <div class="col-lg-5" >
                   <input type="text"name="name" placeholder="Name" style="background-color: #1C1F2C ; margin-left:30px;height:70px;border:none"> 
                   <input class="mt-4" type="email"name="email" placeholder="Email" style="background-color: #1C1F2C;margin-left:30px;height:70px;border:none"> 
                   <input class="mt-4" type="text"name="location" placeholder="Location(State & Area)" style="background-color: #1C1F2C;margin-left:30px;height:70px;border:none"> 

                   <input class="mt-4" type="tel"name="phone" placeholder="Phone/WhatsApp number" style="background-color: #1C1F2C ;margin-left:30px;height:70px;border:none"> 
               </div>
               <div style="width:15px;">

               </div>
               <div class="col-lg-5" style="">
                   <div  style="background-color:#1C1F2C;border-radius:7px;width:570px;height:360px">
                   
                   <div style="padding:35px;margin-bottom:20px">
                   <h4 style="color:white;font-weight:80">How Did You Hear About Us</h4>
               <label class="radio" style="">
               <input type="radio"name="first" value="instagram" >
               Instagram
              <span></span>
            </label> <br>
               <label class="radio">
               <input type="radio"name="first" value="Facebook">
               <span></span>
               Facebook
            </label> <br>
            <label class="radio">
               <input type="radio"name="first" value="Unilag Sandbox">
               <span></span>
               Unilag Sandbox
            </label> <br>
            <label class="radio">
               <input type="radio"name="first" value="Web series">
               <span></span>
               Web Series
            </label> <br>
            <label class="radio">
               <input type="radio"name="first" value="From a friend">
               <span></span>
               From a friend
            </label> <br>
            <label class="radio">
               <input type="radio"name="first" value="Flyers">
               <span></span>
               Flyers
            </label>
            </div>
            </div>
               </div>
                

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
               <input type="radio"name="first" value="instagram">
               Instagram
              <span></span>
            </label> <br>
               <label class="radio">
               <input type="radio"name="first" value="Facebook">
               <span></span>
               Facebook
            </label> <br>
            <label class="radio">
               <input type="radio"name="first" value="Unilag Sandbox">
               <span></span>
               Unilag Sandbox
            </label> <br>
            <label class="radio">
               <input type="radio"name="first" value="Web Series">
               <span></span>
               Web Series
            </label> <br>
            <label class="radio">
               <input type="radio"name="first" value="From a Friend">
               <span></span>
               From a friend
            </label> <br>
            <label class="radio">
               <input type="radio"name="first" value="Flyers">
               <span></span>
               Flyers
            </label>
            </div>
            </div>
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
                    <div class="footer-widget-content">
                        <div class="content">
                            <p>4b Toyin Street Ikeja, Lagos State</p>
                            <p>+(234) 803-796-1731 </p>
                            <p><a href="#">support@pluralcode.academy </a></p>
                        </div>
                        <div class="footer-social-inline">
                            <a href="https://web.facebook.com/pluralcodeacademy"><img src="fb.png" alt=""></a>
                            <a href="https://twitter.com/PluralcodeA"><img src="twit.png" alt="" class=""> </a>
                            
                            <a href="https://instagram.com/Pluralcode_Academy"><img src="ig.png" alt="" class="mt-2"> </a>
                            <a href=""><img src="youtube.png" alt="" > </a>
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
                                    <a href="index.php"><img class="dark-logo" src="logoplural.png" alt="Learts Logo" style=" "></a>
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
                    <script src="assets/js/vendor/vendor.min.js"></script>
                    <script src="assets/js/plugins/plugins.min.js"></script>

                    <!-- Main Activation JS -->
                   

                   

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
    <script>filterSelection("all") // Execute the function and show all columns
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column1");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn1");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active1");
    current[0].className = current[0].className.replace(" active1", "");
    this.className += " active1";
  });
}</script>

    
        
</body>
</html>