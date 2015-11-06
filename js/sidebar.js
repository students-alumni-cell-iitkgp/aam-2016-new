$(document).ready(function(){
	$(window).scroll(function(){
		
		var position_top=$(document).scrollTop();
		if(position_top>=650&&position_top<=1400){
			$('#sidebar').addClass('show');
			 
			
			
		}else if(position_top<650||position_top>1400){
			$('#sidebar').removeClass('show');
			$('#sidebar').addClass('hid');
		}
	} );
	
});
