<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Shopping</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" media="all" href="webshop.css" />
  <script
    src="http://maps.googleapis.com/maps/api/js">
</script>
<script>
$(document).ready(function(){

  $(".searching").bind('click', function(e){
    var url =  $(this).attr('href');
    $('#customerSearch').load(url);
    e.preventDefault(); // stop the browser from following the link
});
  }); 

  </script>
</head>

<body>
    <?php
    include('functions.php');


    ?>
  <div class="container-fluid" >
        <!-- The top right side of the page for signing in and going to my account --> 
      <ul class="nav navbar-nav navbar-right">
        <li> <a href="profile.php"> My account </a></li>
        <li> <a href="register.php">Sign in || sign up </a></li>
        <li> <a class="searching" href="detailedSearch.php"> Detailed Search </a></li>
      </ul>
        <!-- this class contains search part and our webshop icon -->  
    <div class="jumbotron">
<div id="customerSearch"></div>
      <div class="container text-right">
        <form class="navbar-form" role="search" action="searchResult.php" method="GET">
              <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search your Product" name="srch-term" id="srch-term">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit" name="search">
                          <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
              </div>
            </form>
      </div>

        <div class="container text-left">
          <h3>Online Store</h3>      
            <p>Mission, Vission & Values </p>
        </div>
    </div>

        <!-- navbar to indicate the category, product i.e. dropdown menus -->
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
             <a class="navbar-brand" href="#">Logo</a>
    
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="webshop.php">Home</a></li>
				 <li><a href="nextPage.php"  style="left-margin:30px">All items</a></li>
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Companies<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                       <?php

getcompany();

                       ?>
                    </ul>
                </li>
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Type</a>
                    <ul class="dropdown-menu">
                         <?php

getCat();

                       ?>                   
					   </ul>
                </li>

                
           </ul>
      </div>
    </nav>



        <!-- this div is for the top products -->
        <div class="row">
          

         
            
        </div>
        
        <div class ="footer">
            <div class="well">
                <h4> ABOUT </h4>
                <p> �Sukky cars Ltd is company located in Helsinki. We are selling a lot of old and used
                cars. We make our best effort that you are happy with your car. For excellent deals please contact our CEO Mr. Huttunen at 030-12334567.� 
                </p> 
            </div>  
        </div>
  </div>
</body>
</html>