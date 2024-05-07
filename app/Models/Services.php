<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Services extends Model
{
    use HasFactory;
    use SoftDeletes;

    const TYPE_PROXY = 'proxy',
        TYPE_ANTIDETECT = 'antidetect',
        TYPE_TDS = 'TDS',
        TYPE_TRACKER = 'tracker',
        TYPE_CLOAKING = 'cloaking',
        TYPE_PAYMENTS = 'payments',
        TYPE_WHITE_PAGES = 'white-pages',
        TYPE_APPS = 'apps',
        TYPE_SPY = 'spy',
        TYPE_SAAS_PLATFORM = 'saas-platform';

    static function getType()
    {
        return [
            self::TYPE_PROXY => 'proxy',
            self::TYPE_ANTIDETECT => 'antidetect',
            self::TYPE_TDS => 'TDS',
            self::TYPE_TRACKER => 'tracker',
            self::TYPE_CLOAKING => 'cloaking',
            self::TYPE_PAYMENTS => 'payments',
            self::TYPE_WHITE_PAGES => 'white-pages',
            self::TYPE_APPS => 'apps',
            self::TYPE_SPY => 'spy',
            self::TYPE_SAAS_PLATFORM => 'saas-platform'
        ];
    }

    protected $guarded = false;

    protected $casts = [
        'type' => 'array'
    ];
}
