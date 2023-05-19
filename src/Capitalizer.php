<?php

declare(strict_types=1);

namespace Lujewwy\Capitalizer;

class Capitalizer
{
    public static function capitalize(string $string = null): string
    {
        if (empty($string)) return '';

        $array_of_words = explode(' ', $string);
        foreach ($array_of_words as $key => $word) {
            if (! preg_match('/^[a-zA-Z]+$/', $word)) {
                $letters = preg_replace('/[^a-zA-Z\s]/', '', $word);

                if (ctype_upper($letters)) continue;
            }

            if (ctype_upper($word)) continue;

            $array_of_words[$key] = ucwords(strtolower($word));
        }

        $string = implode(' ', $array_of_words);

        return $string;
    }
}
