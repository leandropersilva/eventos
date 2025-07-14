<?php
require_once 'src/utils/Controller.php';

class Usuario extends Controller
{
    public function perfil()
    {
        $this->render('usuario/perfil');
    }
    public function novo_encontro()
    {
        $this->modal('modal_novo_encontro');
    }
    public function gravar_novo_encontro()
    {
        $this->load_model('usuario/gravar_novo_encontro');
    }
}
