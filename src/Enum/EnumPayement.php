<?php
namespace App\Enum;

enum EnumPayement: string
{
    case CB = 'CB';
    case Cheque = 'Cheque';
    case  Liquide= 'Liquide';
}