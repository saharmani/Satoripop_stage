<?php namespace satoripop\Services\Models;

use Model;

/**
 * Model
 */
class Product extends Model
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
     public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

     public $translatable = [
    'title',
    ] ;
    public $rules = [
        'title' => 'required',

    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'satoripop_services_products';
}