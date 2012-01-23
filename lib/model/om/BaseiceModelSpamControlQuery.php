<?php


/**
 * Base class that represents a query for the 'spam_control' table.
 *
 * 
 *
 * @method     iceModelSpamControlQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     iceModelSpamControlQuery orderByField($order = Criteria::ASC) Order by the field column
 * @method     iceModelSpamControlQuery orderByValue($order = Criteria::ASC) Order by the value column
 * @method     iceModelSpamControlQuery orderByCredentials($order = Criteria::ASC) Order by the credentials column
 * @method     iceModelSpamControlQuery orderByIsBanned($order = Criteria::ASC) Order by the is_banned column
 * @method     iceModelSpamControlQuery orderByIsThrottled($order = Criteria::ASC) Order by the is_throttled column
 * @method     iceModelSpamControlQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     iceModelSpamControlQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     iceModelSpamControlQuery groupById() Group by the id column
 * @method     iceModelSpamControlQuery groupByField() Group by the field column
 * @method     iceModelSpamControlQuery groupByValue() Group by the value column
 * @method     iceModelSpamControlQuery groupByCredentials() Group by the credentials column
 * @method     iceModelSpamControlQuery groupByIsBanned() Group by the is_banned column
 * @method     iceModelSpamControlQuery groupByIsThrottled() Group by the is_throttled column
 * @method     iceModelSpamControlQuery groupByCreatedAt() Group by the created_at column
 * @method     iceModelSpamControlQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     iceModelSpamControlQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     iceModelSpamControlQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     iceModelSpamControlQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     iceModelSpamControl findOne(PropelPDO $con = null) Return the first iceModelSpamControl matching the query
 * @method     iceModelSpamControl findOneOrCreate(PropelPDO $con = null) Return the first iceModelSpamControl matching the query, or a new iceModelSpamControl object populated from the query conditions when no match is found
 *
 * @method     iceModelSpamControl findOneById(int $id) Return the first iceModelSpamControl filtered by the id column
 * @method     iceModelSpamControl findOneByField(string $field) Return the first iceModelSpamControl filtered by the field column
 * @method     iceModelSpamControl findOneByValue(string $value) Return the first iceModelSpamControl filtered by the value column
 * @method     iceModelSpamControl findOneByCredentials(string $credentials) Return the first iceModelSpamControl filtered by the credentials column
 * @method     iceModelSpamControl findOneByIsBanned(boolean $is_banned) Return the first iceModelSpamControl filtered by the is_banned column
 * @method     iceModelSpamControl findOneByIsThrottled(boolean $is_throttled) Return the first iceModelSpamControl filtered by the is_throttled column
 * @method     iceModelSpamControl findOneByCreatedAt(string $created_at) Return the first iceModelSpamControl filtered by the created_at column
 * @method     iceModelSpamControl findOneByUpdatedAt(string $updated_at) Return the first iceModelSpamControl filtered by the updated_at column
 *
 * @method     array findById(int $id) Return iceModelSpamControl objects filtered by the id column
 * @method     array findByField(string $field) Return iceModelSpamControl objects filtered by the field column
 * @method     array findByValue(string $value) Return iceModelSpamControl objects filtered by the value column
 * @method     array findByCredentials(string $credentials) Return iceModelSpamControl objects filtered by the credentials column
 * @method     array findByIsBanned(boolean $is_banned) Return iceModelSpamControl objects filtered by the is_banned column
 * @method     array findByIsThrottled(boolean $is_throttled) Return iceModelSpamControl objects filtered by the is_throttled column
 * @method     array findByCreatedAt(string $created_at) Return iceModelSpamControl objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return iceModelSpamControl objects filtered by the updated_at column
 *
 * @package    propel.generator.plugins.iceSpamControlPlugin.lib.model.om
 */
abstract class BaseiceModelSpamControlQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseiceModelSpamControlQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'iceModelSpamControl', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new iceModelSpamControlQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    iceModelSpamControlQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof iceModelSpamControlQuery) {
            return $criteria;
        }
        $query = new iceModelSpamControlQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }
        return $query;
    }

    /**
     * Find object by primary key
     * Use instance pooling to avoid a database query if the object exists
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    iceModelSpamControl|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = iceModelSpamControlPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
            // the object is alredy in the instance pool
            return $obj;
        } else {
            // the object has not been requested yet, or the formatter is not an object formatter
            $criteria = $this->isKeepQuery() ? clone $this : $this;
            $stmt = $criteria
                ->filterByPrimaryKey($key)
                ->getSelectStatement($con);
            return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
        }
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        return $this
            ->filterByPrimaryKeys($keys)
            ->find($con);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return    iceModelSpamControlQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(iceModelSpamControlPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    iceModelSpamControlQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(iceModelSpamControlPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelSpamControlQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(iceModelSpamControlPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the field column
     *
     * Example usage:
     * <code>
     * $query->filterByField('fooValue');   // WHERE field = 'fooValue'
     * $query->filterByField('%fooValue%'); // WHERE field LIKE '%fooValue%'
     * </code>
     *
     * @param     string $field The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelSpamControlQuery The current query, for fluid interface
     */
    public function filterByField($field = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($field)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $field)) {
                $field = str_replace('*', '%', $field);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelSpamControlPeer::FIELD, $field, $comparison);
    }

    /**
     * Filter the query on the value column
     *
     * Example usage:
     * <code>
     * $query->filterByValue('fooValue');   // WHERE value = 'fooValue'
     * $query->filterByValue('%fooValue%'); // WHERE value LIKE '%fooValue%'
     * </code>
     *
     * @param     string $value The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelSpamControlQuery The current query, for fluid interface
     */
    public function filterByValue($value = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($value)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $value)) {
                $value = str_replace('*', '%', $value);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelSpamControlPeer::VALUE, $value, $comparison);
    }

    /**
     * Filter the query on the credentials column
     *
     * Example usage:
     * <code>
     * $query->filterByCredentials('fooValue');   // WHERE credentials = 'fooValue'
     * $query->filterByCredentials('%fooValue%'); // WHERE credentials LIKE '%fooValue%'
     * </code>
     *
     * @param     string $credentials The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelSpamControlQuery The current query, for fluid interface
     */
    public function filterByCredentials($credentials = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($credentials)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $credentials)) {
                $credentials = str_replace('*', '%', $credentials);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelSpamControlPeer::CREDENTIALS, $credentials, $comparison);
    }

    /**
     * Filter the query on the is_banned column
     *
     * Example usage:
     * <code>
     * $query->filterByIsBanned(true); // WHERE is_banned = true
     * $query->filterByIsBanned('yes'); // WHERE is_banned = true
     * </code>
     *
     * @param     boolean|string $isBanned The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelSpamControlQuery The current query, for fluid interface
     */
    public function filterByIsBanned($isBanned = null, $comparison = null)
    {
        if (is_string($isBanned)) {
            $is_banned = in_array(strtolower($isBanned), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(iceModelSpamControlPeer::IS_BANNED, $isBanned, $comparison);
    }

    /**
     * Filter the query on the is_throttled column
     *
     * Example usage:
     * <code>
     * $query->filterByIsThrottled(true); // WHERE is_throttled = true
     * $query->filterByIsThrottled('yes'); // WHERE is_throttled = true
     * </code>
     *
     * @param     boolean|string $isThrottled The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelSpamControlQuery The current query, for fluid interface
     */
    public function filterByIsThrottled($isThrottled = null, $comparison = null)
    {
        if (is_string($isThrottled)) {
            $is_throttled = in_array(strtolower($isThrottled), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(iceModelSpamControlPeer::IS_THROTTLED, $isThrottled, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelSpamControlQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(iceModelSpamControlPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(iceModelSpamControlPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelSpamControlPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelSpamControlQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(iceModelSpamControlPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(iceModelSpamControlPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelSpamControlPeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     iceModelSpamControl $iceModelSpamControl Object to remove from the list of results
     *
     * @return    iceModelSpamControlQuery The current query, for fluid interface
     */
    public function prune($iceModelSpamControl = null)
    {
        if ($iceModelSpamControl) {
            $this->addUsingAlias(iceModelSpamControlPeer::ID, $iceModelSpamControl->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

  // timestampable behavior
  
  /**
   * Filter by the latest updated
   *
   * @param      int $nbDays Maximum age of the latest update in days
   *
   * @return     iceModelSpamControlQuery The current query, for fluid interface
   */
  public function recentlyUpdated($nbDays = 7)
  {
    return $this->addUsingAlias(iceModelSpamControlPeer::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Filter by the latest created
   *
   * @param      int $nbDays Maximum age of in days
   *
   * @return     iceModelSpamControlQuery The current query, for fluid interface
   */
  public function recentlyCreated($nbDays = 7)
  {
    return $this->addUsingAlias(iceModelSpamControlPeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Order by update date desc
   *
   * @return     iceModelSpamControlQuery The current query, for fluid interface
   */
  public function lastUpdatedFirst()
  {
    return $this->addDescendingOrderByColumn(iceModelSpamControlPeer::UPDATED_AT);
  }
  
  /**
   * Order by update date asc
   *
   * @return     iceModelSpamControlQuery The current query, for fluid interface
   */
  public function firstUpdatedFirst()
  {
    return $this->addAscendingOrderByColumn(iceModelSpamControlPeer::UPDATED_AT);
  }
  
  /**
   * Order by create date desc
   *
   * @return     iceModelSpamControlQuery The current query, for fluid interface
   */
  public function lastCreatedFirst()
  {
    return $this->addDescendingOrderByColumn(iceModelSpamControlPeer::CREATED_AT);
  }
  
  /**
   * Order by create date asc
   *
   * @return     iceModelSpamControlQuery The current query, for fluid interface
   */
  public function firstCreatedFirst()
  {
    return $this->addAscendingOrderByColumn(iceModelSpamControlPeer::CREATED_AT);
  }

}