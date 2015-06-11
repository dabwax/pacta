<?php
namespace Cms\Controller;

use Cms\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cms\Model\Entity\Admin;

/**
 * Controller referente a autenticações do CMS.
 *
 * @author henrique <henrique@bblender.com.br>
 */
class AuthenticationController extends AppController
{

/**
 * Página de login.
 *
 * @author henrique <henrique@bblender.com.br>
 * @return void
 */
    public function login()
    {
        // Se o admin já estiver logado, redireciona ele para a dashboard
        $admin = $this->session->read("admin");

        if($admin)
        {
            $this->Flash->success("Você já se encontra autenticado no sistema. Seja bem-vindo novamente.");

            return $this->redirect(['controller' => 'dashboard', 'action' => 'index']);
        }

        // Se houver requisição POST
        if($this->request->is("post"))
        {
            // 1 - Verificar se o e-mail digitado existe
            $username = $this->request->data['username'];
            $password = $this->request->data['password'];

            $entityAdmin = new Admin(['username' => $username, 'password' => $password]);

            $admin = $entityAdmin->checarAdminExiste();

            if(!$admin)
            {
                // 2 - Se não existir, mensagem de erro
                $this->Flash->error("Este e-mail não existe no sistema.");
            } // fim - admin existir
            else
            {
                // 3 - Se o e-mail existir, verificar se a senha digitada está correta
                if($entityAdmin->checarSenha($admin, $password))
                {
                    // 4 - Se estiver correta, autentica (cria sessão) e redireciona para dashboard
                    $this->Flash->success("Seja bem-vindo ao gerenciador de conteúdo do site!");

                    $this->session->write("admin", $admin);

                    return $this->redirect(['controller' => 'dashboard', 'action' => 'index']);
                }
                else
                {
                    // 5 - Se estiver errada, mensagem de erro
                    $this->Flash->error("A senha digitada é inválida.");
                } // fim - checarSenha

            } // fim - admin existir


        } // fim - POST
    } // fim - login

}