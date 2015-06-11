<?php
namespace Cms\Controller;

use Cms\Controller\AppController;

/**
 * Affiliates Controller
 *
 * @property \Cms\Model\Table\AffiliatesTable $Affiliates
 */
class AffiliatesController extends AppController
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
        $this->set('affiliates', $this->paginate($this->Affiliates));
        $this->set('_serialize', ['affiliates']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $affiliate = $this->Affiliates->newEntity();
        if ($this->request->is('post')) {
            $affiliate = $this->Affiliates->patchEntity($affiliate, $this->request->data);
            if ($this->Affiliates->save($affiliate)) {
                $this->Flash->success(__('The affiliate has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The affiliate could not be saved. Please, try again.'));
            }
        }
        $plans = $this->Affiliates->Plans->find('list', ['limit' => 200]);
        $this->set(compact('affiliate', 'plans'));
        $this->set('_serialize', ['affiliate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Affiliate id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $affiliate = $this->Affiliates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $affiliate = $this->Affiliates->patchEntity($affiliate, $this->request->data);
            if ($this->Affiliates->save($affiliate)) {
                $this->Flash->success(__('The affiliate has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The affiliate could not be saved. Please, try again.'));
            }
        }
        $plans = $this->Affiliates->Plans->find('list', ['limit' => 200]);
        $this->set(compact('affiliate', 'plans'));
        $this->set('_serialize', ['affiliate']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Affiliate id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $affiliate = $this->Affiliates->get($id);
        if ($this->Affiliates->delete($affiliate)) {
            $this->Flash->success(__('The affiliate has been deleted.'));
        } else {
            $this->Flash->error(__('The affiliate could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
