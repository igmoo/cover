<?php

namespace PW\QCMBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * MatiereRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MatiereRepository extends EntityRepository{

	public function getTheseConcoursMatiere(){

		$concours = $this->_em->getRepository('PWQCMBundle:Concours')->find(1);

		return $this->createQueryBuilder('m')
					->where('m.concours = :concours')
					->setParameter('concours', $concours)
					;
	}
}
