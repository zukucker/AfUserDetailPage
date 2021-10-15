<?php
class Shopware_Controllers_Frontend_GetUser extends Enlight_Controller_Action
{
  public function indexAction(){
    $this->container->get('front')->Plugins()->ViewRenderer()->setNoRender();

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      $userData = Shopware()->Modules()->Admin()->sGetUserData();

      echo json_encode($userData);
    }else{
      $this->redirect(
        array(
          'controller' => 'index',
          'action' => 'index',
        )
      );
    }
  }
}
