<!DOCTYPE html>
<html>

<?php 
  $currentPage = "Portfolio";
  ?>

<head>
    <meta charset="utf-8">
    <title>Tiffany White | Portfolio </title>
    <link rel="stylesheet" href="css/long-scrolly.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="jquery.wm-gridfolio-1.0.min.css">
    <link href="" rel="stylesheet">
	<link rel="stylesheet" href="css/fonts.css">
</head>

<body>

    <!-- Navigation -->

     <?php include 'nav.inc';?>

     $(document).ready(function(){
  $('.demo').WMGridfolio();
});


     <div class="wmg-container demo">
  <div class="wmg-item">

    <div class="wmg-thumbnail">

      <div class="wmg-thumbnail-content">

        <img src="img-1.jpg" alt="image">

      </div>

      <div class="wmg-arrow"></div>

    </div>

    <div class="wmg-details"> <span class="wmg-close"></span>

      <div class="wmg-details-content">


        <!-- Image details -->

        <div class="container exemplo">

          <div class="row">

            <div class="col-md-6"> <img src="large-1.jpg" alt="image"> </div>

            <div class="col-md-6">

              <h2>Title 1</h2>

              <hr>

              <p> Description 1 </p>

              <a href="#" class="btn btn-primary btn-lg" title="Read more">Read more</a> </div>

          </div>

        </div>   

      </div>

    </div>

  </div>
   

  <div class="wmg-item">

    <div class="wmg-thumbnail">

      <div class="wmg-thumbnail-content">
     

        <!-- exemplo de conteudo para thumbnail -->

        <img src="img-2.jpg" alt="image">

        <!-- fim do exemplo -->
    

      </div>

      <div class="wmg-arrow"></div>

    </div>

    <div class="wmg-details"> <span class="wmg-close"></span>

      <div class="wmg-details-content"> 

        <!-- exemplo de coteúdo para detail -->

        <div class="container exemplo">

          <div class="row">

            <div class="col-md-6"> <img src="large-2.jpg" alt="image"> </div>

            <div class="col-md-6">

              <h2>Title 2</h2>

              <hr>

              <p> Description 2 </p>

              <a href="#" class="btn btn-primary btn-lg" title="Read more">Read more</a> </div>

          </div>

        </div>

         
      </div>

    </div>

  </div>

   

  <div class="wmg-item">

    <div class="wmg-thumbnail">

      <div class="wmg-thumbnail-content">

         

        <img src="img-3.jpg" alt="image">
         

      </div>

      <div class="wmg-arrow"></div>

    </div>

    <div class="wmg-details"> <span class="wmg-close"></span>

      <div class="wmg-details-content">

         

        <div class="container exemplo">

          <div class="row">

            <div class="col-md-6"> <img src="large-3.jpg" alt="image"> </div>

            <div class="col-md-6">

              <h2>Title 3</h2>

              <hr>

              <p> Description 3 </p>

              <a href="#" class="btn btn-primary btn-lg" title="Read more">Read more</a> </div>

          </div>

        </div>

         

      </div>

    </div>

  </div>

   

</div>

  <?php include 'footer.inc';?>

  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/menu-highlighter.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="jquery.wm-gridfolio-1.0.min.js"></script>

</body>
</html>









  