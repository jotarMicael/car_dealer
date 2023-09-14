<?php
/*include 'class/Product.php';
$product = new Product();
if (isset($_POST["action"])) {
    $html = $product->searchProducts($_POST);
    $data = array(
        "html" => $html,
    );
    echo json_encode($data);
}*/

function filter($var)
{

    return (str_contains($var['name'], strtoupper($_POST['name'])));
}

$data = array(
    array("name" => "FORD", "year" => "2019", "color" => "Azul", "km" => "30.000", "power" => "95", "cc" => "1800", "gearbox" => "Manual", "fuel" => "Diesel", "description" => "4 puertas", "type" => "Usado", "price" => "11999.00", "images" => array("Imagen1", "Imagen2", "Imagen3", "Imagen4")),
    array("name" => "CHEVROLET", "year" => "2015", "color" => "Rojo", "km" => "100.000", "power" => "195", "cc" => "1500", "gearbox" => "Manual", "fuel" => "Nafta Súper", "description" => "Cierre centralizado", "type" => "Nuevo", "price" => "12999.00", "images" => array("Imagen1", "Imagen2", "Imagen3", "Imagen4")),
    array("name" => "TAUNUS", "year" => "2016", "color" => "Verde", "km" => "10.000", "power" => "91", "cc" => "1300", "gearbox" => "Manual", "fuel" => "Diesel", "description" => "Automático", "type" => "Usado", "price" => "21999.00", "images" => array("Imagen1", "Imagen2", "Imagen3", "Imagen4")),
    array("name" => "KIA", "year" => "2020", "color" => "Amarillo", "km" => "200.000", "power" => "85", "cc" => "2000", "gearbox" => "Automático", "fuel" => "Eléctrico", "description" => "Estacionamiento asistido", "price" => "31999.00", "type" => "Usado", "images" => array("Imagen1", "Imagen2", "Imagen3")),
    array("name" => "FORD", "year" => "2019", "color" => "Azul", "km" => "20.000", "cc" => "1600", "power" => "115", "gearbox" => "Manual", "fuel" => "Híbrido", "description" => "4 puertas", "type" => "Nuevo", "price" => "33999.00", "images" => array("Imagen1", "Imagen2", "Imagen3", "Imagen4")),
    array("name" => "CHEVROLET", "year" => "2015", "color" => "Rojo", "km" => "5.000", "cc" => "2000", "power" => "221", "gearbox" => "Automático", "fuel" => "Híbrido", "description" => "Cierre centralizado", "price" => "23999.00", "type" => "Nuevo", "images" => array("Imagen1", "Imagen2", "Imagen3", "Imagen4")),
    array("name" => "TAUNUS", "year" => "2016", "color" => "Verde", "km" => "50.000", "cc" => "2500", "power" => "125", "gearbox" => "Automático", "fuel" => "Eléctrico", "description" => "Automático", "price" => "24999.00", "type" => "Usado", "images" => array("Imagen1", "Imagen2", "Imagen3", "Imagen4")),
    array("name" => "KIA", "year" => "2020", "color" => "Amarillo", "km" => "72.000", "cc" => "1800", "power" => "77", "gearbox" => "Manual", "fuel" => "Diesel", "description" => "Estacionamiento asistido", "price" => "19999.00", "type" => "Usado", "images" => array("Imagen1", "Imagen2", "Imagen3"))
);

$filter_data = '';
foreach (array_filter($data, "filter") as $v) {
    $filter_data .= '<div class="col-md-4 col-sm-6 col-xs-12"><div class="featured-item"><div class="thumb"><div class="thumb-img"><img src="img/product-' . rand(1, 6) . '-720x480.jpg" alt=""></div><div class="overlay-content"><strong><i class="fa fa-dashboard"></i>' . $v['km'] . 'km</strong> &nbsp;&nbsp;&nbsp;&nbsp;<strong><i class="fa fa-cube"></i>' . $v['cc'] . 'cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;<strong><i class="fa fa-cog"></i>' . $v['gearbox'] . '</strong></div></div><div class="down-content"><h4>' . $v['name'] . '</h4><br><p>' . $v['power'] . ' hp /' . $v['fuel'] . ' /' . $v['year'] . ' /' . $v['type'] . '</p><p><!--<span><del><sup>$</sup>11999.00 </del> <strong><sup>$</sup>11779.00</strong></span>--><span><strong>$' . $v['price'] . '</strong></span></p><div class="text-button"><a href="car-details.php">Ver más</a></div></div></div></div>';

}
echo json_encode($filter_data);
?>