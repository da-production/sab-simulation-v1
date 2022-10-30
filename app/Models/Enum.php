<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enum extends Model
{
    use HasFactory;

    public function Charge($charge = null){
        $charges = [
            1 => " CNAC ",
            2 => " TRESOR ",
        ];
        return is_null($charge) ? $charges : $charge;
    }

    public function Region($region = null){
        $regions = [
            1 => " Nord ",
            2 => " Hauts Plateaux & Sud ",
        ];
        return is_null($region) ? $regions : $region;
    }

    public function Contrat($contrat = null){
        $contrats = [
            1 => " CDD ",
            2 => " CDI ",
        ];
        return is_null($contrat) ? $contrats : $contrat;
    }
}
