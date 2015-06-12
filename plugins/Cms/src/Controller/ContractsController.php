<?php
namespace Cms\Controller;

use Cms\Controller\AppController;

/**
 * Contracts Controller
 *
 * @property \Cms\Model\Table\ContractsTable $Contracts
 */
class ContractsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Plans']
        ];
        $this->set('contracts', $this->paginate($this->Contracts));
        $this->set('_serialize', ['contracts']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contract = $this->Contracts->newEntity();
        if ($this->request->is('post')) {
            $contract = $this->Contracts->patchEntity($contract, $this->request->data);
            if ($this->Contracts->save($contract)) {
                $this->Flash->success(__('O contrato foi cadastrado.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possível cadastrar o contrato.'));
            }
        }
        $plans = $this->Contracts->Plans->find('list', ['limit' => 200]);
        $this->set(compact('contract', 'plans'));
        $this->set('_serialize', ['contract']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Contract id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contract = $this->Contracts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contract = $this->Contracts->patchEntity($contract, $this->request->data);
            if ($this->Contracts->save($contract)) {
                $this->Flash->success(__('O contrato foi editado.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possível editar o contrato.'));
            }
        }
        $plans = $this->Contracts->Plans->find('list', ['limit' => 200]);
        $this->set(compact('contract', 'plans'));
        $this->set('_serialize', ['contract']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Contract id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contract = $this->Contracts->get($id);
        if ($this->Contracts->delete($contract)) {
                $this->Flash->success(__('O contrato foi excluído.'));
        } else {
                $this->Flash->error(__('Não foi possível excluir o contrato.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
