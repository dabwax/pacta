<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class LocalizacaoController extends AppController
{

    public function index()
    {
        $tableBanners = TableRegistry::get('Banners');
        $tablePages = TableRegistry::get('Pages');
        $tablePins = TableRegistry::get('Pins');

        // Busca os banners
        $banners = $tableBanners->find()->order(['created' => 'DESC'])->all();
        $pins = $tablePins->find()->all();

        $this->set(compact("pins", "banners"));
    }
}