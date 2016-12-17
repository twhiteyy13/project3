<!DOCTYPE html>
<html>

<?php 
  $currentPage = "Home";

  ?>

<head>
    <meta charset="utf-8">
    <title> Tiffany White | Home </title>
    <link rel="stylesheet" href="css/long-scrolly.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="" rel="stylesheet">
  <link rel="stylesheet" href="css/fonts.css">
</head>

<body>

    <!-- Navigation -->
     <?php include 'nav.inc';?>

    <!-- Top Section -->
    <section id="first">
        <div class="container">

            <h1>Tiffany White</h1>

            <div class="content">

              <img src="Gardens.jpg" alt="Princes Street Gardens in Edinburgh, Scotland">
 

            </div><!-- .content -->

       </div><!-- .container -->

    </section>

    <!-- Second Section -->
    <section id="second">
        <div class="container">

            <div class="content">

        <div id="column1">
          <h2>Studio Art</h2>
          <p><span class="nyc"></p>
        </div>

        <div id="column2">
          <h2>Business</h2>
          <p> </p>
        </div>

        <div id="column3">
          
          <img src="line-up.jpg" alt="Field Hockey Team">
          
        </div>   

            </div><!-- .content -->

       </div><!-- .container -->

    </section>

    <!-- Third Section -->
    <section id="third">
        <div class="container">

            <h1>Accomplishments</h1>

            <div class="content">

              <article>

               <!--Number 1-->
               <div class="item">
                  <div class="img">
                    <img src="" alt="">
                  </div>
                  <div class="info">
                     <h2>Athletics</h2>
                     <p></p>
                  </div><!--.info-->
              </div>

              <!--Number 2-->
               <div class="item">
                  <div class="img">
                    <img src="" alt="">
                  </div>
                  <div class="info">
                     <h2>Edinburgh Capitals Ice Hockey</h2>
                     <p></p>
                  </div><!--.info-->
              </div>

              <!--Number 3-->
               <div class="item">
                  <div class="img">
                    <img src="" alt="">
                  </div>
                  <div class="info">
                     <h2>Alpha Kappa Psi</h2>
                     <p></p>
                  </div><!--.info-->
              </div>

              <!--Number 4-->
               <div class="item">
                  <div class="img">
                    <img src="" alt="">
                  </div>
                  <div class="info">
                     <h2>Chi Omega</h2>
                     <p></p>
                  </div><!--.info-->
              </div>

              <!--Number 5-->
               <div class="item">
                  <div class="img">
                    <img src="" alt="">
                  </div>
                  <div class="info">
                     <h2>Employment</h2>
                     <p></p>
                  </div><!--.info-->
              </div>









              </article>


              <aside>

                <section>




                </section>





                <section>




                </section>




              </aside>


                

            </div><!-- .content --> 

       </div><!-- .container -->

    </section><!--.third-->

     <?php include 'footer.inc';?>

<!-- Use the following JavaScript code to do the smooth-scroll thing on the internal links -->
<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
// From:    Smooth Scrolling by CHRIS COYIER, updated JANUARY 31, 2016
//          https://css-tricks.com/snippets/jquery/smooth-scrolling
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 250);
        return false;
      }
    }
  });
});
</script>

  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/menu-highlighter.js"></script>

</body>

</html>
