<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Online Quiz System</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<link rel="stylesheet" href="assets/css/bootstrap.css" media="screen">
		<script src="assets/js/jquery-1.10.2.min.js"></script>
		<script src="assets/js/bootstrap/dist/js/bootstrap.min.js"></script>
		<style>
			.options-border {
			   border: solid white 4px;
			}
			.navbar-collapse {
			    padding-right: 0px;
			    padding-left:0px;
			}
		</style>
	</head>
  <body>
  	<nav class="navbar navbar-inverse row">
	  <div class="container-fluid col-md-8 col-md-offset-2">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Brand</a>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
	        <li><a href="#">Link</a></li>
	      </ul>
	      <form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	            <li class="divider"></li>
	            <li><a href="#">One more separated link</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<div class="row">
		<div class="jumbotron col-md-8 col-md-offset-2">
		  <h1>Question 1.</h1>
		  <p>Give the alternative name for a Mountain Ash tree.</p>
		</div>
		<div class="col-md-8 col-xs-12 col-md-offset-2">
			<div class="row">
				<div class="options-border col-md-6 col-xs-6 btn btn-primary btn-lg">MA Tree</div>
				<div class="options-border col-md-6 col-xs-6 btn btn-primary btn-lg">Mounty</div>
			</div>
			<div class="row">
				<div class="options-border col-md-6 col-xs-6 btn btn-primary btn-lg">Rowan</div>
				<div class="options-border col-md-6 col-xs-6 btn btn-primary btn-lg">BigFire</div>
			</div>
		</div>
	</div>


	</body>
</html>