<?php namespace Satoripop\Divingcenter\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use Satoripop\Divingcenter\Models\Booking;
use Flash;
use Auth ;
use Db ;
class ReservationForm extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Reservation Form',
            'description' => 'reservation'
        ];

    }


    public function onSave(){
       $reservation = new Booking();
       $reservation->nom = Input::get('nom');
       $reservation->prenom = Input::get('prenom');
       $reservation->email = Input::get('email');
       $reservation->niveau = Input::get('niveau');
       $reservation->age = Input::get('age');
       $reservation->todo = Input::get('todo');
       $reservation->user_id =  Input::get('user_id');
       $reservation->status = "En attente" ;
           
       $reservation->date = Input::get('date');
            $reservation->preference = Input::get('preference');
           // $reservation->flexible = Input::get('flexible');
           // $reservation->matriel = Input::get('matriel');
            $reservation->commentaire = Input::get('commentaire');
            $reservation->center_id = Input::get('center_id');
       


       $reservation->save();
       Flash::success('success');
       return Redirect::back();
    }

}