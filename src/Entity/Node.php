<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Node
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private string $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $physicalId;

    /**
     * @var Collection|Edge[]
     * @ORM\OneToMany(targetEntity=Edge::class, mappedBy="source", orphanRemoval=true)
     */
    private Collection|array $exitEdges;

    /**
     * @ORM\OneToOne(targetEntity=Edge::class, mappedBy="target", cascade={"persist", "remove"})
     */
    private Edge $enterEdge;

    /**
     * @ORM\Column(type="integer")
     */
    private int $positionX;

    /**
     * @ORM\Column(type="integer")
     */
    private int $positionY;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $type;

    /**
     * @ORM\Column(type="json")
     */
    private array $data = [];

    public function __construct(string $physicalId, int $positionX, int $positionY, string $type, array $data)
    {
        $this->physicalId = $physicalId;
        $this->positionX = $positionX;
        $this->positionY = $positionY;
        $this->type = $type;
        $this->data = $data;
        $this->exitEdges = new ArrayCollection();
    }

    public function getPhysicalId(): string
    {
        return $this->physicalId;
    }

    /**
     * @return Collection|Edge[]
     */
    public function getExitEdges(): Collection
    {
        return $this->exitEdges;
    }

    public function addExitEdge(Edge $exitEdge): self
    {
        if (!$this->exitEdges->contains($exitEdge)) {
            $this->exitEdges[] = $exitEdge;
            $exitEdge->setSource($this);
        }

        return $this;
    }

    public function removeExitEdge(Edge $exitEdge): self
    {
        if ($this->exitEdges->removeElement($exitEdge)) {
            // set the owning side to null (unless already changed)
            if ($exitEdge->getSource() === $this) {
                $exitEdge->setSource(null);
            }
        }

        return $this;
    }

    public function getEnterEdge(): ?Edge
    {
        return $this->enterEdge;
    }

    public function setEnterEdge(Edge $enterEdge): self
    {
        // set the owning side of the relation if necessary
        if ($enterEdge->getTarget() !== $this) {
            $enterEdge->setTarget($this);
        }

        $this->enterEdge = $enterEdge;

        return $this;
    }

    public function getPositionX(): ?int
    {
        return $this->positionX;
    }

    public function setPositionX(int $positionX): self
    {
        $this->positionX = $positionX;

        return $this;
    }

    public function getPositionY(): ?int
    {
        return $this->positionY;
    }

    public function setPositionY(int $positionY): self
    {
        $this->positionY = $positionY;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getData(): ?array
    {
        return $this->data;
    }

    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
