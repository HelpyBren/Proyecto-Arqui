# **PASOS PARA SU USO**
# ** Adopcion de base de datos**
Este repositorio contiene la base de datos con las tablas y datos de prueba para su desarrollo;
## CONTENIDO
-adopcion.sql ---> Script SQL con la estructura de tablas y datos de prueba.
- READ.md -----> Este archivo con las instrucciones.
- docker-compose.yml ---->configuracion para levantar MYSQL con docker

## TABLAS INCLUIDAS
-**USUARIOS** : informacion de los adoptantes.
- **PERRITOS** : informacion de los perritos.
- **ADOPCION** : relacion entre usuarios y perritos.

## COMO IMPORTAR LA BASE
 **1**. Clonar este repositorio:
```bash
 git clone https://github.com/HelpyBren/Proyecto-Arqui.git
   cd Proyecto-Arqui
   
**2.** Levantar MYSQL con Docker (debe incluir docker-compose. yml)
´´ bash
   docker-compose up -d
   -para que sea directo, y no hacerlo desde 0
EJEMPLO:
version: '3.8'
services:
  db:
    image: mysql:8.0
    container_name: database
    environment:
      MYSQL_ROOT_PASSWORD: otorrinolaringologo
      MYSQL_DATABASE: adopcion
    ports:
      - "3306:3306"
    volumes:
      - ./data:/var/lib/mysql

**3.** Importar la base de datos
   docker exec -i database mysql -u root -p adopcion < adopcion.sql
   Usuario: root
   Contraseña: otorrinolaringologo
   Base: adopcion

## NOTA
- Los datos son de prueba
- Se puede reemplazar por datos reales en produccion
GRACIAS POR LEER
