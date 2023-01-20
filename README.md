# class-Language
Manejar multiples idiomas con PHP

Aquí te muestro un ejemplo completo de cómo implementar varios idiomas en una web con PHP utilizando una clase de internacionalización y un archivo externo con las traducciones.

En este ejemplo se crea un formulario con una lista desplegable para que el usuario seleccione el idioma deseado. Cuando el usuario envía el formulario, el idioma seleccionado se establece en la sesión y se recupera en la clase de internacionalización. Luego se utiliza el método de traducción para mostrar el texto en el idioma seleccionado.

No olvides que debes tener el archivo "translations.php" en la misma ruta donde esta el archivo que llama a la clase, y que este archivo debe contener las traducciones en un arreglo con el mismo formato que el ejemplo anterior.

En el ejemplo classLanguage2, Si deseas utilizar una base de datos MySQL para almacenar las traducciones, puedes utilizar una librería como MeekroDB para conectarte a la base de datos y obtener las traducciones desde allí.

Te muestro un ejemplo de cómo podría ser la clase de internacionalización si utilizara una base de datos MySQL con MeekroDB.
