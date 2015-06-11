<?php
namespace Cms\Controller;

use Cms\Controller\AppController;

/**
 * PageBlocks Controller
 *
 * @property \Cms\Model\Table\PageBlocksTable $PageBlocks
 */
class PageBlocksController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pages']
        ];
        $this->set('pageBlocks', $this->paginate($this->PageBlocks));
        $this->set('_serialize', ['pageBlocks']);
    }

    /**
     * View method
     *
     * @param string|null $id Page Block id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pageBlock = $this->PageBlocks->get($id, [
            'contain' => ['Pages']
        ]);
        $this->set('pageBlock', $pageBlock);
        $this->set('_serialize', ['pageBlock']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pageBlock = $this->PageBlocks->newEntity();
        if ($this->request->is('post')) {
            $pageBlock = $this->PageBlocks->patchEntity($pageBlock, $this->request->data);
            if ($this->PageBlocks->save($pageBlock)) {
                $this->Flash->success(__('The page block has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The page block could not be saved. Please, try again.'));
            }
        }
        $pages = $this->PageBlocks->Pages->find('list', ['limit' => 200]);
        $this->set(compact('pageBlock', 'pages'));
        $this->set('_serialize', ['pageBlock']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Page Block id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pageBlock = $this->PageBlocks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pageBlock = $this->PageBlocks->patchEntity($pageBlock, $this->request->data);
            if ($this->PageBlocks->save($pageBlock)) {
                $this->Flash->success(__('The page block has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The page block could not be saved. Please, try again.'));
            }
        }
        $pages = $this->PageBlocks->Pages->find('list', ['limit' => 200]);
        $this->set(compact('pageBlock', 'pages'));
        $this->set('_serialize', ['pageBlock']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Page Block id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pageBlock = $this->PageBlocks->get($id);
        if ($this->PageBlocks->delete($pageBlock)) {
            $this->Flash->success(__('The page block has been deleted.'));
        } else {
            $this->Flash->error(__('The page block could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
