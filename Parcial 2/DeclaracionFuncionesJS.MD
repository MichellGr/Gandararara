# Funciones en JS.
En primer lugar, las funciones son uno de los bloques de construcción fundamentales en JavaScript. Dicha función, es similar a un procedimiento, pero no son lo mismo, ya que una función siempre devuelve un valor, mientras que un procedimiento puede o no puede devolver un valor. Es decir, un conjunto de instrucciones que realiza una tarea o calcula un valor, pero para que un procedimiento califique como función, debe tomar alguna entrada y devolver una salida donde hay alguna relación obvia entre la entrada y la salida. Para usar una función, debes definirla en algún lugar del ámbito desde el que deseas llamarla.
![JS](https://s3-us-west-2.amazonaws.com/devcodepro/media/tutorials/funciones-en-javascript-t1.png)


# Declaración de funciones.
Una definición de función (también denominada declaración de función o expresión de función) consta de la palabra clave function, seguida de:

- El nombre de la función.
- Una lista de parámetros de la función, entre paréntesis y separados por comas.
- Las declaraciones de JavaScript que definen la función, encerradas entre llaves, { ... }.  
  

| Constructor | Descripción | Uso |
| ----------- | ----------- | --- |
|  function nombre(p1, p2...) { } |  Crea una función mediante declaración. |  Esta forma permite declarar una función que existirá a lo largo de todo el código. |
| var nombre = function(p1, p2...) { } | Crea una función mediante expresión. | Con este nuevo enfoque, estamos creando una función en el interior de una variable, lo que nos permitirá posteriormente ejecutar la variable (como si fuera una función).  |
|  new Function(p1, p2..., code); | Crea una función mediante un constructor de objeto. | Es un enfoque que no se suele utilizar en producción. Simplemente es interesante saberlo para darse cuenta que en Javascript todo pueden ser objetos. |


Las funciones más sencillas no necesitan ninguna información para producir sus resultados. Sin embargo, la mayoría de funciones de las aplicaciones reales deben acceder al valor de algunas variables para producir sus resultados.

Las variables que necesitan las funciones se llaman argumentos o parámetros. Antes de que pueda utilizarlos, la función debe indicar cuántos argumentos necesita y cuál es el nombre de cada argumento. Además, al invocar la función, se deben incluir los valores que se le van a pasar a la función. Los argumentos se indican dentro de los paréntesis que van detrás del nombre de la función y se separan con una coma (,).

![JS](https://somospnt.com/images/blog/cover/function-declaration.png)

***Ejemplo:***

`function square(number) `

`{
  return number * number;
}`

La función square toma un parámetro, llamado number. La función consta de una declaración que dice devuelva el parámetro de la función (es decir, number) multiplicado por sí mismo. La instrucción return especifica el valor devuelto por la función: `return number * number;`

Los parámetros primitivos (como un number) se pasan a las funciones por valor; el valor se pasa a la función, pero si la función cambia el valor del parámetro, este cambio no se refleja globalmente ni en la función que llama.
Mientras que si pasas un objeto (es decir, un valor no primitivo, como Array o un objeto definido por el usuario) como parámetro y la función cambia las propiedades del objeto, ese cambio es visible fuera de la función.

# Llamada de funciones
Llamar a la función en realidad lleva a cabo las acciones especificadas con los parámetros indicados. Por ejemplo, si defines la función square, podrías llamarla de la siguiente manera: `square(5);`

La declaración anterior llama a la función con un argumento de 5. La función ejecuta sus declaraciones y devuelve el valor 25.

Las funciones deben estar dentro del ámbito cuando se llaman, pero la declaración de la función se puede elevar (cuando aparece debajo de la llamada en el código), como en este ejemplo:

`console.log(square(5));`

`/* ... */`

`function square(n) { return n * n }`

Los argumentos de una función no se limitan a cadenas y números. Puedes pasar objetos completos a una función. La función show_props() (definida en Trabajar con objetos es un ejemplo de una función que toma un objeto como argumento. Además, una función se puede llamar a sí misma(es llamada una función recursiva).

## Fuentes:
[MDN WEB DOC](https://developer.mozilla.org/es/docs/Web/JavaScript/Guide/Functions)
[UniWebsidad](https://uniwebsidad.com/libros/javascript/capitulo-4/funciones#:~:text=Las%20funciones%20en%20JavaScript%20se,esa%20funci%C3%B3n%20cuando%20sea%20necesario.)
[LenguajesJS.com](https://lenguajejs.com/javascript/fundamentos/funciones/)