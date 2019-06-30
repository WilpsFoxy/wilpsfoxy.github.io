<?php ?>
if(isset($_POST['submit'])){
	if(empty($_POST['photos'])){
		echo 'Не введен ID_PhotoID_(access_key)';
	}
	else {
		$query = file_get_contents("https://api.vk.com/method/photos.getById?photos=".$_POST['photos']."&extended=1");
		$result = json_decode($query,true);
	}
}
<form method="post" action="">
	<input type="text" name="photos"
	placeholder="ID_PhotoID_(access_key)">
	<input type="submit" name="submit"
	value="Узнать">
</form>