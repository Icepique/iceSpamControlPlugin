<?php

/**
 * iceModelSpamControl filter form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelSpamControlFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'field'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'value'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'credentials'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_banned'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_throttled' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'field'        => new sfValidatorPass(array('required' => false)),
      'value'        => new sfValidatorPass(array('required' => false)),
      'credentials'  => new sfValidatorPass(array('required' => false)),
      'is_banned'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_throttled' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('ice_model_spam_control_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelSpamControl';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'field'        => 'Text',
      'value'        => 'Text',
      'credentials'  => 'Text',
      'is_banned'    => 'Boolean',
      'is_throttled' => 'Boolean',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
    );
  }
}
