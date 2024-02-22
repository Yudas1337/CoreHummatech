<?php

namespace App\Enums;

enum TypeEnum: string
{
    case BRANCH = 'branch';
    case CENTER = 'center';
    case SALE = 'sale';
    case SERVICE = 'service';
    case PARTNER = 'partner';
    case PRODUCT = 'product';
    case PROPOSAL = 'proposal';
}
