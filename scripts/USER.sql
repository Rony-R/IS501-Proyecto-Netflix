--Crear nuevo usuario(esquema) con el password "PASSWORD" 
CREATE USER NET4
  IDENTIFIED BY "oracle"
  DEFAULT TABLESPACE USERS
  TEMPORARY TABLESPACE TEMP;
--asignar cuota ilimitada al tablespace por defecto  
ALTER USER NET4 QUOTA UNLIMITED ON USERS;

--Asignar privilegios basicos
GRANT create session TO NET4;
GRANT create table TO NET4;
GRANT create view TO NET4;
GRANT create any trigger TO NET4;
GRANT create any procedure TO NET4;
GRANT create sequence TO NET4;
GRANT create synonym TO NET4;