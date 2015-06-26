<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class OportunidadesController extends AppController
{
    public $paginate = [
        'Opportunities' => [
            'limit' => 3,
            'order' => [
                'Opportunities.created' => 'DESC'
            ]
        ],
    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->loadComponent('Upload');
    }

    public function cadastro()
    {
        $this->autoRender = false;

        $tableOportunidadeCards = TableRegistry::get('OpportunityCards');


            $this->request->data['attachment'] = $this->Upload->uploadIt("attachment");

        $entityOpportunityCard = $tableOportunidadeCards->newEntity($this->request->data);

        $tableOportunidadeCards->save($entityOpportunityCard);

        $this->Flash->success("Você foi cadastrado(a) com sucesso.");

        return $this->redirect( ['action' => 'index'] );
    }

    public function index()
    {
        $tableOportunidades = TableRegistry::get('Opportunities');
        $tableOportunidadeCards = TableRegistry::get('OpportunityCards');
        $tableBanners = TableRegistry::get('Banners');

        // Busca os banners
        $banners = $tableBanners->find('language')->order(['created' => 'DESC'])->all();

        // Busca a página de newsletter
        $oportunidades = $tableOportunidades->find('language')->order(['id' => 'DESC']);
        $oportunidades = $this->Paginate($oportunidades);

        $entityOpportunityCard = $tableOportunidadeCards->newEntity();

        $this->set(compact("entityOpportunityCard", "banners", "oportunidades"));
    }
}
