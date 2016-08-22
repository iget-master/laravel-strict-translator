# Laravel Strict Translator

Enable strict mode on default Laravel Translator.

## Usage

Require this package on composer:

```
composer require iget-master/laravel-strict-translator
```

Replace Laravel's TranslationServiceProvider by our service provider:

```
//'Illuminate\Translation\TranslationServiceProvider',
'IgetMaster\StrictTranslator\StrictTranslationServiceProvider',
```

Now if you try to do

```
lang('unexisting.translation_key')
```

You will receive an `TranslationMissingException`.