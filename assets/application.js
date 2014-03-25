$(document).ready(function() {
    $('#barBottommiddle,#barBottomLeft').click(function() {
        $("html, body").animate({scrollTop: 0}, 600);
    });
});