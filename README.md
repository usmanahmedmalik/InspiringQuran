# Inspiring Quran

[![Latest Version on Packagist](https://img.shields.io/packagist/v/usmanahmedmalik/inspiring-quran.svg?style=flat-square)](https://packagist.org/packages/usmanahmedmalik/inspiring-quran)
[![Total Downloads](https://img.shields.io/packagist/dt/usmanahmedmalik/inspiring-quran.svg?style=flat-square)](https://packagist.org/packages/usmanahmedmalik/inspiring-quran)
[![License](https://img.shields.io/packagist/l/usmanahmedmalik/inspiring-quran.svg?style=flat-square)](https://packagist.org/packages/usmanahmedmalik/inspiring-quran)

A modern, lightweight, and "forever-proof" Laravel package that displays random Quranic Ayats. Inspired by Laravel's `Illuminate\Foundation\Inspiring` class, this package brings uplifting verses from the Quran to your terminal and applications.

## Why Inspiring Quran?

- **Zero External Dependencies**: All Ayats are hardcoded - no API calls, no external services, no breaking changes
- **Forever-Proof**: Works offline and will never break due to API changes or service shutdowns
- **Modern**: Built for PHP 8.2+ and Laravel 10/11/12
- **Multi-Language Ready**: Extensible structure supports adding translations in any language
- **Lightweight**: Simple, focused, and efficient
- **Auto-Discovery**: No manual provider registration needed

## Installation

You can install the package via composer:

```bash
composer require usmanahmedmalik/inspiring-quran
```

The package will automatically register itself thanks to Laravel's auto-discovery feature.

## Usage

### Artisan Command

Display a random inspiring Quranic Ayat in your terminal:

```bash
php artisan inspire:quran
```

Output example:
```
  ┌─────────────────────────────────────────────────────────────────────┐
  │ فَإِنَّ مَعَ ٱلْعُسْرِ يُسْرًا ۝ إِنَّ مَعَ ٱلْعُسْرِ يُسْرًا         │
  │                                                                     │
  │ For indeed, with hardship comes ease. Indeed, with hardship comes   │
  │ ease.                                                               │
  │                                                                     │
  │ — Surah Ash-Sharh (94:5-6)                                          │
  └─────────────────────────────────────────────────────────────────────┘
```

Specify a locale:
```bash
php artisan inspire:quran --locale=en
php artisan inspire:quran --locale=ur
php artisan inspire:quran --locale=fr
```

Get ayat from a specific theme:
```bash
# List all available themes
php artisan inspire:quran --list-themes

# Get ayat from a specific theme
php artisan inspire:quran --theme=hope
php artisan inspire:quran --theme=patience
php artisan inspire:quran --theme=gratitude

# Combine theme with locale
php artisan inspire:quran --theme=mercy --locale=ur
```

### Programmatic Usage

#### Static Method (Laravel Inspiring Pattern)

```php
use Usmanahmedmalik\InspiringQuran\InspiringQuran;

$ayat = InspiringQuran::quote();

echo $ayat['arabic'];
// فَإِنَّ مَعَ ٱلْعُسْرِ يُسْرًا ۝ إِنَّ مَعَ ٱلْعُسْرِ يُسْرًا

echo $ayat['translations']['en'];
// For indeed, with hardship comes ease...

echo $ayat['reference']['surah'];
// Ash-Sharh

echo $ayat['reference']['ayah'];
// 94:5-6
```

#### Instance Methods

```php
use Usmanahmedmalik\InspiringQuran\InspiringQuran;

$inspiringQuran = new InspiringQuran();

// Get a random quote
$ayat = $inspiringQuran->getQuote('en');

// Get ayat by theme
$ayat = $inspiringQuran->byTheme('hope', 'en');

// Get all ayats from a theme
$hopeAyats = $inspiringQuran->getAllByTheme('hope');

// Get available themes
$themes = $inspiringQuran->getAvailableThemes();
// ['hope', 'mercy', 'patience', 'prayer', 'gratitude', ...]

// Get themes with descriptions
$themesWithDesc = $inspiringQuran->getThemesWithDescriptions();
// ['hope' => 'Verses about hope and ease in difficulty', ...]

// Get all available locales
$locales = $inspiringQuran->getAvailableLocales();
// ['en', 'nl', 'fr', 'tr', 'ur', 'de', 'es']

// Get total count of ayats
$count = $inspiringQuran->count();
// 75

// Get all ayats
$allAyats = $inspiringQuran->getAllAyats();
```

### Web Usage Examples

#### Display in Blade Template

```php
// In your controller
use Usmanahmedmalik\InspiringQuran\InspiringQuran;

public function index()
{
    $ayat = InspiringQuran::quote('en');
    return view('welcome', compact('ayat'));
}
```

```blade
{{-- In your blade view --}}
<div class="quran-ayat bg-gradient-to-r from-cyan-500 to-blue-500 text-white p-6 rounded-lg shadow-lg">
    <p class="arabic text-2xl font-bold text-right mb-4" dir="rtl">
        {{ $ayat['arabic'] }}
    </p>
    <p class="translation text-lg mb-3">
        {{ $ayat['translations']['en'] }}
    </p>
    <p class="reference text-sm opacity-80">
        — {{ $ayat['reference']['surah'] }} ({{ $ayat['reference']['ayah'] }})
    </p>
</div>
```

#### API Endpoint

```php
// In routes/api.php
use Usmanahmedmalik\InspiringQuran\InspiringQuran;

Route::get('/ayat/random', function (Request $request) {
    $locale = $request->query('locale', 'en');
    $theme = $request->query('theme');
    
    try {
        $ayat = $theme 
            ? InspiringQuran::byTheme($theme, $locale)
            : InspiringQuran::quote($locale);
            
        return response()->json($ayat);
    } catch (\InvalidArgumentException $e) {
        return response()->json(['error' => $e->getMessage()], 400);
    }
});

Route::get('/ayat/themes', function () {
    return response()->json([
        'themes' => InspiringQuran::getThemesWithDescriptions(),
        'locales' => (new InspiringQuran())->getAvailableLocales(),
    ]);
});
```

```bash
# API Usage examples
curl http://localhost/api/ayat/random
curl http://localhost/api/ayat/random?locale=ur
curl http://localhost/api/ayat/random?theme=hope
curl http://localhost/api/ayat/random?theme=patience&locale=fr
curl http://localhost/api/ayat/themes
```

#### Daily Ayat Widget

```php
// In your AppServiceProvider or any controller
use Illuminate\Support\Facades\View;
use Usmanahmedmalik\InspiringQuran\InspiringQuran;

public function boot()
{
    View::composer('*', function ($view) {
        $view->with('dailyAyat', InspiringQuran::quote());
    });
}
```

```blade
{{-- Now available in all views --}}
<div class="daily-ayat-widget">
    <h3>Daily Inspiration</h3>
    <p>{{ $dailyAyat['translations']['en'] }}</p>
    <small>{{ $dailyAyat['reference']['surah'] }}</small>
</div>
```

### Data Structure

Each Ayat is returned in the following format:

```php
[
    'arabic' => 'فَإِنَّ مَعَ ٱلْعُسْرِ يُسْرًا',
    'translations' => [
        'en' => 'For indeed, with hardship comes ease.',
        'ur' => 'بیشک تنگی کے ساتھ آسانی ہے',
        'fr' => 'Mais, avec la difficulté vient la facilité',
        'tr' => 'Çünkü zorlukla beraber kolaylık vardır',
        'de' => 'Doch wahrlich, mit der Erschwernis geht Erleichterung einher',
        'es' => 'Ciertamente junto a la dificultad hay facilidad',
        'nl' => 'Voorwaar, met moeite komt gemak',
    ],
    'reference' => [
        'surah' => 'Ash-Sharh',
        'ayah' => '94:5-6',
    ],
]
```

## Features

- **75+ Carefully Curated Ayats**: Uplifting verses selected for inspiration
- **7 Languages Supported**: English, Dutch, French, Turkish, Urdu, German, and Spanish
- **Thematic Collections**: Filter ayats by theme (hope, mercy, patience, gratitude, etc.)
- **Beautiful Terminal Output**: Colorful, formatted display in CLI
- **Web & API Ready**: Easy integration in Blade views, APIs, and widgets
- **Arabic Text with Translations**: Proper Surah references included
- **PHP 8.2+ with Modern Type Hints**
- **Compatible with Laravel 10, 11, and 12**
- **Zero External Dependencies**: No API calls, works completely offline
- **Forever-Proof Architecture**: Will never break due to external service changes

## Included Ayats

The package includes **75 verses** categorized into **13 themes**:

### Available Themes

#### Enhanced Themes (10+ verses each)
- **Patience** (14 verses) - Verses about patience and perseverance
- **Gratitude** (12 verses) - Verses about being thankful
- **Hope** (12 verses) - Verses about hope and ease in difficulty
- **Mercy** (12 verses) - Verses about Allah's mercy and forgiveness
- **Guidance** (12 verses) - Verses about guidance and direction

#### Standard Themes
- **Prayer** (2 verses) - Verses about prayer and worship
- **Peace** (2 verses) - Verses about peace and tranquility
- **Strength** (2 verses) - Verses about strength and resilience
- **Change** (1 verse) - Verses about change and improvement
- **Trust** (2 verses) - Verses about trust in Allah
- **Unity** (1 verse) - Verses about unity and brotherhood
- **Accountability** (2 verses) - Verses about accountability and judgment
- **Provision** (2 verses) - Verses about sustenance and provision

All verses are carefully selected for their uplifting and inspirational nature.

## Future Roadmap

- [x] ~~Add more Ayats (targeting 50+)~~ ✅ **Done! Now includes 75 verses**
- [x] ~~Add filtering by theme/category~~ ✅ **Done!**
- [ ] Add search functionality
- [ ] Mood-based ayat selection
- [ ] Time-based inspiration (morning/evening verses)
- [ ] Verse of the day feature
- [ ] Publish config file for customization

## Contributing

Contributions are welcome! Here's how you can help:

### Adding More Ayats

1. Fork the repository
2. Edit `src/InspiringQuran.php`
3. Add your Ayat to the `$ayats` array following the existing structure:
```php
[
    'arabic' => 'Arabic text here',
    'translations' => [
        'en' => 'English translation here',
    ],
    'reference' => [
        'surah' => 'Surah Name',
        'ayah' => 'X:Y',
    ],
],
```
4. Submit a pull request

### Adding New Translations

1. Add your translation to existing Ayats in the `translations` array
2. Use the appropriate locale code (e.g., 'ur' for Urdu, 'tr' for Turkish, 'ar' for Arabic)
3. Currently supported: English (en), Dutch (nl), French (fr), Turkish (tr), Urdu (ur), German (de), Spanish (es)
4. Submit a pull request

## Requirements

- PHP 8.2 or higher
- Laravel 10.x, 11.x, or 12.x

## Testing

```bash
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

## Credits

- [Usman Ahmed Malik](https://github.com/usmanahmedmalik)
- All contributors

## Support

If you discover any security related issues, please email usmanahmedmalik@gmail.com instead of using the issue tracker.

## Acknowledgments

- Inspired by Laravel's `Illuminate\Foundation\Inspiring` class
- All praise is due to Allah (SWT)
- Quran translations are for inspirational purposes only

---

**Note**: This package is meant for inspirational purposes. For detailed Islamic study, please refer to authentic Quran translations and tafsir (commentary) from qualified scholars.
