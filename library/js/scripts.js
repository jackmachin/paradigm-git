/*
Bones Scripts File
Author: Eddie Machado

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/

/*global $, jQuery, */

// as the page loads, call these scripts
jQuery(document).ready(function ($) {
    "use strict";

    /*
    Responsive jQuery is a tricky thing.
    There's a bunch of different ways to handle
    it, so be sure to research and find the one
    that works for you best.
    */

    /* getting viewport width */
    var responsive_viewport = $(window).width();

    /* if is below 481px */
    if (responsive_viewport < 481) {

    } /* end smallest screen */

    /* if is larger than 481px */
    if (responsive_viewport > 481) {

    } /* end larger than 481px */

    /* if is above or equal to 768px */
    if (responsive_viewport >= 768) {

        /* load gravatars */
        $('.comment img[data-gravatar]').each(function () {
            $(this).attr('src', $(this).attr('data-gravatar'));
        });

    }

    /* off the bat large screen actions */
    if (responsive_viewport > 1030) {

    }


	// add all your scripts here

   /*$(function() {

    var $sidebar   = $(".targetcontents"),
        $window    = $(window),
        offset     = $sidebar.offset(),
        topPadding = 5;

    $window.scroll(function() {
        if ($window.scrollTop() > offset.top) {
            $sidebar.stop().animate({
                marginTop: $window.scrollTop() - offset.top + topPadding
            });
        } else {
            $sidebar.stop().animate({
                marginTop: 0
            });
        }
    });

  }); */

    $(function () {
        $("#tabs").tabs();
    });
}); /* end of as page load scripts */


/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function (w) {
    "use strict";
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if (!(/iPhone|iPad|iPod/.test(navigator.platform) && navigator.userAgent.indexOf("AppleWebKit") > -1)) { return; }
    var doc = w.document;
    if (!doc.querySelector) { return; }
    var meta = doc.querySelector("meta[name=viewport]"),
        initialContent = meta && meta.getAttribute("content"),
        disabledZoom = initialContent + ",maximum-scale=1",
        enabledZoom = initialContent + ",maximum-scale=10",
        enabled = true,
		x, y, z, aig;
    if( !meta ){ return; }
    function restoreZoom(){
        meta.setAttribute( "content", enabledZoom );
        enabled = true; }
    function disableZoom(){
        meta.setAttribute( "content", disabledZoom );
        enabled = false; }
    function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
        if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );

// Function
	function selectThis(id) {
		//Off to a fine start, could search the DOM Element and do a .each function on the divs inside, or just hide all of that class...
		jQuery('.TextContainer').hide();
		// ID of Body plus whatever param we pass down,
		jQuery('#Body_' + id).fadeIn(500);
		//Remove that pesky selected from all
		jQuery('.HeaderButton').removeClass('HeaderButtonSelected');
		// And add to the now selected one
		jQuery('#Button_' + id).addClass('HeaderButtonSelected');
	}

 jQuery.noConflict();
jQuery(document).ready(function(){
		/*	here we loop through and hide any element
			which has the classname .aj_hidden
		*/
		jQuery(".aj-hidden").hide();
		/*	now that the element is hidden, we add a
			class which tells it to set its visibility
			to visible.

			We do this because we set the visibility
			of any aj_hidden to "hidden" in our CSS.
			This helps prevent the contents of any collapsible
			element from being visible for a spilt second
			during the initial page load.
		*/
		jQuery(".aj-hidden").addClass("aj-visible");
		jQuery(".aj-collapse").click(function() {
		  rel = jQuery(this).attr('rel');
		  jQuery("#" + rel).slideToggle('fast');
		});
});
