<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Cinderella extends Entity {
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
