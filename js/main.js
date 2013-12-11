$('#display-btn').click(function(){
	var array1 = $('input[id$="toread"]').toArray();
	var numwords = array1.length();
	console.log(numwords);
});