<?php

namespace Inflections\En;

/**
 * English Plural Inflections
 *   See https://en.wikipedia.org/wiki/English_plurals
 *   See https://github.com/doctrine/inflector/blob/master/lib/Doctrine/Common/Inflector/Inflector.php.
 */
class Plural
{
    public static $version = 1;

    public static $rules = [
        '/(s)tatus$/i' => '\1tatuses',
        '/(quiz)$/i' => '\1zes',
        '/([m|l])ouse$/i' => '\1ice',
        '/(matr|vert|ind)(ix|ex)$/i' => '\1ices',
        '/(x|ch|ss|sh)$/i' => '\1es',
        '/([^aeiouy]|qu)y$/i' => '\1ies',
        '/(hive)$/i' => '\1s',
        '/(?:([^f])fe|([lr])f)$/i' => '\1\2ves',
        '/(shea|lea|loa|thie)f$/i' => '\1ves',
        '/sis$/i' => 'ses',
        '/([ti])um$/i' => '\1a',
        '/(p)erson$/i' => '\1eople',
        '/(m)an$/i' => '\1en',
        '/(c)hild$/i' => '\1hildren',
        '/(f)oot$/i' => '\1eet',
        '/(buffal|ech|her|potat|tomat|volcan|vet)o$/i' => '\1oes',
        '/(alumn|bacill|cact|foc|fung|nucle|radi|stimul|syllab|termin|vir)us$/i' => '\1i',
        '/us$/i' => 'uses',
        '/(alias)$/i' => '\1es',
        '/(analys|ax|cris|test|thes)is$/i' => '\1es',
        '/s$/' => 's',
        '/^$/' => '',
        '/$/' => 's', ];

    public static $uninflected = [
        '/.*[nrlm]ese$/',
        '/.*deer$/',
        '/.*fish$/',
        '/.*measles$/',
        '/.*ois$/',
        '/.*pox$/',
        '/.*sheep$/',
        '/people$/',
        '/cookie$/', ];

    public static $irregular = [
        'automaton' => 'automata',
        'atlas' => 'atlases',
        'axe' => 'axes',
        'beef' => 'beefs',
        'brother' => 'brothers',
        'cafe' => 'cafes',
        'cello' => 'celli',
        'chateau' => 'chateaux',
        'cherub' => 'cherubim',
        'child' => 'children',
        'cookie' => 'cookies',
        'cow' => 'cows',
        'criterion' => 'criteria',
        'corrigendum' => 'corrigenda',
        'curriculum' => 'curricula',
        'demo' => 'demos',
        'domino' => 'dominoes',
        'dormouse' => 'dormice',
        'ganglion' => 'ganglions',
        'genie' => 'genies',
        'genus' => 'genera',
        'goose' => 'geese',
        'graffito' => 'graffiti',
        'hippopotamus' => 'hippopotami',
        'hoof' => 'hoofs',
        'human' => 'humans',
        'iris' => 'irises',
        'man' => 'men',
        'medium' => 'media',
        'memorandum' => 'memoranda',
        'money' => 'monies',
        'mongoose' => 'mongooses',
        'motto' => 'mottoes',
        'move' => 'moves',
        'mythos' => 'mythoi',
        'niche' => 'niches',
        'numen' => 'numina',
        'occiput' => 'occiputs',
        'octopus' => 'octopuses',
        'opus' => 'opuses',
        'ovum' => 'ova',
        'ox' => 'oxen',
        'person' => 'people',
        'plateau' => 'plateaux',
        'phalanx' => 'phalanges',
        'phenomenon' => 'phenomena',
        'polyhedron' => 'polyhedra',
        'refferendum' => 'refferendums', // https://www.merriam-webster.com/dictionary/referendum
        'runner-up' => 'runners-up',
        'seraph' => 'seraphim',
        'sex' => 'sexes',
        'soliloquy' => 'soliloquies',
        'son-in-law' => 'sons-in-law',
        'tooth' => 'teeth',
        'tornado' => 'tornadoes',
        'trilby' => 'trilbys',
        'turf' => 'turfs',
        'viscus' => 'vicera',
        'volcano' => 'volcanoes',
        'woman' => 'women',
        'zombie' => 'zombies', ];
}
