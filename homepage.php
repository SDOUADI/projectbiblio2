<!DOCTYPE html>
<html>
  <head>
      
    <meta charset="utf-8">
    <title>intense</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/> 
    <link rel="stylesheet" href="css/bootstrap.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
      <!-- <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link href="css/owl.carousel.css" rel="stylesheet">-->
      <link href="css/user.css" rel="stylesheet"> 
      
        
  </head>
  <body>

     <div>
      <?php
      include "template/navigation.php";
      
      ?>
      </div>
      
      <br/>
      <div class="container-fluid contentlivre">
         <?php
          require_once 'includes/functions.php';
			@$page=securisation($_GET["page"]);
          
			if($page=="" || $page=="content"){
			   include 'template/content.php';
			}
			else if($page=="livre"){
			  include 'template/livre.php';
			}
          
          ?>  
      </div>
      
      
      <?php
          
           include "template/footer.php";
      
       ?>
   
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.color-2.1.2.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <script src="js/homepage.js"></script>
            
        <script src="js/site.js"></script>
            
            
    
  </body>
</html>