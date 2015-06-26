<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class InstitucionalController extends AppController
{

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
        $institucional = $tablePages->find('language')->where(['subname' => 'Institucional'])->first();
        $o_que_fazemos = $tablePages->find('language')->where(['subname' => 'O que fazemos'])->contain(['PageBlocks'])->first();

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

        $this->set(compact("institucional", "o_que_fazemos", "newsletter", "newsletterEntity", "noticias", "banners", "servico", "parceiros", "planos"));
    }

}
