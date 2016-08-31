function init() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 100,
            header = document.querySelector("header");
        if (distanceY > shrinkOn) {
            if ( $("header").hasClass("bigger")) {
                $("header").removeClass("bigger");
            }
            $("header").addClass("smaller")
        } else {
            if ( $("header").has("smaller")) {
                $("header").removeClass("smaller");
                $("header").addClass("bigger");

            }
        }
    });
}
window.onload = init();
