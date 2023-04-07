<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('infopage/index');
    }

    public function sobre_nosotros()
    {
        return view('infopage/info');
    }

    public function productos()
    {
        return view('infopage/productos');
    }

    public function servicios()
    {
        return view('infopage/servicios');
    }

    public function proyectos()
    {
        return view('infopage/proyectos');
    }
}
