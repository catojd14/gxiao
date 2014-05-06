<?php


class UserChangePasswordTest extends PHPUnit_Framework_TestCase
{
    public function testCanCreateFrom() 
    {
        $u = new Model_User();
        $form = new Form_UserChangePassword($u);
        $this->assertType('Form_UserChangePassword', $form);
    }
    
    public function testCheckElementsExist()
    {
        $u = new Model_User();
        $form = Form_UserChangePassword($u);
        
        $this->assertType('Zend_Form_Element_Password', $form->getElement('currentPassword'));
    }
}

?>
