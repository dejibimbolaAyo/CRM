<?php
namespace ChurchCRM\data;
use ChurchCRM\data\Country;
use Yasumi\Provider;

class Countries
{
    private static $countries;
    
    private static function initializeCountries() {
      self::$countries = array(
        'AF' => new Country('AF','Afghanistan (‫افغانستان‬‎)'),
        'AX' => new Country('AX','Åland Islands (Åland)'),
        'AL' => new Country('AL','Albania (Shqipëri)'),
        'DZ' => new Country('DZ','Algeria (‫الجزائر‬‎)'),
        'AS' => new Country('AS','American Samoa'),
        'AD' => new Country('AD','Andorra'),
        'AO' => new Country('AO','Angola'),
        'AI' => new Country('AI','Anguilla'),
        'AQ' => new Country('AQ','Antarctica'),
        'AG' => new Country('AG','Antigua and Barbuda'),
        'AR' => new Country('AR','Argentina'),
        'AM' => new Country('AM','Armenia (Հայաստան)'),
        'AW' => new Country('AW','Aruba'),
        'AC' => new Country('AC','Ascension Island'),
        'AU' => new Country('AU','Australia','Australia'),
        'AT' => new Country('AT','Austria (Österreich)','Austria'),
        'AZ' => new Country('AZ','Azerbaijan (Azərbaycan)'),
        'BS' => new Country('BS','Bahamas'),
        'BH' => new Country('BH','Bahrain (‫البحرين‬‎)'),
        'BD' => new Country('BD','Bangladesh (বাংলাদেশ)'),
        'BB' => new Country('BB','Barbados'),
        'BY' => new Country('BY','Belarus (Беларусь)'),
        'BE' => new Country('BE','Belgium (België)','Belgium'),
        'BZ' => new Country('BZ','Belize'),
        'BJ' => new Country('BJ','Benin (Bénin)'),
        'BM' => new Country('BM','Bermuda'),
        'BT' => new Country('BT','Bhutan (འབྲུག)'),
        'BO' => new Country('BO','Bolivia'),
        'BA' => new Country('BA','Bosnia and Herzegovina (Босна и Херцеговина)','Bosnia'),
        'BW' => new Country('BW','Botswana'),
        'BV' => new Country('BV','Bouvet Island'),
        'BR' => new Country('BR','Brazil (Brasil)','Brazil'),
        'IO' => new Country('IO','British Indian Ocean Territory'),
        'VG' => new Country('VG','British Virgin Islands'),
        'BN' => new Country('BN','Brunei'),
        'BG' => new Country('BG','Bulgaria (България)'),
        'BF' => new Country('BF','Burkina Faso'),
        'BI' => new Country('BI','Burundi (Uburundi)'),
        'KH' => new Country('KH','Cambodia (កម្ពុជា)'),
        'CM' => new Country('CM','Cameroon (Cameroun)'),
        'CA' => new Country('CA','Canada'),
        'IC' => new Country('IC','Canary Islands (islas Canarias)'),
        'CV' => new Country('CV','Cape Verde (Kabu Verdi)'),
        'BQ' => new Country('BQ','Caribbean Netherlands'),
        'KY' => new Country('KY','Cayman Islands'),
        'CF' => new Country('CF','Central African Republic (République centrafricaine)'),
        'EA' => new Country('EA','Ceuta and Melilla (Ceuta y Melilla)'),
        'TD' => new Country('TD','Chad (Tchad)'),
        'CL' => new Country('CL','Chile'),
        'CN' => new Country('CN','China (中国)'),
        'CX' => new Country('CX','Christmas Island'),
        'CP' => new Country('CP','Clipperton Island'),
        'CC' => new Country('CC','Cocos (Keeling) Islands (Kepulauan Cocos (Keeling))'),
        'CO' => new Country('CO','Colombia'),
        'KM' => new Country('KM','Comoros (‫جزر القمر‬‎)'),
        'CD' => new Country('CD','Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)'),
        'CG' => new Country('CG','Congo (Republic) (Congo-Brazzaville)'),
        'CK' => new Country('CK','Cook Islands'),
        'CR' => new Country('CR','Costa Rica'),
        'CI' => new Country('CI','Côte d’Ivoire'),
        'HR' => new Country('HR','Croatia (Hrvatska)','Croatia'),
        'CU' => new Country('CU','Cuba'),
        'CW' => new Country('CW','Curaçao'),
        'CY' => new Country('CY','Cyprus (Κύπρος)'),
        'CZ' => new Country('CZ','Czech Republic (Česká republika)','CzechRepublic'),
        'DK' => new Country('DK','Denmark (Danmark)','Denmark'),
        'DG' => new Country('DG','Diego Garcia'),
        'DJ' => new Country('DJ','Djibouti'),
        'DM' => new Country('DM','Dominica'),
        'DO' => new Country('DO','Dominican Republic (República Dominicana)'),
        'EC' => new Country('EC','Ecuador'),
        'EG' => new Country('EG','Egypt (‫مصر‬‎)'),
        'SV' => new Country('SV','El Salvador'),
        'GQ' => new Country('GQ','Equatorial Guinea (Guinea Ecuatorial)'),
        'ER' => new Country('ER','Eritrea'),
        'EE' => new Country('EE','Estonia (Eesti)','Estonia'),
        'ET' => new Country('ET','Ethiopia'),
        'FK' => new Country('FK','Falkland Islands (Islas Malvinas)'),
        'FO' => new Country('FO','Faroe Islands (Føroyar)'),
        'FJ' => new Country('FJ','Fiji'),
        'FI' => new Country('FI','Finland (Suomi)','Finland'),
        'FR' => new Country('FR','France','France'),
        'GF' => new Country('GF','French Guiana (Guyane française)'),
        'PF' => new Country('PF','French Polynesia (Polynésie française)'),
        'TF' => new Country('TF','French Southern Territories (Terres australes françaises)'),
        'GA' => new Country('GA','Gabon'),
        'GM' => new Country('GM','Gambia'),
        'GE' => new Country('GE','Georgia (საქართველო)'),
        'DE' => new Country('DE','Germany (Deutschland)','Germany'),
        'GH' => new Country('GH','Ghana (Gaana)'),
        'GI' => new Country('GI','Gibraltar'),
        'GR' => new Country('GR','Greece (Ελλάδα)','Greece'),
        'GL' => new Country('GL','Greenland (Kalaallit Nunaat)'),
        'GD' => new Country('GD','Grenada'),
        'GP' => new Country('GP','Guadeloupe'),
        'GU' => new Country('GU','Guam'),
        'GT' => new Country('GT','Guatemala'),
        'GG' => new Country('GG','Guernsey'),
        'GN' => new Country('GN','Guinea (Guinée)'),
        'GW' => new Country('GW','Guinea-Bissau (Guiné Bissau)'),
        'GY' => new Country('GY','Guyana'),
        'HT' => new Country('HT','Haiti'),
        'HM' => new Country('HM','Heard & McDonald Islands'),
        'HN' => new Country('HN','Honduras'),
        'HK' => new Country('HK','Hong Kong (香港)'),
        'HU' => new Country('HU','Hungary (Magyarország)','Hungary'),
        'IS' => new Country('IS','Iceland (Ísland)'),
        'IN' => new Country('IN','India (भारत)'),
        'ID' => new Country('ID','Indonesia'),
        'IR' => new Country('IR','Iran (‫ایران‬‎)'),
        'IQ' => new Country('IQ','Iraq (‫العراق‬‎)'),
        'IE' => new Country('IE','Ireland','Ireland'),
        'IM' => new Country('IM','Isle of Man'),
        'IL' => new Country('IL','Israel (‫ישראל‬‎)'),
        'IT' => new Country('IT','Italy (Italia)','Italy'),
        'JM' => new Country('JM','Jamaica'),
        'JP' => new Country('JP','Japan (日本)','Japan'),
        'JE' => new Country('JE','Jersey'),
        'JO' => new Country('JO','Jordan (‫الأردن‬‎)'),
        'KZ' => new Country('KZ','Kazakhstan (Казахстан)'),
        'KE' => new Country('KE','Kenya'),
        'KI' => new Country('KI','Kiribati'),
        'XK' => new Country('XK','Kosovo (Kosovë)'),
        'KW' => new Country('KW','Kuwait (‫الكويت‬‎)'),
        'KG' => new Country('KG','Kyrgyzstan (Кыргызстан)'),
        'LA' => new Country('LA','Laos (ລາວ)'),
        'LV' => new Country('LV','Latvia (LatvijaLatviaLV'),
        'LB' => new Country('LB','Lebanon (‫لبنان‬‎)'),
        'LS' => new Country('LS','Lesotho'),
        'LR' => new Country('LR','Liberia'),
        'LY' => new Country('LY','Libya (‫ليبيا‬‎)'),
        'LI' => new Country('LI','Liechtenstein'),
        'LT' => new Country('LT','Lithuania (Lietuva)','Netherlands'),
        'LU' => new Country('LU','Luxembourg'),
        'MO' => new Country('MO','Macau (澳門)'),
        'MK' => new Country('MK','Macedonia (FYROM) (Македонија)'),
        'MG' => new Country('MG','Madagascar (Madagasikara)'),
        'MW' => new Country('MW','Malawi'),
        'MY' => new Country('MY','Malaysia'),
        'MV' => new Country('MV','Maldives'),
        'ML' => new Country('ML','Mali'),
        'MT' => new Country('MT','Malta'),
        'MH' => new Country('MH','Marshall Islands'),
        'MQ' => new Country('MQ','Martinique'),
        'MR' => new Country('MR','Mauritania (‫موريتانيا‬‎)'),
        'MU' => new Country('MU','Mauritius (Moris)'),
        'YT' => new Country('YT','Mayotte'),
        'MX' => new Country('MX','Mexico (México)'),
        'FM' => new Country('FM','Micronesia'),
        'MD' => new Country('MD','Moldova (Republica Moldova)'),
        'MC' => new Country('MC','Monaco'),
        'MN' => new Country('MN','Mongolia (Монгол)'),
        'ME' => new Country('ME','Montenegro (Crna Gora)'),
        'MS' => new Country('MS','Montserrat'),
        'MA' => new Country('MA','Morocco (‫المغرب‬‎)'),
        'MZ' => new Country('MZ','Mozambique (Moçambique)'),
        'MM' => new Country('MM','Myanmar (Burma) (မြန်မာ)'),
        'NA' => new Country('NA','Namibia (Namibië)'),
        'NR' => new Country('NR','Nauru'),
        'NP' => new Country('NP','Nepal (नेपाल)'),
        'NL' => new Country('NL','Netherlands (Nederland)','Netherlands'),
        'NC' => new Country('NC','New Caledonia (Nouvelle-Calédonie)'),
        'NZ' => new Country('NZ','New Zealand','NewZealand'),
        'NI' => new Country('NI','Nicaragua'),
        'NE' => new Country('NE','Niger (Nijar)'),
        'NG' => new Country('NG','Nigeria'),
        'NU' => new Country('NU','Niue'),
        'NF' => new Country('NF','Norfolk Island'),
        'MP' => new Country('MP','Northern Mariana Islands'),
        'KP' => new Country('KP','North Korea (조선 민주주의 인민 공화국)'),
        'NO' => new Country('NO','Norway (Norge)','Norway'),
        'OM' => new Country('OM','Oman (‫عُمان‬‎)'),
        'PK' => new Country('PK','Pakistan (‫پاکستان‬‎)'),
        'PW' => new Country('PW','Palau'),
        'PS' => new Country('PS','Palestine (‫فلسطين‬‎)'),
        'PA' => new Country('PA','Panama (Panamá)'),
        'PG' => new Country('PG','Papua New Guinea'),
        'PY' => new Country('PY','Paraguay'),
        'PE' => new Country('PE','Peru (Perú)'),
        'PH' => new Country('PH','Philippines'),
        'PN' => new Country('PN','Pitcairn Islands'),
        'PL' => new Country('PL','Poland (Polska)','Poland'),
        'PT' => new Country('PT','Portugal','Portugal'),
        'PR' => new Country('PR','Puerto Rico'),
        'QA' => new Country('QA','Qatar (‫قطر‬‎)'),
        'RE' => new Country('RE','Réunion (La Réunion)'),
        'RO' => new Country('RO','Romania (România)','Romania'),
        'RU' => new Country('RU','Russia (Россия)','Russia'),
        'RW' => new Country('RW','Rwanda'),
        'BL' => new Country('BL','Saint Barthélemy (Saint-Barthélemy)'),
        'SH' => new Country('SH','Saint Helena'),
        'KN' => new Country('KN','Saint Kitts and Nevis'),
        'LC' => new Country('LC','Saint Lucia'),
        'MF' => new Country('MF','Saint Martin (Saint-Martin (partie française))'),
        'PM' => new Country('PM','Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)'),
        'WS' => new Country('WS','Samoa'),
        'SM' => new Country('SM','San Marino'),
        'ST' => new Country('ST','São Tomé and Príncipe (São Tomé e Príncipe)'),
        'SA' => new Country('SA','Saudi Arabia (‫المملكة العربية السعودية‬‎)'),
        'SN' => new Country('SN','Senegal (Sénégal)'),
        'RS' => new Country('RS','Serbia (Србија)'),
        'SC' => new Country('SC','Seychelles'),
        'SL' => new Country('SL','Sierra Leone'),
        'SG' => new Country('SG','Singapore'),
        'SX' => new Country('SX','Sint Maarten'),
        'SK' => new Country('SK','Slovakia (Slovensko)','Slovakia'),
        'SI' => new Country('SI','Slovenia (Slovenija)','Slovakia'),
        'SB' => new Country('SB','Solomon Islands'),
        'SO' => new Country('SO','Somalia (Soomaaliya)'),
        'ZA' => new Country('ZA','South Africa','SouthAfrica'),
        'GS' => new Country('GS','South Georgia & South Sandwich Islands'),
        'KR' => new Country('KR','South Korea (대한민국)'),
        'SS' => new Country('SS','South Sudan (‫جنوب السودان‬‎)'),
        'ES' => new Country('ES','Spain (España)','Spain'),
        'LK' => new Country('LK','Sri Lanka (ශ්‍රී ලංකාව)'),
        'VC' => new Country('VC','St. Vincent & Grenadines'),
        'SD' => new Country('SD','Sudan (‫السودان‬‎)'),
        'SR' => new Country('SR','Suriname'),
        'SJ' => new Country('SJ','Svalbard and Jan Mayen (Svalbard og Jan Mayen)'),
        'SZ' => new Country('SZ','Swaziland'),
        'SE' => new Country('SE','Sweden (Sverige)','Sweden'),
        'CH' => new Country('CH','Switzerland (Schweiz)','Switzerland'),
        'SY' => new Country('SY','Syria (‫سوريا‬‎)'),
        'TW' => new Country('TW','Taiwan (台灣)'),
        'TJ' => new Country('TJ','Tajikistan'),
        'TZ' => new Country('TZ','Tanzania'),
        'TH' => new Country('TH','Thailand (ไทย)'),
        'TL' => new Country('TL','Timor-Leste'),
        'TG' => new Country('TG','Togo'),
        'TK' => new Country('TK','Tokelau'),
        'TO' => new Country('TO','Tonga'),
        'TT' => new Country('TT','Trinidad and Tobago'),
        'TA' => new Country('TA','Tristan da Cunha'),
        'TN' => new Country('TN','Tunisia (‫تونس‬‎)'),
        'TR' => new Country('TR','Turkey (Türkiye)'),
        'TM' => new Country('TM','Turkmenistan'),
        'TC' => new Country('TC','Turks and Caicos Islands'),
        'TV' => new Country('TV','Tuvalu'),
        'UM' => new Country('UM','U.S. Outlying Islands','USA'),
        'VI' => new Country('VI','U.S. Virgin Islands','USA'),
        'UG' => new Country('UG','Uganda'),
        'UA' => new Country('UA','Ukraine (Україна)','Ukraine'),
        'AE' => new Country('AE','United Arab Emirates (‫الإمارات العربية المتحدة‬‎)'),
        'GB' => new Country('GB','United Kingdom','UnitedKingdom'),
        'US' => new Country('US','United States','USA'),
        'UY' => new Country('UY','Uruguay'),
        'UZ' => new Country('UZ','Uzbekistan (Oʻzbekiston)'),
        'VU' => new Country('VU','Vanuatu'),
        'VA' => new Country('VA','Vatican City (Città del Vaticano)'),
        'VE' => new Country('VE','Venezuela'),
        'VN' => new Country('VN','Vietnam (Việt Nam)'),
        'WF' => new Country('WF','Wallis and Futuna'),
        'EH' => new Country('EH','Western Sahara (‫الصحراء الغربية‬‎)'),
        'YE' => new Country('YE','Yemen (‫اليمن‬‎)'),
        'ZM' => new Country('ZM','Zambia'),
        'ZW' => new Country('ZW','Zimbabwe')
      );
    } 
    private static function getSingleName(Country $Country)
    {
      return $Country->getCountryName();
    }

    public static function getNames()
    {
      self::initializeCountries();
      return array_map(array("self","getSingleName"),self::$countries);
    }

    public static function getAll()
    {
      self::initializeCountries();
      return self::$countries;
    }
    
    public static function getCountry(string $CountryCode)
    {
      self::initializeCountries();
      return self::$countries[$CountryCode];
    }

    
    public static function getCountryByName(string $CountryName)
    {
      if (empty($CountryName))
      {
        return null;
      }
      self::initializeCountries();
      $result =  array_filter(self::$countries,function ($e) use ($CountryName) {
        return $e->getCountryName() === $CountryName;
      });
      if (count($result) === 1 )
      {
       return current($result); 
      }
      throw new \Exception(gettext("Invalid country name supplied"));
    }
}
