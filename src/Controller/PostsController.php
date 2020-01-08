<?php

/* 
 * Home page
 */

namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;
use Cake\Event\Event;

class PostsController extends AppController {
     /**
     * Before filter event
     * @param Event $event
     */
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow();
    }
    
    /**
     * Cate detail
     */
    public function index($slug = '') {
        $data = array();
        $pageImage = '';
        $pageTitle = '';
        $pageDescription = '';
        $pageKeyword = '';

        if (!empty($slug)) {
            $data = Api::call(Configure::read('API.url_posts_detail'), array(
                'slug' => $slug,
                'get_related_posts' => 1,
                'get_tags' => 1,
                'get_top_like_posts' => 1
            ));
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
            'pageKeyword'
        ));
    }
}