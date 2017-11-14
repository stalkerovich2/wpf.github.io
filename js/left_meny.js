$(document).ready(function() {
	 $("#menu ul").hide();
	$("#menu li span").click(function() { $(this).next().slideToggle("normal"); });
});

