<?php
namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\GetInterface;
use App\Contracts\Interfaces\Eloquent\StoreInterface;
use App\Contracts\Interfaces\Eloquent\DeleteInterface;
use App\Contracts\Interfaces\Eloquent\SearchInterface;
use App\Contracts\Interfaces\Eloquent\UpdateInterface;

interface BranchInterface extends GetInterface , StoreInterface, UpdateInterface ,DeleteInterface, SearchInterface
{

}
