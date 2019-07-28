<?php 



require_once "Controller/PostUser.php";


$teste = new PostUser();


 ?>


<?php foreach ($teste->exibePost() as $value):  ?>

	<p><?=$teste->exibeUser()['name']?> - <?=$teste->exibeUser()['email']?></p>

	<p><strong>Titulo: </strong><?=$value['title'] ?></p>
	<p><strong>Texto: </strong><?=$value['body'] ?></p>
	<br>
	<hr>

<?php endforeach ?>