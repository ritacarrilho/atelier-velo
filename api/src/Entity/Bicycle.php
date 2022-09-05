<?php

namespace App\Entity;

use App\Repository\BicycleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BicycleRepository::class)
 */
class Bicycle
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $model;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $tires_condition;

    /**
     * @ORM\Column(type="integer")
     */
    private $breaks_condition;

    /**
     * @ORM\Column(type="integer")
     */
    private $gears_condition;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="boolean")
     */
    private $disponibility;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity=ProductCategory::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $category_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getTiresCondition(): ?int
    {
        return $this->tires_condition;
    }

    public function setTiresCondition(int $tires_condition): self
    {
        $this->tires_condition = $tires_condition;

        return $this;
    }

    public function getBreaksCondition(): ?int
    {
        return $this->breaks_condition;
    }

    public function setBreaksCondition(int $breaks_condition): self
    {
        $this->breaks_condition = $breaks_condition;

        return $this;
    }

    public function getGearsCondition(): ?int
    {
        return $this->gears_condition;
    }

    public function setGearsCondition(int $gears_condition): self
    {
        $this->gears_condition = $gears_condition;

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

    public function isDisponibility(): ?bool
    {
        return $this->disponibility;
    }

    public function setDisponibility(bool $disponibility): self
    {
        $this->disponibility = $disponibility;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getCategoryId(): ?ProductCategory
    {
        return $this->category_id;
    }

    public function setCategoryId(?ProductCategory $category_id): self
    {
        $this->category_id = $category_id;

        return $this;
    }
}
