$(document).ready(function () {

    let all_vehicles;

    function getRandomInt(min, max) {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    function filter_in_vehicles(array, bool) {
        let str = '';
        if (bool) {
            array.filter(
                (v) => {
                    if (v.name.includes($("#search_vehicle").val())) {
                        str += '<div class="col-md-4 col-sm-6 col-xs-12"><div class="featured-item"><div class="thumb"><div class="thumb-img"><img src="img/product-' + getRandomInt(1, 6) + '-720x480.jpg" alt=""></div><div class="overlay-content"><strong><i class="fa fa-dashboard"></i>' + v.km + 'km</strong> &nbsp;&nbsp;&nbsp;&nbsp;<strong><i class="fa fa-cube"></i>' + v.cc + 'cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;<strong><i class="fa fa-cog"></i>' + v.gearbox + '</strong></div></div><div class="down-content"><h4>' + v.name + '</h4><br><p>' + v.power + ' hp /' + v.fuel + ' /' + v.year + ' /' + v.type + '</p><p><!--<span><del><sup>$</sup>11999.00 </del> <strong><sup>$</sup>11779.00</strong></span>--><span><strong>$' + v.price + '</strong></span></p><div class="text-button"><a href="car-details.php">Ver más</a></div></div></div></div>';
                    }

                }
            );
        }
        else {
            array.filter(
                (v) => {
                    str += '<div class="col-md-4 col-sm-6 col-xs-12"><div class="featured-item"><div class="thumb"><div class="thumb-img"><img src="img/product-' + getRandomInt(1, 6) + '-720x480.jpg" alt=""></div><div class="overlay-content"><strong><i class="fa fa-dashboard"></i>' + v.km + 'km</strong> &nbsp;&nbsp;&nbsp;&nbsp;<strong><i class="fa fa-cube"></i>' + v.cc + 'cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;<strong><i class="fa fa-cog"></i>' + v.gearbox + '</strong></div></div><div class="down-content"><h4>' + v.name + '</h4><br><p>' + v.power + ' hp /' + v.fuel + ' /' + v.year + ' /' + v.type + '</p><p><!--<span><del><sup>$</sup>11999.00 </del> <strong><sup>$</sup>11779.00</strong></span>--><span><strong>$' + v.price + '</strong></span></p><div class="text-button"><a href="car-details.php">Ver más</a></div></div></div></div>';
                }
            );

        }

        if (str == '') {
            str = '<div style="text-align:center;"><h3>No hay resultados para su búsqueda</h3></div>';
        }

        $('#view_vechicles').html(str);

    }

    $.ajax({
        async: 'false',
        url: "utils/filter_vehicles.php",
        method: "POST",
        dataType: "json",
        data: {},
        success: function (data) {
            filter_in_vehicles(data, false);
            all_vehicles = data;
        }
    });

    $("#search_vehicle").keyup(function (e) {
        filter_in_vehicles(all_vehicles, true);

    });
});