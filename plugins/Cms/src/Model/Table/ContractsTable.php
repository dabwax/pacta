<?php
namespace Cms\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cms\Model\Entity\Contract;

/**
 * Contracts Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Plans
 */
class ContractsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('contracts');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->belongsTo('Plans', [
            'foreignKey' => 'plan_id',
            'className' => 'Cms.Plans'
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
            ->allowEmpty('address');
            
        $validator
            ->allowEmpty('zip_code');
            
        $validator
            ->allowEmpty('city');
            
        $validator
            ->allowEmpty('state');
            
        $validator
            ->allowEmpty('country');
            
        $validator
            ->allowEmpty('cnpj');
            
        $validator
            ->allowEmpty('mf');
            
        $validator
            ->allowEmpty('legal_representant');
            
        $validator
            ->allowEmpty('rg');
            
        $validator
            ->allowEmpty('cpf');
            
        $validator
            ->allowEmpty('nacionality');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['plan_id'], 'Plans'));
        return $rules;
    }
}
