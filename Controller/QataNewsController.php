<?php

/* ******************************************************************** */
/*                                                                      */
/*   [Controller] QataNewsController.php                                */
/*                                                                      */
/*   Author: Snkh <inquiries@snkh.me>                                   */
/*                                                                      */
/*   Created: 23/08/2019 14:56:22 by Snkh                               */
/*   Updated: 30/08/2019 19:44:45 by Snkh                               */
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
        
        if($data['newsletter-value'] != "1" && $data['newsletter-value'] != "2")
          return $this->sendJSON(['statut' => false, 'msg' => "Une erreur lors du paramètrage est survenue"]);
            
        if ($data['newsletter-value'] == "1")
            $this->User->setKey('newsletter', 1);
        else 
            $this->User->setKey('newsletter', 2);
            
        $this->sendJSON(['statut' => true, 'msg' => "Vos paramètres ont été enregistrés avec succès !"]);
    }

    public function export()
    {
        if(!$this->isConnected || !$this->User->isAdmin())
            throw new ForbiddenException();
        $this->autoRender = false;
        $newsletterUsers = $this->User->find('all', array('conditions' => array('User.newsletter !=' => array(2))));
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
            $this->User->set(array('newsletter' => 1));
            $this->User->save();
        }
        
        $this->Session->setFlash('[QataNews] Vous venez de forcer l\'inscription de ' . count($fetchedUsers) . ' utilisateurs a la NewsLetter!',  'default.success');
        $this->redirect('/admin');
    }
}