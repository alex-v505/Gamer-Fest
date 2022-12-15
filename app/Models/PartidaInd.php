<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartidaInd extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'partida__inds';

    protected $fillable = ['id_jug1','id_jug2','ganador_par_ind','fecha_par_ind','observacion_par_ind'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function inscripcionInd()
    {
        return $this->hasOne('App\Models\InscripcionInd', 'id', 'id_jug1');
    }
    public function jugadors1()
    {
        return $this->hasOne('App\Models\Jugador', 'id', 'id_jug1');
    }
    public function jugadors2()
    {
        return $this->hasOne('App\Models\Jugador', 'id', 'id_jug2');
    }
    public function jugadors3()
    {
        return $this->hasOne('App\Models\Jugador', 'id', 'ganador_par_ind');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    
}
