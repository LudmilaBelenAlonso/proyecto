<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Noticia
 *
 * @property int $noticia_id
 * @property string $titulo
 * @property string $noticia
 * @property string $fecha_espectaculo
 * @property string $filler
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia query()
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereFechaEspectaculo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereFiller($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereNoticia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereNoticiaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereTitulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $desarrollo
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereDesarrollo($value)
 * @property string $fecha_evento
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereFechaEvento($value)
 * @property int $localidad_id
 * @property-read \App\Models\Localidad $localidad
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereLocalidadId($value)
 * @property string $copete
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereCopete($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Genero[] $generos
 * @property-read int|null $generos_count
 * @property string|null $poster
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia wherePoster($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Genero[] $tickets
 * @property-read int|null $tickets_count
 */
class Noticia extends Model
{
    //use HasFactory;
    protected $table = "noticias";
    protected  $primaryKey = "noticia_id";

    protected $fillable = ['titulo','copete','desarrollo','fecha_evento', 'poster', 'localidad_id'];

    public static $rules = [
        'titulo' => 'required',
        'fecha_evento' => 'required',
    ];
    public static $rulesMessages = [
        'titulo.required' => 'La noticia tiene que tener un titulo.',
        'fecha_evento.required' => 'Por favor ingresar el mes y año del evento'
    ];

    public function localidad(){
        return $this->belongsTo(Localidad::class, 'localidad_id', 'localidad_id');
    }

    public function generos()
    {
        return $this->belongsToMany(
            Genero::class,
            'noticias_tienen_generos',
            'noticia_id',
            'genero_id',
            'noticia_id',
            'genero_id');
    }

    public function tickets()
    {
        return $this->belongsToMany(
            Ticket::class,
            'noticias_tienen_tickets',
            'noticia_id',
            'ticket_id',
            'noticia_id',
            'ticket_id');
    }
}
