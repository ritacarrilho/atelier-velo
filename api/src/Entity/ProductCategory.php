<?php

namespace App\Entity;

use App\Repository\ProductCategoryRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=ProductCategoryRepository::class)
 * @ApiResource(
 *      collectionOperations={"get"},
 *      itemOperations={"get"}
 * )
 */
class ProductCategory
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $label;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function __toString()
    {
        return $this->label;
    }
}
