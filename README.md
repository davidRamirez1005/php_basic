# php_basic

=> **array_flip():** Intercambia las claves con sus valores correspondientes en un array.
=> **array_fill():** Rellena un array con un valor especificado.
=> **array_filter():** Filtra los elementos de un array utilizando una función de devolución de llamada.
=> **array_map():** Aplica una función a cada elemento de un array y devuelve un nuevo array con los resultados.
=> **array_reduce():** Reduce un array a un solo valor aplicando una función de devolución de llamada.
=> **array_key_exists():** Comprueba si una clave existe en un array.
=> **in_array():** Comprueba si un valor existe en un array.
=> **array_rand():** Devuelve una o varias claves aleatorias de un array.
=> **array_unique():** Elimina los valores duplicados de un array.
=> **array_intersect():** Devuelve un array con los valores comunes a todos los arrays dados.
=> **array_diff():** Devuelve un array con los valores del primer array que no están presentes en los arrays adicionales.
=> **array_push():** Agrega uno o más elementos al final de un array.
=> **array_pop():** Extrae y elimina el último elemento de un array.
=> **array_reverse():** Revierte el orden de los elementos en un array.
=> **array_sum():** Devuelve la suma de todos los valores de un array numérico.
=> **array_product():** Devuelve el producto de todos los valores de un array numérico.
=> **array_chunk():** Divide un array en fragmentos más pequeños.
=> **array_keys():** Devuelve todas las claves de un array.
=> **array_values():** Devuelve todos los valores de un array.
=> **array_walk():** Aplica una función de devolución de llamada a cada elemento de un array.

**

--------------------------------------------------------------------

---------> *public:* Los miembros declarados como public son accesibles desde cualquier lugar, ya sea desde dentro de la clase, desde las clases heredadas o desde fuera de la clase. Son visibles
para todos.
--------> *private:* Los miembros declarados como private solo son accesibles desde dentro de la
misma clase en la que se definen. No pueden ser accedidos desde fuera de la clase, ni
siquiera por las clases heredadas.
--------> *protected:* Los miembros declarados como protected son accesibles desde dentro de la
misma clase y desde las clases heredadas (subclases). Sin embargo, no pueden ser accedidos
desde fuera de la clase directamente.


--------------------------------------------------------------------

`include, require, include_once, require_once`

*include* : su usa para incluir el contenido de un archivo en otro archivo php, se recomienda usar cuando el archivo a incluir  no es esencial para el funcionamiento del programa

*require* : se usa cuando el archivo a incluir es esencial para el funcionamiento del programa y su ausencia no puede ser tolerada

*include_once* : se utiliza cuano se requiere aegurar que un archivo sea incluido solo una vez

*require_once* : se utiliza cuando se necesita asegurar que un archivo es incluido solo una vez y su ausencia no puede ser tolerada

--------------------------------------------------------------------

 `Json_encode y json_decode`

*json_encode* se utiliza para convertir datos de PHP en formato JSON, mientras que *json_decode* se utiliza para convertir cadenas JSON en estructuras de datos en PHP. 

--------------------------------------------------------------------

`POO`

**Clase:** Es una plantilla o definición que describe las características y comportamientos de los objetos que se pueden crear a partir de ella. 

**Objeto:** Es una instancia de una clase. Representa un individuo o entidad específica y tiene sus propias propiedades y comportamientos. 

**Atributos:** Son las propiedades o características de un objeto. Definen el estado de un objeto y se representan mediante variables en la clase. 

**Métodos:** Son las acciones o comportamientos que un objeto puede realizar. Representan las operaciones que pueden realizarse con un objeto y se definen como funciones en la clase.

**Encapsulación:** Es el principio que establece que los atributos y métodos relacionados deben agruparse en una clase para ocultar los detalles internos y exponer solo una interfaz pública. Esto se logra mediante la especificación de niveles de acceso (público, privado, protegido) para los atributos y métodos.

**Herencia:** Es un mecanismo que permite crear nuevas clases basadas en clases existentes. La clase que se utiliza como base se denomina "clase padre" o "superclase", y la clase que se deriva se llama "clase hija" o "subclase". La herencia permite la reutilización de código y la creación de jerarquías de clases.

**Polimorfismo:** Es la capacidad de un objeto de tomar diferentes formas o comportarse de diferentes maneras según el contexto. Permite utilizar una interfaz común para objetos de diferentes clases y proporciona flexibilidad y extensibilidad en el diseño de programas.

--------------------------------------------------------------------

`Namespaces en PHP`

la palabra clave use se utiliza en la definición de espacios de nombres (namespace) para importar clases, funciones y constantes desde otros espacios de nombres.

--------------------------------------------------------------------

#  Integración de php con Bases de datos relacionales (Mysql)



**. Bases de datos relacionales**

*sistema de gestión de bases de datos (SGBD)*

*lenguaje de consulta estructurado(SQL)*

*sistema de gestión de bases de datos relacionales (RDBMS)*

Las relaciones entre las tablas se establecen mediante claves primarias y claves foráneas. Una *clave primaria* es un atributo o conjunto de atributos que identifica de forma única cada fila en una tabla. Una *clave foránea* es un atributo en una tabla que hace referencia a la clave primaria de otra tabla, estableciendo así una relación entre ellas. Estas relaciones permiten conectar la información entre diferentes tablas y realizar consultas y operaciones complejas.



*La normalización de bases de datos* es un proceso de diseño que se utiliza para organizar y estructurar las tablas de una base de datos relacional de manera eficiente y libre de redundancias. El objetivo principal de la normalización es eliminar la duplicación de datos y garantizar la integridad y consistencia de la información almacenada.



### conexion PDO con php




--------------------------------------------------------------------

# MySQL




--------------------------------------------------------------------

# SQL 

SQL permite a los usuarios crear, modificar y eliminar bases de datos, así como realizar consultas para recuperar información específica de una base de datos. Con SQL, puedes crear tablas para almacenar datos, definir relaciones entre las tablas, agregar, actualizar o eliminar registros y realizar consultas complejas para obtener información precisa.

**DDL (Data Definition Language):** Utilizado para definir y modificar la estructura de la base de datos. Incluye comandos como *CREATE*, *ALTER* y *DROP* para crear, modificar y eliminar tablas, índices, vistas, etc. 

crear una tabla:

`

```sql
mysql -u tu_usuario -p -e "CREATE TABLE nombre_tabla (columna1 tipo_dato1, columna2 tipo_dato2, ...);"`
```

Modificar una tabla en MySQL:

```sql
`mysql -u tu_usuario -p -e "ALTER TABLE nombre_tabla ADD columna_nueva tipo_dato;"`
```

Eliminar una tabla en MySQL:

```sql
`mysql -u tu_usuario -p -e "DROP TABLE nombre_tabla;"`
```

 **DML (Data Manipulation Language):** Utilizado para manipular los datos almacenados en la base de datos. Incluye comandos como *INSERT*, *UPDATE* y *DELETE* para agregar, actualizar y eliminar registros. 

 **DQL (Data Query Language):** Utilizado para realizar consultas y recuperar información de la base de datos. El comando más común es *SELECT*, que permite especificar los criterios de búsqueda y los campos a recuperar. 

 **DCL (Data Control Language):** Utilizado para controlar los privilegios de acceso a la base de datos. Incluye comandos como *GRANT* y *REVOKE* para otorgar y revocar permisos.