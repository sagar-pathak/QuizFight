<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Online Quiz System</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<link rel="stylesheet" href="assets/css/bootstrap.css" media="screen">
		<link rel="stylesheet" href="assets/css/custom.css" media="screen">
		<link rel="stylesheet" href="assets/css/social-buttons.css" media="screen">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" media="screen">
		<script src="assets/js/jquery-1.10.2.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/holder.js"></script>
		<style>
		.col-xs-12{
			padding-left: 0px;
			padding-right: 0px;
		}
		</style>
	</head>
	<body>
	  	<nav class="navbar navbar-inverse">
		  <div class="container-fluid col-md-8 col-md-offset-2">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="index.php">Brand</a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="topics.php">Browse Topics<span class="sr-only">(current)</span></a></li>
		        <li><a href="create.php">Create</a></li>
		      </ul>
		      <form class="navbar-form navbar-left" role="search">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-default">Submit</button>
		      </form>
		      <ul class="nav navbar-nav navbar-right">
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sagar <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li class="divider"></li>
		            <li><a href="setting.php">Setting</a></li>
		            <li class="divider"></li>
		            <li><a href="login.php">Logout</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>

		<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
			<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
				<table class="table">
				  <tbody>
				    <tr class="active">
				      <td></td>
				      <td>Name</td>
				      <td><strong>Sagar Pathak</strong></td>
				      <td></td>
				    </tr>
				    <tr class="active">
				      <td></td>
				      <td>Username</td>
				      <td>sa9ar</td>
				      <td></td>
				    </tr>
				    <tr class="active">
				      <td></td>
				      <td>Email</td>
				      <td>surfer.sagar@gmail.com</td>
				      <td></td>
				    </tr>
				     <tr class="active">
				      <td></td>
				      <td>Password</td>
				      <td>**********</td>
				      <td></td>
				    </tr>
				    <tr class="active">
				      <td></td>
				      <td>Address</td>
				      <td>Anamnagar, Kathmandu, Nepal</td>
				      <td></td>
				    </tr>
				    <tr class="active">
				      <td></td>
				      <td>Connect with</td>
				      <td>
				      	<button class="fa fa-twitter"></button>
				      	<button class="fa fa-facebook"></button>
				      	<button class="fa fa-linkedin"></button>
				      	<button class="fa fa-pinterest"></button>
				      	<button class="fa fa-google-plus"></button>
				      	<button class="fa fa-skype"></button>
				      </td>
				      <td></td>
				    </tr>
				   </tbody>
				  </table>
			</div>
			 <div class="col-lg-3 col-md-4 hidden-xs hidden-sm pull-right">
				<img src="holder.js/230x230">
			</div>
		</div>
		<script src="assets/js/checklayout.js"></script>
	</body>
</html>