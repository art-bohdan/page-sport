$(document).ready(function() { 
    var $winwidth = $(window).width();
    $("header.header").attr({
        width: $winwidth
    });
    $(window).bind("resize", function(){ 
        var $winwidth = $(window).width();
        $("header.header").attr({
            width: $winwidth
        });
    });
}); 