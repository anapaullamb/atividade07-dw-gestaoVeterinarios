<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Datalist extends Component {

    public $crud;
    public $header;
    public $route;
    public $titulo;
    public $data;

    public function __construct($crud, $header, $data, $titulo,$route) {
        $this->crud = $crud;   
        $this->header = $header;
        $this->data = $data;    
        $this->titulo = $titulo;    
        $this->route = $route;    
    }

    public function render() {

        return view('components.datalist');
    }
}
