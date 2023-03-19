<?php

require 'loadTemplate.php';

define('PATH_PREFIX', "../src/controllers/");
define('PATH_POST_PREFIX', 'Controller.php');

// Use the template
$template = 'default';

// Path to templates
define('TEMPLATE_PREFIX', "../resources/{$template}");
define('TEMPLATE_POST_FIX', '.tpl');

// Path to web template
define('TEMPLATE_WEB_PATH', '../src/templates/default');

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

