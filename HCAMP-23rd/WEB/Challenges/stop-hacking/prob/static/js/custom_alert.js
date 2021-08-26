(function(proxied) {
    window.alert = function() {
        var $new_alert = $(`
        <div class="alert">
            <p>${arguments[0]}</p>
        </div>
        `);
        if (arguments[1]) {
            if (arguments[1].title) {
                $new_alert.html(
                    '<b>' + arguments[1].title + ' </b> '
                    + $new_alert.text()
                );
            }
            if (arguments[1].color) {
                $new_alert.css('background-color', arguments[1].color);
                $new_alert.css('box-shadow', '1px 1px 10px ' + arguments[1].color);
            }
        }
        $(document.body).append($new_alert);
        setTimeout(function() {
            $new_alert.remove();
        }, 3000)
    };
})(window.alert);