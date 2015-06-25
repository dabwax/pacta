<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Network\Email\Email;

class ContatoController extends AppController
{

    public function index()
    {
        $tableContacts = TableRegistry::get("Contacts");
        $entityContact = $tableContacts->newEntity();

        if($this->request->is("post")) {
            $entityContact = $tableContacts->patchEntity($entityContact, $this->request->data);

            if ($tableContacts->save($entityContact)) {
                $this->Flash->success(__('O seu contato foi enviado.'));

                $email = new Email('default');
                $email->from([$this->request->data['email'] => $this->request->data['name']])
                    ->to('henrique@bblender.com.br')
                    ->subject('[Pacta] ' . $this->request->data['subject'])
                    ->send($this->request->data['message']);

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possível enviar o contato.'));
            }
        }

        $this->set(compact("entityContact"));

    }
}
