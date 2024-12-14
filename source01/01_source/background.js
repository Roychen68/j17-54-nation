$(document).ready(function() {
    $('<div class="overlay"></div>').appendTo('body');
    
    $(document).on('mousemove', function(e) {
        var mouseX = e.clientX;
        var mouseY = e.clientY;
        var screenWidth = $(window).width();
        var screenHeight = $(window).height();
        
        var xOffset = (mouseX / screenWidth - 0.3) * 20;
        var yOffset = (mouseY / screenHeight - 1) * 15;     
        
        $('body').css('background-position', `${xOffset}px ${yOffset}px`);
    });
});