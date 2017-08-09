<?php namespace Satoripop\Dives\Models;

use Model;

/**
 * Model
 */
class Levelsoftraining extends Model
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
    'typeoftraining' ,
    'typeoftraining'


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
    public $table = 'satoripop_dives_levelsoftraining';
     public $belongsTo = [
    'typeoftraining' => [

  'satoripop\Dives\Models\Typeoftraining',
  'table'=>'satoripop_dives_typeoftraining' ,

]  
];

  public $attachOne = [
'visuel' => 'System\Models\File' ,
'pdf' => 'System\Models\File'
] ;

}