<?php

namespace App\Entity;

use App\Repository\ContratRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContratRepository::class)]
class Contrat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Client::class, inversedBy: 'contrats')]
    private $client;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $surface;

    

    #[ORM\Column(type: 'float', nullable: true)]
    private $loyer;

    #[ORM\Column(type: 'dateinterval', nullable: true)]
    private $FrequencePayement;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $DernierLoyer;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $ProchaineEcheance;

    #[ORM\Column(type: 'float', nullable: true)]
    private $MontantRestant;

  



   





    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getSurface(): ?string
    {
        return $this->surface;
    }

    public function setSurface(?string $surface): self
    {
        $this->surface = $surface;

        return $this;
    }



   

    public function getLoyer(): ?float
    {
        return $this->loyer;
    }

    public function setLoyer(?float $loyer): self
    {
        $this->loyer = $loyer;

        return $this;
    }

    public function getFrequencePayement(): ?\DateInterval
    {
        return $this->FrequencePayement;
    }

    public function setFrequencePayement(?\DateInterval $FrequencePayement): self
    {
        $this->FrequencePayement = $FrequencePayement;

        return $this;
    }

    public function getDernierLoyer(): ?\DateTimeInterface
    {
        return $this->DernierLoyer;
    }

    public function setDernierLoyer(?\DateTimeInterface $DernierLoyer): self
    {
        $this->DernierLoyer = $DernierLoyer;

        return $this;
    }

    public function getProchaineEcheance(): ?\DateTimeInterface
    {
        return $this->ProchaineEcheance;
    }

    public function setProchaineEcheance(?\DateTimeInterface $ProchaineEcheance): self
    {
        $this->ProchaineEcheance = $ProchaineEcheance;

        return $this;
    }

    public function getMontantRestant(): ?float
    {
        return $this->MontantRestant;
    }

    public function setMontantRestant(?float $MontantRestant): self
    {
        $this->MontantRestant = $MontantRestant;

        return $this;
    }

   

    

}
