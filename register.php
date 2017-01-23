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
   <link rel="stylesheet" type="text/css" media="all" href="register.css" />
 
</head>
<body>

<div class="container-fluid">

	

    <form class="form-horizontal" role="form">
		<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		<h2><b> PERSONAL DETAILS</b></h2>
		</div>
		</div>
		
		
		<div class="form-group">
			<label class="control-label col-sm-2 col-lg-2 col-md-2 col-xs-2" for="email"> *Email address</label>
			<div class="col-sm-3 col-md-3 col-lg-3 col-xs-4">
			<input type="email" name="email" class="form-control" id="email" >
			</div>
		</div>
	
		
		<div class="form-group">
			<label class="control-label col-sm-2 col-md-2 col-lg-2 col-xs-2 " for="pass">*Password</label>
			<div class="col-sm-3 col-md-3 col-xs-4">
			<input type="password" name="password" class="form-control" id="pass">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2 col-md-2 col-lg-2 col-xs-2 " for="cpass">*Confirm Password</label>
			<div class="col-sm-3 col-md-3 col-xs-4">
			<input type="password" name="password" class="form-control" id="cpass">
			</div>
		</div>
		
		<hr/>
		
		<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		<h2><b> SHIPPING DETAILS</b></h2>
		</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2 col-lg-2 col-md-2 col-xs-2"for="fnm"> *First Name</label>
			<div class="col-sm-3 col-md-3 col-lg-3 col-xs-4">
			<input type="text" name="fname" class="form-control" id="fnm" >
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2 col-lg-2 col-md-2 col-xs-2"for="lnm"> *Last Name</label>
			<div class="col-sm-3 col-md-3 col-lg-3 col-xs-4">
			<input type="text" name="lname" class="form-control" id="lnm" >
			</div>
		</div>
		
			<div class="form-group">
			<label class="control-label col-sm-2 col-lg-2 col-md-2 col-xs-2"for="cnm">Company Name</label>
			<div class="col-sm-3 col-md-3 col-lg-3 col-xs-4">
			<input type="text" name="cname" class="form-control" id="cnm" >
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2 col-lg-2 col-md-2 col-xs-2"for="pno"> *Phone Number</label>
			<div class="col-sm-3 col-md-3 col-lg-3 col-xs-4">
			<input type="text" name="pnum" class="form-control" id="pho" >
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2 col-lg-2 col-md-2 col-xs-2"for="aln1"> *Address Line 1</label>
			<div class="col-sm-3 col-md-3 col-lg-3 col-xs-4">
			<input type="text" name="addline1" class="form-control" id="aln1" >
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2 col-lg-2 col-md-2 col-xs-2"for="aln2"> Address Line 2</label>
			<div class="col-sm-3 col-md-3 col-lg-3 col-xs-4">
			<input type="text" name="addline2" class="form-control" id="aln2" >
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2 col-lg-2 col-md-2 col-xs-2"for="sc"> *Suburb/City</label>
			<div class="col-sm-3 col-md-3 col-lg-3 col-xs-4">
			<input type="text" name="scity" class="form-control" id="sc" >
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2 col-lg-2 col-md-2 col-xs-2"for="des"> *Country</label>
			
			<div class="col-xs-4 col-sw-3 col-lg-3" >
			<select class="form-control" id="cntry">
				<option>Select</option>
				<option>Nepal</option>
				<option>Finland</option>
			
			</select>			
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2 col-lg-2 col-md-2 col-xs-2"for="sp"> *State/Province</label>
			<div class="col-sm-3 col-md-3 col-lg-3 col-xs-4">
			<input type="text" name="sprovince" class="form-control" id="sp" >
			</div>
		</div>
		
		<div class="form-group ">
			<label class="control-label col-sm-2 col-lg-2 col-md-2 col-xs-2"for="zpc"> *Zip/Postcode</label>
			<div class="col-sm-3 col-md-3 col-lg-3 col-xs-4">
			<input type="text" name="zpostcode" class="form-control" id="zpc" >
			</div>
		</div>
		<hr/>
		<div class="form-group">
		<div class="col-xs-offset-2 col-sm-10">
		<button type="submit" class="btn btn-default" id="create">CREATE MY ACCOUNT</button>
		
		</div>
		</div>
	
	</form>
	<form class="form-horizontal" role="form">
		<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		<h2> SIGN IN</h2>
		</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2 col-lg-2 col-md-2 col-xs-2"for="email"> Email address:</label>
			<div class="col-sm-3 col-md-3 col-lg-3 col-xs-4">
			<input type="email" class="form-control" id="email" >
			</div>
		</div>
	
		
		<div class="form-group">
			<label class="control-label col-sm-2 col-md-2 col-lg-2 col-xs-2 " for="psw">Password:</label>
			<div class="col-sm-3 col-md-3 col-xs-4">
			<input type="password" class="form-control" id="pass">
			</div>
		</div>
		<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default" id="submit">Submit</button>
		</div>
		</div>
		
		
	</form>
</div>


</body>
</html>



