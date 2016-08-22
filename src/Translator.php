<?php namespace IgetMaster\StrictTranslator;

use IgetMaster\StrictTranslator\Exceptions\TranslationMissingException;
use Illuminate\Translation\Translator as LaravelTranslator;

class Translator extends LaravelTranslator
{
    /**
     * Get the translation for the given key.
     *
     * @param  string  $key
     * @param  array   $replace
     * @param  string|null  $locale
     * @param  bool  $fallback
     * @return string|array|null
     */
    public function get($key, array $replace = [], $locale = null, $fallback = true)
    {
        $translation = parent::get($key, $replace, $locale, $fallback);

        if ($translation == $key) {
            throw new TranslationMissingException("Translation key ${key} not found.");
        }
    }
}