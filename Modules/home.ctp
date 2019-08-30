<?php

/* ******************************************************************** */
/*                                                                      */
/*   [Modules] home.ctp                                                 */
/*                                                                      */
/*   Author: Snkh <inquiries@snkh.me>                                   */
/*                                                                      */
/*   Created: 23/08/2019 21:30:44 by Snkh                               */
/*   Updated: 31/08/2019 00:15:08 by Snkh                               */
/*                                                                      */
/*   Snkh Inc. (c) 2019 - GPL 3.0                                       */
/*                                                                      */
/* ******************************************************************** */

if($user && $user['newsletter'] == 0)
{
?>
    <div class="modal fade" id="newsletter_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="newsletter_modal_title"><?= $Lang->get('NEWSLETTER__POPUP_TITLE') ?></h4>
                </div>
                <div class="modal-body" id="newsletter_modal_content">
                    <form method="post" data-ajax="true" action="<?= $this->Html->url(array('controller' => 'qatanews', 'action' => 'user_subscribe')) ?>">
                        <div class="form-group" style="padding-left: 20px;">
                            <label><?= $Lang->get('NEWSLETTER__POPUP_ABOUT') ?></label>

                            <br>
                            
                            <small><?= $Lang->get('NEWSLETTER__POPUP_ABOUT_EXPLAIN') ?></small>
                            
                            <div class="radio" style="padding-left: 50px;">
                                <input type="radio" name="newsletter-value" value="1">
                                <label><?= $Lang->get('GLOBAL__ENABLE') ?></label>
                            </div>
                            <div class="radio" style="padding-left: 50px;">
                                <input type="radio" name="newsletter-value" value="2">
                                <label><?= $Lang->get('GLOBAL__DISABLE') ?></label>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary btn-large" data-dismiss="modal"><?= $Lang->get("GLOBAL__SUBMIT") ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function(){
            $('#newsletter_modal').modal("show");
            $('#newsletter_modal').on('click', () => {
                $('#newsletter_modal').modal("close")
            });
        });
    </script>
<?php
}
?>