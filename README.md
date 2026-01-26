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

Specify a locale (future feature):
```bash
php artisan inspire:quran --locale=en
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

// Get all available locales
$locales = $inspiringQuran->getAvailableLocales();
// ['en']

// Get total count of ayats
$count = $inspiringQuran->count();
// 25

// Get all ayats
$allAyats = $inspiringQuran->getAllAyats();
```

### Data Structure

Each Ayat is returned in the following format:

```php
[
    'arabic' => 'فَإِنَّ مَعَ ٱلْعُسْرِ يُسْرًا',
    'translations' => [
        'en' => 'For indeed, with hardship comes ease.',
        // Future: 'ur' => 'Urdu translation',
        // Future: 'tr' => 'Turkish translation',
    ],
    'reference' => [
        'surah' => 'Ash-Sharh',
        'ayah' => '94:5-6',
    ],
]
```

## Features

- 25+ carefully curated, uplifting Quranic Ayats
- Arabic text with English translations
- Proper Surah references
- Beautiful terminal output with colors and formatting
- Multi-language support structure (currently English, more coming soon)
- PHP 8.2+ with modern type hints
- Compatible with Laravel 10, 11, and 12
- Zero external dependencies beyond Laravel core

## Included Ayats

The package includes verses about:
- Hope & Ease
- Mercy & Forgiveness
- Patience & Trust
- Gratitude
- Guidance
- Strength
- Peace
- Prayer & Remembrance

All verses are carefully selected for their uplifting and inspirational nature.

## Future Roadmap

- [ ] Add Urdu translations
- [ ] Add Turkish translations
- [ ] Add French translations
- [ ] Add more Ayats (targeting 50+)
- [ ] Add filtering by theme/category
- [ ] Add search functionality
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
2. Use the appropriate locale code (e.g., 'ur' for Urdu, 'tr' for Turkish)
3. Submit a pull request

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
