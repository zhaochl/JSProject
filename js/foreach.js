$(".oak-tag-added").each(function(){
	if ( $(this).text() == i.val() ) r=false;
});

$("#main_nav a").each(function() {
	if ($(this)[0].href == String(window.location)) {
		$(this).parentsUntil("#main_nav>ul").addClass("active");
	}
});

a = [1,2,3];
[1, 2, 3]
a.forEach(
		function(e){
			alert(e);
		}
);
undefined