$(function () {
    Bounceback.init({
        aggressive: true,
        storeName: "bounceback-visited",

        onBounce: function() {
            var $exitModal = document.getElementById('exitModal');
            $('#exitModal').fadeIn('slow');
        }
    });

    document.getElementById('continueWatch').onclick = function() {
        document.getElementById('exitModal').style.display = 'none';
    }
})