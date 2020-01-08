<?php

/* 
 * Home page
 */

namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;
use Cake\Event\Event;

class HomeController extends AppController {
     /**
     * Before filter event
     * @param Event $event
     */
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow();
    }
    
    /**
     * People top page
     */
    public function index() {
        $data = array();
        $params = $this->getParams(array(
            'limit' => 32,
            'page' => 1
        ));
        $data = Api::call(Configure::read('API.url_settings_gethomedata'), $params);
        $this->set('data', $data);
        $this->set('params', $params);
    }
}