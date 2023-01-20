# class-Language
Manejar multiples idiomas con PHP

Aquí te muestro un ejemplo completo de cómo implementar varios idiomas en una web con PHP utilizando una clase de internacionalización y un archivo externo con las traducciones.

En este ejemplo se crea un formulario con una lista desplegable para que el usuario seleccione el idioma deseado. Cuando el usuario envía el formulario, el idioma seleccionado se establece en la sesión y se recupera en la clase de internacionalización. Luego se utiliza el método de traducción para mostrar el texto en el idioma seleccionado.

No olvides que debes tener el archivo "translations.php" en la misma ruta donde esta el archivo que llama a la clase, y que este archivo debe contener las traducciones en un arreglo con el mismo formato que el ejemplo anterior.

En el ejemplo classLanguage2, Si deseas utilizar una base de datos MySQL para almacenar las traducciones, puedes utilizar una librería como MeekroDB para conectarte a la base de datos y obtener las traducciones desde allí.

Te muestro un ejemplo de cómo podría ser la clase de internacionalización si utilizara una base de datos MySQL con MeekroDB.

La estructura de la tabla "translations" dependerá de tu aplicación y las necesidades específicas, pero en este ejemplo se utiliza una tabla con las siguientes columnas:

<li>"id" (auto incrementable): Es una clave primaria y se utiliza para identificar de manera única cada registro de traducción.</li>
<li>"lang" (varchar): Es el idioma de la traducción, puedes utilizar códigos de idiomas estándar como "en_US" o "es_ES".</li>
<li>"key_name" (varchar): Es el nombre clave o el identificador de la cadena de texto que se va a traducir.</li>
<li>"translation" (text): Es la traducción de la cadena de texto en el idioma especificado.</li>


La estructura de la tabla se podría crear con el siguiente query:

<code>CREATE TABLE translations (
  id INT NOT NULL AUTO_INCREMENT,
  lang VARCHAR(255) NOT NULL,
  key_name VARCHAR(255) NOT NULL,
  translation TEXT NOT NULL,
  PRIMARY KEY (id)
);</code>


El query que se utiliza en el método "translate" de la clase para obtener la traducción es:

<code>SELECT translation FROM translations WHERE lang=%s and key_name=%s</code>

Este query selecciona la columna "translation" de la tabla "translations" donde la columna "lang" es igual al idioma seleccionado y la columna "key_name" es igual al nombre clave o identificador de la cadena de texto dada. Es importante mencionar que se esta utilizando una librería MeekroDB, que permite una forma segura y fácil de realizar consultas a la base de datos.

Es importante mencionar que esta es solo una forma de implementar la internacionalización usando una base de datos MySQL con MeekroDB, y en un proyecto real se deben considerar varios aspectos como la seguridad y escalabilidad.

Un ejemplo de traducciones en la tabla "translations", puedes utilizar el siguiente query SQL:

<code>INSERT INTO translations (lang, key_name, translation) VALUES
("en_US", "Hello", "Hello"),
("en_US", "Welcome", "Welcome"),
("es_ES", "Hello", "Hola"),
("es_ES", "Welcome", "Bienvenido");</code>
