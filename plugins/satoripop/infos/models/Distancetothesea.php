<?php namespace satoripop\Infos\Models;

use Model;

/**
 * Model
 */
class Distancetothesea extends Model
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

    ];
    public $hasMany =[

'center' => [

  'satoripop\Divingcenter\Models\Center',
  'table'=>'satoripop_divingcenter_centers' 
] 

] ;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'satoripop_infos_distancetothesea';
}