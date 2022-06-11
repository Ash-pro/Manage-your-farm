<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AgriculturalProject extends Model
{
    use SoftDeletes;
    use HasFactory;

    public const PROJECT_TYPE_SELECT = [
        'trees'       => 'trees',
        'hydroponics' => 'hydroponics',
        'vegetables'  => 'vegetables',
    ];

    public $table = 'agricultural_projects';

    public static $searchable = [
        'name',
        'nationalid',
        'phone',
        'address',
        'land_area',
        'project_type',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'nationalid',
        'phone',
        'address',
        'land_area',
        'project_type',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
