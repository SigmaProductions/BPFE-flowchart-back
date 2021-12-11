<?php

namespace App\Entity;

use App\Repository\EdgeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EdgeRepository::class)
 */
class Edge
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $physicalId;

    /**
     * @ORM\ManyToOne(targetEntity=Node::class, inversedBy="exitEdges")
     * @ORM\JoinColumn(nullable=false)
     */
    private Node $source;

    /**
     * @ORM\OneToOne(targetEntity=Node::class, inversedBy="enterEdge", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private Node $target;

    public function __construct(string $physicalId, Node $source, Node $target)
    {
        $this->physicalId = $physicalId;
        $this->source = $source;
        $this->target = $target;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSource(): ?Node
    {
        return $this->source;
    }

    public function setSource(?Node $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getTarget(): ?Node
    {
        return $this->target;
    }

    public function setTarget(Node $target): self
    {
        $this->target = $target;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhysicalId(): string
    {
        return $this->physicalId;
    }

    /**
     * @param string $physicalId
     */
    public function setPhysicalId(string $physicalId): self
    {
        $this->physicalId = $physicalId;

        return $this;
    }
}
