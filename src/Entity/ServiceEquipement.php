<?php

namespace App\Entity;

use App\Repository\ServiceEquipementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\FormTypeInterface;

#[ORM\Entity(repositoryClass: ServiceEquipementRepository::class)]
class ServiceEquipement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?float $price = null;

    #[ORM\OneToMany(mappedBy: 'serviceEquipement', targetEntity: GiteServiceEquipement::class)]
    private Collection $giteServiceEquipements;

    public function __construct()
    {
        $this->giteServiceEquipements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return Collection<int, GiteServiceEquipement>
     */
    public function getGiteServiceEquipements(): Collection
    {
        return $this->giteServiceEquipements;
    }

    public function addGiteServiceEquipement(GiteServiceEquipement $giteServiceEquipement): self
    {
        if (!$this->giteServiceEquipements->contains($giteServiceEquipement)) {
            $this->giteServiceEquipements->add($giteServiceEquipement);
            $giteServiceEquipement->setServiceEquipement($this);
        }

        return $this;
    }

    public function removeGiteServiceEquipement(GiteServiceEquipement $giteServiceEquipement): self
    {
        if ($this->giteServiceEquipements->removeElement($giteServiceEquipement)) {
            // set the owning side to null (unless already changed)
            if ($giteServiceEquipement->getServiceEquipement() === $this) {
                $giteServiceEquipement->setServiceEquipement(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->name.' '.$this->price;
    }
}
