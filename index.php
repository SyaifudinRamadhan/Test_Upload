<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="index.php" method="post" enctype="multipart/form-data">
		<input type="file" name="data">
		<input type="submit" name="upload" value="upload" accept="*images">
	</form>
</body>
</html>

<?php 
	
	$targetDir = './uploaded_files/';

	if($_POST['upload']){
		$uploaded = move_uploaded_file($_FILES['data']['tmp_name'],  $targetDir . $_FILES['data']['name']);
		if($uploaded){
			echo "Upload berhasil <br/> ";
			echo "<a href='". $targetDir. $_FILES['data']['name'] ."'> ".$_FILES['data']['name']."</a>";
		}else{
			echo "Upload gagal";
		}
	}


 ?>