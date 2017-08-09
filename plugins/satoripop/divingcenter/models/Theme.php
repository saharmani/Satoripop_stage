<?php namespace satoripop\DivingCenter\Models;

use Model;

/**
 * Model
 */
class Theme extends Model
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
  'description' ,
  ];

    /*
     * Validation
     */
    public $rules = [
     'title' => 'required',
     'description' => 'between:4,1600',
  
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'satoripop_divingcenter_themes';

    public $hasMany =[

'center' => [

  'satoripop\DivingCenter\Models\Center',
  'table'=>'satoripop_divingcenter_centers_themes' ,
  'order' => 'center_title'
]

 ];

}