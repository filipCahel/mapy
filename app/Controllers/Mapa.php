<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Mapa extends BaseController
{
    public function index()
    {
        return view("kunovice");
    }
    public function corka()
    {
        $cesta="https://eartquake.usgs.gov/earthquakes/feed/v1.0/summary/significat_month.geojson";
        $soubor=file_get_contents($cesta);
        $data["soubor"]=$soubor;
    }
}
