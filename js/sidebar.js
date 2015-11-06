$(document).ready(function(){
	$(window).scroll(function(){
		
		var position_top=$(document).scrollTop();
		if(position_top>=600&&position_top<=1150){
			$('#sidebar').addClass('wow fadeInLeft');
			$('#sidebar').addClass('show');
			$('#sidebar').removeClass('hid');

			
			
		}else if(position_top<600||position_top>1150){
			$('#sidebar').addClass('wow fadeOutLeft');
			$('#sidebar').removeClass('show');
			$('#sidebar').addClass('hid');
		}
	} );
	
});
