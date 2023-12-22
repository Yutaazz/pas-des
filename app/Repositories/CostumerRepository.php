<?php

namespace App\Repositories;

use App\Repositories\Interfaces\costumerRepositoryInterface;
use App\Models\costumer;

class costumerRepository implements costumerRepositoryInterface
{

    public function allcostumers()
    {
        return costumer::latest()->paginate(10);
    }

    public function storecostumer($data)
    {
        return costumer::create($data);
    }

    public function findcostumer($id)
    {
        return costumer::find($id);
    }

    public function updatecostumer($data, $id)
    {
        $costumer = costumer::where('id', $id)->first();
        $costumer->kode = $data['kode'];
        $costumer->nama = $data['nama'];
        $costumer->telepon = $data['telepon'];
        $costumer->alamat = $data['alamat'];
        $costumer->save();
    }

    public function destroycostumer($id)
    {
        $costumer = costumer::find($id);
        $costumer->delete();
    }
}