// DYNAMIC PAGE LOAD

	function loadProject(project, callback)

	{
		var xmlhttp;
		xmlhttp=new XMLHttpRequest();

		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		    {
		    document.getElementById("project-container").innerHTML=xmlhttp.responseText;
		    setTimeout(function(){
		    	var lheight = $(".pc-left").outerHeight(true);
		    	var wheight = $(window).height();

		    	if (lheight > wheight) {
		    		$(".pc-right").css('height',lheight);
		    	}
		    	
		    },500);

		    $("#close").on("click", function(){
				$("#project-wrapper").animate({ opacity: 0.0 }, "slow").fadeOut();
				$("html").unbind();

				$("body").removeClass('stop-scrolling');
			});

			$('#project-container').click(function(event){
			    event.stopPropagation();
			});

			//FLEXSLIDER
			$('.flexslider').flexslider({
			    animation: "slide",
			    smoothHeight: "true",
			    slideshowSpeed: "6000",
			    controlNav: "false"
			});

		    // VIMEO AND YOUT TUBE RESPONSIVE

			(function() {
			    var iframes = document.getElementsByTagName('iframe');
			    
			    for (var i = 0; i < iframes.length; i++) {
			        var iframe = iframes[i];
			        var players = /www.youtube.com|player.vimeo.com/;
			        if(iframe.src.search(players) !== -1) {
			            var videoRatio = (iframe.height / iframe.width) * 100;
			            
			            iframe.style.position = 'absolute';
			            iframe.style.top = '0';
			            iframe.style.left = '0';
			            iframe.width = '100%';
			            iframe.height = '100%';
			            
			            var div = document.createElement('div');
			            div.className = 'video-wrap';
			            div.style.width = '100%';
			            div.style.position = 'relative';
			            div.style.paddingTop = videoRatio + '%';
			            
			            var parentNode = iframe.parentNode;
			            parentNode.insertBefore(div, iframe);
			            div.appendChild(iframe);
			        }
			    }
			})();
		    }
		  }

		xmlhttp.open("GET","projects/projects.php?project=" +project,true);
		xmlhttp.send();

		// var hash = project;
		// document.location.hash = hash;

		//Analytics
		_gaq.push(['_trackEvent', 'Project', 'click', project]);
	}


