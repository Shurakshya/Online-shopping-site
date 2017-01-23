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
  <link rel="stylesheet" type="text/css" media="all" href="/Stylesheets/webshop.css" />
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
      
		<?php
        getMenu();
		?>
		
        <li> <a class="searching" href="detailedSearch.php"> Detailed Search </a></li>
      </ul>
        <!-- this class contains search part and our webshop icon -->  
    <div class="jumbotron">
      <div id="customerSearch"></div>
      <div class="container text-right">
        <form class="navbar-form" role="search" action="searchResult.php" method="GET" enctype="multipart/form-data">
              <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search your item" name="srch-term" id="srch-term">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit" name="search">
                          <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
              </div>
            </form>
      </div>

        <div class="container text-left" style ="margin-left:0px">
          <a href= "index.php"><img src = "scubic.png" width=350px></a>
		  
        </div>
		 <div class="container text-center" >
         <?php
		 delAccount();
		  ?>
		  <?php
		delProduct();
		  ?>
		   <?php
		delitem();
		  ?>
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
           
    
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
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

        <!-- start of the carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox" style = "text-align:left; font-size:40px">
              <div class="item active">
              <img src="deal2.jpg" alt="Image" style="height:650px">
                 <div class="carousel-caption">
                      <h3 style ="font-family:impact;color:#99ffcc"> Happiness </h3>
                    <p style ="font-family:impact;color:#99ffcc">In Your Hands</p>
                 </div>      
                 </div>

                <div class="item">
                 <img src="deal.jpg" alt="Image"  style="height:650px" >
                    <div class="carousel-caption">
                        <h3 style ="font-family:impact;color:#99ffcc">Assurance</h3>
                        <p style ="font-family:impact;color:#99ffcc">With Best Deal</p>
                    </div>      
                </div>
				 <div class="item">
                 <img src="safety2.png" alt="Image" style="height:650px">
                    <div class="carousel-caption">
                        <h3 style ="font-family:impact;color:#99ffcc"> Strength </h3>
                         <p style ="font-family:impact;color:#99ffcc"> Of The World </p>
                    </div>      
                </div>
				 <div class="item">
                 <img src="speed.jpg" alt="Image" style="height:650px">
                    <div class="carousel-caption">
                     <h3 style ="font-family:impact;color:#99ffcc"> Success </h3>
                      <p style ="font-family:impact;color:#99ffcc"> In Your Life </p>
                       
                    </div>      
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- this div is for the top products -->
        <div class="row">
            
           <?php
		   
		   getTop();
		   ?>
		  
        </div>
         <div class="row">
           
          <?php
		   
		   getNew();
		   ?>
          
        </div>
        <?php
	include('footer.html');
	
	
	?>
  </div>
</body>
</html>					