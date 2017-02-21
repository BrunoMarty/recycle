
<?php
    namespace Admin\Form;
    use Zend\Form\Form;
    
    class ArticleForm extends Form
    {
        public function __construct($entityManager)
        {   
          
            parent::__construct('Log');
      
        
            
            // Le champs name, de type Text
            $this->add(array(
                'name' => 'nom',       // Nom du champ
                'type' => 'Text',       // Type du champ
                'attributes' => array(
                    'id'    => 'nom'   // Id du champ
                ),
                'options' => array(
                    'label' => 'Nom :',   // Label à l'élément
                ),
            ));
             $this->add(array(
                'name' => 'ref',       // Nom du champ
                'type' => 'Text',       // Type du champ
                'attributes' => array(
                    'id'    => 'ref'   // Id du champ
                ),
                'options' => array(
                    'label' => 'Reférence :',   // Label à l'élément
                ),
            ));
                $this->add(array(
                'name' => 'prixa',       // Nom du champ
                'type' => 'Text',       // Type du champ
                'attributes' => array(
                    'id'    => 'prixa'   // Id du champ
                ),
                'options' => array(
                    'label' => 'Prix d\'achat :',   // Label à l'élément
                ),
            )); 
                $this->add(array(
                'name' => 'prixv',       // Nom du champ
                'type' => 'Text',       // Type du champ
                'attributes' => array(
                    'id'    => 'prixv'   // Id du champ
                ),
                'options' => array(
                    'label' => 'Prix de vente :',   // Label à l'élément
                ),
            ));  
                
                $this->add(array(
            'type' => 'DoctrineModule\Form\Element\ObjectSelect',
            'name' => 'ville',
            'options' => array(
                'label' => 'Ville :',
                'object_manager' => $entityManager,
                'target_class' => 'Main\Entity\Fournisseur',
                'property' => 'nomFourn',
),
        ));
                $this->add(array(
                'name' => 'taille',       // Nom du champ
                'type' => 'Text',       // Type du champ
                'attributes' => array(
                    'id'    => 'taille'   // Id du champ
                ),
                'options' => array(
                    'label' => 'Taille :',   // Label à l'élément
                ),
            ));
                $this->add(array(
                'name' => 'quantity',       // Nom du champ
                'type' => 'Password',       // Type du champ
                'attributes' => array(
                    'id'    => 'quantity'   // Id du champ
                ),
                'options' => array(
                    'label' => 'Quantité :',   // Label à l'élément
                ),
            ));
        
        
            
            // Le bouton Submit
            $this->add(array(
                'name' => 'submit',        // Nom du champ
                'type' => 'Submit',        // Type du champ
                'attributes' => array(     // On va définir quelques attributs
                    'value' => 'S\'enregistrer',  // comme la valeur
                    'id' => 'submit',      // et l'id
                ),
            ));
            $this->add(array(
                'name' => 'descr',       // Nom du champ
                'type' => 'Textarea',       // Type du champ
                'attributes' => array(
                    'id'    => 'nom'   // Id du champ
                ),
                'options' => array(
                    'label' => 'Nom :',   // Label à l'élément
                ),
            ));
            
            $this->add(array(
                'name' => 'etat',       // Nom du champ
                'type' => 'Checkbox',       // Type du champ
                'attributes' => array(
                    'id'    => 'etat'   // Id du champ
                ),
                'options' => array(
                    'label' => 'Neuf :',   // Label à l'élément
                ),
            ));
        }
    }
