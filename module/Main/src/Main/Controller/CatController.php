<?php
namespace Main\Controller;

use User\Form\UserForm;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CatController extends AbstractActionController
{
    public function affichageAction()
    {
        $em = $this
                ->getServiceLocator()
                ->get('Doctrine\ORM\EntityManager');
         $id = (int) $this->params()->fromRoute('id', 0);
         
        $cat = $em->getRepository('Main\Entity\Categorie')->find($id);
        
        $viewData['cat'] = $cat;
        $set = $em->getRepository('Main\Entity\Article')->findBy(array('catArt'=>$cat));
        $viewData['articles'] = $set;
         $viewData['id'] = $id;
        return new ViewModel($viewData);
    }
}
