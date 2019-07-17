<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\TaskRepository")
 */
class Task
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $livraisonDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imgTask;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieuRetrait;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieuLivraison;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $remuneration;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imgVehicule;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $taskCategory;

    /**
     * @ORM\Column(type="integer")
     */
    private $authorId;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $livreurId;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLivraisonDate(): ?\DateTimeInterface
    {
        return $this->livraisonDate;
    }

    public function setLivraisonDate(\DateTimeInterface $livraisonDate): self
    {
        $this->livraisonDate = $livraisonDate;

        return $this;
    }

    public function getImgTask(): ?string
    {
        return $this->imgTask;
    }

    public function setImgTask(?string $imgTask): self
    {
        $this->imgTask = $imgTask;

        return $this;
    }

    public function getLieuRetrait(): ?string
    {
        return $this->lieuRetrait;
    }

    public function setLieuRetrait(string $lieuRetrait): self
    {
        $this->lieuRetrait = $lieuRetrait;

        return $this;
    }

    public function getLieuLivraison(): ?string
    {
        return $this->lieuLivraison;
    }

    public function setLieuLivraison(string $lieuLivraison): self
    {
        $this->lieuLivraison = $lieuLivraison;

        return $this;
    }

    public function getRemuneration(): ?string
    {
        return $this->remuneration;
    }

    public function setRemuneration(string $remuneration): self
    {
        $this->remuneration = $remuneration;

        return $this;
    }

    public function getImgVehicule(): ?string
    {
        return $this->imgVehicule;
    }

    public function setImgVehicule(string $imgVehicule): self
    {
        $this->imgVehicule = $imgVehicule;

        return $this;
    }

    public function getTaskCategory(): ?string
    {
        return $this->taskCategory;
    }

    public function setTaskCategory(string $taskCategory): self
    {
        $this->taskCategory = $taskCategory;

        return $this;
    }

    public function getAuthorId(): ?int
    {
        return $this->authorId;
    }

    public function setAuthorId(int $authorId): self
    {
        $this->authorId = $authorId;

        return $this;
    }

    public function getLivreurId(): ?int
    {
        return $this->livreurId;
    }

    public function setLivreurId(?int $livreurId): self
    {
        $this->livreurId = $livreurId;

        return $this;
    }
}
