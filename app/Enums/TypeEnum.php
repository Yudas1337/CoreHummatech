<?php

namespace App\Enums;

enum TypeEnum: string
{
    case BRANCH = 'branch';
    case CENTER = 'center';
    case SALE = 'sale';
    case SERVICE = 'service';
    case PARTNER = 'partner';
    case MITRA = 'mitra';
    case PRODUCT = 'product';
}
