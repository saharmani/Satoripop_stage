<?php namespace satoripop\Infos\Models;

use Model;

/**
 * Model
 */
class Affiliation extends Model
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
    public $table = 'satoripop_infos_affiliations';
        public $belongsToMany =[

'center' => [

  'satoripop\DivingCenter\Models\Center',
  'table'=>'satoripop_divingcenter_centers_affiliation'  
] 
] ;
    public $attachOne = [
'visuel' => 'System\Models\File'
] ;
}