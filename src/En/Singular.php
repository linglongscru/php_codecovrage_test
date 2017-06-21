<?php

namespace Inflections\En;

/**
 * Singular English Inflections.
 *
 * To add/or modify, change any of the lists.
 *
 * Encapsulated in a class for ease of understanding,
 * however variables specifically left static and
 * public for now for performance of access.
 *
 *   See https://github.com/doctrine/inflector/blob/master/lib/Doctrine/Common/Inflector/Inflector.php.
 */
class Singular
{
    public static $version = 1;

    public static $rules = [
        '/(s)tatuses$/i' => '\1atus',
        '/^(.*)(menu)s$/i' => '\1\2',
        '/(quiz)zes$/i' => '\1',
        '/(matr)ices$/i' => '\1ix',
        '/(vert|ind)ices$/i' => '\1ex',
        '/^(ox)en/i' => '\1',
        '/(alias)(es)*$/i' => '\1',
        '/(buffal|her|potat|tomat|volcan)oes$/i' => '\1o',
        '/(alumn|bacill|cact|foc|fung|nucle|radi|stimul|syllab|termin|viri?)i$/i' => '\1us',
        '/([ftw]ax)es/i' => '\1',
        '/(analys|ax|cris|test|thes)es$/i' => '\1is',
        '/(shoe|slave)s$/i' => '\1',
        '/(o)es$/i' => '\1',
        '/ouses$/' => 'ouse',
        '/([^a])uses$/' => '\1us',
        '/([m|l])ice$/i' => '\1ouse',
        '/(x|ch|ss|sh)es$/i' => '\1',
        '/(m)ovies$/i' => '\1ovie',
        '/(s)eries$/i' => '\1eries',
        '/([^aeiouy]|qu)ies$/i' => '\1y',
        '/([lr])ves$/i' => '\1f',
        '/(tive)s$/i' => '\1',
        '/(hive)s$/i' => '\1',
        '/(drive)s$/i' => '\1',
        '/([^fo])ves$/i' => '\1fe',
        '/(^analy)ses$/i' => '\1sis',
        '/(analy|diagno|^ba|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/i' => '\1sis',
        '/([ti])a$/i' => '\1um',
        '/(p)eople$/i' => '\1erson',
        '/(m)en$/i' => '\1an',
        '/(c)hildren$/i' => '\1hild',
        '/(f)eet$/i' => '\1oot',
        '/(n)ews$/i' => '\1ews',
        '/eaus$/' => 'eau',
        '/^(.*us)$/' => '\1',
        '/s$/i' => '', ];

    public static $uninflected = [
        '/.*[nrlm]ese$/',
        '/.*deer$/',
        '/.*fish$/',
        '/.*measles$/',
        '/.*ois$/',
        '/.*pox$/',
        '/.*sheep$/',
        '/.*ss$/',
    ];

    public static $irregular = [
        'criteria' => 'criterion',
        'curves' => 'curve',
        'emphases' => 'emphasis',
        'foes' => 'foe',
        'hoaxes' => 'hoax',
        'media' => 'medium',
        'neuroses' => 'neurosis',
        'waves' => 'wave',
        'oases' => 'oasis',
    ];
}
