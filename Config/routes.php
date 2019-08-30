<?php

/* ******************************************************************** */
/*                                                                      */
/*   [Config] routes.php                                                */
/*                                                                      */
/*   Author: Snkh <inquiries@snkh.me>                                   */
/*                                                                      */
/*   Created: 23/08/2019 13:45:39 by Snkh                               */
/*   Updated: 30/08/2019 17:50:18 by Snkh                               */
/*                                                                      */
/*   Snkh Inc. (c) 2019 - GPL 3.0                                       */
/*                                                                      */
/* ******************************************************************** */

Router::connect('/newsletter/user_subscribe',               array('controller' => 'qatanews', 'action' => 'user_subscribe',  'plugin' => 'qatanews'));

Router::connect('/admin/newsletter/export',                 array('controller' => 'qatanews', 'action' => 'export',  'plugin' => 'qatanews'));
Router::connect('/admin/newsletter/subscribe_everyone',     array('controller' => 'qatanews', 'action' => 'forceEveryoneSubscribe',  'plugin' => 'qatanews'));