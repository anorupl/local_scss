/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-folder-open': '&#xe930;',
		'icon-clock2': '&#xe94f;',
		'icon-bubbles': '&#xe971;',
		'icon-user': '&#xe971;',
		'icon-arrow-down': '&#xf107;',
		'icon-menu': '&#xf039;',
		'icon-info': '&#xe600;',
		'icon-facebook': '&#xea8d;',
		'icon-google': '&#xea89;',
		'icon-twitter': '&#xea92;',
		'icon-feed': '&#xea95;',
		'icon-youtube': '&#xea97;',
		'icon-vimeo': '&#xea9d;',
		'icon-picassa': '&#xeaa5;',
		'icon-deviantart': '&#xeaac;',
		'icon-github': '&#xeab4;',
		'icon-linkedin': '&#xeac8;',
		'icon-pinterest': '&#xead1;',
		'icon-close': '&#xf00d;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
