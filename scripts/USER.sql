--Crear nuevo usuario(esquema) con el password "PASSWORD" 
CREATE USER RONY
  IDENTIFIED BY "oracle"
  DEFAULT TABLESPACE USERS
  TEMPORARY TABLESPACE TEMP;
--asignar cuota ilimitada al tablespace por defecto  
ALTER USER RONY QUOTA UNLIMITED ON USERS;

--Asignar privilegios basicos
GRANT create session TO RONY;
GRANT create table TO RONY;
GRANT create view TO RONY;
GRANT create any trigger TO RONY;
GRANT create any procedure TO RONY;
GRANT create sequence TO RONY;
GRANT create synonym TO RONY;