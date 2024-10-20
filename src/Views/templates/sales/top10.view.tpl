<h1>Datos de Autor</h1>
<p>{{nombre_programador}}</p>
<hr/>
<ul>
    {{foreach clases}}
        <li>{{this}}</li>
    {{endfor clases}}
</ul>
<hr/>
<section>
    <table>
        <tr>
            <th>Nombre</th>      
            <th>Telefono</th>  
        </tr>
        {{foreach contactos}}
        <tr>
            <td>{{nombre}}</td>
            <td>{{telefono}}</td>
        </tr>
        {{endfor contactos}}
    </table>
</section>
<hr/>

<form action="index.php?page=Sales-TopTen" method="post">
    <div>
        <label for="txtNombre">Nombre Completo</label>
        <input type="text" name="txtNombre" id="txtNombre" value="{{txtNombre}}" />
        <br>
        <button type="submit" name="btnEnviar">Enviar</button>
    </div>
</form>

{{if rslMessage}}
    <hr/>
    <div>
        {{rslMessage}}
    </div>
{{endif rslMessage}}