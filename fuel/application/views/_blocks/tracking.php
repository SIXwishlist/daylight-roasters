<?php if (is_environment('production')):
/* Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
   mathiasbynens.be/notes/async-analytics-snippet --*/ ?>
<script>
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif ?>