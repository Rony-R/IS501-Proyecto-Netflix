
--Linea para desbloquear la consola:
SET SERVEROUTPUT ON;

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
CALL P_INSERTAR_PANTALLA(2, 3, 1, 0, 0, 'Nombre 1');

--Actualizar info pantalla
CREATE OR REPLACE PROCEDURE P_ACTUALIZAR_PANTALLA(
    P_CODIGO_USUARIO TBL_PANTALLAS.CODIGO_USUARIO%TYPE,
    P_CODIGO_MADUREZ TBL_PANTALLAS.CODIGO_MADUREZ%TYPE,
    P_CODIGO_IDIOMA_LENGUAJE TBL_PANTALLAS.CODIGO_IDIOMA_LENGUAJE%TYPE,
    P_CODIGO_ESTILO_SUB TBL_PANTALLAS.CODIGO_ESTILO_SUB%TYPE,
    P_CODIGO_CONFIG_REPRO TBL_PANTALLAS.CODIGO_CONFIG_REPRODUCCION%TYPE,
    P_NOMBRE_PANTALLA TBL_PANTALLAS.NOMBRE_PANTALLA%TYPE,
    P_CORREO_PANTALLA TBL_PANTALLAS.CORREO_PANTALLA%TYPE,
    P_URL_IMG_PANTALLA TBL_PANTALLAS.URL_IMG_PANTALLA%TYPE
) AS

BEGIN
    UPDATE TBL_PANTALLAS 
    SET  TBL_PANTALLAS.CODIGO_USUARIO%TYPE = P_CODIGO_MADUREZ,
         TBL_PANTALLAS.CODIGO_IDIOMA_LENGUAJE%TYPE = P_CODIGO_IDIOMA_LENGUAJE,
         TBL_PANTALLAS.CODIGO_ESTILO_SUB%TYPE = P_CODIGO_ESTILO_SUB,
         TBL_PANTALLAS.CODIGO_CONFIG_REPRODUCCION%TYPE = P_CODIGO_CONFIG_REPRO,
         TBL_PANTALLAS.NOMBRE_PANTALLA%TYPE = P_NOMBRE_PANTALLA,
         TBL_PANTALLAS.CORREO_PANTALLA%TYPE = P_CORREO_PANTALLA,
         TBL_PANTALLAS.URL_IMG_PANTALLA%TYPE = P_URL_IMG_PANTALLA
    WHERE 
    COMMIT;

EXCEPTION
    WHEN OTHER THEN
    DBMS_OUTPUT.PUT_LINE('ERROR: ' || SQLCODE || '-'||SQLERRM);
    ROLLBACK;

END;

