function submitInterest(){
	if ($('.selected').length==0){
		alert("you must select at least 1 interest");
		return;
	}
	
	var interestArray = new Array();
	
	$('.selected').each(function(i, obj) {
		interestArray.push($(obj).attr('id'));
	});
	
	console.log(JSON.stringify(interestArray));
	$("#hiddenInterest").val(JSON.stringify(interestArray));
	document.getElementById("interestForm").submit();
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