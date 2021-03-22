<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class ZW extends Model
{
    //
    protected $guarded = [];

    public function getisClosedAttribute()
    {
        if(DB::table('tasks')->where('aw_id', $this->id)->where('closed',0)->exists())
        {
            return false;
        } else 
        {
            return true;
        }
    }
    public function getstyleAttribute()
    {
        switch ($this->client) {
            case 'ALLEGRO':
                return 'bg-yellow-200';
                break;
            case 'IMV':
                return 'bg-pink-400';
                break;
            case 'WAYFAIR':
                return 'bg-purple-400';
                break;
            case 'OTTO':
                return 'bg-red-200';
                break;
            case 'HOMEFACE':
                return 'bg-green-200';
                break;
            case 'Forestdream Moebelagentur GmbH':
                return 'bg-green-400';                
                break;
            case 'GRABOWSKA':
                return 'bg-yellow-700';
                break;
            case 'VENTE':
                return 'bg-blue-200';
                break;
            case 'BIM':
                return 'bg-white';
                break;
            case 'H24':
                return 'bg-yellow-500';
                break;
            default:
                return 'bg-indigo-400';
                break;
        }
    }
}
