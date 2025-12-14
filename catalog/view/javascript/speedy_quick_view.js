(function( $ ) {
    
	// $('body').delegate('#common-home , #product-product , #product-category , #product-search , #product-manufacturer, .product-layout', 'mouseover', function(){
	// 	if( $(this).find('.dw-quickview').length > 0 ){

	// 	} else {
	// 		var html = $('<div class="dw-quickview">' + dw_data.btn + '</div>');
	// 		if( $(this).find('.item_inner .image' ).length == 0 ) {
	// 			$(this).append(html);
	// 		} else {
	// 			$(this).find('.item_inner').append(html);
	// 		}
	// 	}
	// });
	
	$('body').on('click', '.button_view_modal', function() {
		var tmp = $(this).parents('.item').find('[onclick]').attr('onclick');
		var id = /\d+/.exec(tmp);
		if( !isNaN(id) ){
			
			if(!$(".dropdown-bg").hasClass("active")) {
				$(".dropdown-bg").addClass("active");
			}
			$('#dwquickview-modal').addClass("active");
					
			$.ajax({
				type: 'POST',
			 	url: 'index.php?route=extension/module/speedy_quick_view/show',
				dataType: 'json',
				data: 'pr_id=' + id,
				beforeSend: function(){
        	   		$('.wsx').html(dw_data.load);
       		 	},
				success: function(json){
				
					setTimeout(function(){ 
					    $('.wsx').html(json.response);
						$('#dwquickview-modal').removeClass("quick_view_loading");
					    // $('#dwquickview-modal > h2').text(json.heading);
					}, 300);
					
				   	if(json.success) {
					   
				    } else {
					    setTimeout(function(){ 
					        $('#dwquickview-modal').modal('toggle');
					                
					    }, 3000);
					}
		    	}
	   		});
		}
		return false;
	} );
})( jQuery );