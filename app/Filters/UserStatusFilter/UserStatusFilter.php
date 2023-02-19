<?php

namespace App\Filters\UserStatusFilter;

use App\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class UserStatusFilter extends AbstractFilter
{

    public const USER_ID = 'user_id';
    public const STATUS = 'status';
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';


    protected function getCallbacks(): array
    {
       return  [

            self::CREATED_AT => [$this,'fr_created_at'],
            self::STATUS => [$this,'status'],
            self::USER_ID => [$this, 'user_id'],
            self::UPDATED_AT => [$this,'to_created_at']
       ];
    }

    public function user_id(Builder $builder,$value)
    {
        $builder->where('user_id','like',"%{$value}%" );
    }

    public function status(Builder $builder,$value)
    {
        $builder->where('status',$value);
    }

   /* public function fr_created_at(Builder $builder,$value)
    {
        $builder->where('created_at','<=',$value);
    }

    public function to_created_at(Builder $builder,$value)
    {
        $builder->where('created_at','>=',$value);
    }*/
}
