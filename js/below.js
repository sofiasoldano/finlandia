$(document).ready(function() {
    
    /* Sliders */ 
    $('.recetas-slider').flexslider({
        animation: "slide",
        animationLoop: false,
        slideshow: false,
        animationLoop: true,
        directionNav: false,
        itemWidth: 314,
        itemMargin: 15,
        minItems: 1.05
        
    });
    $('.productos-slider').flexslider({
        animation: "slide",
        animationLoop: false,
        slideshow: false,
        animationLoop: true,
        directionNav: false,
        minItems: 1
    });  
    $('.desayunos-slider').flexslider({
        animation: "slide",
        animationLoop: false,
        slideshow: false,
        animationLoop: true,
        directionNav: false,
        minItems: 1
    });

    // Change color on scroll
    $(document).scroll(function() {
        headerActive();
    });
    
    // Open mobile menu
	$(".menu-icon").click(function() {
        if($(".menu-icon").hasClass("menu-close")){
            $(".menu").removeClass("show");   
            $(".menu-icon").removeClass("menu-close");   
            headerActive();
        }
        else{
            $(".menu").addClass("show"); 
            $(".menu-icon").addClass("menu-close");
            $("header").addClass("active");
            $("header .logo-default").addClass("hidden");
            $("header .logo-active").removeClass("hidden");
        }
    });
    
});

// Fixed Menu - change color
function headerActive(){
    var top_of_window = $(window).scrollTop();
    if( top_of_window != 0){
        $("header").addClass("active");
        $("header .logo-default").addClass("hidden");
        $("header .logo-active").removeClass("hidden");
    }
    else if(!$(".menu").hasClass("show")){
         $("header").removeClass("active");
        $("header .logo-default").removeClass("hidden");
        $("header .logo-active").addClass("hidden");
    }
}

//Submenu
function submenu(id, number){
    $(".submenu li").removeClass("active");
    $(".submenu li:nth-of-type(" + number +")").addClass("active");
    $(".menu .content .inner-content").addClass("hidden");
    $(id).removeClass("hidden");
}