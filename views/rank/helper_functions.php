<?php if (!defined('APPLICATION')) exit();

if(!function_exists('AgeArray')) {
  function AgeArray() {
    return array(
        strtotime('0 seconds', 0) => T('Yaga.Perks.AgeDNC'),
        strtotime('1 hour', 0) => sprintf(T('Yaga.AgeFormat'), T('1 hour')),
        strtotime('1 day', 0) => sprintf(T('Yaga.AgeFormat'), T('1 day')),
        strtotime('1 week', 0) => sprintf(T('Yaga.AgeFormat'), T('1 week')),
        strtotime('1 month', 0) => sprintf(T('Yaga.AgeFormat'), T('1 month')),
        strtotime('3 months', 0) => sprintf(T('Yaga.AgeFormat'), T('3 months')),
        strtotime('6 months', 0) => sprintf(T('Yaga.AgeFormat'), T('6 months')),
        strtotime('1 year', 0) => sprintf(T('Yaga.AgeFormat'), T('1 year')),
        strtotime('5 years', 0) => sprintf(T('Yaga.AgeFormat'), T('5 years'))
    );
  }
}
