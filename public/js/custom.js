/**
 * Created by Pradeep on 7/3/2017.
 */

$(document).ready(function () {

    $('.message a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");

    });
});
