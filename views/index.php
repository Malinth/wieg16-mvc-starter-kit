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
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Music Festivals <span class="glyphicon glyphicon-music" aria-hidden="true"></span></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Tickets</a></li>
    </ul>
  </div>
</nav>

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

<div class="container">
	<!-- Example row of columns -->
	<div class="row">
        <div class="col-md-12">
				<h2>Festvials</h2>

            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Price</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($festivals as $festival): ?>
                    <tr>
                        <td><?= $festival['id'] ?></td>
                        <td><?= $festival['name'] ?></td>
                        <td><?= $festival['city'] ?></td>
                        <td><?= $festival['price'] ?></td>
                        <td>
                            <a href="/update?id=<?= $festival['id'] ?>" title="Update"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            <a href="/delete?id=<?= $festival['id'] ?>" title="Delete"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                        </td>
                    </tr> 
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
	</div>

<a href="/create" button type="button" class="btn btn-primary">Create new festival here</button></a>

<hr>


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
