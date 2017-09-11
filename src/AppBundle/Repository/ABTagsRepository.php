<?php

namespace AppBundle\Repository;

/**
 * ABTagsRepository
 *
 */
class ABTagsRepository extends \Doctrine\ORM\EntityRepository
{
    public function tagsChoices($user)
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        return $qb->select('t')
            ->from('AppBundle:AB\ABTags', 't')
            ->innerJoin('t.contacts', 'c')
            ->where('c.user = :user')->setParameter('user', $user)
            ->getQuery()
            ->execute();
    }
}
