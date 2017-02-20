<?php
    namespace Main\Form;
    use Zend\Form\Form;
    
    
    // Notre class CategoryForm étend l'élément \Zend\Form\Form; 
    class ContactForm extends Form
    {
        public function __construct($entityManager)
        {   
          
            parent::__construct('Log');
      
            $this->setAttribute('method', 'post');
                                 
            // Le champs name, de type Text
            $this->add(array(
                'name' => 'email',       // Nom du champ
                'type' => 'Text',       // Type du champ
                'attributes' => array(
                    'id'    => 'email'   // Id du champ
                ),
                'options' => array(
                    'label' => 'email',   // Label à l'élément
                ),
            ));
           
                $this->add(array(
                'name' => 'sujet',       // Nom du champ
                'type' => 'Text',       // Type du champ
                'attributes' => array(
                    'id'    => 'sujet'   // Id du champ
                ),
                'options' => array(
                    'label' => 'Sujet',   // Label à l'élément
                ),
            ));
        
                 $this->add(array(
                'name' => 'text',       // Nom du champ
                'type' => 'Text',       // Type du champ
                'attributes' => array(
                    'id'    => 'text'   // Id du champ
                ),
                'options' => array(
                    'label' => 'Message :',   // Label à l'élément
                ),
            ));
        
            
            // Le bouton Submit
            $this->add(array(
                'name' => 'submit',        // Nom du champ
                'type' => 'Submit',        // Type du champ
                'attributes' => array(     // On va définir quelques attributs
                    'value' => 'Envoyer',  // comme la valeur
                    'id' => 'submit',      // et l'id
                ),
            ));
        }
    }
