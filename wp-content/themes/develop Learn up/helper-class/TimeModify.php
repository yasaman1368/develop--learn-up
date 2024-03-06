<?php
class TimeModify
{
    public static function time_age(string $time)
    {
        $timestamp = strtotime($time);
        $diff = time() - $timestamp;
        if ($diff < 60) {
            return 'چند لحظه پیش';
            exit;
        }
        $time_rule = [
            60 * 60 * 24 * 30 * 12 => 'سال',
            60 * 60 * 24 * 30 => 'ماه',
            60 * 60 * 24 => 'روز',
            60 * 60 => 'ساعت',
            60 => 'دقیقه',
        ];
        foreach ($time_rule as $key => $value) {
            $final_time = round($diff / $key);
            if ($final_time >= 1) {
                return $final_time . $value . ' ' . 'پیش';
            }
        }
    }
}
