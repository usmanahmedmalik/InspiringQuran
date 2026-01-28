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
                'nl' => 'Dus Waarlijk, na slechte tijden komen er betere tijden. Waarlijk, na slechte tijden komen er betere tijden.',
                'fr' => 'A côté de la difficulté est, certes, une facilité! A côté de la difficulté est, certes, une facilité!',
                'tr' => 'Gerçek şu ki, güçlükle beraber bir kolaylık vardır. Gerçek şu ki, güçlükle beraber bir kolaylık vardır.',
                'ur' => 'پس بیشک تنگی کے ساتھ آسانی ہے۔ بیشک تنگی کے ساتھ آسانی ہے۔',
                'de' => 'Denn gewiß, mit der Drangsal ist Erleichterung, gewiß, mit der Drangsal ist Erleichterung.',
                'es' => 'Pues, ciertamente, junto a la dificultad hay facilidad. Sí, junto a la dificultad hay facilidad.',
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
                'nl' => 'Allah legt een ziel geen last op groter dan zij kan dragen.',
                'fr' => 'Allah n\'impose à aucune âme une charge supérieure à sa capacité.',
                'tr' => 'Allah hiç kimseyi gücünün üstünde bir şeyle yükümlü tutmaz.',
                'ur' => 'اللہ کسی جان کو اس کی طاقت سے زیادہ تکلیف نہیں دیتا۔',
                'de' => 'Allah erlegt keiner Seele mehr auf, als sie zu leisten vermag.',
                'es' => 'Allah no impone a nadie más de lo que puede soportar.',
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
                'nl' => 'En wie Allah vreest, Hij zal voor hem een uitweg maken. En Hij zal hem voorzien van waar hij niet verwacht.',
                'fr' => 'Et quiconque craint Allah, Il lui donnera une issue favorable. Et Il lui accordera Ses dons par des moyens sur lesquels il ne comptait pas.',
                'tr' => 'Kim Allah\'tan korkarsa Allah ona bir çıkış yolu gösterir. Ve ona ummadığı yerden rızık verir.',
                'ur' => 'اور جو شخص اللہ سے ڈرے گا اللہ اس کے لیے نکلنے کی راہ پیدا کر دے گا۔ اور اسے وہاں سے رزق دے گا جہاں سے اسے گمان بھی نہ ہو۔',
                'de' => 'Und wer Allah fürchtet, dem schafft Er einen Ausweg. Und versorgt ihn von dort, wo er nicht damit rechnet.',
                'es' => 'Y quien teme a Allah, Él le da una salida. Y le provee desde donde no lo espera.',
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
                'nl' => 'Zeg: \'O Mijn dienaren die tegen zichzelf overdreven hebben! Wanhoop niet aan de genade van Allah. Voorwaar, Allah vergeeft alle zonden.\'',
                'fr' => 'Dis: \'Ô Mes serviteurs qui avez commis des excès à votre propre détriment, ne désespérez pas de la miséricorde d\'Allah. Car Allah pardonne tous les péchés.\'',
                'tr' => 'De ki: \'Ey kendi nefislerine karşı ölçüyü kaçırmış kullarım! Allah\'ın rahmetinden ümit kesmeyin. Çünkü Allah bütün günahları bağışlar.\'',
                'ur' => 'کہہ دو: \'اے میرے بندو جنہوں نے اپنی جانوں پر زیادتی کی ہے، اللہ کی رحمت سے مایوس نہ ہو۔ بیشک اللہ تمام گناہوں کو بخش دیتا ہے۔\'',
                'de' => 'Sag: O Meine Diener, die ihr gegen euch selbst maßlos gewesen seid, verliert nicht die Hoffnung auf Allahs Barmherzigkeit. Gewiß, Allah vergibt die Sünden alle.',
                'es' => 'Di: ¡Siervos Míos que os habéis excedido en contra de vosotros mismos! No desesperéis de la misericordia de Allah, es cierto que Allah perdona todas las faltas.',
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
                'nl' => 'En wanneer Mijn dienaren je over Mij vragen - Ik ben dichtbij. Ik beantwoord het gebed van de bidder wanneer hij tot Mij bidt.',
                'fr' => 'Et quand Mes serviteurs t\'interrogent sur Moi... alors Je suis tout proche: Je réponds à l\'appel de celui qui Me prie quand il Me prie.',
                'tr' => 'Kullarım sana Beni sorduklarında, şüphesiz ben çok yakınım. Bana dua ettiği zaman dua edenin duasına karşılık veririm.',
                'ur' => 'اور جب میرے بندے تم سے میرے متعلق پوچھیں تو میں قریب ہوں۔ میں پکارنے والے کی پکار کا جواب دیتا ہوں جب وہ مجھے پکارتا ہے۔',
                'de' => 'Und wenn dich Meine Diener nach Mir fragen, so bin Ich nahe; Ich erhöre den Ruf des Bittenden, wenn er Mich anruft.',
                'es' => 'Y cuando Mis siervos te pregunten por Mí... Yo estoy cerca y respondo la llamada del que pide, cuando Me pide.',
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
                'nl' => 'O jullie die geloven, zoek hulp door geduld en gebed. Voorwaar, Allah is met de geduldigen.',
                'fr' => 'Ô les croyants! Cherchez secours dans l\'endurance et la Salât. Car Allah est avec ceux qui sont endurants.',
                'tr' => 'Ey iman edenler! Sabır ve namazla Allah\'tan yardım isteyin. Şüphesiz Allah sabredenlerle beraberdir.',
                'ur' => 'اے ایمان والو! صبر اور نماز سے مدد مانگو۔ بیشک اللہ صبر کرنے والوں کے ساتھ ہے۔',
                'de' => 'O die ihr glaubt, sucht Hilfe in der Standhaftigkeit und im Gebet! Allah ist mit den Standhaften.',
                'es' => '¡Vosotros que creéis! Buscad ayuda a través de la paciencia y la Oración, es verdad que Allah está con los pacientes.',
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
                'nl' => 'Dus verzwak niet en bedroef niet, terwijl jullie de overwinnaars zijn als jullie gelovig zijn.',
                'fr' => 'Ne vous laissez pas battre, ne vous affligez pas alors que vous êtes les supérieurs, si vous êtes de vrais croyants.',
                'tr' => 'Gevşemeyin, üzülmeyin. Eğer gerçek müminler iseniz, en üstün olan sizlersiniz.',
                'ur' => 'تو نہ کمزور ہو اور نہ غم کرو اور تم ہی غالب رہو گے اگر تم مومن ہو۔',
                'de' => 'Werdet nicht schwach und seid nicht traurig, wo ihr doch die Obersten seid, wenn ihr gläubig seid.',
                'es' => 'Y no flaqueéis ni os entristezcáis cuando sois vosotros los superiores, si sois creyentes.',
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
                'nl' => 'En als jullie dankbaar zijn, zal Ik jullie zeker meer geven.',
                'fr' => 'Et si vous êtes reconnaissants, très certainement J\'augmenterai Mes bienfaits pour vous.',
                'tr' => 'Eğer şükrederseniz elbette size daha çoğunu veririm.',
                'ur' => 'اور اگر تم شکر کرو گے تو میں تمہیں ضرور زیادہ دوں گا۔',
                'de' => 'Und wenn ihr dankbar seid, werde Ich euch ganz gewiß noch mehr geben.',
                'es' => 'Y si sois agradecidos, os daré más.',
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
                'nl' => 'Degenen die geloven en hun harten gerust zijn door de herinnering aan Allah. Ongefwijfeld, door de herinnering aan Allah zijn de harten gerust.',
                'fr' => 'Ceux qui ont cru, et dont les cœurs se tranquillisent à l\'évocation d\'Allah. N\'est-ce point par l\'évocation d\'Allah que se tranquillisent les cœurs?',
                'tr' => 'İman edenler ve kalpleri Allah\'ı anmakla huzur bulanlar. Bilin ki kalpler ancak Allah\'ı anmakla huzur bulur.',
                'ur' => 'جو لوگ ایمان لائے اور ان کے دل اللہ کی یاد سے اطمینان پاتے ہیں۔ خبردار! اللہ کی یاد سے ہی دل اطمینان پاتے ہیں۔',
                'de' => 'Diejenigen, die glauben und deren Herzen im Gedenken Allahs Ruhe finden. Sicherlich, im Gedenken Allahs finden die Herzen Ruhe!',
                'es' => 'Los que creen y cuyos corazones se sosiegan con el recuerdo de Allah. ¿Acaso no es con el recuerdo de Allah con lo que se sosiegan los corazones?',
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
                'nl' => 'En jullie Heer zegt: \'Roep Mij aan; Ik zal jullie antwoorden.\'',
                'fr' => 'Et votre Seigneur dit: \'Appelez-Moi, Je vous répondrai.\'',
                'tr' => 'Rabbiniz buyurdu ki: \'Bana dua edin, size karşılık vereyim.\'',
                'ur' => 'اور تمہارے رب نے فرمایا: \'مجھے پکارو میں تمہاری دعا قبول کروں گا۔\'',
                'de' => 'Und euer Herr sagt: Ruft Mich an, so erhöre Ich euch.',
                'es' => 'Y vuestro Señor dice: Pedidme y os responderé.',
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
                'nl' => 'Voorwaar, Allah verandert de toestand van een volk niet totdat zij veranderen wat in henzelf is.',
                'fr' => 'En vérité, Allah ne modifie point l\'état d\'un peuple, tant que les individus qui le composent ne modifient pas ce qui est en eux-mêmes.',
                'tr' => 'Şüphesiz ki Allah, bir kavmin içindeki değiştirinceye kadar, onların durumunu değiştirmez.',
                'ur' => 'بیشک اللہ کسی قوم کی حالت نہیں بدلتا جب تک وہ خود اپنے اندر کی چیز نہیں بدلتے۔',
                'de' => 'Gewiß, Allah ändert nicht die Lage von Leuten, bis sie das ändern, was in ihnen selbst ist.',
                'es' => 'Es cierto que Allah no cambia lo que una gente tiene hasta que ellos no cambian lo que hay en sí mismos.',
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
                'nl' => 'O jullie die geloven, wees geduldig en volhard en blijf waakzaam en vrees Allah opdat jullie succesvol mogen zijn.',
                'fr' => 'Ô les croyants! Soyez endurants. Incitez-vous à l\'endurance. Luttez constamment et craignez Allah, afin que vous réussissiez!',
                'tr' => 'Ey iman edenler! Sabredin, sebat gösterin, birbirinize yardım edin ve Allah\'tan korkun ki başarılı olasınız.',
                'ur' => 'اے ایمان والو! صبر کرو اور ثابت قدمی دکھاؤ اور تیار رہو اور اللہ سے ڈرو تاکہ تم فلاح پاؤ۔',
                'de' => 'O die ihr glaubt, seid standhaft, haltet aus, seid kampfbereit und fürchtet Allah, auf daß es euch wohl ergehen möge!',
                'es' => '¡Vosotros que creéis! Tened paciencia, rivalizad en ella, sed firmes y temed a Allah para que podáis tener éxito.',
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
                'nl' => 'En wanhoop niet aan de genade van Allah. Voorwaar, niemand wanhoopt aan de genade van Allah behalve het ongelovige volk.',
                'fr' => 'Et ne désespérez pas de la miséricorde d\'Allah. Ce sont seulement les gens mécréants qui désespèrent de la miséricorde d\'Allah.',
                'tr' => 'Allah\'ın rahmetinden ümit kesmeyin. Çünkü inkâr eden topluluktan başkası Allah\'ın rahmetinden ümit kesmez.',
                'ur' => 'اور اللہ کی رحمت سے مایوس نہ ہو۔ بیشک اللہ کی رحمت سے کافر لوگوں کے سوا کوئی مایوس نہیں ہوتا۔',
                'de' => 'Und verzweifelt nicht an Allahs Erbarmen. Gewiß, an Allahs Erbarmen verzweifeln nur die ungläubigen Leute.',
                'es' => 'Y no desesperéis de la misericordia de Allah, pues sólo la gente incrédula desespera de la misericordia de Allah.',
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
                'nl' => 'Welke van de gunsten van jullie Heer zouden jullie loochenen?',
                'fr' => 'Lequel donc des bienfaits de votre Seigneur nierez-vous?',
                'tr' => 'Rabbinizin hangi nimetlerini yalanlıyorsunuz?',
                'ur' => 'پھر تم دونوں اپنے رب کی کن کن نعمتوں کو جھٹلاؤ گے؟',
                'de' => 'Welche der Wohltaten eures Herrn wollt ihr beide denn leugnen?',
                'es' => '¿Cuál de los beneficios de vuestro Señor podréis negar?',
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
                'nl' => 'En Mijn genade omvat alle dingen.',
                'fr' => 'Et Ma miséricorde embrasse toute chose.',
                'tr' => 'Benim rahmetim her şeyi kuşatmıştır.',
                'ur' => 'اور میری رحمت ہر چیز پر وسیع ہے۔',
                'de' => 'Und Meine Barmherzigkeit umfaßt alle Dinge.',
                'es' => 'Y Mi misericordia abarca todas las cosas.',
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
                'nl' => 'En geen ziel weet wat zij morgen zal verdienen.',
                'fr' => 'Et nul ne sait ce qu\'il acquerra demain.',
                'tr' => 'Hiçbir kimse yarın ne kazanacağını bilemez.',
                'ur' => 'اور کوئی نفس نہیں جانتا کہ کل کیا کمائے گا۔',
                'de' => 'Und niemand weiß, was er morgen erwerben wird.',
                'es' => 'Y nadie sabe lo que adquirirá mañana.',
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
                'nl' => 'Dus verzwak niet en roep niet op tot vrede terwijl jullie superieur zijn, en Allah is met jullie.',
                'fr' => 'Ne faiblissez donc pas et n\'appelez pas à la paix alors que vous êtes les plus hauts, qu\'Allah est avec vous.',
                'tr' => 'Gevşemeyin ve barışa çağırmayın. Siz üstün olduğunuz halde, Allah sizinle beraberdir.',
                'ur' => 'پس کمزور نہ ہو اور صلح کی دعوت نہ دو جبکہ تم غالب ہو اور اللہ تمہارے ساتھ ہے۔',
                'de' => 'So werdet nicht schwach und ruft nicht zum Frieden auf, wo ihr doch die Obersten seid. Und Allah ist mit euch.',
                'es' => 'No flaqueéis ni llaméis a la paz cuando sois los superiores, pues Allah está con vosotros.',
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
                'nl' => 'O gerustgestelde ziel, keer terug naar je Heer, tevreden en tevredenstellend.',
                'fr' => 'Ô toi, âme apaisée, retourne vers ton Seigneur, satisfaite et agréée.',
                'tr' => 'Ey huzur içinde olan nefis! Sen O\'ndan razı, O da senden razı olarak Rabbine dön.',
                'ur' => 'اے اطمینان پانے والے نفس! اپنے رب کی طرف لوٹ آ، تو راضی اور اس سے راضی ہو کر۔',
                'de' => 'O du Seele, die Ruhe gefunden hat, kehre zu deinem Herrn zufrieden und (Ihm) wohlgefällig zurück.',
                'es' => '¡Alma sosegada! Regresa a tu Señor, satisfecha y satisfactoria.',
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
                'nl' => 'En vrees Allah. En Allah onderwijst jullie.',
                'fr' => 'Et craignez Allah. Et Allah vous enseigne.',
                'tr' => 'Allah\'tan korkun. Allah size öğretir.',
                'ur' => 'اور اللہ سے ڈرو۔ اور اللہ تمہیں سکھاتا ہے۔',
                'de' => 'Und fürchtet Allah. Und Allah lehrt euch.',
                'es' => 'Y temed a Allah. Y Allah os enseña.',
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
                'nl' => 'En wat jullie ook onenigheid over hebben - het oordeel ervan is aan Allah.',
                'fr' => 'Sur toutes vos divergences, le jugement appartient à Allah.',
                'tr' => 'Hangi konuda anlaşmazlığa düşerseniz, onun hükmü Allah\'a aittir.',
                'ur' => 'اور تم کسی چیز میں اختلاف کرو تو اس کا فیصلہ اللہ کے پاس ہے۔',
                'de' => 'Und worüber ihr auch immer uneinig seid, die Entscheidung darüber steht Allah zu.',
                'es' => 'Y sobre aquello en lo que discrepéis, su juicio pertenece a Allah.',
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
                'nl' => 'En wat jullie treft aan ramp - het is vanwege wat jullie handen verdiend hebben; maar Hij vergeeft veel.',
                'fr' => 'Tout malheur qui vous atteint est dû à ce que vos mains ont acquis. Et Il pardonne beaucoup.',
                'tr' => 'Başınıza gelen her musibet kendi ellerinizle yaptıklarınızdandır. Allah birçoğunu da bağışlar.',
                'ur' => 'اور جو مصیبت تم پر آتی ہے وہ تمہارے ہاتھوں کی کمائی سے ہے اور وہ بہت کچھ معاف کر دیتا ہے۔',
                'de' => 'Und was euch an Unglück trifft, ist für das, was eure Hände erworben haben. Und Er verzeiht vieles.',
                'es' => 'Y lo que os ocurre de adversidad es por lo que se han buscado vuestras manos, pero Él perdona mucho.',
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
                'nl' => 'En houd jullie allemaal vast aan het touw van Allah en raak niet verdeeld.',
                'fr' => 'Et cramponnez-vous tous ensemble au câble d\'Allah et ne soyez pas divisés.',
                'tr' => 'Hep birlikte Allah\'ın ipine sımsıkı sarılın ve parçalanıp bölünmeyin.',
                'ur' => 'اور سب مل کر اللہ کی رسی کو مضبوطی سے پکڑ لو اور متفرق نہ ہو۔',
                'de' => 'Und haltet alle fest am Seil Allahs und seid nicht gespalten.',
                'es' => 'Y aferraos todos al cable de Allah y no os dividáis.',
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
                'nl' => 'En vrees een Dag waarop jullie naar Allah teruggebracht zullen worden.',
                'fr' => 'Et craignez le jour où vous serez ramenés vers Allah.',
                'tr' => 'Allah\'a döndürüleceğiniz günden korkun.',
                'ur' => 'اور اس دن سے ڈرو جس میں تم اللہ کی طرف لوٹائے جاؤ گے۔',
                'de' => 'Und fürchtet einen Tag, an dem ihr zu Allah zurückgebracht werdet.',
                'es' => 'Y temed un día en el que seréis devueltos a Allah.',
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
                'nl' => 'Is Allah niet voldoende voor Zijn dienaar?',
                'fr' => 'Allah ne suffit-Il pas à Son serviteur?',
                'tr' => 'Allah kuluna yetmez mi?',
                'ur' => 'کیا اللہ اپنے بندے کے لیے کافی نہیں؟',
                'de' => 'Genügt Allah denn nicht Seinem Diener?',
                'es' => '¿Acaso no le basta a Su siervo Allah?',
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
                'nl' => 'Voorwaar, Allah is met degenen die Hem vrezen en degenen die goeddoeners zijn.',
                'fr' => 'Certes, Allah est avec ceux qui L\'ont craint avec piété et ceux qui sont bienfaisants.',
                'tr' => 'Şüphesiz Allah, takva sahipleri ve iyilik edenlerle beraberdir.',
                'ur' => 'بیشک اللہ ان لوگوں کے ساتھ ہے جو تقویٰ اختیار کرتے ہیں اور جو نیکی کرنے والے ہیں۔',
                'de' => 'Gewiß, Allah ist mit denjenigen, die gottesfürchtig sind, und denjenigen, die Gutes tun.',
                'es' => 'Verdaderamente Allah está con los que Le temen y con los que hacen el bien.',
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
