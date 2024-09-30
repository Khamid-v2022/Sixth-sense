var hours = 0;
var minutes = 30;
var seconds = 0;
var timerInterval = null;

$(function () {
    Bounceback.init({
        aggressive: true,
        storeName: "bounceback-visited",

        onBounce: function() {
            $("#waitModal").modal("show");
        }
    });

    var timerInterval = setInterval(countdown, 1000);
})


 function countdown() {
    if (seconds > 0) {
        seconds--;
    } else {
        if (minutes > 0) {
            minutes--;
            seconds = 59;
        } else {
            if (hours > 0) {
                hours--;
                minutes = 59;
                seconds = 59;
            } else {
                clearInterval(timerInterval);
                return;
            }
        }
    }

    $('#countdown_hour').html(hours.toString().padStart(2, '0'));
    $('#countdown_minute').html(minutes.toString().padStart(2, '0'));
    $('#countdown_second').html(seconds.toString().padStart(2, '0'));
}
