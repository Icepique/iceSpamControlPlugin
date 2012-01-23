<?php

class IceSpamControl
{
  public static function isBanned($field, $value, $validate = false)
  {
    if (is_string($value))
    {
      $value = trim($value);
    }

    if (empty($value))
    {
      return false;
    }

    switch ($field)
    {
      case 'email':
        if ($validate && !preg_match(sfValidatorEmail::REGEX_EMAIL, $value, $m))
        {
          return true;
        }

        $values = array($value);
        break;
      case 'phone':
        $count = 0;
        $values = IceStatic::extractPhoneNumbers($value, false, $count);

        // This will clean the resulting numbers from everything but numbers and "+"
        $clean = create_function('$a', 'return preg_replace("/[^0-9\+]+/", "", $a);');
        $values = array_map($clean, $values);
        $values = array_filter($values);

        if ($validate && $count == 0 && empty($values))
        {
          return true;
        }
        break;
      case 'ip':
        break;
    }

    foreach ($values as $value)
    {
      $q = iceModelSpamControlQuery::create()
         ->filterByField($field)
         ->filterByValue($value);

      if (($record = $q->findOne()) && $record->getIsBanned())
      {
        return true;
      }
    }

    return false;
  }

  public static function isThrottled($field, $value, $validate = false)
  {
    $q = iceModelSpamControlQuery::create()
       ->filterByField($field)
       ->filterByValue($value);

    return ($record = $q->findOne()) && $record->getIsThrottled();
  }
}
