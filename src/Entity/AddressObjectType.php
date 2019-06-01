<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Типы объектов в адресах.
 *
 * @ORM\Entity(repositoryClass="App\Repository\AddressObjectTypeRepository")
 */
class AddressObjectType extends \Liquetsoft\Fias\Symfony\LiquetsoftFiasBundle\Entity\AddressObjectType
{
}
