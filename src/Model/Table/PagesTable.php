<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use App\Model\Entity\Page;

/**
 * Pages Model
 *
 * @property \Cake\ORM\Association\HasMany $PageBlocks
 */
class PagesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('pages');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasMany('PageBlocks', [
            'foreignKey' => 'page_id',
            'className' => 'App.PageBlocks'
        ]);
    }

    public function findLanguage(Query $query, array $options)
    {
        $current_subdomain = array_shift((explode(".",$_SERVER['HTTP_HOST'])));

        switch($current_subdomain) {
            case 'pt':
                $language_id = 1;
            break;
            case 'en':
                $language_id = 2;
            break;
            case 'es':
                $language_id = 4;
            break;
            case 'fr':
                $language_id = 3;
            break;
        }

        $query->where([
            $this->_alias . '.language_id' => $language_id,
        ]);
        return $query;
    }

    public function beforeMarshal($event, $data, $options)
    {
        $current_subdomain = array_shift((explode(".",$_SERVER['HTTP_HOST'])));

        switch($current_subdomain) {
            case 'pt':
                $language_id = 1;
            break;
            case 'en':
                $language_id = 2;
            break;
            case 'es':
                $language_id = 4;
            break;
            case 'fr':
                $language_id = 3;
            break;
        }

        $data['language_id'] = $language_id;
    }
}
