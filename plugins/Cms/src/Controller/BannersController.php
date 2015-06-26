<?php
namespace Cms\Controller;

use Cms\Controller\AppController;

/**
 * Banners Controller
 *
 * @property \Cms\Model\Table\BannersTable $Banners
 */
class BannersController extends AppController
{
    public $paginate = [
        'finder' => 'language',
    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Upload');
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('banners', $this->paginate($this->Banners));
        $this->set('_serialize', ['banners']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $banner = $this->Banners->newEntity();
        if ($this->request->is('post')) {

            $this->request->data['attachment'] = $this->Upload->uploadIt("attachment");

            $banner = $this->Banners->newEntity($this->request->data);
            if ($this->Banners->save($banner)) {
                $this->Flash->success(__('O banner foi salvo.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possível salvar o banner.'));
            }
        }
        $this->set(compact('banner'));
        $this->set('_serialize', ['banner']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Banner id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $banner = $this->Banners->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $this->request->data['attachment'] = $this->Upload->uploadIt("attachment");
            $banner = $this->Banners->patchEntity($banner, $this->request->data);
            if ($this->Banners->save($banner)) {
                $this->Flash->success(__('O banner foi salvo.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possível salvar o banner.'));
            }
        }
        $this->set(compact('banner'));
        $this->set('_serialize', ['banner']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Banner id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $banner = $this->Banners->get($id);
        if ($this->Banners->delete($banner)) {
                $this->Flash->success(__('O banner foi excluir.'));
        } else {
                $this->Flash->error(__('Não foi possível excluir o banner.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
