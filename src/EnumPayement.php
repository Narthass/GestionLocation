<?php
namespace App\Config;

enum EnumPayement: string
{
    case CB = 'CB';
    case Cheque = 'Cheque';
    case  Liquide= 'Liquide';
}