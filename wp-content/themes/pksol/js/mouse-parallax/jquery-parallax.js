jQuery.fn.parallax = function ( resistance, mouse ) 
{
	jQueryel = jQuery( this );
	TweenLite.to( jQueryel, 0.2, 
	{
		x : -(( mouse.clientX - (window.innerWidth/2) ) / resistance ),
		y : -(( mouse.clientY - (window.innerHeight/2) ) / resistance )
	});

};