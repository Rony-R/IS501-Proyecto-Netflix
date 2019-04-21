
INSERT INTO TIPO_LIKE_DISLIKE (CODIGO_TIPO_L_D, NOMBRE_TIPO) VALUES (1, 'LIKE');
INSERT INTO TIPO_LIKE_DISLIKE (CODIGO_TIPO_L_D, NOMBRE_TIPO) VALUES (2, 'DISLIKE');

INSERT INTO TBL_TIPO_CONTENIDO (CODIGO_TIPO_CONTENIDO, TIPO_CONTENIDO) VALUES (1, 'PELICULA');
INSERT INTO TBL_TIPO_CONTENIDO (CODIGO_TIPO_CONTENIDO, TIPO_CONTENIDO) VALUES (2, 'SERIE');

INSERT INTO TBL_COLORES (CODIGO_COLOR, NOMBRE_COLOR, NUMERO_HEXADECIMAL, CODIGO_RGB) VALUES (1, 'Blanco', '#FFFFFF','(255,255,255)');
INSERT INTO TBL_COLORES (CODIGO_COLOR, NOMBRE_COLOR, NUMERO_HEXADECIMAL, CODIGO_RGB) VALUES (2, 'Gris', '#BEBEBE','(128,128,128');
INSERT INTO TBL_COLORES (CODIGO_COLOR, NOMBRE_COLOR, NUMERO_HEXADECIMAL, CODIGO_RGB) VALUES (3, 'Amarillo', '#FFFF00','(255,255,0)');
INSERT INTO TBL_COLORES (CODIGO_COLOR, NOMBRE_COLOR, NUMERO_HEXADECIMAL, CODIGO_RGB) VALUES (4, 'Naranja', '#FF8000','(255,128,0)');
INSERT INTO TBL_COLORES (CODIGO_COLOR, NOMBRE_COLOR, NUMERO_HEXADECIMAL, CODIGO_RGB) VALUES (5, 'Azul', '#0000FF','(0,0,255)');
INSERT INTO TBL_COLORES (CODIGO_COLOR, NOMBRE_COLOR, NUMERO_HEXADECIMAL, CODIGO_RGB) VALUES (6, 'Marron', '#A52A2A','(141,73,37)');
INSERT INTO TBL_COLORES (CODIGO_COLOR, NOMBRE_COLOR, NUMERO_HEXADECIMAL, CODIGO_RGB) VALUES (7, 'Purpura', '#7D2181','(125,33,129)');
INSERT INTO TBL_COLORES (CODIGO_COLOR, NOMBRE_COLOR, NUMERO_HEXADECIMAL, CODIGO_RGB) VALUES (8, 'Verde', '#008000','(0,255,0)');
INSERT INTO TBL_COLORES (CODIGO_COLOR, NOMBRE_COLOR, NUMERO_HEXADECIMAL, CODIGO_RGB) VALUES (9, 'Rojo', '#FF0000','(255,0,0)');
INSERT INTO TBL_COLORES (CODIGO_COLOR, NOMBRE_COLOR, NUMERO_HEXADECIMAL, CODIGO_RGB) VALUES (10, 'Negro', '#000000','(0,0,0)');

INSERT INTO TBL_IDIOMAS (CODIGO_IDIOMA, IDIOMA) VALUES (1, 'Español');
INSERT INTO TBL_IDIOMAS (CODIGO_IDIOMA, IDIOMA) VALUES (2, 'Ingles');
INSERT INTO TBL_IDIOMAS (CODIGO_IDIOMA, IDIOMA) VALUES (3, 'Aleman');
INSERT INTO TBL_IDIOMAS (CODIGO_IDIOMA, IDIOMA) VALUES (4, 'Frances');
INSERT INTO TBL_IDIOMAS (CODIGO_IDIOMA, IDIOMA) VALUES (5, 'Italiano');
INSERT INTO TBL_IDIOMAS (CODIGO_IDIOMA, IDIOMA) VALUES (6, 'Portugues');
INSERT INTO TBL_IDIOMAS (CODIGO_IDIOMA, IDIOMA) VALUES (7, 'Ruso');
INSERT INTO TBL_IDIOMAS (CODIGO_IDIOMA, IDIOMA) VALUES (8, 'Japones');
INSERT INTO TBL_IDIOMAS (CODIGO_IDIOMA, IDIOMA) VALUES (9, 'Arabe');
INSERT INTO TBL_IDIOMAS (CODIGO_IDIOMA, IDIOMA) VALUES (10, 'Chino');

INSERT INTO TBL_BENEFICIOS (CODIGO_BENEFICIO, DESCRIPCION_BENEFICIO) VALUES (1, 'HD');
INSERT INTO TBL_BENEFICIOS (CODIGO_BENEFICIO, DESCRIPCION_BENEFICIO) VALUES (2, 'Ultra HD');
INSERT INTO TBL_BENEFICIOS (CODIGO_BENEFICIO, DESCRIPCION_BENEFICIO) VALUES (3, 'Multidispositivo: portátil, TV, teléfono y tableta');
INSERT INTO TBL_BENEFICIOS (CODIGO_BENEFICIO, DESCRIPCION_BENEFICIO) VALUES (4, 'Todas las películas y series que desees');
INSERT INTO TBL_BENEFICIOS (CODIGO_BENEFICIO, DESCRIPCION_BENEFICIO) VALUES (5, 'Cancela cuando quieras');
INSERT INTO TBL_BENEFICIOS (CODIGO_BENEFICIO, DESCRIPCION_BENEFICIO) VALUES (6, 'El primer mes es gratis');

INSERT INTO TBL_UNIDADES (CODIGO_UNIDAD, UNIDAD) VALUES (1, 'Dolares');
INSERT INTO TBL_UNIDADES (CODIGO_UNIDAD, UNIDAD) VALUES (2, 'Lempiras');
INSERT INTO TBL_UNIDADES (CODIGO_UNIDAD, UNIDAD) VALUES (3, 'Euros');
INSERT INTO TBL_UNIDADES (CODIGO_UNIDAD, UNIDAD) VALUES (4, 'Libras');
INSERT INTO TBL_UNIDADES (CODIGO_UNIDAD, UNIDAD) VALUES (5, 'Minutos');
INSERT INTO TBL_UNIDADES (CODIGO_UNIDAD, UNIDAD) VALUES (6, 'Horas');

INSERT INTO TBL_CARGOS_PERSONAS (CODIGO_CARGO, CARGO) VALUES (1, 'Actor');
INSERT INTO TBL_CARGOS_PERSONAS (CODIGO_CARGO, CARGO) VALUES (2, 'Director');
INSERT INTO TBL_CARGOS_PERSONAS (CODIGO_CARGO, CARGO) VALUES (3, 'Escritor');

INSERT INTO TBL_NIVELES_MADUREZ (CODIGO_MADUREZ, MADUREZ) VALUES (1, 'Niños');
INSERT INTO TBL_NIVELES_MADUREZ (CODIGO_MADUREZ, MADUREZ) VALUES (2, 'Todo Publico');
INSERT INTO TBL_NIVELES_MADUREZ (CODIGO_MADUREZ, MADUREZ) VALUES (3, 'Adolescentes');
INSERT INTO TBL_NIVELES_MADUREZ (CODIGO_MADUREZ, MADUREZ) VALUES (4, 'Adultos');

INSERT INTO TBL_CATEGORIAS_NET (CODIGO_CATEGORIA, NOMBRE_CATEGORIA) VALUES (1, 'Popular en Netflix');
INSERT INTO TBL_CATEGORIAS_NET (CODIGO_CATEGORIA, NOMBRE_CATEGORIA) VALUES (2, 'Tendencia de ahora');
INSERT INTO TBL_CATEGORIAS_NET (CODIGO_CATEGORIA, NOMBRE_CATEGORIA) VALUES (3, 'Originales de Netflix');
INSERT INTO TBL_CATEGORIAS_NET (CODIGO_CATEGORIA, NOMBRE_CATEGORIA) VALUES (4, 'Recientemente Añadidas');
INSERT INTO TBL_CATEGORIAS_NET (CODIGO_CATEGORIA, NOMBRE_CATEGORIA) VALUES (5, 'Mejores opciones para');
INSERT INTO TBL_CATEGORIAS_NET (CODIGO_CATEGORIA, NOMBRE_CATEGORIA) VALUES (6, 'Nuevos Lanzamientos');
INSERT INTO TBL_CATEGORIAS_NET (CODIGO_CATEGORIA, NOMBRE_CATEGORIA) VALUES (7, 'Miralo de nuevo');
INSERT INTO TBL_CATEGORIAS_NET (CODIGO_CATEGORIA, NOMBRE_CATEGORIA) VALUES (8, 'Escritores Aclamados');
INSERT INTO TBL_CATEGORIAS_NET (CODIGO_CATEGORIA, NOMBRE_CATEGORIA) VALUES (9, 'Peliculas basadas en la vida real');
INSERT INTO TBL_CATEGORIAS_NET (CODIGO_CATEGORIA, NOMBRE_CATEGORIA) VALUES (10, 'Peliculas de Hollywood');
INSERT INTO TBL_CATEGORIAS_NET (CODIGO_CATEGORIA, NOMBRE_CATEGORIA) VALUES (11, 'Películas Aclamadas por la Crítica');

INSERT INTO TBL_GENEROS_CONTENIDO (CODIGO_GENERO, NOMBRE_GENERO) VALUES (1, 'Comedia');
INSERT INTO TBL_GENEROS_CONTENIDO (CODIGO_GENERO, NOMBRE_GENERO) VALUES (2, 'Drama');
INSERT INTO TBL_GENEROS_CONTENIDO (CODIGO_GENERO, NOMBRE_GENERO) VALUES (3, 'Terror');
INSERT INTO TBL_GENEROS_CONTENIDO (CODIGO_GENERO, NOMBRE_GENERO) VALUES (4, 'Suspenso');
INSERT INTO TBL_GENEROS_CONTENIDO (CODIGO_GENERO, NOMBRE_GENERO) VALUES (5, 'Accion');
INSERT INTO TBL_GENEROS_CONTENIDO (CODIGO_GENERO, NOMBRE_GENERO) VALUES (6, 'Aventura');
INSERT INTO TBL_GENEROS_CONTENIDO (CODIGO_GENERO, NOMBRE_GENERO) VALUES (7, 'Romance');
INSERT INTO TBL_GENEROS_CONTENIDO (CODIGO_GENERO, NOMBRE_GENERO) VALUES (8, 'Crimen');
INSERT INTO TBL_GENEROS_CONTENIDO (CODIGO_GENERO, NOMBRE_GENERO) VALUES (9, 'Documental');
INSERT INTO TBL_GENEROS_CONTENIDO (CODIGO_GENERO, NOMBRE_GENERO) VALUES (10, 'Ciencia-Ficcion');
INSERT INTO TBL_GENEROS_CONTENIDO (CODIGO_GENERO, NOMBRE_GENERO) VALUES (11, 'Supernatural');
INSERT INTO TBL_GENEROS_CONTENIDO (CODIGO_GENERO, NOMBRE_GENERO) VALUES (12, 'Anime');
INSERT INTO TBL_GENEROS_CONTENIDO (CODIGO_GENERO, NOMBRE_GENERO) VALUES (13, 'Dibujo Animado');
INSERT INTO TBL_GENEROS_CONTENIDO (CODIGO_GENERO, NOMBRE_GENERO) VALUES (14, 'Deportes');
INSERT INTO TBL_GENEROS_CONTENIDO (CODIGO_GENERO, NOMBRE_GENERO) VALUES (15, 'Clasica');
INSERT INTO TBL_GENEROS_CONTENIDO (CODIGO_GENERO, NOMBRE_GENERO) VALUES (16, 'Familiar');
INSERT INTO TBL_GENEROS_CONTENIDO (CODIGO_GENERO, NOMBRE_GENERO) VALUES (17, 'Musica y Musicales');
INSERT INTO TBL_GENEROS_CONTENIDO (CODIGO_GENERO, NOMBRE_GENERO) VALUES (18, 'Latino Americano');
INSERT INTO TBL_GENEROS_CONTENIDO (CODIGO_GENERO, NOMBRE_GENERO) VALUES (19, 'Fantasia');
INSERT INTO TBL_GENEROS_CONTENIDO (CODIGO_GENERO, NOMBRE_GENERO) VALUES (20, 'Policial');

INSERT INTO TBL_LUGARES (CODIGO_LUGAR, CODIGO_LUGAR_PADRE, NOMBRE_LUGAR, LONGITUD, LATITUD, ZONA_HORARIA) VALUES (1, NULL, 'Norteamerica', 'O97°5951.4', 'N24°274', 'Hora estándar del Atlántico UTC-03:00 o ADT');
INSERT INTO TBL_LUGARES (CODIGO_LUGAR, CODIGO_LUGAR_PADRE, NOMBRE_LUGAR, LONGITUD, LATITUD, ZONA_HORARIA) VALUES (2, NULL, 'Europa', '9°40°E', '35°70°N', 'Horario Europeo Occidental (UTC+0)');
INSERT INTO TBL_LUGARES (CODIGO_LUGAR, CODIGO_LUGAR_PADRE, NOMBRE_LUGAR, LONGITUD, LATITUD, ZONA_HORARIA) VALUES (3, NULL, 'Asia', '26°144°E', '2°78°N', 'Horario Asiatico Occidental (UTC+54)');
INSERT INTO TBL_LUGARES (CODIGO_LUGAR, CODIGO_LUGAR_PADRE, NOMBRE_LUGAR, LONGITUD, LATITUD, ZONA_HORARIA) VALUES (4, NULL,'Sudamerica', '145°E45°O', '58°N134°S', 'Horario Sudamericano (UTC-48)');
INSERT INTO TBL_LUGARES (CODIGO_LUGAR, CODIGO_LUGAR_PADRE, NOMBRE_LUGAR, LONGITUD, LATITUD, ZONA_HORARIA) VALUES (5, NULL, 'Africa' , '15°O50°E', '38°N35°S', 'Horario Africano central (UTC+32)');
INSERT INTO TBL_LUGARES (CODIGO_LUGAR, CODIGO_LUGAR_PADRE, NOMBRE_LUGAR, LONGITUD, LATITUD, ZONA_HORARIA) VALUES (6, NULL, 'Oceania', '113°E125°O', '20°N50°S', 'Horario Oceanico (UTC-146)');
INSERT INTO TBL_LUGARES (CODIGO_LUGAR, CODIGO_LUGAR_PADRE, NOMBRE_LUGAR, LONGITUD, LATITUD, ZONA_HORARIA) VALUES (7, NULL, 'Antartida', '45°160°E', '60°', 'Horario estandar Antartico (UTC+156)');
INSERT INTO TBL_LUGARES (CODIGO_LUGAR, CODIGO_LUGAR_PADRE, NOMBRE_LUGAR, LONGITUD, LATITUD, ZONA_HORARIA) VALUES (8, 4, 'Honduras', '45°N39°S', '78°E123°O', 'Hora estándar del Atlántico UTC-03:00 o ADT');
INSERT INTO TBL_LUGARES (CODIGO_LUGAR, CODIGO_LUGAR_PADRE, NOMBRE_LUGAR, LONGITUD, LATITUD, ZONA_HORARIA) VALUES (9, 4, 'Costa Rica', '44°S32°N', '43°O112°E', 'Hora estándar del Atlántico UTC-03:00 o ADT');
INSERT INTO TBL_LUGARES (CODIGO_LUGAR, CODIGO_LUGAR_PADRE, NOMBRE_LUGAR, LONGITUD, LATITUD, ZONA_HORARIA) VALUES (10, 2, 'Italia', '24°E78°O', '51°N115°S', 'Horario Europeo Occidental (UTC+0)');
INSERT INTO TBL_LUGARES (CODIGO_LUGAR, CODIGO_LUGAR_PADRE, NOMBRE_LUGAR, LONGITUD, LATITUD, ZONA_HORARIA) VALUES (11, 2, 'Alemania', '45°N39°S', '78°E123°O','Horario Europeo Occidental (UTC+0)');
INSERT INTO TBL_LUGARES (CODIGO_LUGAR, CODIGO_LUGAR_PADRE, NOMBRE_LUGAR, LONGITUD, LATITUD, ZONA_HORARIA) VALUES (12, 4, 'Brasil', '26°144°E', '2°78°N','Horario Sudamericano (UTC-48)');
INSERT INTO TBL_LUGARES (CODIGO_LUGAR, CODIGO_LUGAR_PADRE, NOMBRE_LUGAR, LONGITUD, LATITUD, ZONA_HORARIA) VALUES (13, 4, 'Argentina', '9°40°E', '35°70°N','Horario Sudamericano (UTC-48)');
INSERT INTO TBL_LUGARES (CODIGO_LUGAR, CODIGO_LUGAR_PADRE, NOMBRE_LUGAR, LONGITUD, LATITUD, ZONA_HORARIA) VALUES (14, 6, 'Australia', '15°O50°E', '38°N35°S','Horario Oceanico (UTC-146)');
INSERT INTO TBL_LUGARES (CODIGO_LUGAR, CODIGO_LUGAR_PADRE, NOMBRE_LUGAR, LONGITUD, LATITUD, ZONA_HORARIA) VALUES (15, 6, 'Fiyi', '24°E78°O', '51°N115°S', 'Horario Oceanico (UTC-146)');
INSERT INTO TBL_LUGARES (CODIGO_LUGAR, CODIGO_LUGAR_PADRE, NOMBRE_LUGAR, LONGITUD, LATITUD, ZONA_HORARIA) VALUES (16, 8, 'Francisco Morazan', '26°144°E', '2°78°N','Hora estándar del Atlántico UTC-03:00 o ADT');
INSERT INTO TBL_LUGARES (CODIGO_LUGAR, CODIGO_LUGAR_PADRE, NOMBRE_LUGAR, LONGITUD, LATITUD, ZONA_HORARIA) VALUES (17, 8,'Copan', '45°160°E', '60°S56°E', 'Hora estándar del Atlántico UTC-03:00 o ADT');
INSERT INTO TBL_LUGARES (CODIGO_LUGAR, CODIGO_LUGAR_PADRE, NOMBRE_LUGAR, LONGITUD, LATITUD, ZONA_HORARIA) VALUES (18, 12, 'Brasilia', '9°40°E', '35°70°N','Horario Sudamericano (UTC-48)');
INSERT INTO TBL_LUGARES (CODIGO_LUGAR, CODIGO_LUGAR_PADRE, NOMBRE_LUGAR, LONGITUD, LATITUD, ZONA_HORARIA) VALUES (19, 12, 'Rio de Janeiro', 'O97°5951.4', 'N24°274','Horario Sudamericano (UTC-48)');
INSERT INTO TBL_LUGARES (CODIGO_LUGAR, CODIGO_LUGAR_PADRE, NOMBRE_LUGAR, LONGITUD, LATITUD, ZONA_HORARIA) VALUES (20, 3, 'Japon', '24°E78°O', '51°N115°S','Horario Asiatico Occidental (UTC+54)');
INSERT INTO TBL_LUGARES (CODIGO_LUGAR, CODIGO_LUGAR_PADRE, NOMBRE_LUGAR, LONGITUD, LATITUD, ZONA_HORARIA) VALUES (21, 20, 'Tokio', '44°S32°N', '43°O112°E','Horario Asiatico Occidental (UTC+54)');
INSERT INTO TBL_LUGARES (CODIGO_LUGAR, CODIGO_LUGAR_PADRE, NOMBRE_LUGAR, LONGITUD, LATITUD, ZONA_HORARIA) VALUES (22, 16, 'Valle de Angeles', '15°O50°E', '38°N35°S','Hora estándar del Atlántico UTC-03:00 o ADT');
INSERT INTO TBL_LUGARES (CODIGO_LUGAR, CODIGO_LUGAR_PADRE, NOMBRE_LUGAR, LONGITUD, LATITUD, ZONA_HORARIA) VALUES (23, 16, 'Santa Lucia','45°N39°S', '78°E123°O','Hora estándar del Atlántico UTC-03:00 o ADT');
INSERT INTO TBL_LUGARES (CODIGO_LUGAR, CODIGO_LUGAR_PADRE, NOMBRE_LUGAR, LONGITUD, LATITUD, ZONA_HORARIA) VALUES (24, 1, 'Estados Unidos', '24°E78°O', '51°N115°S','Hora estándar del Atlántico UTC-03:00 o ADT');
INSERT INTO TBL_LUGARES (CODIGO_LUGAR, CODIGO_LUGAR_PADRE, NOMBRE_LUGAR, LONGITUD, LATITUD, ZONA_HORARIA) VALUES (25, 1, 'Mexico', '9°40°E', '35°70°N','Hora estándar del Atlántico UTC-03:00 o ADT');

INSERT INTO TBL_ESTUDIOS (CODIGO_ESTUDIO, CODIGO_LUGAR_UBICACION, NOMBRE_ESTUDIO, DIRECCION) VALUES (1, 24, 'Marvel Studios', 'Calle 27, avenida siempre viva');
INSERT INTO TBL_ESTUDIOS (CODIGO_ESTUDIO, CODIGO_LUGAR_UBICACION, NOMBRE_ESTUDIO, DIRECCION) VALUES (2,11,'DC Studios', 'Calle 48, avenida tortillera');
INSERT INTO TBL_ESTUDIOS (CODIGO_ESTUDIO, CODIGO_LUGAR_UBICACION, NOMBRE_ESTUDIO, DIRECCION) VALUES (3,17,'WARNER Studios', 'Calle 324, avenida carisal sosa');
INSERT INTO TBL_ESTUDIOS (CODIGO_ESTUDIO, CODIGO_LUGAR_UBICACION, NOMBRE_ESTUDIO, DIRECCION) VALUES (4,22, 'FOX Studios', 'Calle 3.1416, avenida simpson');
INSERT INTO TBL_ESTUDIOS (CODIGO_ESTUDIO, CODIGO_LUGAR_UBICACION, NOMBRE_ESTUDIO, DIRECCION) VALUES (5,15, 'ESPN Studios', 'Calle 2, avenida golazo');

INSERT INTO TBL_PERSONAS (CODIGO_PERSONA, CODIGO_CARGO, NOMBRE_PERSONA, APELLIDO_PERSONA) VALUES (1, 1, 'Actor 1', 'Apellido 1');
INSERT INTO TBL_PERSONAS (CODIGO_PERSONA, CODIGO_CARGO, NOMBRE_PERSONA, APELLIDO_PERSONA) VALUES (2, 1, 'Actor 2', 'Apellido 2');
INSERT INTO TBL_PERSONAS (CODIGO_PERSONA, CODIGO_CARGO, NOMBRE_PERSONA, APELLIDO_PERSONA) VALUES (3, 1, 'Actor 3', 'Apellido 3');
INSERT INTO TBL_PERSONAS (CODIGO_PERSONA, CODIGO_CARGO, NOMBRE_PERSONA, APELLIDO_PERSONA) VALUES (4,1, 'Actor 4', 'Apellido 4');
INSERT INTO TBL_PERSONAS (CODIGO_PERSONA, CODIGO_CARGO, NOMBRE_PERSONA, APELLIDO_PERSONA) VALUES (5,1, 'Actor 5', 'Apellido 5');
INSERT INTO TBL_PERSONAS (CODIGO_PERSONA, CODIGO_CARGO, NOMBRE_PERSONA, APELLIDO_PERSONA) VALUES (6,2, 'Director 1', 'Apellido 6');
INSERT INTO TBL_PERSONAS (CODIGO_PERSONA, CODIGO_CARGO, NOMBRE_PERSONA, APELLIDO_PERSONA) VALUES (7,2, 'Director 2', 'Apellido 7');
INSERT INTO TBL_PERSONAS (CODIGO_PERSONA, CODIGO_CARGO, NOMBRE_PERSONA, APELLIDO_PERSONA) VALUES (8,2, 'Director 3', 'Apellido 8');
INSERT INTO TBL_PERSONAS (CODIGO_PERSONA, CODIGO_CARGO, NOMBRE_PERSONA, APELLIDO_PERSONA) VALUES (9,2, 'Director 4', 'Apellido 9');
INSERT INTO TBL_PERSONAS (CODIGO_PERSONA, CODIGO_CARGO, NOMBRE_PERSONA, APELLIDO_PERSONA) VALUES (10,2, 'Director 5', 'Apellido 10');
INSERT INTO TBL_PERSONAS (CODIGO_PERSONA, CODIGO_CARGO, NOMBRE_PERSONA, APELLIDO_PERSONA) VALUES (11,3, 'Escritor 1', 'Apellido 11');
INSERT INTO TBL_PERSONAS (CODIGO_PERSONA, CODIGO_CARGO, NOMBRE_PERSONA, APELLIDO_PERSONA) VALUES (12,3, 'Escritor 2', 'Apellido 12');
INSERT INTO TBL_PERSONAS (CODIGO_PERSONA, CODIGO_CARGO, NOMBRE_PERSONA, APELLIDO_PERSONA) VALUES (13,3, 'Escritor 3', 'Apellido 13');
INSERT INTO TBL_PERSONAS (CODIGO_PERSONA, CODIGO_CARGO, NOMBRE_PERSONA, APELLIDO_PERSONA) VALUES (14,3, 'Escritor 4', 'Apellido 14');
INSERT INTO TBL_PERSONAS (CODIGO_PERSONA, CODIGO_CARGO, NOMBRE_PERSONA, APELLIDO_PERSONA) VALUES (15,3, 'Escritor 5', 'Apellido 15');

INSERT INTO TBL_GENEROS_USUARIOS (CODIGO_GENERO, NOMBRE_GENERO, ABREVIATURA) VALUES (1, 'Femenino', 'F');
INSERT INTO TBL_GENEROS_USUARIOS (CODIGO_GENERO, NOMBRE_GENERO, ABREVIATURA) VALUES (2, 'Masculino', 'M');

INSERT INTO TBL_TIPO_PLAN (CODIGO_TIPO_PLAN, CODIGO_UNIDAD_PAGO, NOMBRE_TIPO_PLAN, PRECIO_MENSUAL, NUMERO_DE_PANTALLAS) VALUES (1, 1, 'Basico', 7.99, 1);
INSERT INTO TBL_TIPO_PLAN (CODIGO_TIPO_PLAN, CODIGO_UNIDAD_PAGO, NOMBRE_TIPO_PLAN, PRECIO_MENSUAL, NUMERO_DE_PANTALLAS) VALUES (2, 1, 'Estandar', 10.99, 2);
INSERT INTO TBL_TIPO_PLAN (CODIGO_TIPO_PLAN, CODIGO_UNIDAD_PAGO, NOMBRE_TIPO_PLAN, PRECIO_MENSUAL, NUMERO_DE_PANTALLAS) VALUES (3, 1, 'Premium', 13.99, 4);

INSERT INTO TBL_BENEFICIOS_X_PLAN (CODIGO_BENEFICIO, CODIGO_TIPO_PLAN) VALUES (3, 1);
INSERT INTO TBL_BENEFICIOS_X_PLAN (CODIGO_BENEFICIO, CODIGO_TIPO_PLAN) VALUES (4, 1);
INSERT INTO TBL_BENEFICIOS_X_PLAN (CODIGO_BENEFICIO, CODIGO_TIPO_PLAN) VALUES (5, 1);
INSERT INTO TBL_BENEFICIOS_X_PLAN (CODIGO_BENEFICIO, CODIGO_TIPO_PLAN) VALUES (6, 1);
INSERT INTO TBL_BENEFICIOS_X_PLAN (CODIGO_BENEFICIO, CODIGO_TIPO_PLAN) VALUES (1, 2);
INSERT INTO TBL_BENEFICIOS_X_PLAN (CODIGO_BENEFICIO, CODIGO_TIPO_PLAN) VALUES (3, 2);
INSERT INTO TBL_BENEFICIOS_X_PLAN (CODIGO_BENEFICIO, CODIGO_TIPO_PLAN) VALUES (4, 2);
INSERT INTO TBL_BENEFICIOS_X_PLAN (CODIGO_BENEFICIO, CODIGO_TIPO_PLAN) VALUES (5, 2);
INSERT INTO TBL_BENEFICIOS_X_PLAN (CODIGO_BENEFICIO, CODIGO_TIPO_PLAN) VALUES (6, 2);
INSERT INTO TBL_BENEFICIOS_X_PLAN (CODIGO_BENEFICIO, CODIGO_TIPO_PLAN) VALUES (1, 3);
INSERT INTO TBL_BENEFICIOS_X_PLAN (CODIGO_BENEFICIO, CODIGO_TIPO_PLAN) VALUES (2, 3);
INSERT INTO TBL_BENEFICIOS_X_PLAN (CODIGO_BENEFICIO, CODIGO_TIPO_PLAN) VALUES (3, 3);
INSERT INTO TBL_BENEFICIOS_X_PLAN (CODIGO_BENEFICIO, CODIGO_TIPO_PLAN) VALUES (4, 3);
INSERT INTO TBL_BENEFICIOS_X_PLAN (CODIGO_BENEFICIO, CODIGO_TIPO_PLAN) VALUES (5, 3);
INSERT INTO TBL_BENEFICIOS_X_PLAN (CODIGO_BENEFICIO, CODIGO_TIPO_PLAN) VALUES (6, 3);

INSERT INTO TBL_USUARIOS (CODIGO_USUARIO, CODIGO_TIPO_PLAN, CODIGO_GENERO, CORREO, CONTRASENIA, TELEFONO) VALUES (1, 1, 2, 'ronyrdz@gmail.com', 'asd.456', '99990000');

COMMIT;