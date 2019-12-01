<?php

/* ******************************************************************** */
/*                                                                      */
/*   [Config] routes.php                                                */
/*                                                                      */
/*   Author: Snkh <inquiries@snkh.me>                                   */
/*                                                                      */
/*   Created: 23/08/2019 13:45:39 by Snkh                               */
/*   Updated: 30/08/2019 19:17:25 by Snkh                               */
/*                                                                      */
/*   Snkh Inc. (c) 2019 - GPL 3.0                                       */
/*                                                                      */
/* ******************************************************************** */

Router::connect('/qatanews/qatanews/user_subscribe',    array('controller' => 'QataNews', 'action' => 'user_subscribe',  'plugin' => 'QataNews'));

Router::connect('/admin/qatanews/export',               array('controller' => 'QataNews', 'action' => 'export',  'plugin' => 'QataNews'));
Router::connect('/admin/qatanews/subscribe_everyone',   array('controller' => 'QataNews', 'action' => 'forceEveryoneSubscribe',  'plugin' => 'QataNews'));