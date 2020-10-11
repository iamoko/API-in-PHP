<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>Hello, world!</title>
</head>
<body>
	<div class="container">
		<?php if(validation_errors() != null){ ?>
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>Errors!</strong><?php echo validation_errors(); ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php	}

		?>

		
		
		<?php 
			$attributes = ['enctype' => 'multipart/form-data'];
		echo form_open('form', $attributes); ?>




		<div class="row" style="margin-top: 20px">

			<div class="col-md-6">
				<div class="card">

					<div class="card-body">
						<h5 class="card-title">User Details</h5>
						<div class="form-group row">
							<label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
							<div class="col-sm-9">
								<input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>" />
							</div>
						</div>


						<div class="form-group row">
							<label for="staticEmail" class="col-sm-3 col-form-label">Telephone</label>
							<div class="col-sm-9">
								<input type="phone" class="form-control" name="phone" value="<?php echo set_value('phone'); ?>" />
							</div>
						</div>

						<div class="form-group row">
							<label for="staticEmail" class="col-sm-3 col-form-label">Password</label>
							<div class="col-sm-9">
								<input type="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>" />
							</div>
						</div>

						<div class="form-group row">
							<label for="staticEmail" class="col-sm-3 col-form-label">Location</label>
							<div class="col-sm-9">
								<input type="phone" class="form-control" name="location" value="<?php echo set_value('location'); ?>" />
							</div>
						</div>

					</div>
				</div>
				



			</div>



			<div class="col-md-6">
				<div class="card">

					<div class="card-body">
						<h5 class="card-title">Next Of kin</h5>

						<div class="form-group row">
							<label for="staticEmail" class="col-sm-3 col-form-label">Name</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="fname" value="<?php echo set_value('fname'); ?>" placeholder="First Name"/>
							</div>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="fname" value="<?php echo set_value('fname'); ?>" placeholder="Last Name" />
							</div>
						</div>

						<div class="form-group row">
							<label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
							<div class="col-sm-9">
								<input type="text" class="form-control"  name="nok_email" value="<?php echo set_value('nok_email'); ?>">
							</div>
						</div>

						<div class="form-group row">
							<label for="staticEmail" class="col-sm-3 col-form-label">Telephone</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="nok_phone"  value="<?php echo set_value('nok_phone'); ?>">
							</div>
						</div>

						<div class="form-group row">
							<label for="staticEmail" class="col-sm-3 col-form-label">Location</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="nok_location" value="<?php echo set_value('nok_location'); ?>">
							</div>
						</div>


					</div>
				</div>
				
			</div>
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Uploads</h5>
						<div class="col-md-6">
							<div class="form-group row">
								<label for="staticEmail" class="col-sm-3 col-form-label">Id Type</label>
								<div class="col-sm-3">
									<input type="radio" name="identity" value=""> National Id
								</div>
								<div class="col-sm-3">
									<input type="radio"  name="identity" value=""> Passport
								</div>
								<div class="col-sm-3">
									<input type="radio" name="identity" value=""> Other
								</div>

							</div>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroupFileAddon01">2 Faces of ID</span>
								</div>
								<div class="custom-file">
									<input type="file" name="userfile[]" multiple="multiple" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
									<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
								</div>
							</div>
						</div>

						<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroupFileAddon01">Proof of Address</span>
								</div>
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
									<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							
							<div class="col-sm-9">
								<input type="submit" value="Submit" class="btn btn-success" name="">
							</div>
						</div>						


					</div>
				</div>
			</div>





		</div>
	</form>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>