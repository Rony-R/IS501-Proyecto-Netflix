--Crear nuevo usuario(esquema) con el password "PASSWORD" 
CREATE USER NETFLIX
  IDENTIFIED BY "oracle"
  DEFAULT TABLESPACE USERS
  TEMPORARY TABLESPACE TEMP;
--asignar cuota ilimitada al tablespace por defecto  
ALTER USER NETFLIX QUOTA UNLIMITED ON USERS;

--Asignar privilegios basicos
GRANT create session TO NETFLIX;
GRANT create table TO NETFLIX;
GRANT create view TO NETFLIX;
GRANT create any trigger TO NETFLIX;
GRANT create any procedure TO NETFLIX;
GRANT create sequence TO NETFLIX;
GRANT create synonym TO NETFLIX;