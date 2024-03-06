<?php
class ReadStimateTime
{
    public static function yas_read_estimate_Time(string $content, string $wpm = '300'): string
    {

        $clean_content = strip_tags(strip_shortcodes($content));

        $words_count = str_word_count($clean_content, 0, 'ابپتثجچ‌حخدذرز‌ژس‌شصضطظعغفقکگلمنوهیءآاًهٔه');

        return ceil($words_count / $wpm);
    }
}
