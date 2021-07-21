<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);

class Wdevelop_HelloWorld_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction() {
        echo '<h1>Hello World!</h1>';
    }
}
