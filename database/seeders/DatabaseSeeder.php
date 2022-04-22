<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Pages;
use DB;
use Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Aziz',
        //     'phone' => 'admin',
        //     'password' => Hash::make('admin'),
        // ]);

        // Pages::create([
        //     'name' => 'about',
        //     'description' => ''
        // ]);
        // Pages::create([
        //     'name' => 'services',
        //     'description' => ''
        // ]);
        // Pages::create([
        //     'name' => 'contacts',
        //     'description' => ''
        // ]);
        // Pages::create([
        //     'name' => 'printed',
        //     'description' => ''
        // ]);
        // Pages::create([
        //     'name' => 'information',
        //     'description' => ''
        // ]);



        DB::table('rahbariyat')->insert([
            [
                'title' => "\"NKMK JAMG'ARMASI\" BOSH DIREKTORI",
                'name' => 'Rahmanov Nazirbek Israilovich',
                'image' => '/images/rahmanov.jpg',
                'description' => "
                <h3>“Navoiy kon-metallurgiya kombinati jamg'armasi” davlat muassasasi bosh direktori</h3>
                <h4>Biografiyasi:</h4>
                <p>1983-yilda tug'ilgan.</p>
                <p>2005-yil Jahon iqtisodiyoti va diplomatiyasi universitetini, 2014-yil O'zbekiston Respublikasi Prezidenti huzuridagi Davlat boshqaruvi Аkademiyasini tamomlagan.</p>
                <h4>Mehnat faoliyati:</h4>
                <p>
                2006-2010 yy. – “Navoiy kon-metallurgiya kombinati” davlat korxonasi boshqarmasi tashqi iqtisodiy aloqalar bo'limi xorijiy texnika,
                 xom ashyo va materiallar muhandisi, jihozlar va materiallarni butlash muhandisi, uzoq chet el bo'yicha moddiy texnik ta'minot bo'limi
                  import texnikasi va ehtiyot qismlari guruhi jihozlar va materiallarni butlash bo'yicha muhandisi.
                </p>
                <p>2010-2012 yy. – “Navoiy kon metallurgiya kombinati” davlat korxonasi boshqarmasi uzoq chet el bo'yicha moddiy texnik ta'minot bo'limi boshlig'ining import texnikasi o'rinbosari, bo'lim boshlig'i.</p>
                <p>2012-2014 yy. –O'zbekiston Respublikasi Prezidenti huzuridagi Davlat va Jamiyat qurilishi Аkademiyasi tinglovchisi.</p>
                <p>
                    2014-2018 yy. – “Navoiykon-metallurgiya kombinati” davlat korxonasi “1-son GMZ” kon boshqarmasi direktorining kadrlar va umumiy masalalar bo'yicha o'rinbosari.
                </p>
                <p>
                2018-2018 yy. – “Navoiykon-metallurgiya kombinati” davlat korxonasi “Navoiy mashina sozlik zavodi” ishlab chiqarish birlashmasi direktorining kadrlar va umumiy masalalar bo'yicha o'rinbosari.
                </p>
                <p>
                2018-2021 yy. –“Navoiykon-metallurgiya kombinati” davlat korxonasi bosh direktoriningumumiymasalalarbo'yichao'rinbosari.
                </p>
                <p>
                2021y.-h.v. – “Navoiykon-metallurgiya kombinati jamg'armasi” davlat muassasasi bosh direktori.
                </p>
                <p>“O'zbekiston Konstitutsiyasiga 25 yil” esdalik,II va III-darajali “Konchilik shuhrati” ko'krak,“O'zbekiston Respublikasi mustaqilligining 30 yilligi” esdalik nishonlari bilan taqdirlangan.</p>",
            ],
            [
                'title' => "\"NKMK JAMG'ARMASI\" UMUMIY MASALALAR VA KADRLAR BO'YICHA DIREKTOR O'RINBOSARI",
                'name' => 'Аltinov Suxrab Rustamovich',
                'image' => '/images/altinov.jpg',
                'description' => "
                <h3>“Navoiy kon-metallurgiya kombinati jamg'armasi” davlat muassasasi bosh direktorining umumiy masalalar va kadrlar bo'yicha o'rinbosari.</h3>
                <h4>
                Biografiyasi:
                </h4>
                <p>
                1983-yilda tug'ilgan.
                </p>
                <p>
                2007-yil Jahon iqtisodiyoti va diplomatiyasi universitetini tamomlagan.
                </p>
                <h4>
                Mehnаt fаoliyati:
                </h4>
                <p>
                2007-2021 yy. – “Navoiy kon-metallurgiya kombinati” davlat korxonasi Ijtimoiy rivojlantirish bo'limi muhandisi, oziq-ovqat mahsulotlari bilan ta'minlash bo'yicha guruhi muhandisi.
                </p>
                <p>
                Ijtimoiy rivojlantirish bo'limi boshlig'i o'rinbosari, Ijtimoiy soha ob'yektlari faoliyatini muvofiqlashtirish bo'limi bo'lim boshlig'i.
                </p>
                <p>
                2021 y.-h.v. – “Navoiy kon-metallurgiya kombinati jamg'armasi” davlat muassasasi bosh direktorining umumiy masalalar va kadrlar bo'yicha o'rinbosari.
                </p>",
            ],

            [
                'title' => "\"NKMK JAMG'ARMASI\" BOSH MUHANDISI",
                'name' => 'Ibragimov Аsliddin Аbdiqodirovich',
                'image' => '/images/ibragimov.jpg',
                'description' => "<h3>“Navoiy kon-metallurgiya kombinati jamg'armasi”davlat muassasasi bosh muhandisi.</h3>
                <h4>Biografiyasi:</h4>
                1983-yil tug'ilgan.	
                2008-yil Samarqand davlat arxitektura qurilish institutini tamomlagan. 
                <h4>Mehnаt fаoliyati:</h4>
                <p>
                2002-2004 yy. – Yer munosabatlarini muvofiqlashtirish va kuchmas mulk kadastr bo'limida elektron hisoblash mashinalari operatori.
                </p>
                <p>
                2006-2009 yy. – “Navoiy kon-metallurgiya kombinati” davlat korxonasi Zarafshon qurilish boshqarmasi “Monolit” Qurilish-montaj boshqarmasi betonchisi.
                </p>
                <p>
                2009-2011 yy. – “Navoiy kon-metallurgiya kombinati” davlat korxonasi Markaziy kon boshqarmasi:
                </p>
                <p>
                Uy-joy kommunal boshqarmas iIjtimoiy-madaniy,maishiy ob'yektlarga xizmat ko'rsatish uchastkasi ustasi, katta ustasi, Maktabgacha ta'lim muassasalariga xizmat ko'rsatish va ta'mirlash bo'yicha uchastkasi boshlig'i, 2-son Uy-joydan foydalanish idorasi boshlig'i, Uy-joy kommunal boshqarmasi bosh muhandisi, boshqarma boshlig'i.
                </p>
                <p>
                2016-2017 yy. – “Navoiy kon-metallurgiya kombinati” davlat korxonasi Zarafshon qurilish boshqarmasi smeta-shartnoma bo'limi yetakchi muhandisi.
                </p>
                <p>
                2017-2021 yy. – “Navoiy kon-metallurgiya kombinati” davlat korxonasi Markaziy kon boshqarmasining Uy-joy kommunal boshqarmasi bosh muhandisi, boshqarma boshlig'i, Ijtimoiy ob'yektlar boshqarmasi boshqarma boshlig'i.
                </p>
                <p>
                2021-2021 yy. – “Navoiy kon-metallurgiya kombinati jamg'armasi” davlat muassasasi “Zarafshon” Hududiy boshqarmasi direktor o'rinbosari.
                </p>
                <p>
                2021 y. -h.v. – “Navoiy kon-metallurgiya kombinati jamg'armasi” davlat muassasasi bosh muhandisi.
                </p>",
            ],

            [
                'title' => "\"NKMK JAMG'ARMASI\" XODIMLAR VA TASHKILIY RIVOJLANISH BOSHQARMASI BOSHLIG'I",
                'name' => 'Numonov Maqsud Muminovich',
                'image' => '/images/muminov.jpg',
                'description' => "
                    <h3>“Navoiy kon-metallurgiya kombinati jamg'armasi” davlat muassasasi xodimlar va tashkiliy rivojlanish boshqarmasi boshlig'i.</h3>
                    <h4>
                    Biografiyasi:
                    </h4>
                    <p>
                    1986-yilda tug'ilgan.
                    </p>
                    <p>
                    2008-yil Navoiy davlat pedagogika institutini tamomlagan.
                    </p>
                    <h4>
                    Mehnаt fаoliyati:
                    </h4>
                    <p>
                    2007-2008 yy. –Karmana qishloq xo'jalik kasb-hunar kolleji milliy istiqlol g'oyasi fani o'qituvchisi.
                    </p>
                    <p>
                    2008-2016 yy. –“Navoiy kon-metallurgiya kombinati” davlat korxonasi Uy-joy kommunal boshqarmasi ma'naviyat va ma'rifat ishlari bo'yicha boshqarma inspektori, maktabga cha uslubiy-tarbiyaviy, ma'rifiy ishlar bo'limi ma'naviy-ma'rifiy ishlar bo'icha inspektori, ish yuritish bo'limi ma'naviy-ma'rifiy ishlar bo'yicha muhandisi.
                    </p>
                    <p>
                    2016-2021yy. –“Navoiy kon-metallur giyakombinati” davlatkorxonasiUy-joy kommunalboshqarmasikadrlarbo'limiboshlig'i.
                    2021y.-h.v. –“Navoiy kon-metallur giyakombinati jamg'armasi” davlat muassasasi xodimlar va tashkiliy rivojlanish boshqarmasi boshlig'i.
                    </p>
                ",
            ],
        ]);
    }
}




