$(document).ready(function () {

    $("#search_vehicle").keyup(function (e) {
            $.ajax({
                url: "utils/filter_vehicles.php",
                method: "POST",
                dataType: "json",
                data: { name: $("#search_vehicle").val() },
                success: function (data) {
                    $('#view_vechicles').html(data);
                }
            });
    });
});