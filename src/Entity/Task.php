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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $livraison_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prix_livreur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $produits;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $destination;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieu_retrait;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

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

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getLivraisonDate(): ?string
    {
        return $this->livraison_date;
    }

    public function setLivraisonDate(string $livraison_date): self
    {
        $this->livraison_date = $livraison_date;

        return $this;
    }

    public function getPrixLivreur(): ?string
    {
        return $this->prix_livreur;
    }

    public function setPrixLivreur(string $prix_livreur): self
    {
        $this->prix_livreur = $prix_livreur;

        return $this;
    }

    public function getProduits(): ?string
    {
        return $this->produits;
    }

    public function setProduits(string $produits): self
    {
        $this->produits = $produits;

        return $this;
    }

    public function getDestination(): ?string
    {
        return $this->destination;
    }

    public function setDestination(string $destination): self
    {
        $this->destination = $destination;

        return $this;
    }

    public function getLieuRetrait(): ?string
    {
        return $this->lieu_retrait;
    }

    public function setLieuRetrait(string $lieu_retrait): self
    {
        $this->lieu_retrait = $lieu_retrait;

        return $this;
    }
}
