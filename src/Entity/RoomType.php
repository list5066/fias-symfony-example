<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Типы комнат.
 *
 * @ORM\Entity(repositoryClass="App\Repository\RoomTypeRepository")
 */
class RoomType extends \Liquetsoft\Fias\Symfony\LiquetsoftFiasBundle\Entity\RoomType
{
}
