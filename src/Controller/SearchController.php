<?php

/* 
 * Home page
 */

namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;
use Cake\Event\Event;

class SearchController extends AppController {
     /**
     * Before filter event
     * @param Event $event
     */
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow();
    }
    
    /**
     * List cate
     */
    public function index() {
        // Init
        $limit = 32;
        
        $params = $this->getParams(array(
            'limit' => $limit,
            'get_tags' => 1,
            'page' => 1
        ));
        $cateName = !empty($params['s']) ? $params['s'] : '';
        $pageTitle = 'Tìm kiếm: '.$cateName;
        
        // Call API
        $result = Api::call(Configure::read('API.url_posts_list'), $params);
        $data['home_posts']['data'] = !empty($result['data']) ? $result['data'] : array();
        $data['home_posts']['total'] = !empty($result['total']) ? $result['total'] : 0;
        $data['home_tags'] = !empty($result['tags']) ? $result['tags'] : array();
        
        // Set data
        $this->set(compact(
            'data',
            'limit',
            'total',
            'params',
            'cateName',
            'pageTitle'
        ));
    }
    
    /**
     * Cate detail
     */
    public function detail($slug = '') {
        $data = array();
        $pageImage = '';
        $pageTitle = '';
        $pageDescription = '';
        $pageKeyword = '';
        $newPosts = array();

        if (!empty($slug)) {
            $data = Api::call(Configure::read('API.slug_posts_detail'), array(
                'slug' => $slug,
                'get_new_posts' => 1
            ));
            $newPosts = !empty($data['new_posts']) ? $data['new_posts'] : array();
            $pageImage = !empty($data['image']) ? $data['image'] : '';
            $pageTitle = !empty($data['name']) ? $data['name'] : '';
            $pageDescription = !empty($data['seo_description']) ? $data['seo_description'] : '';
            $pageKeyword = !empty($data['seo_keyword']) ? $data['seo_keyword'] : '';
        }
        $this->set(compact(
            'data',
            'pageImage',
            'pageTitle',
            'pageDescription',
            'pageKeyword',
            'newPosts'
        ));
    }
}