<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fiore Entity
 *
 * @property int $id
 * @property string $name
 * @property int $occasion_id
 * @property int $cost
 * @property int $quantity
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\Occasion $occasion
 */
class Fiore extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'occasion_id' => true,
        'cost' => true,
        'quantity' => true,
        'created' => true,
        'modified' => true,
        'occasion' => true,
    ];
}
