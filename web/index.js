$(document).ready(function () {
	$("body").delegate("#product", "click", function (event) {
        event.preventDefault();
        var p_id = $(this).attr('pid');
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {addToProduct: 1, proId: p_id},
            success: function (data) {
                $("#product_msg").html(data);
                cart_count();
            }
        })
    })
})