<?php namespace Satoripop\Divingcenter\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use Satoripop\Divingcenter\Models\Request;
use Flash;
use Auth ;
use Db ;
class CenterForm extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Center Form',
            'description' => ''
        ];

    }


    public function onSave(){
       $request = new Request();
       $request->centername = Input::get('centername');
       $request->managername = Input::get('managername');
       $request->tel = Input::get('tel');
       $request->ville = Input::get('ville');
       $request->pays = Input::get('pays');

       $request->email = Input::get('email');
       $request->question = Input::get('question');
      

       $request->save();
       Flash::success('success');
       return Redirect::back();
    }

}