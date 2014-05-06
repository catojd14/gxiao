<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Notice
 *
 * @author Guoyi Xiao
 */
class App_View_Helper_Notice extends Zend_View_Helper_Abstract{
    public  $startColour = 16764142;
    public function notice($message ='no message')
    {
        $this->startColour -= 6000;
        return "<div style='padding: 4px; text-align: center; background: #".dechex($this->startColour)."' > $message</div>";
    }
}

?>
