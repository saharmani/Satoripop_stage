<?php namespace Satoripop\Dives\Models;

use Model;

/**
 * Model
 */
class Typeoftraining extends Model
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

    /**
     * @var string The database table used by the model.
     */
    public $table = 'satoripop_dives_typeoftraining';
     public $belongsToMany =[

'center' => [

  'satoripop\DivingCenter\Models\Center',
  'table'=>'satoripop_divingcenter_centers_typeoftraining'  
] 
] ;

     public $hasMany =[

'levelsoftrainig' => [

  'satoripop\Dives\Models\Levelsoftrainig',
  'table'=>'satoripop_dives_Typeoftraining_leveloftraining' 
] 

] ;
}