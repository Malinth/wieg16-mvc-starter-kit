<?php
/* @var $musicfestival */
require 'header.php';
?>


<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
	<div class="container">
		<h1>Music festivals</h1>
		<p>
         Update information about the festival
		</p>
	</div>
</div>

<div class="container">
       <div class="col-md-6">

         <h2>Update information about this music festvial <span class="glyphicon glyphicon-music" aria-hidden="true"></span></h2>
            <!-- Musikformulär använder sig av post metod och hämtar informationen som ska ändras, id, namn, stad, pris. id är osynlig-->
            <form action="/update-festival" method="post">
                <div class="form-group">
                  <input type="hidden" name="id" value="<?= $musicfestival['id']?>" class="form-control">
                    <label>Name:</label>
                    <input type="text" name="name" value="<?= $musicfestival['name']?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>City: </label>
                    <input type="text" name="city" value="<?= $musicfestival['city']?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Price: </label>
                    <input type="text" name="price" value="<?= $musicfestival['price']?>" class="form-control">
                </div>
                <button type="submit" class="btn btn-default">Update</button>
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
