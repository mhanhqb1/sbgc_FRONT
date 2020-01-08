<?php

namespace App\View\Helper;
use Cake\Routing\Router;

/**
 * Render paging html
 * 
 * @package View.Helper
 * @created 2014-11-29
 * @version 1.0
 * @author thailvn
 * @copyright Oceanize INC
 */
class PaginateHelper extends AppHelper {

    /** @var array $helpers Use helpers */
    public $helpers = array('Html');

    /**
     * Render paging html
     *     
     * @author thailvn
     * @param int $total Total record
     * @param int $limit Page size
     * @param int $displayPage How page link showing
     * @param string $url If empty then get current url     
     * @return string Paging html 
     */
    function render($total = 0, $limit = 0, $function = '', $sPage = 1, $displayPage = 10, $url = '') {
        $page = !empty($this->request->getQuery('page')) ? $this->request->getQuery('page') : $sPage;
        if (empty($url)) {
            $param = array();
            foreach ($this->request->getQuery() as $name => $value) {
                if ($name != 'page') {
                    if (is_array($value)) {
                        foreach ($value as $item) {
                            $param[] = "{$name}[]={$item}";
                        }
                    } else {
                        $param[] = "{$name}={$value}";
                    }
                }
            }
            $homeUrl = Router::fullBaseUrl() . USE_SUB_DIRECTORY;
            $url = $homeUrl.'/'. $this->request->url . '?';
            if (!empty($param)) {
                $url = $url . implode('&', $param) . '&';
            }
        }
        $nav = '';
        $totalPage = ceil($total / $limit);
        $delta = ceil($displayPage / 2);
        if ($totalPage > $displayPage) {
            if ($page <= $delta) {
                $start = 1;
                $end = $displayPage;
            } elseif ($page >= $totalPage - $delta) {
                $start = $totalPage - $displayPage + 1;
                $end = $totalPage;
            } else {
                $start = $page - $delta + 1;
                $end = $page + $delta;
            }
        } else {
            $start = 1;
            $end = $totalPage;
        }
        $html = '';
        if ($end > 1) {
            $html = '<div class="wp-pagenavi" role="navigation">';
            $html .= '<span class="pages">Page '.$page.' of '.$totalPage.'</span>';
            for ($i = $start; $i <= $end; $i++) {
                if ($i == $page) {
                    $nav .= "<span aria-current='page' class='current'>{$i}</span>";
                } else {
                    if (!empty($function)) {
                        $nav .= "<li><a onclick='".$function."({$i})'>{$i}</a></li>";
                    } else {
                        $nav .= "<a class='page larger' title='Page {$i}' href='{$url}page={$i}' data-wpel-link='internal'>{$i}</a>";
                    }
                }
            }
            if ($page > 1) {
                if (!empty($function)) {
                    $prev = "<li class=\"prev\"><a onclick='".$function."(".($page - 1).")'>← </a></li>";
                } else {
                    $prev = "<a class='first' href='{$url}page=".($page - 1)."' data-wpel-link='internal'>« Prev</a>";
                }
            } else {
                $prev = "";
            }
            if ($page < $totalPage) {
                if (!empty($function)) {
                    $next = "<li class=\"next\"><a onclick='".$function."(".($page + 1).")'> →</a></li>";
                } else {
                    $next = "<a class='first' href='{$url}page=".($page + 1)."' data-wpel-link='internal'>Next »</a>";
                }
            } else {
                $next = "";
            }

            $html .= "{$prev}";
            $html .= "{$nav}";
            $html .= "{$next}";
            $html .= '</ul>';
            $html .= '</div>';
        }

        
        return $html;
    }

}
