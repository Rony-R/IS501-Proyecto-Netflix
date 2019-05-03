--Crear nuevo usuario(esquema) con el password "PASSWORD" 
CREATE USER NET5
  IDENTIFIED BY "oracle"
  DEFAULT TABLESPACE USERS
  TEMPORARY TABLESPACE TEMP;
--asignar cuota ilimitada al tablespace por defecto  
ALTER USER NET5 QUOTA UNLIMITED ON USERS;

--Asignar privilegios basicos
GRANT create session TO NET5;
GRANT create table TO NET5;
GRANT create view TO NET5;
GRANT create any trigger TO NET5;
GRANT create any procedure TO NET5;
GRANT create sequence TO NET5;
GRANT create synonym TO NET5;