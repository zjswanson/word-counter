<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Counter.php';

    $app = new Silex\Application();
    $app['debug']=true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render("home.html.twig");
    });

    $app->post("/display", function() use ($app) {
        $counter = new Counter($_POST['word'],$_POST['phrase']);
        return $app['twig']->render("display.html.twig",array('counter' => $counter));
    });

    return $app;
?>
