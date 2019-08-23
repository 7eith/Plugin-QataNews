<?php 
/* ******************************************************************** */
/*                                                                      */
/*   [SQL] schema.php                                                   */
/*                                                                      */
/*   Author: Snkh <inquiries@snkh.me>                                   */
/*                                                                      */
/*   Created: 23/08/2019 14:51:02 by Snkh                               */
/*   Updated: 23/08/2019 21:24:08 by Snkh                               */
/*                                                                      */
/*   Snkh Inc. (c) 2019 - GPL 3.0                                       */
/*                                                                      */
/* ******************************************************************** */

class NewsletterAppSchema extends CakeSchema {

    public $file = 'schema.php';

    public function before($event = []) {
        return true;
    }

    public function after($event = []) {}

    public $users = [
        'newsletter' => array('type' => 'boolean', 'null' => true, 'default' => null)
    ];
}