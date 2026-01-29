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
        [
            'arabic' => 'وَٱسْتَعِينُوا۟ بِٱلصَّبْرِ وَٱلصَّلَوٰةِ ۚ وَإِنَّهَا لَكَبِيرَةٌ إِلَّا عَلَى ٱلْخَٰشِعِينَ',
            'translations' => [
                'en' => 'And seek help through patience and prayer, and indeed, it is difficult except for the humbly submissive [to Allah]',
                'nl' => 'En vraagt (Allah) om hulp door middel van geduld en de Shalât. En voorwaar, dat is zwaar, behalve voor de ootmoedigen.',
                'fr' => 'Et cherchez secours dans l\'endurance et la salât: certes, la Salât est une lourde obligation, sauf pour les humbles,',
                'tr' => 'Sabır ve namazla Allah\'a sığınıp yardım isteyin; Rablerine kavuşacaklarını ve Ona döneceklerini umanlar ve huşu duyanlardan başkasına namaz elbette ağır gelir.',
                'ur' => 'اور صبر اور نماز کے ساتھ مدد طلب کرو یہ چیز شاق ہے، مگر ڈر رکھنے والوں پر',
                'de' => 'Und sucht Hilfe in der Standhaftigkeit und im Gebet! Es ist freilich schwer, nur nicht für die Demütigen,',
                'es' => 'Busquen socorro en la paciencia y la oración. El cumplimiento de la oración es difícil, excepto para los que se someten humildemente [a Dios];',
            ],
            'reference' => [
                'surah' => 'Al-Baqara',
                'ayah' => '2:45',
            ],
        ],
        [
            'arabic' => 'وَلَنَبْلُوَنَّكُم بِشَىْءٍۢ مِّنَ ٱلْخَوْفِ وَٱلْجُوعِ وَنَقْصٍۢ مِّنَ ٱلْأَمْوَٰلِ وَٱلْأَنفُسِ وَٱلثَّمَرَٰتِ ۗ وَبَشِّرِ ٱلصَّٰبِرِينَ',
            'translations' => [
                'en' => 'And We will surely test you with something of fear and hunger and a loss of wealth and lives and fruits, but give good tidings to the patient,',
                'nl' => 'En Wij zullen jullie zeker beproeven met iets van vrees, honger, vermindering van bezittingen, levens en vruchten. Maar geeft verheugende tijdingen aan de geduldigen.',
                'fr' => 'Très certainement, Nous vous éprouverons par un peu de peur, de faim et de diminution de biens, de personnes et de fruits. Et fais la bonne annonce aux endurants,',
                'tr' => 'Muhakkak sizi biraz korku, biraz açlık ve mallardan, canlardan, ürünlerden biraz eksiltmekle deneriz, sabredenleri müjdele.',
                'ur' => 'اور ہم کسی نہ کسی طرح تمہاری آزمائش ضرور کریں گے، دشمن کے ڈر سے، بھوک پیاس سے، مال وجان اور پھلوں کی کمی سے اور ان صبر کرنے والوں کو خوشخبری دے دیجیئے',
                'de' => 'Und Wir werden euch ganz gewiß mit ein wenig Furcht und Hunger und Mangel an Besitz, Seelen und Früchten prüfen. Doch verkünde frohe Botschaft den Standhaften,',
                'es' => 'Los pondremos a prueba con algo de temor, hambre, pérdida de bienes materiales, vidas y frutos, pero albricia a los pacientes.',
            ],
            'reference' => [
                'surah' => 'Al-Baqara',
                'ayah' => '2:155',
            ],
        ],
        [
            'arabic' => '۞ لَّيْسَ ٱلْبِرَّ أَن تُوَلُّوا۟ وُجُوهَكُمْ قِبَلَ ٱلْمَشْرِقِ وَٱلْمَغْرِبِ وَلَٰكِنَّ ٱلْبِرَّ مَنْ ءَامَنَ بِٱللَّهِ وَٱلْيَوْمِ ٱلْءَاخِرِ وَٱلْمَلَٰٓئِكَةِ وَٱلْكِتَٰبِ وَٱلنَّبِيِّۦنَ وَءَاتَى ٱلْمَالَ عَلَىٰ حُبِّهِۦ ذَوِى ٱلْقُرْبَىٰ وَٱلْيَتَٰمَىٰ وَٱلْمَسَٰكِينَ وَٱبْنَ ٱلسَّبِيلِ وَٱلسَّآئِلِينَ وَفِى ٱلرِّقَابِ وَأَقَامَ ٱلصَّلَوٰةَ وَءَاتَى ٱلزَّكَوٰةَ وَٱلْمُوفُونَ بِعَهْدِهِمْ إِذَا عَٰهَدُوا۟ ۖ وَٱلصَّٰبِرِينَ فِى ٱلْبَأْسَآءِ وَٱلضَّرَّآءِ وَحِينَ ٱلْبَأْسِ ۗ أُو۟لَٰٓئِكَ ٱلَّذِينَ صَدَقُوا۟ ۖ وَأُو۟لَٰٓئِكَ هُمُ ٱلْمُتَّقُونَ',
            'translations' => [
                'en' => 'Righteousness is not that you turn your faces toward the east or the west, but [true] righteousness is [in] one who believes in Allah, the Last Day, the angels, the Book, and the prophets and gives wealth, in spite of love for it, to relatives, orphans, the needy, the traveler, those who ask [for help], and for freeing slaves; [and who] establishes prayer and gives zakah; [those who] fulfill their promise when they promise; and [those who] are patient in poverty and hardship and during battle. Those are the ones who have been true, and it is those who are the righteous.',
                'nl' => 'Het is geen vroomheid dat jullie je gezichten naar het Oosten en het Westen wenden, maar vroom is wie gelooft in Allah en het Hiernamaals en de Engelen en de Schrift en de Profeten en die het bezit dat hij liefheeft weggeeft aan de verwanten en de wezen en de behoeftigen en de reiziger (zonder proviand) en de bedelaars en (het gebruikt) voor het vrijkopen van slaven, en die de shalât onderhoudt, de zakât geeft. En die trouw zijn aan hun belofte wanneer zij een belofte hebben gedaan en de geduldigen in tegenspoed, in rampspoed en in oorlogstijd. Zij zijn diegenen die Moettaqôen zijn, en zij zijn het die de godvrezenden zijn.',
                'fr' => 'La bonté pieuse ne consiste pas à tourner vos visages vers le Levant ou le Couchant. Mais la bonté pieuse est de croire en Allah, au Jour dernier, aux Anges, au Livre et aux prophètes, de donner de son bien, quelqu\'amour qu\'on en ait, aux proches, aux orphelins, aux nécessiteux, aux voyageurs indigents et à ceux qui demandent l\'aide et pour délier les jougs, d\'accomplir la Salât et d\'acquitter la Zakât. Et ceux qui remplissent leurs engagements lorsqu\'ils se sont engagés, ceux qui sont endurants dans la misère, la maladie et quand les combats font rage, les voilà les véridiques et les voilà les vrais pieux!',
                'tr' => 'Yüzlerinizi doğudan yana ve batıdan yana çevirmeniz iyi olmak demek değildir; Lakin iyi olan, Allah\'a, ahiret gününe, meleklere, Kitap\'a, peygamberlere inanan, O\'nun sevgisiyle, yakınlarına, yetimlere, düşkünlere, yolculara, yoksullara ve köleler uğrunda mal veren, namaz kılan, zekat veren ve ahidleştiklerinde ahidlerine vefa gösterenler, zorda, darda ve savaş alanında sabredenlerdir. İşte onlar doğru olanlardır ve sakınanlar ancak onlardır.',
                'ur' => 'ساری اچھائی مشرق ومغرب کی طرف منھ کرنے میں ہی نہیں بلکہ حقیقتاً اچھا وه شخص ہے جو اللہ تعالی پر، قیامت کے دن پر، فرشتوں پر، کتاب اللہ پر اور نبیوں پر ایمان رکھنے والا ہو، جو مال سے محبت کرنے کے باوجود قرابت داروں، یتیموں، مسکینوں، مسافروں اور سوال کرنے والے کو دے، غلاموں کو آزاد کرے، نماز کی پابندی اور زکوٰة کی ادائیگی کرے، جب وعده کرے تب اسے پورا کرے، تنگدستی، دکھ درد اور لڑائی کے وقت صبر کرے، یہی سچے لوگ ہیں اور یہی پرہیزگار ہیں',
                'de' => 'Nicht darin besteht die Güte, daß ihr eure Gesichter gegen Osten oder Westen wendet. Güte ist vielmehr, daß man an Allah, den Jüngsten Tag, die Engel, die Bücher und die Propheten glaubt und vom Besitz - obwohl man ihn liebt - der Verwandtschaft, den Waisen, den Armen, dem Sohn des Weges, den Bettlern und für (den Loskauf von) Sklaven hergibt, das Gebet verrichtet und die Abgabe entrichtet; und diejenigen, die ihre Verpflichtung einhalten, wenn sie eine eingegangen sind, und diejenigen, die standhaft bleiben in Not, Leid und in Kriegszeiten, das sind diejenigen, die wahrhaftig sind, und das sind die Gottesfürchtigen.',
                'es' => 'La verdadera virtud no consiste en orientarse hacia el oriente o el occidente [durante la oración], sino que es piadoso quien cree en Dios, el Día del Juicio, los ángeles, el Libro, los Profetas, hace caridad a pesar del apego [que tiene por los bienes materiales] a los parientes, los huérfanos, los pobres, los viajeros insolventes, los mendigos, y colabora para liberar esclavos y cautivos. [Tiene piedad quien] hace la oración prescrita, paga el zakat, cumple con los compromisos contraídos, es paciente en la estrechez, la adversidad y ante la persecución. Ésos son los veraces en su fe y los verdaderos piadosos.',
            ],
            'reference' => [
                'surah' => 'Al-Baqara',
                'ayah' => '2:177',
            ],
        ],
        [
            'arabic' => 'وَكَأَيِّن مِّن نَّبِىٍّۢ قَٰتَلَ مَعَهُۥ رِبِّيُّونَ كَثِيرٌۭ فَمَا وَهَنُوا۟ لِمَآ أَصَابَهُمْ فِى سَبِيلِ ٱللَّهِ وَمَا ضَعُفُوا۟ وَمَا ٱسْتَكَانُوا۟ ۗ وَٱللَّهُ يُحِبُّ ٱلصَّٰبِرِينَ',
            'translations' => [
                'en' => 'And how many a prophet [fought and] with him fought many religious scholars. But they never lost assurance due to what afflicted them in the cause of Allah, nor did they weaken or submit. And Allah loves the steadfast.',
                'nl' => 'En hoevelen van de Profeten vochten er niet, vergezeld van vele mensen en zij verloren de moed niet, wanneer zij op de Weg van Allah door rampspoed getroffen werden. En zij verzwakten niet en zij gaven zich niet over en Allah houdt van de geduldigen.',
                'fr' => 'Combien de prophètes ont combattu, en compagnie de beaucoup de disciples, ceux-ci ne fléchirent pas à cause de ce qui les atteignit dans le sentier d\'Allah. Ils ne faiblirent pas et ils ne cédèrent point. Et Allah aime les endurants.',
                'tr' => 'Nice peygamberlerin yanında Rabbe kul olmuş pek çok kimse savaşmıştır. Allah yolunda başlarına gelenlerden ötürü gevşememişler, yılmamışlar ve boyun eğmemişlerdi. Allah, sabredenleri sever.',
                'ur' => 'بہت سے نبیوں کے ہم رکاب ہو کر، بہت سے اللہ والے جہاد کر چکے ہیں، انہیں بھی اللہ کی راه میں تکلیفیں پہنچیں لیکن نہ تو انہوں نے ہمت ہاری نہ سست رہے اور نہ دبے، اور اللہ صبر کرنے والوں کو (ہی) چاہتا ہے',
                'de' => 'Und mit wie vielen Propheten zusammen kämpften zahlreiche Bekenner des Herrn! Doch sie gaben nicht auf ob dessen, was sie auf Allahs Weg traf, noch wurden sie schwach, noch unterwarfen sie sich. Und Allah liebt die Standhaften.',
                'es' => '¡Cuántos Profetas han tenido que combatir junto a multitudes de seguidores devotos! No perdieron la fe por los reveses en la causa de Dios, no flaquearon ni se sometieron al enemigo. Dios ama a los perseverantes.',
            ],
            'reference' => [
                'surah' => 'Aal-i-Imraan',
                'ayah' => '3:146',
            ],
        ],
        [
            'arabic' => 'وَأَطِيعُوا۟ ٱللَّهَ وَرَسُولَهُۥ وَلَا تَنَٰزَعُوا۟ فَتَفْشَلُوا۟ وَتَذْهَبَ رِيحُكُمْ ۖ وَٱصْبِرُوٓا۟ ۚ إِنَّ ٱللَّهَ مَعَ ٱلصَّٰبِرِينَ',
            'translations' => [
                'en' => 'And obey Allah and His Messenger, and do not dispute and [thus] lose courage and [then] your strength would depart; and be patient. Indeed, Allah is with the patient.',
                'nl' => 'En gehoorzaamt Allah en Zijn Boodschapper en twist niet onderling, waardoor jullie ontmoedigd raken en jullie kracht verdwijnt. En weest geduldig: voorwaar, Allah is met de geduldigen.',
                'fr' => 'Et obéissez à Allah et à Son messager; et ne vous disputez pas, sinon vous fléchirez et perdrez votre force. Et soyez endurants, car Allah est avec les endurants.',
                'tr' => 'Allah\'a ve Peygamberine itaat edin; çekişmeyin, yoksa korkar başarısızlığa düşersiniz ve kuvvetiniz gider. Sabredin, doğrusu Allah sabredenlerle beraberdir.',
                'ur' => 'اور اللہ کی اور اس کے رسول کی فرماں برداری کرتے رہو، آپس میں اختلاف نہ کرو ورنہ بزدل ہو جاؤ گے اور تمہاری ہوا اکھڑ جائے گی اور صبر و سہارا رکھو، یقیناً اللہ تعالیٰ صبر کرنے والوں کے ساتھ ہے',
                'de' => 'Und gehorcht Allah und Seinem Gesandten, und streitet nicht miteinander, sonst würdet ihr den Mut verlieren, und eure Kraft würde vergehen! Und seid standhaft! Gewiß, Allah ist mit den Standhaften.',
                'es' => 'Obedezcan a Dios y a Su Mensajero y no discrepen, porque se debilitarían y serían derrotados. Sean pacientes, porque Dios está con los pacientes.',
            ],
            'reference' => [
                'surah' => 'Al-Anfaal',
                'ayah' => '8:46',
            ],
        ],
        [
            'arabic' => 'وَجَآءُو عَلَىٰ قَمِيصِهِۦ بِدَمٍۢ كَذِبٍۢ ۚ قَالَ بَلْ سَوَّلَتْ لَكُمْ أَنفُسُكُمْ أَمْرًۭا ۖ فَصَبْرٌۭ جَمِيلٌۭ ۖ وَٱللَّهُ ٱلْمُسْتَعَانُ عَلَىٰ مَا تَصِفُونَ',
            'translations' => [
                'en' => 'And they brought upon his shirt false blood. [Jacob] said, "Rather, your souls have enticed you to something, so patience is most fitting. And Allah is the one sought for help against that which you describe."',
                'nl' => 'En zij kwamen met zijn hemd, met vals bloed (daarop). Hij zei: "Maar jullie hebben voor jezelf iets moois verzonnen. Daarom is geduld gewenst. En Allah is het Die om hulp wordt gevraagd bij wat jullie beschrijven."',
                'fr' => 'Ils apportèrent sa tunique tachée d\'un faux sang. Il dit: «Vos âmes, plutôt, vous ont suggéré quelque chose... [Il ne me reste plus donc] qu\'une belle patience! C\'est Allah qu\'il faut appeler au secours contre ce que vous racontez!»',
                'tr' => 'Üzerine başka bir kan bulaşmış olarak Yusuf\'un gömleğini de getirmişlerdi. Babaları: "Sizi nefsiniz bir iş yapmaya sürükledi; artık bana güzelce sabır gerekir. Anlattıklarınıza ancak Allah\'tan yardım istenir" dedi.',
                'ur' => 'اور یوسف کے کرتے کو جھوٹ موٹ کے خون سے خون آلود بھی کر لائے تھے، باپ نے کہا یوں نہیں، بلکہ تم نے اپنے دل ہی سے ایک بات بنا لی ہے۔ پس صبر ہی بہتر ہے، اور تمہاری بنائی ہوئی باتوں پر اللہ ہی سے مدد کی طلب ہے',
                'de' => 'Sie brachten falsches Blut auf seinem Hemd. Er sagte: "Nein! Vielmehr habt ihr selbst euch etwas eingeredet. (So gilt es,) schöne Geduld (zu üben). Allah ist Derjenige, bei Dem Hilfe zu suchen ist gegen das, was ihr beschreibt."',
                'es' => 'Y le mostraron su túnica manchada con sangre falsa. Dijo [Jacob]: "Lo que ha sucedido no es como me lo cuentan, sino que es una falsedad que inventaron. Me resignaré pacientemente y que Dios me dé consuelo para sobrellevar la desgracia que me acaban de contar".',
            ],
            'reference' => [
                'surah' => 'Yusuf',
                'ayah' => '12:18',
            ],
        ],
        [
            'arabic' => 'وَٱصْبِرْ وَمَا صَبْرُكَ إِلَّا بِٱللَّهِ ۚ وَلَا تَحْزَنْ عَلَيْهِمْ وَلَا تَكُ فِى ضَيْقٍۢ مِّمَّا يَمْكُرُونَ',
            'translations' => [
                'en' => 'And be patient, [O Muhammad], and your patience is not but through Allah. And do not grieve over them and do not be in distress over what they conspire.',
                'nl' => 'En wees geduldig (O Moehammad) en jij bent slechts geduldig door Allah. En treur niet over hen en wees niet benauwd voor wat zij beramen.',
                'fr' => 'Endure! Ton endurance [ne viendra] qu\'avec (l\'aide) d\'Allah. Ne t\'afflige pas pour eux. Et ne sois pas angoissé à cause de leurs complots.',
                'tr' => 'Sabret, senin sabrın ancak Allah\'ın yardımıyladır; onlara üzülme, kurdukları düzenlerden de endişe etme.',
                'ur' => 'آپ صبر کریں بغیر توفیق الٰہی کے آپ صبر کر ہی نہیں سکتے اور ان کے حال پر رنجیده نہ ہوں اور جو مکر وفریب یہ کرتے رہتے ہیں ان سے تنگ دل نہ ہوں',
                'de' => 'Sei standhaft; deine Standhaftigkeit ist nur durch Allah (möglich). Sei nicht traurig über sie, und sei nicht in Beklommenheit wegen der Ränke, die sie schmieden.',
                'es' => 'Sé paciente y sabe que la paciencia es una virtud que Dios concede a quien quiere. No sientas pena [por la incredulidad de tu pueblo] ni te angusties por lo que traman.',
            ],
            'reference' => [
                'surah' => 'An-Nahl',
                'ayah' => '16:127',
            ],
        ],
        [
            'arabic' => 'يَٰبُنَىَّ أَقِمِ ٱلصَّلَوٰةَ وَأْمُرْ بِٱلْمَعْرُوفِ وَٱنْهَ عَنِ ٱلْمُنكَرِ وَٱصْبِرْ عَلَىٰ مَآ أَصَابَكَ ۖ إِنَّ ذَٰلِكَ مِنْ عَزْمِ ٱلْأُمُورِ',
            'translations' => [
                'en' => 'O my son, establish prayer, enjoin what is right, forbid what is wrong, and be patient over what befalls you. Indeed, [all] that is of the matters [requiring] determination.',
                'nl' => 'O mijn zoon, onderhoud de shalât en roep op tot het goede en weerhoud van het verwerpelijke. En wees geduldig met wat jou treft. Voorwaar, dat behoort tot de aanbevolen daden.',
                'fr' => 'O mon enfant accomplis la Salât, commande le convenable, interdis le blâmable et endure ce qui t\'arrive avec patience. Telle est la résolution à prendre dans toute entreprise!',
                'tr' => '"Ey oğulcuğum! Namazı kıl, uygun olanı buyurup fenalığı önle, başına gelene sabret; doğrusu bunlar, azmedilmeğe değer işlerdir."',
                'ur' => 'اے میرے پیارے بیٹے! تو نماز قائم رکھنا، اچھے کاموں کی نصیحت کرتے رہنا، برے کاموں سے منع کیا کرنا اور جو مصیبت تم پر آجائے صبر کرنا (یقین مانو) کہ یہ بڑے تاکیدی کاموں میں سے ہے',
                'de' => 'O mein lieber Sohn, verrichte das Gebet, gebiete das Rechte und verbiete das Verwerfliche und ertrage standhaft, was dich trifft. Gewiß, dies gehört zur Ent schlossenheit (in der Handhabung) der Angelegenheiten.',
                'es' => '¡Oh, hijito! Haz la oración, ordena el bien y condena el mal, y sé paciente ante la adversidad, porque esas son cualidades de la entereza.',
            ],
            'reference' => [
                'surah' => 'Luqman',
                'ayah' => '31:17',
            ],
        ],
        [
            'arabic' => 'قُلْ يَٰعِبَادِ ٱلَّذِينَ ءَامَنُوا۟ ٱتَّقُوا۟ رَبَّكُمْ ۚ لِلَّذِينَ أَحْسَنُوا۟ فِى هَٰذِهِ ٱلدُّنْيَا حَسَنَةٌۭ ۗ وَأَرْضُ ٱللَّهِ وَٰسِعَةٌ ۗ إِنَّمَا يُوَفَّى ٱلصَّٰبِرُونَ أَجْرَهُم بِغَيْرِ حِسَابٍۢ',
            'translations' => [
                'en' => 'Say, "O My servants who have believed, fear your Lord. For those who do good in this world is good, and the earth of Allah is spacious. Indeed, the patient will be given their reward without account."',
                'nl' => 'Zeg: "O Mijn dienaren die geloven, vreest jullie Heer. Voor degenen die het goede doen in deze wereld is er goedheid, en de aarde van Allah is uitgegtrekt. Voorwaar, het zijn de geduldigen die hun beloning zonder berekening zal worden gegeven."',
                'fr' => 'Dis: «O Mes serviteurs qui avez cru! Craignez votre Seigneur». Ceux qui ici-bas font le bien, auront une bonne [récompense]. La terre d\'Allah est vaste et les endurants auront leur pleine récompense sans compter.',
                'tr' => 'Şöyle de: "Ey inanan kullarım! Rabbinize karşı gelmekten sakının; bu dünyada iyilik yapanlara iyilik vardır. Allah\'ın yarattığı yeryüzü geniştir. Yalnız sabredenlere, ecirleri sonsuz olarak ödenecektir."',
                'ur' => 'کہہ دو کہ اے میرے ایمان والے بندو! اپنے رب سے ڈرتے رہو، جو اس دنیا میں نیکی کرتے ہیں ان کے لئے نیک بدلہ ہے اور اللہ تعالیٰ کی زمین بہت کشاده ہے صبر کرنے والوں ہی کو ان کا پورا پورا بےشمار اجر دیا جاتا ہے',
                'de' => 'Sag: O meine Diener, die ihr gläubig seid, fürchtet euren Herrn. Für diejenigen, die Gutes tun, gibt es hier im Diesseits Gutes. Und Allahs Erde ist weit. Gewiß, den Standhaften wird ihr Lohn ohne Berechnung in vollem Maß zukommen.',
                'es' => 'Diles: "¡Oh, siervos creyentes! Tengan temor de su Señor, y sepan que quienes obren bien en este mundo recibirán una bella recompensa, y que la Tierra de Dios es amplia. La recompensa para quienes sean pacientes y perseverantes no tendrá límite".',
            ],
            'reference' => [
                'surah' => 'Az-Zumar',
                'ayah' => '39:10',
            ],
        ],
        [
            'arabic' => 'فَٱصْبِرْ كَمَا صَبَرَ أُو۟لُوا۟ ٱلْعَزْمِ مِنَ ٱلرُّسُلِ وَلَا تَسْتَعْجِل لَّهُمْ ۚ كَأَنَّهُمْ يَوْمَ يَرَوْنَ مَا يُوعَدُونَ لَمْ يَلْبَثُوٓا۟ إِلَّا سَاعَةًۭ مِّن نَّهَارٍۭ ۚ بَلَٰغٌۭ ۚ فَهَلْ يُهْلَكُ إِلَّا ٱلْقَوْمُ ٱلْفَٰسِقُونَ',
            'translations' => [
                'en' => 'So be patient, [O Muhammad], as were those of determination among the messengers and do not be impatient for them. It will be - on the Day they see that which they are promised - as though they had not remained [in the world] except an hour of a day. [This is] notification. And will [any] be destroyed except the defiantly disobedient people?',
                'nl' => 'Wees daarom geduldig, zoals de bezitters van standvastigheid (Oeloel\'azmi) onder de Boodschappers geduldig waren. En vraag niet om (de bestraffing) voor hen te bespoedigen. Het zal op de Dag, waarop zij zien wat hun aangezegd was, voor hen zijn alsof zij slechts een uur van de dag (op aarde) verbleven. Dit is een vermaning. Er wordt dan (niemand) vernietigd dan het zwaar zondige volk.',
                'fr' => 'Endure (Muhammad) donc, comme ont enduré les messagers doués de fermeté; et ne te montre pas trop pressé de les voir subir [leur châtiment]. Le jour où ils verront ce qui leur est promis, il leur semblera qu\'ils n\'étaient restés [sur terre] qu\'une heure d\'un jour. Voilà une communication. Qui sera donc anéanti sinon les gens pervers?',
                'tr' => 'Peygamberlerden azim sahibi olanların sabrettiği gibi sen de sabret; inkarcılar için acele etme; onlar, kendilerine söz verileni gördükleri gün dünyada sadece gündüzün bir müddeti eğlendiklerini sanırlar. Bu bir bildiridir; yoldan çıkmış olanlardan başkası mı yok edilir?',
                'ur' => 'پس (اے پیغمبر!) تم ایسا صبر کرو جیسا صبر عالی ہمت رسولوں نے کیا اور ان کے لئے (عذاب طلب کرنے میں) جلدی نہ کرو، یہ جس دن اس عذاب کو دیکھ لیں گے جس کا وعده دیئے جاتے ہیں تو (یہ معلوم ہونے لگے گا کہ) دن کی ایک گھڑی ہی (دنیا میں) ٹھہرے تھے، یہ ہے پیغام پہنچا دینا، پس بدکاروں کے سوا کوئی ہلاک نہ کیا جائے گا',
                'de' => 'Sei nun standhaft, wie diejenigen der Gesandten, die Entschlossenheit besaßen, standhaft waren; und wünsche nichts gegen sie zu beschleunigen. Am Tag, da sie sehen, was ihnen angedroht wird, glauben sie, nur eine Stunde eines Tages verweilt zu haben. (Dies ist) eine Botschaft. Wird denn jemand vernichtet außer dem Volk der Frevler?',
                'es' => 'Ten paciencia [¡oh, Mujámmad!] como la tuvieron los Mensajeros con más determinación, y no te impacientes con ellos. El día que [los que se negaron a creer] vean aquello con lo que se les había amenazado, pensarán que estuvieron en la tumba solo un instante del día. Esta es una notificación. ¿A quién le alcanza el castigo sino a la gente perversa?',
            ],
            'reference' => [
                'surah' => 'Al-Ahqaf',
                'ayah' => '46:35',
            ],
        ],
        [
            'arabic' => 'فَٱذْكُرُونِىٓ أَذْكُرْكُمْ وَٱشْكُرُوا۟ لِى وَلَا تَكْفُرُونِ',
            'translations' => [
                'en' => 'So remember Me; I will remember you. And be grateful to Me and do not deny Me.',
                'nl' => 'Gedenkt Mij daarom, dan zal Ik jullie gedenken en weest Mij dankbaar en weest Mij niet ondankbaar.',
                'fr' => 'Souvenez-vous de Moi donc. Je vous récompenserai. Remerciez-Moi et ne soyez pas ingrats envers Moi!',
                'tr' => 'Artık Beni anın, Ben de sizi anayım; Bana şükredin, nankörlük etmeyin.',
                'ur' => 'اس لئے تم میرا ذکر کرو، میں بھی تمہیں یاد کروں گا، میری شکر گزاری کرو اور ناشکری سے بچو',
                'de' => 'Gedenkt Meiner, so gedenke Ich eurer. Seid Mir dankbar und seid nicht undankbar gegen Mich.',
                'es' => 'Recuérdenme que Yo los recordaré; agradézcanme y no sean ingratos.',
            ],
            'reference' => [
                'surah' => 'Al-Baqara',
                'ayah' => '2:152',
            ],
        ],
        [
            'arabic' => 'يَٰٓأَيُّهَا ٱلَّذِينَ ءَامَنُوا۟ كُلُوا۟ مِن طَيِّبَٰتِ مَا رَزَقْنَٰكُمْ وَٱشْكُرُوا۟ لِلَّهِ إِن كُنتُمْ إِيَّاهُ تَعْبُدُونَ',
            'translations' => [
                'en' => 'O you who have believed, eat from the good things which We have provided for you and be grateful to Allah if it is [indeed] Him that you worship.',
                'nl' => 'O jullie die geloven, eet van de goede dingen waarmee Wij jullie hebben voorzien en weest Allah dankbaar als Hij alleen het is die jullie aanbidden.',
                'fr' => 'O les croyants! Mangez des (nourritures) licites que Nous vous avons attribuées. Et remerciez Allah, si c\'est Lui que vous adorez.',
                'tr' => 'Ey İnananlar! Sizi rızıklandırdığımızın temizlerinden yiyin; yalnız Allah\'a kulluk ediyorsanız, O\'na şükredin.',
                'ur' => 'اے ایمان والو! جو پاکیزه چیزیں ہم نے تمہیں دے رکھی ہیں انہیں کھاؤ، پیو اور اللہ تعالیٰ کا شکر کرو، اگر تم خاص اسی کی عبادت کرتے ہو',
                'de' => 'O die ihr glaubt, eßt von den guten Dingen, mit denen Wir euch versorgt haben, und seid Allah dankbar, wenn ihr Ihm (allein) dient!',
                'es' => '¡Oh, creyentes! Coman de las cosas buenas que les he proveído, y agradezcan a Dios, si es que [verdaderamente] solo a Él adoran.',
            ],
            'reference' => [
                'surah' => 'Al-Baqara',
                'ayah' => '2:172',
            ],
        ],
        [
            'arabic' => 'مَّا يَفْعَلُ ٱللَّهُ بِعَذَابِكُمْ إِن شَكَرْتُمْ وَءَامَنتُمْ ۚ وَكَانَ ٱللَّهُ شَاكِرًا عَلِيمًۭا',
            'translations' => [
                'en' => 'What would Allah do with your punishment if you are grateful and believe? And ever is Allah Appreciative and Knowing.',
                'nl' => 'Waarom zal Allah jullie bestraften, indien jullie dankbaar zijn en geloven? En Allah is Waarderend, Alwetend.',
                'fr' => 'Pourquoi Allah vous infligerait-Il un châtiment si vous êtes reconnaissants et croyants? Allah est Reconnaissant et Omniscient.',
                'tr' => 'Şükreder ve inanırsanız, Allah size niçin azabetsin? Allah şükrün karşılığını verir ve bilir.',
                'ur' => 'اللہ تعالیٰ تمہیں سزا دے کر کیا کرے گا؟ اگر تم شکر گزاری کرتے رہو اور باایمان رہو، اللہ تعالیٰ بہت قدر کرنے والا اور پورا علم رکھنے والا ہے',
                'de' => 'Warum sollte Allah euch strafen, wenn ihr dankbar und gläubig seid? Allah ist Dankbar und Allwissend.',
                'es' => '¿Para qué iba Dios a castigarlos [por sus ofensas pasadas] si son [ahora] agradecidos y creyentes? Dios es Agradecido, todo lo sabe.',
            ],
            'reference' => [
                'surah' => 'An-Nisaa',
                'ayah' => '4:147',
            ],
        ],
        [
            'arabic' => 'وَلَقَدْ مَكَّنَّٰكُمْ فِى ٱلْأَرْضِ وَجَعَلْنَا لَكُمْ فِيهَا مَعَٰيِشَ ۗ قَلِيلًۭا مَّا تَشْكُرُونَ',
            'translations' => [
                'en' => 'And We have certainly established you upon the earth and made for you therein ways of livelihood. Little are you grateful.',
                'nl' => 'En voorzeker hebben Wij jullie macht gegeven op aarde en Wij hebben op haar voor jullie levensvoorzieningen geplaatst. Weinig is het dat jullie dankbaar zijn.',
                'fr' => 'Certes, Nous vous avons donné du pouvoir sur terre et Nous vous y avons assigné subsistance. (Mais) vous êtes très peu reconnaissants!',
                'tr' => 'Sizi yeryüzünde yerleştirdik ve orada size geçimlikler yarattık. Öyleyken pek az şükrediyorsunuz.',
                'ur' => 'اور بے شک ہم نے تم کو زمین پر رہنے کی جگہ دی اور ہم نے تمہارے لئے اس میں سامان رزق پیدا کیا، تم لوگ بہت ہی کم شکر کرتے ہو',
                'de' => 'Und Wir haben euch ja auf der Erde eine feste Stellung verliehen, und Wir haben für euch auf ihr (Möglichkeiten für den) Lebensunterhalt geschaffen. Wie wenig ihr dankbar seid!',
                'es' => 'Les he concedido poder en la Tierra y he dispuesto los medios para que vivan en ella. Pero, ¡qué poco agradecen!',
            ],
            'reference' => [
                'surah' => 'Al-A\'raaf',
                'ayah' => '7:10',
            ],
        ],
        [
            'arabic' => 'وَٱللَّهُ أَخْرَجَكُم مِّنۢ بُطُونِ أُمَّهَٰتِكُمْ لَا تَعْلَمُونَ شَيْـًۭٔا وَجَعَلَ لَكُمُ ٱلسَّمْعَ وَٱلْأَبْصَٰرَ وَٱلْأَفْـِٔدَةَ ۙ لَعَلَّكُمْ تَشْكُرُونَ',
            'translations' => [
                'en' => 'And Allah has extracted you from the wombs of your mothers not knowing a thing, and He made for you hearing and vision and intellect that perhaps you would be grateful.',
                'nl' => 'En Allah bracht jullie uit de buiken van jullie moeders voort terwijl jullie niets wisten. En Hij gaf jullie het gehoor en het zien en de harten. Hopelijk zullen jullie dankbaarheid tonen.',
                'fr' => 'Et Allah vous a fait sortir des ventres de vos mères, dénués de tout savoir, et vous a donné l\'ouïe, les yeux et les cœurs (l\'intelligence), afin que vous; soyez reconnaissants.',
                'tr' => 'Allah sizi annelerinizin karnından bir şey bilmez halde çıkarmıştır. Belki şükredersiniz diye size kulak, göz ve kalp vermiştir.',
                'ur' => 'اللہ تعالیٰ نے تمہیں تمہاری ماؤں کے پیٹوں سے نکالا ہے کہ اس وقت تم کچھ بھی نہیں جانتے تھے، اسی نے تمہارے کان اور آنکھیں اور دل بنائے کہ تم شکر گزاری کرو',
                'de' => 'Und Allah hat euch aus den Leibern eurer Mütter hervorgebracht, während ihr nichts wußtet. Und Er hat euch Gehör, Augenlicht und Herzen gegeben, auf daß ihr dankbar sein möget.',
                'es' => 'Dios los hizo nacer del vientre de sus madres sin conocimiento [del mundo que los rodea]. Él los dotó de oído, vista e intelecto, para que sean agradecidos.',
            ],
            'reference' => [
                'surah' => 'An-Nahl',
                'ayah' => '16:78',
            ],
        ],
        [
            'arabic' => 'فَتَبَسَّمَ ضَاحِكًۭا مِّن قَوْلِهَا وَقَالَ رَبِّ أَوْزِعْنِىٓ أَنْ أَشْكُرَ نِعْمَتَكَ ٱلَّتِىٓ أَنْعَمْتَ عَلَىَّ وَعَلَىٰ وَٰلِدَىَّ وَأَنْ أَعْمَلَ صَٰلِحًۭا تَرْضَىٰهُ وَأَدْخِلْنِى بِرَحْمَتِكَ فِى عِبَادِكَ ٱلصَّٰلِحِينَ',
            'translations' => [
                'en' => 'So [Solomon] smiled, amused at her speech, and said, "My Lord, enable me to be grateful for Your favor which You have bestowed upon me and upon my parents and to do righteousness of which You approve. And admit me by Your mercy into [the ranks of] Your righteous servants."',
                'nl' => 'Toen glimlachte hij (Soelaimân) om haar woorden, en zei: "Mijn Heer, maak mij dankbaar voor Uw gunst die U mij en mijn ouders schonk, en doe mij goede daden verrichten, waar U Uw welgevallen op doet rusten. En laat mij, door Uw Barmhartigheid, behoren tot Uw rechtschapen dienaren."\'',
                'fr' => 'Il sourit, amusé par ses propos et dit: «Permets-moi Seigneur, de rendre grâce pour le bienfait dont Tu m\'as comblé ainsi que mes père et mère, et que je fasse une bonne œuvre que tu agrées et fais-moi entrer, par Ta miséricorde, parmi Tes serviteurs vertueux».',
                'tr' => 'Süleyman, onun sözüne hafifçe güldü ve: "Rabbim! Bana ve ana babama verdiğin nimete şükürde, hoşnut olacağın işi yapmakta beni muvaffak kıl. Rahmetinle, beni iyi kullarının arasına koy" dedi.',
                'ur' => 'اس کی اس بات سے حضرت سلیمان مسکرا کر ہنس دیئے اور دعا کرنے لگے کہ اے پروردگار! تو مجھے توفیق دے کہ میں تیری ان نعمتوں کا شکر بجا لاؤں جو تو نے مجھ پر انعام کی ہیں اور میرے ماں باپ پر اور میں ایسے نیک اعمال کرتا رہوں جن سے تو خوش رہے مجھے اپنی رحمت سے نیک بندوں میں شامل کر لے',
                'de' => 'Da lächelte er erheitert über ihre Worte und sagte: "Mein Herr, veranlasse mich, für Deine Gunst zu danken, die Du mir und meinen Eltern erwiesen hast, und rechtschaffen zu handeln, womit Du zufrieden bist. Und lasse mich durch Deine Barmherzigkeit eingehen in die Reihen Deiner rechtschaffenen Diener."',
                'es' => '[Salomón] al oír lo que ella decía, sonrió y exclamó: "¡Señor mío! Haz que te agradezca los favores que nos has concedido, tanto a mí como a mis padres, que haga obras de bien que Te complazcan, y cuéntame, por Tu misericordia, entre Tus siervos justos".',
            ],
            'reference' => [
                'surah' => 'An-Naml',
                'ayah' => '27:19',
            ],
        ],
        [
            'arabic' => 'وَلَقَدْ ءَاتَيْنَا لُقْمَٰنَ ٱلْحِكْمَةَ أَنِ ٱشْكُرْ لِلَّهِ ۚ وَمَن يَشْكُرْ فَإِنَّمَا يَشْكُرُ لِنَفْسِهِۦ ۖ وَمَن كَفَرَ فَإِنَّ ٱللَّهَ غَنِىٌّ حَمِيدٌۭ',
            'translations' => [
                'en' => 'And We had certainly given Luqman wisdom [and said], "Be grateful to Allah." And whoever is grateful is grateful for [the benefit of] himself. And whoever denies [His favor] - then indeed, Allah is Free of need and Praiseworthy.',
                'nl' => 'En voorzeker, Wij hebben Loeqmân de wijsheid geschonken: wees Allah dankbaar. En wie dankbaar is, is slechts dankbaar voor zichzelf; en wie ondankbaar is: voorwaar, Allah is Behoefteloos, Geprezen.',
                'fr' => 'Nous avons effectivement donné à Luqmân la sagesse: «Sois reconnaissant à Allah, car quiconque est reconnaissant, n\'est reconnaissant que pour soi-même; quant à celui qui est ingrat... En vérité, Allah se dispense de tout, et Il est digne de louange».',
                'tr' => 'And olsun ki, Lokman\'a, Allah\'a şükretmesi için hikmet verdik. Şükreden kimse ancak kendisi için şükretmiş olur. Nankörlük eden ise, bilsin ki, Allah her şeyden müstağnidir, övülmeğe layık olandır.',
                'ur' => 'اور ہم نے یقیناً لقمان کو حکمت دی تھی کہ تو اللہ تعالیٰ کا شکر کر ہر شکر کرنے والا اپنے ہی نفع کے لئے شکر کرتا ہے جو بھی ناشکری کرے وه جان لے کہ اللہ تعالیٰ بے نیاز اور تعریفوں والا ہے',
                'de' => 'Und Wir gaben ja Luqman Weisheit: "Sei Allah dankbar." Und wer dankbar ist, der ist nur zu seinem eigenen Vorteil dankbar. Und wer undankbar ist, - so ist Allah Unbedürftig und Lobenswürdig.',
                'es' => 'Agracié a Luqmán con la sabiduría [y le dije]: "Sé agradecido con Dios, pues quien agradece lo hace en beneficio propio, mientras que el ingrato debe saber que Dios no precisa del agradecimiento [de las personas] y es digno de toda alabanza".',
            ],
            'reference' => [
                'surah' => 'Luqman',
                'ayah' => '31:12',
            ],
        ],
        [
            'arabic' => 'وَوَصَّيْنَا ٱلْإِنسَٰنَ بِوَٰلِدَيْهِ حَمَلَتْهُ أُمُّهُۥ وَهْنًا عَلَىٰ وَهْنٍۢ وَفِصَٰلُهُۥ فِى عَامَيْنِ أَنِ ٱشْكُرْ لِى وَلِوَٰلِدَيْكَ إِلَىَّ ٱلْمَصِيرُ',
            'translations' => [
                'en' => 'And We have enjoined upon man [care] for his parents. His mother carried him, [increasing her] in weakness upon weakness, and his weaning is in two years. Be grateful to Me and to your parents; to Me is the [final] destination.',
                'nl' => 'En Wij bevolen de mens (goedheid) jegens zijn ouders. Zijn moeder droeg heen in zwakheid op zwakheid, en het zogen van hem duurde twee jaren. Wees daarom Mij en jouw ouders dankbaar. Tot Mij is de terugkeer.',
                'fr' => 'Nous avons commandé à l\'homme [la bienfaisance envers] ses père et mère; sa mère l\'a porté [subissant pour lui] peine sur peine: son sevrage a lieu à deux ans. «Sois reconnaissant envers Moi ainsi qu\'envers tes parents. Vers Moi est la destination.',
                'tr' => 'Biz insana, ana ve babasına karşı iyi davranmasını tavsiye etmişizdir. Annesi onu, güçsüzlükten güçsüzlüğe uğrayarak karnında taşımıştı. Çocuğun sütten kesilmesi iki yıl içinde olur. Bana ve ana babana şükret diye tavsiyede bulunmuşuzdur. Dönüş Bana\'dır.',
                'ur' => 'ہم نے انسان کو اس کے ماں باپ کے متعلق نصیحت کی ہے، اس کی ماں نے دکھ پر دکھ اٹھا کر اسے حمل میں رکھا اور اس کی دودھ چھڑائی دو برس میں ہے کہ تو میری اور اپنے ماں باپ کی شکر گزاری کر، (تم سب کو) میری ہی طرف لوٹ کر آنا ہے',
                'de' => 'Und Wir haben dem Menschen seine Eltern anbefohlen - seine Mutter hat ihn unter wiederholter Schwäche getragen, und seine Entwöhnung (erfolgt) innerhalb von zwei Jahren -: "Sei Mir und deinen Eltern dankbar. Zu Mir ist der Ausgang."',
                'es' => 'Le he ordenado al ser humano hacer el bien a sus padres. Su madre lo lleva [en el vientre] soportando molestia tras molestia, y su destete es a los dos años. Sean agradecidos conmigo y con sus padres, pero sepan que ante Mí comparecerán al final.',
            ],
            'reference' => [
                'surah' => 'Luqman',
                'ayah' => '31:14',
            ],
        ],
        [
            'arabic' => 'يَعْمَلُونَ لَهُۥ مَا يَشَآءُ مِن مَّحَٰرِيبَ وَتَمَٰثِيلَ وَجِفَانٍۢ كَٱلْجَوَابِ وَقُدُورٍۢ رَّاسِيَٰتٍ ۚ ٱعْمَلُوٓا۟ ءَالَ دَاوُۥدَ شُكْرًۭا ۚ وَقَلِيلٌۭ مِّنْ عِبَادِىَ ٱلشَّكُورُ',
            'translations' => [
                'en' => 'They made for him what he willed of elevated chambers, statues, bowls like reservoirs, and stationary kettles. [We said], "Work, O family of David, in gratitude." And few of My servants are grateful.',
                'nl' => 'Zij maakten voor hem wat hij wilde; hoge gehouwen, beelden en schalen zo groot als vijvers en onverplaatsbare ketels. Werkt, O familie van Dâwôed, uit dankbaarheid. Maar, weinigen van Mijn dienaren zijn dankbaren.',
                'fr' => 'Ils exécutaient pour lui ce qu\'il voulait: sanctuaires, statues, plateaux comme des bassins, et marmites bien ancrées. - «O famille de David, œuvrez par gratitude», alors qu\'il y a eu peu de Mes serviteurs qui sont reconnaissants.',
                'tr' => 'Süleyman için, o ne dilerse, mabedler, heykeller, büyük havuzlara benzer çanaklar ve taşınması güç kazanlar yaparlardı. "Ey Davud ailesi, şükredin! Kullarımdan şükredenler pek azdır."',
                'ur' => 'جو کچھ سلیمان چاہتے وه جنات تیار کردیتے مثلا قلعے اور مجسمے اور حوضوں کے برابر لگن اور چولہوں پر جمی ہوئی مضبوط دیگیں، اے آل داؤد اس کے شکریہ میں نیک عمل کرو، میرے بندوں میں سے شکرگزار بندے کم ہی ہوتے ہیں',
                'de' => 'Sie machten ihm, was er wollte, an Gebetsräumen, Bildwerken, Schüsseln wie Wasserbecken und feststehenden Kesseln. - "Verrichtet, ihr Sippe Dawuds, eure Arbeit in Dankbarkeit", denn (nur) wenige von Meinen Dienern sind wirklich dankbar.',
                'es' => 'Hacían para él todo lo que él deseara: templos elevados, estatuas, cántaros grandes como estanques y calderas enormes. [Les dije:] "Trabajen con agradecimiento [a Dios por los favores concedidos] ¡oh, familia de David!, pero sepan que pocos de Mis siervos son agradecidos".',
            ],
            'reference' => [
                'surah' => 'Saba',
                'ayah' => '34:13',
            ],
        ],
        [
            'arabic' => 'بَلِ ٱللَّهَ فَٱعْبُدْ وَكُن مِّنَ ٱلشَّٰكِرِينَ',
            'translations' => [
                'en' => 'Rather, worship [only] Allah and be among the grateful.',
                'nl' => 'Nee, aanbid daarom Allah en behoor tot de dankbaren.',
                'fr' => 'Tout au contraire, adore Allah seul et sois du nombre des reconnaissants».',
                'tr' => '"Hayır; yalnız Allah\'a kulluk et ve şukredenlerden ol."',
                'ur' => 'بلکہ تو اللہ ہی کی عبادت کر اور شکر کرنے والوں میں سے ہو جا',
                'de' => 'Nein! Vielmehr Allah (allein) sollst du dienen und zu den Dankbaren sollst du gehören."',
                'es' => 'Adora solo a Dios y sé de los agradecidos.',
            ],
            'reference' => [
                'surah' => 'Az-Zumar',
                'ayah' => '39:66',
            ],
        ],
        [
            'arabic' => 'إِنَّ ٱلَّذِينَ ءَامَنُوا۟ وَٱلَّذِينَ هَاجَرُوا۟ وَجَٰهَدُوا۟ فِى سَبِيلِ ٱللَّهِ أُو۟لَٰٓئِكَ يَرْجُونَ رَحْمَتَ ٱللَّهِ ۚ وَٱللَّهُ غَفُورٌۭ رَّحِيمٌۭ',
            'translations' => [
                'en' => 'Indeed, those who have believed and those who have emigrated and fought in the cause of Allah - those expect the mercy of Allah. And Allah is Forgiving and Merciful.',
                'nl' => 'Voorwaar, degenen die geloven en degenen die uitgeweken zijn en degenen die strijden op de Web van Allah, zij zijn degenen die hopen op de Barmhartigheid van Allah. En Allah is Vergevensgezind, Meest Barmhartig.',
                'fr' => 'Certes, ceux qui ont cru, émigré et lutté dans le sentier d\'Allah, ceux-là espèrent la miséricorde d\'Allah. Et Allah est Pardonneur et Miséricordieux.',
                'tr' => 'İnananlar, hicret edenler ve Allah yolunda cihad edenler Allah\'ın rahmetini umarlar. Allah bağışlar ve merhamet eder.',
                'ur' => 'البتہ ایمان لانے والے، ہجرت کرنے والے، اللہ کی راه میں جہاد کرنے والے ہی رحمت الٰہی کے امیدوار ہیں، اللہ تعالیٰ بہت بخشنے والا اور بہت مہربانی کرنے والا ہے',
                'de' => 'Diejenigen (aber), die glauben, und diejenigen, die auswandern und sich auf Allahs Weg abmühen, sie hoffen auf Allahs Erbarmen. Allah ist Allvergebend und Barmherzig.',
                'es' => 'Aquellos que creyeron, emigraron y se esforzaron por la causa de Dios son quienes pueden esperar con certeza la misericordia de Dios, y Dios es Absolvedor, Misericordioso.',
            ],
            'reference' => [
                'surah' => 'Al-Baqara',
                'ayah' => '2:218',
            ],
        ],
        [
            'arabic' => 'فَبِمَا رَحْمَةٍۢ مِّنَ ٱللَّهِ لِنتَ لَهُمْ ۖ وَلَوْ كُنتَ فَظًّا غَلِيظَ ٱلْقَلْبِ لَٱنفَضُّوا۟ مِنْ حَوْلِكَ ۖ فَٱعْفُ عَنْهُمْ وَٱسْتَغْفِرْ لَهُمْ وَشَاوِرْهُمْ فِى ٱلْأَمْرِ ۖ فَإِذَا عَزَمْتَ فَتَوَكَّلْ عَلَى ٱللَّهِ ۚ إِنَّ ٱللَّهَ يُحِبُّ ٱلْمُتَوَكِّلِينَ',
            'translations' => [
                'en' => 'So by mercy from Allah, [O Muhammad], you were lenient with them. And if you had been rude [in speech] and harsh in heart, they would have disbanded from about you. So pardon them and ask forgiveness for them and consult them in the matter. And when you have decided, then rely upon Allah. Indeed, Allah loves those who rely [upon Him].',
                'nl' => 'En het was dankzij de Barmhartigheid van Allah dat jij zacht met hen was en als je streng en hardvochtig was geweest, dan waren zij rondom jou uiteengegaan. Vergeef hen dus (hun fouten) en vraag vergeving voor hen on raadpleeg hen bij de zaak. En wanneer je dan besloten hebt vertrouw dan op Allah. Voorwaar, Allah houdt van degenen die (op Allah) vertrouwen.',
                'fr' => 'C\'est par quelque miséricorde de la part d\'Allah que tu (Muhammad) as été si doux envers eux! Mais si tu étais rude, au cœur dur, ils se seraient enfuis de ton entourage. Pardonne-leur donc, et implore pour eux le pardon (d\'Allah). Et consulte-les à propos des affaires; puis une fois que tu t\'es décidé, confie-toi donc à Allah, Allah aime, en vérité, ceux qui Lui font confiance.',
                'tr' => 'Allah\'ın rahmetinden dolayı, sen onlara karşı yumuşak davrandın. Eğer kaba ve katı kalbli olsaydın, şüphesiz etrafından dağılır giderlerdi. Onları affet, onlara mağfiret dile, iş hakkında onlara danış, fakat karar verdin mi Allah\'a güven, doğrusu Allah güvenenleri sever.',
                'ur' => 'اللہ تعالیٰ کی رحمت کے باعث آپ ان پر نرم دل ہیں اور اگر آپ بد زبان اور سخت دل ہوتے تو یہ سب آپ کے پاس سے چھٹ جاتے، سو آپ ان سے درگزر کریں اور ان کے لئے استغفار کریں اور کام کا مشوره ان سے کیا کریں، پھر جب آپ کا پختہ اراده ہو جائے تو اللہ تعالیٰ پر بھروسہ کریں، بے شک اللہ تعالیٰ توکل کرنے والوں سے محبت کرتا ہے',
                'de' => 'Durch Erbarmen von Allah bist du mild zu ihnen gewesen; wärst du aber schroff und hartherzig, so würden sie wahrlich rings um dich auseinandergelaufen. So verzeihe ihnen, bitte für sie um Vergebung und ziehe sie in den Angelegenheiten zu Rate. Und wenn du dich entschlossen hast, dann verlasse dich auf Allah! Gewiß, Allah liebt die sich (auf Ihn) Verlassenden.',
                'es' => '[Oh, Mujámmad] Por misericordia de Dios eres compasivo con ellos. Si hubieras sido rudo y de corazón duro se habrían alejado de ti; perdónalos, pide perdón por ellos, y consulta con ellos los asuntos [de interés público]. Pero cuando hayas tomado una decisión encomiéndate a Dios, porque Dios ama a los que se encomiendan a Él.',
            ],
            'reference' => [
                'surah' => 'Aal-i-Imraan',
                'ayah' => '3:159',
            ],
        ],
        [
            'arabic' => 'قَالَ يَٰقَوْمِ أَرَءَيْتُمْ إِن كُنتُ عَلَىٰ بَيِّنَةٍۢ مِّن رَّبِّى وَرَزَقَنِى مِنْهُ رِزْقًا حَسَنًۭا ۚ وَمَآ أُرِيدُ أَنْ أُخَالِفَكُمْ إِلَىٰ مَآ أَنْهَىٰكُمْ عَنْهُ ۚ إِنْ أُرِيدُ إِلَّا ٱلْإِصْلَٰحَ مَا ٱسْتَطَعْتُ ۚ وَمَا تَوْفِيقِىٓ إِلَّا بِٱللَّهِ ۚ عَلَيْهِ تَوَكَّلْتُ وَإِلَيْهِ أُنِيبُ',
            'translations' => [
                'en' => 'He said, "O my people, have you considered: if I am upon clear evidence from my Lord and He has provided me with a good provision from Him...? And I do not intend to differ from you in that which I have forbidden you; I only intend reform as much as I am able. And my success is not but through Allah. Upon him I have relied, and to Him I return.',
                'nl' => 'Hij zei: "O mijn volk, wat denken jullie, als ik op een duidelijk bewijs van mijn Heer steun, en Hij voorziet mij van Zijn Zijde met een goede voorziening, (zou ik Hem ongehoorzaam zijn)? En ik wil mij niet tegenover jullie schuldig maken aan wat ik jullie verbied. Ik wens slechts verbetering volgens mijn vermogen, en er is voor mij geen goddelijke overeenstemming dan bij Allah. Op Hem heb ik mijn vertrouwen gesteld en tot Hem keer ik terug."',
                'fr' => 'Il dit: «O mon peuple, voyez-vous si je me base sur une preuve évidente émanant de mon Seigneur, et s\'Il m\'attribue de Sa part une excellente donation?... Je ne veux nullement faire ce que je vous interdis. Je ne veux que la réforme, autant que je le puis. Et ma réussite ne dépend que d\'Allah. En Lui je place ma confiance, et c\'est vers Lui que je reviens repentant.',
                'tr' => '"Ey Milletim! Rabbimden benim bir belgem olduğu ve bana güzel bir rızık da verdiği halde, O\'na karşı gelebilir miyim? Söylesenize! Size yasak ettiğim şeylerde, aykırı hareket etmek istemem; gücümün yettiği kadar ıslah etmekten başka bir dileğim yoktur. Başarım ancak Allah\'tandır, O\'na güvendim; O\'na yöneliyorum" dedi.',
                'ur' => 'کہا اے میری قوم! دیکھو تو اگر میں اپنے رب کی طرف سے روشن دلیل لئے ہوئے ہوں اور اس نے مجھے اپنے پاس سے بہترین روزی دے رکھی ہے، میرا یہ اراده بالکل نہیں کہ تمہارا خلاف کر کے خود اس چیز کی طرف جھک جاؤں جس سے تمہیں روک رہا ہوں، میرا اراده تو اپنی طاقت بھر اصلاح کرنے کا ہی ہے۔ میری توفیق اللہ ہی کی مدد سے ہے، اسی پر میرا بھروسہ ہے اور اسی کی طرف میں رجوع کرتا ہوں',
                'de' => 'Er sagte: "O mein Volk, was meint ihr, wenn ich mich auf einen klaren Beweis von meinem Herrn stütze und Er mir eine schöne Versorgung gewährt hat? Und ich will mich (dann in meinem Vorhaben) von euch nicht unterscheiden, indem ich das tue, was ich euch verbiete. Ich will nur Besserung, soweit ich (sie erreichen) kann. Das Gelingen wird mir nur durch Allah (allein) beschieden. Auf Ihn verlasse ich mich, und Ihm wende ich mich reuig zu.',
                'es' => 'Dijo: "¡Oh, pueblo mío! Me baso en una prueba evidente de mi Señor, Él me ha proveído un sustento generoso. No iba a prohibir lo que considero lícito para mí mismo. Solo pretendo su bienestar en la medida que pueda, pero mi éxito depende de Dios; a Él me encomiendo y ante Él me arrepiento.',
            ],
            'reference' => [
                'surah' => 'Hud',
                'ayah' => '11:88',
            ],
        ],
        [
            'arabic' => 'إِلَّآ أَن يَشَآءَ ٱللَّهُ ۚ وَٱذْكُر رَّبَّكَ إِذَا نَسِيتَ وَقُلْ عَسَىٰٓ أَن يَهْدِيَنِ رَبِّى لِأَقْرَبَ مِنْ هَٰذَا رَشَدًۭا',
            'translations' => [
                'en' => 'Except [when adding], "If Allah wills." And remember your Lord when you forget [it] and say, "Perhaps my Lord will guide me to what is nearer than this to right conduct."',
                'nl' => '(Zeg) slechts: "Indien Allah het wenst" en herinner je jouw Heer indien jij, vergeet, en zeg: "Hopelijk zal mijn Heer mij leiden naar wat dichterbij is van deze Leiding."',
                'fr' => 'sans ajouter: «Si Allah le veut», et invoque ton Seigneur quand tu oublies et dis: «Je souhaite que mon Seigneur me guide et me mène plus près de ce qui est correct».',
                'tr' => 'Herhangi bir şey için, Allah\'ın dilemesi dışında: "Ben yarın onu yapacağım" deme. Unuttuğun zaman Rabbini an ve şöyle de: "Umulur ki, Rabbim beni doğruya daha yakın olana eriştirir."',
                'ur' => 'مگر ساتھ ہی انشاءاللہ کہہ لینا۔ اور جب بھی بھولے، اپنے پروردگار کی یاد کر لیا کرنا اور کہتے رہنا کہ مجھے پوری امید ہے کہ میرا رب مجھے اس سے بھی زیاده ہدایت کے قریب کی بات کی رہبری کرے',
                'de' => 'außer (du fügst hinzu): "Wenn Allah will." Und gedenke deines Herrn, wenn du (etwas) vergessen hast, und sag: "Vielleicht leitet mich mein Herr zu etwas, was dem rechten Ausweg näher kommt als dies."',
                'es' => 'Salvo que agregues: "¡Si Dios quiere!" Pero si te olvidas de mencionar a tu Señor, invoca su nombre y reza diciendo: "Ruego a mi Señor que me guíe a la vía más recta".',
            ],
            'reference' => [
                'surah' => 'Al-Kahf',
                'ayah' => '18:24',
            ],
        ],
        [
            'arabic' => 'إِذْ هَمَّت طَّآئِفَتَانِ مِنكُمْ أَن تَفْشَلَا وَٱللَّهُ وَلِيُّهُمَا ۗ وَعَلَى ٱللَّهِ فَلْيَتَوَكَّلِ ٱلْمُؤْمِنُونَ',
            'translations' => [
                'en' => 'When two parties among you were about to lose courage, but Allah was their ally; and upon Allah the believers should rely.',
                'nl' => '(Gedenk) toen twee groepen van jullie naar lafheid neigden, terwijl Allah hun beschermer was. En laat de gelovigen op Allah, vertrouwen.',
                'fr' => 'Quand deux de vos groupes songèrent à fléchir! Alors qu\'Allah est leur allié à tous deux! Car, c\'est en Allah que les croyants doivent placer leur confiance.',
                'tr' => 'Sizden iki takım bozulup geri çekilmek üzere idi; oysa Allah onların dostu idi, inananlar yalnız Allah\'a güvensinler.',
                'ur' => 'جب تمہاری دو جماعتیں پست ہمتی کا اراده کر چکی تھیں، اللہ تعالیٰ انکا ولی اور مددگار ہے۔ اور اسی کی پاک ذات پر مومنوں کو بھروسہ رکھنا چاہئے',
                'de' => 'Als zwei Teil(gruppen) von euch vorhatten, aufzugeben, wo doch Allah ihr Schutzherr ist. Und auf Allah sollen sich die Gläubigen verlassen.',
                'es' => 'Cuando dos de tus tropas estuvieron a punto de perder el coraje, pero Dios era su Protector y es a Dios que los creyentes deben encomendarse.',
            ],
            'reference' => [
                'surah' => 'Aal-i-Imraan',
                'ayah' => '3:122',
            ],
        ],
        [
            'arabic' => 'قُل لَّن يُصِيبَنَآ إِلَّا مَا كَتَبَ ٱللَّهُ لَنَا هُوَ مَوْلَىٰنَا ۚ وَعَلَى ٱللَّهِ فَلْيَتَوَكَّلِ ٱلْمُؤْمِنُونَ',
            'translations' => [
                'en' => 'Say, "Never will we be struck except by what Allah has decreed for us; He is our protector." And upon Allah let the believers rely.',
                'nl' => 'Zeg: "Niets zal ons treffen, behalve wat Allah voor ons heeft beschikt. Hij is onze Beschermer."\' En laten de gelovigen daarom op Allah hun vertrouwen stellen.',
                'fr' => 'Dis: «Rien ne nous atteindra, en dehors de ce qu\'Allah a prescrit pour nous. Il est notre Protecteur. C\'est en Allah que les croyants doivent mettre leur confiance».',
                'tr' => 'De ki: "Allah\'ın bize yazdığından başkası başımıza gelmez. O bizim Mevlamızdır, inananlar Allah\'a güvensin."',
                'ur' => 'آپ کہہ دیجئے کہ ہمیں سوائے اللہ کے ہمارے حق میں لکھے ہوئے کہ کوئی چیز پہنچ ہی نہیں سکتی وه ہمارا کار ساز اور مولیٰ ہے۔ مومنوں کو تو اللہ کی ذات پاک پر ہی بھروسہ کرنا چاہئے۔',
                'de' => 'Sag: Uns wird nur das treffen, was Allah für uns bestimmt hat. Er ist unser Schutzherr. Auf Allah sollen sich die Gläubigen verlassen.',
                'es' => 'Diles [¡oh, Mujámmad!]: "Solo nos sucede lo que Dios decretó para nosotros. Él es nuestro Protector, y a Dios se encomiendan los creyentes".',
            ],
            'reference' => [
                'surah' => 'At-Tawba',
                'ayah' => '9:51',
            ],
        ],
        [
            'arabic' => 'وَمَا لَنَآ أَلَّا نَتَوَكَّلَ عَلَى ٱللَّهِ وَقَدْ هَدَىٰنَا سُبُلَنَا ۚ وَلَنَصْبِرَنَّ عَلَىٰ مَآ ءَاذَيْتُمُونَا ۚ وَعَلَى ٱللَّهِ فَلْيَتَوَكَّلِ ٱلْمُتَوَكِّلُونَ',
            'translations' => [
                'en' => 'And why should we not rely upon Allah while He has guided us to our [good] ways. And we will surely be patient against whatever harm you should cause us. And upon Allah let those who would rely [indeed] rely."',
                'nl' => 'Waarom zouden wij niet op Allah ons vertrouwen stellen. terwijl Hij ons waarlijk heeft geleid op onze weg? En wij zullen zeker geduld hebben met de kwellingen die jullie ons aandoen. En laten daarom zij die vertrouwen hebben (hun) vertrouwen op Allah stellen."',
                'fr' => 'Et qu\'aurions-nous à ne pas placer notre confiance en Allah, alors qu\'Il nous a guidés sur les sentiers [que nous devions suivre]? Nous endurerons sûrement la persécution que vous nous infligez. Et ceux qui ont confiance en Allah s\'en remettent entièrement à Lui.»',
                'tr' => '"Bize yollarımızı gösteren Allah\'a niçin güvenmeyelim? Bize ettiğiniz eziyete elbette katlanacağız. Güvenenler ancak Allah\'a güvensinler."',
                'ur' => 'آخر کیا وجہ ہے کہ ہم اللہ تعالیٰ پر بھروسہ نہ رکھیں جبکہ اسی نے ہمیں ہماری راہیں سمجھائی ہیں۔ واللہ جو ایذائیں تم ہمیں دو گے ہم ان پر صبر ہی کریں گے۔ توکل کرنے والوں کو یہی لائق ہے کہ اللہ ہی پر توکل کریں',
                'de' => 'Warum sollten wir uns nicht auf Allah verlassen, wo Er uns doch unsere Wege geleitet hat? Wir werden das, was ihr uns an Leid zufügt, ganz gewiß geduldig ertragen, und auf Allah sollen sich diejenigen verlassen, die sich (überhaupt auf jemanden) verlassen (wollen)."',
                'es' => 'Nosotros nos encomendamos a Dios, pues Él nos ha guiado por Su camino, y seremos pacientes ante sus hostilidades. A Dios se encomiendan quienes en Él confían".',
            ],
            'reference' => [
                'surah' => 'Ibrahim',
                'ayah' => '14:12',
            ],
        ],
        [
            'arabic' => 'وَتَوَكَّلْ عَلَى ٱلْحَىِّ ٱلَّذِى لَا يَمُوتُ وَسَبِّحْ بِحَمْدِهِۦ ۚ وَكَفَىٰ بِهِۦ بِذُنُوبِ عِبَادِهِۦ خَبِيرًا',
            'translations' => [
                'en' => 'And rely upon the Ever-Living who does not die, and exalt [Allah] with His praise. And sufficient is He to be, with the sins of His servants, Acquainted -',
                'nl' => 'En vertrouw op de Levende, Die niet sterft en prijs Zijn lof. En Hij is voldoende als Alwetende over de zonden van Zijn dieneren.',
                'fr' => 'Et place ta confiance en Le Vivant qui ne meurt jamais. Et par Sa louange, glorifie-Le. Il suffit comme Parfait Connaisseur des péchés de Ses serviteurs.',
                'tr' => 'Ölümsüz, diri olan Allah\'a güven, O\'nu överek tesbih et. Kullarının günahlarından haberdar olarak kendisi yeter.',
                'ur' => 'اس ہمیشہ زنده رہنے والے اللہ تعالیٰ پر توکل کریں جسے کبھی موت نہیں اور اس کی تعریف کے ساتھ پاکیزگی بیان کرتے رہیں، وه اپنے بندوں کے گناہوں سے کافی خبردار ہے',
                'de' => 'Und verlasse dich auf den Lebendigen, Der nicht stirbt, und lobpreise Ihn. Er genügt als Kenner der Sünden Seiner Diener,',
                'es' => 'Encomiéndate al Viviente Inmortal, y glorifícalo con Sus alabanzas. Él basta como conocedor de los pecados de Sus siervos.',
            ],
            'reference' => [
                'surah' => 'Al-Furqaan',
                'ayah' => '25:58',
            ],
        ],
        [
            'arabic' => 'وَقَالَ يَٰبَنِىَّ لَا تَدْخُلُوا۟ مِنۢ بَابٍۢ وَٰحِدٍۢ وَٱدْخُلُوا۟ مِنْ أَبْوَٰبٍۢ مُّتَفَرِّقَةٍۢ ۖ وَمَآ أُغْنِى عَنكُم مِّنَ ٱللَّهِ مِن شَىْءٍ ۖ إِنِ ٱلْحُكْمُ إِلَّا لِلَّهِ ۖ عَلَيْهِ تَوَكَّلْتُ ۖ وَعَلَيْهِ فَلْيَتَوَكَّلِ ٱلْمُتَوَكِّلُونَ',
            'translations' => [
                'en' => 'And he said, "O my sons, do not enter from one gate but enter from different gates; and I cannot avail you against [the decree of] Allah at all. The decision is only for Allah; upon Him I have relied, and upon Him let those who would rely [indeed] rely."',
                'nl' => 'Hij zei: "O mijn zonen, ga niet door één poort naar binnen, mar ga door verschillende poorten naar binnen. Ik ken niets voor jullie doen tegen (de wil van) Allah, het oordeel is slechts aan Allah. Op Hem heb ik mijn vertrouwen gesteld. En laten zij die vertrouwen hebben op Hem hun vertrouwen stellen."',
                'fr' => 'Et il dit: «O mes fils, n\'entrez pas par une seule porte, mais entrez par portes séparées. Je ne peux cependant vous être d\'aucune utilité contre les desseins d\'Allah. La décision n\'appartient qu\'à Allah: en Lui je place ma confiance. Et que ceux qui placent leur confiance la placent en Lui».',
                'tr' => 'Babaları: "Oğullarım! Tek bir kapıdan değil, ayrı ayrı kapılardan girin. Ama Allah katında size bir faydam olmaz, hüküm ancak Allah\'ındır, O\'na güvendim, güvenenler de O\'na güvensinler" dedi.',
                'ur' => 'اور (یعقوب علیہ السلام) نے کہا اے میرے بچو! تم سب ایک دروازے سے نہ جانا بلکہ کئی جدا جدا دروازوں میں سے داخل ہونا۔ میں اللہ کی طرف سے آنے والی کسی چیز کو تم سے ٹال نہیں سکتا۔ حکم صرف اللہ ہی کا چلتا ہے۔ میرا کامل بھروسہ اسی پر ہے اور ہر ایک بھروسہ کرنے والے کو اسی پر بھروسہ کرنا چاہئے',
                'de' => 'Und er sagte: "O meine Kinder, geht nicht (alle) durch ein einziges Tor hinein, sondern geht durch verschiedene Tore hinein. Ich kann euch gegen Allah nichts nützen. Das Urteil ist allein Allahs. Auf Ihn verlasse ich mich; und auf Ihn sollen sich diejenigen verlassen, die sich (überhaupt auf jemanden) verlassen (wollen)."',
                'es' => 'Dijo [Jacob]: "¡Hijos míos! No entren todos [a la ciudad] por la misma puerta, mejor ingresen por puertas diferentes, pero sepan que no puedo hacer nada contra el designio de Dios, pues Él es Quien decreta todos los asuntos. En Él he depositado mi confianza, y a Él deben encomendarse quienes en Él confían".',
            ],
            'reference' => [
                'surah' => 'Yusuf',
                'ayah' => '12:67',
            ],
        ],
        [
            'arabic' => 'ٱلَّذِينَ قَالَ لَهُمُ ٱلنَّاسُ إِنَّ ٱلنَّاسَ قَدْ جَمَعُوا۟ لَكُمْ فَٱخْشَوْهُمْ فَزَادَهُمْ إِيمَٰنًۭا وَقَالُوا۟ حَسْبُنَا ٱللَّهُ وَنِعْمَ ٱلْوَكِيلُ',
            'translations' => [
                'en' => 'Those to whom hypocrites said, "Indeed, the people have gathered against you, so fear them." But it [merely] increased them in faith, and they said, "Sufficient for us is Allah, and [He is] the best Disposer of affairs."',
                'nl' => 'Degenen tegen wie de mensen zeggen: "Voorwaar, de mensen hebben zich tegen jullie verzameld hen dus." Hun geloof werd erdoor versterkt en zij zeiden: "Allah is ons genoeg en Hij is de beste Beschermer."',
                'fr' => 'Certes ceux auxquels l\'on disait: «Les gens se sont rassemblés contre vous; craignez-les» - cela accrut leur foi - et ils dirent: «Allah nous suffit; Il est notre meilleur garant».',
                'tr' => 'İnsanlar onlara: "Düşmanınız olan insanlar size karşı bir ordu topladılar, onlardan korkun" dediler. Bu, onların imanını artırdı da: "Allah bize yeter. O ne güzel Vekil\'dir" dediler.',
                'ur' => 'وه لوگ کہ جب ان سے لوگوں نے کہا کہ کافروں نے تمہارے مقابلے پر لشکر جمع کر لئے ہیں، تم ان سے خوف کھاؤ تو اس بات نے انہیں ایمان میں اور بڑھا دیا اور کہنے لگے ہمیں اللہ کافی ہے اور وه بہت اچھا کارساز ہے',
                'de' => 'Diejenigen, zu denen die Menschen sagten: "Die Menschen haben (sich) bereits gegen euch versammelt; darum fürchtet sie!" - Doch da mehrte das (nur) ihren Glauben, und sie sagten: "Unsere Genüge ist Allah, und wie trefflich ist der Sachwalter!"',
                'es' => 'A ellos les fue dicho: "Los enemigos se han agrupado contra ustedes, no podrán con ellos". Pero esto solo les aumentó la fe y dijeron: "Dios es suficiente para nosotros, porque Él es el mejor protector"',
            ],
            'reference' => [
                'surah' => 'Aal-i-Imraan',
                'ayah' => '3:173',
            ],
        ],
        [
            'arabic' => 'وَمَآ أَرْسَلْنَٰكَ إِلَّا رَحْمَةًۭ لِّلْعَٰلَمِينَ',
            'translations' => [
                'en' => 'And We have not sent you, [O Muhammad], except as a mercy to the worlds.',
                'nl' => 'En Wij hebben jou (O Moehammad) slechts gezonden als een barmhartigheid voor de werelden.',
                'fr' => 'Et Nous ne t\'avons envoyé qu\'en miséricorde pour l\'univers.',
                'tr' => 'Biz seni ancak alemlere rahmet olarak gönderdik.',
                'ur' => 'اور ہم نے آپ کو تمام جہان والوں کے لئے رحمت بنا کر ہی بھیجا ہے',
                'de' => 'Und Wir haben dich nur als Barmherzigkeit für die Weltenbewohner gesandt.',
                'es' => 'No te he enviado [¡oh, Mujámmad!] sino como misericordia para todos los seres.',
            ],
            'reference' => [
                'surah' => 'Al-Anbiyaa',
                'ayah' => '21:107',
            ],
        ],
        [
            'arabic' => 'فَتَلَقَّىٰٓ ءَادَمُ مِن رَّبِّهِۦ كَلِمَٰتٍۢ فَتَابَ عَلَيْهِ ۚ إِنَّهُۥ هُوَ ٱلتَّوَّابُ ٱلرَّحِيمُ',
            'translations' => [
                'en' => 'Then Adam received from his Lord [some] words, and He accepted his repentance. Indeed, it is He who is the Accepting of repentance, the Merciful.',
                'nl' => 'Toen ontving Adam van zijn Heer Woorden. Daarop aanvaardde Hij zijn berouw. Voorwaar, Hij is de Meest Berouwaanvaardende, de Meest Barmhartige.',
                'fr' => 'Puis Adam reçut de son Seigneur des paroles, et Allah agréa son repentir car c\'est Lui certes, le Repentant, le Miséricordieux.',
                'tr' => 'Adem, Rabbi\'nden emirler aldı; onları yerine getirdi. Rabb\'i de bunun üzerine tevbesini kabul etti. Şüphesiz o tevbeleri daima kabul edendir, merhametli olandır.',
                'ur' => '(حضرت) آدم (علیہ السلام) نے اپنے رب سے چند باتیں سیکھ لیں اور اللہ تعالیٰ نے ان کی توبہ قبول فرمائی، بےشک وہی توبہ قبول کرنے والا اور رحم کرنے والا ہے',
                'de' => 'Da empfing Adam von seinem Herrn Worte, und darauf nahm Er seine Reue an. Er ist ja der Reue-Annehmende und Barmherzige.',
                'es' => 'Pero le fueron inspiradas a Adán unas palabras de su Señor [para que pudiera expresar su arrepentimiento] y Dios aceptó su arrepentimiento, porque Él es el Indulgente, el Misericordioso.',
            ],
            'reference' => [
                'surah' => 'Al-Baqara',
                'ayah' => '2:37',
            ],
        ],
        [
            'arabic' => 'ثُمَّ تَوَلَّيْتُم مِّنۢ بَعْدِ ذَٰلِكَ ۖ فَلَوْلَا فَضْلُ ٱللَّهِ عَلَيْكُمْ وَرَحْمَتُهُۥ لَكُنتُم مِّنَ ٱلْخَٰسِرِينَ',
            'translations' => [
                'en' => 'Then you turned away after that. And if not for the favor of Allah upon you and His mercy, you would have been among the losers.',
                'nl' => 'Vervolgens wendden jullie je af, en als er niet de gunst van Allah over jullie en Zijn Barmhartigheid was geweest, dan zouden jullie zeker tot de verliezers behoren.',
                'fr' => 'Puis vous vous en détournâtes après vos engagements, n\'eût été donc la grâce d\'Allah et Sa miséricorde, vous seriez certes parmi les perdants.',
                'tr' => 'Bundan sonra yine yüz çevirdiniz; eğer Allah\'ın size bol nimeti ve merhameti olmasaydı, muhakkak zarara uğrayanlardan olurdunuz.',
                'ur' => 'لیکن تم اس کے بعد بھی پھر گئے، پھر اگر اللہ تعالیٰ کا فضل اور اس کی رحمت تم پر نہ ہوتی تو تم نقصان والے ہوجاتے',
                'de' => 'Dann kehrtet ihr euch nach alledem ab. Aber wenn nicht Allahs Huld gegen euch und Sein Erbarmen gewesen wären, gehörtet ihr wahrlich zu den Verlierern.',
                'es' => 'Pero luego volvieron sobre sus pasos, y si no fuera por la gracia y misericordia de Dios sobre ustedes, se contarían entre los perdedores.',
            ],
            'reference' => [
                'surah' => 'Al-Baqara',
                'ayah' => '2:64',
            ],
        ],
        [
            'arabic' => 'أُو۟لَٰٓئِكَ عَلَيْهِمْ صَلَوَٰتٌۭ مِّن رَّبِّهِمْ وَرَحْمَةٌۭ ۖ وَأُو۟لَٰٓئِكَ هُمُ ٱلْمُهْتَدُونَ',
            'translations' => [
                'en' => 'Those are the ones upon whom are blessings from their Lord and mercy. And it is those who are the [rightly] guided.',
                'nl' => 'Zij zijn degenen op wie de zegeningen van hun Heer neerdalen, en Barmhartigheid, en zij zijn degenen die de rechte Leiding ontvangen.',
                'fr' => 'Ceux-là reçoivent des bénédictions de leur Seigneur, ainsi que la miséricorde; et ceux-là sont les biens guidés.',
                'tr' => 'Rablerinin mağfiret ve rahmeti onlaradır. O\'nun yolunda olanlar da onlardır.',
                'ur' => 'ان پر ان کے رب کی نوازشیں اور رحمتیں ہیں اور یہی لوگ ہدایت یافتہ ہیں',
                'de' => 'Sie sind es, denen Segnungen von ihrem Herrn und Erbarmen zuteil werden, und sie sind die Rechtgeleiteten.',
                'es' => 'A ellos su Señor bendecirá con el perdón y la misericordia, y son los [correctamente] guiados.',
            ],
            'reference' => [
                'surah' => 'Al-Baqara',
                'ayah' => '2:157',
            ],
        ],
        [
            'arabic' => 'فَأَمَّا ٱلَّذِينَ ءَامَنُوا۟ بِٱللَّهِ وَٱعْتَصَمُوا۟ بِهِۦ فَسَيُدْخِلُهُمْ فِى رَحْمَةٍۢ مِّنْهُ وَفَضْلٍۢ وَيَهْدِيهِمْ إِلَيْهِ صِرَٰطًۭا مُّسْتَقِيمًۭا',
            'translations' => [
                'en' => 'So those who believe in Allah and hold fast to Him - He will admit them to mercy from Himself and bounty and guide them to Himself on a straight path.',
                'nl' => 'En wat betreft degenen die in Allah geloven: houdt jullie aan Hem vast. Dan zal Hij hen in (de) Barmbartigheid van Hem en Zijn gunst (het Paradijs) binnenleiden. En Hij leidt hen naar een recht pad.',
                'fr' => 'Alors ceux qui croient en Allah et qui s\'attachent à Lui, Il les fera entrer dans une miséricorde venue de Lui, et dans une grâce aussi. Et Il les guidera vers Lui dans un chemin droit.',
                'tr' => 'Allah kendisine inananları ve Kitabına sarılanları rahmetine ve bol nimetine kavuşturacak, onları Kendisine götüren doğru yola eriştirecektir.',
                'ur' => 'پس جو لوگ اللہ تعالیٰ پر ایمان لائے اور اسے مضبوط پکڑ لیا، انہیں تو وه عنقریب اپنی رحمت اور فضل میں لے لے گا اور انہیں اپنی طرف کی راه راست دکھا دے گا',
                'de' => 'Was nun diejenigen angeht, die an Allah glauben und an Ihm festhalten, so wird Er sie in Barmherzigkeit von Ihm und Huld eingehen lassen und sie zu Sich auf einem geraden Weg leiten.',
                'es' => 'A quienes creyeron y se aferraron a Dios, Él tendrá compasión de ellos, los agraciará y los guiará por el camino recto.',
            ],
            'reference' => [
                'surah' => 'An-Nisaa',
                'ayah' => '4:175',
            ],
        ],
        [
            'arabic' => 'قُل لِّمَن مَّا فِى ٱلسَّمَٰوَٰتِ وَٱلْأَرْضِ ۖ قُل لِّلَّهِ ۚ كَتَبَ عَلَىٰ نَفْسِهِ ٱلرَّحْمَةَ ۚ لَيَجْمَعَنَّكُمْ إِلَىٰ يَوْمِ ٱلْقِيَٰمَةِ لَا رَيْبَ فِيهِ ۚ ٱلَّذِينَ خَسِرُوٓا۟ أَنفُسَهُمْ فَهُمْ لَا يُؤْمِنُونَ',
            'translations' => [
                'en' => 'Say, "To whom belongs whatever is in the heavens and earth?" Say, "To Allah." He has decreed upon Himself mercy. He will surely assemble you for the Day of Resurrection, about which there is no doubt. Those who will lose themselves [that Day] do not believe.',
                'nl' => 'Zeg: "Aan wie behoort wat er in de hemelen en op de aarde is?" Zeg: "Aan Allah. Hij heeft Zichzelf de Barmhartigheid voorgeschreven, Hij zal jullie zeker bijeenbrengen op de Dag der Opstanding, waaraan geen twijfel is. Degenen die zichzelf verloren hebben: zij zijn het die niet geloven."',
                'fr' => 'Dis: «A qui appartient ce qui est dans les cieux et la terre?» Dis: «A Allah!» Il S\'est à Lui-même prescrit la miséricorde. Il vous rassemblera, certainement, au Jour de la Résurrection: il n\'y a pas de doute là-dessus. Ceux qui font leur propre perte sont ceux qui ne croient pas.',
                'tr' => 'De ki: "göklerde ve yerde olanlar kimindir?", "Allah\'ındır" de. O, rahmet etmeyi kendi üzerine almıştır; and olsun ki, sizi vukuu şüphe götürmeyen kıyamet gününde toplayacaktır. Kendilerine yazık ettiler; çünkü onlar inanmazlar.',
                'ur' => 'آپ کہئے کہ جو کچھ آسمانوں اور زمین میں موجود ہے یہ سب کس کی ملکیت ہے، آپ کہہ دیجئے کہ سب اللہ ہی کی ملکیت ہے، اللہ نے مہربانی فرمانا اپنے اوپر لازم فرما لیا ہے تم کو اللہ قیامت کے روز جمع کرے گا، اس میں کوئی شک نہیں، جن لوگوں نے اپنے آپ کو گھاٹے میں ڈالا ہے سو وه ایمان نہیں لائیں گے',
                'de' => 'Sag: Wem gehört, was in den Himmeln und auf der Erde ist? Sag: Allah. Er hat Sich Selbst Barmherzigkeit vorgeschrieben. Er wird euch ganz gewiß zum Tag der Auferstehung versammeln, an dem es keinen Zweifel gibt. (Schaut; wie das Ende) derjenigen (war), die ihre Seelen verloren haben, denn sie glaubten nicht.',
                'es' => 'Pregúntales [a los idólatras]: "¿A quién pertenece cuanto hay en los cielos y en la Tierra?" Diles: "A Dios". Él ha prescrito para Sí mismo la misericordia. Él los reunirá el Día indubitable de la Resurrección, en el que solo serán desventurados quienes se hayan negado a creer.',
            ],
             'reference' => [
                 'surah' => 'Al-An\'aam',
                 'ayah' => '6:12',
             ],
        ],
        [
            'arabic' => 'وَإِذَا جَآءَكَ ٱلَّذِينَ يُؤْمِنُونَ بِـَٔايَٰتِنَا فَقُلْ سَلَٰمٌ عَلَيْكُمْ ۖ كَتَبَ رَبُّكُمْ عَلَىٰ نَفْسِهِ ٱلرَّحْمَةَ ۖ أَنَّهُۥ مَنْ عَمِلَ مِنكُمْ سُوٓءًۢا بِجَهَٰلَةٍۢ ثُمَّ تَابَ مِنۢ بَعْدِهِۦ وَأَصْلَحَ فَأَنَّهُۥ غَفُورٌۭ رَّحِيمٌۭ',
            'translations' => [
                'en' => 'And when those come to you who believe in Our verses, say, "Peace be upon you. Your Lord has decreed upon Himself mercy: that any of you who does wrong out of ignorance and then repents after that and corrects himself - indeed, He is Forgiving and Merciful."',
                'nl' => 'En wanneer degenen die in Onze Tekenen geloven tot jou komen, zeg dan: Salâmoen \'alaikoem (Vrede zij met jullie)." Jullie Heer heeft Zichzelf de Barmhartigheid voorgeschreven. Indien een van jullie uit onwetendheid slecht doet en dan daarna berouw heeft en zich betert: voorwaar, dan is Hij Vergeveinsgezind, Meest Barmhartig.',
                'fr' => 'Et lorsque viennent vers toi ceux qui croient à nos versets (le Coran), dis: «Que la paix soit sur vous! Votre Seigneur S\'est prescrit à Lui-même la miséricorde. Et quiconque d\'entre vous a fait un mal par ignorance, et ensuite s\'est repenti et s\'est réformé... Il est, alors, Pardonneur et Miséricordieux».',
                'tr' => 'Ayetlerimize inananlar sana gelince: "Size selam olsun" de. Rabbiniz, sizden kim bilmeyerek fenalık işler de arkasından tövbe eder ve nefsini düzeltirse, ona rahmet etmeyi kendi üzerine almıştır. O, bağışlar ve merhamet eder.',
                'ur' => 'اور یہ لوگ جب آپ کے پاس آئیں جو ہماری آیتوں پر ایمان رکھتے ہیں تو (یوں) کہہ دیجیئے کہ تم پر سلامتی ہے تمہارے رب نے مہربانی فرمانا اپنے ذمہ مقرر کرلیا ہے کہ جو شخص تم میں سے برا کام کر بیٹھے جہالت سے پھر وه اس کے بعد توبہ کر لے اور اصلاح رکھے تو اللہ (کی یہ شان ہے کہ وه) بڑی مغفرت کرنے والا ہے بڑی رحمت والا ہے',
                'de' => 'Und wenn diejenigen, die an Unsere Zeichen glauben, zu dir kommen, dann sag: Friede sei auf euch! Euer Herr hat Sich Selbst Barmherzigkeit vorgeschrieben: Wer von euch in Unwissenheit Böses tut, aber danach dann bereut und (es) wieder gutmacht, so ist Er Allvergebend und Barmherzig.',
                'es' => 'Cuando se presenten ante ti aquellos que creen en Mis signos, diles: "¡La paz sea con ustedes! Su Señor ha prescrito para Sí mismo la misericordia. Quien cometa una falta por ignorancia, y luego se arrepienta y enmiende, sepa que Dios es Absolvedor, Misericordioso.',
            ],
             'reference' => [
                 'surah' => 'Al-An\'aam',
                 'ayah' => '6:54',
             ],
        ],
        [
            'arabic' => 'إِذْ أَوَى ٱلْفِتْيَةُ إِلَى ٱلْكَهْفِ فَقَالُوا۟ رَبَّنَآ ءَاتِنَا مِن لَّدُنكَ رَحْمَةًۭ وَهَيِّئْ لَنَا مِنْ أَمْرِنَا رَشَدًۭا',
            'translations' => [
                'en' => '[Mention] when the youths retreated to the cave and said, "Our Lord, grant us from Yourself mercy and prepare for us from our affair right guidance."',
                'nl' => 'Toen de jongeren een schuilplaats in de Grot zochten, zeiden zij: "O onze Heer, schenk ons van Uw Zijde Barmhartigheid en bereid ons een rechte weg voor onze zaak."',
                'fr' => 'Quand les jeunes gens se furent réfugiés dans la caverne, ils dirent: «O notre Seigneur, donne-nous de Ta part une miséricorde; et assure nous la droiture dans tout ce qui nous concerne».',
                'tr' => 'Birkaç genç mağaraya sığınmış: "Rabbimiz! Katından bize rahmet ver ve işimizde doğruyu göster, bizi başarılı kıl" demişlerdi.',
                'ur' => 'ان چند نوجوانوں نے جب غار میں پناه لی تو دعا کی کہ اے ہمارے پروردگار! ہمیں اپنے پاس سے رحمت عطا فرما اور ہمارے کام میں ہمارے لئے راه یابی کو آسان کردے',
                'de' => 'Als die Jünglinge in der Höhle Zuflucht suchten und sagten: "Unser Herr, gib uns Barmherzigkeit von Dir aus, und bereite uns in unserer Angelegenheit einen rechten (Aus)weg."',
                'es' => 'Recuerda cuando los jóvenes se refugiaron en la caverna y dijeron: "¡Señor nuestro! Acógenos en Tu misericordia y concédenos que nuestra situación se solucione correctamente".',
            ],
            'reference' => [
                'surah' => 'Al-Kahf',
                'ayah' => '18:10',
            ],
        ],
        [
            'arabic' => 'بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ ٱلرَّحْمَٰنُ',
            'translations' => [
                'en' => 'The Most Merciful',
                'nl' => 'De Erbarmer.',
                'fr' => 'Le Tout Miséricordieux.',
                'tr' => 'Rahman olan Allah Kuran\'ı öğretti;',
                'ur' => 'رحمٰن نے',
                'de' => 'Der Allerbarmer',
                'es' => 'El Compasivo',
            ],
            'reference' => [
                'surah' => 'Ar-Rahmaan',
                'ayah' => '55:1-2',
            ],
        ],
        [
            'arabic' => 'ٱلَّذِينَ يَحْمِلُونَ ٱلْعَرْشَ وَمَنْ حَوْلَهُۥ يُسَبِّحُونَ بِحَمْدِ رَبِّهِمْ وَيُؤْمِنُونَ بِهِۦ وَيَسْتَغْفِرُونَ لِلَّذِينَ ءَامَنُوا۟ رَبَّنَا وَسِعْتَ كُلَّ شَىْءٍۢ رَّحْمَةًۭ وَعِلْمًۭا فَٱغْفِرْ لِلَّذِينَ تَابُوا۟ وَٱتَّبَعُوا۟ سَبِيلَكَ وَقِهِمْ عَذَابَ ٱلْجَحِيمِ',
            'translations' => [
                'en' => 'Those [angels] who carry the Throne and those around it exalt [Allah] with praise of their Lord and believe in Him and ask forgiveness for those who have believed, [saying], "Our Lord, You have encompassed all things in mercy and knowledge, so forgive those who have repented and followed Your way and protect them from the punishment of Hellfire.',
                'nl' => 'Degenen die de Troon dragen (de Engelen) en wie zich er omheen bevinden, prijzen de Glorie van hun Heer met Zijn lofprijzing en geloven in Hem en vragen om vergeving voor degenen die geloven. (En zeggen:) "Onze Heer, Uw Barmhartigheid en Kennis omvatten alle zaken, vergeef daarom degenen die berouw tonen en die Uw Weg volgen en bescherm hen tegen de bestraffing van de Hel.',
                'fr' => 'Ceux (les Anges) qui portent le Trône et ceux qui l\'entourent célèbrent les louanges de leur Seigneur, croient en Lui et implorent le pardon pour ceux qui croient: «Seigneur! Tu étends sur toute chose Ta miséricorde et Ta science. Pardonne donc à ceux qui se repentent et suivent Ton chemin et protège-les du châtiment de l\'Enfer.',
                'tr' => 'Arşı yüklenen ve çevresinde bulunanlar, Rablerini överek tesbih ederler; O\'na inanırlar. Müminler için: "Rabbimiz! İlmin ve rahmetin herşeyi içine almıştır. Tevbe edip Senin yoluna uyanları bağışla; onları cehennemin azabından koru" diye bağışlanma dilerler.',
                'ur' => 'عرش کے اٹھانے والے اور اسکے آس پاس کے (فرشتے) اپنے رب کی تسبیح حمد کے ساتھ ساتھ کرتے ہیں اور اس پر ایمان رکھتے ہیں اور ایمان والوں کے لیے استفغار کرتے ہیں، کہتے ہیں کہ اے ہمارے پروردگار! تو نے ہر چیز کو اپنی بخشش اور علم سے گھیر رکھا ہے، پس تو انہیں بخش دے جو توبہ کریں اور تیری راه کی پیروی کریں اور تو انہیں دوزخ کے عذاب سے بھی بچا لے',
                'de' => 'Diejenigen, die den Thron tragen, und diejenigen, die in seiner Umgebung sind, lobpreisen ihren Herrn und glauben an Ihn und bitten um Vergebung für diejenigen, die glauben: "Unser Herr, Du umfaßt alles in Deiner Barmherzigkeit und Deinem Wissen. So vergib denjenigen, die bereuen und Deinem Weg folgen, und bewahre sie vor der Strafe des Höllenbrandes.',
                'es' => 'Los [ángeles] que portan el Trono, y los que están a su alrededor, glorifican con alabanzas a su Señor, creen en Él y piden el perdón para los creyentes diciendo: "¡Señor nuestro! Tú lo abarcas todo con Tu misericordia y sabiduría. Perdona a quienes se arrepienten y siguen Tu camino, y presérvalos del castigo del Fuego.',
            ],
            'reference' => [
                'surah' => 'Ghafir',
                'ayah' => '40:7',
            ],
        ],
        [
            'arabic' => 'ٱهْدِنَا ٱلصِّرَٰطَ ٱلْمُسْتَقِيمَ',
            'translations' => [
                'en' => 'Guide us to the straight path -',
                'nl' => 'Leid ons op het rechte Pad.',
                'fr' => 'Guide-nous dans le droit chemin,',
                'tr' => 'Bizi doğru yola eriştir.',
                'ur' => 'ہمیں سیدھی (اور سچی) راه دکھا۔',
                'de' => 'Leite uns den geraden Weg,',
                'es' => '¡Guíanos por el camino recto!',
            ],
            'reference' => [
                'surah' => 'Al-Fatihah',
                'ayah' => '1:6',
            ],
        ],
        [
            'arabic' => 'ذَٰلِكَ ٱلْكِتَـٰبُ لَا رَيْبَ ۛ فِيهِ ۛ هُدًى لِّلْمُتَّقِينَ',
            'translations' => [
                'en' => 'This is the Book about which there is no doubt, a guidance for those conscious of Allāh -',
                'nl' => 'Dit is het Boek (de Koran) waaraan geen twijfel is, een leidraad voor de Moettaqôen.',
                'fr' => 'Voici le Livre au sujet duquel il n’y a aucun doute, c’est un guide pour les pieux,',
                'tr' => 'Bu, doğruluğu şüphe götürmeyen ve Allah\'a karşı gelmekten sakınanlara yol gösteren Kitap\'dır.',
                'ur' => 'اس کتاب (کے اللہ کی کتاب ہونے) میں کوئی شک نہیں پرہیزگاروں کو راه دکھانے والی ہے۔',
                'de' => 'Dieses Buch, an dem es keinen Zweifel gibt, ist eine Rechtleitung für die Gottesfürchtigen,',
                'es' => 'Este es el Libro del cual no hay duda, es guía para los que son conscientes de Dios y Le temen devocionalmente,',
            ],
            'reference' => [
                'surah' => 'Al-Baqarah',
                'ayah' => '2:2',
            ],
        ],
        [
            'arabic' => 'أُو۟لَـٰٓئِكَ عَلَىٰ هُدًى مِّن رَّبِّهِمْ ۖ وَأُو۟لَـٰٓئِكَ هُمُ ٱلْمُفْلِحُونَ',
            'translations' => [
                'en' => 'Those are upon [right] guidance from their Lord, and it is those who are the successful.',
                'nl' => 'Zij zijn depenen die Leiding van hun Heer ontvangen en zij zijn degenen die welslagen.',
                'fr' => 'Ceux-là sont sur le bon chemin de leur Seigneur, et ce sont eux qui réussissent (dans cette vie et dans la vie future).',
                'tr' => 'İşte Rab\'lerinin yolunda olanlar ve saadete erişenler bunlardır.',
                'ur' => 'یہی لوگ اپنے رب کی طرف سے ہدایت پر ہیں اور یہی لوگ فلاح اور نجات پانے والے ہیں۔',
                'de' => 'Jene verfahren nach einer Rechtleitung von ihrem Herrn, und das sind diejenigen, denen es wohl ergeht.',
                'es' => 'Ésos son los que están en la guía de su Señor y serán los bienaventurados.',
            ],
            'reference' => [
                'surah' => 'Al-Baqarah',
                'ayah' => '2:5',
            ],
        ],
        [
            'arabic' => 'قُلْنَا ٱهْبِطُوا۟ مِنْهَا جَمِيعًا ۖ فَإِمَّا يَأْتِيَنَّكُم مِّنِّى هُدًى فَمَن تَبِعَ هُدَاىَ فَلَا خَوْفٌ عَلَيْهِمْ وَلَا هُمْ يَحْزَنُونَ',
            'translations' => [
                'en' => 'We said, "Go down from it, all of you. And when guidance comes to you from Me, whoever follows My guidance - there will be no fear concerning them, nor will they grieve.',
                'nl' => 'Wij zeiden: "Daalt allen af uit haar (het Paradijs). En Zodra er van Mij Leiding tot jullie komt; wie dan Mijn Leiding volgen: er zal geen vrees over hen komen en zij zullen niet treuren."',
                'fr' => 'Nous dîmes: "Descendez d’ici, vous tous! Toutes les fois que Je vous enverrai un guide, ceux qui [le] suivront n’auront rien à craindre et ne seront point affligés."',
                'tr' => '&quot;İnin oradan hepiniz, tarafımdan size bir yol gösteren gelecektir; Benim yoluma uyanlar için artık korku yoktur, onlar üzülmeyeceklerdir&quot; dedik.',
                'ur' => 'ہم نے کہا تم سب یہاں سے چلے جاؤ، جب کبھی تمہارے پاس میری ہدایت پہنچے تو اس کی تابعداری کرنے والوں پر کوئی خوف وغم نہیں۔',
                'de' => 'Wir sagten: Geht alle fort von ihm (, dem Paradiesgarten). Wenn nun von Mir Rechtleitung zu euch kommt, dann soll über diejenigen, die Meiner Rechtleitung folgen, keine Furcht kommen, noch sollen sie traurig sein.',
                'es' => 'Dije: “¡Descended todos de él! Cuando os llegue de Mí una guía, quienes la sigan no habrán de sentir temor ni tristeza.',
            ],
            'reference' => [
                'surah' => 'Al-Baqarah',
                'ayah' => '2:38',
            ],
        ],
        [
            'arabic' => 'وَلَن تَرْضَىٰ عَنكَ ٱلْيَهُودُ وَلَا ٱلنَّصَـٰرَىٰ حَتَّىٰ تَتَّبِعَ مِلَّتَهُمْ ۗ قُلْ إِنَّ هُدَى ٱللَّهِ هُوَ ٱلْهُدَىٰ ۗ وَلَئِنِ ٱتَّبَعْتَ أَهْوَآءَهُم بَعْدَ ٱلَّذِى جَآءَكَ مِنَ ٱلْعِلْمِ ۙ مَا لَكَ مِنَ ٱللَّهِ مِن وَلِىٍّ وَلَا نَصِيرٍ',
            'translations' => [
                'en' => 'And never will the Jews and the Christians approve of you until you follow their religion. Say, "Indeed, the guidance of Allāh is the [only] guidance." If you were to follow their desires after what has come to you of knowledge, you would have against Allāh no protector or helper.',
                'nl' => 'En de Joden en de Christenen zullen nooit behagen in jou vinden, totdat jij hun godsdienst volgt. Zeg (O Moehammad): "Voorwaar, de Leiding van Allah: dat is Leiding." En als jij hun begeerten volgt, nadat de kennis tot jou is gekomen, dan zal er voor jou tegen Allah geen beschermer en geen helper zijn.',
                'fr' => 'Ni les Juifs, ni les Chrétiens ne seront jamais satisfaits de toi, jusqu’à ce que tu suives leur religion. - Dis: “Certes, c’est la direction d’Allah qui est la vraie direction.” Mais si tu suivais leurs passions après ce que tu as reçu de science, tu n’aurais contre Allah ni protecteur ni secoureur.',
                'tr' => 'Kendi dinlerine uymadıkça, Yahudi ve Hıristiyanlar senden asla hoşnud olmayacaklardır. De ki: &quot;Doğru yol, ancak Allah\'ın yoludur&quot;. Sana gelen ilimden sonra onların heveslerine uyarsan, and olsun ki, Allah\'tan sana ne bir dost ve ne de bir yardımcı olur.',
                'ur' => 'آپ سے یہود ونصاریٰ ہرگز راضی نہیں ہوں گے جب تک کہ آپ ان کے مذہب کے تابع نہ بن جائیں، آپ کہہ دیجیئے کہ اللہ کی ہدایت ہی ہدایت ہے اور اگر آپ نے باوجود اپنے پاس علم آجانے کے، پھر ان کی خواہشوں کی پیروی کی تو اللہ کے پاس آپ کا نہ تو کوئی ولی ہوگا اورنہ مددگار۔',
                'de' => 'Weder die Juden noch die Christen werden mit dir zufrieden sein, bis du ihrem Glaubensbekenntnis folgst. Sag: Gewiß, Allahs Rechtleitung ist die (wahre) Rechtleitung. Wenn du jedoch ihren Neigungen folgst nach dem, was dir an Wissen zugekommen ist, so wirst du vor Allah weder Schutzherrn noch Helfer haben.',
                'es' => 'Ni los judíos ni los cristianos estarán [completamente] satisfechos contigo hasta que sigas su religión. Di: “La guía de Dios es la guía verdadera”. Si siguieras sus deseos después de haberte llegado el conocimiento [sobre la verdad], no tendrías quien te protegiera ni quien te auxiliara de Dios.',
            ],
            'reference' => [
                'surah' => 'Al-Baqarah',
                'ayah' => '2:120',
            ],
        ],
        [
            'arabic' => 'شَهْرُ رَمَضَانَ ٱلَّذِىٓ أُنزِلَ فِيهِ ٱلْقُرْءَانُ هُدًى لِّلنَّاسِ وَبَيِّنَـٰتٍ مِّنَ ٱلْهُدَىٰ وَٱلْفُرْقَانِ ۚ فَمَن شَهِدَ مِنكُمُ ٱلشَّهْرَ فَلْيَصُمْهُ ۖ وَمَن كَانَ مَرِيضًا أَوْ عَلَىٰ سَفَرٍ فَعِدَّةٌ مِّنْ أَيَّامٍ أُخَرَ ۗ يُرِيدُ ٱللَّهُ بِكُمُ ٱلْيُسْرَ وَلَا يُرِيدُ بِكُمُ ٱلْعُسْرَ وَلِتُكْمِلُوا۟ ٱلْعِدَّةَ وَلِتُكَبِّرُوا۟ ٱللَّهَ عَلَىٰ مَا هَدَىٰكُمْ وَلَعَلَّكُمْ تَشْكُرُونَ',
            'translations' => [
                'en' => 'The month of Ramaḍān [is that] in which was revealed the Qur’ān, a guidance for the people and clear proofs of guidance and criterion. So whoever sights [the crescent of] the month, let him fast it; and whoever is ill or on a journey - then an equal number of other days. Allāh intends for you ease and does not intend for you hardship and [wants] for you to complete the period and to glorify Allāh for that [to] which He has guided you; and perhaps you will be grateful.',
                'nl' => 'De maand Ramadhân is het waarin de Koran is neergezonden, als Leiding voor de mensheid en als duidelijke bewijzen van de Leiding en de Foerqân. Wie van jullie aanwezig is in de maand, laat die dan vasten, maar wie ziek is of op reis, dan is er een aantal andere dagen (om de vasten in te halen). Allah wenst voor jullie het gemakkelijke en Hij wenst niet voor jullie het ongemak. En maakt het aantal (dagen) vol en prijst Allah\'s Grootheid omdat Hij jullie leiding schonk, hopelijk zullen jullie dankbaar zijn.',
                'fr' => 'Le mois de Ramadān est celui au cours duquel le Coran a été descendu  [révélé] comme guide pour les gens, et preuves claires de la bonne direction et du discernement. Donc quiconque d\'entre vous est présent en ce mois, qu’il jeûne! Et quiconque est malade ou en voyage, alors qu’il jeûne un nombre égal d’autres jours. Allah veut pour vous la facilité, et Il ne veut pas la difficulté pour vous, afin que vous en complétiez le nombre et que vous proclamiez la grandeur d’Allah pour vous avoir guidés, et afin que vous soyez reconnaissants!',
                'tr' => 'Ramazan ayı, ki onda Kuran, insanlara yol gösterici ve doğruyu yanlıştan ayırıcı belgeler olarak indirildi. Sizden bu ayı idrak eden, onda oruç tutsun; hasta veya yolculukta olan, tutamadığı günlerin sayısınca diğer günlerde tutsun. Allah size kolaylık ister, zorluk istemez. Bu kolaylıkları, sayıyı tamamlamanız ve size yol gösterdiğine karşılık O\'nu ululamanız için meşru kılmıştır; ola ki şükredersiniz.',
                'ur' => 'ماه رمضان وه ہے جس میں قرآن اتارا گیا جو لوگوں کو ہدایت کرنے والا ہے اور جس میں ہدایت کی اور حق وباطل کی تمیز کی نشانیاں ہیں، تم میں سے جو شخص اس مہینہ کو پائے اسے روزه رکھنا چاہئے، ہاں جو بیمار ہو یا مسافر ہو اسے دوسرے دنوں میں یہ گنتی پوری کرنی چاہئے، اللہ تعالیٰ کا اراده تمہارے ساتھ آسانی کا ہے، سختی کا نہیں، وه چاہتا ہے کہ تم گنتی پوری کرلو اور اللہ تعالیٰ کی دی ہوئی ہدایت پر اس کی بڑائیاں بیان کرو اور اس کا شکر کرو۔',
                'de' => 'Der Monat Ramadan (ist es), in dem der Qur’an als Rechtleitung für die Menschen herabgesandt worden ist und als klare Beweise der Rechtleitung und der Unterscheidung. Wer also von euch während dieses Monats anwesend ist, der soll ihn fasten, wer jedoch krank ist oder sich auf einer Reise befindet, eine (gleiche) Anzahl von anderen Tagen (fasten). Allah will für euch Erleichterung; Er will für euch nicht Erschwernis, - damit ihr die Anzahl vollendet und Allah als den Größten preist, dafür, daß Er euch rechtgeleitet hat, auf daß ihr dankbar sein möget.',
                'es' => 'En el mes de Ramadán fue revelado el Corán como guía para la humanidad y evidencia de la guía y el criterio. Quien presencie la llegada de [la Luna nueva de] el mes deberá ayunar, pero quien esté enfermo o de viaje [y no ayune] deberá reponer posteriormente los días no ayunados y así completar el mes. Dios desea facilitaros las cosas y no dificultároslas; alabad y agradeced a Dios por haberos guiado.',
            ],
            'reference' => [
                'surah' => 'Al-Baqarah',
                'ayah' => '2:185',
            ],
        ],
        [
            'arabic' => 'وَلَا تُؤْمِنُوٓا۟ إِلَّا لِمَن تَبِعَ دِينَكُمْ قُلْ إِنَّ ٱلْهُدَىٰ هُدَى ٱللَّهِ أَن يُؤْتَىٰٓ أَحَدٌ مِّثْلَ مَآ أُوتِيتُمْ أَوْ يُحَآجُّوكُمْ عِندَ رَبِّكُمْ ۗ قُلْ إِنَّ ٱلْفَضْلَ بِيَدِ ٱللَّهِ يُؤْتِيهِ مَن يَشَآءُ ۗ وَٱللَّهُ وَٰسِعٌ عَلِيمٌ',
            'translations' => [
                'en' => 'And do not trust except those who follow your religion." Say, "Indeed, the [true] guidance is the guidance of Allāh. [Do you fear] lest someone be given [knowledge] like you were given or that they would [thereby] argue with you before your Lord?" Say, "Indeed, [all] bounty is in the hand of Allāh - He grants it to whom He wills. And Allāh is all-Encompassing and Wise."',
                'nl' => 'En gelooft slechts hen die jullie godsdienst volgen, zegt: "Voorwaar, de Lieding is de Leiding van Allah en (gelooft niet) dat er aan iemand hetzelfde is gegeven als aan jullie werd gegeven, of dat Zij tegen jullie bij jullie Heer twisten." Zeg: "Voorwaar, de gunst is van de Hand van Allah, die Hij geeft aan wie Hij wil; Allah is Alomvattend, Alwetend.',
                'fr' => '[Les gens du Livre disent à leur coreligionnaires] : "Et ne croyez que ceux qui suivent votre religion..." Dis : "La vraie direction est la direction d’Allah" - [et ils disent encore: Vous ne devez ni approuver ni reconnaître] que quelqu’un d’autre que vous puisse recevoir comme ce que vous avez reçu de sorte qu’ils (les musulmans) ne puissent argumenter contre vous auprès de votre Seigneur. Dis[-leur] : En vérité la grâce est en la main d’Allah. Il la donne à qui Il veut. La grâce d’Allah est immense et Il est Omniscient.',
                'tr' => 'Kitap ehlinden bir takımı şöyle dedi: &quot;İnananlara indirilene günün başında inanın, sonunda inkar edin ki, belki dönerler ve dininize uyanlardan başkasına inanmayın&quot;. De ki: &quot;Doğru yol Allah\'ın yoludur&quot;. Ve yine başkasına da verildiğine veya Rabbinizin katında Müslümanların karşı delil getirip sizi alt edeceğine inanmayın, derler. De ki: &quot;Doğrusu bol nimet Allah\'ın elindedir, onu dilediğine verir. Allah\'ın fazlı her şeyi kaplar, O her şeyi bilir&quot;.',
                'ur' => 'اور سوائے تمہارے دین پر چلنے والوں کے اور کسی کا یقین نہ کرو۔ آپ کہہ دیجئے کہ بے شک ہدایت تو اللہ ہی کی ہدایت ہے (اور یہ بھی کہتے ہیں کہ اس بات کا بھی یقین نہ کرو) کہ کوئی اس جیسا دیا جائے جیسا تم دیئے گئے ہو، یا یہ کہ یہ تم سے تمہارے رب کے پاس جھگڑا کریں گے، آپ کہہ دیجئے کہ فضل تو اللہ تعالیٰ ہی کے ہاتھ میں ہے، وه جسے چاہے اسے دے، اللہ تعالیٰ وسعت والا اورجاننے والا ہے۔',
                'de' => 'Und glaubt nur jemandem, der eurer Religion folgt. Sag: Gewiß, die (wahre) Rechtleitung ist Allahs Rechtleitung. (Und glaubt nicht,) daß (auch) jemandem (anderen) das gleiche gegeben werde, was euch gegeben wurde, oder daß man mit euch (zu Recht) vor eurem Herrn streite. Sag: Gewiß, die Huld liegt in Allahs Hand. Er gewährt sie, wem Er will. Und Allah ist Allumfassend und Allwissend.',
                'es' => 'Y [dicen:] “no confiéis sino en quienes siguen vuestra religión”. Diles [¡Oh, Muhámmad!]: “La verdadera guía es la de Dios”. [Y dicen:] “No enseñéis lo que habéis recibido para que nadie sea bendecido como vosotros, ni para que puedan argumentar en contra vuestra ante vuestro Señor”. Diles [¡Oh, Muhámmad!]: “La gracia está en manos de Dios, y se la concede a quien Él quiere”. Dios es Inconmensurable, todo lo sabe.',
            ],
            'reference' => [
                'surah' => 'Al-Imran',
                'ayah' => '3:73',
            ],
        ],
        [
            'arabic' => 'إِنَّ هَـٰذَا ٱلْقُرْءَانَ يَهْدِى لِلَّتِى هِىَ أَقْوَمُ وَيُبَشِّرُ ٱلْمُؤْمِنِينَ ٱلَّذِينَ يَعْمَلُونَ ٱلصَّـٰلِحَـٰتِ أَنَّ لَهُمْ أَجْرًا كَبِيرًا',
            'translations' => [
                'en' => 'Indeed, this Qur’ān guides to that which is most suitable and gives good tidings to the believers who do righteous deeds that they will have a great reward',
                'nl' => 'Voorwaar, deze Koran leidt naar wat rechter is en brengt goede tijdingen aan de gelovigen die goede werken verrichten. Voorwaar, er is voor hen een grote beloning.',
                'fr' => 'Certes, ce Coran guide vers ce qu’il y a de plus droit, et il annonce aux croyants qui font de bonnes œuvres qu’ils auront une grande récompense,',
                'tr' => 'Doğrusu bu Kuran en doğru yola götürür ve yararlı iş yapan müminlere büyük ecir olduğunu, ahirete inanmayanlara can yakıcı bir azap hazırladığımızı müjdeler.',
                'ur' => 'یقیناً یہ قرآن وه راستہ دکھاتا ہے جو بہت ہی سیدھا ہے اور ایمان والوں کو جو نیک اعمال کرتے ہیں اس بات کی خوشخبری دیتا ہے کہ ان کے لئے بہت بڑا اجر ہے.',
                'de' => 'Gewiß, dieser Qur’an leitet zu dem, was richtiger ist, und verkündet den Gläubigen, die rechtschaffene Werke tun, daß es für sie großen Lohn geben wird',
                'es' => 'El Corán guía por el sendero más justo y firme y di a los creyentes que obran rectamente que recibirán una gran recompensa.',
            ],
            'reference' => [
                'surah' => 'Al-Isra',
                'ayah' => '17:9',
            ],
        ],
        [
            'arabic' => '۞ وَتَرَى ٱلشَّمْسَ إِذَا طَلَعَت تَّزَٰوَرُ عَن كَهْفِهِمْ ذَاتَ ٱلْيَمِينِ وَإِذَا غَرَبَت تَّقْرِضُهُمْ ذَاتَ ٱلشِّمَالِ وَهُمْ فِى فَجْوَةٍ مِّنْهُ ۚ ذَٰلِكَ مِنْ ءَايَـٰتِ ٱللَّهِ ۗ مَن يَهْدِ ٱللَّهُ فَهُوَ ٱلْمُهْتَدِ ۖ وَمَن يُضْلِلْ فَلَن تَجِدَ لَهُۥ وَلِيًّا مُّرْشِدًا',
            'translations' => [
                'en' => 'And [had you been present], you would see the sun when it rose, inclining away from their cave on the right, and when it set, passing away from them on the left, while they were [lying] within an open space thereof. That was from the signs of Allāh. He whom Allāh guides is the [rightly] guided, but he whom He sends astray - never will you find for him a protecting guide.',
                'nl' => 'En jij zou zien dat de zon, wanneer zij opging, zich aan de rechterkant van hun grot wegboog; en wanneer zij onderging, zich aan de linkerkant wegboog, terwijl zij in de open ruimte ervan (lagen): dit behoort tot de Tekenen van Allah. Wie door Allah geleid wordt: hij volgt Leiding. En wie tot dwaling gebracht wordt: hij zal nooit een helper vinden die hem recht leidt.',
                'fr' => 'Et tu aurais vu le soleil, quand il se lève, s’écarter de leur caverne vers la droite, et quand il se couche, passer à leur gauche, tandis qu’eux-mêmes étaient là dans une partie spacieuse (de la caverne). Cela est un des signes (de la puissance) d’Allah. Celui qu’Allah guide, c’est lui le bien-guidé. Et quiconque Il égare, tu ne trouveras alors pour lui aucun allié pour le mettre sur la bonne voie.',
                'tr' => 'Baksaydın, güneşin mağaralarının sağ tarafından doğup meylettiğini, sol tarafından onlara dokunmadan battığını, onların da mağaranın genişçe bir yerinde bulunduğunu görürdün. Bu, Allah\'ın mucizelerindendir; Allah\'ın doğru yola eriştirdiği kimse hak yoldadır. Kimi de saptırırsa artık ona, doğru yola götürecek bir rehber bulamazsın.',
                'ur' => 'آپ دیکھیں گے کہ آفتاب بوقت طلوع ان کے غار سے دائیں جانب کو جھک جاتا ہے اور بوقت غروب ان کے بائیں جانب کترا جاتا ہے اور وه اس غار کی کشاده جگہ میں ہیں۔ یہ اللہ کی نشانیوں میں سے ہے۔ اللہ تعالیٰ جس کی رہبری فرمائے وه راه راست پر ہے اور جسے وه گمراه کردے ناممکن ہے کہ آپ اس کا کوئی کارساز اور رہنما پاسکیں.',
                'de' => 'Und du siehst die Sonne, wenn sie aufgeht, sich von ihrer Höhle zur Rechten wegneigen, und wenn sie untergeht, an ihnen zur Linken vorbeigehen, während sie sich darin in einem Raum befinden. Das gehört zu Allahs Zeichen. Wen Allah rechtleitet, der ist (in Wahrheit) rechtgeleitet; wen Er aber in die Irre gehen läßt, für den wirst du keinen Schutzherrn finden, der ihn den rechten Weg führt.',
                'es' => 'Se podía observar cómo el Sol naciente se alejaba de la caverna por la derecha dejándoles al ocultarse por la izquierda, mientras ellos permanecían en un espacio de la misma. Este es uno de los milagros de Dios. Aquel a quien Dios guíe estará bien encaminado, pero aquel a quien le deje en el extravío no podrá encontrar protector que le guíe.',
            ],
            'reference' => [
                'surah' => 'Al-Kahf',
                'ayah' => '18:17',
            ],
        ],
        [
            'arabic' => 'وَٱلَّذِينَ ٱهْتَدَوْا۟ زَادَهُمْ هُدًى وَءَاتَىٰهُمْ تَقْوَىٰهُمْ',
            'translations' => [
                'en' => 'And those who are guided - He increases them in guidance and gives them their righteousness.',
                'nl' => 'Maar degenen die de Leiding volgden: Hij vermeerderde hun Leiding en Hij gaf hun hun vrees (voor Hem).',
                'fr' => 'Quant à ceux qui se mirent sur la bonne voie, Il les guida encore plus et leur inspira leur piété.',
                'tr' => 'Doğru yolu bulanların ise Allah doğruluklarını artırır, onların karşı gelmekten sakınmalarını sağlar.',
                'ur' => 'اور جو لوگ ہدایت یافتہ ہیں اللہ نے انہیں ہدایت میں اور بڑھا دیا ہے اور انہیں ان کی پرہیزگاری عطا فرمائی ہے.',
                'de' => 'Und denjenigen, die rechtgeleitet sind, mehrt Er die Rechtleitung und verleiht ihnen ihre Gottesfurcht.',
                'es' => 'Pero a quienes siguen la guía, Él les incrementará su fe y su piedad.',
            ],
            'reference' => [
                'surah' => 'Muhammad',
                'ayah' => '47:17',
            ],
        ],
    ];

    /**
     * Thematic categorization of ayats.
     *
     * @var array<string, array<int, int>>
     */
    private static array $themes = [
        'hope' => [0, 12, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54],
        'mercy' => [3, 14, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64],
        'patience' => [1, 5, 11, 16, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34],
        'prayer' => [4, 9],
        'gratitude' => [7, 13, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44],
        'peace' => [8, 17],
        'strength' => [6, 16],
        'change' => [10],
        'trust' => [2, 23],
        'guidance' => [18, 19, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74],
        'unity' => [21],
        'accountability' => [20, 22],
        'provision' => [2, 15],
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

    /**
     * Get a random ayat from a specific theme.
     *
     * @param string $theme The theme to get ayat from
     * @param string|null $locale The locale for translation (defaults to 'en')
     * @return array{arabic: string, translations: array<string, string>, reference: array{surah: string, ayah: string}}
     * @throws \InvalidArgumentException If theme does not exist
     */
    public static function byTheme(string $theme, ?string $locale = 'en'): array
    {
        if (!isset(self::$themes[$theme])) {
            throw new \InvalidArgumentException("Theme '{$theme}' does not exist. Available themes: " . implode(', ', array_keys(self::$themes)));
        }

        $ayatIndices = self::$themes[$theme];
        $randomIndex = $ayatIndices[array_rand($ayatIndices)];

        return self::$ayats[$randomIndex];
    }

    /**
     * Get all ayats from a specific theme.
     *
     * @param string $theme The theme to get ayats from
     * @return array<int, array{arabic: string, translations: array<string, string>, reference: array{surah: string, ayah: string}}>
     * @throws \InvalidArgumentException If theme does not exist
     */
    public static function getAllByTheme(string $theme): array
    {
        if (!isset(self::$themes[$theme])) {
            throw new \InvalidArgumentException("Theme '{$theme}' does not exist. Available themes: " . implode(', ', array_keys(self::$themes)));
        }

        $ayats = [];
        foreach (self::$themes[$theme] as $index) {
            $ayats[] = self::$ayats[$index];
        }

        return $ayats;
    }

    /**
     * Get all available themes.
     *
     * @return array<int, string>
     */
    public static function getAvailableThemes(): array
    {
        return array_keys(self::$themes);
    }

    /**
     * Get all themes with their descriptions.
     *
     * @return array<string, string>
     */
    public static function getThemesWithDescriptions(): array
    {
        return [
            'hope' => 'Verses about hope, ease after hardship, and not despairing',
            'mercy' => 'Verses about Allah\'s mercy and forgiveness',
            'patience' => 'Verses about patience, perseverance, and endurance',
            'prayer' => 'Verses about prayer, supplication, and Allah\'s response',
            'gratitude' => 'Verses about being grateful and recognizing blessings',
            'peace' => 'Verses about inner peace, tranquility, and reassurance',
            'strength' => 'Verses about strength, courage, and not weakening',
            'change' => 'Verses about self-improvement and personal change',
            'trust' => 'Verses about trusting and relying on Allah',
            'guidance' => 'Verses about guidance, knowledge, and Allah\'s teachings',
            'unity' => 'Verses about unity and staying together',
            'accountability' => 'Verses about accountability and consequences of actions',
            'provision' => 'Verses about Allah\'s provision and sustenance',
        ];
    }

    /**
     * Get theme for a specific ayat index.
     *
     * @param int $ayatIndex The index of the ayat
     * @return array<int, string> Array of themes this ayat belongs to
     */
    public static function getThemesForAyat(int $ayatIndex): array
    {
        $themes = [];
        foreach (self::$themes as $theme => $indices) {
            if (in_array($ayatIndex, $indices)) {
                $themes[] = $theme;
            }
        }
        return $themes;
    }
}
