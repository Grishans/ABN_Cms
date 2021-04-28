<?php namespace Itd\Admin\Models;

use Model;

/**
 * Model
 */
class NotFound extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'itd_admin_not_found';
    
        public $translatable = [
        'title',
        'desc',
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
        public static function boot()
    {
        parent::boot();
    
        if (!class_exists('RainLab\Translate\Behaviors\TranslatableModel'))
            return;
    
        self::extend(function($model){
            $model->implement[] = 'RainLab.Translate.Behaviors.TranslatableModel';
        });
    }
}
