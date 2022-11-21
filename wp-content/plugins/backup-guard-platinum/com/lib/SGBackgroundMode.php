<?php

class SGBackgroundMode
{
    const DELAY = 1000000; //in nanoseconds (1 second = 1000000000 nanoseconds)

    public static function next()
    {
        $sleepSeconds = self::calculateSleepSecs();
        SGBackupLog::write('----------------');
        SGBackupLog::write('Going to sleep ' . $sleepSeconds . ' seconds, CPU usage: ' . implode(' / ', sys_getloadavg()));
        SGBackupLog::write('----------------');
        sleep($sleepSeconds);
        SGBackupLog::write('Wake Up after sleep' . ' CPU usage: ' . implode(' / ', sys_getloadavg()));
        SGBackupLog::write('----------------');
    }


    public static function calculateSleepSecs()
    {
        if (function_exists('sys_getloadavg')) {
            $loadAvg = implode(' / ', sys_getloadavg());

            switch ($loadAvg) {
                case ($loadAvg >= 2 && $loadAvg < 3):
                    $sleepSecs = SG_SLEEP_MIDDLE_VALUE;
                    break;
                case ($loadAvg > 3):
                    $sleepSecs = SG_SLEEP_HIGHT_VALUE;
                    break;
                default:
                    $sleepSecs = SG_SLEEP_LOW_VALUE;
                    break;
            }
        } else {
            $sleepSecs = SG_SLEEP_LOW_VALUE;
        }



        return $sleepSecs;
    }
}
