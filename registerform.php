<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" media="all" href="test.css" />
  <link rel="stylesheet" type="text/css" media="all" href="webshop.css" />
 <script>
$(document).ready(function(){

  $(".searching").bind('click', function(e){
    var url =  $(this).attr('href');
    $('#customerSearch').load(url);
    e.preventDefault(); // stop the browser from following the link
});
  }); 

  </script>
 <script type="text/javascript">
	
	function test(){
		
	 var ok = true ;

	 if((document.register.password.value).length <= 6){
		 
		 document.getElementById("errpass").innerHTML = "For Safety , please put the password of atleast 6 chars";
		 ok = false;
		 
	 }
	 else{
		 
		 document.getElementById("errpass").innerHTML = "";
		 ok = true;
	 }
	 
	 
	if(document.register.cpassword.value != document.register.password.value){
			
			document.getElementById("errcpass").innerHTML = " password didnot match";
			
			ok = false;
	}
		
		
	else{
		
		document.getElementById("errcpass").innerHTML = "";
		
		
	}
	
	return ok;
		
	}
 
	
 </script>
 
 
</head>
<body>

<?php


include('testSession.php');
include('functions.php');


?>



<div class="container-fluid">

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


	

    <form method="post" action="registercode.php" name = "register"  onsubmit = "return test()" class="form-horizontal" role="form" enctype="multipart/form-data">
		<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		<h2><b> PERSONAL DETAILS</b></h2>
		</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="name" required> *Name</label>
			<div class="col-sm-5">
			<input type="name" name="name" class="form-control" id="name" required>
			</div>
		</div>
		
		
		<div class="form-group">
			<label class="control-label col-sm-2 " for="email" > *Email address</label>
			<div class="col-sm-5">
			<input type="email" name="email" class="form-control" id="email" required>
			</div>
		</div>
		
	
		
		<div class="form-group">
			<label class="control-label col-sm-2 " for="pass" >*Password</label>
			<div class="col-sm-5">
			<input type="password" name="password" class="form-control" id="pass" required><p  style = "color:red"><i id = "errpass"></i></p>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="cpass" >*Confirm Password</label>
			<div class="col-sm-5">
			<input type="password" name="cpassword" class="form-control" id="cpass" required><p  style = "color:red" ><i id = "errcpass"></i></p>
			</div>
		</div>
		
		<hr/>
		
		<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		<h2><b> SHIPPING DETAILS</b></h2>
		</div>
		</div>
		
	
		
		<div class="form-group">
			<label class="control-label col-sm-2"for="pno" > *Phone Number</label>
			<div class="col-sm-5">
			<input type="text" name="pnum" class="form-control" id="pho" required>
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2"for="aln1" > *Delivery Address </label>
			<div class="col-sm-5">
			<input type="text" name="deliveryaddress" class="form-control" id="aln1" required >
			</div>
		</div>
		
		
		
		<div class="form-group">
			<label class="control-label col-sm-2 "for="cntry" > country</label>
			
			<div class="col-sm-5 " >
			<select class="form-control" name="country"id="cntry" required>
				<option>Select</option>
				<option>Finland</option>
				<option>Nepal</option>
				<option>US</option>
				<option>Germany</option>
				<option>Norway</option>
				<option>Uk</option>
				<option>Canada</option>
				
			
			</select>			
			</div>
		</div>
		
		
		
		<div class="form-group">
			<label class="control-label col-sm-2 "for="img"> Image</label>
			<div class="col-sm-5">
			<input type="file" name="image" class="form-control" id="zpc" >
			</div>
		</div>
		
			<div class ="form-group">
		<label class="control-label col-sm-2"for="desc" > Description</label>
		<div class="col-sm-5">
		<textarea class="form-control" name="desc"  rows="4" id="desc" ></textarea>
		</div>
		</div>
		
		<hr/>
		<div class="form-group">
		<div class="col-xs-offset-2 col-sm-10">
		<button type="submit" class="btn btn-default" id="create">CREATE MY ACCOUNT</button>
		<br/><br/>
		</div>
		</div>
		
	
	</form>
	<?php
	include('footer.html');
	
	
	?>
</div><br/>
 



</body>
</html>


