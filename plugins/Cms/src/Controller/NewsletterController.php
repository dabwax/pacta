<?php
namespace Cms\Controller;

use Cms\Controller\AppController;

/**
 * Newsletter Controller
 *
 * @property \Cms\Model\Table\NewsletterTable $Newsletter
 */
class NewsletterController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('newsletter', $this->paginate($this->Newsletter));
        $this->set('_serialize', ['newsletter']);
    }

    /**
     * View method
     *
     * @param string|null $id Newsletter id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $newsletter = $this->Newsletter->get($id, [
            'contain' => []
        ]);
        $this->set('newsletter', $newsletter);
        $this->set('_serialize', ['newsletter']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $newsletter = $this->Newsletter->newEntity();
        if ($this->request->is('post')) {
            $newsletter = $this->Newsletter->patchEntity($newsletter, $this->request->data);
            if ($this->Newsletter->save($newsletter)) {
                $this->Flash->success(__('The newsletter has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The newsletter could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('newsletter'));
        $this->set('_serialize', ['newsletter']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Newsletter id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $newsletter = $this->Newsletter->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $newsletter = $this->Newsletter->patchEntity($newsletter, $this->request->data);
            if ($this->Newsletter->save($newsletter)) {
                $this->Flash->success(__('The newsletter has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The newsletter could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('newsletter'));
        $this->set('_serialize', ['newsletter']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Newsletter id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $newsletter = $this->Newsletter->get($id);
        if ($this->Newsletter->delete($newsletter)) {
            $this->Flash->success(__('The newsletter has been deleted.'));
        } else {
            $this->Flash->error(__('The newsletter could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
