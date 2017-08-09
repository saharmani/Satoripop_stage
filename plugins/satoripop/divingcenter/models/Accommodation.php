<?php namespace satoripop\DivingCenter\Models;

use Model;

/**
 * Model
 */
class Accommodation extends Model
{
    use \October\Rain\Database\Traits\Validation;
      public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
      public $translatable = [
    'title',
  'description' ,
  'lien'
];

    /*
     * Validation
     */
    public $rules = [
     'title' => 'required',
     
     'lien' => 'between:4,40',
     
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'satoripop_divingcenter_accommodations';
    
 public $belongsToMany =[

'center' => [

  'satoripop\DivingCenter\Models\Center',
  'table'=>'satoripop_divingcenter_centers_accommodations'  
] 
] ;
public $attachOne = [
'Visuel' => 'System\Models\File'
] ;
}