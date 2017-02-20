<?php
    namespace Main\Form;
    use Zend\Form\Form;
    
    class CreationForm extends Form
    {
        public function __construct($entityManager)
        {   
          
            parent::__construct('Log');
      
            $this->setAttribute('method', 'post');
            $this->add(array(
                'name' => 'id_membre', // Nom du champ
                'type' => 'Hidden',      // Type du champ
            ));
            
            // Le champs name, de type Text
            $this->add(array(
                'name' => 'email',       // Nom du champ
                'type' => 'Text',       // Type du champ
                'attributes' => array(
                    'id'    => 'email'   // Id du champ
                ),
                'options' => array(
                    'label' => 'E-mail :',   // Label à l'élément
                ),
            ));
             $this->add(array(
                'name' => 'prenom',       // Nom du champ
                'type' => 'Text',       // Type du champ
                'attributes' => array(
                    'id'    => 'prenom'   // Id du champ
                ),
                'options' => array(
                    'label' => 'Prénom :',   // Label à l'élément
                ),
            ));
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
                'name' => 'adresse',       // Nom du champ
                'type' => 'Text',       // Type du champ
                'attributes' => array(
                    'id'    => 'adresse'   // Id du champ
                ),
                'options' => array(
                    'label' => 'Adresse :',   // Label à l'élément
                ),
            ));  
                
                $this->add(array(
            'type' => 'DoctrineModule\Form\Element\ObjectSelect',
            'name' => 'ville',
            'options' => array(
                'label' => 'Ville :',
                'object_manager' => $entityManager,
                'target_class' => 'Main\Entity\Ville',
                'property' => 'nomVille',
),
        ));
                $this->add(array(
                'name' => 'pwd1',       // Nom du champ
                'type' => 'Password',       // Type du champ
                'attributes' => array(
                    'id'    => 'pwd1'   // Id du champ
                ),
                'options' => array(
                    'label' => 'Mot de passe :',   // Label à l'élément
                ),
            ));
                $this->add(array(
                'name' => 'pwd2',       // Nom du champ
                'type' => 'Password',       // Type du champ
                'attributes' => array(
                    'id'    => 'pwd2'   // Id du champ
                ),
                'options' => array(
                    'label' => 'Confirmation :',   // Label à l'élément
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
        }
    }
