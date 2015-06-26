<?php
namespace Cms\Controller;

use Cms\Controller\AppController;

/**
 * Partners Controller
 *
 * @property \Cms\Model\Table\PartnersTable $Partners
 */
class PartnersController extends AppController
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
        $this->set('partners', $this->paginate($this->Partners));
        $this->set('_serialize', ['partners']);
    }

    /**
     * View method
     *
     * @param string|null $id Partner id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $partner = $this->Partners->get($id, [
            'contain' => []
        ]);
        $this->set('partner', $partner);
        $this->set('_serialize', ['partner']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $partner = $this->Partners->newEntity();
        if ($this->request->is('post')) {
            $this->request->data['attachment'] = $this->Upload->uploadIt("attachment");
            $partner = $this->Partners->patchEntity($partner, $this->request->data);
            if ($this->Partners->save($partner)) {
                $this->Flash->success(__('O parceiro foi salvo.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possível salvar o parceiro.'));
            }
        }
        $this->set(compact('partner'));
        $this->set('_serialize', ['partner']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Partner id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $partner = $this->Partners->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $this->request->data['attachment'] = $this->Upload->uploadIt("attachment");
            $partner = $this->Partners->patchEntity($partner, $this->request->data);
            if ($this->Partners->save($partner)) {
                $this->Flash->success(__('O parceiro foi salvo.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possível salvar o parceiro.'));
            }
        }
        $this->set(compact('partner'));
        $this->set('_serialize', ['partner']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Partner id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $partner = $this->Partners->get($id);
        if ($this->Partners->delete($partner)) {
                $this->Flash->success(__('O parceiro foi excluido.'));
        } else {
                $this->Flash->error(__('Não foi possível excluir o parceiro.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
