<?php

$arrayPeliculas = array(
    array(
        'id' => '0',
        'title' => 'El padrino',
        'year' => '1972', 
        'director' => 'Francis Ford Coppola', 
        'poster' => 'https://ih1.redbubble.net/image.1275478949.6629/flat,750x,075,f-pad,750x1000,f8f8f8.jpg', 
        'rented' => false, 
        'synopsis' => 'Don Vito Corleone (Marlon Brando) es el respetado y temido jefe de una de las cinco familias de la mafia de Nueva York. Tiene cuatro hijos: Connie (Talia Shire), el impulsivo Sonny (James Caan), el pusilánime Freddie (John Cazale) y Michael (Al Pacino), que no quiere saber nada de los negocios de su padre. Cuando Corleone, en contra de los consejos de \'Il consigliere\' Tom Hagen (Robert Duvall), se niega a intervenir en el negocio de las drogas, el jefe de otra banda ordena su asesinato. Empieza entonces una violenta y cruenta guerra entre las familias mafiosas.'
    ),
    array(
        'id' => '1',
        'title' => 'El Padrino. Parte II',
        'year' => '1974', 
        'director' => 'Francis Ford Coppola', 
        'poster' => 'data:image/jpeg;base64,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', 
        'rented' => false, 
        'synopsis' => 'Continuación de la historia de los Corleone por medio de dos historias paralelas: la elección de Michael Corleone como jefe de los negocios familiares y los orígenes del patriarca, el ya fallecido Don Vito, primero en Sicilia y luego en Estados Unidos, donde, empezando desde abajo, llegó a ser un poderosísimo jefe de la mafia de Nueva York.'
    ),
    array(
        'id' => '2',
        'title' => 'La lista de Schindler',
        'year' => '1993', 
        'director' => 'Steven Spielberg', 
        'poster' => 'https://c8.alamy.com/compes/ryh108/poster-de-la-pelicula-la-lista-de-schindler-1993-ryh108.jpg', 
        'rented' => false, 
        'synopsis' => 'Segunda Guerra Mundial (1939-1945). Oskar Schindler (Liam Neeson), un hombre de enorme astucia y talento para las relaciones públicas, organiza un ambicioso plan para ganarse la simpatía de los nazis. Después de la invasión de Polonia por los alemanes (1939), consigue, gracias a sus relaciones con los nazis, la propiedad de una fábrica de Cracovia. Allí emplea a cientos de operarios judíos, cuya explotación le hace prosperar rápidamente. Su gerente (Ben Kingsley), también judío, es el verdadero director en la sombra, pues Schindler carece completamente de conocimientos para dirigir una empresa.'
    ),
    array(
        'id' => '3',
        'title' => 'Pulp Fiction',
        'year' => '1994', 
        'director' => 'Quentin Tarantino', 
        'poster' => 'https://m.media-amazon.com/images/I/91Zi3y-GRDL._AC_SY741_.jpg', 
        'rented' => true, 
        'synopsis' => 'Jules y Vincent, dos asesinos a sueldo con muy pocas luces, trabajan para Marsellus Wallace. Vincent le confiesa a Jules que Marsellus le ha pedido que cuide de Mia, su mujer. Jules le recomienda prudencia porque es muy peligroso sobrepasarse con la novia del jefe. Cuando llega la hora de trabajar, ambos deben ponerse manos a la obra. Su misión: recuperar un misterioso maletín. '
    ),
    array(
        'id' => '4',
        'title' => 'Cadena perpetua',
        'year' => '1994', 
        'director' => 'Frank Darabont', 
        'poster' => 'https://m.media-amazon.com/images/I/51nxjkvnurL._AC_.jpg', 
        'rented' => true, 
        'synopsis' => 'Acusado del asesinato de su mujer, Andrew Dufresne (Tim Robbins), tras ser condenado a cadena perpetua, es enviado a la cárcel de Shawshank. Con el paso de los años conseguirá ganarse la confianza del director del centro y el respeto de sus compañeros de prisión, especialmente de Red (Morgan Freeman), el jefe de la mafia de los sobornos.'
    ),
    array(
        'id' => '5',
        'title' => 'El golpe',
        'year' => '1973', 
        'director' => 'George Roy Hill', 
        'poster' => 'https://es.web.img3.acsta.net/pictures/14/03/27/13/16/401621.jpg', 
        'rented' => false, 
        'synopsis' => 'Chicago, años treinta. Redford y Newman son dos timadores que deciden vengar la muerte de un viejo y querido colega, asesinado por orden de un poderoso gángster (Robert Shaw). Para ello urdirán un ingenioso y complicado plan con la ayuda de todos sus amigos y conocidos.'
    ),
    array(
        'id' => '6',
        'title' => 'La vida es bella',
        'year' => '1997', 
        'director' => 'Roberto Benigni', 
        'poster' => 'https://m.media-amazon.com/images/I/513UQpEDGfL._AC_.jpg', 
        'rented' => true, 
        'synopsis' => 'En 1939, a punto de estallar la Segunda Guerra Mundial (1939-1945), el extravagante Guido llega a Arezzo (Toscana) con la intención de abrir una librería. Allí conoce a Dora y, a pesar de que es la prometida del fascista Ferruccio, se casa con ella y tiene un hijo. Al estallar la guerra, los tres son internados en un campo de exterminio, donde Guido hará lo imposible para hacer creer a su hijo que la terrible situación que están padeciendo es tan sólo un juego.'
    ),
    array(
        'id' => '7',
        'title' => 'Uno de los nuestros',
        'year' => '1990', 
        'director' => 'Martin Scorsese', 
        'poster' => 'https://es.web.img2.acsta.net/medias/nmedia/18/67/70/14/20077949.jpg', 
        'rented' => false, 
        'synopsis' => 'Henry Hill, hijo de padre irlandés y madre siciliana, vive en Brooklyn y se siente fascinado por la vida que llevan los gángsters de su barrio, donde la mayoría de los vecinos son inmigrantes. Paul Cicero, el patriarca de la familia Pauline, es el protector del barrio. A los trece años, Henry decide abandonar la escuela y entrar a formar parte de la organización mafiosa como chico de los recados; muy pronto se gana la confianza de sus jefes, gracias a lo cual irá subiendo de categoría. '
    ),
    array(
        'id' => '8',
        'title' => 'Alguien voló sobre el nido del cuco',
        'year' => '1975', 
        'director' => 'Milos Forman', 
        'poster' => 'https://es.web.img2.acsta.net/medias/nmedia/18/67/70/14/20077949.jpg', 
        'rented' => false, 
        'synopsis' => 'Randle McMurphy (Jack Nicholson), un hombre condenado por asalto, y un espíritu libre que vive contracorriente, es recluido en un hospital psiquiátrico. La inflexible disciplina del centro acentúa su contagiosa tendencia al desorden, que acabará desencadenando una guerra entre los pacientes y el personal de la clínica con la fría y severa enfermera Ratched (Louise Fletcher) a la cabeza. La suerte de cada paciente del pabellón está en juego.'
    ),
    array(
        'id' => '9',
        'title' => 'American History X',
        'year' => '1998', 
        'director' => 'Tony Kaye', 
        'poster' => 'https://m.media-amazon.com/images/I/51UsXlBAaPL._AC_.jpg', 
        'rented' => false, 
        'synopsis' => 'Derek (Edward Norton), un joven "skin head" californiano de ideología neonazi, fue encarcelado por asesinar a un negro que pretendía robarle su furgoneta. Cuando sale de prisión y regresa a su barrio dispuesto a alejarse del mundo de la violencia, se encuentra con que su hermano pequeño (Edward Furlong), para quien Derek es el modelo a seguir, sigue el mismo camino que a él lo condujo a la cárcel.'
    ),
    array(
        'id' => '10',
        'title' => 'Sin perdón',
        'year' => '1992', 
        'director' => 'Clint Eastwood', 
        'poster' => 'https://es.web.img2.acsta.net/pictures/15/10/23/15/45/106018.jpg', 
        'rented' => false, 
        'synopsis' => 'William Munny (Clint Eastwood) es un pistolero retirado, viudo y padre de familia, que tiene dificultades económicas para sacar adelante a su hijos. Su única salida es hacer un último trabajo. En compañía de un viejo colega (Morgan Freeman) y de un joven inexperto (Jaimz Woolvett), Munny tendrá que matar a dos hombres que cortaron la cara a una prostituta.'
    ),
    array(
        'id' => '11',
        'title' => 'El precio del poder',
        'year' => '1983', 
        'director' => 'Brian De Palma', 
        'poster' => 'https://m.media-amazon.com/images/I/41GrSfupEoL._AC_.jpg', 
        'rented' => false, 
        'synopsis' => 'Tony Montana es un emigrante cubano frío y sanguinario que se instala en Miami con el propósito de convertirse en un gángster importante. Con la colaboración de su amigo Manny Rivera inicia una fulgurante carrera delictiva con el objetivo de acceder a la cúpula de una organización de narcos.'
    ),
    array(
        'id' => '12',
        'title' => 'El pianista',
        'year' => '2002', 
        'director' => 'Roman Polanski', 
        'poster' => 'https://es.web.img2.acsta.net/pictures/14/05/27/12/07/438875.jpg', 
        'rented' => true, 
        'synopsis' => 'Wladyslaw Szpilman, un brillante pianista polaco de origen judío, vive con su familia en el ghetto de Varsovia. Cuando, en 1939, los alemanes invaden Polonia, consigue evitar la deportación gracias a la ayuda de algunos amigos. Pero tendrá que vivir escondido y completamente aislado durante mucho tiempo, y para sobrevivir tendrá que afrontar constantes peligros.'
    ),
    array(
        'id' => '13',
        'title' => 'Seven',
        'year' => '1995', 
        'director' => 'David Fincher', 
        'poster' => 'https://m.media-amazon.com/images/I/51xb9eNxB7L._AC_.jpg', 
        'rented' => true, 
        'synopsis' => 'El veterano teniente Somerset (Morgan Freeman), del departamento de homicidios, está a punto de jubilarse y ser reemplazado por el ambicioso e impulsivo detective David Mills (Brad Pitt). Ambos tendrán que colaborar en la resolución de una serie de asesinatos cometidos por un psicópata que toma como base la relación de los siete pecados capitales: gula, pereza, soberbia, avaricia, envidia, lujuria e ira. Los cuerpos de las víctimas, sobre los que el asesino se ensaña de manera impúdica, se convertirán para los policías en un enigma que les obligará a viajar al horror y la barbarie más absoluta.'
    ),
    array(
        'id' => '14',
        'title' => 'El silencio de los corderos',
        'year' => '1991', 
        'director' => 'Jonathan Demme', 
        'poster' => 'https://m.media-amazon.com/images/I/71n2ua4cFGL._AC_SY606_.jpg', 
        'rented' => false, 
        'synopsis' => 'El FBI busca a "Buffalo Bill", un asesino en serie que mata a sus víctimas, todas adolescentes, después de prepararlas minuciosamente y arrancarles la piel. Para poder atraparlo recurren a Clarice Starling, una brillante licenciada universitaria, experta en conductas psicópatas, que aspira a formar parte del FBI. Siguiendo las instrucciones de su jefe, Jack Crawford, Clarice visita la cárcel de alta seguridad donde el gobierno mantiene encerrado a Hannibal Lecter, antiguo psicoanalista y asesino, dotado de una inteligencia superior a la normal. Su misión será intentar sacarle información sobre los patrones de conducta de "Buffalo Bill".'
    ),
    array(
        'id' => '15',
        'title' => 'La naranja mecánica',
        'year' => '1971', 
        'director' => 'Stanley Kubrick', 
        'poster' => 'https://m.media-amazon.com/images/I/51djr94P0YL._AC_SS450_.jpg', 
        'rented' => false, 
        'synopsis' => 'Gran Bretaña, en un futuro indeterminado. Alex (Malcolm McDowell) es un joven muy agresivo que tiene dos pasiones: la violencia desaforada y Beethoven. Es el jefe de la banda de los drugos, que dan rienda suelta a sus instintos más salvajes apaleando, violando y aterrorizando a la población. Cuando esa escalada de terror llega hasta el asesinato, Alex es detenido y, en prisión, se someterá voluntariamente a una innovadora experiencia de reeducación que pretende anular drásticamente cualquier atisbo de conducta antisocial.'
    ),
    array(
        'id' => '16',
        'title' => 'La chaqueta metálica',
        'year' => '1987', 
        'director' => 'Stanley Kubrick', 
        'poster' => 'https://es.web.img3.acsta.net/medias/nmedia/18/90/15/35/20083253.jpg', 
        'rented' => true, 
        'synopsis' => 'Un grupo de reclutas se prepara en Parish Island, centro de entrenamiento de la marina norteamericana. Allí está el sargento Hartman, duro e implacable, cuya única misión en la vida es endurecer el cuerpo y el alma de los novatos, para que puedan defenderse del enemigo. Pero no todos los jóvenes están preparados para soportar sus métodos. '
    ),
    array(
        'id' => '17',
        'title' => 'Blade Runner',
        'year' => '1982', 
        'director' => 'Ridley Scott', 
        'poster' => 'https://m.media-amazon.com/images/I/711WIQm0xaL._AC_SS450_.jpg', 
        'rented' => true, 
        'synopsis' => 'A principios del siglo XXI, la poderosa Tyrell Corporation creó, gracias a los avances de la ingeniería genética, un robot llamado Nexus 6, un ser virtualmente idéntico al hombre pero superior a él en fuerza y agilidad, al que se dio el nombre de Replicante. Estos robots trabajaban como esclavos en las colonias exteriores de la Tierra. Después de la sangrienta rebelión de un equipo de Nexus-6, los Replicantes fueron desterrados de la Tierra. Brigadas especiales de policía, los Blade Runners, tenían órdenes de matar a todos los que no hubieran acatado la condena. Pero a esto no se le llamaba ejecución, se le llamaba "retiro". '
    ),
    array(
        'id' => '18',
        'title' => 'Taxi Driver',
        'year' => '1976', 
        'director' => 'Martin Scorsese', 
        'poster' => 'https://m.media-amazon.com/images/I/51TBx9tzHFL._AC_.jpg', 
        'rented' => false, 
        'synopsis' => 'Para sobrellevar el insomnio crónico que sufre desde su regreso de Vietnam, Travis Bickle (Robert De Niro) trabaja como taxista nocturno en Nueva York. Es un hombre insociable que apenas tiene contacto con los demás, se pasa los días en el cine y vive prendado de Betsy (Cybill Shepherd), una atractiva rubia que trabaja como voluntaria en una campaña política. Pero lo que realmente obsesiona a Travis es comprobar cómo la violencia, la sordidez y la desolación dominan la ciudad. Y un día decide pasar a la acción.'
    ),
    array(
        'id' => '19',
        'title' => 'El club de la lucha',
        'year' => '1999', 
        'director' => 'David Fincher', 
        'poster' => 'https://es.web.img3.acsta.net/r_1280_720/medias/nmedia/18/69/04/88/20140966.jpg', 
        'rented' => true, 
        'synopsis' => 'Un joven hastiado de su gris y monótona vida lucha contra el insomnio. En un viaje en avión conoce a un carismático vendedor de jabón que sostiene una teoría muy particular: el perfeccionismo es cosa de gentes débiles; sólo la autodestrucción hace que la vida merezca la pena. Ambos deciden entonces fundar un club secreto de lucha, donde poder descargar sus frustaciones y su ira, que tendrá un éxito arrollador.'
    )
);