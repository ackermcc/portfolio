$(window).load(function(){

	var height = $(window).height();
	var width = $(window).width();

	// HELLO MY NAME IS _____

	$("#name").css('height', height - 250);

	$(window).resize(function() {
		var height = $(window).height();
		$("#name").css('height', height - 250);
	});

	// WAYPOINTS

	$('#nav').waypoint(function(direction) {
	  if (direction === "down") {
	  	$('#fixed-nav').animate({ opacity: 1, top: "0px" }, 'fast');
	  } else {
	  	$('#fixed-nav').animate({ opacity: 0, top: "-47px" }, 'slow');
	  }
	});

	$('#about').waypoint(function(direction) {
	 	$('#social-icons a:first-child').animate({ opacity: 1}, 'slow');
		$('#social-icons a:nth-child(2)').delay(100).animate({ opacity: 1}, 'slow');
		$('#social-icons a:nth-child(3)').delay(200).animate({ opacity: 1}, 'slow');
		$('#social-icons a:nth-child(4)').delay(300).animate({ opacity: 1}, 'slow');
		$('#social-icons a:nth-child(5)').delay(400).animate({ opacity: 1}, 'slow');

		if (direction === "down") {
			$("#about-link").addClass("active-nav");
		} else {
			$("#nav-right div").removeClass("active-nav");
		}
	}, { offset: 'bottom-in-view' });

	$('#work').waypoint(function(direction) {
		if (direction === "down") {
			
		} else {
			$("#nav-right div").removeClass("active-nav");
			$("#about-link").addClass("active-nav");
		}
	}, {offset: 'bottom-in-view'});

	$("div.project-thumb").waypoint(function(){
		$(this).children('div').animate({opacity: 1, left: "0px"}, "slow");
		$("#nav-right div").removeClass("active-nav");
		$("#work-link").addClass("active-nav");
	}, {offset: 'bottom-in-view'});

	//SORT NAV
	$("#tag-nav div").click(function(){
		$("#tag-nav div").removeClass("active-sort");
		$(this).addClass("active-sort");
	});

	$(".all-sort").click(function(){
		$("#work div.project-thumb").fadeIn();
	});

	$(".interactive-sort").click(function(){
		$("#work div.project-thumb").fadeOut();
		$("#work div.project-thumb.interactive").fadeIn();
	});

	$(".motion-sort").click(function(){
		$("#work div.project-thumb").fadeOut();
		$("#work div.project-thumb.motion").fadeIn();
	});

	$(".branding-sort").click(function(){
		$("#work div.project-thumb").fadeOut();
		$("#work div.project-thumb.branding").fadeIn();
	});


	// PROJECT CONTAINER

	$(".project-thumb-description").dotdotdot({
		watch: "window"
	});

	$("#project-wrapper").css({
		height: height,
		left: width
	});
	
	var wholeHeight = $("html").height();

	$("#project-bg").css({
		height: wholeHeight
	});
	$("#work div.project-thumb").click(function(){
		var scrollTop = $(window).scrollTop();
		$("#project-wrapper").css('top', scrollTop);
		$("#project-bg").css('display','block').animate({ opacity: 1 }, "slow");
		$("#project-wrapper").css('display','block').animate({ opacity: 1, left: 0 }, "slow");
	});

});


