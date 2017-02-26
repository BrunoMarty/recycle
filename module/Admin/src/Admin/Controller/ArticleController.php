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
use Admin\Form\ArticleForm;
use Main\Entity\Article;
use Main\Entity\Taille;

class ArticleController extends AbstractActionController {

    public function listeAction() {
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

    public function ajoutAction() {
        $em = $this
                ->getServiceLocator()
                ->get('Doctrine\ORM\EntityManager');

        if ($this->getRequest()->isPost()) {

            $dataForm = $this->getRequest()->getPost();
            $cat = $em->getRepository('Main\Entity\Categorie')->find($dataForm['cat']);
            $fourn = $em->getRepository('Main\Entity\Fournisseur')->find($dataForm['fourn']);
            $art = new Article();
            $art->setNomArt($dataForm['nom']);
            $art->setDescriptArt($dataForm['descr']);
            $art->setPrixaArt($dataForm['prixa']);
            $art->setPrixvArt($dataForm['prixv']);
            $art ->setCatArt($cat);  
            $art ->setFournArt($fourn);
            $art->setEtat($dataForm['etat']);
            $art->setRefArt($dataForm['ref']);

            $art ->setTailleArt($dataForm['taille']);
            $art ->getQuantity($dataForm['quantity']);

            $em ->persist($art);
            $em ->flush();
            //           $art->setNomArt($dataForm['nom']);
//
//
//            $cat->setNomCat($dataForm['name']);
//
//            $em->persist($cat);
//            $em->flush();
        }

        $form = new ArticleForm($em);
        return new ViewModel(array(
            'form' => $form,
            'success' => true,));
    }

}
