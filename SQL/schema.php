<?php 
/* ******************************************************************** */
/*                                                                      */
/*   [SQL] schema.php                                                   */
/*                                                                      */
/*   Author: Snkh <inquiries@snkh.me>                                   */
/*                                                                      */
/*   Created: 23/08/2019 14:51:02 by Snkh                               */
/*   Updated: 30/08/2019 18:53:36 by Snkh                               */
/*                                                                      */
/*   Snkh Inc. (c) 2019 - GPL 3.0                                       */
/*                                                                      */
/* ******************************************************************** */

class QataNewsAppSchema extends CakeSchema {

    public $file = 'schema.php';

    public function before($event = []) {
        return true;
    }

    public function after($event = []) {}

    public $users = [
        
        /**
         * State: 
         *  - 0 => new user not seen PopUp
         *  - 1 => confirmed
         *  - 2 => dont want
         */

        'newsletter' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 1, 'unsigned' => false)
    ];
}