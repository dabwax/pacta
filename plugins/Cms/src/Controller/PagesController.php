<?php
namespace Cms\Controller;

use Cms\Controller\AppController;

/**
 * Pages Controller
 *
 * @property \Cms\Model\Table\PagesTable $Pages
 */
class PagesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('pages', $this->paginate($this->Pages));
        $this->set('_serialize', ['pages']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $page = $this->Pages->newEntity();
        if ($this->request->is('post')) {
            $page = $this->Pages->patchEntity($page, $this->request->data);
            if ($this->Pages->save($page)) {
                $this->Flash->success(__('A página foi cadastrada.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possível cadastrar a página.'));
            }
        }
        $this->set(compact('page'));
        $this->set('_serialize', ['page']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Page id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {

        $where = ['page_id' => $id];
        $this->set('pageBlocks', $this->Pages->PageBlocks->find()->where($where)->all() );
        $this->set('_serialize', ['pageBlocks']);

        $page = $this->Pages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $page = $this->Pages->patchEntity($page, $this->request->data);
            if ($this->Pages->save($page)) {
                $this->Flash->success(__('A página foi salva.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possível editar a página.'));
            }
        }
        $this->set(compact('page'));
        $this->set('_serialize', ['page']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Page id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $page = $this->Pages->get($id);
        if ($this->Pages->delete($page)) {
                $this->Flash->success(__('A página foi excluída.'));
        } else {
                $this->Flash->error(__('Não foi possível excluir a página.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
