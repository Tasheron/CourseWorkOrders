<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property $id
 * @property $email
 * @property $name
 * @property $phone
 * @property $plan
 * @property $status
 * @property $created_at
 * @property $updated_at
 */
class Order extends Model
{
    use CrudTrait, HasFactory;

    public const STATUS_NEW = 0;
    public const STATUS_CALLED = 1;
    public const STATUS_PAYED = 2;
    public const STATUS_DONE = 3;

    public const PLAN_FREE = 0;
    public const PLAN_VIP = 1;

    public const PLAN_MAP = [
        'free' => self::PLAN_FREE,
        'vip' => self::PLAN_VIP,
    ];

    public $fillable = [
        'email',
        'name',
        'phone',
        'plan',
        'status',
    ];

    public $timestamps = true;

    public static function plan($plan)
    {
        return self::PLAN_MAP[$plan];
    }

    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->phone = preg_replace('/[^\d]/', '', $model->phone);
        });

        self::updating(function ($model) {
            $model->phone = preg_replace('/[^\d]/', '', $model->phone);
        });
    }
}
