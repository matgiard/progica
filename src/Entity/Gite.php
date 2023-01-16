<?php

namespace App\Entity;

use App\Repository\GiteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: GiteRepository::class)]
class Gite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $adress = null;

    #[ORM\Column]
    private ?int $id_cities = null;

    #[ORM\Column]
    private ?float $surface = null;

    #[Vich\UploadableField(mapping: 'gites', fileNameProperty: 'link_picture', size: 'imageSize')]
    private ?File $imageFile = null;

    #[ORM\Column(length: 255)]
    private ?string $link_picture = null;

    #[ORM\Column]
    private ?int $rooms = null;

    #[ORM\Column]
    private ?int $beds = null;

    #[ORM\Column]
    private ?float $base_price = null;

    #[ORM\Column]
    private ?float $total_price = null;

    #[ORM\Column]
    private ?int $id_service = null;

    #[ORM\Column]
    private ?int $id_equipement = null;

    #[ORM\Column]
    private ?int $id_price_period = null;

    #[ORM\Column]
    private ?int $id_pets = null;

    #[ORM\Column]
    private ?int $id_position = null;

    #[ORM\Column]
    private ?int $id_owner = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getIdCities(): ?int
    {
        return $this->id_cities;
    }

    public function setIdCities(int $id_cities): self
    {
        $this->id_cities = $id_cities;

        return $this;
    }

    public function getSurface(): ?float
    {
        return $this->surface;
    }

    public function setSurface(float $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function getLinkPicture(): ?string
    {
        return $this->link_picture;
    }

    public function setLinkPicture(string $link_picture): self
    {
        $this->link_picture = $link_picture;

        return $this;
    }

    public function getRooms(): ?int
    {
        return $this->rooms;
    }

    public function setRooms(int $rooms): self
    {
        $this->rooms = $rooms;

        return $this;
    }

    public function getBeds(): ?int
    {
        return $this->beds;
    }

    public function setBeds(int $beds): self
    {
        $this->beds = $beds;

        return $this;
    }

    public function getBasePrice(): ?float
    {
        return $this->base_price;
    }

    public function setBasePrice(float $base_price): self
    {
        $this->base_price = $base_price;

        return $this;
    }

    public function getTotalPrice(): ?float
    {
        return $this->total_price;
    }

    public function setTotalPrice(float $total_price): self
    {
        $this->total_price = $total_price;

        return $this;
    }

    public function getIdService(): ?int
    {
        return $this->id_service;
    }

    public function setIdService(int $id_service): self
    {
        $this->id_service = $id_service;

        return $this;
    }

    public function getIdEquipement(): ?int
    {
        return $this->id_equipement;
    }

    public function setIdEquipement(int $id_equipement): self
    {
        $this->id_equipement = $id_equipement;

        return $this;
    }

    public function getIdPricePeriod(): ?int
    {
        return $this->id_price_period;
    }

    public function setIdPricePeriod(int $id_price_period): self
    {
        $this->id_price_period = $id_price_period;

        return $this;
    }

    public function getIdPets(): ?int
    {
        return $this->id_pets;
    }

    public function setIdPets(int $id_pets): self
    {
        $this->id_pets = $id_pets;

        return $this;
    }

    public function getIdPosition(): ?int
    {
        return $this->id_position;
    }

    public function setIdPosition(int $id_position): self
    {
        $this->id_position = $id_position;

        return $this;
    }

    public function getIdOwner(): ?int
    {
        return $this->id_owner;
    }

    public function setIdOwner(int $id_owner): self
    {
        $this->id_owner = $id_owner;

        return $this;
    }
}
