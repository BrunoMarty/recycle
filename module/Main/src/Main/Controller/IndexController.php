<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Main\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Form\ContactForm;
use Zend\Mail\Message;
use Zend\Mail\Transport\Sendmail;


class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
    
        public function contactAction() {
        $em = $this
                ->getServiceLocator()
                ->get('Doctrine\ORM\EntityManager');
        if ($this->getRequest()->isPost()) {
            $dataForm = $this->getRequest()->getPost();
            $destinataire = 'bruno.marty4@gmail.com';
            $expediteur = $dataForm['email'];
            $expediteurNom = $dataForm['email'];
            $encodageEntetes = 'utf-8';
            $titre = $dataForm['sujet'];
            $texte = $dataForm['text'];

            $msg = new Message();
            $msg->addFrom($expediteur, $expediteurNom)
                ->addTo($destinataire)
                ->setEncoding($encodageEntetes)
                ->setSubject($titre);
            $msg->setBody($texte);
            $transport = new Sendmail();
            $transport->send($msg);
           echo "<script>alert(\"Message bien envoyé\")</script>"; 
        }

        $form = new ContactForm($em);
        return new ViewModel(array(
            'form' => $form,
            'success' => true,
        ));
    }


}
