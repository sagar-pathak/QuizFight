<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Online Quiz System</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<link rel="stylesheet" href="assets/css/bootstrap.css" media="screen">
		<script src="assets/js/jquery-1.10.2.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/holder.js"></script>
		<style>
			.options-border {
			   border: solid white 4px;
			}
			.navbar-collapse {
			    padding-right: 0px;
			    padding-left:0px;
			}
			.jumbotron{
				padding-left:20px;
				padding-right:20px;
				margin-left: -10px;
				margin-right: -10px;
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

		<div class="col-md-8 col-md-offset-2">
			<div class="col-lg-2 col-md-3 text-right hidden-xs hidden-sm">
				<img src="holder.js/100x100#loggedinUser">
				<div class="clear-fix"></div>
				<span><strong>Sagar Pathak</strong></span>
			</div>
			<div class="col-lg-8 col-md-6">
				<div class="row hidden-md hidden-lg">
					<div class="col-sm-6 pull-left">
						<img src="holder.js/100x100#loggedinUser">
						<div class="clear-fix"></div>
						<span><strong>Sagar Pathak</strong></span>
					</div>
					<div class="col-sm-6 pull-right text-right">
						<img src="holder.js/100x100#QuizUser">
						<div class="clear-fix"></div>
						<span><strong>Quiz Bot</strong></span>
					</div>
				</div>
				<div class="row">
					<div class="jumbotron text-center">
					  <h1>Question 1.</h1>
					  <p>Give the alternative name for a Mountain Ash tree.</p>
					</div>
				</div>
				<div class="row">
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
			<div class="col-lg-2 col-md-3 text-left hidden-xs hidden-sm">
				<img src="holder.js/100x100#loggedinUser">
				<div class="clear-fix"></div>
				<span><strong>Quiz Bot</strong></span>
			</div>
		</div>
		<script src="assets/js/checklayout.js"></script>
	</body>
</html>