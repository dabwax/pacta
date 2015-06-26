<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\I18n\I18n;
use Cake\Routing\Router;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    public $session;
    public $browser_language;
    public $current_subdomain;
    public $current_language_id;

    public $helpers = [
        'Html' => [
            'className' => 'Pacta'
        ],
        'Form' => [
            'templates' => 'bootstrap_form'
        ]
    ];

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * @return void
     */
    public function initialize()
    {

        parent::initialize();
        $this->loadComponent('Flash');

        $this->session = $this->request->session();

        // Se o controller for uma área restrita
        if($this->areaRestrita == true) {
            // Recupera a sessão de admin
            $admin = $this->session->read("admin");

            // Se não houver sessão de admin, redireciona o usuário para o login
            if(empty($admin))
            {
                $this->Flash->error("Você não tem permissão para acessar esta página! Faça seu login.");

                return $this->redirect(['controller' => 'authentication', 'action' => 'login']);
            } // fim - return

        } // fim - areaRestrita

        // idioma
        $this->browser_language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        $this->current_subdomain = array_shift((explode(".",$_SERVER['HTTP_HOST'])));

        $this->setApplicationLanguage();
    }

    public function setApplicationLanguage()
    {
            // url atual
            $current_url = Router::url('/', true);
            $url_length = strlen(Router::url('/', true));

            // se não hou ver idioma, define o idioma do browser
            if(strlen($this->current_subdomain) != 2) {


                if(!in_array($this->browser_language, ['pt', 'en', 'es', 'fr'] )) {
                    $this->browser_language = "en";
                }

                // futura URL
                $new_url = 'http://' . $this->browser_language . '.' . substr($current_url, 7, $url_length);

                // redireciona
               return $this->redirect($new_url);
            }


            $language_urls = [
                 'pt' => 'http://pt.' . substr($current_url, 10, $url_length),
                 'en' => 'http://en.' . substr($current_url, 10, $url_length),
                 'es' => 'http://es.' . substr($current_url, 10, $url_length),
                 'fr' => 'http://fr.' . substr($current_url, 10, $url_length),
            ];

            $this->set(compact("language_urls"));
            $this->set("current_language", $this->current_subdomain);

            // detecta o idioma atual e carrega a localização correta
            switch($this->current_subdomain) {
                case 'pt':
                    I18n::locale('pt_BR');
                    $this->current_language_id = 1;
                break;
                case 'en':
                    I18n::locale('en_US');
                    $this->current_language_id = 2;
                break;
                case 'es':
                    I18n::locale('es_ES');
                    $this->current_language_id = 4;
                break;
                case 'fr':
                    I18n::locale('fr_FR');
                    $this->current_language_id = 3;
                break;
            }
    }
}
