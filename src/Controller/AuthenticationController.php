<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class AuthenticationController extends AppController
{

    public function login()
    {
            $affiliatesTable = TableRegistry::get('Affiliates');
            $affiliate = $affiliatesTable->newEntity();

            // requisição POST
            if($this->request->is("post")) {

                $email = $this->request->data['responsible_email'];
                $password = $this->request->data['responsible_password'];

                $options = ['responsible_email' => $email];

                $find = $affiliatesTable->find()->where($options)->first();

                // se não encontrar o associado
                if(empty($find)) {
                    $this->Flash->error("Este associado não existe.");

                // se o associado existir
                } else {
                    // verificar se a senha bate
                    $password_encrypted = md5($password);
                    $password_in_database = $find->responsible_password;

                    if($password_encrypted == $password_in_database) {
                        $this->Flash->success("Seja bem-vindo!");

                        $dateTime =  new \DateTime("now");

                        $find->responsible_last_login = $dateTime->format("Y-m-d H:i:s");

                        $affiliatesTable->save($find);

                        $this->session->write('user_logged', $find);

                    } else {
                        $this->Flash->error("A senha digitada é inválida.");
                    }
                }

                     return $this->redirect( ['controller' => 'home', 'action' => 'index'] );
            }

            $this->set(compact("affiliate"));
    }
}