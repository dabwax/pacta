<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class ServicosController extends AppController
{

    public function index()
    {
        $tableBanners = TableRegistry::get('Banners');
        $tablePages = TableRegistry::get('Pages');
        $tablePartners = TableRegistry::get('Partners');
        $tablePlans = TableRegistry::get('Plans');
        $tablePosts = TableRegistry::get('Posts');
        $tableNewsletter = TableRegistry::get('Newsletter');
        $tableServices = TableRegistry::get('Services');

        // Busca os banners
        $banners = $tableBanners->find()->order(['created' => 'DESC'])->all();

        // Busca a página de serviço
        $servico = $tablePages->find()->where(['subname' => 'Serviços'])->first();
        $servicos = $tableServices->find()->all();

        // Busca os parceiros
        $parceiros = $tablePartners->find()->order(['created' => 'DESC'])->all();

        // Busca os planos
        $planos = $tablePlans->find()->order(['created' => 'DESC'])->all();

        // Busca as noticias
        $noticias = $tablePosts->find()->order(['published_date' => 'DESC']);
        $noticias = $this->Paginate($noticias);

        // Busca a página de newsletter
        $newsletter = $tablePages->find()->where(['subname' => 'Newsletter'])->first();
        $newsletterEntity = $tableNewsletter->newEntity();

        $this->set(compact("servicos", "newsletter", "newsletterEntity", "noticias", "banners", "servico", "parceiros", "planos"));
    }
}
