
<?php
require('db.php');
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>mon blog</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!--link rel="stylesheet" href="registration.css">
    
    <link rel="stylesheet" href="modal.css">
    <!--link rel="stylesheet" href="syle.css"-->
    <!--link rel="stylesheet" href="joli.css"-->
  </head>
<?php 
include('Dossiers/entête.php');

?>
       

       <section id="lab_video_slider">
         <div class="container-fluid">
           <div class="row">
             <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

             <!-- Link Swiper's CSS -->
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.2.5/css/swiper.min.css">

             <!-- Swiper -->
             <div class="swiper-container">
               <div class="swiper-wrapper">
                 <div id="slide_one" class="swiper-slide">

                  <img src="nidoeuf.jpg" alt="slider" style="width:1100px; height:650px;">

                 </div>

                 <div id="slide_two" class="swiper-slide">
         <div id="lab_video_text_overlay">
           <div class="container">
             <h2>Nos oeufs de cailles</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc molestie</p>
             <a href="#" class="btn btn-warning">Learn About Us</a>

           </div>
         </div>
         <!-- end #lab_overlay -->

                    <img src="oeufcail.jpg" alt="slider" style="width:1100px; height:650px;">
                 </div>

                 <div id="slide_three" class="swiper-slide">
                   <img src="slidep.jpg" alt="slider" style="width:1100px; height:650px;">
                    <!-- VIDEO -->

                   <!-- END VIDEO -->
                 </div>
               </div>
               <!-- Add Pagination -->
               <div class="swiper-pagination"></div>
               <!-- Add Arrows -->
               <div class="swiper-button-next"></div>
               <div class="swiper-button-prev"></div>
             </div>

             <!-- Swiper JS -->
             <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.2.5/js/swiper.min.js"></script>

             <!-- Initialize Swiper -->
             <script>
               var swiper = new Swiper('.swiper-container', {
                   pagination: '.swiper-pagination',
                   paginationClickable: true,
                   nextButton: '.swiper-button-next',
                   prevButton: '.swiper-button-prev',
                   spaceBetween: 30,
                   autoplay: 5000,
                   autoplayDisableOnInteraction: false
               });
             </script>
           </div>
           <!-- end .row -->
         </div>
         <!-- end .container-->
       </section>

<?php
include('Dossiers/article.php');
?>
<!-- details card section starts from here -->
<?php 
include('Dossiers/temoignage.php');
?>
<?php 
include('Dossiers/footer.php');
?>

<script src="java1.js"></script>
<script  src="calculate.js"></script>
<script src="joli.js"></script>


  </body>
</html>
