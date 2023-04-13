<?php

require 'loadTemplate.php'; // Get the load template function
require 'findLine.php'; // Get a line of any files

define('PATH_PREFIX', "src/controllers/");
define('PATH_POST_PREFIX', 'Controller.php');


// Use the template
$template = 'default';

// Path to templates
define('TEMPLATE_PREFIX', "resources/{$template}");
define('TEMPLATE_POST_FIX', '.tpl');

// Path to web template
define('TEMPLATE_WEB_PATH', "src/templates/{$template}");


/** 
 * @package  phpdotenv library
 * 
 * Full path to vluca/phpdotenv
 */

require dirname(__DIR__) . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable('./');
$dotenv->load();


$db = [
    'db_host' => $_SERVER['DB_HOST'],
    'db_username' => $_ENV['DB_USERNAME'],
    'db_password' => $_ENV['DB_PASSWORD'],
    'db_database' => $_ENV['DB_DATABASE']
];


/**
 * 
 * Set up smarty
 * @package smarty template
 * 
 * Full path to Smarty class
 */

require dirname(__DIR__) . '/vendor/autoload.php';

class Smarty_Guest extends Smarty {
    
    public function __construct() {

        parent::__construct();
        $this->setTemplateDir(TEMPLATE_PREFIX);
        $this->setCompileDir('../public/templates_c');
        $this->setCacheDir('../public/cache');

        $this->assign('templateWebPath', TEMPLATE_WEB_PATH);
    }
}

$smarty = new Smarty_Guest();
$load = new LoadTemplate\LoadTemplate();


/**
 * @param class Line
 */

$line = new Roses\Line\Line();

