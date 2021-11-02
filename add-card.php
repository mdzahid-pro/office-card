

<!DOCTYPE html>
<html lang='eng-us'>
	<head>
		<meta charset="UTF-8">
		<title>Make Employee ID Card</title>
		<style>
			*{
				margin:0;
				padding:0;
			}
			
			.form-group{
				margin-top:10px;
			}
		</style>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	</head>
	<body>
		<div class="row">
			<div class="m-auto col-md-5">
				<form class="py-4" action="prosess.php" method="POST" enctype="multipart/form-data">    
					<h2 class="text-center">Make a Employee Card</h2>
					<div class="form-group">	
						<label>Employee Name</label>
						<input class="form-control" name="emp-name" type="text" placeholder="Enter Employee Name.."> 
					</div>
					<div class="form-group">	
						<label>Employee Role</label>
						<input class="form-control" name="emp-title" type="text" placeholder="Enter POST Name..">
					</div>   
					<div class="form-group">	
						<label>Employee Picture</label>
						<input class="form-control" name="emp-image" type="file"><small>Enter Only jpg or jpeg </small>  
					</div>     
					<div class="form-group">	
						<label>Employee Email</label>
						<input class="form-control" name="emp-email" type="text" placeholder="Enter Employee Email..">
					</div>
					<div class="form-group">	
						<label>Employee Contact Number</label>
						<input class="form-control" name="emp-number" type="text" placeholder="Enter POST Number..">
					</div>   
					<div class="form-group">
						<label>Employee Address</label>	
						<input class="form-control" name="emp-addr" type="text" placeholder="Enter Employee Address..">
					</div>
					<div class="form-group">	
						<input class="btn btn-primary" name="emp-post-btn" type="submit" value="SUBMIT">
					</div>
				</form>
			</div>
		</div>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
	</body>
</html>
