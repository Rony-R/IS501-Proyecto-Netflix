
CREATE TABLE tbl_audios (
    " CODIGO_AUDIO"    INTEGER NOT NULL,
    codigo_idioma      INTEGER NOT NULL,
    archivo_audio      BLOB NOT NULL,
    codigo_contenido   INTEGER NOT NULL
);

ALTER TABLE tbl_audios ADD CONSTRAINT tbl_audios_pk PRIMARY KEY ( " CODIGO_AUDIO" );

CREATE TABLE tbl_beneficios (
    codigo_beneficio        INTEGER NOT NULL,
    descripcion_beneficio   VARCHAR2(150) NOT NULL
);

ALTER TABLE tbl_beneficios ADD CONSTRAINT tbl_beneficios_pk PRIMARY KEY ( codigo_beneficio );

CREATE TABLE tbl_beneficios_x_plan (
    codigo_beneficio   INTEGER NOT NULL,
    codigo_tipo_plan   INTEGER NOT NULL
);

CREATE TABLE tbl_busquedas (
    codigo_busqueda      INTEGER NOT NULL,
    codigo_pantalla      INTEGER NOT NULL,
    contenido_busqueda   VARCHAR2(200),
    fecha_busqueda       DATE
);

ALTER TABLE tbl_busquedas ADD CONSTRAINT tbl_busquedas_pk PRIMARY KEY ( codigo_busqueda );

CREATE TABLE tbl_calificacion_edad (
    codigo_calif_edad   INTEGER NOT NULL,
    nombre_calif        VARCHAR2(20) NOT NULL,
    descripcion         VARCHAR2(50) NOT NULL
);

ALTER TABLE tbl_calificacion_edad ADD CONSTRAINT tbl_calificacion_edad_pk PRIMARY KEY ( codigo_calif_edad );

CREATE TABLE tbl_cargos_personas (
    codigo_cargo   INTEGER NOT NULL,
    cargo          VARCHAR2(150) NOT NULL
);

ALTER TABLE tbl_cargos_personas ADD CONSTRAINT tbl_cargos_personas_pk PRIMARY KEY ( codigo_cargo );

CREATE TABLE tbl_categoias_x_contenido (
    codigo_categoria   INTEGER NOT NULL,
    codigo_contenido   INTEGER NOT NULL
);

ALTER TABLE tbl_categoias_x_contenido ADD CONSTRAINT tbl_categoias_x_contenido_pk PRIMARY KEY ( codigo_categoria,
                                                                                                codigo_contenido );

CREATE TABLE tbl_categorias_net (
    codigo_categoria   INTEGER NOT NULL,
    nombre_categoria   VARCHAR2(150) NOT NULL
);

ALTER TABLE tbl_categorias_net ADD CONSTRAINT tbl_categorias_net_pk PRIMARY KEY ( codigo_categoria );

CREATE TABLE tbl_colores (
    codigo_color         INTEGER NOT NULL,
    nombre_color         VARCHAR2(50) NOT NULL,
    numero_hexadecimal   VARCHAR2(50),
    codigo_rgb           VARCHAR2(50)
);

ALTER TABLE tbl_colores ADD CONSTRAINT tbl_colores_pk PRIMARY KEY ( codigo_color );

CREATE TABLE tbl_contenido (
    codigo_contenido        INTEGER NOT NULL,
    codigo_tipo_contenido   INTEGER NOT NULL,
    codigo_estudio          INTEGER NOT NULL,
    codigo_idioma           INTEGER NOT NULL,
    codigo_calif_edad       INTEGER NOT NULL,
    nombre_contenido        VARCHAR2(150) NOT NULL,
    descripcion             VARCHAR2(150) NOT NULL,
    fecha_subida            DATE NOT NULL
);

ALTER TABLE tbl_contenido ADD CONSTRAINT tbl_peliculas_pkv2 PRIMARY KEY ( codigo_contenido );

CREATE TABLE tbl_contenidos_x_listas (
    codigo_pantalla    INTEGER NOT NULL,
    codigo_contenido   INTEGER NOT NULL
);

ALTER TABLE tbl_contenidos_x_listas ADD CONSTRAINT tbl_contenidos_x_listas_pk PRIMARY KEY ( codigo_pantalla,
                                                                                            codigo_contenido );

CREATE TABLE tbl_control_parental (
    codigo_control      INTEGER NOT NULL,
    codigo_usuario      INTEGER NOT NULL,
    codigo_calif_edad   INTEGER NOT NULL,
    pin                 NUMBER,
    titulo              VARCHAR2(100)
);

ALTER TABLE tbl_control_parental ADD CONSTRAINT tbl_control_parental_pk PRIMARY KEY ( codigo_control );

CREATE TABLE tbl_descargas_x_dispositivo (
    codigo_descarga      INTEGER NOT NULL,
    codigo_dispositivo   INTEGER NOT NULL,
    codigo_pantalla      INTEGER NOT NULL,
    fecha_descarga       DATE
);

ALTER TABLE tbl_descargas_x_dispositivo ADD CONSTRAINT tbl_descargas_pk PRIMARY KEY ( codigo_descarga );

CREATE TABLE tbl_dispositivos (
    codigo_dispositivo   INTEGER NOT NULL,
    codigo_plataforma    INTEGER NOT NULL,
    codigo_lugar         INTEGER NOT NULL,
    codigo_marca         INTEGER NOT NULL,
    direccion_ip         VARCHAR2(50),
    modelo               VARCHAR2(100)
);

ALTER TABLE tbl_dispositivos ADD CONSTRAINT tbl_dispositivos_pk PRIMARY KEY ( codigo_dispositivo );

CREATE TABLE tbl_episodios (
    codigo_episodio          INTEGER NOT NULL,
    codigo_temporada         INTEGER NOT NULL,
    codigo_unidad_duracion   INTEGER NOT NULL,
    nombre_episodio          VARCHAR2(150) NOT NULL,
    numero_episodio          INTEGER NOT NULL,
    descripcion_episodio     VARCHAR2(150) NOT NULL,
    duracion_episodio        INTEGER NOT NULL
);

ALTER TABLE tbl_episodios ADD CONSTRAINT tbl_episodios_pk PRIMARY KEY ( codigo_episodio );

CREATE TABLE tbl_estilos_subtitulos (
    codigo_estilo_sub    INTEGER NOT NULL,
    codigo_tipo_fuente   INTEGER NOT NULL,
    codigo_sombra        INTEGER NOT NULL,
    archivo              BLOB NOT NULL
);

ALTER TABLE tbl_estilos_subtitulos ADD CONSTRAINT tbl_estilos_subtitulos_pk PRIMARY KEY ( codigo_estilo_sub );

CREATE TABLE tbl_estudios (
    codigo_estudio           INTEGER NOT NULL,
    codigo_lugar_ubicacion   INTEGER NOT NULL,
    nombre_estudio           VARCHAR2(150) NOT NULL,
    direccion                VARCHAR2(150) NOT NULL
);

ALTER TABLE tbl_estudios ADD CONSTRAINT tbl_estudios_pk PRIMARY KEY ( codigo_estudio );

CREATE TABLE tbl_generos_contenido (
    codigo_genero   INTEGER NOT NULL,
    nombre_genero   VARCHAR2(50) NOT NULL
);

ALTER TABLE tbl_generos_contenido ADD CONSTRAINT tbl_generos_contenido_pk PRIMARY KEY ( codigo_genero );

CREATE TABLE tbl_generos_usuarios (
    codigo_genero   INTEGER NOT NULL,
    nombre_genero   VARCHAR2(150) NOT NULL,
    abreviatura     VARCHAR2(5) NOT NULL
);

ALTER TABLE tbl_generos_usuarios ADD CONSTRAINT tbl_generos_usuarios_pk PRIMARY KEY ( codigo_genero );

CREATE TABLE tbl_generos_x_contenido (
    codigo_genero      INTEGER NOT NULL,
    codigo_contenido   INTEGER NOT NULL
);

CREATE TABLE tbl_historial_pago (
    codigo_registro_historial   INTEGER NOT NULL,
    codigo_usuario              INTEGER NOT NULL,
    fecha_inicio                DATE NOT NULL,
    fecha_fin                   DATE NOT NULL,
    numero_tarjeta              VARCHAR2(150) NOT NULL,
    monto_pago                  INTEGER NOT NULL
);

ALTER TABLE tbl_historial_pago ADD CONSTRAINT tbl_historial_pago_pk PRIMARY KEY ( codigo_registro_historial );

CREATE TABLE tbl_idiomas (
    codigo_idioma   INTEGER NOT NULL,
    idioma          VARCHAR2(150) NOT NULL
);

ALTER TABLE tbl_idiomas ADD CONSTRAINT tbl_idiomas_pk PRIMARY KEY ( codigo_idioma );

CREATE TABLE tbl_imagenes_pantalla (
    codigo_img_pantalla   INTEGER NOT NULL,
    url_imagen            VARCHAR2(150) NOT NULL
);

ALTER TABLE tbl_imagenes_pantalla ADD CONSTRAINT tbl_imagenes_pantalla_pk PRIMARY KEY ( codigo_img_pantalla );

CREATE TABLE tbl_likes_dislikes (
    codigo_registro    CHAR(1) NOT NULL,
    codigo_tipo_l_d    INTEGER NOT NULL,
    codigo_usuario     INTEGER,
    codigo_contenido   INTEGER NOT NULL,
    codigo_pantalla    INTEGER,
    fecha_like         DATE NOT NULL
);

ALTER TABLE tbl_likes_dislikes ADD CONSTRAINT tbl_likes_dislikes_pk PRIMARY KEY ( codigo_registro );

CREATE TABLE tbl_listas_usuarios (
    codigo_pantalla INTEGER NOT NULL
);

ALTER TABLE tbl_listas_usuarios ADD CONSTRAINT tbl_listas_usuarios_pk PRIMARY KEY ( codigo_pantalla );

CREATE TABLE tbl_lugares (
    codigo_lugar         INTEGER NOT NULL,
    codigo_lugar_padre   INTEGER,
    nombre_lugar         VARCHAR2(150) NOT NULL,
    longitud             VARCHAR2(150) NOT NULL,
    latitud              VARCHAR2(150) NOT NULL,
    zona_horaria         VARCHAR2(150) NOT NULL
);

ALTER TABLE tbl_lugares ADD CONSTRAINT tbl_lugares_pk PRIMARY KEY ( codigo_lugar );

CREATE TABLE tbl_marcas (
    codigo_marca     INTEGER NOT NULL,
    nombre_marca     VARCHAR2(100) NOT NULL,
    nombre_empresa   VARCHAR2(100) NOT NULL,
    logo             VARCHAR2(150) NOT NULL
);

ALTER TABLE tbl_marcas ADD CONSTRAINT tbl_marcas_pk PRIMARY KEY ( codigo_marca );

CREATE TABLE tbl_niveles_madurez (
    codigo_madurez   INTEGER NOT NULL,
    madurez          VARCHAR2(150) NOT NULL
);

ALTER TABLE tbl_niveles_madurez ADD CONSTRAINT tbl_niveles_madurez_pk PRIMARY KEY ( codigo_madurez );

CREATE TABLE tbl_notificaciones (
    codigo_notificacion   INTEGER NOT NULL,
    codigo_pantalla       INTEGER NOT NULL,
    informacion           VARCHAR2(300),
    fecha_notificacion    DATE
);

ALTER TABLE tbl_notificaciones ADD CONSTRAINT tbl_notificaciones_pk PRIMARY KEY ( codigo_notificacion );

CREATE TABLE tbl_pantallas (
    codigo_pantalla          INTEGER NOT NULL,
    codigo_usuario           INTEGER NOT NULL,
    codigo_img_pantalla      INTEGER NOT NULL,
    codigo_madurez           INTEGER NOT NULL,
    codigo_idioma_lenguaje   INTEGER NOT NULL,
    codigo_estilo_sub        INTEGER NOT NULL,
    nombre_pantalla          VARCHAR2(150) NOT NULL,
    correo_pantalla          VARCHAR2(150),
    chk_ninios               CHAR(1)
);

ALTER TABLE tbl_pantallas ADD CONSTRAINT tbl_pantallas_pk PRIMARY KEY ( codigo_pantalla );

CREATE TABLE tbl_pantallas_x_dispositivo (
    codigo_dispositivo   INTEGER NOT NULL,
    codigo_pantalla      INTEGER NOT NULL
);

ALTER TABLE tbl_pantallas_x_dispositivo ADD CONSTRAINT tbl_pantallas_x_dispositivo_pk PRIMARY KEY ( codigo_dispositivo,
                                                                                                    codigo_pantalla );

CREATE TABLE tbl_peliculas (
    codigo_pelicula   INTEGER NOT NULL,
    codigo_unidad     INTEGER NOT NULL,
    duracion_peli     VARCHAR2(100) NOT NULL
);

ALTER TABLE tbl_peliculas ADD CONSTRAINT tbl_peliculas_pk PRIMARY KEY ( codigo_pelicula );

CREATE TABLE tbl_personas (
    codigo_persona     INTEGER NOT NULL,
    codigo_cargo       INTEGER NOT NULL,
    nombre_persona     VARCHAR2(150) NOT NULL,
    apellido_persona   VARCHAR2(150) NOT NULL
);

ALTER TABLE tbl_personas ADD CONSTRAINT tbl_personas_pk PRIMARY KEY ( codigo_persona );

CREATE TABLE tbl_personas_x_contenido (
    codigo_contenido   INTEGER NOT NULL,
    codigo_persona     INTEGER NOT NULL
);

CREATE TABLE tbl_plataformas (
    codigo_plataforma   INTEGER NOT NULL,
    nombre_plataforma   VARCHAR2(100)
);

ALTER TABLE tbl_plataformas ADD CONSTRAINT tbl_plataformas_pk PRIMARY KEY ( codigo_plataforma );

CREATE TABLE tbl_registro_tarjeta (
    codigo_reg_tarjeta    INTEGER NOT NULL,
    codigo_usuario        INTEGER NOT NULL,
    codigo_tipo_tarjeta   INTEGER NOT NULL,
    nombre_usuario        VARCHAR2(150) NOT NULL,
    apellido_usuario      VARCHAR2(150) NOT NULL,
    numero_de_tarjeta     VARCHAR2(150) NOT NULL,
    codigo_de_seguridad   VARCHAR2(150) NOT NULL,
    fecha_vencimiento     DATE NOT NULL
);

ALTER TABLE tbl_registro_tarjeta ADD CONSTRAINT tbl_registro_tarjeta_pk PRIMARY KEY ( codigo_reg_tarjeta );

CREATE TABLE tbl_series (
    codigo_contenido      INTEGER NOT NULL,
    cantidad_temporadas   INTEGER NOT NULL
);

ALTER TABLE tbl_series ADD CONSTRAINT tbl_series_pk PRIMARY KEY ( codigo_contenido );

CREATE TABLE tbl_sombras_fuentes (
    codigo_sombra   INTEGER NOT NULL,
    codigo_color    INTEGER NOT NULL,
    nombre_sombra   VARCHAR2(50) NOT NULL
);

ALTER TABLE tbl_sombras_fuentes ADD CONSTRAINT tbl_sombras_fuentes_pk PRIMARY KEY ( codigo_sombra );

CREATE TABLE tbl_subtitulos (
    codigo_subtitulo    INTEGER NOT NULL,
    codigo_idioma       INTEGER NOT NULL,
    archivo_subtitulo   BLOB NOT NULL
);

ALTER TABLE tbl_subtitulos ADD CONSTRAINT tbl_subtitulos_pk PRIMARY KEY ( codigo_subtitulo );

CREATE TABLE tbl_subtitulos_x_contenido (
    codigo_contenido   INTEGER NOT NULL,
    codigo_subtitulo   INTEGER NOT NULL
);

ALTER TABLE tbl_subtitulos_x_contenido ADD CONSTRAINT tbl_subtitulos_x_contenido_pk PRIMARY KEY ( codigo_contenido,
                                                                                                  codigo_subtitulo );

CREATE TABLE tbl_subtitulos_x_trailer (
    codigo_subtitulo   INTEGER NOT NULL,
    codigo_trailer     INTEGER NOT NULL
);

ALTER TABLE tbl_subtitulos_x_trailer ADD CONSTRAINT tbl_subtitulos_x_trailer_pk PRIMARY KEY ( codigo_subtitulo,
                                                                                              codigo_trailer );

CREATE TABLE tbl_temporadas (
    codigo_temporada        INTEGER NOT NULL,
    codigo_serie            INTEGER NOT NULL,
    numero_temporada        INTEGER NOT NULL,
    descripcion_temporada   VARCHAR2(500) NOT NULL
);

ALTER TABLE tbl_temporadas ADD CONSTRAINT tbl_episodios_series_pk PRIMARY KEY ( codigo_temporada );

CREATE TABLE tbl_tipo_contenido (
    codigo_tipo_contenido   INTEGER NOT NULL,
    tipo_contenido          VARCHAR2(100) NOT NULL
);

ALTER TABLE tbl_tipo_contenido ADD CONSTRAINT tbl_tipo_contenido_pk PRIMARY KEY ( codigo_tipo_contenido );

CREATE TABLE tbl_tipo_plan (
    codigo_tipo_plan      INTEGER NOT NULL,
    codigo_unidad_pago    INTEGER NOT NULL,
    nombre_tipo_plan      VARCHAR2(50) NOT NULL,
    precio_mensual        FLOAT(3) NOT NULL,
    numero_de_pantallas   INTEGER NOT NULL
);

ALTER TABLE tbl_tipo_plan ADD CONSTRAINT tbl_tipo_plan_pk PRIMARY KEY ( codigo_tipo_plan );

CREATE TABLE tbl_tipo_reproduccion (
    codigo_reproduccion   INTEGER NOT NULL,
    codigo_pantalla       INTEGER NOT NULL,
    calidad_video         VARCHAR2(100),
    descripcion           VARCHAR2(100),
    datos_x_hora          VARCHAR2(50),
    resolucion            NUMBER,
    tipo_reproduccion     VARCHAR2(100)
);

ALTER TABLE tbl_tipo_reproduccion ADD CONSTRAINT tbl_tipo_reproduccion_pk PRIMARY KEY ( codigo_reproduccion );

CREATE TABLE tbl_tipos_fuentes (
    codigo_tipo_fuente   INTEGER NOT NULL,
    codigo_color         INTEGER NOT NULL,
    codigo_tam_fuente    INTEGER NOT NULL,
    nombre_tipo_fuente   VARCHAR2(150) NOT NULL,
    tamanio_fuente       INTEGER NOT NULL
);

ALTER TABLE tbl_tipos_fuentes ADD CONSTRAINT tbl_tipos_fuentes_pk PRIMARY KEY ( codigo_tipo_fuente );

CREATE TABLE tbl_tipos_tarjetas (
    codigo_tipo_tarjeta   INTEGER NOT NULL,
    nombre_tipo_tarjeta   VARCHAR2(150) NOT NULL
);

ALTER TABLE tbl_tipos_tarjetas ADD CONSTRAINT tbl_tipos_tarjetas_pk PRIMARY KEY ( codigo_tipo_tarjeta );

CREATE TABLE tbl_trailers (
    codigo_trailer           INTEGER NOT NULL,
    codigo_contenido         INTEGER NOT NULL,
    codigo_idioma            INTEGER NOT NULL,
    codigo_unidad_duracion   INTEGER NOT NULL,
    duracion                 INTEGER NOT NULL,
    fecha_subida             DATE NOT NULL
);

ALTER TABLE tbl_trailers ADD CONSTRAINT tbl_trailers_pk PRIMARY KEY ( codigo_trailer );

CREATE TABLE tbl_unidades (
    codigo_unidad   INTEGER NOT NULL,
    unidad          VARCHAR2(50) NOT NULL
);

ALTER TABLE tbl_unidades ADD CONSTRAINT tbl_unidades_pk PRIMARY KEY ( codigo_unidad );

CREATE TABLE tbl_usuarios (
    codigo_usuario     INTEGER NOT NULL,
    codigo_tipo_plan   INTEGER NOT NULL,
    codigo_genero      INTEGER NOT NULL,
    correo             VARCHAR2(150) NOT NULL,
    contrasenia        VARCHAR2(150) NOT NULL,
    telefono           VARCHAR2(150) NOT NULL
);

ALTER TABLE tbl_usuarios ADD CONSTRAINT tbl_usuarios_pk PRIMARY KEY ( codigo_usuario );

ALTER TABLE tbl_usuarios ADD CONSTRAINT tbl_usuarios__un UNIQUE ( correo );

CREATE TABLE tbl_vistos (
    codigo_contenido   INTEGER NOT NULL,
    codigo_usuario     INTEGER NOT NULL,
    fecha_visto        DATE NOT NULL
);

ALTER TABLE tbl_vistos ADD CONSTRAINT tbl_vistos_pk PRIMARY KEY ( codigo_usuario,
                                                                  codigo_contenido );

CREATE TABLE tipo_like_dislike (
    codigo_tipo_l_d   INTEGER NOT NULL,
    nombre_tipo       VARCHAR2(50) NOT NULL
);

ALTER TABLE tipo_like_dislike ADD CONSTRAINT tipo_like_dislike_pk PRIMARY KEY ( codigo_tipo_l_d );

ALTER TABLE tbl_audios
    ADD CONSTRAINT aud_con_fk FOREIGN KEY ( codigo_contenido )
        REFERENCES tbl_contenido ( codigo_contenido );

ALTER TABLE tbl_audios
    ADD CONSTRAINT aud_idi_fk FOREIGN KEY ( codigo_idioma )
        REFERENCES tbl_idiomas ( codigo_idioma );

ALTER TABLE tbl_beneficios_x_plan
    ADD CONSTRAINT ben_x_pla_ben_fk FOREIGN KEY ( codigo_beneficio )
        REFERENCES tbl_beneficios ( codigo_beneficio );

ALTER TABLE tbl_beneficios_x_plan
    ADD CONSTRAINT ben_x_pla_tip_pla_fk FOREIGN KEY ( codigo_tipo_plan )
        REFERENCES tbl_tipo_plan ( codigo_tipo_plan );

ALTER TABLE tbl_categoias_x_contenido
    ADD CONSTRAINT cat_x_con_cat_net_fk FOREIGN KEY ( codigo_categoria )
        REFERENCES tbl_categorias_net ( codigo_categoria );

ALTER TABLE tbl_categoias_x_contenido
    ADD CONSTRAINT cat_x_con_con_fk FOREIGN KEY ( codigo_contenido )
        REFERENCES tbl_contenido ( codigo_contenido );

ALTER TABLE tbl_contenido
    ADD CONSTRAINT con_cal_eda_fk FOREIGN KEY ( codigo_calif_edad )
        REFERENCES tbl_calificacion_edad ( codigo_calif_edad );

ALTER TABLE tbl_contenido
    ADD CONSTRAINT con_est_fk FOREIGN KEY ( codigo_estudio )
        REFERENCES tbl_estudios ( codigo_estudio );

ALTER TABLE tbl_contenido
    ADD CONSTRAINT con_idi_fk FOREIGN KEY ( codigo_idioma )
        REFERENCES tbl_idiomas ( codigo_idioma );

ALTER TABLE tbl_contenido
    ADD CONSTRAINT con_tip_con_fk FOREIGN KEY ( codigo_tipo_contenido )
        REFERENCES tbl_tipo_contenido ( codigo_tipo_contenido );

ALTER TABLE tbl_contenidos_x_listas
    ADD CONSTRAINT con_x_lis_con_fk FOREIGN KEY ( codigo_contenido )
        REFERENCES tbl_contenido ( codigo_contenido );

ALTER TABLE tbl_contenidos_x_listas
    ADD CONSTRAINT con_x_lis_lis_usu_fk FOREIGN KEY ( codigo_pantalla )
        REFERENCES tbl_listas_usuarios ( codigo_pantalla );

ALTER TABLE tbl_dispositivos
    ADD CONSTRAINT dis_mar_fk FOREIGN KEY ( codigo_marca )
        REFERENCES tbl_marcas ( codigo_marca );

ALTER TABLE tbl_descargas_x_dispositivo
    ADD CONSTRAINT dispositivos_fk FOREIGN KEY ( codigo_dispositivo )
        REFERENCES tbl_dispositivos ( codigo_dispositivo );

ALTER TABLE tbl_pantallas_x_dispositivo
    ADD CONSTRAINT dispositivos_fkv2 FOREIGN KEY ( codigo_dispositivo )
        REFERENCES tbl_dispositivos ( codigo_dispositivo );

ALTER TABLE tbl_episodios
    ADD CONSTRAINT epi_tem_fk FOREIGN KEY ( codigo_temporada )
        REFERENCES tbl_temporadas ( codigo_temporada );

ALTER TABLE tbl_episodios
    ADD CONSTRAINT epi_uni_fk FOREIGN KEY ( codigo_unidad_duracion )
        REFERENCES tbl_unidades ( codigo_unidad );

ALTER TABLE tbl_estudios
    ADD CONSTRAINT est_lug_fk FOREIGN KEY ( codigo_lugar_ubicacion )
        REFERENCES tbl_lugares ( codigo_lugar );

ALTER TABLE tbl_estilos_subtitulos
    ADD CONSTRAINT est_sub_som_fue_fk FOREIGN KEY ( codigo_sombra )
        REFERENCES tbl_sombras_fuentes ( codigo_sombra );

ALTER TABLE tbl_estilos_subtitulos
    ADD CONSTRAINT est_sub_tip_fue_fk FOREIGN KEY ( codigo_tipo_fuente )
        REFERENCES tbl_tipos_fuentes ( codigo_tipo_fuente );

ALTER TABLE tbl_generos_x_contenido
    ADD CONSTRAINT gen_x_pel_con_fk FOREIGN KEY ( codigo_contenido )
        REFERENCES tbl_contenido ( codigo_contenido );

ALTER TABLE tbl_generos_x_contenido
    ADD CONSTRAINT gen_x_pel_gen_con_fk FOREIGN KEY ( codigo_genero )
        REFERENCES tbl_generos_contenido ( codigo_genero );

ALTER TABLE tbl_historial_pago
    ADD CONSTRAINT his_pag_usu_fk FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuarios ( codigo_usuario );

ALTER TABLE tbl_likes_dislikes
    ADD CONSTRAINT lik_dis_con_fk FOREIGN KEY ( codigo_contenido )
        REFERENCES tbl_contenido ( codigo_contenido );

ALTER TABLE tbl_likes_dislikes
    ADD CONSTRAINT lik_dis_pan_fk FOREIGN KEY ( codigo_pantalla )
        REFERENCES tbl_pantallas ( codigo_pantalla );

ALTER TABLE tbl_likes_dislikes
    ADD CONSTRAINT lik_dis_tip_lik_dis_fk FOREIGN KEY ( codigo_tipo_l_d )
        REFERENCES tipo_like_dislike ( codigo_tipo_l_d );

ALTER TABLE tbl_likes_dislikes
    ADD CONSTRAINT lik_dis_usu_fk FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuarios ( codigo_usuario );

ALTER TABLE tbl_listas_usuarios
    ADD CONSTRAINT lis_usu_pant_fk FOREIGN KEY ( codigo_pantalla )
        REFERENCES tbl_pantallas ( codigo_pantalla );

ALTER TABLE tbl_lugares
    ADD CONSTRAINT lug_lug_fk FOREIGN KEY ( codigo_lugar_padre )
        REFERENCES tbl_lugares ( codigo_lugar );

ALTER TABLE tbl_pantallas
    ADD CONSTRAINT pan_est_sub_fk FOREIGN KEY ( codigo_estilo_sub )
        REFERENCES tbl_estilos_subtitulos ( codigo_estilo_sub );

ALTER TABLE tbl_pantallas
    ADD CONSTRAINT pan_idi_fk FOREIGN KEY ( codigo_idioma_lenguaje )
        REFERENCES tbl_idiomas ( codigo_idioma );

ALTER TABLE tbl_pantallas
    ADD CONSTRAINT pan_ima_pan_fk FOREIGN KEY ( codigo_img_pantalla )
        REFERENCES tbl_imagenes_pantalla ( codigo_img_pantalla );

ALTER TABLE tbl_pantallas
    ADD CONSTRAINT pan_niv_mad_fk FOREIGN KEY ( codigo_madurez )
        REFERENCES tbl_niveles_madurez ( codigo_madurez );

ALTER TABLE tbl_pantallas
    ADD CONSTRAINT pan_usu_fk FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuarios ( codigo_usuario );

ALTER TABLE tbl_peliculas
    ADD CONSTRAINT pel_con_fk FOREIGN KEY ( codigo_pelicula )
        REFERENCES tbl_contenido ( codigo_contenido );

ALTER TABLE tbl_peliculas
    ADD CONSTRAINT pel_uni_fk FOREIGN KEY ( codigo_unidad )
        REFERENCES tbl_unidades ( codigo_unidad );

ALTER TABLE tbl_personas
    ADD CONSTRAINT per_car_per_fk FOREIGN KEY ( codigo_cargo )
        REFERENCES tbl_cargos_personas ( codigo_cargo );

ALTER TABLE tbl_personas_x_contenido
    ADD CONSTRAINT per_x_con_con_fk FOREIGN KEY ( codigo_contenido )
        REFERENCES tbl_contenido ( codigo_contenido );

ALTER TABLE tbl_personas_x_contenido
    ADD CONSTRAINT per_x_con_per_fk FOREIGN KEY ( codigo_persona )
        REFERENCES tbl_personas ( codigo_persona );

ALTER TABLE tbl_registro_tarjeta
    ADD CONSTRAINT reg_pag_usu_fk FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuarios ( codigo_usuario );

ALTER TABLE tbl_registro_tarjeta
    ADD CONSTRAINT reg_tar_tip_tar_fk FOREIGN KEY ( codigo_tipo_tarjeta )
        REFERENCES tbl_tipos_tarjetas ( codigo_tipo_tarjeta );

ALTER TABLE tbl_series
    ADD CONSTRAINT ser_con_fk FOREIGN KEY ( codigo_contenido )
        REFERENCES tbl_contenido ( codigo_contenido );

ALTER TABLE tbl_sombras_fuentes
    ADD CONSTRAINT som_fue_col_fk FOREIGN KEY ( codigo_color )
        REFERENCES tbl_colores ( codigo_color );

ALTER TABLE tbl_subtitulos
    ADD CONSTRAINT sub_idi_fk FOREIGN KEY ( codigo_idioma )
        REFERENCES tbl_idiomas ( codigo_idioma );

ALTER TABLE tbl_subtitulos_x_contenido
    ADD CONSTRAINT sub_x_con_con_fk FOREIGN KEY ( codigo_contenido )
        REFERENCES tbl_contenido ( codigo_contenido );

ALTER TABLE tbl_subtitulos_x_contenido
    ADD CONSTRAINT sub_x_con_sub_fk FOREIGN KEY ( codigo_subtitulo )
        REFERENCES tbl_subtitulos ( codigo_subtitulo );

ALTER TABLE tbl_subtitulos_x_trailer
    ADD CONSTRAINT sub_x_tra_sub_fk FOREIGN KEY ( codigo_subtitulo )
        REFERENCES tbl_subtitulos ( codigo_subtitulo );

ALTER TABLE tbl_subtitulos_x_trailer
    ADD CONSTRAINT sub_x_tra_tra_fk FOREIGN KEY ( codigo_trailer )
        REFERENCES tbl_trailers ( codigo_trailer );

ALTER TABLE tbl_control_parental
    ADD CONSTRAINT tbl_cal_edad_fk FOREIGN KEY ( codigo_calif_edad )
        REFERENCES tbl_calificacion_edad ( codigo_calif_edad );

ALTER TABLE tbl_dispositivos
    ADD CONSTRAINT tbl_lugares_fk FOREIGN KEY ( codigo_lugar )
        REFERENCES tbl_lugares ( codigo_lugar );

ALTER TABLE tbl_busquedas
    ADD CONSTRAINT tbl_pantallas_fk FOREIGN KEY ( codigo_pantalla )
        REFERENCES tbl_pantallas ( codigo_pantalla );

ALTER TABLE tbl_notificaciones
    ADD CONSTRAINT tbl_pantallas_fkv2 FOREIGN KEY ( codigo_pantalla )
        REFERENCES tbl_pantallas ( codigo_pantalla );

ALTER TABLE tbl_descargas_x_dispositivo
    ADD CONSTRAINT tbl_pantallas_fkv3 FOREIGN KEY ( codigo_pantalla )
        REFERENCES tbl_pantallas ( codigo_pantalla );

ALTER TABLE tbl_pantallas_x_dispositivo
    ADD CONSTRAINT tbl_pantallas_fkv4 FOREIGN KEY ( codigo_pantalla )
        REFERENCES tbl_pantallas ( codigo_pantalla );

ALTER TABLE tbl_tipo_reproduccion
    ADD CONSTRAINT tbl_pantallas_fkv5 FOREIGN KEY ( codigo_pantalla )
        REFERENCES tbl_pantallas ( codigo_pantalla );

ALTER TABLE tbl_dispositivos
    ADD CONSTRAINT tbl_plataformas_fk FOREIGN KEY ( codigo_plataforma )
        REFERENCES tbl_plataformas ( codigo_plataforma );

ALTER TABLE tbl_control_parental
    ADD CONSTRAINT tbl_usuarios_fk FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuarios ( codigo_usuario );

ALTER TABLE tbl_temporadas
    ADD CONSTRAINT tem_ser_fk FOREIGN KEY ( codigo_serie )
        REFERENCES tbl_series ( codigo_contenido );

ALTER TABLE tbl_tipos_fuentes
    ADD CONSTRAINT tip_fue_col_fk FOREIGN KEY ( codigo_color )
        REFERENCES tbl_colores ( codigo_color );

ALTER TABLE tbl_tipo_plan
    ADD CONSTRAINT tip_pla_uni_fk FOREIGN KEY ( codigo_unidad_pago )
        REFERENCES tbl_unidades ( codigo_unidad );

ALTER TABLE tbl_trailers
    ADD CONSTRAINT tra_con_fk FOREIGN KEY ( codigo_contenido )
        REFERENCES tbl_contenido ( codigo_contenido );

ALTER TABLE tbl_trailers
    ADD CONSTRAINT tra_idi_fk FOREIGN KEY ( codigo_idioma )
        REFERENCES tbl_idiomas ( codigo_idioma );

ALTER TABLE tbl_trailers
    ADD CONSTRAINT tra_uni_fk FOREIGN KEY ( codigo_unidad_duracion )
        REFERENCES tbl_unidades ( codigo_unidad );

ALTER TABLE tbl_usuarios
    ADD CONSTRAINT usu_gen_usu_fk FOREIGN KEY ( codigo_genero )
        REFERENCES tbl_generos_usuarios ( codigo_genero );

ALTER TABLE tbl_usuarios
    ADD CONSTRAINT usu_tip_pla_fk FOREIGN KEY ( codigo_tipo_plan )
        REFERENCES tbl_tipo_plan ( codigo_tipo_plan );

ALTER TABLE tbl_vistos
    ADD CONSTRAINT vis_con_fk FOREIGN KEY ( codigo_contenido )
        REFERENCES tbl_contenido ( codigo_contenido );

ALTER TABLE tbl_vistos
    ADD CONSTRAINT vis_usu_fk FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuarios ( codigo_usuario );