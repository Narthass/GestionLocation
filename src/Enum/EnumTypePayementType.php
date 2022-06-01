<?php

use App\DoctrineType\AbstractEnumType;
use App\Enum\EnumTypePayement;

class EnumTypePayementType extends AbstractEnumType
{
    public const NAME = 'EnumTypePayement';

    public function getName(): string // the name of the type.
    {
        return self::NAME;
    }

    public static function getEnumsClass(): string // the enums class to convert
    {
        return EnumTypePayement::class;
    }
}