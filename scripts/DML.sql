INSERT INTO TIPO_LIKE_DISLIKE (CODIGO_TIPO_L_D, NOMBRE_TIPO) VALUES (1, 'LIKE');
INSERT INTO TIPO_LIKE_DISLIKE (CODIGO_TIPO_L_D, NOMBRE_TIPO) VALUES (2, 'DISLIKE');

INSERT INTO TBL_TIPO_CONTENIDO (CODIGO_TIPO_CONTENIDO, TIPO_CONTENIDO) VALUES (1, 'PELICULA');
INSERT INTO TBL_TIPO_CONTENIDO (CODIGO_TIPO_CONTENIDO, TIPO_CONTENIDO) VALUES (2, 'SERIE');

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

INSERT INTO TBL_TIPOS_TARJETAS (CODIGO_TIPO_TARJETA, NOMBRE_TIPO_TARJETA) VALUES (1, 'Credito');
INSERT INTO TBL_TIPOS_TARJETAS (CODIGO_TIPO_TARJETA, NOMBRE_TIPO_TARJETA) VALUES (2, 'Debito');

INSERT INTO TBL_MARCAS (CODIGO_MARCA, NOMBRE_MARCA, NOMBRE_EMPRESA, LOGO) VALUES (1, 'Huawei', 'Empresa 1', 'Direccion 1');
INSERT INTO TBL_MARCAS (CODIGO_MARCA, NOMBRE_MARCA, NOMBRE_EMPRESA, LOGO) VALUES (2, 'Samsung', 'Empresa 2', 'Direccion 2');
INSERT INTO TBL_MARCAS (CODIGO_MARCA, NOMBRE_MARCA, NOMBRE_EMPRESA, LOGO) VALUES (3, 'Iphone', 'Empresa 3', 'Direccion 3');
INSERT INTO TBL_MARCAS (CODIGO_MARCA, NOMBRE_MARCA, NOMBRE_EMPRESA, LOGO) VALUES (4, 'Blu', 'Empresa 4', 'Direccion 4');
INSERT INTO TBL_MARCAS (CODIGO_MARCA, NOMBRE_MARCA, NOMBRE_EMPRESA, LOGO) VALUES (5, 'Sony', 'Empresa 5', 'Direccion 5');
INSERT INTO TBL_MARCAS (CODIGO_MARCA, NOMBRE_MARCA, NOMBRE_EMPRESA, LOGO) VALUES (6, 'LG', 'Empresa 6', 'Direccion 6');
INSERT INTO TBL_MARCAS (CODIGO_MARCA, NOMBRE_MARCA, NOMBRE_EMPRESA, LOGO) VALUES (7, 'HP', 'Empresa 7', 'Direccion 7');
INSERT INTO TBL_MARCAS (CODIGO_MARCA, NOMBRE_MARCA, NOMBRE_EMPRESA, LOGO) VALUES (8, 'Asus', 'Empresa 8', 'Direccion 8');
INSERT INTO TBL_MARCAS (CODIGO_MARCA, NOMBRE_MARCA, NOMBRE_EMPRESA, LOGO) VALUES (9, 'Lenovo', 'Empresa 9', 'Direccion 9');
INSERT INTO TBL_MARCAS (CODIGO_MARCA, NOMBRE_MARCA, NOMBRE_EMPRESA, LOGO) VALUES (10, 'Dell', 'Empresa 10', 'Direccion 10');
INSERT INTO TBL_MARCAS (CODIGO_MARCA, NOMBRE_MARCA, NOMBRE_EMPRESA, LOGO) VALUES (11, 'Mac', 'Empresa 11', 'Direccion 11');
INSERT INTO TBL_MARCAS (CODIGO_MARCA, NOMBRE_MARCA, NOMBRE_EMPRESA, LOGO) VALUES (12, 'Toshiba', 'Empresa 12', 'Direccion 12');

--INSERT INTO TBL_USUARIOS (CODIGO_USUARIO, CODIGO_TIPO_PLAN, CODIGO_GENERO, CORREO, CONTRASENIA, TELEFONO) VALUES (1, 1, 2, 'rony@gmail.com', 'rony', '99990000');
--INSERT INTO TBL_USUARIOS (CODIGO_USUARIO, CODIGO_TIPO_PLAN, CODIGO_GENERO, CORREO, CONTRASENIA, TELEFONO) VALUES (2, 1, 2, 'paco@gmail.com', 'paco', '98981111');
--INSERT INTO TBL_USUARIOS (CODIGO_USUARIO, CODIGO_TIPO_PLAN, CODIGO_GENERO, CORREO, CONTRASENIA, TELEFONO) VALUES (3, 2, 2, 'morgan@gmail.com', 'morgan', '97972222');
--INSERT INTO TBL_USUARIOS (CODIGO_USUARIO, CODIGO_TIPO_PLAN, CODIGO_GENERO, CORREO, CONTRASENIA, TELEFONO) VALUES (4, 2, 1, 'ana@gmail.com', 'ana', '89890000');
--INSERT INTO TBL_USUARIOS (CODIGO_USUARIO, CODIGO_TIPO_PLAN, CODIGO_GENERO, CORREO, CONTRASENIA, TELEFONO) VALUES (5, 3, 1, 'maria@gmail.com', 'maria', '88881111');
--INSERT INTO TBL_USUARIOS (CODIGO_USUARIO, CODIGO_TIPO_PLAN, CODIGO_GENERO, CORREO, CONTRASENIA, TELEFONO) VALUES (6, 3, 1, 'luisa@gmail.com', 'luisa', '87340000');

INSERT INTO TBL_COLORES (CODIGO_COLOR, NOMBRE_COLOR, NUMERO_HEXADECIMAL, CODIGO_RGB) VALUES (1, 'Transparente', 'transparent','transparent');
INSERT INTO TBL_COLORES (CODIGO_COLOR, NOMBRE_COLOR, NUMERO_HEXADECIMAL, CODIGO_RGB) VALUES (2, 'Blanco', '#fff','rgb(255, 255, 255)');
INSERT INTO TBL_COLORES (CODIGO_COLOR, NOMBRE_COLOR, NUMERO_HEXADECIMAL, CODIGO_RGB) VALUES (3, 'Negro', '#000','rgb(0, 0, 0)');
INSERT INTO TBL_COLORES (CODIGO_COLOR, NOMBRE_COLOR, NUMERO_HEXADECIMAL, CODIGO_RGB) VALUES (4, 'Rojo', '#c80000','rgb(200, 0, 0)');
INSERT INTO TBL_COLORES (CODIGO_COLOR, NOMBRE_COLOR, NUMERO_HEXADECIMAL, CODIGO_RGB) VALUES (5, 'Verde', '#00c800','rgb(0, 200, 0)');
INSERT INTO TBL_COLORES (CODIGO_COLOR, NOMBRE_COLOR, NUMERO_HEXADECIMAL, CODIGO_RGB) VALUES (6, 'Azul', '#0000c8','rgb(0, 0, 200)');
INSERT INTO TBL_COLORES (CODIGO_COLOR, NOMBRE_COLOR, NUMERO_HEXADECIMAL, CODIGO_RGB) VALUES (7, 'Amarillo', '#eedc00','rgb(238, 220, 0)');
INSERT INTO TBL_COLORES (CODIGO_COLOR, NOMBRE_COLOR, NUMERO_HEXADECIMAL, CODIGO_RGB) VALUES (8, 'Magenta', '#d60080','rgb(214, 0, 128)');
INSERT INTO TBL_COLORES (CODIGO_COLOR, NOMBRE_COLOR, NUMERO_HEXADECIMAL, CODIGO_RGB) VALUES (9, 'Azul turquesa', '#009fda','rgb(0, 159, 218)');

INSERT INTO TBL_TIPO_USO_DATOS (CODIGO_TIPO_USO_DATOS, NOMBRE, DESCRIPCION , CALIDAD_VIDEO) VALUES ('1', 'Automática', 'Uso de datos y calidad de video predeterminados', 'predeterminada');
INSERT INTO TBL_TIPO_USO_DATOS (CODIGO_TIPO_USO_DATOS, NOMBRE, DESCRIPCION , CALIDAD_VIDEO, DATOS_X_HORA) VALUES ('2', 'Baja', 'Calidad de video básica, hasta 0.3 GB por hora', 'básica', '0.3 GB');
INSERT INTO TBL_TIPO_USO_DATOS (CODIGO_TIPO_USO_DATOS, NOMBRE, DESCRIPCION , CALIDAD_VIDEO, DATOS_X_HORA) VALUES ('3', 'Media', 'Calidad de video estándar, hasta 0.7 GB por hora', 'estándar', '0.7 GB');
INSERT INTO TBL_TIPO_USO_DATOS (CODIGO_TIPO_USO_DATOS, NOMBRE, DESCRIPCION , CALIDAD_VIDEO, DATOS_X_HORA) VALUES ('4', 'Alta', 'La mejor calidad de video, hasta 3 GB por hora para HD, 7 GB por hora para Ultra HD', 'premium', '0.7 GB');

INSERT INTO TBL_TIPO_REPRODUCCION (CODIGO_TIPO_REPRODUCCION, NOMBRE_TIPO_REPRODUCCION) VALUES (1,'Manual');
INSERT INTO TBL_TIPO_REPRODUCCION  (CODIGO_TIPO_REPRODUCCION, NOMBRE_TIPO_REPRODUCCION) VALUES (2,'Automática');

INSERT INTO TBL_SOMBRAS_FUENTES(CODIGO_SOMBRA, NOMBRE_SOMBRA) VALUES (1,'Ninguno');
INSERT INTO TBL_SOMBRAS_FUENTES(CODIGO_SOMBRA, NOMBRE_SOMBRA) VALUES (2,'Sombra paralela');
INSERT INTO TBL_SOMBRAS_FUENTES(CODIGO_SOMBRA, NOMBRE_SOMBRA) VALUES (3,'Uniforme');

INSERT INTO TBL_TIPOS_FUENTES(CODIGO_TIPO_FUENTE, NOMBRE_TIPO_FUENTE) VALUES (1,'Inconsolata');
INSERT INTO TBL_TIPOS_FUENTES(CODIGO_TIPO_FUENTE, NOMBRE_TIPO_FUENTE) VALUES (2,'Lora');
INSERT INTO TBL_TIPOS_FUENTES(CODIGO_TIPO_FUENTE, NOMBRE_TIPO_FUENTE) VALUES (3,'OpenSans');
INSERT INTO TBL_TIPOS_FUENTES(CODIGO_TIPO_FUENTE, NOMBRE_TIPO_FUENTE) VALUES (4,'Oswald');
INSERT INTO TBL_TIPOS_FUENTES(CODIGO_TIPO_FUENTE, NOMBRE_TIPO_FUENTE) VALUES (5,'Slabo');
INSERT INTO TBL_TIPOS_FUENTES(CODIGO_TIPO_FUENTE, NOMBRE_TIPO_FUENTE) VALUES (6,'Staatliche');

/*Estilo subtitulos por defecto*/
INSERT INTO TBL_ESTILOS_SUBTITULOS (CODIGO_ESTILO_SUB, CODIGO_TIPO_FUENTE, CODIGO_SOMBRA, CODIGO_COLOR_FUENTE, CODIGO_COLOR_SOMBRA, CODIGO_COLOR_FONDO, CODIGO_COLOR_VENTANA, TAMANIO_FUENTE) VALUES(0, 6, 2, 2, 3, 1, 1, '20pt');

/*Reproduccion por defecto*/
INSERT INTO TBL_REPRODUCCION (CODIGO_CONFIG_REPRODUCCION, CODIGO_TIPO_USO_DATOS, CODIGO_TIPO_REPRODUCCION) VALUES (0, 3, 2);

--INSERT INTO TBL_PANTALLAS (CODIGO_PANTALLA, CODIGO_USUARIO, CODIGO_MADUREZ, CODIGO_IDIOMA_LENGUAJE, CODIGO_ESTILO_SUB, CODIGO_CONFIG_REPRODUCCION, NOMBRE_PANTALLA, CORREO_PANTALLA, URL_IMG_PANTALLA) VALUES (3, 3, 4, 1, 0, 0, 'Tia Anacleta', null, null);


INSERT INTO TBL_CALIFICACION_EDAD (CODIGO_CALIF_EDAD, NOMBRE_CALIF, DESCRIPCION) VALUES (1, 'A', 'Apta para todo publico'); 
INSERT INTO TBL_CALIFICACION_EDAD (CODIGO_CALIF_EDAD, NOMBRE_CALIF, DESCRIPCION) VALUES (2, '+12', 'Mayores de 12 años'); 
INSERT INTO TBL_CALIFICACION_EDAD (CODIGO_CALIF_EDAD, NOMBRE_CALIF, DESCRIPCION) VALUES (3, '+18', 'Mayores de 18 años');
INSERT INTO TBL_CALIFICACION_EDAD (CODIGO_CALIF_EDAD, NOMBRE_CALIF, DESCRIPCION) VALUES (4, 'D', 'Adultos unicamente'); 
INSERT INTO TBL_CALIFICACION_EDAD (CODIGO_CALIF_EDAD, NOMBRE_CALIF, DESCRIPCION) VALUES (5, 'XXX', 'Picaros unicamente');


--INSERT INTO TBL_REGISTRO_TARJETA (CODIGO_REG_TARJETA, CODIGO_USUARIO, CODIGO_TIPO_TARJETA, NOMBRE_USUARIO, APELLIDO_USUARIO, NUMERO_DE_TARJETA, CODIGO_DE_SEGURIDAD, FECHA_VENCIMIENTO) VALUES (1, 1, 1, 'Rony', 'Rodriguez', '2046781', '123', to_date('6/12/19', 'DD/MM/YYYY'));

--INSERT INTO TBL_HISTORIAL_PAGO (CODIGO_REGISTRO_HISTORIAL, CODIGO_USUARIO, FECHA_INICIO, FECHA_FIN, NUMERO_TARJETA, MONTO_PAGO) VALUES (6, 6, TO_DATE('5/5/18', 'MM/DD/YY'), TO_DATE('6/4/18', 'MM/DD/YY'), 'Tarjeta Usuario 6', 13);

-------------------------------insert signe---------------------------------

INSERT INTO TBL_CONTENIDO (CODIGO_CONTENIDO, CODIGO_TIPO_CONTENIDO, CODIGO_ESTUDIO, CODIGO_IDIOMA, CODIGO_CALIF_EDAD, NOMBRE_CONTENIDO, URL_VIDEO, URL_MINIATURA, DESCRIPCION, FECHA_SUBIDA) VALUES (1, 1, 1, 2, 1, 'Avengers', 'img/1/videos/avengers.3gpp', 'img/1/miniaturas/min-avengers.jpg', 'Avengers: Infinity War', TO_DATE('2019-02-21 00:00:00', 'YYYY-MM-DD HH24:MI:SS'));
INSERT INTO TBL_CONTENIDO (CODIGO_CONTENIDO, CODIGO_TIPO_CONTENIDO, CODIGO_ESTUDIO, CODIGO_IDIOMA, CODIGO_CALIF_EDAD, NOMBRE_CONTENIDO, URL_VIDEO, URL_MINIATURA, DESCRIPCION, FECHA_SUBIDA) VALUES (2, 1, 2, 1, 1, 'Batman', 'img/1/videos/batman.3gpp', 'img/1/miniaturas/min-batman.jpg', 'Noche Oscura', TO_DATE('2019-02-27 00:00:00', 'YYYY-MM-DD HH24:MI:SS'));
INSERT INTO TBL_CONTENIDO (CODIGO_CONTENIDO, CODIGO_TIPO_CONTENIDO, CODIGO_ESTUDIO, CODIGO_IDIOMA, CODIGO_CALIF_EDAD, NOMBRE_CONTENIDO, URL_VIDEO, URL_MINIATURA, DESCRIPCION, FECHA_SUBIDA) VALUES (3, 2, 4, 2, 3, 'Breaking Bad','img/2/videos/breaking.mp4', 'img/2/miniaturas/min-breaking.jpg', 'Narcotrafico', TO_DATE('2019-02-27 00:00:00', 'YYYY-MM-DD HH24:MI:SS'));
INSERT INTO TBL_CONTENIDO (CODIGO_CONTENIDO, CODIGO_TIPO_CONTENIDO, CODIGO_ESTUDIO, CODIGO_IDIOMA, CODIGO_CALIF_EDAD, NOMBRE_CONTENIDO, URL_VIDEO, URL_MINIATURA, DESCRIPCION, FECHA_SUBIDA) VALUES (4, 1, 1, 2, 3, 'Deadpool', 'img/1/videos/deadpool.3gpp', 'img/1/miniaturas/min-deadpool.jpg', 'X-man independiente', TO_DATE('2019-02-28 00:00:00', 'YYYY-MM-DD HH24:MI:SS'));
INSERT INTO TBL_CONTENIDO (CODIGO_CONTENIDO, CODIGO_TIPO_CONTENIDO, CODIGO_ESTUDIO, CODIGO_IDIOMA, CODIGO_CALIF_EDAD, NOMBRE_CONTENIDO, URL_VIDEO, URL_MINIATURA, DESCRIPCION, FECHA_SUBIDA) VALUES (5, 1, 4, 3, 4, 'Ted', 'img/1/videos/ted.3gpp', 'img/1/miniaturas/min-ted.jpg', 'Un oso picaro', TO_DATE('2019-02-28 00:00:00', 'YYYY-MM-DD HH24:MI:SS'));
INSERT INTO TBL_CONTENIDO (CODIGO_CONTENIDO, CODIGO_TIPO_CONTENIDO, CODIGO_ESTUDIO, CODIGO_IDIOMA, CODIGO_CALIF_EDAD, NOMBRE_CONTENIDO, URL_VIDEO, URL_MINIATURA, DESCRIPCION, FECHA_SUBIDA) VALUES (6, 1, 3, 1, 1, 'Rampage', 'img/1/videos/rampage.3gpp', 'img/1/miniaturas/min-rampage.jpg', 'Alteracion genetica', TO_DATE('2019-03-04 00:00:00', 'YYYY-MM-DD HH24:MI:SS'));
INSERT INTO TBL_CONTENIDO (CODIGO_CONTENIDO, CODIGO_TIPO_CONTENIDO, CODIGO_ESTUDIO, CODIGO_IDIOMA, CODIGO_CALIF_EDAD, NOMBRE_CONTENIDO, URL_VIDEO, URL_MINIATURA, DESCRIPCION, FECHA_SUBIDA) VALUES (7, 1, 3, 2, 2, 'Bird Box', 'img/1/videos/bird.mp4', 'img/1/miniaturas/min-bird.jpg', 'Criaturas Invisibles', TO_DATE('2019-03-15 00:00:00', 'YYYY-MM-DD HH24:MI:SS'));
INSERT INTO TBL_CONTENIDO (CODIGO_CONTENIDO, CODIGO_TIPO_CONTENIDO, CODIGO_ESTUDIO, CODIGO_IDIOMA, CODIGO_CALIF_EDAD, NOMBRE_CONTENIDO, URL_VIDEO, URL_MINIATURA, DESCRIPCION, FECHA_SUBIDA) VALUES (8, 2, 4, 1, 2, 'Casa de papel','img/2/videos/casa.mp4', 'img/2/miniaturas/min-casa.jpg', 'Drogas', TO_DATE('2019-03-20 00:00:00', 'YYYY-MM-DD HH24:MI:SS'));
INSERT INTO TBL_CONTENIDO (CODIGO_CONTENIDO, CODIGO_TIPO_CONTENIDO, CODIGO_ESTUDIO, CODIGO_IDIOMA, CODIGO_CALIF_EDAD, NOMBRE_CONTENIDO, URL_VIDEO, URL_MINIATURA, DESCRIPCION, FECHA_SUBIDA) VALUES (9, 2, 4, 4, 2, 'Outlander', 'img/2/videos/outlander.mp4', 'img/2/miniaturas/min-outlander.jpg', 'Viaje al pasado', TO_DATE('2019-04-04 00:00:00', 'YYYY-MM-DD HH24:MI:SS'));
INSERT INTO TBL_CONTENIDO (CODIGO_CONTENIDO, CODIGO_TIPO_CONTENIDO, CODIGO_ESTUDIO, CODIGO_IDIOMA, CODIGO_CALIF_EDAD, NOMBRE_CONTENIDO, URL_VIDEO, URL_MINIATURA, DESCRIPCION, FECHA_SUBIDA) VALUES (10, 2, 4, 2, 2, 'The Crown', 'img/2/videos/crown.mp4', 'img/2/miniaturas/min-crown.jpeg', 'Casa Real Inglaterra', TO_DATE('2019-04-05 00:00:00', 'YYYY-MM-DD HH24:MI:SS'));
INSERT INTO TBL_CONTENIDO (CODIGO_CONTENIDO, CODIGO_TIPO_CONTENIDO, CODIGO_ESTUDIO, CODIGO_IDIOMA, CODIGO_CALIF_EDAD, NOMBRE_CONTENIDO, URL_VIDEO, URL_MINIATURA, DESCRIPCION, FECHA_SUBIDA) VALUES (11, 1, 3, 2, 1, 'Los Increibles', 'img/1/videos/increibles.mp4', 'img/1/miniaturas/min-increibles.jpg', 'Familia con superpoderes', TO_DATE('2019-05-04 00:00:00', 'YYYY-MM-DD HH24:MI:SS'));
INSERT INTO TBL_CONTENIDO (CODIGO_CONTENIDO, CODIGO_TIPO_CONTENIDO, CODIGO_ESTUDIO, CODIGO_IDIOMA, CODIGO_CALIF_EDAD, NOMBRE_CONTENIDO, URL_VIDEO, URL_MINIATURA, DESCRIPCION, FECHA_SUBIDA) VALUES (12, 1, 3, 1, 2, 'Love, Rosie', 'img/1/videos/rosie.mp4', 'img/1/miniaturas/min-rosie.jpg', 'Amor de Jovenes ', TO_DATE('2019-05-04 00:00:00', 'YYYY-MM-DD HH24:MI:SS'));
INSERT INTO TBL_CONTENIDO (CODIGO_CONTENIDO, CODIGO_TIPO_CONTENIDO, CODIGO_ESTUDIO, CODIGO_IDIOMA, CODIGO_CALIF_EDAD, NOMBRE_CONTENIDO, URL_VIDEO, URL_MINIATURA, DESCRIPCION, FECHA_SUBIDA) VALUES (13, 1, 3, 1, 4, 'Slender Man', 'img/1/videos/slender.3gpp', 'img/1/miniaturas/min-slender.jpg', 'Hombre alto', TO_DATE('2019-05-04 00:00:00', 'YYYY-MM-DD HH24:MI:SS'));
INSERT INTO TBL_CONTENIDO (CODIGO_CONTENIDO, CODIGO_TIPO_CONTENIDO, CODIGO_ESTUDIO, CODIGO_IDIOMA, CODIGO_CALIF_EDAD, NOMBRE_CONTENIDO, URL_VIDEO, URL_MINIATURA, DESCRIPCION, FECHA_SUBIDA) VALUES (14, 1, 4, 2, 4, 'La Monja', 'img/1/videos/monja.3gpp', 'img/1/miniaturas/min-monja.jpg', 'Un demonio dentro de una monja', TO_DATE('2019-05-04 00:00:00', 'YYYY-MM-DD HH24:MI:SS'));

INSERT INTO TBL_CATEGORIAS_NET (CODIGO_CATEGORIA, NOMBRE_CATEGORIA) VALUES (1, 'Popular en Netflix');
INSERT INTO TBL_CATEGORIAS_NET (CODIGO_CATEGORIA, NOMBRE_CATEGORIA) VALUES (2, 'Tendencia de ahora');
INSERT INTO TBL_CATEGORIAS_NET (CODIGO_CATEGORIA, NOMBRE_CATEGORIA) VALUES (3, 'Originales de Netflix');
INSERT INTO TBL_CATEGORIAS_NET (CODIGO_CATEGORIA, NOMBRE_CATEGORIA) VALUES (4, 'Infantiles');
INSERT INTO TBL_CATEGORIAS_NET (CODIGO_CATEGORIA, NOMBRE_CATEGORIA) VALUES (5, 'Comedias');
INSERT INTO TBL_CATEGORIAS_NET (CODIGO_CATEGORIA, NOMBRE_CATEGORIA) VALUES (6, 'Acción y Aventuras');
INSERT INTO TBL_CATEGORIAS_NET (CODIGO_CATEGORIA, NOMBRE_CATEGORIA) VALUES (7, 'Documentales');
INSERT INTO TBL_CATEGORIAS_NET (CODIGO_CATEGORIA, NOMBRE_CATEGORIA) VALUES (8, 'Dramas');
INSERT INTO TBL_CATEGORIAS_NET (CODIGO_CATEGORIA, NOMBRE_CATEGORIA) VALUES (9, 'Románticas');
INSERT INTO TBL_CATEGORIAS_NET (CODIGO_CATEGORIA, NOMBRE_CATEGORIA) VALUES (10, 'Terror');


INSERT INTO TBL_CATEGOIAS_X_CONTENIDO (CODIGO_CATEGORIA, CODIGO_CONTENIDO) VALUES (1, 3);
INSERT INTO TBL_CATEGOIAS_X_CONTENIDO (CODIGO_CATEGORIA, CODIGO_CONTENIDO) VALUES (1, 2);
INSERT INTO TBL_CATEGOIAS_X_CONTENIDO (CODIGO_CATEGORIA, CODIGO_CONTENIDO) VALUES (1, 9);
INSERT INTO TBL_CATEGOIAS_X_CONTENIDO (CODIGO_CATEGORIA, CODIGO_CONTENIDO) VALUES (1, 6);
INSERT INTO TBL_CATEGOIAS_X_CONTENIDO (CODIGO_CATEGORIA, CODIGO_CONTENIDO) VALUES (1, 4);
INSERT INTO TBL_CATEGOIAS_X_CONTENIDO (CODIGO_CATEGORIA, CODIGO_CONTENIDO) VALUES (1, 1);
INSERT INTO TBL_CATEGOIAS_X_CONTENIDO (CODIGO_CATEGORIA, CODIGO_CONTENIDO) VALUES (2, 1);
INSERT INTO TBL_CATEGOIAS_X_CONTENIDO (CODIGO_CATEGORIA, CODIGO_CONTENIDO) VALUES (2, 3);
INSERT INTO TBL_CATEGOIAS_X_CONTENIDO (CODIGO_CATEGORIA, CODIGO_CONTENIDO) VALUES (2, 2);
INSERT INTO TBL_CATEGOIAS_X_CONTENIDO (CODIGO_CATEGORIA, CODIGO_CONTENIDO) VALUES (2, 5);
INSERT INTO TBL_CATEGOIAS_X_CONTENIDO (CODIGO_CATEGORIA, CODIGO_CONTENIDO) VALUES (3, 8);
INSERT INTO TBL_CATEGOIAS_X_CONTENIDO (CODIGO_CATEGORIA, CODIGO_CONTENIDO) VALUES (3, 10);
INSERT INTO TBL_CATEGOIAS_X_CONTENIDO (CODIGO_CATEGORIA, CODIGO_CONTENIDO) VALUES (3, 7);
INSERT INTO TBL_CATEGOIAS_X_CONTENIDO (CODIGO_CATEGORIA, CODIGO_CONTENIDO) VALUES (4, 2);
INSERT INTO TBL_CATEGOIAS_X_CONTENIDO (CODIGO_CATEGORIA, CODIGO_CONTENIDO) VALUES (5, 4);
INSERT INTO TBL_CATEGOIAS_X_CONTENIDO (CODIGO_CATEGORIA, CODIGO_CONTENIDO) VALUES (5, 5);
INSERT INTO TBL_CATEGOIAS_X_CONTENIDO (CODIGO_CATEGORIA, CODIGO_CONTENIDO) VALUES (6, 2);
INSERT INTO TBL_CATEGOIAS_X_CONTENIDO (CODIGO_CATEGORIA, CODIGO_CONTENIDO) VALUES (6, 1);
INSERT INTO TBL_CATEGOIAS_X_CONTENIDO (CODIGO_CATEGORIA, CODIGO_CONTENIDO) VALUES (6, 4);
INSERT INTO TBL_CATEGOIAS_X_CONTENIDO (CODIGO_CATEGORIA, CODIGO_CONTENIDO) VALUES (6, 6);
INSERT INTO TBL_CATEGOIAS_X_CONTENIDO (CODIGO_CATEGORIA, CODIGO_CONTENIDO) VALUES (9, 12);
INSERT INTO TBL_CATEGOIAS_X_CONTENIDO (CODIGO_CATEGORIA, CODIGO_CONTENIDO) VALUES (9, 10);
INSERT INTO TBL_CATEGOIAS_X_CONTENIDO (CODIGO_CATEGORIA, CODIGO_CONTENIDO) VALUES (10, 13);
INSERT INTO TBL_CATEGOIAS_X_CONTENIDO (CODIGO_CATEGORIA, CODIGO_CONTENIDO) VALUES (10, 14);
INSERT INTO TBL_CATEGOIAS_X_CONTENIDO (CODIGO_CATEGORIA, CODIGO_CONTENIDO) VALUES (8, 10);



INSERT INTO TBL_PELICULAS (CODIGO_PELICULA, CODIGO_UNIDAD, DURACION_PELI) VALUES (1, 5, 148);
INSERT INTO TBL_PELICULAS (CODIGO_PELICULA, CODIGO_UNIDAD, DURACION_PELI) VALUES (2, 5, 120);
INSERT INTO TBL_PELICULAS (CODIGO_PELICULA, CODIGO_UNIDAD, DURACION_PELI) VALUES (4, 5, 140);
INSERT INTO TBL_PELICULAS (CODIGO_PELICULA, CODIGO_UNIDAD, DURACION_PELI) VALUES (5, 5, 68);
INSERT INTO TBL_PELICULAS (CODIGO_PELICULA, CODIGO_UNIDAD, DURACION_PELI) VALUES (6, 5, 90);
INSERT INTO TBL_PELICULAS (CODIGO_PELICULA, CODIGO_UNIDAD, DURACION_PELI) VALUES (7, 5, 114);
INSERT INTO TBL_PELICULAS (CODIGO_PELICULA, CODIGO_UNIDAD, DURACION_PELI) VALUES (11, 5, 110);
INSERT INTO TBL_PELICULAS (CODIGO_PELICULA, CODIGO_UNIDAD, DURACION_PELI) VALUES (12, 5, 85);
INSERT INTO TBL_PELICULAS (CODIGO_PELICULA, CODIGO_UNIDAD, DURACION_PELI) VALUES (13, 5, 75);
INSERT INTO TBL_PELICULAS (CODIGO_PELICULA, CODIGO_UNIDAD, DURACION_PELI) VALUES (14, 5, 60);



INSERT INTO TBL_TEMPORADAS (CODIGO_REGISTRO_TEMPORADA, CODIGO_SERIE, NUMERO_TEMPORADA, DESCRIPCION_TEMPORADA) VALUES (1, 3, 1, 'walter en el colegio');
INSERT INTO TBL_TEMPORADAS (CODIGO_REGISTRO_TEMPORADA, CODIGO_SERIE, NUMERO_TEMPORADA, DESCRIPCION_TEMPORADA) VALUES (2, 8, 1, 'casa de papel temp1');
INSERT INTO TBL_TEMPORADAS (CODIGO_REGISTRO_TEMPORADA, CODIGO_SERIE, NUMERO_TEMPORADA, DESCRIPCION_TEMPORADA) VALUES (3, 9, 1, 'sasenach desaparece');
INSERT INTO TBL_TEMPORADAS (CODIGO_REGISTRO_TEMPORADA, CODIGO_SERIE, NUMERO_TEMPORADA, DESCRIPCION_TEMPORADA) VALUES (4, 10, 1, 'la reina isabel ');



INSERT INTO TBL_EPISODIOS (CODIGO_EPISODIO, CODIGO_TEMPORADA, CODIGO_UNIDAD_DURACION, DURACION_EPISODIO, NOMBRE_EPISODIO, NUMERO_EPISODIO, DESCRIPCION_EPISODIO) VALUES (1, 1, 5, 58, 'Principio del fin', '1', 'Walter descubre el cancer');
INSERT INTO TBL_EPISODIOS (CODIGO_EPISODIO, CODIGO_TEMPORADA, CODIGO_UNIDAD_DURACION, DURACION_EPISODIO, NOMBRE_EPISODIO, NUMERO_EPISODIO, DESCRIPCION_EPISODIO) VALUES (2, 2, 5, 59, 'papel', '1', 'una banda de amigos hace una casa');
INSERT INTO TBL_EPISODIOS (CODIGO_EPISODIO, CODIGO_TEMPORADA, CODIGO_UNIDAD_DURACION, DURACION_EPISODIO, NOMBRE_EPISODIO, NUMERO_EPISODIO, DESCRIPCION_EPISODIO) VALUES (3, 3, 5, 57, 'historia', '1', 'arbol genealogico');
INSERT INTO TBL_EPISODIOS (CODIGO_EPISODIO, CODIGO_TEMPORADA, CODIGO_UNIDAD_DURACION, DURACION_EPISODIO, NOMBRE_EPISODIO, NUMERO_EPISODIO, DESCRIPCION_EPISODIO) VALUES (4, 4, 5, 80, 'isabel', '1', 'romance');


COMMIT;
