<?php
namespace App\Repositories\Interfaces;

Interface costumerRepositoryInterface{
    
    public function allcostumers();
    public function storecostumer($data);
    public function findcostumer($id);
    public function updatecostumer($data, $id); 
    public function destroycostumer($id);
}