<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Counter.php';
    require_once __DIR__.'/../src/Defaults.php';

    session_start();
    $_SESSION['default']= new Defaults();

    $app = new Silex\Application();
    $app['debug']=true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render("home.html.twig");
    });

    $app->get("/jabberwocky", function() use ($app) {
        return $app['twig']->render("jabberwocky.html.twig", array("default" => $_SESSION['default']));
    });

    $app->get("/gettysburg", function() use ($app) {
        return $app['twig']->render("gettysburg.html.twig",array("default" => $_SESSION['default']));
    });

    $app->get("/stairway", function() use ($app) {
        return $app['twig']->render("stairway.html.twig",array("default" => $_SESSION['default']));
    });

    $app->post("/display", function() use ($app) {
        $counter = new Counter($_POST['word'],$_POST['phrase']);
        return $app['twig']->render("display.html.twig",array('counter' => $counter));
    });

    return $app;
?>
