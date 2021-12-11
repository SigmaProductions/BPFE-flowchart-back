<?php
declare(strict_types=1);

namespace App\Controller;

use App\Entity\Edge;
use App\Entity\Node;
use App\Repository\EdgeRepository;
use App\Repository\NodeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class FlowController extends AbstractController
{
    public function __construct(
        private NodeRepository $nodeRepository,
        private EdgeRepository $edgeRepository,
        private EntityManagerInterface $entityManager
    ) {
    }

    public function save(Request $request): JsonResponse
    {
        $this->entityManager->createQuery('DELETE FROM App\Entity\Edge')->execute();
        $this->entityManager->createQuery('DELETE FROM App\Entity\Node')->execute();

        $this->entityManager->flush();

        $decoded = json_decode($request->getContent(),  true);
        $nodes = [];
        $edges = [];
        foreach ($decoded as $value) {
            if(isset($value['position'])) {
                $nodes[] = $value;
            } else {
                $edges[] = $value;
            }
        }

        foreach ($nodes as $node) {
            $this->entityManager->persist(new Node($node['id'], (int) $node['position']['x'], (int) $node['position']['y'], $node['type'], $node['data']));
        }

        $this->entityManager->flush();


        foreach ($edges as $edge) {
            $this->entityManager->persist(
                new Edge(
                    $edge['id'],
                    $this->nodeRepository->findOneByPhysicalId($edge['source']),
                    $this->nodeRepository->findOneByPhysicalId($edge['target']),
                )
            );
        }

        $this->entityManager->flush();

        return new JsonResponse([]);
    }

    public function load(Request $request): JsonResponse
    {
        $dbNodes = $this->nodeRepository->findAll();
        $response = [];
        /** @var Node $node */
        foreach ($dbNodes as $node) {
            $response[] = [
                'id' => $node->getPhysicalId(),
                'position' => [
                    'x' => $node->getPositionX(),
                    'y' => $node->getPositionY(),
                ],
                'type' => $node->getType(),
                'data' => $node->getData(),
            ];
        }
        $dbEdges = $this->edgeRepository->findAll();
        foreach ($dbEdges as $edge) {
            $response[] = [
                'id' => $edge->getPhysicalId(),
                'source' => $edge->getSource()->getPhysicalId(),
                'target' => $edge->getTarget()->getPhysicalId(),
            ];
        }
        return new JsonResponse($response);
    }
}