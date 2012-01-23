<?php

require 'plugins/iceSpamControlPlugin/lib/model/om/BaseiceModelSpamControlQuery.php';

/**
 * Skeleton subclass for performing query and update operations on the 'spam_control' table.
 *
 * @package    propel.generator.plugins.iceSpamControlPlugin.lib.model
 */
class iceModelSpamControlQuery extends BaseiceModelSpamControlQuery
{
  public function findOneByIpAddress($v, PropelPDO $con = null)
  {
    return $this->filterByIpAddress($v, Criteria::EQUAL)
                ->findOne($con);
  }

  public function filterByIpAddress($v, $comparison = Criteria::EQUAL)
  {
    return $this->filterByField('ip')
                ->filterByValue($v, $comparison);
  }

  public function findOneByEmail($v, PropelPDO $con = null)
  {
    return $this->filterByEmail($v, Criteria::EQUAL)
                ->findOne($con);
  }

  public function filterByEmail($v, $comparison = Criteria::EQUAL)
  {
    return $this->filterByField('email')
                ->filterByValue($v, $comparison);
  }

  public function findOneByPhoneNumber($v, PropelPDO $con = null)
  {
    return $this->filterByPhoneNumber($v, Criteria::EQUAL)
                ->findOne($con);
  }

  public function filterByPhoneNumber($v, $comparison = Criteria::EQUAL)
  {
    return $this->filterByField('phone')
                ->filterByValue($v, $comparison);
  }

  public function findOneBySessionId($v, PropelPDO $con = null)
  {
    return $this->filterBySessionId($v, Criteria::EQUAL)
                ->findOne($con);
  }

  public function filterBySessionId($v, $comparison = Criteria::EQUAL)
  {
    return $this->filterByField('session')
                ->filterByValue($v, $comparison);
  }
}
