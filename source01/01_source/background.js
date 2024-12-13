$(document).ready(function() {
    $('<div class="overlay"></div>').appendTo('body');
    
    $(document).on('mousemove', function(e) {
        var mouseX = e.clientX;
        var mouseY = e.clientY;
        var screenWidth = $(window).width();
        var screenHeight = $(window).height();
        
        var xOffset = (mouseX / screenWidth - 30) * 7;
        var yOffset = (mouseY / screenHeight - 60) * 7;
        
        $('body').css('background-position', `${xOffset}px ${yOffset}px`);
    });
});