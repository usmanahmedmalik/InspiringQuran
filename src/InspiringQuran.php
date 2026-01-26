<?php

namespace Usmanahmedmalik\InspiringQuran;

class InspiringQuran
{
    /**
     * Collection of uplifting Quranic Ayats with Arabic text, translations, and references.
     *
     * @var array<int, array{arabic: string, translations: array<string, string>, reference: array{surah: string, ayah: string}}>
     */
    private static array $ayats = [
        [
            'arabic' => 'فَإِنَّ مَعَ ٱلْعُسْرِ يُسْرًا ۝ إِنَّ مَعَ ٱلْعُسْرِ يُسْرًا',
            'translations' => [
                'en' => 'For indeed, with hardship comes ease. Indeed, with hardship comes ease.',
            ],
            'reference' => [
                'surah' => 'Ash-Sharh',
                'ayah' => '94:5-6',
            ],
        ],
        [
            'arabic' => 'لَا يُكَلِّفُ ٱللَّهُ نَفْسًا إِلَّا وُسْعَهَا',
            'translations' => [
                'en' => 'Allah does not burden a soul beyond that it can bear.',
            ],
            'reference' => [
                'surah' => 'Al-Baqarah',
                'ayah' => '2:286',
            ],
        ],
        [
            'arabic' => 'وَمَن يَتَّقِ ٱللَّهَ يَجْعَل لَّهُۥ مَخْرَجًا ۝ وَيَرْزُقْهُ مِنْ حَيْثُ لَا يَحْتَسِبُ',
            'translations' => [
                'en' => 'And whoever fears Allah, He will make for him a way out. And will provide for him from where he does not expect.',
            ],
            'reference' => [
                'surah' => 'At-Talaq',
                'ayah' => '65:2-3',
            ],
        ],
        [
            'arabic' => 'قُلْ يَـٰعِبَادِىَ ٱلَّذِينَ أَسْرَفُوا۟ عَلَىٰٓ أَنفُسِهِمْ لَا تَقْنَطُوا۟ مِن رَّحْمَةِ ٱللَّهِ ۚ إِنَّ ٱللَّهَ يَغْفِرُ ٱلذُّنُوبَ جَمِيعًا',
            'translations' => [
                'en' => 'Say, "O My servants who have transgressed against themselves: do not despair of the mercy of Allah. Indeed, Allah forgives all sins."',
            ],
            'reference' => [
                'surah' => 'Az-Zumar',
                'ayah' => '39:53',
            ],
        ],
        [
            'arabic' => 'وَإِذَا سَأَلَكَ عِبَادِى عَنِّى فَإِنِّى قَرِيبٌ ۖ أُجِيبُ دَعْوَةَ ٱلدَّاعِ إِذَا دَعَانِ',
            'translations' => [
                'en' => 'And when My servants ask you about Me - indeed I am near. I respond to the invocation of the supplicant when he calls upon Me.',
            ],
            'reference' => [
                'surah' => 'Al-Baqarah',
                'ayah' => '2:186',
            ],
        ],
        [
            'arabic' => 'يَـٰٓأَيُّهَا ٱلَّذِينَ ءَامَنُوا۟ ٱسْتَعِينُوا۟ بِٱلصَّبْرِ وَٱلصَّلَوٰةِ ۚ إِنَّ ٱللَّهَ مَعَ ٱلصَّـٰبِرِينَ',
            'translations' => [
                'en' => 'O you who have believed, seek help through patience and prayer. Indeed, Allah is with the patient.',
            ],
            'reference' => [
                'surah' => 'Al-Baqarah',
                'ayah' => '2:153',
            ],
        ],
        [
            'arabic' => 'وَلَا تَهِنُوا۟ وَلَا تَحْزَنُوا۟ وَأَنتُمُ ٱلْأَعْلَوْنَ إِن كُنتُم مُّؤْمِنِينَ',
            'translations' => [
                'en' => 'So do not weaken and do not grieve, and you will be superior if you are true believers.',
            ],
            'reference' => [
                'surah' => 'Ali \'Imran',
                'ayah' => '3:139',
            ],
        ],
        [
            'arabic' => 'وَلَئِن شَكَرْتُمْ لَأَزِيدَنَّكُمْ',
            'translations' => [
                'en' => 'If you are grateful, I will surely increase you in favor.',
            ],
            'reference' => [
                'surah' => 'Ibrahim',
                'ayah' => '14:7',
            ],
        ],
        [
            'arabic' => 'ٱلَّذِينَ ءَامَنُوا۟ وَتَطْمَئِنُّ قُلُوبُهُم بِذِكْرِ ٱللَّهِ ۗ أَلَا بِذِكْرِ ٱللَّهِ تَطْمَئِنُّ ٱلْقُلُوبُ',
            'translations' => [
                'en' => 'Those who have believed and whose hearts are assured by the remembrance of Allah. Unquestionably, by the remembrance of Allah hearts are assured.',
            ],
            'reference' => [
                'surah' => 'Ar-Ra\'d',
                'ayah' => '13:28',
            ],
        ],
        [
            'arabic' => 'وَقَالَ رَبُّكُمُ ٱدْعُونِىٓ أَسْتَجِبْ لَكُمْ',
            'translations' => [
                'en' => 'And your Lord says, "Call upon Me; I will respond to you."',
            ],
            'reference' => [
                'surah' => 'Ghafir',
                'ayah' => '40:60',
            ],
        ],
        [
            'arabic' => 'إِنَّ ٱللَّهَ لَا يُغَيِّرُ مَا بِقَوْمٍ حَتَّىٰ يُغَيِّرُوا۟ مَا بِأَنفُسِهِمْ',
            'translations' => [
                'en' => 'Indeed, Allah will not change the condition of a people until they change what is in themselves.',
            ],
            'reference' => [
                'surah' => 'Ar-Ra\'d',
                'ayah' => '13:11',
            ],
        ],
        [
            'arabic' => 'يَـٰٓأَيُّهَا ٱلَّذِينَ ءَامَنُوا۟ ٱصْبِرُوا۟ وَصَابِرُوا۟ وَرَابِطُوا۟ وَٱتَّقُوا۟ ٱللَّهَ لَعَلَّكُمْ تُفْلِحُونَ',
            'translations' => [
                'en' => 'O you who have believed, persevere and endure and remain stationed and fear Allah that you may be successful.',
            ],
            'reference' => [
                'surah' => 'Ali \'Imran',
                'ayah' => '3:200',
            ],
        ],
        [
            'arabic' => 'وَلَا تَيْـَٔسُوا۟ مِن رَّوْحِ ٱللَّهِ ۖ إِنَّهُۥ لَا يَا۟يْـَٔسُ مِن رَّوْحِ ٱللَّهِ إِلَّا ٱلْقَوْمُ ٱلْكَـٰفِرُونَ',
            'translations' => [
                'en' => 'And do not despair of relief from Allah. Indeed, no one despairs of relief from Allah except the disbelieving people.',
            ],
            'reference' => [
                'surah' => 'Yusuf',
                'ayah' => '12:87',
            ],
        ],
        [
            'arabic' => 'فَبِأَىِّ ءَالَآءِ رَبِّكُمَا تُكَذِّبَانِ',
            'translations' => [
                'en' => 'So which of the favors of your Lord would you deny?',
            ],
            'reference' => [
                'surah' => 'Ar-Rahman',
                'ayah' => '55:13',
            ],
        ],
        [
            'arabic' => 'وَرَحْمَتِى وَسِعَتْ كُلَّ شَىْءٍ',
            'translations' => [
                'en' => 'My mercy encompasses all things.',
            ],
            'reference' => [
                'surah' => 'Al-A\'raf',
                'ayah' => '7:156',
            ],
        ],
        [
            'arabic' => 'وَمَا تَدْرِى نَفْسٌ مَّاذَا تَكْسِبُ غَدًا',
            'translations' => [
                'en' => 'And no soul perceives what it will earn tomorrow.',
            ],
            'reference' => [
                'surah' => 'Luqman',
                'ayah' => '31:34',
            ],
        ],
        [
            'arabic' => 'فَلَا تَهِنُوا۟ وَتَدْعُوٓا۟ إِلَى ٱلسَّلْمِ وَأَنتُمُ ٱلْأَعْلَوْنَ وَٱللَّهُ مَعَكُمْ',
            'translations' => [
                'en' => 'So do not weaken and call for peace while you are superior, and Allah is with you.',
            ],
            'reference' => [
                'surah' => 'Muhammad',
                'ayah' => '47:35',
            ],
        ],
        [
            'arabic' => 'يَـٰٓأَيَّتُهَا ٱلنَّفْسُ ٱلْمُطْمَئِنَّةُ ۝ ٱرْجِعِىٓ إِلَىٰ رَبِّكِ رَاضِيَةً مَّرْضِيَّةً',
            'translations' => [
                'en' => 'O reassured soul, return to your Lord, well-pleased and pleasing to Him.',
            ],
            'reference' => [
                'surah' => 'Al-Fajr',
                'ayah' => '89:27-28',
            ],
        ],
        [
            'arabic' => 'وَٱتَّقُوا۟ ٱللَّهَ ۖ وَيُعَلِّمُكُمُ ٱللَّهُ',
            'translations' => [
                'en' => 'And fear Allah. And Allah teaches you.',
            ],
            'reference' => [
                'surah' => 'Al-Baqarah',
                'ayah' => '2:282',
            ],
        ],
        [
            'arabic' => 'وَمَا ٱخْتَلَفْتُمْ فِيهِ مِن شَىْءٍ فَحُكْمُهُۥٓ إِلَى ٱللَّهِ',
            'translations' => [
                'en' => 'And whatever you disagree upon - its ruling is left to Allah.',
            ],
            'reference' => [
                'surah' => 'Ash-Shura',
                'ayah' => '42:10',
            ],
        ],
        [
            'arabic' => 'وَمَآ أَصَـٰبَكُم مِّن مُّصِيبَةٍ فَبِمَا كَسَبَتْ أَيْدِيكُمْ وَيَعْفُوا۟ عَن كَثِيرٍ',
            'translations' => [
                'en' => 'And whatever strikes you of disaster - it is for what your hands have earned; but He pardons much.',
            ],
            'reference' => [
                'surah' => 'Ash-Shura',
                'ayah' => '42:30',
            ],
        ],
        [
            'arabic' => 'وَٱعْتَصِمُوا۟ بِحَبْلِ ٱللَّهِ جَمِيعًا وَلَا تَفَرَّقُوا۟',
            'translations' => [
                'en' => 'And hold firmly to the rope of Allah all together and do not become divided.',
            ],
            'reference' => [
                'surah' => 'Ali \'Imran',
                'ayah' => '3:103',
            ],
        ],
        [
            'arabic' => 'وَٱتَّقُوا۟ يَوْمًا تُرْجَعُونَ فِيهِ إِلَى ٱللَّهِ',
            'translations' => [
                'en' => 'And fear a Day when you will be returned to Allah.',
            ],
            'reference' => [
                'surah' => 'Al-Baqarah',
                'ayah' => '2:281',
            ],
        ],
        [
            'arabic' => 'أَلَيْسَ ٱللَّهُ بِكَافٍ عَبْدَهُۥ',
            'translations' => [
                'en' => 'Is not Allah sufficient for His servant?',
            ],
            'reference' => [
                'surah' => 'Az-Zumar',
                'ayah' => '39:36',
            ],
        ],
        [
            'arabic' => 'إِنَّ ٱللَّهَ مَعَ ٱلَّذِينَ ٱتَّقَوا۟ وَّٱلَّذِينَ هُم مُّحْسِنُونَ',
            'translations' => [
                'en' => 'Indeed, Allah is with those who fear Him and those who are doers of good.',
            ],
            'reference' => [
                'surah' => 'An-Nahl',
                'ayah' => '16:128',
            ],
        ],
    ];

    /**
     * Get a random Quranic Ayat.
     *
     * This static method provides compatibility with Laravel's Inspiring class pattern.
     * Returns a random ayat with Arabic text, translation, and reference.
     *
     * @param string|null $locale The locale for translation (defaults to 'en')
     * @return array{arabic: string, translations: array<string, string>, reference: array{surah: string, ayah: string}}
     */
    public static function quote(?string $locale = 'en'): array
    {
        $randomIndex = array_rand(self::$ayats);
        $ayat = self::$ayats[$randomIndex];

        // If specific locale requested and not available, fallback to English
        if ($locale && !isset($ayat['translations'][$locale]) && isset($ayat['translations']['en'])) {
            // Keep the structure but ensure the requested locale falls back to English
            return $ayat;
        }

        return $ayat;
    }

    /**
     * Get a random quote with a specific locale preference.
     *
     * Instance method for more flexible usage.
     *
     * @param string|null $locale The locale for translation (defaults to 'en')
     * @return array{arabic: string, translations: array<string, string>, reference: array{surah: string, ayah: string}}
     */
    public function getQuote(?string $locale = 'en'): array
    {
        return self::quote($locale);
    }

    /**
     * Get all available locales/translations.
     *
     * @return array<int, string>
     */
    public function getAvailableLocales(): array
    {
        $locales = [];

        foreach (self::$ayats as $ayat) {
            foreach (array_keys($ayat['translations']) as $locale) {
                if (!in_array($locale, $locales)) {
                    $locales[] = $locale;
                }
            }
        }

        return $locales;
    }

    /**
     * Get all ayats (useful for future extensions).
     *
     * @return array<int, array{arabic: string, translations: array<string, string>, reference: array{surah: string, ayah: string}}>
     */
    public function getAllAyats(): array
    {
        return self::$ayats;
    }

    /**
     * Get total count of available ayats.
     *
     * @return int
     */
    public function count(): int
    {
        return count(self::$ayats);
    }
}
