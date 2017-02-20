<?php

namespace Main\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Form\LogForm;
use Main\Form\CreationForm;
use Zend\View\Model\JsonModel;
use Main\Entity\Client;

class UserController extends AbstractActionController {

    public function logAction() {
        $em = $this
                ->getServiceLocator()
                ->get('Doctrine\ORM\EntityManager');


        $form = new LogForm($em);
//        $viewData['form'] = $form;
//        return new ViewModel($viewData);
        return new JsonModel(array(
            'form' => $form,
            'success' => true,
        ));
    }

    public function connectAction() {
        $em = $this
                ->getServiceLocator()
                ->get('Doctrine\ORM\EntityManager');
         if ($_SESSION) {
            unset($_SESSION);
            session_destroy();
            header('Location: /');
            exit;
        } elseif ($this->getRequest()->isPost()) {
            $dataForm = $this->getRequest()->getPost();

            $request = $em->getRepository('Main\Entity\Client')
                    ->findOneBy(array('emailClient' => $dataForm['email'], 'password'
                => md5($dataForm['password'])));
            if ($request) {
                unset($_SESSION);
                session_destroy();
                session_start();
                $_SESSION['id'] = $request->getIdClient();
                $_SESSION['nom'] = $request->getNomClient();
                $_SESSION['prenom'] = $request->getPrenomClient();
                $_SESSION['email'] = $request->getEmailClient();

                header('Location: /');
                exit;
            }
        }
    }
    public function creationAction() {
        $em = $this
                ->getServiceLocator()
                ->get('Doctrine\ORM\EntityManager');
        if ($this->getRequest()->isPost()) {
           $dataForm = $this->getRequest()->getPost();
            $user = new Client();
            $user ->setAdresseClient($dataForm['adresse']);
            $user ->setNomClient($dataForm['nom']);
            $user ->setPrenomClient($dataForm['prenom']);
            $user ->setPassword(md5($dataForm['pwd1']));
            $user ->setEmailClient($dataForm['email']);
            $ville = $em->getRepository('Main\Entity\Ville')->find($dataForm['ville']);
            $user ->setVilleClient($ville);
            $em ->persist($user);
            $em ->flush();
        }

        $form = new CreationForm($em);
        return new ViewModel(array(
            'form' => $form,
            'success' => true,
        ));
    }

}

