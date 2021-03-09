# ¿Qué son los Media Querys?
Es una regla o conjunto de reglas que se introducen en una hoja de estilo CSS con el objetivo de definir propiedades específicas para distintos tipos de medios. Es decir que son, consultas sobre las características del medio donde se está visualizando una web. 
Por ejemplo, con una Media Query podemos especificar el ancho y el alto de un contenido, de manera que este se adapte a los límites de una impresora sin tener que cambiar el contenido original.
Además son una de las herramientas fundamentales para implementar el "Responsive Web Design", convirtiéndose en un aliado fundamental de cualquier diseñador web. Ya que al diseñar una página web, se debe tener en cuenta la diversidad de dispositivos en los que se va a ver esta.
Loo que significa que con una misma maquetación HTML, nuestro diseño se adaptará a diferentes dispositivos y tipos de pantalla. 

![Media Querys](https://miro.medium.com/max/10482/1*FkoAK9fWw80lTTY-KQ8TOA.png)

# ¿Para qué sirven los Media Querys?
En la mayoría de los casos las Media Queries sirven para definir estilos diferentes para distintos tamaños de la pantalla, son también llamados estilos condicionales, que solo se aplicarán en caso de que esa consulta del medio sea satisfactoria.
Estas son sencillas de entender y aplicar, aunque a decir verdad el estándar es bastante sofisticado. Nos ofrecen muchas posibilidades a la hora de aplicar estilos condicionales, con múltiples casos de uso, y permiten detectar características del dispositivo que está utilizando el usuario y optimizar la hoja de estilo.
Ejemplos de casos en los que nos vendría bien un condicional:

- Si la pantalla del usuario tiene estas características, entonces aplica estos estilos
- Si se imprime el documento en la impresora, aplica estos estilos.
- Si la pantalla del dispositivo tiene estas dimensiones y además está situado en posición horizontal (landscape), entonces aplica este CSS.
- Entre otros.

![Media Querys](https://www.mediaclick.es/wp-content/uploads/2013/03/responsive_design-web.jpg)

# Sintaxis:
Las media queries consisten de un tipo de medio opcional y una o más expresiones de características de medios. Varias consultas se pueden combinar utilizando operadores lógicos. Y no distinguen entre mayúsculas y minúsculas.
El resultado de la consulta es "verdadero" cuando el tipo de medio (si se especifica) coincide con el dispositivo en el que se está mostrando el documento y todas las expresiones en el media query son "verdaderas". En este caso, se aplica los estilos correspondientes, siguiendo las reglas usuales de cascada.

Las media querys definen toda una serie de características de medios (media features) que corresponden a características del dispositivo. 

## Tipos de medios:
Los Media Types (tipos de medios) describen la categoría general de un dispositivo. Excepto cuando se utilizan los operadores lógicos not o only, el tipo de medio es opcional y será interpretada como all.

- ***all:*** Apto para todos los dispositivos.
- ***print:*** Destinado a material impreso y visualización de documentos en una pantalla en el modo de vista previa de impresión. 
- ***screen:*** Destinado principalmente a las pantallas.
- ***speech:*** Destinado a sintetizadores de voz.

## Las más importantes funciones de medios son:

- ***width:*** Ancho de la ventana de visualización.
  - La característica de medios min-width se refiere al ancho mínimo de pantalla, es decir, que las reglas que contenga se aplicarán cuando la pantalla tenga una anchura mayor de la indicada.
  - La característica de medios max-width se refiere al ancho máximo de pantalla, es decir, que las reglas que contenga se aplicarán cuando la pantalla tenga una anchura menor o igual a la indicada.

- ***height:*** Alto de la ventana de visualización.

- ***aspect-ratio:*** Relación de aspecto ancho/alto de la ventana de visualización.    

- ***orientation:*** Orientación de la ventana de visualización .
  La característica de medios orientation toma dos posibles valores:
  - landscape: orientación horizontal, es decir, que el ancho es mayor o igual que el alto
  - portrait: orientación vertical, es decir, que el ancho es menor que el alto

- ***resolution:*** Densidad de píxeles del dispositivo de salida.            

- ***scan:*** Proceso de escaneado del dispositivo de salida.

- ***grid:*** ¿Utiliza el dispositivo una pantalla de cuadrícula o mapa de bits? 

- ***update:*** ¿Con qué frecuencia el dispositivo de salida puede modificar la apariencia del contenido?

- ***overflow-block:*** ¿Cómo maneja el dispositivo de salida el contenido que desborda la vista a lo largo del eje del bloque?

- ***overflow-inline:*** ¿Se puede desplazar el contenido que desborda la ventana de visualización a lo largo del eje en línea?

- ***color:*** Número de bits por componente de color del dispositivo de salida, o cero si el dispositivo no es de color.

- ***color-gamut:*** Rango aproximado de colores que son soportados por el user-agent y el dispositivo de salida.

- ***color-index:*** Número de entradas en la tabla de búsqueda de color del dispositivo de salida, o cero si el dispositivo no utiliza dicha tabla.          

- ***display-mode:*** El modo de visualización de la aplicación.

- ***monochrome:*** Bits por píxel en el búfer de fotogramas monocromo del dispositivo de salida, o cero si el dispositivo no es monocromo.        

- ***inverted-colors:*** ¿Está invirtiendo colores el agente de usuario o el sistema operativo subyacente?

- ***pointer:*** ¿Es el mecanismo de entrada principal un dispositivo señalador y, de ser así, cuán preciso es?

- ***hover:*** ¿El mecanismo de entrada principal permite al usuario pasar el ratón por encima de los elementos?

- ***any-pointer:*** ¿Es cualquier mecanismo de entrada disponible un dispositivo señalador y, de ser así, cuán preciso es?

- ***any-hover:*** ¿Hay algún mecanismo de entrada disponible que permita al usuario pasar el ratón por encima de los elementos?

- ***light-level:*** Nivel de luz del entorno.

- ***prefers-reduced-motion:*** El usuario prefiere menos movimiento en la página.

- ***prefers-reduced-transparency:*** El usuario prefiere una transparencia reducida.

- ***prefers-contrast:*** Detecta si el usuario ha solicitado que el sistema aumente o disminuya la cantidad de contraste entre los colores adyacentes.

- ***prefers-color-scheme:*** Detecta si el usuario prefiere un esquema de color claro u oscuro.

- ***forced-colors:*** Detecta si el user-agent restringe la paleta de colores.

- ***scripting:*** Detecta si está disponible el scripting (es decir, JavaScript).

- ***device-width:*** Ancho de la superficie de renderizado del dispositivo de salida (Obsoleto).

- ***device-height:*** Altura de la superficie de renderizado del dispositivo de salida (Obsoleto).

- ***device-aspect-ratio:*** Relación de aspecto ancho/alto del dispositivo de salida (Obsoleto).


Estas características no permiten modificar las características físicas del dispositivo, lógicamente.
Y se combinan con la regla arroba @media para condicionar la aplicación de propiedades a características del dispositivo. Además se puede combinar varias características mediante el operador and y la coma (que representa el operador lógico or) para crear expresiones más complejas.

## Fuentes:
[Desafiohosting.com](https://desafiohosting.com/que-es-una-media-query/)
[Desarrolloweb.com](https://desarrolloweb.com/articulos/css-media-queries.html)
[MDN Web Docs](https://developer.mozilla.org/es/docs/Web/CSS/Media_Queries/Using_media_queries?fbclid=IwAR2T_2efnee0iinU0TqbvZy-bM8ru16wuunBoG7uCgYwmYveVXWjvrzcL_k)
[Indice HTML / CSS](https://www.mclibre.org/consultar/amaya/css/css-media-queries.html)