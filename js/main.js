$(document).ready(function() {
	var id = $(location).attr('pathname');
	console.log(id);
	console.log(id);
    $(document.getElementById(id)).addClass("active");
});