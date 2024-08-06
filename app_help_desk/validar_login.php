<?php 
    
    session_start();


    
    //variavel que vai verificar se a autenticação foi realizada
    $usuario_autenticado = false;
    
    //usuários do sistema
    $usuarios_aplicacao = array(
        array('email' => 'adm@teste.com.br', 'senha' => '12345'),
        array('email' => 'usuario@teste.com.br', 'senha' => '54321'),
    );


    foreach ($usuarios_aplicacao as $user) {
        

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha'] ){
            $usuario_autenticado = true;
        }
      
        if($usuario_autenticado){
            echo 'Usuário autenticado!';
            $_SESSION['autenticado'] = 'SIM';
            header('Location: home.php');
        } else {
            $_SESSION['autenticado'] = 'NAO';
            header('Location: index.php?login=erro');
        }        

    }


?>