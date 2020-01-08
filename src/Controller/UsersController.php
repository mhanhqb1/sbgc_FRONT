<?php

/*
 * Home page
 */

namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;
use App\Form\RegisterForm;
use Cake\Event\Event;

class UsersController extends AppController {
     /**
     * Before filter event
     * @param Event $event
     */
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow();
    }
    
    public function login() {
        if ($this->isAuthorized()) {
            return $this->redirect($this->BASE_URL);
        }
        include ('Bus/Users/login.php');
    }
    
    public function register() {
        if ($this->isAuthorized()) {
            return $this->redirect($this->BASE_URL);
        }
        include ('Bus/Users/register.php');
    }
    
    public function logout() {
        include ('Bus/Users/logout.php');
    }
}