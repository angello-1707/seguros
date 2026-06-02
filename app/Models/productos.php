<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class productos extends Model
{
    //

    use HasFactory;
    protected $table = 'productos';
    protected $fillable = [
      'nom_prod',
      'col_prod',
      'obs_prod',
      'exist_prod',
      'pre_comp_prod',
      'pre_vta_pod'];
}
