<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
class Disfraz extends Model
{
    protected $table = 'disfraces';
    protected $fillable = [
        'nombre',
        'talla'
    ];
    static public function getDisfraces()
    {
        return self::all();
    }
    static public function getDisfrazById($id)
    {
        return self::find($id);
    }
    static public function createDisfraz(array $data)
    {
        return self::create($data);
    }
    static public function updateDisfraz(array $data, $id)
    {
        $disfraz = self::findOrFail($id);
        $disfraz->update($data);
        return $disfraz;
    }
    static public function deleteDisfraz(Disfraz $disfraz)
    {
        $disfraz->delete();
    }
}
