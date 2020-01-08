<?php

/*
 * Home page
 */

namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;
use App\Form\RegisterForm;

class RegisterController extends AppController {
    /**
     * List cate
     */
    public function index() {
        if ($this->request->is('post')) {
            $errors = array();
            $params = $this->request->getData();
            $params['admin_type'] = 9;
            $validate = new RegisterForm();
            $validate->validate($params);
            $errors = $validate->errors();
            if(empty($error)){
                $data = Api::call(Configure::read('API.url_admin_add'), $params);
                dd($data);
            }
            $this->set(array('errors' =>$errors));
        }
    }
}