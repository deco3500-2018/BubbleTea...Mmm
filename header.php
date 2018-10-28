<!-- global header -->
<ons-toolbar class="toolbar toolbar--transparent">
	<div class="toolbar__left" >
		<!-- Change the back button style depending on which page it is on -->
		<span class="toolbar-button" style="<?php if (isset($white)){echo "";}else{echo "color: white;";}?>">
			<?php if (isset($back)){echo "";}else{echo "<ons-back-button onclick='window.history.back();' style='color: white;'>Back</ons-back-button>";}?> 
		</span>
	</div>
	
	<div class="toolbar__center" id="textclr" style="text-transform: bold;">
		<?php echo $pageName ?>
	</div>
	
	<div class="toolbar__right">
		<ons-toolbar-button icon="md-face" style="margin-left: 10px; color: white;" onclick="location.href='account.php'"></ons-toolbar-button>
	</div>
</ons-toolbar>