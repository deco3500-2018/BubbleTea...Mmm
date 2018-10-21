<?php
include "start.php";
include "error.php";
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
		<div style="text-align: center; margin-top: 50%;">
			<h1 style="margin: 10%;" class="title" id="textclr">How much free time do you have now?</h1>
			<div>
				<!-- dynamically create the checkbox base on interest retrieved from the database-->

				<form name="interestForm" action="categorySelection.php" method="post">
					<span class="list-item__subtitle" style="display: block;" id="textclr">* Please enter number of minutes</span>
					<ons-list style="max-width: 40%; margin-right: auto; margin-left: auto; margin-top: 20px; margin-bottom: 20px;">
						<ons-list-item modifier="noborder">
							<ons-input type="number" name="time" min="5" max="75"></ons-input>
						</ons-list-item>	
					</ons-list>
					


					<ons-button modifier="cta">
						<ons-input type="submit" value="Submit" input-id="textclr"></ons-input>
					</ons-button>
				</form>
			</div>
		</div>
		<?php include "footer.php";?>
	</ons-page>

</body>

</html>