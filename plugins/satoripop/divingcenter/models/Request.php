<?php namespace satoripop\DivingCenter\Models;

use Model;
use DB ;
use Mail ;

/**
 * Model
 */
class Request extends Model
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
    public $table = 'satoripop_divingcenter_request';

    
    public  $belongsTo = [
       
 'user'       => ['RainLab\User\Models\User', 'table' => 'users'],

] ;

}