<?php
namespace Cms\Controller;

use Cms\Controller\AppController;

/**
 * Pins Controller
 *
 * @property \Cms\Model\Table\PinsTable $Pins
 */
class PinsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('pins', $this->paginate($this->Pins));
        $this->set('_serialize', ['pins']);
    }

    /**
     * View method
     *
     * @param string|null $id Pin id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pin = $this->Pins->get($id, [
            'contain' => []
        ]);
        $this->set('pin', $pin);
        $this->set('_serialize', ['pin']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pin = $this->Pins->newEntity();
        if ($this->request->is('post')) {
            $pin = $this->Pins->patchEntity($pin, $this->request->data);
            if ($this->Pins->save($pin)) {
                $this->Flash->success(__('O pin foi salvo.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possível salvar o pin.'));
            }
        }
        $this->set(compact('pin'));
        $this->set('_serialize', ['pin']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pin id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pin = $this->Pins->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pin = $this->Pins->patchEntity($pin, $this->request->data);
            if ($this->Pins->save($pin)) {
                $this->Flash->success(__('O pin foi salvo.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possível salvar o pin.'));
            }
        }
        $this->set(compact('pin'));
        $this->set('_serialize', ['pin']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pin id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pin = $this->Pins->get($id);
        if ($this->Pins->delete($pin)) {
                $this->Flash->success(__('O pin foi excluido.'));
        } else {
                $this->Flash->error(__('Não foi possível excluir o pin.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
