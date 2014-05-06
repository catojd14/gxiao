<?php

class UserChangePassword extends Zend_Form 
{   
    /*
     * @var \Model_User
     */
    protected $_user;
    
    public function __construct(\Model_User $user,$options = null) {
        parent::__construct($options);
        $this->_user = $user;
                
    }
}

?>
