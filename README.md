<h1> Exámen en Laravel</h1>

<h2>Link de GitHub</h2>
https://github.com/gab5453/Caso20-Alquier-Disfraces-Gab

<h1>Decisiones de Diseño</h1>

<h2>1. Tabla</h2>

<p><strong>Nombre de la tabla: </strong> <code>Disfraces</code></p>

<h3>Campos</h3>

<table>
  <thead>
    <tr>
      <th>Campo</th>
      <th>Tipo</th>
      <th>¿Obligatorio?</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><code>id</code></td>
      <td>bigIncrements</td>
      <td>Sí</td>
    </tr>
    <tr>
      <td><code>nombre</code></td>
      <td>string</td>
      <td>Sí</td>
    </tr>
      <tr>
      <td><code>talla</code></td>
      <td>string</td>
      <td>Sí</td>
    </tr>
    <tr>
  </tbody>
</table>

<p><strong>Nombre de la tabla: </strong> <code>Alquiler</code></p>

<h3>Campos</h3>

<table>
  <thead>
    <tr>
      <th>Campo</th>
      <th>Tipo</th>
      <th>¿Obligatorio?</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><code>id</code></td>
      <td>bigIncrements</td>
      <td>Sí</td>
    </tr>
    <tr>
      <td><code>fecha</code></td>
      <td>date</td>
      <td>Sí</td>
    </tr>
  </tbody>
</table>

<p><strong>Nombre de la tabla: </strong> <code>Clientes</code></p>

<h3>Campos</h3>

<table>
  <thead>
    <tr>
      <th>Campo</th>
      <th>Tipo</th>
      <th>¿Obligatorio?</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><code>id</code></td>
      <td>bigIncrements</td>
      <td>Sí</td>
    </tr>
    <tr>
      <td><code>nombre</code></td>
      <td>string</td>
      <td>Sí</td>
    </tr>
    <tr>
      <td><code>telefono</code></td>
      <td>string</td>
      <td>Sí</td>
    </tr>
  </tbody>
</table>

<h2>2. Eliminación de Registros</h2>

<p>
La opción de eliminar de eliminar un registro no existe para así tener un historial.
</p>

<h2>3. Capruras de pantalla</h2>

<h3> Listado</h3>
<img src="CapturasPantalla/listado.png" alt="listado">

<h3> Listado en teléfono</h3>
<img src="CapturasPantalla/listado_telefono.png" alt="listado en teléfono">

<h3> Formulario</h3>
<img src="CapturasPantalla/formulario.png" alt="Formulario">

<h3> Formulario en teléfono</h3>
<img src="CapturasPantalla/formulario_telefono.png" alt="Formulario en teléfono">
