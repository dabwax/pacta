<?php

namespace App\Controller;

use App\Controller\AppController as BaseController;
use Cake\ORM\TableRegistry;

class NewsletterController extends BaseController {

    public function initialize()
    {
        parent::initialize();
    }

    public function ajax_email_existe() {
        $this->layout = "ajax";
        $this->autoRender = false;

        $email = $_POST["email"];

        $tableNewslettter = TableRegistry::get("Newsletter");

        $find = $tableNewslettter->find()->where(['email' => $email])->first();

        if($find) {
            echo json_encode(array('result' => 'false'));
        } else {
            echo json_encode(array('result' => 'success'));
        }
    }

/**
 *  Action utilizada na home para fazer a inscrição na newsletter.
 *
 * @return void
 */
    public function add()
    {
        $email = $this->request->data['email'];
        $ip_address = $_SERVER['REMOTE_ADDR'];

        $tableNewslettter = TableRegistry::get("Newsletter");
        $entityNewsletter = $tableNewslettter->newEntity();

        $entityNewsletter->email = $email;
        $entityNewsletter->ip_address = $ip_address;

        $tableNewslettter->save($entityNewsletter);

        $this->Flash->success("Você foi cadastrado(a) na nossa newsletter.");

        return $this->redirect("/");
    }

}