<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class ArticleController extends AbstractActionController
{
    public function listeAction()
    {
        $em = $this
                ->getServiceLocator()
                ->get('Doctrine\ORM\EntityManager');

        if ($this->getRequest()->isPost()) {
//            $dataForm = $this->getRequest()->getPost();
//            $cat = $em->getRepository('Forum\Entity\Categorie')->find($dataForm['idcat']);
//
//
//            $cat->setNomCat($dataForm['name']);
//
//            $em->persist($cat);
//            $em->flush();
        }
   
        return new ViewModel(array(
            'art' => $em->getRepository('Main\Entity\Article')->findAll()        
        ));
    }
    }
    
    


