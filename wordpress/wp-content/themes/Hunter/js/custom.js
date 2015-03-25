jQuery(document).ready(function($){

	// Masonry
	$container = $('.gridbox');
	$container.imagesLoaded(function(){
		$container.masonry({
		 	itemSelector: '.mgrid',
		    transitionDuration: '1s'
		});
	});
	$(document).ready( function() { setTimeout( function() { $container.masonry(); }, 500); });
	$(window).resize(function () { $container.masonry(); });


	// Fitvid
	$(".media-container").fitVids();
 

	//Flexslider
    $(".flexslider").flexslider({
        animation: "fade",
        directionNav: false, 
        start: function(){ $container.masonry(); }
    });
    
	//Search animation
	$(".pull-handle").click(function () {
        var ph =  $(".search-box" );
        if ($(ph).css('right') == '-220px') {
            $(ph).animate({
                "right": "-10px"
            }, 1000);
        } else {
            $(ph).animate({
                "right": "-220px"
            }, 1000);
        }
    });


    //Fancybox
    $("a.fancypop").fancybox({
            'transitionIn'  :   'elastic',
            'transitionOut' :   'elastic',
            'speedIn'       :   600, 
            'speedOut'      :   200, 
            'overlayShow'   :   false
    });



	//Tinynav
	$("#hunter").tinyNav();


    //Placeholder
 	jQuery(function($) {

    var placeholders = {
      'author': 'Name',
      'url': 'Website',
      'email': 'Email',
      'comment': 'Your comment'
    };
  
    // Sets the HTML5 placeholders
    for(var id in placeholders){$("#"+id).attr("placeholder",placeholders[id])}
  
    // Polyfill to add support for browsers like IE<=9
    if(document.createElement("input").placeholder===undefined){$("html").attr("data-placeholder-focus","false");$.getScript("//jamesallardice.github.io/Placeholders.js/assets/js/placeholders.jquery.min.js",function(){$(function(){var e=window.module.lp.form.data.validationRules;var t=window.module.lp.form.data.validationMessages;lp.$.validator.addMethod("notEqual",function(e,t,n){return this.optional(t)||$(t).attr("data-placeholder-active")!=="true"||e!==n},function(e,n){return t[$(n).attr("id")].required});for(var n in placeholders){if($("#"+n).length){if(typeof t[n].required!=="undefined"){e[n].notEqual=placeholders[n]}else{e[n]={}}}}})})}
  
  });


});