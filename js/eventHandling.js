// for submiting input to session via ajax
function submitInterest(){
	if ($('.select').length==0){
		alert("you must select at least 1 interest");
		return;
	}
	
	var interestArray = new Array();
	
	$('.select').each(function(i, obj) {
		interestArray.push($(obj).attr('id'));
	});
	
	$.ajax({
		url: 'session.php',
		type: 'post',
		data: {"callAddinterest": JSON.stringify(interestArray)},
		success: function (data) {
			document.location.href = "index.php";
		},
		error: function (data) {
			console.log("error");
			console.log(data);
		}
	});
}

function submitCategory(){
	if ($('.select').length==0){
		alert("you must select at least 1 interest");
		return;
	}
	
	var interestArray = new Array();
	
	$('.select').each(function(i, obj) {
		interestArray.push($(obj).attr('id'));
	});
	
	$.ajax({
		url: 'session.php',
		type: 'post',
		data: {"callAddCategory": JSON.stringify(interestArray)},
		success: function (data) {
			console.log(data);
			document.location.href = "activitySelection.php";
		},
		error: function (data) {
			console.log("error");
			console.log(data);
		}
	});
}

function submitName(){
	var username = document.getElementById('name').value;
	if (username == "" || username  == null){
		alert("Must input a name");
		return;
	}
	$.ajax({
		url: 'session.php',
		type: 'post',
		data: {"callAddName": username},
		success: function (data) {
			document.location.href = "tutorial.php";
		},
		error: function (data) {
			console.log("error");
			console.log(data);
		}
	});
}

function submitTime(){
	var time = document.getElementById('time').value;
	
	if (time>=10 && time <=300){
		$.ajax({
			url: 'session.php',
			type: 'post',
			data: {"callAddTime": time},
			success: function (data) {
				document.location.href = "categorySelection.php";
			},
			error: function (data) {
				console.log("error");
				console.log(data);
			}
		});
		} else {
		alert("Please enter between 10 to 300 minutes.");
	}
}

// for highlighting the buttons that the user had selected
$( ".interest" ).click(function() {
	$( this  ).toggleClass( "select");
	$( this  ).find(".user_thumbnail").toggleClass( "selected");
});

// show + hide the pop up dialog
function showTemplateDialog() {
	var dialog = document.getElementById('my-dialog');
	
	if (dialog) {
		dialog.show();
		} else {
		ons.createElement('dialog.html', { append: true })
		.then(function(dialog) {
			dialog.show();
		});
	}
};

function hideDialog(id) {
	document
	.getElementById(id)
	.hide();
};	