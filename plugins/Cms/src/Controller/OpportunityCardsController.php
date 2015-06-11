<?php
namespace Cms\Controller;

use Cms\Controller\AppController;

/**
 * OpportunityCards Controller
 *
 * @property \Cms\Model\Table\OpportunityCardsTable $OpportunityCards
 */
class OpportunityCardsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Opportunities']
        ];
        $this->set('opportunityCards', $this->paginate($this->OpportunityCards));
        $this->set('_serialize', ['opportunityCards']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $opportunityCard = $this->OpportunityCards->newEntity();
        if ($this->request->is('post')) {
            $opportunityCard = $this->OpportunityCards->patchEntity($opportunityCard, $this->request->data);
            if ($this->OpportunityCards->save($opportunityCard)) {
                $this->Flash->success(__('The opportunity card has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The opportunity card could not be saved. Please, try again.'));
            }
        }
        $opportunities = $this->OpportunityCards->Opportunities->find('list', ['limit' => 200]);
        $this->set(compact('opportunityCard', 'opportunities'));
        $this->set('_serialize', ['opportunityCard']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Opportunity Card id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $opportunityCard = $this->OpportunityCards->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $opportunityCard = $this->OpportunityCards->patchEntity($opportunityCard, $this->request->data);
            if ($this->OpportunityCards->save($opportunityCard)) {
                $this->Flash->success(__('The opportunity card has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The opportunity card could not be saved. Please, try again.'));
            }
        }
        $opportunities = $this->OpportunityCards->Opportunities->find('list', ['limit' => 200]);
        $this->set(compact('opportunityCard', 'opportunities'));
        $this->set('_serialize', ['opportunityCard']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Opportunity Card id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $opportunityCard = $this->OpportunityCards->get($id);
        if ($this->OpportunityCards->delete($opportunityCard)) {
            $this->Flash->success(__('The opportunity card has been deleted.'));
        } else {
            $this->Flash->error(__('The opportunity card could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
