
--Linea para desbloquear la consola:
--SET SERVEROUTPUT ON;

--Insertar una pantalla:
CREATE OR REPLACE PROCEDURE P_INSERTAR_PANTALLA(
    P_COD_USU TBL_PANTALLAS.CODIGO_USUARIO%TYPE,
    P_COD_MAD TBL_PANTALLAS.CODIGO_MADUREZ%TYPE,
    P_COD_IDI_LEN TBL_PANTALLAS.CODIGO_IDIOMA_LENGUAJE%TYPE,
    P_COD_EST_SUB TBL_PANTALLAS.CODIGO_ESTILO_SUB%TYPE,
    P_COD_CONF_REP TBL_PANTALLAS.CODIGO_CONFIG_REPRODUCCION%TYPE,
    P_NOM_PAN TBL_PANTALLAS.NOMBRE_PANTALLA%TYPE
) AS

BEGIN
    INSERT INTO TBL_PANTALLAS (CODIGO_PANTALLA, CODIGO_USUARIO, CODIGO_MADUREZ, CODIGO_IDIOMA_LENGUAJE, CODIGO_ESTILO_SUB, CODIGO_CONFIG_REPRODUCCION, NOMBRE_PANTALLA, CORREO_PANTALLA, URL_IMG_PANTALLA) VALUES (SEQ_COD_PANTALLA.NEXTVAL, P_COD_USU, P_COD_MAD, P_COD_IDI_LEN, P_COD_EST_SUB, P_COD_CONF_REP, P_NOM_PAN, NULL, NULL);
    COMMIT;

EXCEPTION
    WHEN OTHERS THEN
    DBMS_OUTPUT.PUT_LINE('ERROR: ' || SQLCODE || '-'||SQLERRM);
    ROLLBACK;

END;

--Ejecucion:
--CALL P_INSERTAR_PANTALLA(2, 3, 1, 0, 0, 'Nombre 1');



--Actualizar info pantalla: manage.php
CREATE OR REPLACE PROCEDURE P_ACTUALIZAR_PANTALLA(
    P_CODIGO_MADUREZ TBL_PANTALLAS.CODIGO_MADUREZ%TYPE,
    P_CODIGO_IDIOMA_LENGUAJE TBL_PANTALLAS.CODIGO_IDIOMA_LENGUAJE%TYPE,
    P_NOMBRE_PANTALLA TBL_PANTALLAS.NOMBRE_PANTALLA%TYPE,
    P_NOMBRE_PANTALLA_VIEJO TBL_PANTALLAS.NOMBRE_PANTALLA%TYPE,
    P_COD_USUARIO TBL_PANTALLAS.CODIGO_USUARIO%TYPE
) AS

BEGIN
    UPDATE TBL_PANTALLAS 
    SET  TBL_PANTALLAS.CODIGO_MADUREZ = P_CODIGO_MADUREZ,
         TBL_PANTALLAS.CODIGO_IDIOMA_LENGUAJE = P_CODIGO_IDIOMA_LENGUAJE,
         TBL_PANTALLAS.NOMBRE_PANTALLA = P_NOMBRE_PANTALLA
    WHERE TBL_PANTALLAS.NOMBRE_PANTALLA = P_NOMBRE_PANTALLA_VIEJO AND TBL_PANTALLAS.CODIGO_USUARIO = P_COD_USUARIO;
    COMMIT;

EXCEPTION
    WHEN OTHERS THEN
    DBMS_OUTPUT.PUT_LINE('ERROR: ' || SQLCODE || '-'||SQLERRM);
    ROLLBACK;

END;

--Ejecucion:
--CALL P_ACTUALIZAR_PANTALLA (1, 1, 'Nuevo Nombre','Nombre Viejo', 1);



--Actualizar correo del usuario: 
CREATE OR REPLACE PROCEDURE P_ACTUALIZAR_CORREO(
    P_CORREO_VIEJO TBL_USUARIOS.CORREO%TYPE,
    P_CORREO_NUEVO TBL_USUARIOS.CORREO%TYPE
) AS

BEGIN
    UPDATE TBL_USUARIOS
    SET TBL_USUARIOS.CORREO = P_CORREO_NUEVO
    WHERE TBL_USUARIOS.CORREO = P_CORREO_VIEJO;
    COMMIT;

EXCEPTION
    WHEN OTHERS THEN
    DBMS_OUTPUT.PUT_LINE('ERROR: ' || SQLCODE || '-'||SQLERRM);
    ROLLBACK;

END;

--Ejecucion:
--CALL P_ACTUALIZAR_CORREO('rony@gmail.com', 'rony2@gmail.com');



--Actualizar Contraseña
CREATE OR REPLACE PROCEDURE P_ACTUALIZAR_CONTRA(
    P_CONTRA_VIEJA TBL_USUARIOS.CONTRASENIA%TYPE,
    P_CONTRA_NUEVA TBL_USUARIOS.CONTRASENIA%TYPE
) AS

BEGIN

    UPDATE TBL_USUARIOS
    SET TBL_USUARIOS.CONTRASENIA = P_CONTRA_NUEVA
    WHERE TBL_USUARIOS.CONTRASENIA = P_CONTRA_VIEJA;
    COMMIT;

EXCEPTION
    WHEN OTHERS THEN
    DBMS_OUTPUT.PUT_LINE('ERROR: ' || SQLCODE || '-'||SQLERRM);
    ROLLBACK;

END;

--Ejecucion:
--CALL P_ACTUALIZAR_CONTRA('rony', 'rony2');



--Actualizar numero de telefono
CREATE OR REPLACE PROCEDURE P_ACTUALIZAR_TELEFONO(
    P_TELEFONO TBL_USUARIOS.TELEFONO%TYPE,
    P_USUARIO TBL_USUARIOS.CORREO%TYPE
) AS

BEGIN

    UPDATE TBL_USUARIOS
    SET TBL_USUARIOS.TELEFONO = P_TELEFONO
    WHERE TBL_USUARIOS.CORREO = P_USUARIO;
    COMMIT;

EXCEPTION
    WHEN OTHERS THEN
    DBMS_OUTPUT.PUT_LINE('ERROR: ' || SQLCODE || '-'||SQLERRM);
    ROLLBACK;

END;

--Ejecucion:
--CALL P_ACTUALIZAR_TELEFONO('98351400', 'rony2@gmail.com');


--Eliminar telefono
CREATE OR REPLACE PROCEDURE P_ELIMINAR_TELEFONO(
    P_TELEFONO TBL_USUARIOS.TELEFONO%TYPE,
    P_USUARIO TBL_USUARIOS.CORREO%TYPE
) AS

BEGIN

    UPDATE TBL_USUARIOS
    SET TBL_USUARIOS.TELEFONO = ' '
    WHERE TBL_USUARIOS.CORREO = P_USUARIO;
    COMMIT;

EXCEPTION
    WHEN OTHERS THEN
    DBMS_OUTPUT.PUT_LINE('ERROR: ' || SQLCODE || '-'||SQLERRM);
    ROLLBACK;

END;

--Ejecucion:
--CALL P_ELIMINAR_TELEFONO('98351400', 'rony2@gmail.com');



--Actualizar informacion de pago
CREATE OR REPLACE PROCEDURE P_ACTUALIZAR_INFO_PAGO(
    P_COD_USUARIO TBL_REGISTRO_TARJETA.CODIGO_USUARIO%TYPE,
    P_TIPO_TARJETA TBL_REGISTRO_TARJETA.CODIGO_TIPO_TARJETA%TYPE,
    P_NOMBRE TBL_REGISTRO_TARJETA.NOMBRE_USUARIO%TYPE,
    P_APELLIDO TBL_REGISTRO_TARJETA.APELLIDO_USUARIO%TYPE,
    P_TARJETA TBL_REGISTRO_TARJETA.NUMERO_DE_TARJETA%TYPE,
    P_FECHA TBL_REGISTRO_TARJETA.NUMERO_DE_TARJETA%TYPE,
    P_SEGURIDAD TBL_REGISTRO_TARJETA.CODIGO_DE_SEGURIDAD%TYPE
) AS
BEGIN

    UPDATE TBL_REGISTRO_TARJETA
    SET TBL_REGISTRO_TARJETA.NOMBRE_USUARIO = P_NOMBRE,
        TBL_REGISTRO_TARJETA.APELLIDO_USUARIO = P_APELLIDO,
        TBL_REGISTRO_TARJETA.NUMERO_DE_TARJETA = P_TARJETA,
        TBL_REGISTRO_TARJETA.FECHA_VENCIMIENTO = to_date(P_FECHA, 'YYYY-MM-DD'),
        TBL_REGISTRO_TARJETA.CODIGO_DE_SEGURIDAD = P_SEGURIDAD,
        TBL_REGISTRO_TARJETA.CODIGO_TIPO_TARJETA = P_TIPO_TARJETA
    WHERE TBL_REGISTRO_TARJETA.CODIGO_USUARIO = P_COD_USUARIO;
    COMMIT;

EXCEPTION
    WHEN OTHERS THEN
    DBMS_OUTPUT.PUT_LINE('ERROR: ' || SQLCODE || '-'||SQLERRM);
    ROLLBACK;

END;

--Ejecucion:
--CALL P_ACTUALIZAR_INFO_PAGO(1, 1, 'Roni', 'rodriguez', '123123123', '12/20', '0000');


--Insertar Usuario
CREATE OR REPLACE PROCEDURE P_INSERTAR_USUARIO(
    P_COD_PLAN TBL_USUARIOS.CODIGO_TIPO_PLAN%TYPE,
    P_COD_GENERO TBL_USUARIOS.CODIGO_GENERO%TYPE,
    P_CORREO TBL_USUARIOS.CORREO%TYPE,
    P_CONTRA TBL_USUARIOS.contrasenia%TYPE,
    P_TELEFONO TBL_USUARIOS.TELEFONO%TYPE
) AS
BEGIN

    INSERT INTO TBL_USUARIOS (CODIGO_USUARIO, CODIGO_TIPO_PLAN, CODIGO_GENERO, CORREO, CONTRASENIA, TELEFONO) VALUES (SEQ_COD_USUARIO.NEXTVAL, P_COD_PLAN, P_COD_GENERO, P_CORREO, P_CONTRA, P_TELEFONO);
    COMMIT;

EXCEPTION
    WHEN OTHERS THEN
    DBMS_OUTPUT.PUT_LINE('ERROR: ' || SQLCODE || '-'||SQLERRM);
    ROLLBACK;

END;

--Ejecucion:
--CALL P_INSERTAR_USUARIO(1, 1, 'RONY@GMAIL.COM', 'RONY', '9999999');


--Insertar Tarjeta
CREATE OR REPLACE PROCEDURE P_INSERTAR_TARJETA(
    P_COD_USUARIO TBL_USUARIOS.CODIGO_USUARIO%TYPE,
    P_COD_TIPO_TARJ TBL_REGISTRO_TARJETA.CODIGO_TIPO_TARJETA%TYPE,
    P_NOMBRE TBL_REGISTRO_TARJETA.NOMBRE_USUARIO%TYPE,
    P_APELLIDO TBL_REGISTRO_TARJETA.APELLIDO_USUARIO%TYPE,
    P_NUMERO_TARJ TBL_REGISTRO_TARJETA.NUMERO_DE_TARJETA%TYPE,
    P_SEGURIDAD TBL_REGISTRO_TARJETA.CODIGO_DE_SEGURIDAD%TYPE,
    P_VENCIMIENTO TBL_REGISTRO_TARJETA.FECHA_VENCIMIENTO%TYPE
) AS
BEGIN

    INSERT INTO TBL_REGISTRO_TARJETA (CODIGO_REG_TARJETA, CODIGO_USUARIO, CODIGO_TIPO_TARJETA, NOMBRE_USUARIO, APELLIDO_USUARIO, NUMERO_DE_TARJETA, CODIGO_DE_SEGURIDAD, FECHA_VENCIMIENTO) VALUES (SEQ_COD_REGIS_TARJ.NEXTVAL, P_COD_USUARIO, P_COD_TIPO_TARJ, P_NOMBRE, P_APELLIDO, P_NUMERO_TARJ, P_SEGURIDAD, P_VENCIMIENTO);
    COMMIT;

EXCEPTION
    WHEN OTHERS THEN
    DBMS_OUTPUT.PUT_LINE('ERROR: ' || SQLCODE || '-'||SQLERRM);
    ROLLBACK;

END;

--Ejecucion:
--CALL P_INSERTAR_TARJETA (21, 1, 'Pepa', 'Pig', '2193823721', '112233', TO_DATE('2019-05-01', 'YYYY-MM-DD'));


---***** SIGNE *****

--Insertar un contenido
CREATE OR REPLACE PROCEDURE P_INSERTAR_CONTENIDO(
    P_COD_TIPO_CONTENIDO TBL_CONTENIDO.CODIGO_TIPO_CONTENIDO%TYPE,
    P_COD_ESTUDIO TBL_CONTENIDO.CODIGO_ESTUDIO%TYPE,
    P_COD_IDIOMA TBL_CONTENIDO.CODIGO_IDIOMA%TYPE,
    P_COD_CALIF TBL_CONTENIDO.CODIGO_CALIF_EDAD%TYPE,
    P_NOMBRE_CONTENIDO TBL_CONTENIDO.NOMBRE_CONTENIDO%TYPE,
    P_U_VID TBL_CONTENIDO.URL_VIDEO%TYPE,
    P_U_MIN TBL_CONTENIDO.URL_MINIATURA%TYPE,
    P_DESCRIPCION TBL_CONTENIDO.DESCRIPCION%TYPE,
    P_FECHA TBL_CONTENIDO.FECHA_SUBIDA%TYPE
)AS
BEGIN

    INSERT INTO TBL_CONTENIDO (CODIGO_CONTENIDO, CODIGO_TIPO_CONTENIDO, CODIGO_ESTUDIO, CODIGO_IDIOMA, CODIGO_CALIF_EDAD, NOMBRE_CONTENIDO, URL_VIDEO, URL_MINIATURA, DESCRIPCION, FECHA_SUBIDA) VALUES (SEQ_COD_CONTENIDO.NEXTVAL, P_COD_TIPO_CONTENIDO, P_COD_ESTUDIO, P_COD_IDIOMA, P_COD_CALIF, P_NOMBRE_CONTENIDO, P_U_VID, P_U_MIN, P_DESCRIPCION, TO_DATE(P_FECHA, 'DD/MM/YYYY'));
    COMMIT;
    
EXCEPTION
    WHEN OTHERS THEN
    DBMS_OUTPUT.PUT_LINE('ERROR: ' || SQLCODE || '-'||SQLERRM);
    ROLLBACK;

END; 

--Ejecucion:
--CALL P_INSERTAR_CONTENIDO (1, 4, 2, 3, 'img/1/miniaturas/min-min polar', 'Polar', 'img/1/videos/vid polar', 'peli de polar', to_date('4/5/2019', 'DD/MM/YYYY'));


--Insertar tabla pelis
CREATE OR REPLACE PROCEDURE P_INSERTAR_PELI(
    P_COD_PELICULA TBL_PELICULAS.CODIGO_PELICULA%TYPE,
    P_CODIGO_UNIDAD TBL_UNIDADES.CODIGO_UNIDAD%TYPE,
    P_DURACION TBL_PELICULAS.DURACION_PELI%TYPE
) AS

BEGIN
    INSERT INTO TBL_PELICULAS (CODIGO_PELICULA, CODIGO_UNIDAD, DURACION_PELI) VALUES (P_COD_PELICULA, P_CODIGO_UNIDAD, P_DURACION);
    COMMIT;

EXCEPTION
    WHEN OTHERS THEN
    DBMS_OUTPUT.PUT_LINE('ERROR: ' || SQLCODE || '-'||SQLERRM);
    ROLLBACK;

END;

--Ejecucion:
--CALL P_INSERTAR_PELI(1, 5, 90);


--Insertar tabla temporadas
CREATE OR REPLACE PROCEDURE P_INSERTAR_TEMPORADA(
    P_COD_SERIE TBL_TEMPORADAS.CODIGO_SERIE%TYPE,
    P_NUM_TEMPORADA TBL_TEMPORADAS.NUMERO_TEMPORADA%TYPE,
    P_DESCRIPCION TBL_TEMPORADAS.DESCRIPCION_TEMPORADA%TYPE
) AS
BEGIN

    INSERT INTO TBL_TEMPORADAS (CODIGO_REGISTRO_TEMPORADA, CODIGO_SERIE, NUMERO_TEMPORADA, DESCRIPCION_TEMPORADA) VALUES (SEQ_COD_REG_TEMPORADA.NEXTVAL, P_COD_SERIE, P_NUM_TEMPORADA, P_DESCRIPCION);
    COMMIT;

EXCEPTION
    WHEN OTHERS THEN
    DBMS_OUTPUT.PUT_LINE('ERROR: ' || SQLCODE || '-'||SQLERRM);
    ROLLBACK;

END;

--Ejecucion:
--CALL P_INSERTAR_TEMPORADA(1, 2, 'descripcion');


--Insertr un episodio
CREATE OR REPLACE PROCEDURE P_INSERTAR_EPISODIO(
    P_COD_TEMPORADA TBL_TEMPORADAS.CODIGO_REGISTRO_TEMPORADA%TYPE,
    P_COD_UNIDAD_DURACION TBL_UNIDADES.CODIGO_UNIDAD%TYPE,
    P_DURACION TBL_EPISODIOS.DURACION_EPISODIO%TYPE,
    P_NOMBRE TBL_EPISODIOS.NOMBRE_EPISODIO%TYPE,
    P_NUMERO_EP TBL_EPISODIOS.NUMERO_EPISODIO%TYPE,
    P_DESCRIPCION TBL_EPISODIOS.DESCRIPCION_EPISODIO%TYPE
) AS
BEGIN

    INSERT INTO TBL_EPISODIOS (CODIGO_EPISODIO, CODIGO_TEMPORADA, CODIGO_UNIDAD_DURACION, DURACION_EPISODIO, NOMBRE_EPISODIO, NUMERO_EPISODIO, DESCRIPCION_EPISODIO) VALUES (SEQ_COD_EPISODIO.NEXTVAL, P_COD_TEMPORADA, P_COD_UNIDAD_DURACION, P_DURACION, P_NOMBRE, P_NUMERO_EP, P_DESCRIPCION);
    COMMIT;

EXCEPTION
    WHEN OTHERS THEN
    DBMS_OUTPUT.PUT_LINE('ERROR: ' || SQLCODE || '-'||SQLERRM);
    ROLLBACK;

END;

--Ejecucion:
--CALL P_INSERTAR_EPISODIO (1, 1, 123, 'NOMBRE', 3, 'DESC');



----Actualiza la configuracion de reproduccion 
create or replace PROCEDURE P_ACTUALIZAR_CONFIG_REP(   
    P_CODIGO_PANTALLA IN  TBL_PANTALLAS.CODIGO_PANTALLA%TYPE,
    P_CODIGO_T_USO_DATO  IN TBL_TIPO_USO_DATOS.CODIGO_TIPO_USO_DATOS%TYPE, 
    P_CODIGO_T_REPROD IN  TBL_TIPO_REPRODUCCION.CODIGO_TIPO_REPRODUCCION%TYPE,
    p_mensaje OUT VARCHAR2,
    p_codigo_resultado OUT NUMBER
) AS
    V_CODIGO_CONFIG_REP NUMBER;
BEGIN  

    SELECT CODIGO_CONFIG_REPRODUCCION INTO V_CODIGO_CONFIG_REP
    FROM TBL_PANTALLAS
    WHERE CODIGO_PANTALLA = P_CODIGO_PANTALLA;

    UPDATE TBL_REPRODUCCION
    SET  TBL_REPRODUCCION.CODIGO_TIPO_USO_DATOS = P_CODIGO_T_USO_DATO,
         TBL_REPRODUCCION.CODIGO_TIPO_REPRODUCCION= P_CODIGO_T_REPROD 
    WHERE  TBL_REPRODUCCION.CODIGO_CONFIG_REPRODUCCION = V_CODIGO_CONFIG_REP;
    COMMIT;
    p_mensaje := 'Actualizado'; 
    p_codigo_resultado:=1; 

EXCEPTION
        WHEN OTHERS THEN
        ROLLBACK;
        p_mensaje:= 'Error: ' || SQLCODE || '-'||SQLERRM;
        p_codigo_resultado:=0;
END;



----Actualiza la info de configuracion de subtitulos 
create or replace PROCEDURE P_ACTUALIZAR_CONFIG_SUB(   
    P_CODIGO_PANTALLA IN  TBL_PANTALLAS.CODIGO_PANTALLA%TYPE,
    P_NOMBRE_FUENTE  IN  TBL_TIPOS_FUENTES.NOMBRE_TIPO_FUENTE%TYPE, 
    P_COD_RGB_COLOR_FUENTE IN  TBL_COLORES.CODIGO_RGB%TYPE,
    P_TAMANIO_FUENTE  IN  TBL_ESTILOS_SUBTITULOS.TAMANIO_FUENTE%TYPE,
    P_NOMBRE_SOMBRA IN   TBL_SOMBRAS_FUENTES.NOMBRE_SOMBRA%TYPE,
    P_COD_RGB_COLOR_SOMBRA IN TBL_COLORES.CODIGO_RGB%TYPE,                    
    P_COD_RGB_COLOR_FONDO  IN  TBL_COLORES.CODIGO_RGB%TYPE,
    P_COD_RGB_COLOR_VENTANA IN TBL_COLORES.CODIGO_RGB%TYPE,
    p_mensaje OUT VARCHAR2,
    p_codigo_resultado OUT NUMBER
) AS
    V_CODIGO_ESTILO NUMBER;
    V_CODIGO_TIPO_FUENTE NUMBER;
    V_CODIGO_COLOR_FUENTE NUMBER;
    V_CODIGO_SOMBRA_FUENTE NUMBER;
    V_CODIGO_COLOR_SOMBRA  NUMBER;
    V_CODIGO_COLOR_FONDO NUMBER;
    V_CODIGO_COLOR_VENTANA NUMBER;
BEGIN  

    SELECT CODIGO_ESTILO_SUB INTO V_CODIGO_ESTILO
    FROM TBL_PANTALLAS
    WHERE CODIGO_PANTALLA = P_CODIGO_PANTALLA;

    SELECT  CODIGO_TIPO_FUENTE INTO V_CODIGO_TIPO_FUENTE
    FROM TBL_TIPOS_FUENTES
    WHERE UPPER(NOMBRE_TIPO_FUENTE) = UPPER(P_NOMBRE_FUENTE);

    SELECT  CODIGO_COLOR INTO V_CODIGO_COLOR_FUENTE
    FROM  TBL_COLORES
    WHERE CODIGO_RGB = P_COD_RGB_COLOR_FUENTE;

    SELECT  CODIGO_SOMBRA INTO V_CODIGO_SOMBRA_FUENTE
    FROM  TBL_SOMBRAS_FUENTES
    WHERE UPPER(NOMBRE_SOMBRA) = UPPER(P_NOMBRE_SOMBRA);     

    SELECT  CODIGO_COLOR INTO V_CODIGO_COLOR_SOMBRA
    FROM  TBL_COLORES
    WHERE CODIGO_RGB = P_COD_RGB_COLOR_SOMBRA;

    SELECT  CODIGO_COLOR INTO V_CODIGO_COLOR_FONDO
    FROM  TBL_COLORES
    WHERE CODIGO_RGB = P_COD_RGB_COLOR_FONDO;

    SELECT  CODIGO_COLOR INTO V_CODIGO_COLOR_VENTANA
    FROM  TBL_COLORES
    WHERE CODIGO_RGB = P_COD_RGB_COLOR_VENTANA;

    UPDATE TBL_ESTILOS_SUBTITULOS
    SET  TBL_ESTILOS_SUBTITULOS.CODIGO_TIPO_FUENTE = V_CODIGO_TIPO_FUENTE,
         TBL_ESTILOS_SUBTITULOS.CODIGO_SOMBRA=V_CODIGO_SOMBRA_FUENTE,
         TBL_ESTILOS_SUBTITULOS.CODIGO_COLOR_FUENTE= V_CODIGO_COLOR_FUENTE,
         TBL_ESTILOS_SUBTITULOS.CODIGO_COLOR_SOMBRA= V_CODIGO_COLOR_SOMBRA,
         TBL_ESTILOS_SUBTITULOS.CODIGO_COLOR_FONDO= V_CODIGO_COLOR_FONDO,
         TBL_ESTILOS_SUBTITULOS.CODIGO_COLOR_VENTANA= V_CODIGO_COLOR_VENTANA,
         TBL_ESTILOS_SUBTITULOS.TAMANIO_FUENTE = P_TAMANIO_FUENTE
    WHERE  TBL_ESTILOS_SUBTITULOS.CODIGO_ESTILO_SUB = V_CODIGO_ESTILO;
    COMMIT;


    p_mensaje := 'Registro creado'; 
    p_codigo_resultado:=1; 

EXCEPTION
        WHEN OTHERS THEN
        DBMS_OUTPUT.PUT_LINE('ERROR: ' || SQLCODE || '-'||SQLERRM);
        ROLLBACK;
        p_mensaje:= 'Error al actualizar registro: ' || SQLCODE || '-'||SQLERRM;
        p_codigo_resultado:=0;
END;



-----Crea un nuevo registro de configuracion de reproduccion y este sustituye al predefinido, la primera vez que se utiliza.

create or replace PROCEDURE P_CREAR_CONFIG_REP(   
    P_CODIGO_PANTALLA IN  TBL_PANTALLAS.CODIGO_PANTALLA%TYPE,
    P_MENSAJE OUT VARCHAR2,
    P_CODIGO_RESULTADO OUT NUMBER
) AS
    V_CODIGO_CONFIG_REP NUMBER;
    V_COD_SEQ_CONFIG_REP NUMBER;
BEGIN 
    SELECT CODIGO_CONFIG_REPRODUCCION INTO V_CODIGO_CONFIG_REP
    FROM TBL_PANTALLAS
    WHERE CODIGO_PANTALLA = P_CODIGO_PANTALLA;

    IF (V_CODIGO_CONFIG_REP=0) THEN
        V_COD_SEQ_CONFIG_REP:= SEQ_COD_CONFIG_REP.nextval;
        INSERT INTO TBL_REPRODUCCION(
            CODIGO_CONFIG_REPRODUCCION,
            CODIGO_TIPO_USO_DATOS,
            CODIGO_TIPO_REPRODUCCION 
        ) VALUES (
            V_COD_SEQ_CONFIG_REP,
            3,
            2
        );
      UPDATE TBL_PANTALLAS
      SET    TBL_PANTALLAS.CODIGO_CONFIG_REPRODUCCION = V_COD_SEQ_CONFIG_REP
      WHERE  TBL_PANTALLAS.CODIGO_PANTALLA = P_CODIGO_PANTALLA;
      COMMIT;
      P_MENSAJE := 'Registro creado';
      P_CODIGO_RESULTADO:=1;
    ELSE
        P_MENSAJE := 'Ya existe registro';
        P_CODIGO_RESULTADO:=0;
    END IF;
EXCEPTION
        WHEN OTHERS THEN
        DBMS_OUTPUT.PUT_LINE('ERROR: ' || SQLCODE || '-'||SQLERRM);
        ROLLBACK;
        P_MENSAJE:= 'Error al verificar: ' || SQLCODE || '-'||SQLERRM;
        P_CODIGO_RESULTADO:=2;
END;


---------------Crea un nuevo registro de estilo subtitulo y este sustituye al predefinido la primera vez que se utiliza.
create or replace PROCEDURE P_CREAR_ESTILO_SUB(   
    P_CODIGO_PANTALLA IN  TBL_PANTALLAS.CODIGO_PANTALLA%TYPE,
    P_MENSAJE OUT VARCHAR2,
    P_CODIGO_RESULTADO OUT NUMBER
) AS
    V_CODIGO_ESTILO NUMBER;
    V_COD_SEQ_ESTILO NUMBER;
BEGIN 
    SELECT CODIGO_ESTILO_SUB INTO V_CODIGO_ESTILO
    FROM TBL_PANTALLAS
    WHERE CODIGO_PANTALLA = P_CODIGO_PANTALLA;

    IF (V_CODIGO_ESTILO = 0) THEN
        V_COD_SEQ_ESTILO := SEQ_COD_ESTILO_SUBTITULO.nextval;
        INSERT INTO TBL_ESTILOS_SUBTITULOS(
            CODIGO_ESTILO_SUB,
            CODIGO_TIPO_FUENTE,
            CODIGO_SOMBRA,
            CODIGO_COLOR_FUENTE,
            CODIGO_COLOR_SOMBRA,
            CODIGO_COLOR_FONDO,
            CODIGO_COLOR_VENTANA,
            TAMANIO_FUENTE
        ) VALUES (
            V_COD_SEQ_ESTILO,
            6,
            2,
            2,
            3,
            1,
            1,
            '20pt'
        );
      UPDATE TBL_PANTALLAS
      SET    TBL_PANTALLAS.CODIGO_ESTILO_SUB = V_COD_SEQ_ESTILO
      WHERE  TBL_PANTALLAS.CODIGO_PANTALLA = P_CODIGO_PANTALLA;
      COMMIT;
      P_MENSAJE := 'Registro creado';
      P_CODIGO_RESULTADO:=1;
    ELSE
        P_MENSAJE := 'Ya existe registro';
        P_CODIGO_RESULTADO:=0;
    END IF;
EXCEPTION
        WHEN OTHERS THEN
        DBMS_OUTPUT.PUT_LINE('ERROR: ' || SQLCODE || '-'||SQLERRM);
        ROLLBACK;
        P_MENSAJE:= 'Error al verificar: ' || SQLCODE || '-'||SQLERRM;
        P_CODIGO_RESULTADO:=0;
END;


-------Trae la informacion de la configuracion actual de reproduccion de una pantalla.

create or replace PROCEDURE P_INICIALIZAR_CONFIG_REP(  
    P_CODIGO_PANTALLA IN  TBL_PANTALLAS.CODIGO_PANTALLA%TYPE,
    P_CODIGO_T_USO_DATO  OUT TBL_TIPO_USO_DATOS.CODIGO_TIPO_USO_DATOS%TYPE, 
    P_CODIGO_T_REPROD OUT  TBL_TIPO_REPRODUCCION.CODIGO_TIPO_REPRODUCCION%TYPE,
    p_mensaje OUT VARCHAR2,
    p_codigo_resultado OUT NUMBER
) AS
    V_CODIGO_CONFIG_R NUMBER;
BEGIN 
    SELECT CODIGO_CONFIG_REPRODUCCION INTO V_CODIGO_CONFIG_R
    FROM TBL_PANTALLAS
    WHERE CODIGO_PANTALLA =  P_CODIGO_PANTALLA;

    SELECT  CODIGO_TIPO_USO_DATOS, CODIGO_TIPO_REPRODUCCION INTO 
    P_CODIGO_T_USO_DATO,P_CODIGO_T_REPROD
    FROM TBL_REPRODUCCION 
    WHERE CODIGO_CONFIG_REPRODUCCION = V_CODIGO_CONFIG_R; 

    p_mensaje := 'Registro inicializado'; 
    p_codigo_resultado:=1;

EXCEPTION
        WHEN OTHERS THEN
        p_mensaje:= 'Error al inicializar: ' || SQLCODE || '-'||SQLERRM;
        p_codigo_resultado:=0;
END;


------------------Trae la informacion de la configuracion actual del estilo de reproduccion de una pantalla

create or replace PROCEDURE P_INICIALIZAR_CONFIG_SUB(   
    P_CODIGO_PANTALLA IN  TBL_PANTALLAS.CODIGO_PANTALLA%TYPE,
    P_NOMBRE_FUENTE  OUT  TBL_TIPOS_FUENTES.NOMBRE_TIPO_FUENTE%TYPE, 
    P_COD_RGB_COLOR_FUENTE OUT  TBL_COLORES.CODIGO_RGB%TYPE,
    P_TAMANIO_FUENTE  OUT  TBL_ESTILOS_SUBTITULOS.TAMANIO_FUENTE%TYPE,
    P_NOMBRE_SOMBRA OUT   TBL_SOMBRAS_FUENTES.NOMBRE_SOMBRA%TYPE,
    P_COD_RGB_COLOR_SOMBRA OUT TBL_COLORES.CODIGO_RGB%TYPE,                    
    P_COD_RGB_COLOR_FONDO  OUT  TBL_COLORES.CODIGO_RGB%TYPE,
    P_COD_RGB_COLOR_VENTANA OUT TBL_COLORES.CODIGO_RGB%TYPE,
    p_mensaje OUT VARCHAR2,
    p_codigo_resultado OUT NUMBER
) AS
    V_CODIGO_ESTILO NUMBER;
BEGIN 
    SELECT CODIGO_ESTILO_SUB INTO V_CODIGO_ESTILO
    FROM TBL_PANTALLAS
    WHERE CODIGO_PANTALLA =  P_CODIGO_PANTALLA; ---Parametro de codigo_pantalla 

    SELECT B.NOMBRE_TIPO_FUENTE,C.CODIGO_RGB as COD_COLOR_FUENTE, D.CODIGO_RGB as COD_COLOR_SOMBRA,
           E.CODIGO_RGB as COD_COLOR_FONDO,F.CODIGO_RGB as COD_COLOR_VENTANA, A.TAMANIO_FUENTE,
           G.NOMBRE_SOMBRA INTO P_NOMBRE_FUENTE,P_COD_RGB_COLOR_FUENTE,P_COD_RGB_COLOR_SOMBRA,P_COD_RGB_COLOR_FONDO,
           P_COD_RGB_COLOR_VENTANA, P_TAMANIO_FUENTE,P_NOMBRE_SOMBRA
    FROM TBL_ESTILOS_SUBTITULOS A
    LEFT JOIN TBL_TIPOS_FUENTES B
    ON (A.CODIGO_TIPO_FUENTE = B.CODIGO_TIPO_FUENTE)
    LEFT JOIN TBL_COLORES C  --COLOR FUENTE
    ON (A.CODIGO_COLOR_FUENTE = C.CODIGO_COLOR)
    LEFT JOIN TBL_COLORES D  --COLOR SOMBRA
    ON (A.CODIGO_COLOR_SOMBRA = D.CODIGO_COLOR)
    LEFT JOIN TBL_COLORES E  --COLOR FONDO
    ON (A.CODIGO_COLOR_FONDO = E.CODIGO_COLOR)
    LEFT JOIN TBL_COLORES F  --COLOR VENTANA
    ON (A.CODIGO_COLOR_VENTANA= F.CODIGO_COLOR)
    LEFT JOIN TBL_SOMBRAS_FUENTES G  
    ON (A.CODIGO_SOMBRA= G.CODIGO_SOMBRA)
    WHERE A.CODIGO_ESTILO_SUB = V_CODIGO_ESTILO; 

    p_mensaje := 'Registro inicializado'; 
    p_codigo_resultado:=1;

EXCEPTION
        WHEN OTHERS THEN
        p_mensaje:= 'Error al inicializar: ' || SQLCODE || '-'||SQLERRM;
        p_codigo_resultado:=0;
END;