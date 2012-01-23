<?php

/**
 * iceModelSpamControl form base class.
 *
 * @method iceModelSpamControl getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelSpamControlForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'field'        => new sfWidgetFormInputText(),
      'value'        => new sfWidgetFormInputText(),
      'credentials'  => new sfWidgetFormInputText(),
      'is_banned'    => new sfWidgetFormInputCheckbox(),
      'is_throttled' => new sfWidgetFormInputCheckbox(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'field'        => new sfValidatorString(),
      'value'        => new sfValidatorString(array('max_length' => 64)),
      'credentials'  => new sfValidatorString(),
      'is_banned'    => new sfValidatorBoolean(),
      'is_throttled' => new sfValidatorBoolean(),
      'created_at'   => new sfValidatorDateTime(array('required' => false)),
      'updated_at'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'iceModelSpamControl', 'column' => array('field', 'value')))
    );

    $this->widgetSchema->setNameFormat('ice_model_spam_control[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelSpamControl';
  }


}
