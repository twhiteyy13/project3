<!DOCTYPE html>
<html>

<?php 
  $thisPage = "Contact";
  ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title> Tiffany White | Contact </title>
    <link rel="stylesheet" href="css/long-scrolly.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="sss/sss.css">
	 <link rel="stylesheet" href="css/fonts.css">
<link href="https://fonts.googleapis.com/css?family=Cormorant+Unicase|Covered+By+Your+Grace|Eczar|Playfair+Display+SC" rel="stylesheet">
</head>

<body>

     <header>

        <?php include 'inc/nav.inc';?>

    <h1>Tiffany White | Contact Form </h1>

  </header>

<div class="container-form">

   <section>

  	<h2>Contact Me</h2>

	<form method="post" action="database-write.php" name="contactForm" onsubmit="return(validate());">

	<div class="label">
		<label for="name"> Name: </label>
		<input type="text" name="name" id="name">
	</div>

	<div class="label">
		<label for="Email"> Email: </label>
		<input type="text" name="email" id="email">
	</div>

	<div class="label">

		<label for="phone"> Telephone:</label> 
		<input type="text" name="phone" id="phone">
	</div>

	<div class="label">

		<label for="message"> Message:</label>
		<textarea name="message" id="message" form="contactForm"></textarea>

  </div>
  

    <input type="submit" value="Send">

  </form>

  <p> Or Go <a href="index.php">Back to the Home</a></p>

 </section>

</div> <!--.container-form-->

 



	

	  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/menu-highlighter.js"></script>

</body>
</html>

 <?php include 'inc/footer.inc';?>

<!--Form Validation-->

<script>
        

      function validate(){

        var emailID = document.contactForm.Email.value;
        atpos = emailID.indexOf("@");
        dotpos = emailID.lastIndexOf(".");

        if( atpos < 1 || ( dotpos - atpos < 2 ))
        {
          alert ( "Please enter correct email ID")
          document.contactForm.Email.focus() ;
          return false;
        }

      
         if( document.contactForm.Name.value == "" )
         {
            alert( "Please provide your name!" );
            document.contactForm.Name.focus() ;
            return false;
         }
         
         if( document.contactForm.Email.value == "" )
         {
            alert( "Please provide your Email!" );
            document.contactForm.Email.focus() ;
            return false;
         }
         
         if( document.contactForm.Telephone.value == "" ||
         isNaN( document.contactForm.Telephone.value ) ||
         document.contactForm.Telephone.value.length != 10 )
         {
            alert( "Please provide a phone with ten digits." );
            document.contactForm.Telephone.focus() ;
            return false;
         }

         return( true );
      }

</script>

 


  