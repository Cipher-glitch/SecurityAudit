


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
	      
	       	      
	      

	      <a class="nav-link" href="support.php">Support</a>
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

      
      

<div class="alert alert-warning">
<h1>Page is out of scope, and contains various helpers / scripts </h1>
</div>

<h2>Pen Test Monkey Shell</h2>
<a href="utils/php-reverse-shell.tar.gz">Php Revese Shell Script</a>




<h2>Reset Broken Storage</h2>

<form method="post">
  <div class="form-group">
    <button type="submit" name="clear_msg" class="btn btn-primary">Clear Messages</button>
  </div>
</form>


<?php
  //Clear Old Messages
  $myFile = "/tmp/messages";
  unlink($myFile) or die("Couldn't delete file");
  //if (isset($_POST["clear_msg"])){
  //    $messages = array();
    //     array("marty@dmcfans.net", "Testing!!! Hello World"),
    //     array("marty@dmcfans.net", "<b>HTML test</b>")
    // );
  //
  //   file_put_contents("/tmp/messages", serialize($messages));
//	 }
?>


<h2>TABLES and COLUMNS tables</h2>

Quick ref for mysql TABLES and COLUMNS

<h3>TABLES</h3>

<table class="table table-light" summary="This table describes the INFORMATION_SCHEMA TABLES table." border="1">
  <colgroup><col><col><col></colgroup><thead><tr><th scope="col"><code class="literal">INFORMATION_SCHEMA</code> Name</th><th scope="col"><a class="link" href="show.html" title="14.7.5&nbsp;SHOW Syntax"><code class="literal">SHOW</code></a> Name</th><th scope="col">Remarks</th></tr></thead><tbody><tr><td scope="row"><code class="literal">TABLE_CATALOG</code></td><td>&nbsp;</td><td><code class="literal">def</code></td></tr><tr><td scope="row"><code class="literal">TABLE_SCHEMA</code></td><td><code class="literal">Table_</code>...</td><td>&nbsp;</td></tr><tr><td scope="row"><code class="literal">TABLE_NAME</code></td><td><code class="literal">Table_</code>...</td><td>&nbsp;</td></tr><tr><td scope="row"><code class="literal">TABLE_TYPE</code></td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td scope="row"><code class="literal">ENGINE</code></td><td><code class="literal">Engine</code></td><td>MySQL extension</td></tr><tr><td scope="row"><code class="literal">VERSION</code></td><td><code class="literal">Version</code></td><td>The version number of the table's <code class="filename">.frm</code> file, MySQL extension</td></tr><tr><td scope="row"><code class="literal">ROW_FORMAT</code></td><td><code class="literal">Row_format</code></td><td>MySQL extension</td></tr><tr><td scope="row"><code class="literal">TABLE_ROWS</code></td><td><code class="literal">Rows</code></td><td>MySQL extension</td></tr><tr><td scope="row"><code class="literal">AVG_ROW_LENGTH</code></td><td><code class="literal">Avg_row_length</code></td><td>MySQL extension</td></tr><tr><td scope="row"><code class="literal">DATA_LENGTH</code></td><td><code class="literal">Data_length</code></td><td>MySQL extension</td></tr><tr><td scope="row"><code class="literal">MAX_DATA_LENGTH</code></td><td><code class="literal">Max_data_length</code></td><td>MySQL extension</td></tr><tr><td scope="row"><code class="literal">INDEX_LENGTH</code></td><td><code class="literal">Index_length</code></td><td>MySQL extension</td></tr><tr><td scope="row"><code class="literal">DATA_FREE</code></td><td><code class="literal">Data_free</code></td><td>MySQL extension</td></tr><tr><td scope="row"><code class="literal">AUTO_INCREMENT</code></td><td><code class="literal">Auto_increment</code></td><td>MySQL extension</td></tr><tr><td scope="row"><code class="literal">CREATE_TIME</code></td><td><code class="literal">Create_time</code></td><td>MySQL extension</td></tr><tr><td scope="row"><code class="literal">UPDATE_TIME</code></td><td><code class="literal">Update_time</code></td><td>MySQL extension</td></tr><tr><td scope="row"><code class="literal">CHECK_TIME</code></td><td><code class="literal">Check_time</code></td><td>MySQL extension</td></tr><tr><td scope="row"><code class="literal">TABLE_COLLATION</code></td><td><code class="literal">Collation</code></td><td>MySQL extension</td></tr><tr><td scope="row"><code class="literal">CHECKSUM</code></td><td><code class="literal">Checksum</code></td><td>MySQL extension</td></tr><tr><td scope="row"><code class="literal">CREATE_OPTIONS</code></td><td><code class="literal">Create_options</code></td><td>MySQL extension</td></tr><tr><td scope="row"><code class="literal">TABLE_COMMENT</code></td><td><code class="literal">Comment</code></td><td>MySQL extension</td></tr></tbody></table>

      

      <h3>COLUMNS</h3>

      <table class="table table-light" border="1">
	<colgroup><col><col><col></colgroup><thead><tr><th scope="col"><code class="literal">INFORMATION_SCHEMA</code> Name</th><th scope="col"><a class="link" href="show.html" title="14.7.5&nbsp;SHOW Syntax"><code class="literal">SHOW</code></a> Name</th><th scope="col">Remarks</th></tr></thead><tbody><tr><td scope="row"><code class="literal">TABLE_CATALOG</code></td><td>&nbsp;</td><td><code class="literal">def</code></td></tr><tr><td scope="row"><code class="literal">TABLE_SCHEMA</code></td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td scope="row"><code class="literal">TABLE_NAME</code></td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td scope="row"><code class="literal">COLUMN_NAME</code></td><td><code class="literal">Field</code></td><td>&nbsp;</td></tr><tr><td scope="row"><code class="literal">ORDINAL_POSITION</code></td><td>&nbsp;</td><td>see notes</td></tr><tr><td scope="row"><code class="literal">COLUMN_DEFAULT</code></td><td><code class="literal">Default</code></td><td>&nbsp;</td></tr><tr><td scope="row"><code class="literal">IS_NULLABLE</code></td><td><code class="literal">Null</code></td><td>&nbsp;</td></tr><tr><td scope="row"><code class="literal">DATA_TYPE</code></td><td><code class="literal">Type</code></td><td>&nbsp;</td></tr><tr><td scope="row"><code class="literal">CHARACTER_MAXIMUM_LENGTH</code></td><td><code class="literal">Type</code></td><td>&nbsp;</td></tr><tr><td scope="row"><code class="literal">CHARACTER_OCTET_LENGTH</code></td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td scope="row"><code class="literal">NUMERIC_PRECISION</code></td><td><code class="literal">Type</code></td><td>&nbsp;</td></tr><tr><td scope="row"><code class="literal">NUMERIC_SCALE</code></td><td><code class="literal">Type</code></td><td>&nbsp;</td></tr><tr><td scope="row"><code class="literal">DATETIME_PRECISION</code></td><td><code class="literal">Type</code></td><td>&nbsp;</td></tr><tr><td scope="row"><code class="literal">CHARACTER_SET_NAME</code></td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td scope="row"><code class="literal">COLLATION_NAME</code></td><td><code class="literal">Collation</code></td><td>&nbsp;</td></tr><tr><td scope="row"><code class="literal">COLUMN_TYPE</code></td><td><code class="literal">Type</code></td><td>MySQL extension</td></tr><tr><td scope="row"><code class="literal">COLUMN_KEY</code></td><td><code class="literal">Key</code></td><td>MySQL extension</td></tr><tr><td scope="row"><code class="literal">EXTRA</code></td><td><code class="literal">Extra</code></td><td>MySQL extension</td></tr><tr><td scope="row"><code class="literal">PRIVILEGES</code></td><td><code class="literal">Privileges</code></td><td>MySQL extension</td></tr><tr><td scope="row"><code class="literal">COLUMN_COMMENT</code></td><td><code class="literal">Comment</code></td><td>MySQL extension</td></tr><tr><td scope="row"><code class="literal">GENERATION_EXPRESSION</code></td><td>&nbsp;</td><td>MySQL extension</td></tr></tbody></table>




      
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