<?php namespace satoripop\DivingCenter\Models;

use Model;

/**
 * Model
 */
class Tememember extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'satoripop_divingcenter_teammembers';

     public $belongsTo = [
    'center' => [

  'satoripop\divingcenter\Models\Center',
  'table'=>'satoripop_divingcenter_centers_teammembers' 

]  
];

public $attachOne = [

'visuel' => 'System\Models\File'
] ;

}