<?php
use App\Lib\Api;
use Cake\Core\Configure;

$data = array();
$params = $this->request->data();
$data = Api::call(Configure::read('API.url_posts_addview'), $params);
exit();
?>
