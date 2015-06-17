<?php

namespace App\Controller;

use App\Controller\AppController as BaseController;
use Cake\ORM\TableRegistry;

class HomeController extends BaseController
{
    public $paginate = [
        'Posts' => [
            'limit' => 1,
            'order' => [
                'Posts.published_date' => 'DESC'
            ]
        ],
    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

/**
 *  Página inicial do site.
 *
 * @return void
 */
    public function index()
    {
        $tableBanners = TableRegistry::get('Banners');
        $tablePages = TableRegistry::get('Pages');
        $tablePartners = TableRegistry::get('Partners');
        $tablePlans = TableRegistry::get('Plans');
        $tablePosts = TableRegistry::get('Posts');

        // Busca os banners
        $banners = $tableBanners->find()->order(['created' => 'DESC'])->all();

        // Busca a página de serviço
        $servico = $tablePages->find()->where(['subname' => 'Serviços'])->first();

        // Busca os parceiros
        $parceiros = $tablePartners->find()->order(['created' => 'DESC'])->all();

        // Busca os planos
        $planos = $tablePlans->find()->order(['created' => 'DESC'])->all();

        // Busca as noticias
        $noticias = $tablePosts->find()->order(['published_date' => 'DESC']);
        $noticias = $this->Paginate($noticias);

        $this->set(compact("noticias", "banners", "servico", "parceiros", "planos"));
    }
}