
$(document).ready(function(){
	
	
	$("#ny").text("2018-"+new Date().getFullYear()) ;

	$(".img_click").click(function(){
		$(location).attr("href","__CONTROLLER__/video") ;
	});	
	
	//匹配两个路径是否相同(不带参数的情况下)，确定当前页面，设置active
		var action = window.location.pathname ;
		console.log(action) ;
		
		var ahrefs = $("#header-nav").find("a") ;
		console.log(ahrefs) ;
		ahrefs.each(function(){
			var t = $(this) ;  
			if(action == t.attr("href") ){
				t.addClass("active") ;
			}else{
				t.removeClass("active") ;
			}
		});
});


