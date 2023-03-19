<?php

namespace LoadTemplate;
interface LoadTemplates {
    public function loadTemplate(string  $data);
}

class LoadTemplate implements LoadTemplates {
    public $templa;
    protected $smarty;
    public function loadTemplate(string $templa) {
        global $smarty;
        $this->templa = $templa;
        $smarty->display(TEMPLATE_PREFIX. "/{$this->templa}".TEMPLATE_POST_FIX);
    }
}

?>