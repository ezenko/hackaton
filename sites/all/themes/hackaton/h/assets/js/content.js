jQuery(function(){
    var logoColour = jQuery('.logo a').css('background-color');
    jQuery('.logo a').hover(
        function() {
            var hue = 'rgb('
                + (Math.floor(Math.random() * 256)) + ','
                + (Math.floor(Math.random() * 256)) + ','
                + (Math.floor(Math.random() * 256)) + ')';
            jQuery(this).removeClass('custom-colour-bg');
            jQuery(this).stop().animate( { backgroundColor: hue }, 500 );
        },
        function() {
            jQuery(this).stop().animate( { backgroundColor: logoColour }, 500, function(){
                jQuery(this).addClass('custom-colour-bg');
            });
        }
    );

    jQuery('.customer-logo a img:nth-child(2)').addClass('color-img');
});