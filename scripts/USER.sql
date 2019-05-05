--Crear nuevo usuario(esquema) con el password "PASSWORD" 
CREATE USER NET6
  IDENTIFIED BY "oracle"
  DEFAULT TABLESPACE USERS
  TEMPORARY TABLESPACE TEMP;
--asignar cuota ilimitada al tablespace por defecto  
ALTER USER NET6 QUOTA UNLIMITED ON USERS;

--Asignar privilegios basicos
GRANT create session TO NET6;
GRANT create table TO NET6;
GRANT create view TO NET6;
GRANT create any trigger TO NET6;
GRANT create any procedure TO NET6;
GRANT create sequence TO NET6;
GRANT create synonym TO NET6;