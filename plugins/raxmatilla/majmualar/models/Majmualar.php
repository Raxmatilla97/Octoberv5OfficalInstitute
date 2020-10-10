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

   

    public $attachMany = [
        'file_upload1' => 'System\Models\File',
    ];
    // public $jsonable = ['file_upload1'];

 
<<<<<<< HEAD
    
=======
>>>>>>> dc237e2a43e4059c2aa20210d47d654d5ea0e8ef

    public $belongsTo = [
        'manbalar' => 'Raxmatilla\Majmualar\Models\Manbalar',
        'fakultetlar' => 'Raxmatilla\Majmualar\Models\Fakultetlar',
        'kafedralar' => 'Raxmatilla\Majmualar\Models\Kafedralar',
<<<<<<< HEAD
        'fanlar' => 'Raxmatilla\Majmualar\Models\Fanlar',
        'user' => 'Backend\Models\User'
=======
        'fanlar' => 'Raxmatilla\Majmualar\Models\Fanlar'
>>>>>>> dc237e2a43e4059c2aa20210d47d654d5ea0e8ef
    ];
}
