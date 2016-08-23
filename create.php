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
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sagar Pathak <span class="caret"></span></a>
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
			<form class="form-horizontal">
			  <fieldset>
			    <legend>Quiz Deck Information</legend>
			    <div class="form-group">
			      <label for="inputEmail" class="col-lg-2 control-label">Topic Category</label>
			      <div class="col-lg-10">
			        <div class="btn-group">
					  <a href="#" class="btn btn-default">Default</a>
					  <a aria-expanded="false" href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
					  <ul class="dropdown-menu">
					    <li><a href="#">Category One</a></li>
					    <li><a href="#">Category Two</a></li>
					    <li><a href="#">Cateogry Three</a></li>
					    <li class="divider"></li>
					    <li><input class="form-control" id="newCategory" placeholder="New Category" type="text"></li>
					  </ul>
					</div>
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="topictitle" class="col-lg-2 control-label">Topic Title</label>
			      <div class="col-lg-10">
			        <input class="form-control" id="topictitle" placeholder="title" type="text">
			      </div>
			    </div>
		        <div class="form-group">
			      <label for="textArea" class="col-lg-2 control-label">Description</label>
			      <div class="col-lg-10">
			        <textarea class="form-control" rows="3" id="textArea"></textarea>
			      </div>
			    </div>
			     <legend>Question & Options</legend>
			     <div class="form-group question">
				       <label for="topictitle" class="col-lg-2 control-label">Q. 1)</label>
				      <div class="col-lg-10">
				        <input class="form-control" id="topictitle" placeholder="Question 1" type="text">
				      </div>
			    </div>
			    <div class="form-group answer">
				        <label for="topictitle" class="col-lg-2 control-label">Ans. 1)</label>
				      <div class="col-lg-2 has-success">
				        <input class="form-control" id="topictitle" placeholder="Correct Answer" type="text">
				      </div>
				      <div class="col-lg-2 has-error">
				        <input class="form-control" id="topictitle" placeholder="Wrong Answer 1" type="text">
				      </div>
				      <div class="col-lg-2 has-error">
				        <input class="form-control" id="topictitle" placeholder="Wrong Answer 2" type="text">
				      </div>
				      <div class="col-lg-2 has-error">
				        <input class="form-control" id="topictitle" placeholder="Wrong Answer 3" type="text">
				      </div>
					   <div class="col-lg-2 has-error">
				        <input class="form-control" id="topictitle" placeholder="Wrong Answer 4" type="text">
				      </div>
			    </div>
			    <div class="form-group question">
				       <label for="topictitle" class="col-lg-2 control-label">Q. 2)</label>
				      <div class="col-lg-10">
				        <input class="form-control" id="topictitle" placeholder="Question 2" type="text">
				      </div>
			    </div>
			    <div class="form-group answer">
				        <label for="topictitle" class="col-lg-2 control-label">Ans. 2)</label>
				      <div class="col-lg-2 has-success">
				        <input class="form-control" id="topictitle" placeholder="Correct Answer" type="text">
				      </div>
				      <div class="col-lg-2 has-error">
				        <input class="form-control" id="topictitle" placeholder="Wrong Answer 1" type="text">
				      </div>
				      <div class="col-lg-2 has-error">
				        <input class="form-control" id="topictitle" placeholder="Wrong Answer 2" type="text">
				      </div>
				      <div class="col-lg-2 has-error">
				        <input class="form-control" id="topictitle" placeholder="Wrong Answer 3" type="text">
				      </div>
					   <div class="col-lg-2 has-error">
				        <input class="form-control" id="topictitle" placeholder="Wrong Answer 4" type="text">
				      </div>
			    </div>
			    <div class="form-group question">
				       <label for="topictitle" class="col-lg-2 control-label">Q. 3)</label>
				      <div class="col-lg-10">
				        <input class="form-control" id="topictitle" placeholder="Question 3" type="text">
				      </div>
			    </div>
			    <div class="form-group answer">
				        <label for="topictitle" class="col-lg-2 control-label">Ans. 3)</label>
				      <div class="col-lg-2 has-success">
				        <input class="form-control" id="topictitle" placeholder="Correct Answer" type="text">
				      </div>
				      <div class="col-lg-2 has-error">
				        <input class="form-control" id="topictitle" placeholder="Wrong Answer 1" type="text">
				      </div>
				      <div class="col-lg-2 has-error">
				        <input class="form-control" id="topictitle" placeholder="Wrong Answer 2" type="text">
				      </div>
				      <div class="col-lg-2 has-error">
				        <input class="form-control" id="topictitle" placeholder="Wrong Answer 3" type="text">
				      </div>
					   <div class="col-lg-2 has-error">
				        <input class="form-control" id="topictitle" placeholder="Wrong Answer 4" type="text">
				      </div>
			    </div>
			    <div class="form-group question">
				       <label for="topictitle" class="col-lg-2 control-label">Q. 4)</label>
				      <div class="col-lg-10">
				        <input class="form-control" id="topictitle" placeholder="Question 4" type="text">
				      </div>
			    </div>
			    <div class="form-group answer">
				        <label for="topictitle" class="col-lg-2 control-label">Ans. 4)</label>
				      <div class="col-lg-2 has-success">
				        <input class="form-control" id="topictitle" placeholder="Correct Answer" type="text">
				      </div>
				      <div class="col-lg-2 has-error">
				        <input class="form-control" id="topictitle" placeholder="Wrong Answer 1" type="text">
				      </div>
				      <div class="col-lg-2 has-error">
				        <input class="form-control" id="topictitle" placeholder="Wrong Answer 2" type="text">
				      </div>
				      <div class="col-lg-2 has-error">
				        <input class="form-control" id="topictitle" placeholder="Wrong Answer 3" type="text">
				      </div>
					   <div class="col-lg-2 has-error">
				        <input class="form-control" id="topictitle" placeholder="Wrong Answer 4" type="text">
				      </div>
			    </div>
			    <div class="form-group">
			    	<div class="col-lg-2"></div>
			    	<div class="col-lg-10">
					    <a href="#" class="btn btn-primary">Add More</a>
					    <a href="#" class="btn btn-success">Save</a>
				    </div>
			    </div>
			    </fieldset>
			 </form>
		</div>
	</body>
</html>