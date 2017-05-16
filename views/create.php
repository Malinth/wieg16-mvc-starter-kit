<?php 
/* @var $musicfestivals */
?>


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
    <link rel="stylesheet/less" type="text/css" href="/css/styles.less" />

    <script src="/js/less.js" type="text/javascript"></script>
</head>

<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Music Festivals </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
    </ul>
  </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
	<div class="container">
		<h1>Music festivals</h1>
		<p>Here you can create a new festival to the list
		</p>
	</div>
</div>

<div class="container">
       <div class="col-md-6">

         <h2>Create new music festvial <span class="glyphicon glyphicon-music" aria-hidden="true"></span></h2>
            <!-- Musikformulär -->
            <form action="/create-festival" method="post">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>City: </label>
                    <input type="text" name="city" class="form-control">
                </div>
                <div class="form-group">
                    <label>Price: </label>
                    <input type="text" name="price" class="form-control">
                </div>
                <button type="submit" class="btn btn-default">Create</button> <br>
                <button class="btn btn-default"><a href="/">Back to homepage</a> </button>
            </form>
        </div>

    </div>

	<hr>

	<footer><p>&copy; Copyright 2017 Music festivals </p></footer>
</div> <!-- /container -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/vendor/jquery-3.2.1.min.js"></script>
<script src="/js/vendor/bootstrap.min.js"></script>
</body></html>