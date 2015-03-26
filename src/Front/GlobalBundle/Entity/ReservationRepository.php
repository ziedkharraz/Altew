<?php

namespace Front\GlobalBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ReservationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ReservationRepository extends EntityRepository
{

    public function getReservationPaye()
    {
        $query=$this->createQueryBuilder('a');
        $query      ->where($query->expr()->isNull('a.param'));
        return $query->getQuery()->getResult();
    }
    
    public function getReservationNotPaye()
    {
        $query=$this->createQueryBuilder('a');
        $query      ->where($query->expr()->isNotNull('a.param'));
        return $query->getQuery()->getResult();
    }

}
