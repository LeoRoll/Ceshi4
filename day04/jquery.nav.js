$(function(){
	$.extend({
		"nav":function(){
			$(".nav").css({
				"margin":0,
				"padding":0,
				"display":"none"
			});
			
			$(".nav").parent().hover(
					function(){
						$(this).find(".nav").slideDown();
					},
					function(){
						$(this).find(".nav").slideUp();
					});
			
		}
	});
});









