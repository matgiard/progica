<?php

namespace App\Entity;

use App\Repository\GiteServiceEquipementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GiteServiceEquipementRepository::class)]
class GiteServiceEquipement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'giteServiceEquipements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Gite $gite = null;

    #[ORM\ManyToOne(inversedBy: 'giteServiceEquipements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?ServiceEquipement $serviceEquipement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGite(): ?Gite
    {
        return $this->gite;
    }

    public function setGite(?Gite $gite): self
    {
        $this->gite = $gite;

        return $this;
    }

    public function getServiceEquipement(): ?ServiceEquipement
    {
        return $this->serviceEquipement;
    }

    public function setServiceEquipement(?ServiceEquipement $serviceEquipement): self
    {
        $this->serviceEquipement = $serviceEquipement;

        return $this;
    }
}
