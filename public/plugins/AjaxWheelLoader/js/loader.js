$(document).ready(function () {
        $("body").append('<div class="modalReda"></div>');
    }
);

$body = $("body");

$(document).on({
    ajaxStart: function() { $body.addClass("loading");    },
        ajaxStop: function() { $body.removeClass("loading"); }
});