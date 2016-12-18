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

              <img src="images/Gardens.jpg" alt="Princes Street Gardens in Edinburgh, Scotland">
 

            </div><!-- .content -->

       </div><!-- .container -->

    </section>

    <!-- Second Section -->
    <section id="second">
        <div class="container">

            <div class="content">

        <div id="column1">
          <h2>Studio Art</h2>
          <p>I'm a studio art major. I normally specialize in 3D art or installations because I like making art that people can touch and interact with by using all of their senses. Check out my <a href ="http://tiffanywhite12.wixsite.com/tiffany-art-design"> personal website </a> to see a collection of my work. </p>
        </div>

        <div id="column2">
          <h2>Business</h2>
          <p> I have a business minor with a concentration in marketing. I want to combine art and business to show the creative side of the business world. </p>
        </div>

        <div id="column3">
          
          <img src="images/line-up.jpg" alt="Field Hockey Team">
          
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
                     <p> 4x varsity starter and letter winner - Field Hockey 
                      <ol>
                        <li>Selection for the NFHCA National Academic Squad in ’13, ’14, ‘15 </li>
                        <li>Selection for the Liberty League All Academic Team  in ’14, ‘15, '16 </li>
                        <li>After the 2015 season, was selected to the Second Team All-Liberty League Team and Second Team NFHCA All-Region Team</li>

                      </ol>

                    </p>

                    <br>

                    <p> 2x varsity starter and letter winner - Softball

                      <ol>
                        <li>NFCA All-America Scholar Athlete team (2015)</li>
                        <li>Second Team All- Liberty League Team as Outfielder </li>
                        <li>Liberty League and UAA All-Academic Teams '15 </li>
                      </ol>

                     </p>
                  </div><!--.info-->
              </div>

              <!--Number 2-->
               <div class="item">
                  <div class="img">
                    <img src="" alt="">
                  </div>
                  <div class="info">
                     <h2>Edinburgh Capitals Ice Hockey</h2>
                     <p> In the spring semester of my junior year, I studied abroad in Edinburgh, Scotland, where I held the position of a sports marketing intern for the Edinburgh Capitals Elite Hockey Team. 
                      I developed the idea for an inaugural "Caps' Student Night" and was respoonsible for managaging social media and marketing materials. 
                      While the team is a professional level team, the organization also holds community outreach programs to develop the younger feeder teams. I design sponsor booklets, school program pamplets, and various hockey school and camp posters. My daily activities also included assisting my supervisors and other rink personnel with box office, raffle tickets, and fan interactions, merchandise, press releases and emails.
                     </p>
                  </div><!--.info-->
              </div>

              <!--Number 3-->
               <div class="item">
                  <div class="img">
                    <img src="" alt="">
                  </div>
                  <div class="info">
                     <h2>Alpha Kappa Psi</h2>
                     <p>
                      As a pledge, I was elected marketing chair and make all marketing materials associated to our fundraising efforts. 
                      As a brother, I served one of the new member educator's this semester as well as webmaster. I will be serving as co-social chair for the upcoming semester. 


                     </p>
                  </div><!--.info-->
              </div>

              <!--Number 4-->
               <div class="item">
                  <div class="img">
                    <img src="" alt="">
                  </div>
                  <div class="info">
                     <h2>Chi Omega</h2>
                     <p>


                     </p>
                  </div><!--.info-->
              </div>

              </article>

              <hr>


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
