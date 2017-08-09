<?php namespace satoripop\Services\Models;

use Model;

/**
 * Model
 */
class Restoration extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.

     */
     public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

     public $translatable = [
    'title',
    ] ;
    public $timestamps = false;

    /*
     * Validation
     */
    public $rules = [
        'title' => 'required',

    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'satoripop_services_restoration';
}