<?php namespace satoripop\Data\Models;

use Model;

/**
 * Model
 */
class Destination extends Model
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
    'Alt',
    'car_rental_link',
    'link_find_flight',
    'inactive' ,
    'best_months' ,




    ] ;

    /*
     * Validation
     */
    public $rules = [
     'title' => 'required',
     'vat' => 'required|numeric',
     'Alt' => 'required|between:4,160',
     'car_rental_link' => 'required|between:4,160',
     'link_find_flight' => 'required|between:4,160',
     

    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'satoripop_data_destinations';

    public $belongsTo = [
    'area' => [

  'satoripop\Data\Models\Area',
  'table'=>'satoripop_data_area' 
]  ,

 



] ;
public $hasOne = [

 'airtemperature' => [

  'satoripop\Data\Models\Airtemperature',
  'table'=>'satoripop_data_airtemperature' 
]
];
    public $hasMany =[

'center' => [

  'satoripop\Divingcenter\Models\Center',
  'table'=>'satoripop_divingcenter_destinations_centers' 
] 

] ;
    public $attachMany = [
'visuel' => 'System\Models\File'
] ;


}


