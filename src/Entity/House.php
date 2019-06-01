<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Дома.
 *
 * @ORM\Entity(repositoryClass="App\Repository\HouseRepository")
 */
class House extends \Liquetsoft\Fias\Symfony\LiquetsoftFiasBundle\Entity\House
{
}
