@include('layouts.header')

<body>
    <h1>Editar Usuario: <?php echo $libro->isbn; ?></h1>
    <?php
    echo "<form action='" . route('libros.update', $libro->id) . "' method='POST' enctype='multipart/form-data'>";

    $csrf = csrf_field();
    $method = method_field('PUT');
    echo $csrf;
    echo $method;

    ?>

    <div class="form-row">

        <div class="form-group col-md-6">
            <label for="isbn">ISBN:</label>
            <input type="text" class="form-control" id="isbn" name="isbn" value="<?php echo $libro->isbn; ?>">
        </div><br>
        <div class="form-group col-md-6">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $libro->titulo; ?>">
        </div><br>
        <div class="form-group col-md-6">
            <label for="autores">Autores</label>
            <input type="text" class="form-control" id="autores" name="autores" value="<?php echo $libro->autores; ?>">
        </div><br>
        <div class="form-group col-md-6">
            <label for="genero">Género:</label>
            <select class="form-control" id="genero" name="genero">
                <option value="Comedia">Comedia</option>
                <option value="Distopía">Distopía</option>
                <option value="Ciecia Ficción">Ciencia Ficción</option>
                <option value="Terror">Terror</option>
            </select>
        </div><br>
        <div class="form-group col-md-6">
            <label for="npaginas">Nº Páginas:</label>
            <input type="text" class="form-control" id="npaginas" name="npaginas" value="<?php echo $libro->npaginas; ?>">
        </div><br>
        <div class="form-group col-md-6">
            <label for="precio">Precio:</label>
            <input type="text" class="form-control" id="precio" name="precio" value="<?php echo $libro->precio; ?>">
        </div><br>
        <div class="form-group col-md-6">
            <input accept="image/*" type="file" name="imagen" value="{{ $libro->imagen }}">
            <br>
            <img src="{{ route('home') ."/" . $libro->imagen }}" width="300" height="300">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="<?php echo route('libros.index'); ?>"> <button type="button" class="btn btn-primary">Volver</button> </a>
    </div>
    </form>
@include('layouts.footer')