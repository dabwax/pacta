<?php
namespace Cms\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cms\Model\Entity\Pin;

/**
 * Pins Model
 *
 */
class PinsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('pins');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
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
            ->allowEmpty('address');
            
        $validator
            ->allowEmpty('neighborhood');
            
        $validator
            ->allowEmpty('city');
            
        $validator
            ->allowEmpty('state');
            
        $validator
            ->allowEmpty('country');
            
        $validator
            ->allowEmpty('latitude');
            
        $validator
            ->allowEmpty('longitude');
            
        $validator
            ->allowEmpty('type');

        return $validator;
    }
}
