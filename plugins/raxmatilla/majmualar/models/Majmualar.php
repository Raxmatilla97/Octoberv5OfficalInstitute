<?php namespace Raxmatilla\Majmualar\Models;

use Model;

/**
 * Model
 */
class Majmualar extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'raxmatilla_majmualar_items';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
