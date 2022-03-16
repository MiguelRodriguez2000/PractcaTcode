<?php

namespace App\Controllers;
use App\Models\mFacturas;
class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function bienvenida()
    {
        return view('vBienvenida');
    }
    public function registro(){
        return view('vRegistro');
    }
     public function ingreso(){
        return view('vIngreso');
    }
    public function insertarForm(){
        $mFacturas = new mFacturas();
        $facturaNueva = [
            "fecha" => $_POST['fecha'],
            "descripcion" => $_POST['descripcion'],
            "cantidad" => $_POST['cantidad'],
            "precio_u" => $_POST['precio_u'],
            $total = $_POST['cantidad'] * $_POST['precio_u'],
            "total" =>  $total
        ];
        $mFacturas->insert($facturaNueva);
        $datoId['id_factura'] = $mFacturas->
        db->insertID();
        return view("vSuccess",$datoId );
    }
    public function mostrarRegistros(){
        $mFacturas = new mFacturas();
        $todos = $mFacturas->findAll();
        $facturas=array('facturas'=>$todos);
        return view("vRegistros", $facturas);
    }

    
    public function actualizarRegistro(){
        $mFacturas = new mFacturas();
        $id_factura = $_POST['id_factura'];
        $facturaActualizado = [
            "fecha" => $_POST['fecha'],
            "descripcion" => $_POST['descripcion'],
            "cantidad" => $_POST['cantidad'],
            "precio_u" => $_POST['precio_u'],
            $total = $_POST['cantidad'] * $_POST['precio_u'],
            "total" =>  $total
        ];
        $mFacturas->update($id_factura, $facturaActualizado);
        return $this->mostrarRegistros();
    }
    public function buscarRegistro($id){
        $mFacturas = new mFacturas();
        $id_factura = $id;
        $factura=$mFacturas->find($id_factura);
        return view("vRegistroEncontrado", $factura);
    }
    public function eliminarRegistro($id){
        $mFacturas = new mFacturas();
        $id_factura = $id;
        $mFacturas -> delete($id_factura);

        return $this->mostrarRegistros();
    }
}

