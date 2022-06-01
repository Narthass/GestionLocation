<?php

namespace App\Entity;

use App\Config\EnumTypePayement;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\PayementRepository;

#[ORM\Entity(repositoryClass: PayementRepository::class)]
class Payement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'float', nullable: true)]
    private $SommePayee;

    #[ORM\Column(type: 'date')]
    private $date;

 

    #[ORM\ManyToOne(targetEntity: Contrat::class)]
    #[ORM\JoinColumn(nullable: false)] 
    private $contrat;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $MoyenPayement;

    #[ORM\Column(type: 'string',enumType:EnumTypePayement::class)]
    private $TypePayement;


  

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSommePayee(): ?float
    {
        return $this->SommePayee;
    }

    public function setSommePayee(?float $SommePayee): self
    {
        $this->SommePayee = $SommePayee;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }



    public function getContrat(): ?contrat
    {
        return $this->contrat;
    }

    public function setContrat(?contrat $contrat): self
    {
        $this->contrat = $contrat;

        return $this;
    }

    public function getMoyenPayement(): ?string
    {
        return $this->MoyenPayement;
    }

    public function setMoyenPayement(?string $MoyenPayement): self
    {
        $this->MoyenPayement = $MoyenPayement;

        return $this;
    }

   

   

    

}