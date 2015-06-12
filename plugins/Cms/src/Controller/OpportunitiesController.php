<?php
namespace Cms\Controller;

use Cms\Controller\AppController;

/**
 * Opportunities Controller
 *
 * @property \Cms\Model\Table\OpportunitiesTable $Opportunities
 */
class OpportunitiesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('opportunities', $this->paginate($this->Opportunities));
        $this->set('_serialize', ['opportunities']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $opportunity = $this->Opportunities->newEntity();
        if ($this->request->is('post')) {
            $opportunity = $this->Opportunities->patchEntity($opportunity, $this->request->data);
            if ($this->Opportunities->save($opportunity)) {
                $this->Flash->success(__('A oportunidade foi salva.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possível salvar a oportunidade.'));
            }
        }
        $this->set(compact('opportunity'));
        $this->set('_serialize', ['opportunity']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Opportunity id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $opportunity = $this->Opportunities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $opportunity = $this->Opportunities->patchEntity($opportunity, $this->request->data);
            if ($this->Opportunities->save($opportunity)) {
                $this->Flash->success(__('A oportunidade foi salva.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possível salvar a oportunidade.'));
            }
        }
        $this->set(compact('opportunity'));
        $this->set('_serialize', ['opportunity']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Opportunity id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $opportunity = $this->Opportunities->get($id);
        if ($this->Opportunities->delete($opportunity)) {
                $this->Flash->success(__('A oportunidade foi excluída.'));
        } else {
                $this->Flash->error(__('Não foi possível excluir a oportunidade.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
