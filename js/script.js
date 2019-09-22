$(function() {
	$(window).resize(function() {
		$("main").removeAttr("style");
	});
	$("main").draggable({containment: "window"});
});
