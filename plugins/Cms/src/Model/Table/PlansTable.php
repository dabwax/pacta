<?php
namespace Cms\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cms\Model\Entity\Plan;

/**
 * Plans Model
 *
 * @property \Cake\ORM\Association\HasMany $Affiliates
 * @property \Cake\ORM\Association\HasMany $Contracts
 */
class PlansTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('plans');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasMany('Affiliates', [
            'foreignKey' => 'plan_id',
            'className' => 'Cms.Affiliates'
        ]);
        $this->hasMany('Contracts', [
            'foreignKey' => 'plan_id',
            'className' => 'Cms.Contracts'
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
            ->allowEmpty('content');
            
        $validator
            ->allowEmpty('price');
            
        $validator
            ->allowEmpty('destaque_1');
            
        $validator
            ->allowEmpty('destaque_2');
            
        $validator
            ->allowEmpty('destaque_3');

        return $validator;
    }
}
