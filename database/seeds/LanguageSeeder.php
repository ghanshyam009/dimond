<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\language;
use Illuminate\Support\Facades\DB;
class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->truncate();
         $languages = [
            [
                'id'         => 1,
                'name'      => 'English',
            ],
            [
                'id'         => 2,
                'name'      => 'Afar',
            ],
            [
                'id'         => 3,
                'name'      => 'Abkhazian',
            ],
            [
                'id'         => 4,
                'name'      => 'Afrikaans',
            ],
            [
                'id'         => 5,
                'name'      => 'Amharic',
            ],
            [
                'id'         => 6,
                'name'      => 'Arabic',
            ],
                 [
                'id'         => 7,
                'name'      => 'Assamese',
            ],
            [
                'id'         => 8,
                'name'      => 'Aymara',
            ],
            [
                'id'         => 9,
                'name'      => 'Azerbaijani',
            ],
            [
                'id'         => 10,
                'name'      => 'Bashkir',
            ],
            [
                'id'         => 11,
                'name'      => 'Belarusian',
            ],
            [
                'id'         => 12,
                'name'      => 'Bulgarian',
            ],
                 [
                'id'         => 13,
                'name'      => 'Bihari',
            ],
            [
                'id'         => 14,
                'name'      => 'Bislama',
            ],
            [
                'id'         => 15,
                'name'      => 'Bengali/Bangla',
            ],
            [
                'id'         => 16,
                'name'      => 'Tibetan',
            ],
            [
                'id'         => 17,
                'name'      => 'Breton',
            ],
            [
                'id'         => 18,
                'name'      => 'Catalan',
            ],
                 [
                'id'         => 19,
                'name'      => 'Corsican',
            ],
            [
                'id'         => 20,
                'name'      => 'Czech',
            ],
            [
                'id'         => 21,
                'name'      => 'Welsh',
            ],
            [
                'id'         => 22,
                'name'      => 'Danish',
            ],
            [
                'id'         => 23,
                'name'      => 'German',
            ],
            [
                'id'         => 24,
                'name'      => 'Bhutani',
            ],
                 [
                'id'         => 25,
                'name'      => 'Greek',
            ],
            [
                'id'         => 26,
                'name'      => 'Esperanto',
            ],
            [
                'id'         => 27,
                'name'      => 'Spanish',
            ],
            [
                'id'         => 28,
                'name'      => 'Estonian',
            ],
            [
                'id'         => 29,
                'name'      => 'Basque',
            ],
            [
                'id'         => 30,
                'name'      => 'Persian',
            ],
             [
                'id'         => 31,
                'name'      => 'Finnish',
            ],
            [
                'id'         => 32,
                'name'      => 'Fiji',
            ],
            [
                'id'         => 33,
                'name'      => 'Faeroese',
            ],
            [
                'id'         => 34,
                'name'      => 'French',
            ],
            [
                'id'         => 35,
                'name'      => 'Frisian',
            ],
            [
                'id'         => 36,
                'name'      => 'Irish',
            ],
                 [
                'id'         =>37,
                'name'      => 'Scots/Gaelic',
            ],
            [
                'id'         => 38,
                'name'      => 'Galician',
            ],
            [
                'id'         => 39,
                'name'      => 'Guarani',
            ],
            [
                'id'         => 40,
                'name'      => 'Gujarati',
            ],
            [
                'id'         => 41,
                'name'      => 'Hausa',
            ],
            [
                'id'         => 42,
                'name'      => 'Hindi',
            ],
                 [
                'id'         => 43,
                'name'      => 'Croatian',
            ],
            [
                'id'         => 44,
                'name'      => 'Hungarian',
            ],
            [
                'id'         => 45,
                'name'      => 'Armenian',
            ],
            [
                'id'         => 46,
                'name'      => 'Interlingua',
            ],
            [
                'id'         => 47,
                'name'      => 'Interlingue',
            ],
            [
                'id'         => 48,
                'name'      => 'Inupiak',
            ],
                 [
                'id'         => 49,
                'name'      => 'Indonesian',
            ],
            [
                'id'         => 50,
                'name'      => 'Icelandic',
            ],
            [
                'id'         => 51,
                'name'      => 'Italian',
            ],
            [
                'id'         => 52,
                'name'      => 'Hebrew',
            ],
            [
                'id'         => 53,
                'name'      => 'Japanese',
            ],
            [
                'id'         => 54,
                'name'      => 'Yiddish',
            ],
                 [
                'id'         => 55,
                'name'      => 'Javanese',
            ],
            [
                'id'         => 56,
                'name'      => 'Georgian',
            ],
            [
                'id'         => 57,
                'name'      => 'Kazakh',
            ],
            [
                'id'         => 58,
                'name'      => 'Greenlandic',
            ],
            [
                'id'         => 59,
                'name'      => 'Cambodian',
            ],
            [
                'id'         => 60,
                'name'      => 'Kannada',
            ],
             [
                'id'         => 61,
                'name'      => 'Korean',
            ],
            [
                'id'         => 62,
                'name'      => 'Kashmiri',
            ],
            [
                'id'         => 63,
                'name'      => 'Kurdish',
            ],
            [
                'id'         => 64,
                'name'      => 'Kirghiz',
            ],
            [
                'id'         => 65,
                'name'      => 'Latin',
            ],
            [
                'id'         => 66,
                'name'      => 'Lingala',
            ],
                 [
                'id'         => 67,
                'name'      => 'Laothian',
            ],
            [
                'id'         => 68,
                'name'      => 'Lithuanian',
            ],
            [
                'id'         => 69,
                'name'      => 'Latvian/Lettish',
            ],
            [
                'id'         => 70,
                'name'      => 'Malagasy',
            ],
            [
                'id'         => 71,
                'name'      => 'Malagasy',
            ],
            [
                'id'         => 72,
                'name'      => 'Macedonian',
            ],
                 [
                'id'         => 73,
                'name'      => 'Malayalam',
            ],
            [
                'id'         => 74,
                'name'      => 'Mongolian',
            ],
            [
                'id'         => 75,
                'name'      => 'Moldavian',
            ],
            [
                'id'         => 76,
                'name'      => 'TibetanMarathi',
            ],
            [
                'id'         => 77,
                'name'      => 'Malay',
            ],
            [
                'id'         => 78,
                'name'      => 'Maltese',
            ],
                 [
                'id'         => 79,
                'name'      => 'Burmese',
            ],
            [
                'id'         => 80,
                'name'      => 'Nauru',
            ],
            [
                'id'         => 81,
                'name'      => 'Nepali',
            ],
            [
                'id'         => 82,
                'name'      => 'Dutch',
            ],
            [
                'id'         => 83,
                'name'      => 'Norwegian',
            ],
            [
                'id'         => 84,
                'name'      => 'Occitan',
            ],
                 [
                'id'         => 85,
                'name'      => '(Afan)/Oromoor/Oriya',
            ],
            [
                'id'         => 86,
                'name'      => 'Punjabi',
            ],
            [
                'id'         => 87,
                'name'      => 'Polish',
            ],
            [
                'id'         => 88,
                'name'      => 'Pashto/Pushto',
            ],
            [
                'id'         => 89,
                'name'      => 'Portuguese',
            ],
            [
                'id'         => 90,
                'name'      => 'Quechua',
            ],
             [
                'id'         => 91,
                'name'      => 'Rhaeto-Romance',
            ],
            [
                'id'         => 92,
                'name'      => 'Kirundi',
            ],
            [
                'id'         => 93,
                'name'      => 'Romanian',
            ],
            [
                'id'         => 94,
                'name'      => 'Russian',
            ],
            [
                'id'         => 95,
                'name'      => 'Kinyarwanda',
            ],
            [
                'id'         => 96,
                'name'      => 'Sanskrit',
            ],
                 [
                'id'         =>97,
                'name'      => 'Sindhi',
            ],
            [
                'id'         => 98,
                'name'      => 'Sangro',
            ],
            [
                'id'         => 99,
                'name'      => 'Serbo-Croatian',
            ],
            [
                'id'         => 100,
                'name'      => 'Singhalese',
            ],
            [
                'id'         => 101,
                'name'      => 'Slovak',
            ],
            [
                'id'         => 102,
                'name'      => 'Slovenian',
            ],
                 [
                'id'         => 103,
                'name'      => 'Samoan',
            ],
            [
                'id'         => 104,
                'name'      => 'Shona',
            ],
            [
                'id'         => 105,
                'name'      => 'Somali',
            ],
            [
                'id'         => 106,
                'name'      => 'Albanian',
            ],
            [
                'id'         => 107,
                'name'      => 'Serbian',
            ],
            [
                'id'         => 108,
                'name'      => 'Siswati',
            ],
                 [
                'id'         => 109,
                'name'      => 'Sesotho',
            ],
            [
                'id'         => 110,
                'name'      => 'Sundanese',
            ],
            [
                'id'         => 111,
                'name'      => 'Swedish',
            ],
            [
                'id'         => 112,
                'name'      => 'Swahili',
            ],
            [
                'id'         => 113,
                'name'      => 'Tamil',
            ],
            [
                'id'         => 114,
                'name'      => 'Telugu',
            ],
                 [
                'id'         => 115,
                'name'      => 'Tajik',
            ],
            [
                'id'         => 116,
                'name'      => 'Thai',
            ],
            [
                'id'         => 117,
                'name'      => 'Tigrinya',
            ],
            [
                'id'         => 118,
                'name'      => 'Turkmen',
            ],
            [
                'id'         => 119,
                'name'      => 'Tagalog',
            ],
            [
                'id'         => 120,
                'name'      => 'Setswana',
            ],
                  [
                'id'         => 121,
                'name'      => 'Tonga',
            ],
            [
                'id'         => 122,
                'name'      => 'Turkish',
            ],
            [
                'id'         => 123,
                'name'      => 'Tsonga',
            ],
            [
                'id'         => 124,
                'name'      => 'Tatar',
            ],
            [
                'id'         => 125,
                'name'      => 'Twi',
            ],
            [
                'id'         => 126,
                'name'      => 'Ukrainian',
            ],
                 [
                'id'         => 127,
                'name'      => 'Urdu',
            ],
            [
                'id'         => 128,
                'name'      => 'Uzbek',
            ],
            [
                'id'         => 129,
                'name'      => 'Vietnamese',
            ],
            [
                'id'         => 130,
                'name'      => 'Volapuk',
            ],
            [
                'id'         => 131,
                'name'      => 'Wolof',
            ],
            [
                'id'         => 132,
                'name'      => 'Xhosa',
            ],
             [
                'id'         => 133,
                'name'      => 'Yoruba',
            ],
            [
                'id'         => 134,
                'name'      => 'Chinese',
            ],
            [
                'id'         => 135,
                'name'      => 'Zulu',
            ],
            
        ];
        language::insert($languages);
    }
}