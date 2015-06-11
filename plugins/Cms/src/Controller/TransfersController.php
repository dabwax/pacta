<?php
namespace Cms\Controller;

use Cms\Controller\AppController;

/**
 * Transfers Controller
 *
 * @property \Cms\Model\Table\TransfersTable $Transfers
 */
class TransfersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $this->set('transfers', $this->paginate($this->Transfers));
        $this->set('_serialize', ['transfers']);
    }

    /**
     * View method
     *
     * @param string|null $id Transfer id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $transfer = $this->Transfers->get($id, [
            'contain' => ['Users']
        ]);
        $this->set('transfer', $transfer);
        $this->set('_serialize', ['transfer']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $transfer = $this->Transfers->newEntity();
        if ($this->request->is('post')) {
            $transfer = $this->Transfers->patchEntity($transfer, $this->request->data);
            if ($this->Transfers->save($transfer)) {
                $this->Flash->success(__('The transfer has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The transfer could not be saved. Please, try again.'));
            }
        }
        $users = $this->Transfers->Users->find('list', ['limit' => 200]);
        $this->set(compact('transfer', 'users'));
        $this->set('_serialize', ['transfer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Transfer id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $transfer = $this->Transfers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transfer = $this->Transfers->patchEntity($transfer, $this->request->data);
            if ($this->Transfers->save($transfer)) {
                $this->Flash->success(__('The transfer has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The transfer could not be saved. Please, try again.'));
            }
        }
        $users = $this->Transfers->Users->find('list', ['limit' => 200]);
        $this->set(compact('transfer', 'users'));
        $this->set('_serialize', ['transfer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Transfer id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transfer = $this->Transfers->get($id);
        if ($this->Transfers->delete($transfer)) {
            $this->Flash->success(__('The transfer has been deleted.'));
        } else {
            $this->Flash->error(__('The transfer could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
