<?php

use App\Lib\Api;
use Cake\Core\Configure;
use App\Form\RegisterForm;

//$this->Flash->error("error");

if ($this->request->is('post')) {
    // Trim data
    $error = false;
    $data = $this->request->getData();
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);
    }
    $validate = new RegisterForm();
    $validate->validate($data);
    $errors = $validate->errors();
    if (!$errors) {
        $data['get_login'] = 1;
        $data['name'] = $data['fullname'];
        $user = Api::call(Configure::read('API.url_users_addupdate'), $data);
        if (Api::getError() || empty($user)) {
            $this->Flash->error('Lỗi! Đăng ký không thành công');
        } else {
            // Auth
            unset($user['password']);
            $this->Auth->setUser($user);
            return $this->redirect($this->BASE_URL);
        }
    } else {
        $this->set(array('errors' =>$errors));
    }
}
