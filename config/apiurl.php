<?php

/**
 * API's Url
 */
use Cake\Core\Configure;

Configure::write('API.Timeout', 60);
Configure::write('API.secretKey', 'lyonabeauty');
Configure::write('API.rewriteUrl', array());

Configure::write('API.url_settings_general', 'settings/general');
Configure::write('API.url_settings_gethomedata', 'settings/gethomedata');

Configure::write('API.url_posts_list', 'posts/list');
Configure::write('API.url_posts_all', 'posts/all');
Configure::write('API.url_posts_detail', 'posts/detail');
Configure::write('API.url_posts_addview', 'posts/addview');
Configure::write('API.url_posts_addlike', 'posts/addlike');
Configure::write('API.url_posts_adddislike', 'posts/adddislike');

Configure::write('API.url_orders_addupdate', 'orders/addupdate');

Configure::write('API.url_contacts_addupdate', 'contacts/addupdate');
Configure::write('API.url_pages_detail', 'pages/detail');

Configure::write('API.url_users_addupdate', 'users/addupdate');
Configure::write('API.url_users_login', 'users/login');