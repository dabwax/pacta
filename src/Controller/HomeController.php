<?php

namespace App\Controller;

use App\Controller\AppController as BaseController;
use Cake\ORM\TableRegistry;

class HomeController extends BaseController
{
    public $paginate = [
        'Posts' => [
            'limit' => 3,
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
        $tableNewsletter = TableRegistry::get('Newsletter');

        // Busca os banners
        $banners = $tableBanners->find('language')->order(['created' => 'DESC'])->all();

        // Busca a página de serviço
        $servico = $tablePages->find('language')->where(['subname' => 'Serviços'])->first();

        // Busca os parceiros
        $parceiros = $tablePartners->find('language')->order(['created' => 'DESC'])->all();

        // Busca os planos
        $planos = $tablePlans->find('language')->order(['created' => 'DESC'])->all();

        // Busca as noticias
        $noticias = $tablePosts->find('language')->order(['published_date' => 'DESC']);
        $noticias = $this->Paginate($noticias);

        // Busca a página de newsletter
        $newsletter = $tablePages->find('language')->where(['subname' => 'Newsletter'])->first();
        $newsletterEntity = $tableNewsletter->newEntity();

        $this->set(compact("newsletter", "newsletterEntity", "noticias", "banners", "servico", "parceiros", "planos"));
    }
}