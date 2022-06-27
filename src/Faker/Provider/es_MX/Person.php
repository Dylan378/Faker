<?php

namespace Faker\Provider\es_MX;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}} {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastName}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{firstNameMale}} {{lastName}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}} {{lastName}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastName}} {{lastName}}',
    );

    protected static $firstNameMale = array(
        'Aarón', 'Adrián', 'Agustín', 'Alan', 'Alejandro', 'Alex', 'Alexander', 'Alonso', 'Alfonso', 'Andrés', 'Antonio', 'Axel',
        'Benjamín', 'Bruno',
        'Carlos', 'Christian', 'Christopher', 'Cristóbal', 'César',
        'Damián', 'Daniel', 'Dante', 'David', 'Diego', 'Dylan',
        'Enrique', 'Eduardo', 'Elías', 'Emiliano', 'Emilio', 'Emmanuel', 'Esteban',
        'Felipe', 'Fernando', 'Francisco', 'Franco', 'Fabián', 'Flavio',
        'Gabriel', 'Gael', 'Gustavo',
        'Heverardo', 'Horacio', 'Hugo', 'Héctor',
        'Ian', 'Ignacio', 'Isaac', 'Ivan',
        'Jacob', 'Javier', 'Jesús', 'Joaquín', 'Jorge', 'Joshua', 'Josué', 'José', 'Jorge', 'Juan', 'Juan David', 'Juan Diego', 'Juan José', 'Juan Manuel', 'Juan Martín', 'Julián',
        'Kevin',
        'Leonardo', 'Lucas', 'Luciano', 'Luis',
        'Manuel', 'Mario', 'Martín', 'Mateo', 'Matías', 'Maximiliano', 'Miguel',
        'Natanael', 'Nelson',
        'Pablo', 'Pedro',
        'Rafael', 'Ricardo', 'Rodrigo', 'Ramón', 'Rigoberto',
        'Samuel', 'Santiago', 'Sebastián', 'Sergio', 'Simón',
        'Tadeo', 'Tomás',
        'Valentino', 'Valentín', 'Vicente'
    );

    protected static $firstNameFemale = array(
        'Abigail', 'Abril', 'Adriana', 'Alejandra', 'Alexandra', 'Alexa', 'Alfonsina', 'Alison', 'Alma', 'Amanda', 'Amelia', 'Ana', 'Angela', 'Anna', 'Ana Sofía', 'Andrea', 'Ariana', 'Aridana', 'Ashley',
        'Bianca', 'Blanca', 'Beatriz',
        'Camila', 'Carla', 'Carolina', 'Catalina', 'Consuelo', 'Clara',
        'Daniela', 'Diana',
        'Elena', 'Elizabeth', 'Emma', 'Estefianía',
        'Fátima', 'Fabiola', 'Fernanda', 'Francisca',
        'Gabriela', 'Guadalupe',
        'Irene', 'Isabel', 'Isabella', 'Imelda', 'Ilda',
        'Jazmín', 'Josefa', 'Josefina', 'Juana', 'Julia', 'Julieta', 'Juana', 'Juliana', 'Julina', 'Jimena',
        'Laura', 'Lola', 'Luciana', 'Lucía', 'Luna', 'Lizbeth', 'Leonarda',
        'Magdalena', 'Maité', 'Maleni', 'Mariana', 'Martina', 'María', 'María Alejandra', 'María Camila', 'María del Carmen', 'María Fernanda', 'María José', 'María Paula', 'Micaela', 'Michelle', 'Miranda', 'Montserrat', 'Mía',
        'Nadia', 'Nancy', 'Natalia', 'Nicole',
        'Oliva', 'Olivia', 'Ornela',
        'Paula', 'Paulina',
        'Rafaela', 'Rebeca', 'Regina', 'Renata',
        'Salomé', 'Samantha', 'Sara', 'Silvana ', 'Sofía', 'Sophie',
        'Valentina', 'Valeria', 'Violeta', 'Victoria',
        'Ximena',
        'Zoe', 'Zara'
    );

    protected static $lastName = array(
        'Acevedo', 'Acosta', 'Acuña', 'Aguayo', 'Aguilar', 'Aguilera', 'Aguirre', 'Alaniz', 'Alba', 'Alcántara', 'Alcaraz', 'Alemán', 'Alfaro', 'Allera', 'Almonte', 'Alonso', 'Alonzo', 'Altamirano', 'Alva', 'Alvarado', 'Álvarez', 'Amador', 'Amaya', 'Anaya', 'Andrade', 'Anguiano', 'Angulo', 'Aparicio', 'Apodaca', 'Aponte', 'Aragón', 'Arana', 'Aranda', 'Arceo', 'Arellano', 'Arevalo', 'Arias', 'Armas', 'Arredondo', 'Arreola', 'Arriaga', 'Arroyo', 'Arteaga', 'Ávalos', 'Ávila', 'Avilés', 'Ayala',
        'Baca', 'Ballesteros', 'Barela', 'Barboza', 'Barragán', 'Barraza', 'Barrera', 'Barreto', 'Barrientos', 'Bautista', 'Becerra', 'Beltrán', 'Benavides', 'Benavídez', 'Benítez', 'Bermúdez', 'Bernal', 'Bétancourt', 'Blanco', 'Bonilla', 'Briseño', 'Bueno', 'Burgos', 'Bustamante', 'Bustos', 'Brambila',
        'Cabrera', 'Cadena', 'Caldera', 'Calderón','Camacho', 'Campos', 'Canales', 'Candelaria', 'Cantú', 'Caraballo', 'Carbajal', 'Cardenas', 'Cardona', 'Carmona', 'Carranza', 'Carrasco', 'Carrasquillo', 'Carrera', 'Carrero', 'Carrillo', 'Carrion', 'Carrizales', 'Carvajal', 'Casas', 'Casillas', 'Castañeda', 'Castellanos', 'Castillo', 'Castro', 'Ceballos', 'Cedillo', 'Ceja', 'Centeno', 'Cepeda', 'Cerda', 'Cervantes', 'Cervántez', 'Chacón', 'Chapa', 'Chávez', 'Cisneros', 'Colón', 'Concepción', 'Contreras', 'Cordero', 'Córdova', 'Cornejo', 'Corona', 'Coronado', 'Corral', 'Corrales', 'Correa', 'Cortés', 'Cortez', 'Cotilla', 'Cruz', 'Cuellar', 'Cuarón',
        'Dávila', 'de Jesús', 'De La Crúz', 'De La Fuente', 'De La Rosa', 'De La Torre', 'De León', 'De Miguel', 'Delgadillo', 'Delgado', 'Del Río', 'Del Valle', 'Díaz', 'Domínguez', 'Domínquez', 'Dueñas', 'Duran',
        'Echevarría', 'Enríquez', 'Escalante', 'Escobar', 'Escobedo', 'Espinal', 'Espino', 'Espinosa', 'Espinoza', 'Esquibel', 'Esquivel', 'Estrada',
        'Fajardo', 'Farías', 'Feliciano', 'Fernández', 'Ferrer', 'Fierro', 'Figueroa', 'Flores', 'Fonseca', 'Franco', 'Frías', 'Fuentes',
        'Gaitán', 'Galarza', 'Galindo', 'Gallardo', 'Galván', 'Gálvez', 'Gamboa', 'Gaona', 'Garay', 'García', 'Garrido', 'Garza', 'Gaytán', 'Gil', 'Girón', 'Godínez', 'Godoy', 'Gómez', 'Gonzales', 'González', 'Gracia', 'Granado', 'Granados', 'Griego', 'Grijalva', 'Guajardo', 'Guardado', 'Guerra', 'Guerrero', 'Guevara', 'Guillen', 'Gutiérrez', 'Guzmán',
        'Henríquez', 'Heredia', 'Hernádez', 'Hernandes', 'Hernández', 'Herrera', 'Hidalgo', 'Hinojosa', 'Holguín', 'Huerta', 'Hurtado',
        'Ibarra', 'Iglesias', 'Iglesia', 'Ibáñez', 'Ibarrez', 'Infante', 'Iñiguez',
        'Jiménez', 'Juárez', 'Jurado', 'Justo', 'Juvino', 'Juviño',
        'Lara', 'Leal', 'León', 'Lerma', 'Limón', 'Linares', 'Lira', 'Llamas', 'López', 'Lovato', 'Lozada', 'Lozano', 'Lugo', 'Luján', 'Luna', 'Lizaola',
        'Macías', 'Madera', 'Madrid', 'Madrigal', 'Maldonado', 'Márquez', 'Marroquín', 'Martínez', 'Mata', 'Mateo', 'Matías', 'Medina', 'Medrano', 'Mejía', 'Meléndez', 'Melgar', 'Mena', 'Méndez', 'Mendoza', 'Mercado', 'Merino', 'Mesa', 'Meza', 'Miranda', 'Molina', 'Mondragón', 'Montalvo', 'Montañez', 'Montaño', 'Montenegro', 'Montero', 'Montes', 'Montoya', 'Mora', 'Morales', 'Moreno', 'Mota', 'Muñiz', 'Muñoz', 'Murillo', 'Muro',
        'Nájera', 'Naranjo', 'Narváez', 'Nava', 'Navarrete', 'Navarro', 'Nazario', 'Negrete', 'Nieto', 'Nieves', 'Niño', 'Noriega', 'Núñez', 'Nuño', 'Nuez',
        'Ocampo', 'Ocasio', 'Ochoa', 'Ojeda', 'Olivares', 'Olivárez', 'Olivas', 'Olivera', 'Olivo', 'Olmos', 'Olvera', 'Orellana', 'Ornelas', 'Orosco', 'Orozco', 'Ortega', 'Ortiz', 'Osorio', 'Otero', 'Ozuna',
        'Pacheco', 'Padilla', 'Páez', 'Palacios', 'Palomo', 'Palomera', 'Pantoja', 'Paredes', 'Parra', 'Partida', 'Paz', 'Pedraza', 'Pedroza', 'Pelayo', 'Peña', 'Perales', 'Peralta', 'Perea', 'Peres', 'Pérez', 'Pichardo', 'Pineda', 'Pizarro', 'Placido', 'Placencia', 'Polanco', 'Ponce', 'Porras', 'Portillo', 'Posada', 'Prado', 'Preciado', 'Prieto', 'Puente', 'Puga', 'Pulido',
        'Quesada', 'Quezada', 'Quiñones', 'Quiñónez', 'Quintana', 'Quintanilla', 'Quintero', 'Quiroz',
        'Rael', 'Ramírez', 'Ramón', 'Ramos', 'Rangel', 'Raya', 'Razo', 'Real', 'Regalado', 'Rendón', 'Rentería', 'Reyes', 'Reyna', 'Reynosa', 'Rico', 'Rincón', 'Riojas', 'Ríos', 'Rivas', 'Rivera', 'Rivero', 'Robledo', 'Robles', 'Rocha', 'Rodarte', 'Rodríguez', 'Rojo', 'Romero', 'Romo', 'Roque', 'Rosado', 'Rosales', 'Rosario', 'Rosas', 'Roybal', 'Rubio', 'Ruelas', 'Ruiz', 'Ruvalcaba',
        'Saavedra', 'Salas', 'Salazar', 'Salcedo', 'Salcido', 'Saldaña', 'Saldivar', 'Salgado', 'Salinas', 'Sanches', 'Sánchez', 'Sandoval', 'Santacruz', 'Santana', 'Santiago', 'Santillán', 'Sarabia', 'Sauceda', 'Saucedo', 'Sedillo', 'Segovia', 'Segura', 'Sepúlveda', 'Serna', 'Serrano', 'Serrato', 'Sevilla', 'Sierra', 'Sisneros', 'Solano', 'Solís', 'Soliz', 'Solorio', 'Solorzano', 'Soltero', 'Soria', 'Sosa', 'Sotelo', 'Soto', 'Suárez',
        'Tapia', 'Tejada', 'Tejeda', 'Téllez', 'Tello', 'Terán', 'Terrazas', 'Terriquez', 'Tirado', 'Toledo', 'Torres', 'Tovar', 'Trejo', 'Trujillo',
        'Ulloa', 'Urbina', 'Ureña', 'Urías', 'Uribe', 'Urrutia',
        'Vaca', 'Valadez', 'Valdés', 'Valdez', 'Valdivia', 'Valencia', 'Valentín', 'Valenzuela', 'Valladares', 'Valle', 'Vallejo', 'Valles', 'Valverde', 'Vanegas', 'Varela', 'Vargas', 'Vásquez', 'Vázquez', 'Vega', 'Vela', 'Velasco', 'Velásquez', 'Velázquez', 'Vélez', 'Véliz', 'Venegas', 'Vera', 'Vergara', 'Viera', 'Vigil', 'Villa', 'Villagómez', 'Villalobos', 'Villalpando', 'Villanueva', 'Villareal', 'Villarreal', 'Villaseñor', 'Villegas',
        'Yáñez', 'Ybarra',
        'Zambrano', 'Zamora', 'Zamudio', 'Zapata', 'Zaragoza', 'Zarate', 'Zavala', 'Zelaya', 'Zepeda', 'Zúñiga'
    );

    protected static $titleMale = array('Sr.', 'Dn.', 'Dr.', 'Lic.', 'Ing.');

    protected static $titleFemale = array('Sra.', 'Srta.', 'Dra.', 'Lic.', 'Ing.');
    
    
    /**
     * Generate a Documento Nacional de Identidad (DNI) number
     *
     * Doesn't include a checksum, as peruvians commonly use only the first
     * 8 digits.
     *
     * @example '83367512'
     *
     * @link http://www2.sunat.gob.pe/pdt/pdtModulos/independientes/p695/TipoDoc.htm
     */
    public static function dni()
    {
        return static::numerify('########');
    }
}
