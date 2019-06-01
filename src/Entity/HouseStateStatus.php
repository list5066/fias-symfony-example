<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Статусы.
 *
 * @ORM\Entity(repositoryClass="App\Repository\HouseStateStatusRepository")
 */
class HouseStateStatus extends \Liquetsoft\Fias\Symfony\LiquetsoftFiasBundle\Entity\HouseStateStatus
{
}
