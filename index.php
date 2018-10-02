<!DOCTYPE html>
<html>

<head>
	<title>In the Moment</title>
	
	<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
	<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsen-css-components.min.css">
	<script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>
</head>

<body>

	<ons-page>

		<ons-toolbar>
			<div class="left">
				<ons-toolbar-button icon="md-face"></ons-toolbar-button>
			</div>

			<div class="center">Title</div>

			<div class="right">
				<ons-toolbar-button>-</ons-toolbar-button>
				<ons-toolbar-button>+</ons-toolbar-button>
			</div>
		</ons-toolbar>

		<p class="intro">
			This is a kitchen sink example that shows off the components of Onsen UI.<br><br>
		</p>

		<ons-card onclick="fn.pushPage({'id': 'pullHook.html', 'title': 'PullHook'})">
			<div class="title">Pull Hook</div>
			<div class="content">Simple "pull to refresh" functionality to update data.</div>
		</ons-card>
		<ons-card onclick="fn.pushPage({'id': 'dialogs.html', 'title': 'Dialogs'})">
			<div class="title">Dialogs</div>
			<div class="content">Components and utility methods to display many types of dialogs.</div>
		</ons-card>
		<ons-card onclick="fn.pushPage({'id': 'buttons.html', 'title': 'Buttons'})">
			<div class="title">Buttons</div>
			<div class="content">Different styles for buttons, floating action buttons and speed dials.</div>
		</ons-card>
		<ons-card onclick="fn.pushPage({'id': 'carousel.html', 'title': 'Carousel'})">
			<div class="title">Carousel</div>
			<div class="content">Customizable carousel that can be optionally fullscreen.</div>
		</ons-card>
		<ons-card onclick="fn.pushPage({'id': 'infiniteScroll.html', 'title': 'Infinite Scroll'})">
			<div class="title">Infinite Scroll</div>
			<div class="content">Two types of infinite lists: "Load More" and "Lazy Repeat".</div>
		</ons-card>
		<ons-card onclick="fn.pushPage({'id': 'progress.html', 'title': 'Progress'})">
			<div class="title">Progress</div>
			<div class="content">Linear progress, circular progress and spinners.</div>
		</ons-card>

		<style>
		.intro {
			text-align: center;
			padding: 0 20px;
			margin-top: 40px;
		}

		ons-card {
			cursor: pointer;
			color: #333;
		}

		.card__title,
		.card--material__title {
			font-size: 20px;
		}
	</style>


	<ons-bottom-toolbar>
		<ons-tabbar swipeable position="auto">
			<ons-tab page="tab1.html" label="Tab 1" icon="ion-home, material:md-home" badge="7" active>
			</ons-tab>
			<ons-tab page="tab2.html" label="Tab 2" icon="md-settings" active-icon="md-face">
			</ons-tab>
			<ons-tab page="tab3.html" label="Tab 3" icon="md-settings" active-icon="md-face">
			</ons-tab>
			<ons-tab page="tab2.html" label="Tab 4" icon="md-settings" active-icon="md-face">
			</ons-tab>
		</ons-tabbar>
	</ons-bottom-toolbar>


</ons-page>

</body>

</html>
