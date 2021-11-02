<style>
	*{
		margin:0;
		padding:0;
	}
</style>
<center>
<a href="add-card.php" style="padding:10px 40px;background:#0000ad;color:white;margin:10px auto;display:inline-block;font-family:arial;">Add Employee</a><br>
</center>
<?php 
session_start();
	
	if(isset($_SESSION["image_info"])){?>
		<img src="<?= $_SESSION["image_info"][0] ?>" style="border: 4px solid red;width:32%;">
		<img src="<?= $_SESSION["image_info"][1] ?>" style="border: 4px solid red;width:32%;">
		<img src="<?= $_SESSION["image_info"][2] ?>" style="border: 4px solid red;width:32%;">
	<?php 
	}
?>
