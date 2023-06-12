<?php
//Disable XSS
header("X-XSS-Protection: 0");

//Start Session
session_start();

//We also need input sanitisation so lets grab my library
require_once("scripts/sanitize.php");
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Dan Goldsmith.">
    
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    
    <link rel="stylesheet" href="custom.css">
    <!-- Add the Solarized theme -->
    
  </head>
  
  
  <body>

    <div class="container"> <!-- Main Container -->
      <!-- Menubar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container"> <!-- Same Margins as Main Page -->
    <a class="navbar-brand" href="/"><span>Weyland</span></a>

    <!-- Toggle on Size -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>


    <!-- Collapable Content For the Nav bar -->
    <div class="collapse navbar-collapse mr-auto" id="navbarNav"> <!-- Nav Links -->
      <ul class="navbar-nav">
      	  
	  <li class="nav-item">
	      
	       	      
	      

	      <a class="nav-link" href="index.php">Home</a>
	  </li>
	  
	  <li class="nav-item">
	      
	       	      
	      

	      <a class="nav-link" href="products.php">Products</a>
	  </li>
	  
	  <li class="nav-item">
	      
	       	      
	      
	      	 
	      

	      <a class="nav-link active" href="support.php">Support</a>
	  </li>
	  
	  <li class="nav-item">
	      
	       	      
	      

	      <a class="nav-link" href="listings.php">Directory</a>
	  </li>
	  
	  <li class="nav-item">
	      
	       	      
	      

	      <a class="nav-link" href="login.php">Staff</a>
	  </li>
	  
      </ul>
    </div> <!-- Links -->

      <ul class="navbar-nav ml-auto"> <!-- Supporting -->
          <li class="nav-item">
	      <a class="nav-link" href="supporting.php">supporting</a>
	  </li>
      </ul>
  </div> <!-- Container -->
</nav>
<!-- End of Menubar -->

      
      

<h1>XSS Forum</h1>

<p>Comments go here.  The Admin is <em>Literally a robot</em>,  He will check the Forum once a minute</p>

<?php
/* Include *Forum* form parsing Stuff */
include("scripts/forum.php");
?>



<?php
if (isset($_SESSION["userid"])){
echo("<img width=64px src='avatars/".$_SESSION["avatar"]."'/>");
echo("<h2>Posting as ".$_SESSION["userid"]."</h2>");
    if ($_SESSION["userid"] == "bishop@weyland.net"){
       echo "<div class='alert alert-success'>Session Jacked.  Have a Flag CUEH{I_Robot}</div>";
    }
    echo ('<form method="post">');
    echo ('<button type="submit" class="btn btn-primary" name="logoutbtn">Logout</button>');
    echo ('</form>');
  }
else
{
//Ugly Mangled code for displaying username
?>

<h2>Set Username</h2>
<p>You need to provide a username to post messages</p>

<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="username">Username address</label>
    <input type="email" class="form-control" id="username" name="fm-username" aria-describedby="usernameHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="fileupload">Upload Avatar</label>
    <input type="file" name="fileupload" id="fileupload">
  </div>

  <small id="usernameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  <button type="submit" class="btn btn-primary">Set Name</button>
</form>

<?php
//Close Mangeld Code
}
?>


<hr/>

<h2>Messages</h2>

<?php
/* And the Stuff to display messages */
include("scripts/forumdisplay.php");
?>




<?php

if (isset($_SESSION["userid"])){
?>
<h3>Post Message</h2>
<form method="post">
<div class="form-group">
    <label for="message">Message</label>
    <input type="text" class="form-control" id="message" name="message" placeholder="Enter Message">
    <button type="submit" class="btn btn-primary" name="submitmessage">Send Message</button>
</form>
<?php
//End Message display
}
else
{
echo ("<div class='alert alert-info'>Sign in to post messages</div>");
}
?>

  





      
          <footer class="page-footer font-small">
  <a name="footerAnc"></a>
  <!-- Splait into two sections -->
  <div class="container-fluid text-centre text-md-left">
    <!-- Row -->
    <div class="row">
      <!-- Col1 -->
      <div class="col-md-6 mt-md-0 mt-3">
	</br></br>
	<!-- TODO:  Double check I have the template version Everywhere -->
	 <form class="form-inline" method="post" action="#footerAnc">
           <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" aria-label="Search" id="footerSearch" name="footerSearch">
	    <div class="input-group-append">
              <button class="btn btn-sm btn-primary my-0" type="submit">Search</button>
            </div>
	 </form>
	<!-- <?php include("scripts/footerSearchDirty.php");?> -->
      </div> <!-- End Col -->
      <div class="col-md-6 mb-md-0 mt-3">
	<address>
	  <b>Contact: Operations</b></br>
	  Hadleys Hope</br>
	  LV-426</br>
	  a.simpson@weyland.net
	</address>
      </div> <!-- End Col -->
    </div> <!-- Row -->
  </div>  <!-- Footer-->
  <div class="footer-copyright text-center py-3 bg-dark text-green">
    <!-- Copyright --><p>© 2179 Copyright: <em>(w.bishop@weyland.net)</em></p>
  </div>
      
      
    </div> <!-- End Main Container -->
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery-3.3.1.slim.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
		    
  </body>
</html>