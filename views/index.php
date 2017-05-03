<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>Mitt MVC-projekt</title>

	<!-- Bootstrap core CSS -->
	<link href="/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
			        aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Music festivals</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<form class="navbar-form navbar-right">
				<div class="form-group">
					<input type="text" placeholder="Email" class="form-control">
				</div>
				<div class="form-group">
					<input type="password" placeholder="Password" class="form-control">
				</div>
				<button type="submit" class="btn btn-success">Sign in</button>
			</form>
		</div><!--/.navbar-collapse -->
	</div>
</nav>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
	<div class="container">
		<h1>Music festivals</h1>
		<p>A music festival is a festival oriented towards music that is sometimes presented with a theme such as musical genre, nationality, or locality of musicians, or holiday. They are commonly held outdoors, and are often inclusive of other attractions such as food and merchandise vending, performance art, and social activities. Many festivals are annual, or repeat at some other interval. Some, including many rock festivals, are held only once. Some festivals are organized as for-profit concerts and others are benefits for a specific cause. Another type of music festival is the educative type, organized annually in local communities, regionally, or nationally, for the benefit of amateur musicians of all ages and grades of achievement.
		</p>
		<p><a class="btn btn-primary btn-lg" href="#" role="button">More information &raquo;</a></p>
	</div>
</div>

<table class="table table-bordered">
  <thead class="thead-inverse">
    <tr>
      <th>Festival</th>
      <th>City</th>
      <th>Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
<button type="button" class="btn btn-info">Create new</button>
<button type="button" class="btn btn-info">Update</button>
<button type="button" class="btn btn-info">Delete</button>

<div class="container">
	<!-- Example row of columns -->
	<div class="row">
		<div class="col-md-4">
			<h2>Electronic music festivals</h2>
			<p>Some examples of electronic music festivals are: Circuit party, hip hop music festival, EDM festival, trance festival, rave, doof, teknival, technoparade, algorave, laptop battle </p>
			<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
		</div>
		<div class="col-md-4">
			<h2>Classic music festivals</h2>
			<p>And some examples of classic music festivals: Early music festival, experimental music festival, contemporary classical music festival, Christian music festival, opera festival, choral festival, Bach festival</p>
			<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
		</div>
		<div class="col-md-4">
			<h2>Rock music festivals</h2>
			<p>And there are also a lot of options for rock music festivals: Heavy metal festival, jam band festival, punk rock festival, goth festival</p>
			<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
		</div>
	</div>

	<hr>

	<footer>
		<p>&copy; Copyright 2017 Music festivals </p>
	</footer>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/vendor/jquery-3.2.1.min.js"></script>
<script src="/js/vendor/bootstrap.min.js"></script>
</body>
</html>
