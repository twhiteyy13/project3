   <nav class="horizontal-nav">
     <ul>
        <li<?php if($thisPage=="Home") echo " class=\"currentpage\""; ?>> 
        	<a class="button" href="index.php">Home</a></li>
        <li<?php if($thisPage=="Portfolio") echo " class=\"currentpage\""; ?>> 
        	<a class="button" href="portfolio.php">Portfolio</a></li>
        <li<?php if($thisPage=="Contact") echo " class=\"currentpage\""; ?>> 
        	<a class="button" href="contact.php">Contact Form</a></li>
      </ul>
    </nav>