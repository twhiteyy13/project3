<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Tiffany White | Home </title>
    <link rel="stylesheet" href="css/long-scrolly.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <!-- Navigation -->
  <nav class="main-menu" class="horizontal-nav">
        <ul>
            <li class="currentpage"><a href="index.php">Home </a></li>
            <li><a href="portfolio.php">Portfolio </a></li>
            <li><a href="contact.php">Contact Form </a></li>
        </ul>
    </nav>

    <!-- Top Section -->
    <section id="first">
        <div class="container">

            <h1>First Section</h1>

            <div class="content">

                

            </div><!-- .content -->

       </div><!-- .container -->

    </section>

    <!-- Second Section -->
    <section id="second">
        <div class="container">

            <h1>Second Section</h1>

            <div class="content">

                

            </div><!-- .content -->

       </div><!-- .container -->

    </section>

    <!-- Third Section -->
    <section id="third">
        <div class="container">

            <h1>Third Section</h1>

            <div class="content">

                

            </div><!-- .content -->

      <?php include 'footer.inc';?>

       </div><!-- .container -->

    </section>

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

</body>

</html>
