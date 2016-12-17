<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Tiffany White | Contact </title>
    <link rel="stylesheet" href="css/long-scrolly.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <!-- Navigation -->
   <nav class="main-menu" class="horizontal-nav">
        <ul>
            <li><a href="index.php">Home </a></li>
            <li><a href="portfolio.php">Portfolio </a></li>
            <li class="currentpage"><a href="contact.php">Contact Form </a></li>
        </ul>
    </nav>

  	<h1>Phonebook Entry</h1>

	<form method="post" action="database-write.php" form name="contactForm" onsubmit="return(validate());">
		
	<div>
		<label for="name"> Name: </label>
		<input type="text" name="name" id="name">
	</div>

	<div>
		<label for="Email"> Email: </label>
		<input type="text" name="Email" id="Email">
	</div>

	<div>

		<label for="tel"> Telephone:</label> 
		<input type="tel" name="tel" id="tel" >
	</div>

	<div>

		<label for="message"> Message: </label>
		<textarea name="message"

		<input type="submit" value="Send">

	</form>

	<p> Or Go <a href=".">Back to the Index</a></p>

</body>
</html>

<!--Form Validation-->

<script type="text/javascript">
        

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

  <?php include 'footer.inc';?>
  