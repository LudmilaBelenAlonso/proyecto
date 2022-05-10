<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Tickets
 *
 * @property int $ticket_id
 * @property string $nombre
 * @property int $precio
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Tickets newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tickets newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tickets query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tickets whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tickets whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tickets wherePrecio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tickets whereTicketId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tickets whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property \Illuminate\Support\Carbon $fecha
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereFecha($value)
 */
class Ticket extends Model
{
    //use HasFactory;
    protected $table = 'tickets';
    protected $primaryKey = 'ticket_id';

    protected  function precio():Attribute
    {
        return Attribute::make(
            function ($value){
                return $value / 100;
            }
        );
    }
    protected $casts = [
        'fecha' => 'date',
    ];
}


