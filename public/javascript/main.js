$(document).ready(function(){
    $(".nav-menu").click(function(){
        console.log("CLICKED");
        if($(".nav-links").css("display") === "none") {
            $(".nav-links").css('display', 'block');
            $(".nav").addClass("active");
            $(".main-container").addClass("active");
            $("footer").addClass("active");
            $(".nav-menu i").addClass("gg-close");
            $(".nav-menu i").removeClass("gg-menu");
        } else {
            $(".nav-links").css('display', 'none');
            $(".nav").removeClass("active");
            $(".main-container").removeClass("active");
            $("footer").removeClass("active");
            $(".nav-menu i").addClass("gg-menu");
            $(".nav-menu i").removeClass("gg-close");
        }
    })

    $("#marketing-filter").click(function(){
        $("#programming-filter").removeClass("active");
        $("#design-filter").removeClass("active");

        if($(".marketing").css("display") === "none") {
            $(".marketing").css("display", "flex");
            console.log("none")
        }

        if($("#marketing-filter").hasClass("active")) {
            $("#marketing-filter").removeClass("active");
            $(".programming").css("display", "flex");
            $(".design").css("display", "flex");
        }else {
            $("#marketing-filter").addClass("active");
            $(".programming").css("display", "none");
            $(".design").css("display", "none");
        }
    })

    $("#programming-filter").click(function(){
        $("#design-filter").removeClass("active");
        $("#marketing-filter").removeClass("active");

        if($(".programming").css("display") === "none") {
            $(".programming").css("display", "flex");
            console.log("none")
        }

        if($("#programming-filter").hasClass("active")) {
            $("#programming-filter").removeClass("active");
            $(".marketing").css("display", "flex");
            $(".design").css("display", "flex");
        }else {
            $("#programming-filter").addClass("active");
            $(".marketing").css("display", "none");
            $(".design").css("display", "none");
        }
    })

    $("#design-filter").click(function(){
        $("#programming-filter").removeClass("active");
        $("#marketing-filter").removeClass("active");

        if($(".design").css("display") === "none") {
            $(".design").css("display", "flex");
            console.log("none")
        }

        if($("#design-filter").hasClass("active")) {
            $("#design-filter").removeClass("active");
            $(".marketing").css("display", "flex");
            $(".programming").css("display", "flex");
        }else {
            $("#design-filter").addClass("active");
            $(".marketing").css("display", "none");
            $(".programming").css("display", "none");
        }
    })

    $(".selected").click(function(e){    
        $(".option-container").toggleClass("active") 
        $(".selected").toggleClass("active")
    })

    $(".option").each(function(){
        $(this).click(function(){
            $(".selected").html($("label", this).html()) 
            $(".option-container").removeClass("active") 
            $(".selected").removeClass("active") 
        })
    })
})