<?php namespace Satoripop\Divingcenter\Components;

use Cms\Classes\ComponentBase;
use Input;
use Redirect;
use Satoripop\Divingcenter\Models\Booking;
use Flash;

class StatutsForm extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'statut Form',
            'description' => ''
        ];

    }


    public function onUpdate(){

     $booking = Booking::find(Input::get('id'));
     $booking->status= Input::get('status');
     $booking->save();
     Flash::success('success');
     return Redirect::back();

  }

}