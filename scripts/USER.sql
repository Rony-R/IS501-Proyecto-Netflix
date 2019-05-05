--Crear nuevo usuario(esquema) con el password "PASSWORD" 
CREATE USER NET8
  IDENTIFIED BY "oracle"
  DEFAULT TABLESPACE USERS
  TEMPORARY TABLESPACE TEMP;
--asignar cuota ilimitada al tablespace por defecto  
ALTER USER NET8 QUOTA UNLIMITED ON USERS;

--Asignar privilegios basicos
GRANT create session TO NET8;
GRANT create table TO NET8;
GRANT create view TO NET8;
GRANT create any trigger TO NET8;
GRANT create any procedure TO NET8;
GRANT create sequence TO NET8;
GRANT create synonym TO NET8;