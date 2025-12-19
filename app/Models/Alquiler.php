<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    protected $table = 'alquileres';
    protected $fillable = [
        'fecha'
    ];
    static public function getAlquieres()
    {
        return self::all();
    }
    static public function getAlquilerById($id)
    {
        return self::find($id);
    }
    static public function createAlquiler(array $data)
    {
        return self::create($data);
    }
    static public function updateAlquiler(array $data, $id)
    {
        $alquiler = self::findOrFail($id);
        $alquiler->update($data);
        return $alquiler;
    }
    static public function deleteAlquiler(Disfraz $alquiler)
    {
        $alquiler->delete();
    }
}
