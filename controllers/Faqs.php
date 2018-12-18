<?php namespace Wiz\Faqs\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Faqs extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\ReorderController'
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'wiz.faqs::manage_faqs',
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Wiz.Faqs', 'wiz-faqs');
        $this->addCss('/plugins/wiz/faqs/assets/css/columns.css', 'Wiz.Faqs');
    }
}
