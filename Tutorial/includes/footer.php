</div>

<footer class="text-center" id="footer"> copyright 2013-2015 Shaunta's Boutique</footer>


<script>
	jQuery(window).scroll(function(){
	var vscroll = jQuery(this).scrollTop();
	jQuery('#logotext').css({
     "transform" : "translate(0px, "+vscroll/2+"px)"
	});

	var vscroll = jQuery(this).scrollTop();
	jQuery('#back-flower').css({
     "transform" : "translate("+vscroll/5+"px, -"+vscroll/12+"px)"
	});

	var vscroll = jQuery(this).scrollTop();
	jQuery('#for-flower').css({
     "transform" : "translate(0px, -"+vscroll/2+"px)"
	});
});
	
</script>
</body>
</html>