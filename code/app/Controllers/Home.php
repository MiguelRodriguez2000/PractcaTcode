<?php

namespace App\Controllers;
use App\Models\mUsuarios;
class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function bienvenida()
    {
        return view('vbienvenida');
    }
    public function registro(){
        return view('vRegistro');
    }
     public function ingreso(){
        return view('vIngreso');
    }
    public function insertarForm(){
        $mUsuarios = new mUsuarios();
        $usuarioNuevo = [
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido'],
            "correo" => $_POST['correo'],
            "rol" => $_POST['rol'],
            "contra" => $_POST['contra']
        ];
        $mUsuarios->insert($usuarioNuevo);
        $datoId['id_usuario'] = $mUsuarios->
        db->insertID();
        return view("vSuccess",$datoId );
    }
    public function mostrarRegistros(){
        $mUsuarios = new mUsuarios();
        $todos = $mUsuarios->findAll();
        $usuarios=array('usuarios'=>$todos);
        return view("vRegistros", $usuarios);
    }

    public function ingresarForm(){
        $mUsuarios = new mUsuarios();
        $correo = $_POST['correo'];
        $contra = $_POST['contra'];
        $user= $mUsuarios->where('correo', $correo)->where('contra',$contra)->first();
        return view("vIngresado", $user);
    }
    public function actualizarRegistro(){
        $mUsuarios = new mUsuarios();
        $id_usuario = $_POST['id_usuario'];
        $usuarioActualizado = [
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido'],
            "correo" => $_POST['correo'],
            "rol" => $_POST['rol'],
            "contra" => $_POST['contra']
        ];
        $mUsuarios->update($id_usuario, $usuarioActualizado);
        return $this->mostrarRegistros();
    }
    public function buscarRegistro(){
        $mUsuarios = new mUsuarios();
        $id_usuario = $_POST['id_usuario'];
        $usuario=$mUsuarios->find($id_usuario);
        return view("vRegistroEncontrado", $usuario);
    }
    public function eliminarRegistro($id){
        $mUsuarios = new mUsuarios();
        $id_usuario = $id;
        $mUsuarios -> delete($id_usuario);

        return $this->mostrarRegistros();
    }
}
