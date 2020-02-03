Sección para crear colaboradores

<!-- cuando se haga el envvío a storage, entraremos gracias a esta llave: {{csrf_field()}} que pone un token encriptado por seguridad en la "vista" de la info agregada-->

<form action="{{url('/colaboradores')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<label for ="Nombre">{{'Nombre'}}</label>
<input type="text" name "Nombre" id="Nombre" value="">
<br/>
<label for ="Apellido">{{'Apellido'}}</label>
<input type="text" name "Apellido" id="Apellido" value="">
<br/>
<label for ="Correo">{{'Correo'}}</label>
<input type="email" name "Correo" id="Correo" value="">
<br/>
<input type="submit" value="Agregar">
</form>
