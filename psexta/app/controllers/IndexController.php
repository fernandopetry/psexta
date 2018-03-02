<?php

class IndexController extends ControllerBase
{

    /**
     * @var \Phalcon\Db\Adapter\Pdo\Mysql
     */
    private $db;
    public function indexAction()
    {
        $this->view->disable();


//        $usuario = new Usuario();
////        $usuario->nome = "Marco & Allan";
////        $usuario->email = "email@email.com";
////        $usuario->senha = '123';
//
//        $data = [
//            "nome"=>"Marco e Allan 2",
//            "email"=>"email@email.com",
//            "senha"=>123456
//        ];
//        $usuario->save($data);


        $usuario = Usuario::findFirst(13);

        var_dump($usuario->delete());

    }

}

