<!DOCTYPE html>
<html>
<head>
	<title>PHP Insert Data to MySQL</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
			$("#submitBtn").click(function() {
				var name = $("#name").val();
				var email = $("#email").val();
				$.ajax({
					type: "POST",
					url: "insert.php",
					data: {name: name, email: email},
					success: function() {
						$("#message").html("Data inserted successfully!");
						$("#name").val("");
						$("#email").val("");
						getData();
					},
					error: function() {
						$("#message").html("Error inserting data.");
					}
				});
			});

			function getData() {
				$.ajax({
					type: "GET",
					url: "getdata.php",
					success: function(data) {
						$("#tableContent").html(data);
					},
					error: function() {
						$("#message").html("Error getting data.");
					}
				});
			}

			getData();
		});
	</script>
</head>
<body>
	<h2>PHP Insert Data to MySQL</h2>
	<form>
		<label for="name">Name:</label>
		<input type="text" id="name" name="name"><br><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email"><br><br>
		<input type="button" id="submitBtn" value="Submit">
	</form>
	<br>
	<div id="message"></div>
	<br>
	<h3>Table Contents</h3>
	<div id="tableContent"></div>
</body>
</html>