--Crear nuevo usuario(esquema) con el password "PASSWORD" 
CREATE USER NET
  IDENTIFIED BY "oracle"
  DEFAULT TABLESPACE USERS
  TEMPORARY TABLESPACE TEMP;
--asignar cuota ilimitada al tablespace por defecto  
ALTER USER NET QUOTA UNLIMITED ON USERS;

--Asignar privilegios basicos
GRANT create session TO NET;
GRANT create table TO NET;
GRANT create view TO NET;
GRANT create any trigger TO NET;
GRANT create any procedure TO NET;
GRANT create sequence TO NET;
GRANT create synonym TO NET;