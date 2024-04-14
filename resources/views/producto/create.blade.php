@extends('layout.landing')

@section('body')

    <form action="{{route('productos.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label>Marca y Modelo:</label>
        <input type="text" name="marcaModelo" placeholder="Write a title"><br>

        <label>Precio</label>
        <input type="number" name="precio"><br>

        <label>Descripcion:</label>
        <input type="text" name="descripcion" placeholder="Write a description"><br>

        <label>Caracteristicas:</label>
        <input type="text" name="caracteristicas" placeholder="Write a description"><br>

        <label>Imagen</label>
        <input type="file" name="imagen"><br>

        <label>Selecciona una entrega</label>
        <select name="entrega">
            <option value="Mañana">Mañana</option>
            <option value="Pasado mañana">Pasado mañana</option>
            <option value="De 2 a 5 dias">De 2 a 5 dias</option>
        </select><br>

        <label>Selecciona una categoria</label>
        <select name="categoria_id">
            <option value=1>Moviles</option>
            <option value=2>Portatiles</option>
            <option value=3>Televisiones</option>
            <option value=4>Tablets</option>
            <option value=5>CPU</option>
            <option value=6>Tarjetas Graficas</option>
            <option value=7>Placas Base</option>
        </select><br>
        <input type="submit" value="create">
       
    </form>
@endsection