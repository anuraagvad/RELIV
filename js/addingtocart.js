$(document).ready(function(){
    $('.card-btn').click(function(){
        let clickBtnValue = $(this).attr('name')

        $.ajax({
            method: "POST",
            url: "../PHP/addingtocart.php",
            data:({ text:clickBtnValue})
        });
    });
});