<?php

class Magestore_Lenar_Adminhtml_IndexController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->_title($this->__('Hello Admin'));
        $this->loadLayout();
        $this->_setActiveMenu('hello');
        $this->renderLayout();
    }
}
