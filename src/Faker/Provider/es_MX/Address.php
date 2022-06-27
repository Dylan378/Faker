<?php

namespace Faker\Provider\es_MX;

class Address extends \Faker\Provider\Address
{
    protected static $country = array(
        'Afganistán','Albania','Alemania','Andorra','Angola','Antigua y Barbuda','Arabia Saudí','Argelia','Argentina','Armenia','Australia','Austria','Azerbaiyán',
        'Bahamas','Bangladés','Barbados','Baréin','Belice','Benín','Bielorrusia','Birmania','Bolivia','Bosnia-Herzegovina','Botsuana','Brasil','Brunéi Darusalam','Bulgaria','Burkina Faso','Burundi','Bután','Bélgica',
        'Cabo Verde','Camboya','Camerún','Canadá','Catar','Chad','Chile','China','Chipre','Ciudad del Vaticano','Colombia','Comoras','Congo','Corea del Norte','Corea del Sur','Costa Rica','Costa de Marfil','Croacia','Cuba',
        'Dinamarca','Dominica',
        'Ecuador','Egipto','El Salvador','Emiratos Árabes Unidos','Eritrea','Eslovaquia','Eslovenia','España','Estados Unidos de América','Estonia','Etiopía',
        'Filipinas','Finlandia','Fiyi','Francia',
        'Gabón','Gambia','Georgia','Ghana','Granada','Grecia','Guatemala','Guinea','Guinea Ecuatorial','Guinea-Bisáu','Guyana',
        'Haití','Honduras','Hungría',
        'India','Indonesia','Irak','Irlanda','Irán','Islandia','Islas Marshall','Islas Salomón','Israel','Italia',
        'Jamaica','Japón','Jordania',
        'Kazajistán','Kenia','Kirguistán','Kiribati','Kuwait',
        'Laos','Lesoto','Letonia','Liberia','Libia','Liechtenstein','Lituania','Luxemburgo','Líbano',
        'Macedonia','Madagascar','Malasia','Malaui','Maldivas','Mali','Malta','Marruecos','Mauricio','Mauritania','Micronesia','Moldavia','Mongolia','Montenegro','Mozambique','México','Mónaco',
        'Namibia','Nauru','Nepal','Nicaragua','Nigeria','Noruega','Nueva Zelanda','Níger',
        'Omán',
        'Pakistán','Palaos','Panamá','Papúa Nueva Guinea','Paraguay','Países Bajos','Perú','Polonia','Portugal',
        'Reino Unido','Reino Unido de Gran Bretaña e Irlanda del Norte','República Centroafricana','República Checa','República Democrática del Congo','República Dominicana','Ruanda','Rumanía','Rusia',
        'Samoa','San Cristóbal y Nieves','San Marino','San Vicente y las Granadinas','Santa Lucía','Santo Tomé y Príncipe','Senegal','Serbia','Seychelles','Sierra Leona','Singapur','Siria','Somalia','Sri Lanka','Suazilandia','Sudáfrica','Sudán','Suecia','Suiza','Surinam',
        'Tailandia','Tanzania','Tayikistán','Timor Oriental','Togo','Tonga','Trinidad y Tobago','Turkmenistán','Turquía','Tuvalu','Túnez',
        'Ucrania','Uganda','Uruguay','Uzbekistán',
        'Vanuatu','Venezuela','Vietnam',
        'Yemen','Yibuti',
        'Zambia','Zimbabue'
    );
    protected static $state = array(
        'Aguascalientes',
        'Baja California Norte', 'Baja California Sur',
        'Campeche', 'Chiapas', 'Chihuahua', 'Ciudad de México', 'Coahuila',
        'DF', 'Durango',
        'Guanajuato', 'Guerrero',
        'Hidalgo',
        'Jalisco',
        'Michoacán', 'Morelia',
        'Nayarit',
        'Puebla',
        'Queretaro',
        'San Luis Potosí',  'Sinaloa',  'Sonora',
        'Tabasco', 'Tlaxcala',
        'Veracruz',
        'Yucatán',
        'Zacatecas'
    );
    protected static $stateAbbr = array(
        'Ags', 'BC', 'BCS', 'Camp', 'Coah', 'Chih', 'Chis', 'DF', 'CDMX', 'Dgo', 'Gto', 'Gro', 'Hgo', 'Jal', 'Mich', 'Mor', 'Pue', 'Qro', 'Nay', 'SLP', 'Tab', 'Sin', 'Tlax', 'Ver', 'Yac', 'Son'
    );
    protected static $cityPrefix = array('San', 'Puerto', 'Gral', 'Villa', 'Valle');
    protected static $citySuffix = array('Norte', 'Sur', 'de Morelos', 'de Guadalupe', 'de Hidalgo', 'de Jesús', 'del Monte', 'de las Lomas', 'del Puerto');
    protected static $colonyPrefix = array('Col.');
    protected static $streetPrefix = array('Av.', 'Paseo', 'Rotonda', 'Camino');
    protected static $streetNames = array(
        'Adolfo de la Huerta', 'Agustín de Iturbide', 'Álvaro Obregón', 'Anastasio Bustamante', 'Antonio de Mendoza', 'Amado Nervo', 'Aquiles Serdán',
        'Benito Juárez',
        'Carlos María de Bustamante', 'Cuauhtémoc', 'Cuitláhuac',
        'Daniel Cosío Villegas', 'Diego Rivera',
        'Emiliano Zapata', 'Emilio Portes Gil',
        'Felipe Ángeles', 'Félix María Calleja', 'Francisco I Madero', 'Francisco Javier Mina', 'Francisco Villa', 'Frida Kahlo',
        'Gabino Barrera', 'Guadalupe Victoria', 'Guillermo Haro', 'Guillermo Prieto', 'Gustavo Díaz Ordaz',
        'Hermegildo Galeana',
        'Ignacio Allende', 'Ignacio de la Llave', 'Ignacio López Rayón', 'Ignacio Luis Vallarta', 'Ignacio Manual Altamirano', 'Ignacio Zaragoza',
        'Jacinto Canek', 'Jaime Torres Bodet', 'José Clemente Orozco', 'José de Gálvez', 'José Joaquín Fernández de Lizardi', 'José María Arteaga', 'José María Iglesias', 'José María Luis Mora', 'José María Pino Suárez', 'José Yves', 'Josefa Ortiz de Domínguez', 'Juan Aldama', 'Juan Álvarez', 'Juan de Dios Peza', 'Juan Díaz Covarrubias', 'Juan Ruíz de Apodaca', 'Justo Sierra',
        'Lázaro Cárdenas', 'Leona vicario', 'Lucas Alamán',
        'Manuel Ávila Camacho', 'Manuel Gutiérrez Nájera', 'Mariano Abasolo', 'Mariano Jiménez', 'Mariano Matamoros', 'Mariano Paredes Arriaga', 'Melchor Ocampo', 'Miguel Hidalgo', 'Miguel Lerdo de Tejada', 'Moctezuma',
        'Nicolás Bravo',
        'Pascual Orozco', 'Pascual Ortiz Rubio',
        'Ricardo Flores Magón',
        'Salvador Díaz Mirón', 'Sebastián Lerdo de Tejada', 'Sor Juana Inés de la Cruz',
        'Valentín Gómez Farías', 'Vasco de Quiroga', 'Venustiano Carranza', 'Vicente Riva Palacio', 'Vicente Guerrero', 'Victoriano Huerta'
    );
    protected static $buildingNumber = array('####', '###', '##', '#');
    protected static $postcode = array('#####');

    protected static $cityFormats = array(
        '{{cityPrefix}} {{firstName}} {{citySuffix}}',
        '{{cityPrefix}} {{firstName}}',
        '{{cityPrefix}} {{lastName}}',
        '{{firstName}} {{citySuffix}}',
        '{{lastName}} {{citySuffix}}'
    );
    protected static $streetNameFormats = array(
        '{{streetPrefix}} {{firstName}} {{lastName}}',
        '{{streetPrefix}} {{streetNames}}',
        '{{streetNames}}'
    );
    protected static $colonyFormats = array(
        '{{colonyPrefix}} {{firstName}} {{lastName}}',
        '{{colonyPrefix}} {{cityPrefix}} {{firstName}} {{citySuffix}}',
        '{{colonyPrefix}} {{streetName}}'
    );
    protected static $streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}} ',
    );
    protected static $addressFormats = array(
        "{{streetAddress}} {{colony}},  {{postcode}} {{city}}, {{stateAbbr}}"
    );
    
    /**
     * @example 'Aguascalientes'
     */
    public static function state()
    {
        return static::randomElement(static::$state);
    }
    
    /**
     * @example 'Ags'
     */
    public static function stateAbbr()
    {
        return static::randomElement(static::$stateAbbr);
    }
    
    /**
     * @example 'San'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    /**
    * @example 'de Hidalgo'
    */
    public static function citySuffix()
    {
        return static::randomElement(static::$citySuffix);
    }
    
    
    /**
     * @example 'Av.'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }
    
    /**
     * @example 'Benito Juárez'
     */
    public static function streetNames()
    {
        return static::randomElement(static::$streetNames);
    }
}
