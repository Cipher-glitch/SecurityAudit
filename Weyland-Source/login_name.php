<?php
session_start();
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

    
  </head>
  
  
  <body>

    <div class="container"> <!-- Main Container -->
      <!-- Menubar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container"> <!-- Same Margins as Main Page -->
    <a class="navbar-brand" href="/"><span>Config Test</span></a>

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
	      
	       	      
	      

	      <a class="nav-link" href="secondpage.php">Second</a>
	  </li>
	  
	  <li class="nav-item">
	      
	       	      
	      

	      <a class="nav-link" href="login_name.php">Login Name</a>
	  </li>
	  
	  <li class="nav-item">
	      
	       	      
	      

	      <a class="nav-link" href="login_mail.php">Login Mail</a>
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

      
      
<h2>Login Form</h2>

<h2>Form with Username Login</h2>
<form method="get">
<div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="fm-username" aria-describedby="usernameHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="fm-pass" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
include("scripts/loginform.php");
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
              <button class="btn btn-sm btn-outline-white my-0" type="submit">Search</button>
            </div>
	 </form>
	<!-- <?php include("scripts/footerSearchDirty.php");?> -->
      </div> <!-- End Col -->
      <div class="col-md-6 mb-md-0 mt-3">
	<address>
	  <b>Contact: EC Building</b></br>
	  Gulson Road</br>
	  Coventry</br>
	  cumberland@saussage.net
	</address>
      </div> <!-- End Col -->
    </div> <!-- Row -->
  </div>  <!-- Footer-->
  <div class="footer-copyright text-center py-3 bg-dark text-light">
    <!-- Copyright --><p>© 2019 Copyright: <em>Antal (tono@sausage.net)</em></p>
  </div>
      
      
    </div> <!-- End Main Container -->
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery-3.3.1.slim.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
		    
  </body>
</html>