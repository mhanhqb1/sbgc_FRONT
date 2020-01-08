<?php

/* 
 * Home page
 */

namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;

class PremiumController extends AppController {
    
    /**
     * List cate
     */
    public function index($slug = '') {
        $limit = 32;
        $cateName = 'Premium';
        $params = $this->getParams(array(
            'is_premium' => 1,
            'limit' => $limit,
            'get_tags' => 1,
            'page' => 1
        ));
        $pageTitle = $cateName;
        
        // Call API
        $result = Api::call(Configure::read('API.url_posts_list'), $params);
        $data['home_posts']['data'] = !empty($result['data']) ? $result['data'] : array();
        $data['home_posts']['total'] = !empty($result['total']) ? $result['total'] : 0;
        $data['home_tags'] = !empty($result['tags']) ? $result['tags'] : array();
        
        // Set data
        $this->set(compact(
            'data',
            'limit',
            'params',
            'cateName',
            'pageTitle'
        ));
    }
}