<?php
include "start.php";
include "error.php";

unset ($_SESSION["category"]);
unset ($_SESSION["time"]);
?>

<!DOCTYPE html>
<html>

<head>
	<title>In the Moment</title>

	<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
	<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsen-css-components.min.css">
	<script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css?version=2">
</head>

<body>

	<ons-page id="bg">
	<?php
				include "header.php";		
			?>
		<div style="text-align: center; margin-top: 45%;">
			<h1 style="margin: 10%;" class="title" id="textclr">How much free time do you have now?</h1>
			<div>
				<!-- dynamically create the checkbox base on interest retrieved from the database-->

				<form name="interestForm" action="categorySelection.php" method="post">
					<span class="list-item__subtitle" style="display: block;" id="textclr">* Please enter number of minutes</span>
					<ons-list style="max-width: 40%; margin-right: auto; margin-left: auto; margin-top: 20px; margin-bottom: 20px;">
						<ons-list-item modifier="noborder">
							<ons-input type="number" style="width:120px" name="time" id="time" min="5" max="75" "></ons-input>
						</ons-list-item>	
					</ons-list>
					


					<ons-button modifier="cta">
						<ons-input onclick="submitTime()" value="Submit" input-id="textclr"></ons-input>
					</ons-button>
				</form>
			</div>
		</div>
		<?php include "footer.php";?>
	</ons-page>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
		</script>
		
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
		</script>
		
		<script type="text/javascript" src="js/eventHandling.js?version=3"></script>

</body>

</html>