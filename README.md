# Laravel Strict Translator

Enable strict mode on default Laravel Translator.

## Usage

Require this package on composer:

```
composer require iget-master/laravel-strict-translator
```

Replace Laravel's TranslationServiceProvider by our service provider:

```
//Illuminate\Translation\TranslationServiceProvider::class,
IgetMaster\StrictTranslator\StrictTranslatorServiceProvider::class,
```

Now when trying to use an invalid/unexisting translation key, you will receive an `TranslationMissingException`.

```
lang('unexisting.translation_key')

// TranslationMissingException: Translation key travel_resource.add_title not found.
```

