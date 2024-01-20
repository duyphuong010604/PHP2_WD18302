<?php



$app = new Application();

$app->router->get("/", function () {
    return "Hello Word";
});

$app->run();

