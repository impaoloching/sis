<!DOCTYPE html>
<html>
	<head>
		<title>Student Resgistration</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" />
	</head>
	<body>
		<div class="container">
			<h1 class="text-center">Student Registration</h1>
			<div class="col-lg-offset-3 col-lg-6">
				<div class="well">
					<form method="GET" action="welcome.php"
						class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-lg-4">
								Student ID
							</label>
							<div class="col-lg-8">
								<input type="text" name="sid"
									class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">
								Last Name
							</label>
							<div class="col-lg-8">
								<input type="Lastname" name="ln"
									class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">
								First Name
							</label>
							<div class="col-lg-8">
								<input type="text" name="fn"
									class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">
								Email Address
							</label>
							<div class="col-lg-8">
								<input type="email" name="email"
									class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">
								Password
							</label>
							<div class="col-lg-8">
								<input type="password" name="pwd"
									class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">
								Birthdate
							</label>
							<div class="col-lg-8">
								<input type="date" name="bday"
									class="form-control" required />
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>	
	</body>
</html>