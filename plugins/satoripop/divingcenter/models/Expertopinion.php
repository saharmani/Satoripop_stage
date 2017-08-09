<?php namespace satoripop\DivingCenter\Models;

use Model;

/**
 * Model
 */
class Expertopinion extends Model
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
    public $table = 'satoripop_divingcenter_expertopinions';
}