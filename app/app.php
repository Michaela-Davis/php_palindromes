<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Pal.php";

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('homeView.html.twig');
    });

    $app->post("/result", function() use ($app) {
        $newPal = new Pal($_POST['input_one']);

        $result = $newPal->PalChecker();


        return $app['twig']->render("result.html.twig", array("result"=>$result));
    });

    return $app;
?>
