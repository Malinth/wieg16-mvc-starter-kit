<?php 
/* @var $musicfestivals */
require 'header.php';
?>

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
            <!-- Musikformulär använder sig av post -->
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
                <button type="submit" class="btn btn-default">Create</button> 
                <br>
                <br>
                <button class="btn btn-default"><a href="/">Back to homepage</a> </button>
            </form>
        </div>

    </div>

	<hr>

<?php
require 'footer.php';
?>
