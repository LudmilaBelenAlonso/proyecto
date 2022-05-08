<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Localidad
 *
 * @property int $localidad_id
 * @property string $nombre
 * @property string $pais
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Localidad newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Localidad newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Localidad query()
 * @method static \Illuminate\Database\Eloquent\Builder|Localidad whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Localidad whereLocalidadId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Localidad whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Localidad wherePais($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Localidad whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Localidad extends Model
{
    //use HasFactory;
    protected $table = 'localidades';
    protected $primaryKey = 'localidad_id';
}
