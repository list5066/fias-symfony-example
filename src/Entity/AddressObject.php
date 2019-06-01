<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Адреса.
 *
 * @ORM\Entity(repositoryClass="App\Repository\AddressObjectRepository")
 */
class AddressObject extends \Liquetsoft\Fias\Symfony\LiquetsoftFiasBundle\Entity\AddressObject
{
}
