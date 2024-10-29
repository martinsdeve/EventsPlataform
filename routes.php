<?php 
require "./controllers/HomeController.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


// if($method === "GET" && $uri == "/") {
//     indexHome();
// }
// elseif($method === "GET" && $uri == "/cliente/login") {
//     echo "Página de Login";
// }
// else {
//     http_response_code(404);
//     echo "Página não Encontrada!!!";
// }

$routes = [
    "GET" => [
        "/" => "indexHome",
    ]
];


if(isset($routes[$method][$uri])) {
    $function = $routes[$method][$uri];
    $function();
}
else {
    http_response_code(404);
    echo "Página não Encontrada!!!";
}


// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

