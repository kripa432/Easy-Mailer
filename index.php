<?php
if(isset($_POST['submit'])){
	echo "ok";
}


?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">	
			<div class="col-md-12 bg-primary">
				<h1 class="text-center">Easy Mailer</h1>		
			</div>
		</div>




		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form class="form" method="post" action="#">
					<div class="form-group">
					<label for="subject">Subject</label>
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Jane Doe">
					</div>
					<div class="form-group">
						<label for="from">From</label>
						<input type="email" class="form-control" id="from" name="from" placeholder="jane.doe@example.com">
					</div>
					<textarea class="form-control" name="message" rows="3">
						
					</textarea>
					<br>
					<button type="submit" name="submit"  class="btn btn-primary">Send</button>
				</form>
			</div>
		</div>


		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="table">
					<table class="table table-striped table-hover">
						<thead>
							<th>Name</th>
							<th>email</th>
							<th>Year</th>
						</thead>
						<tbody>
						<?php 
							include "connectdb.php";
							$sql="select distinct(email) from email";
							$result=mysqli_query($con,$sql);
							foreach ($row=mysqli_fetch_array($result)) {
							
							

						?>
							<tr>
								<td><?php echo $row["name"] ?></td>
								<td><?php echo $row["email"] ?></td>
								<td><?php echo $row["year"] ?></td>
							</tr>
						<?php
							}
						?>
						</tbody>	

					</table>
				</div>

				

			</div>
		</div>
	</div>

</body>
</html>