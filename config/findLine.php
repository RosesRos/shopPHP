<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Roses\Line;

/**
 * Description of findLine
 *
 * @author fabio
 * @param object method findLine
 * 
 */

trait FindLine {
    public $str;
    public function findLine($str, int $index = 0) {
        $this->str = $str;
        $this->index = $index;
        
        if (!file_exists($this->str)) {
            return null;
        }
    }
}   

class Line {
    use FindLine;
    
    const MODE = 'r';
    public $pathToFile;
    public $index;
    
    public function findLine($pathToFile, $index) {
        $this->pathToFile = $pathToFile;
        $this->index = $index;
        
        $stream = fopen($this->pathToFile, self::MODE);
        $line = null;
        
        for ($i = 0; $i <= $this->index; $i++) {
            if ($this->index > 0) {
                fgets($stream);
            } else {
                fgets($stream);
            }
            
            if ($i == $this->index) {
                $line = fgets($stream);
            }
        }
        fclose($stream);
        return $line;
    }
}
