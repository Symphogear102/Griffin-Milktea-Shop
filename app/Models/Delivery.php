<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Delivery extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'deliveries';
    protected $fillable = [
        'zCode',
        'zStat',
        'zFirst',
        'zLast',
        'zSize',
        'zAdd',
        'zQuantity',
        'zPayment',
        'zItem',
        'uStat',
    ];
}
