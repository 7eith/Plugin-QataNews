<?php

/* ******************************************************************** */
/*                                                                      */
/*   [Modules] user_profile.ctp                                         */
/*                                                                      */
/*   Author: Snkh <inquiries@snkh.me>                                   */
/*                                                                      */
/*   Created: 23/08/2019 14:47:37 by Snkh                               */
/*   Updated: 30/08/2019 19:21:47 by Snkh                               */
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
        <form method="post" data-ajax="true" action="<?= $this->Html->url(array('controller' => 'qatanews', 'action' => 'user_subscribe')) ?>">
            <div class="form-group" style="padding-left: 20px;">
                <label><?= $Lang->get('NEWSLETTER__PROFIL_ABOUT') ?></label>

                <br>
                
                <small><?= $Lang->get('NEWSLETTER__PROFIL_ABOUT_EXPLAIN') ?></small>
                
                <div class="radio" style="padding-left: 50px;">
                    <input type="radio" name="newsletter-value" value="1" <?= ($user['newsletter'] == 1) ? 'checked=""' : '' ?>>
                    <label><?= $Lang->get('GLOBAL__ENABLE') ?></label>
                </div>
                <div class="radio" style="padding-left: 50px;">
                    <input type="radio" name="newsletter-value" value="2" <?= ($user['newsletter'] == 2) ? 'checked=""': '' ?>>
                    <label><?= $Lang->get('GLOBAL__DISABLE') ?></label>
                </div>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary btn-large"><?= $Lang->get("GLOBAL__SUBMIT") ?></button>
            </div>
        </form>
    </div>
</div>
