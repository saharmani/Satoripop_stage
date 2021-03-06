<?php namespace satoripop\Data\Models;

use Model;

/**
 * Model
 */
class Airtemperature extends Model
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
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'satoripop_data_airtemperature';

 public $belongsToMany =[

'destination' => [

  'satoripop\data\Models\Destination',
  'table'=>'satoripop_data_destinations' 
] 

] ;


}