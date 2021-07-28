<?php


namespace LucianOvidiuFilote\DateHelper;

/**
 * Class DateHelper
 */
class DateHelper
{
    public static function getCurrentMonth()
    {
        return (new \DateTime())->modify('first day of this month');
    }

    public static function getMonthStart(\DateTime $date)
    {
        return (clone $date)->modify('first day of this month')->setTime(0, 0, 0);
    }

    public static function getMonthEnd(\DateTime $date)
    {
        return (clone $date)->modify('last day of this month')->setTime(23, 59, 59);
    }
}
