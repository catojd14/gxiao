<?php
    //Zend_Layout::startMvc(APPLICATION_PATH. '/layouts/scripts');
    //$view= Zend_Layout::getMvcInstance()->getView();
    
    
    
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function  _initActionHelpers() 
    {
        Zend_Controller_Action_HelperBroker::addHelper(
                new App_Action_Helper_Signup());
    }
   
}

