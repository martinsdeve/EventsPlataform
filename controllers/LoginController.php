<?php 

function indexLogin() {
    require __DIR__ . "/../views/Home.php";
}

function loginCliente() {
    echo json_encode([
        "User" => "Olá"
    ]);
}