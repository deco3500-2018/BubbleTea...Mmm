function submitInterest(){
	if ($('.selected').length==0){
		alert("you must select at least 1 interest");
		return;
	}
	
	var interestArray = new Array();
	
	$('.selected').each(function(i, obj) {
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
	if ($('.selected').length==0){
		alert("you must select at least 1 interest");
		return;
	}
	
	var interestArray = new Array();
	
	$('.selected').each(function(i, obj) {
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

$( ".interest" ).click(function() {
	$( this ).toggleClass( "selected");
});

function submitName(){
	 var username = document.getElementById('name').value;
	 if (username == "" || username  == null){
		 alert("Must input a name");
		 return;
	 }
	 
	$("#hiddenName").val(username);
	document.getElementById("nameForm").submit();
}

function submitTime(){
	var time = document.getElementById('time').value;
	
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
}