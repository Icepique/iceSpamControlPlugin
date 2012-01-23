<?php



/**
 * This class defines the structure of the 'spam_control' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.plugins.iceSpamControlPlugin.lib.model.map
 */
class iceModelSpamControlTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'plugins.iceSpamControlPlugin.lib.model.map.iceModelSpamControlTableMap';

  /**
   * Initialize the table attributes, columns and validators
   * Relations are not initialized by this method since they are lazy loaded
   *
   * @return     void
   * @throws     PropelException
   */
  public function initialize()
  {
    // attributes
    $this->setName('spam_control');
    $this->setPhpName('iceModelSpamControl');
    $this->setClassname('iceModelSpamControl');
    $this->setPackage('plugins.iceSpamControlPlugin.lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addColumn('FIELD', 'Field', 'CHAR', true, null, 'regex');
    $this->addColumn('VALUE', 'Value', 'VARCHAR', true, 64, null);
    $this->addColumn('CREDENTIALS', 'Credentials', 'CHAR', true, null, 'read');
    $this->addColumn('IS_BANNED', 'IsBanned', 'BOOLEAN', true, 1, false);
    $this->addColumn('IS_THROTTLED', 'IsThrottled', 'BOOLEAN', true, 1, false);
    $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
    $this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
  }

  /**
   *
   * Gets the list of behaviors registered for this table
   *
   * @return array Associative array (name => parameters) of behaviors
   */
  public function getBehaviors()
  {
    return array(
      'timestampable' => array('create_column' => 'created_at', 'update_column' => 'updated_at', ),
      'symfony' => array('form' => 'true', 'filter' => 'true', ),
      'symfony_behaviors' => array(),
      'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '2', 'strip_comments' => 'false', ),
    );
  }

}
