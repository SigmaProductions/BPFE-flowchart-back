<?php

namespace App\Repository;

use App\Entity\Edge;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Edge|null find($id, $lockMode = null, $lockVersion = null)
 * @method Edge|null findOneBy(array $criteria, array $orderBy = null)
 * @method Edge[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EdgeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Edge::class);
    }

    public function findAll(): array
    {
        return $this->createQueryBuilder('e')
            ->select('e, s, t')
            ->join('e.source', 's')
            ->join('e.target', 't')
            ->getQuery()
            ->getResult()
            ;
    }
}
