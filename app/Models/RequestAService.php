<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RequestAService extends Model
{
    use SoftDeletes;
    use HasFactory;

    public const SERVICE_SELECT = [
        'home_gardens' => 'home gardens',
        'green_houses' => 'green houses',
    ];

    public $table = 'request_a_services';

    public static $searchable = [
        'name',
        'nationalid',
        'phone',
        'homearea',
        'region',
        'service',
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
        'homearea',
        'region',
        'service',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
