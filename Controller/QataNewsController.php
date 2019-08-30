<?php

/* ******************************************************************** */
/*                                                                      */
/*   [Controller] QataNewsController.php                              */
/*                                                                      */
/*   Author: Snkh <inquiries@snkh.me>                                   */
/*                                                                      */
/*   Created: 23/08/2019 14:56:22 by Snkh                               */
/*   Updated: 30/08/2019 17:51:44 by Snkh                               */
/*                                                                      */
/*   Snkh Inc. (c) 2019 - GPL 3.0                                       */
/*                                                                      */
/* ******************************************************************** */

class QataNewsController extends AppController {

    public function user_subscribe()
    {
        if(!$this->isConnected)
          throw new ForbiddenException();

        if(!$this->request->is('post'))
          throw new BadRequestException();
        
        $this->layout = null;
        $this->autoRender = false;
        $data = $this->request->data;
        
        if(empty($data))
          return $this->sendJSON(['statut' => false, 'msg' => "Vous devez remplir tout les champs"]);
        
        if($data['newsletter-value'] != true && $data['newsletter-value'] != "false")
          return $this->sendJSON(['statut' => false, 'msg' => "Une erreur lors du paramètrage est survenue"]);

        if (filter_var($data['newsletter-value'], FILTER_VALIDATE_BOOLEAN))
            $this->User->setKey('newsletter', 1);
        else 
            $this->User->setKey('newsletter', 0);
            
        $this->sendJSON(['statut' => true, 'msg' => "Vos paramètres ont été enregistrés avec succès !"]);
    }

    public function export()
    {
        if(!$this->isConnected || !$this->User->isAdmin())
            throw new ForbiddenException();
        $this->autoRender = false;
        $newsletterUsers = $this->User->find('all', array('conditions' => array('User.newsletter !=' => array("false"))));
        foreach ($newsletterUsers as $key => $value) {
            echo $value['User']['email'] . '<br>';
        }
    }

    public function forceEveryoneSubscribe()
    {
        if(!$this->isConnected || !$this->User->isAdmin())
            throw new ForbiddenException();
        
        $fetchedUsers = $this->User->find('all');
        foreach ($fetchedUsers as $key => $value) {
            $this->User->read(null, $value['User']['id']);
            $this->User->set(array('newsletter' => true));
            $this->User->save();
        }
        
        $this->redirect('/');
    }
}