<?php

namespace LoadTemplate;

/**
 * interface to all class object
 * @param // load
 * 
 */

interface LoadTemplates {
    public function loadTemplate(string  $data);
}


//> Implement the interface

class LoadTemplate implements LoadTemplates {
    public $templa;
    protected $smarty;
    private $status;
    public function loadTemplate(string $templa) {
        global $smarty;
        $this->templa = $templa;
        $status = http_response_code();
        if ($status !== 200) {
            print_r('Error with the server' . ' ' . http_response_code(404));
        } else {
            $smarty->display(TEMPLATE_PREFIX . "/{$this->templa}" . TEMPLATE_POST_FIX);
        }
    }
}

//<


?>