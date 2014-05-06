<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Signup
 *
 * @author Guoyi Xiao
 */
class App_Action_Helper_Signup 
extends Zend_Controller_Action_Helper_Abstract
{
    protected $view;
    public function preDispatch() {
        $view = $this->getView();
        if ($this->getRequest()->getParam('loggedin',false))
       {
           $view->signup = "You are logged in";
       }
        else {
           $view->signup = 'Sign up to our site!';
       }
    }
    
    public function  getView() {
        if(null !=$this->view){
            return $this->view;
        }
        
        $controller = $this->getActionController();
        $this->view = $controller->view;
        return $this->view;
    }
}

?>
