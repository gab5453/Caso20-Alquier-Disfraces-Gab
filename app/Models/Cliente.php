<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $fillable = [
        'nombre',
        'telefono'
    ];
    static public function getClientes()
    {
        return self::all();
    }
    static public function getClienteById($id)
    {
        return self::find($id);
    }
    static public function createCliente(array $data)
    {
        return self::create($data);
    }
    static public function updateCliente(array $data, $id)
    {
        $cliente = self::findOrFail($id);
        $cliente->update($data);
        return $cliente;
    }
    static public function deleteCliente(Disfraz $cliente)
    {
        $cliente->delete();
    }
}
