<?php

namespace App\Repository;

use App\Entity\Node;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Node|null find($id, $lockMode = null, $lockVersion = null)
 * @method Node|null findOneBy(array $criteria, array $orderBy = null)
 * @method Node[]    findAll()
 * @method Node[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NodeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Node::class);
    }

    public function findOneByPhysicalId($value): ?Node
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.physicalId = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    public function findParentNode(): ?Node
    {
        return $this->createQueryBuilder('n')
            ->leftJoin('n.enterEdge', 'e')
            ->andWhere('e.id is null')
            ->getQuery()
            ->getOneOrNullResult();
    }
}
