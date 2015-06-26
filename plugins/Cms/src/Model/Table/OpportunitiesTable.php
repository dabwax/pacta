<?php
namespace Cms\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cms\Model\Entity\Opportunity;

/**
 * Opportunities Model
 *
 * @property \Cake\ORM\Association\HasMany $OpportunityCards
 */
class OpportunitiesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('opportunities');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasMany('OpportunityCards', [
            'foreignKey' => 'opportunity_id',
            'className' => 'Cms.OpportunityCards'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('name');

        $validator
            ->allowEmpty('role');

        $validator
            ->allowEmpty('local');

        $validator
            ->allowEmpty('city');

        $validator
            ->allowEmpty('state');

        $validator
            ->allowEmpty('country');

        $validator
            ->allowEmpty('type');

        $validator
            ->allowEmpty('description');

        return $validator;
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
