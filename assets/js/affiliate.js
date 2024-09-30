$(function () {
    $("#signup_form").on("submit", function(e) {
        e.preventDefault();
        var redirect_link = "/affiliates/tools?email=" + encodeURIComponent($("#email").val()) + "&name=" +  encodeURIComponent($("#name").val()) + "&bankID=" +encodeURIComponent($("#bankid").val());
        location.href = redirect_link;
    })

    // Tools page
    // get Hash(#)
    var hashValue = window.location.hash;
    if (hashValue) {
        $(".menu-item").removeClass("active");
        $(".menu-item[href='" + hashValue + "']").addClass("active");
        var target = $(hashValue);

        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    } else {
        $(".menu-item").removeClass("active");
        $(".menu-item[href='#about']").addClass("active");
        
    }

    $(".menu-item").on("click", function() {
        $(".menu-item").removeClass("active");
        $(this).addClass("active");
    })
    $(".copy-to-clipboard").on("click", function(e) {
        e.preventDefault();
        navigator.clipboard.writeText("Will implement later!")
    })  
})