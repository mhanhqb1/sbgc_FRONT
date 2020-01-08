<?php

/* 
 * Ajax controller
 */

namespace App\Controller;
use Cake\Event\Event;

class AjaxController extends AppController {
     /**
     * Before filter event
     * @param Event $event
     */
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow();
    }
    
    public function initialize() {
        parent::initialize();
//        $this->autoRender = false;
    }
    
    /**
     * Product detail
     */
    public function productdetail() {
        $data = $this->request->data();
        $this->set('data', $data);
    }
    
    /**
     * Add to cart
     */
    public function addtocart() {
        $this->autoRender = false;
        include ('Bus/Ajax/addtocart.php');
    }
    
    /**
     * Update cart
     */
    public function post() {
        include ('Bus/Ajax/post.php');
    }
    
    /**
     * Update cart
     */
    public function postview() {
        $this->autoRender = false;
        include ('Bus/Ajax/postview.php');
    }
}