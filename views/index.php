<?php
require 'header.php';
?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
	<div class="container">
		<h1>Music festivals </h1>
		<p>A music festival is a festival oriented towards music that is sometimes presented with a theme such as musical genre, nationality, or locality of musicians, or holiday. They are commonly held outdoors, and are often inclusive of other attractions such as food and merchandise vending, performance art, and social activities. Many festivals are annual, or repeat at some other interval. Some, including many rock festivals, are held only once. Some festivals are organized as for-profit concerts and others are benefits for a specific cause. Another type of music festival is the educative type, organized annually in local communities, regionally, or nationally, for the benefit of amateur musicians of all ages and grades of achievement.
		</p>
	</div>
</div>

<div class="container">
	<!-- Example row of columns -->
	<div class="row">
        <div class="col-md-12">
				<h2>Festvials <span class="glyphicon glyphicon-music" aria-hidden="true"></span></h2>

            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>City</th>
                    <th>Price</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($festivals as $festival): ?>
                    <tr>
                        <td><?= $festival['name'] ?></td>
                        <td><?= $festival['city'] ?></td>
                        <td><?= $festival['price'] ?></td>
                        <td>
						<!--Id från update och delete hämtas inom php taggarna och skrivs ut medh hjälp av pil frågetecken likamed-->
                            <a href="/update?id=<?= $festival['id'] ?>" title="Update"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            <a href="/delete?id=<?= $festival['id'] ?>" title="Delete"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                        </td>
                    </tr> 
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
	</div>

<a href="/create" button type="button" class="btn btn-default">Create new festival here</button></a>

<hr>


<div class="container">
	<!-- Example row of columns -->
	<div class="row">
		<div class="col-md-4">
			<h2>Electronic music festivals</h2>
			<p>Some examples of electronic music festivals are: Circuit party, hip hop music festival, EDM festival, trance festival, rave, doof, teknival, technoparade, algorave, laptop battle </p>
		</div>
		<div class="col-md-4">
			<h2>Classic music festivals</h2>
			<p>And some examples of classic music festivals: Early music festival, experimental music festival, contemporary classical music festival, Christian music festival, opera festival, choral festival, Bach festival</p>
		</div>
		<div class="col-md-4">
			<h2>Rock music festivals</h2>
			<p>And there are also a lot of options for rock music festivals: Heavy metal festival, jam band festival, punk rock festival, goth festival</p>
		</div>

	</div>
</div>
</div>
	<hr>

<?php
require 'footer.php';
?>

