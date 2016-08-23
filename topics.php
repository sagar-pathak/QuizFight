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
		      <a class="navbar-brand" href="index.php">QuizFight</a>
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
			<div class="row">
				<div class="col-md-6">
					Topic Title
				</div>
				<div class="col-md-6 text-right">
					View More
				</div>
			</div>
			<div class="row">
				<div class="visible-lg">
					<div class="col-lg-2">
						<img src="holder.js/130x130#topicIcon">
						<span>Title1</span>
					</div>
					<div class="col-lg-2">
						<img src="holder.js/130x130#topicIcon">
						<span>Title2</span>
					</div>
					<div class="col-lg-2">
						<img src="holder.js/130x130#topicIcon">
						<span>Title3</span>
					</div>
					<div class="col-lg-2">
						<img src="holder.js/130x130#topicIcon">
						<span>Title4</span>
					</div>
					<div class="col-lg-2">
						<img src="holder.js/130x130#topicIcon">
						<span>Title5</span>
					</div>
					<div class="col-lg-2">
						<img src="holder.js/130x130#topicIcon">
						<span>Title6</span>
					</div>
				</div>
				<div class="visible-md">
					<div class="col-md-2">
						<img src="holder.js/100x100#topicIcon">
						<span>Title1</span>
					</div>
					<div class="col-md-2">
						<img src="holder.js/100x100#topicIcon">
						<span>Title2</span>
					</div>
					<div class="col-md-2">
						<img src="holder.js/100x100#topicIcon">
						<span>Title3</span>
					</div>
					<div class="col-md-2">
						<img src="holder.js/100x100#topicIcon">
						<span>Title4</span>
					</div>
					<div class="col-md-2">
						<img src="holder.js/100x100#topicIcon">
						<span>Title5</span>
					</div>
					<div class="col-md-2">
						<img src="holder.js/100x100#topicIcon">
						<span>Title6</span>
					</div>
				</div>
				<div class="visible-sm">
					<div class="col-sm-2">
						<img src="holder.js/100x100#topicIcon">
						<span>Title1</span>
					</div>
					<div class="col-sm-2">
						<img src="holder.js/100x100#topicIcon">
						<span>Title2</span>
					</div>
					<div class="col-sm-2">
						<img src="holder.js/100x100#topicIcon">
						<span>Title3</span>
					</div>
					<div class="col-sm-2">
						<img src="holder.js/100x100#topicIcon">
						<span>Title4</span>
					</div>
					<div class="col-sm-2">
						<img src="holder.js/100x100#topicIcon">
						<span>Title5</span>
					</div>
					<div class="col-sm-2">
						<img src="holder.js/100x100#topicIcon">
						<span>Title6</span>
					</div>
				</div>
				<div class="visible-xs">
					<div class="col-xs-2">
						<img src="holder.js/50x50#topicIcon">
						<span>Title1</span>
					</div>
					<div class="col-xs-2">
						<img src="holder.js/50x50#topicIcon">
						<span>Title2</span>
					</div>
					<div class="col-xs-2">
						<img src="holder.js/50x50#topicIcon">
						<span>Title3</span>
					</div>
					<div class="col-xs-2">
						<img src="holder.js/50x50#topicIcon">
						<span>Title4</span>
					</div>
					<div class="col-xs-2">
						<img src="holder.js/50x50#topicIcon">
						<span>Title5</span>
					</div>
				</div>
			</div>
			<!-- 2nd row -->
				<div class="row">
					<div class="col-md-6">
						Topic Title
					</div>
					<div class="col-md-6 text-right">
						View More
					</div>
				</div>
				<div class="row">
					<div class="visible-lg">
					<div class="col-lg-2">
						<img src="holder.js/130x130#topicIcon">
						<span>Title1</span>
					</div>
					<div class="col-lg-2">
						<img src="holder.js/130x130#topicIcon">
						<span>Title2</span>
					</div>
					<div class="col-lg-2">
						<img src="holder.js/130x130#topicIcon">
						<span>Title3</span>
					</div>
					<div class="col-lg-2">
						<img src="holder.js/130x130#topicIcon">
						<span>Title4</span>
					</div>
					<div class="col-lg-2">
						<img src="holder.js/130x130#topicIcon">
						<span>Title5</span>
					</div>
					<div class="col-lg-2">
						<img src="holder.js/130x130#topicIcon">
						<span>Title6</span>
					</div>
				</div>
				<div class="visible-md">
					<div class="col-md-2">
						<img src="holder.js/100x100#topicIcon">
						<span>Title1</span>
					</div>
					<div class="col-md-2">
						<img src="holder.js/100x100#topicIcon">
						<span>Title2</span>
					</div>
					<div class="col-md-2">
						<img src="holder.js/100x100#topicIcon">
						<span>Title3</span>
					</div>
					<div class="col-md-2">
						<img src="holder.js/100x100#topicIcon">
						<span>Title4</span>
					</div>
					<div class="col-md-2">
						<img src="holder.js/100x100#topicIcon">
						<span>Title5</span>
					</div>
					<div class="col-md-2">
						<img src="holder.js/100x100#topicIcon">
						<span>Title6</span>
					</div>
				</div>
				<div class="visible-sm">
					<div class="col-sm-2">
						<img src="holder.js/100x100#topicIcon">
						<span>Title1</span>
					</div>
					<div class="col-sm-2">
						<img src="holder.js/100x100#topicIcon">
						<span>Title2</span>
					</div>
					<div class="col-sm-2">
						<img src="holder.js/100x100#topicIcon">
						<span>Title3</span>
					</div>
					<div class="col-sm-2">
						<img src="holder.js/100x100#topicIcon">
						<span>Title4</span>
					</div>
					<div class="col-sm-2">
						<img src="holder.js/100x100#topicIcon">
						<span>Title5</span>
					</div>
					<div class="col-sm-2">
						<img src="holder.js/100x100#topicIcon">
						<span>Title6</span>
					</div>
				</div>
				<div class="visible-xs">
					<div class="col-xs-2">
						<img src="holder.js/50x50#topicIcon">
						<span>Title1</span>
					</div>
					<div class="col-xs-2">
						<img src="holder.js/50x50#topicIcon">
						<span>Title2</span>
					</div>
					<div class="col-xs-2">
						<img src="holder.js/50x50#topicIcon">
						<span>Title3</span>
					</div>
					<div class="col-xs-2">
						<img src="holder.js/50x50#topicIcon">
						<span>Title4</span>
					</div>
					<div class="col-xs-2">
						<img src="holder.js/50x50#topicIcon">
						<span>Title5</span>
					</div>
				</div>
			</div>
		</div>

		<script src="assets/js/checklayout.js"></script>
	</body>
</html>