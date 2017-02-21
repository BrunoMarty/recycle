<?php

return array(
    'router' => array(
        'routes' => array(
            'zfcadmin' => array(
                'child_routes' => array(
                    'article' => array(
                        'type' => 'segment',
                        'options' => array(
                            'route' => '/article',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Admin\Controller',
                                'controller' => 'Article',
                                'action' => 'liste',
                            )
                        )
                    ),
//                    'membre' => array(
//                        'type' => 'segment',
//                        'options' => array(
//                            'route' => '/membre',
//                            'defaults' => array(
//                                '__NAMESPACE__' => 'Admin\Controller',
//                                'controller' => 'Membre',
//                                'action' => 'index',
//                            )
//                        )
//                    ),
                )
            ),
  
         
        )
    ),
    'controllers' => array(
        'invokables' => array(
            'Admin\Controller\Article' => 'Admin\Controller\ArticleController',
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
