<?php

namespace App\Repository;

use App\Entity\GiteServiceEquipement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GiteServiceEquipement>
 *
 * @method GiteServiceEquipement|null find($id, $lockMode = null, $lockVersion = null)
 * @method GiteServiceEquipement|null findOneBy(array $criteria, array $orderBy = null)
 * @method GiteServiceEquipement[]    findAll()
 * @method GiteServiceEquipement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GiteServiceEquipementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GiteServiceEquipement::class);
    }

    public function save(GiteServiceEquipement $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(GiteServiceEquipement $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return GiteServiceEquipement[] Returns an array of GiteServiceEquipement objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?GiteServiceEquipement
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
