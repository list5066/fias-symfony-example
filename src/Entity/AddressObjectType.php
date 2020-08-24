<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AddressObjectTypeRepository")
 * @ApiResource(
 *     collectionOperations={"get"},
 *     itemOperations={"get"}
 * )
 */
class AddressObjectType extends \Liquetsoft\Fias\Symfony\LiquetsoftFiasBundle\Entity\AddressObjectType
{
}
