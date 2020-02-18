<?php
/**
 * index.php
 * 
 * Example of use
 */

// Go Back
chdir('..');
require_once 'core.php';
require_once 'models/ruter.php';
require_once 'models/utils.php';

$app = new Application();

$app->get('/', [], function ($res) {

    // TODO? : Mix a template engine (twig)

    echo file_get_contents('views/test.html');

});

$app->execute();
