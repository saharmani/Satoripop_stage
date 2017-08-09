<?php namespace satoripop\Data\Models;

use Model;

/**
 * Model
 */
class Area extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
   
      public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

     public $translatable = [
    'title',
    ] ;

    /*
     * Validation
     */
    public $rules = [
    'title' => 'required',
     'longutide' => 'required|numeric',
     'latitude' => 'required|numeric',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'satoripop_data_areas';

    public $hasMany =[

'destination' => [

  'satoripop\Data\Models\Destination',
  'table'=>'satoripop_data_destination_areas' 
] 


] ;
}