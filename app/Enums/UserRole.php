<?php
 namespace App\Enums;

use Illuminate\Validation\Rules\Enum;
// use Spatie\Enum\Laravel\Enum;

// use Spatie\Enum\Laravel\Enum;

/**
 * @method static self admin()
 * @method static self user()
 */
class UserRole extends Enum
{
    protected static function values(): array
    {
        return [
            'admin' => 'admin',
            'user' => 'user',
        ];
    }
}

