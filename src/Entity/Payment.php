<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payment
 *
 * @ORM\Table(name="payment", indexes={@ORM\Index(name="fk_payment_participant1_idx", columns={"participant_id"})})
 * @ORM\Entity
 */
class Payment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $amount;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $updatedAt;

    /**
     * @var bool
     *
     * @ORM\Column(name="show_participant", type="boolean", nullable=false, options={"default"="1"})
     */
    private $showParticipant = 1;

    /**
     * @var bool
     *
     * @ORM\Column(name="show_amount", type="boolean", nullable=false, options={"default"="1"})
     */
    private $showAmount = 1;

    /**
     * @var \Participant
     *
     * @ORM\ManyToOne(targetEntity="Participant", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="participant_id", referencedColumnName="id")
     * })
     */
    private $participant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getShowParticipant(): ?bool
    {
        return $this->showParticipant;
    }

    public function setShowParticipant(bool $showParticipant): self
    {
        $this->showParticipant = $showParticipant;

        return $this;
    }

    public function getShowAmount(): ?bool
    {
        return $this->showAmount;
    }

    public function setShowAmount(bool $showAmount): self
    {
        $this->showAmount = $showAmount;

        return $this;
    }

    public function getParticipant(): ?Participant
    {
        return $this->participant;
    }

    public function setParticipant(?Participant $participant): self
    {
        $this->participant = $participant;

        return $this;
    }


}
