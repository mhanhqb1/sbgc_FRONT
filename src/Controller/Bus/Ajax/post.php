<?php
use App\Lib\Api;
use Cake\Core\Configure;

$data = array();
$params = $this->request->data();
$params['limit'] = 5;
$sortBy = 'created-desc';
$created = 0;

if ($params['action'] == 'wpt_widget_content') {
    if (strpos($params['tab'], 'popular') > -1) {
        $sortBy = 'total_view-desc';
        if ($params['tab'] == 'popular') {
            $created = time() - 7*24*60*60;
        }
        if ($params['tab'] == 'popular-3') {
            $created = time() - 30*24*60*60;
        }
    }
    if ($params['tab'] == 'comments-9') {
        $sortBy = 'total_like-desc';
    }
    $params['sort'] = $sortBy;
    $params['created'] = $created;
    $data = Api::call(Configure::read('API.url_posts_all'), $params);
} elseif ($params['action'] == 'thumbs_rating_add_vote') {
    $params['id'] = $params['postid'];
    if ($params['type'] == 2) {
        $data = Api::call(Configure::read('API.url_posts_adddislike'), $params);
    } else {
        $data = Api::call(Configure::read('API.url_posts_addlike'), $params);
    }
    if (!empty($data)) {
        echo "<div  class='thumbs-rating-container' id='thumbs-rating-{$data['id']}' data-content-id='{$data['id']}'><span class='thumbs-rating-up thumbs-rating-voted' onclick='thumbs_rating_vote({$data['id']}, 1);'><i class='fa fa-thumbs-o-up'></i> {$data['total_like']}</span> <span class='thumbs-rating-down' onclick='thumbs_rating_vote({$data['id']}, 2);'><i class='fa fa-thumbs-o-down'></i> {$data['total_dislike']}</span><span class='thumbs-rating-already-voted' data-text='You already voted!'></span></div>"; 
    }
    exit();
} else {
    echo '<pre>';
    print_r($params);
    die();
}
$this->set('data', $data);
?>
