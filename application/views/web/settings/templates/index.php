<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bootstrap 101 Template</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	</head>

	<body>
		<h1>Hello, world!</h1>
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
			Launch demo modal
		</button>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="<?php echo base_url('/js/backend/settings/templates/init.js'); ?>"></script>
	</body>

</html>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<form action="" id="messageModalForm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Modal title</h4>
				</div>
				<div class="modal-body">
					Message type :
					<select class="form-control" name="type" size="1" id="type">
						<option value="EMAIL">EMAIL</option>
						<option value="SMS">SMS</option>
					</select>
					<br>
					Message category :
					<select class="form-control" name="type" size="1" id="type">
						<option value="BOOKING">BOOKING</option>
						<option value="INSTA">INSTA</option>
						<option value="RECALL">RECALL</option>
						<option value="REMAINDER">REMAINDER</option>
						<option value="STATEMENT">STATEMENT</option>
						<option value="CUSTOM">CUSTOM</option>
					</select>
					<br>
					Description :
					<input type="text" class="form-control" name="description" id="description">
					<br>
					<textarea rows="6" cols="80" maxlength="300" class="form-control" name="message" id="smsMessage"></textarea>
					<strong><span id="charCount" style="color: Red;">0</span></strong> Character used.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<input type="submit" class="btn btn-primary" name="add_message" id="add_message" value="SAVE">
				</div>
			</div>
		</form>
	</div>
</div>