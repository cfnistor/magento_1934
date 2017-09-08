<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017-09-08
 * Time: 7:46 AM
 */

class Alanstormdotcom_Helloworld_IndexController extends Mage_Core_Controller_Front_Action {
    public function indexAction() {
        echo 'Hello Index!';
    }

    public function goodbyeAction() {
        echo 'Goodbye World!';
    }

    public function paramsAction() {
        echo '<dl>';
        foreach ($this->getRequest()->getParams() as $key => $value) {
            echo '<dt><strong>Param: </strong>'.$key.'</dt>';
            echo '<dl><strong>Value: </strong>'.$value.'</dl>';
        }
        echo '</dl>';
    }
}