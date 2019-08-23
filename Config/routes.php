<?php

/* ******************************************************************** */
/*                                                                      */
/*   [Config] routes.php                                                */
/*                                                                      */
/*   Author: Snkh <inquiries@snkh.me>                                   */
/*                                                                      */
/*   Created: 23/08/2019 13:45:39 by Snkh                               */
/*   Updated: 23/08/2019 22:38:26 by Snkh                               */
/*                                                                      */
/*   Snkh Inc. (c) 2019 - GPL 3.0                                       */
/*                                                                      */
/* ******************************************************************** */

Router::connect('/newsletter/user_subscribe',               array('controller' => 'newsletter', 'action' => 'user_subscribe',  'plugin' => 'newsletter'));

Router::connect('/admin/newsletter/export',                 array('controller' => 'newsletter', 'action' => 'export',  'plugin' => 'newsletter'));
Router::connect('/admin/newsletter/subscribe_everyone',     array('controller' => 'newsletter', 'action' => 'forceEveryoneSubscribe',  'plugin' => 'newsletter'));