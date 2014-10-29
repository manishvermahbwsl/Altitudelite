/**
 * Delight Theme js
 *
 * Custom javascript for the delight Theme
 *
 * Please do not edit this file. This file is part of the CyberChimps Framework and all modifications
 * should be made in a child theme.
 *
 * @category CyberChimps Framework
 * @package  Framework
 * @since    1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     http://www.cyberchimps.com/
 */

(function ($) {

	$("#menu_button").on('click', function () {
		if ( $("nav ul").hasClass('menu') ) {
			$("nav ul.menu").slideToggle();
		} else if ( $("nav div").hasClass('menu') ) {
			$("nav div.menu ul").slideToggle();
		} else {
			$("nav ul:first").slideToggle();
		}
	});

    function isTouchDevice() {
        return 'ontouchstart' in window // works on most browsers
        || 'onmsgesturechange' in window; // works on ie10
    }

	// Parallax scrolling
    if ( ! isTouchDevice() ) {
        $(window).stellar({
            horizontalScrolling: false,
            positionProperty: 'transform',
            verticalOffset: 50
        });
    }

})(jQuery);