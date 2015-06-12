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
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add($id)
    {
        $pageBlock = $this->PageBlocks->newEntity();
        if ($this->request->is('post')) {

            $this->request->data['page_id'] = $id;

            $pageBlock = $this->PageBlocks->patchEntity($pageBlock, $this->request->data);
            if ($this->PageBlocks->save($pageBlock)) {
                $this->Flash->success(__('O bloco de conteúdo foi vinculado a página.'));
                return $this->redirect(['controller' => 'pages', 'action' => 'edit', $id]);
            } else {
                $this->Flash->error(__('Não foi possível cadastrar o bloco de conteúdo.'));
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
    public function edit($id = null, $page_id = null)
    {
        $pageBlock = $this->PageBlocks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pageBlock = $this->PageBlocks->patchEntity($pageBlock, $this->request->data);
            if ($this->PageBlocks->save($pageBlock)) {
                $this->Flash->success(__('O bloco de conteúdo foi editado.'));
                return $this->redirect(['controller' => 'pages', 'action' => 'edit', $page_id]);
            } else {
                $this->Flash->error(__('Não foi possível editar o bloco de conteúdo.'));
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
    public function delete($id = null, $page_id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pageBlock = $this->PageBlocks->get($id);
        if ($this->PageBlocks->delete($pageBlock)) {
            $this->Flash->success(__('O bloco de conteúdo foi excluído.'));
        } else {
            $this->Flash->error(__('Não foi possível excluir o bloco de conteúdo'));
        }
        return $this->redirect(['controller' => 'pages', 'action' => 'edit', $page_id]);
    }
}
