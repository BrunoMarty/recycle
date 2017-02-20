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
           $expediteur = 'moi@monsite.fr';
           $expediteurNom = 'Toto';
           $encodageEntetes = 'utf-8';
           $titre = 'Titre du mail créé avec ZF2 et ZF3 (en utf-8)';
           $texte = 'Contenu du mail en utf-8. Bonne réception!';

           $msg = new Message();
           $msg->addFrom($expediteur, $expediteurNom)
                ->addTo($destinataire)
                ->setEncoding($encodageEntetes)
                ->setSubject($titre);
           $msg->getHeaders()->addHeaderLine('Content-Type','text/plain; charset=utf-8')
                ->setBody($texte);

           $transport = new Sendmail();
           $transport->send($msg);
        }

        $form = new ContactForm($em);
        return new ViewModel(array(
            'form' => $form,
            'success' => true,
        ));
    }


}
