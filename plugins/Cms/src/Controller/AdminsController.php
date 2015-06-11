<?php
namespace Cms\Controller;

use Cms\Controller\AppController;

/**
 * Controller para gerenciar os administradores do CMS.
 *
 * @author henrique <henrique@bblender.com.br>
 */
class AdminsController extends AppController
{
    public $areaRestrita = true;

/**
 * Página de listagem dos administradores.
 *
 * @return void
 */
    public function index()
    {
        $this->set('admins', $this->paginate($this->Admins));

        $this->set('_serialize', ['admins']);
    }

/**
 * Página de inserção de um novo administrador.
 *
 * @return void
 */
    public function add()
    {
        $admin = $this->Admins->newEntity();

        if ($this->request->is('post'))
        {
            $admin = $this->Admins->patchEntity($admin, $this->request->data);

            if ($this->Admins->save($admin))
            {
                $this->Flash->success(__('O administrador foi cadastrado.'));

                return $this->redirect(['action' => 'index']);
            }
            else
            {
                $this->Flash->error(__('Não foi possível cadastrar o administrador.'));
            }
        }
        $this->set(compact('admin'));

        $this->set('_serialize', ['admin']);
    }

/**
 * Página de edição de um administrador existente.
 *
 * @return void
 */
    public function edit($id = null)
    {
        $admin = $this->Admins->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put']))
        {

            // Se o campo de senha for preenchido, encripta ele novamente
            if(!empty($this->request->data['password']))
            {
                $this->request->data['password'] = md5($this->request->data['password']);
            }

            $admin = $this->Admins->patchEntity($admin, $this->request->data);

            if ($this->Admins->save($admin))
            {
                $this->Flash->success(__('O administrador foi editado.'));

                return $this->redirect(['action' => 'index']);
            }
            else
            {
                $this->Flash->error(__('Não foi possível editar o administrador.'));
            }
        }
        $this->set(compact('admin'));

        $this->set('_serialize', ['admin']);
    }


/**
 * Página de remoção de um administrador.
 *
 * @return void
 */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $admin = $this->Admins->get($id);

        if ($this->Admins->delete($admin))
        {
            $this->Flash->success(__('O administrador foi excluído.'));
        }
        else
        {
            $this->Flash->error(__('Não foi possível excluir o administrador.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
