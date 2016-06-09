<?php namespace Nexxa\Enhancedmedia\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Enhanced Media Back-end Controller
 */
class EnhancedMedia extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Nexxa.Enhancedmedia', 'enhancedmedia', 'enhancedmedia');
    }
}
