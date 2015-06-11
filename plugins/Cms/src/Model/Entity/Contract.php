<?php
namespace Cms\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contract Entity.
 */
class Contract extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'address' => true,
        'zip_code' => true,
        'city' => true,
        'state' => true,
        'country' => true,
        'cnpj' => true,
        'mf' => true,
        'plan_id' => true,
        'legal_representant' => true,
        'rg' => true,
        'cpf' => true,
        'nacionality' => true,
        'plan' => true,
    ];
}
