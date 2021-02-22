<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    use HasFactory;

    public function serise()
    {
        return $this->hasOne(game_series::class,'id','series_id');
    }

    public function match()
    {
        return $this->hasOne(game_match::class,'id','match_id');
    }

    public function first_team()
    {
        return $this->hasOne(game_team::class,'id','first_team_id');
    }

    public function second_team()
    {
        return $this->hasOne(game_team::class,'id','second_team_id');
    }


}
