<?php namespace satoripop\Data\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Divinglavels extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('satoripop.Data', 'main-menu-item', 'side-menu-item3');
    }
}