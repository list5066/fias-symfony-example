<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Комнаты.
 *
 * @ORM\Entity(repositoryClass="App\Repository\RoomRepository")
 */
class Room extends \Liquetsoft\Fias\Symfony\LiquetsoftFiasBundle\Entity\Room
{
}
