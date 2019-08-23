<?php

/* ******************************************************************** */
/*                                                                      */
/*   [Modules] user_profile.ctp                                         */
/*                                                                      */
/*   Author: Snkh <inquiries@snkh.me>                                   */
/*                                                                      */
/*   Created: 23/08/2019 14:47:37 by Snkh                               */
/*   Updated: 23/08/2019 17:42:18 by Snkh                               */
/*                                                                      */
/*   Snkh Inc. (c) 2019 - GPL 3.0                                       */
/*                                                                      */
/* ******************************************************************** */

?>
<div class="panel panel-default">
    <div class="panel-heading" id="panel-head">
        <span class="white"><?= $Lang->get("NEWSLETTER__PROFILE_TITLE") ?></span>
    </div>
    
    <div class="panel-body" style="padding: 30px 20px;">
        <form method="post" data-ajax="true" action="<?= $this->Html->url(array('controller' => 'newsletter', 'action' => 'user_subscribe')) ?>">
            <div class="form-group" style="padding-left: 20px;">
                <label><?= $Lang->get('NEWSLETTER__PROFIL_ABOUT') ?></label>

                <br>
                
                <small><?= $Lang->get('NEWSLETTER__PROFIL_ABOUT_EXPLAIN') ?></small>
                
                <div class="radio" style="padding-left: 50px;">
                    <input type="radio" name="newsletter-value" value="true" <?= ($user['newsletter'] == true) ? 'checked=""' : 'checked' ?>>
                    <label><?= $Lang->get('GLOBAL__ENABLE') ?></label>
                </div>
                <div class="radio" style="padding-left: 50px;">
                    <input type="radio" name="newsletter-value" value="false" <?= ($user['newsletter'] == false) ? 'checked=""': '' ?>>
                    <label><?= $Lang->get('GLOBAL__DISABLE') ?></label>
                </div>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary btn-large"><?= $Lang->get("GLOBAL__SUBMIT") ?></button>
            </div>
        </form>
    </div>
</div>
