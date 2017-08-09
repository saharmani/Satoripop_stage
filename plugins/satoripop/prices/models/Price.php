<?php namespace satoripop\Prices\Models;

use Model;

/**
 * Model
 */
class Price extends Model
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
            'title' => 'required|between:4,60',

    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'satoripop_prices_prices';
}