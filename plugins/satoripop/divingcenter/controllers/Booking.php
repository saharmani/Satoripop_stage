<?php namespace satoripop\DivingCenter\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Input ;
use satoripop\DivingCenter\Models\Booking as BookingModel ;
use Flash ;
use Redirect;

class Booking extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('satoripop.DivingCenter', 'main-menu-item', 'side-menu-item7');
    }
      
    
  public function onUpdate(){
     $booking = BookingModel::find(Input::get('id'));
     $booking->status= Input::get('status');
     $booking->save();
     Flash::success('Le statut a éte bien changer');
     return Redirect::back();

  }



}