@include('layouts.header')

<body>
@include('layouts.menu')

<?php
    echo "<form action='" . route('libros.store') . "' method='POST' enctype='multipart/form-data'>";

    $csrf = csrf_field();
    $method = method_field('POST');
    echo $csrf;
    echo $method;

    ?>

    <div class="form-row">

        <div class="form-group col-md-6">
            <label for="isbn">ISBN:</label>
            <input type="text" class="form-control" id="isbn" name="isbn" value="">
            
            @error('isbn')
            <small class="text-danger">{{$message}} </small>
            @enderror
        </div><br>
        <div class="form-group col-md-6">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="">
           
            <!-- mensajes de error con plantillas BLADE -->
            @error('titulo')
            <small class="text-danger">{{$message}} </small>
            @enderror
        </div><br>
        <div class="form-group col-md-6">
            <label for="autores">Autores:</label>
            <input type="text" class="form-control" id="autores" name="autores" value="">
            
            @error('autores')
            <small class="text-danger">{{$message}} </small>
            @enderror
        </div><br>
        <div class="form-group col-md-6">
            <label for="genero">Género</label><br>
            <select name="genero" id="genero">
                <option value="Comedia">Comedia</option>
                <option value="Distopías">Distopías</option>
                <option value="Ciencia Ficción">Ciencia Ficción</option>
                <option value="Terror">Terror</option>
            </select>
            
            @error('genero')
            <small class="text-danger">{{$message}} </small>
            @enderror
        </div><br>
        <div class="form-group col-md-6">
            <label for="npaginas">Nº Páginas:</label>
            <input type="number" class="form-control" id="npaginas" name="npaginas" value="">
            
            @error('npaginas')
            <small class="text-danger">{{$message}} </small>
            @enderror
        </div><br>
        <div class="form-group col-md-6">
            <label for="precio">Precio:</label>
            <input type="number" class="form-control" id="precio" name="precio" value="">
            
            @error('precio')
            <small class="text-danger">{{$message}} </small>
            @enderror
        </div><br>
        <div class="form-group col-md-6">
            <label for="imagen">imagen:</label>
            <input accept="image/*" type="file" name="imagen">
            @error('imagen')
                <small class="text-danger">{{ $message }} </small>
            @enderror
        </div><br>
        <br>
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="<?php echo route('libros.index'); ?>"> <button type="button" class="btn btn-primary">Volver</button> </a>
    </div>
    </form>
    @include('layouts.footer')