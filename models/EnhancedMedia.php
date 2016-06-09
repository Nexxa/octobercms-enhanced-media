<?php namespace Nexxa\Enhancedmedia\Models;

use Model;
use Cms\Classes\MediaLibrary;

/**
 * EnhancedMedia Model
 */
class EnhancedMedia extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nexxa_enhancedmedia_enhanced_media';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne        = [];
    public $hasMany       = [];
    public $belongsTo     = [];
    public $belongsToMany = [];
    public $morphTo       = [];
    public $morphOne      = [];
    public $morphMany     = [];
    public $attachOne     = [];
    public $attachMany    = [];

    public static function getImageUrl($label)
    {
        $image = EnhancedMedia::where('label', $label)->first();
        if ($image !== null) {
            return MediaLibrary::url($image->title);
        }
        // TODO: base64 con image not found
        return '';
    }
}
