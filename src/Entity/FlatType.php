<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Типы квартир.
 *
 * @ORM\Entity(repositoryClass="App\Repository\FlatTypeRepository")
 */
class FlatType extends \Liquetsoft\Fias\Symfony\LiquetsoftFiasBundle\Entity\FlatType
{
}
