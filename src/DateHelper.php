<?php


namespace LucianOvidiuFilote\DateHelper;

/**
 * Class DateHelper
 */
class DateHelper
{
    public static function setTimeStart(\DateTime $date)
    {
        return $date->setTime(0, 0, 0);
    }

    public static function setTimeEnd(\DateTime $date)
    {
        return $date->setTime(23, 59, 59);
    }

    public static function getCurrentMonth()
    {
        return self::setTimeStart((new \DateTime())->modify('first day of this month'));
    }

    public static function getMonthStart(\DateTime $date)
    {
        return self::setTimeStart((clone $date)->modify('first day of this month'));
    }

    public static function getMonthEnd(\DateTime $date)
    {
        return self::setTimeEnd((clone $date)->modify('last day of this month'));
    }

    /**
     * timezone example: Pacific/Nauru
     * @param null $timezone
     * @return \DateTime
     * @throws \Exception
     */
    public static function getNow($timezone = null)
    {
        if (!is_null($timezone)) {
            return new \DateTime('now', new \DateTimeZone($timezone));
        }
        return new \DateTime('now');
    }
}
