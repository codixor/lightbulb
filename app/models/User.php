<?php

use Orchestra\Model\User as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class User extends Eloquent
{
	use SoftDeletingTrait;
}
