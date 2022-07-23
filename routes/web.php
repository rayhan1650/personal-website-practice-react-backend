<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/chartData','ChartDataController@onAllSelect');
$router->get('/clientReview','ClientReviewController@onAllSelect');
$router->post('/contactSend','ContactController@onContactSend');

$router->get('/courseHome','CourseController@onSelectFour');
$router->get('/courseAll','CourseController@onSelectAll');
$router->post('/courseDetails','CourseController@onSelectDetails');

$router->get('/footer','FooterController@onSelect');
$router->get('/information','InformationEtcController@onSelect');
$router->get('/services','ServicesController@onSelect');

$router->get('/projectsHome','ProjectsController@onSelectThree');
$router->get('/projectsAll','ProjectsController@onSelectAll');
$router->post('/projectsDetails','ProjectsController@onSelectDetails');

$router->get('/videoHome','VideoController@onSelectAll');
