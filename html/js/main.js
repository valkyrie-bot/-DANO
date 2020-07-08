$(function() {
    //헤더 메뉴

	  $(window).scroll(function(){
		 //alert($(document).scrollTop());
	     if($(document).scrollTop()>= 300){
		   $('#header').addClass('scroll');
         }
		 else {
              $('#header').removeClass('scroll');
		 //$('header').css({'background-color':'rgba(0,0,0,0)',height:150,'padding-top':30},100)
         }
	   })


	 $(".mainMenu > li").each(
	    function(){
		   var sub = $(this).find('.subMenu');

    	   $(this).hover(function(){
           sub.stop().slideDown();},function(){
           sub.stop().slideUp();})
      }); 

    
//슬라이더 
    $('.bxslider').bxSlider({
            captions:false,
            //slideWidth:600,  //수정
            auto:true,
            autoControls:false,
            stopAutoOnclick:true,
          });
    //슬라이더 2
    $('.bxslider2').bxSlider({
            captions:false,
            //slideWidth:400,
            auto:true,
            autoControls:false,
            stopAutoOnclick:true,
          });
//공지사항
    $('.tabSet').each(function(){
		var topDiv = $(this);
		var anchors = topDiv.find('ul.tabs span');
		var panelDivs = topDiv.find('div.panel');
		var lastAnchor;
		var lastPanel;

		anchors.show();
		lastAnchor = anchors.filter('.on');
		lastPanel = $(lastAnchor.attr('span_name'));
		panelDivs.hide();
		lastPanel.show();
		
		anchors.click(function(){
			//event.preventDefault();
			var currentAnchor = $(this);
			var currentPanel = $(currentAnchor.attr('span_name'));
			lastAnchor.removeClass('on');
			lastPanel.hide();

			currentAnchor.addClass('on');
			currentPanel.show();

			
			lastAnchor = currentAnchor;
			lastPanel = currentPanel;
		});
	});
});//전체
