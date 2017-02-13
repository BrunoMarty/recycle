<?php


namespace Main\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Form\LogForm;
use Zend\View\Model\JsonModel;


class UserController extends AbstractActionController
{
    public function logAction()
    {
        $em = $this
                ->getServiceLocator()
                ->get('Doctrine\ORM\EntityManager');
//        if ($_SESSION) {
//            unset($_SESSION);
//            session_destroy();
//            header('Location: /');
//            exit;
//        } elseif ($this->getRequest()->isPost()) {
//            $dataForm = $this->getRequest()->getPost();
//
//            $request = $entityManager->getRepository('Forum\Entity\Membre')
//                    ->findOneBy(array('email' => $dataForm['email'], 'password' 
//                        => $dataForm['password']));
//            if ($request) {
//                unset($_SESSION);
//                session_destroy();
//                session_start();
//                $_SESSION['id'] = $request->getIdMembre();
//                $_SESSION['nom'] = $request->getNom();
//                $_SESSION['prenom'] = $request->getPrenom();
//                $_SESSION['pseudo'] = $request->getPseudo();
//                if ($request->getAdmin() == 1) {
//                    $_SESSION['admin'] = $request->getAdmin();
//                }
//                header('Location: /');
//                exit;
//            }
//        }

        $form = new LogForm($em);
//        $viewData['form'] = $form;
//        return new ViewModel($viewData);
          return new JsonModel(array(
                'form' => $form,
                'success' => true,
            ));
    }               
}
