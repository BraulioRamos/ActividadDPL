@include('layouts.header')

<body>
    <h1>Libro: <?php echo $libro->isbn; ?></h1>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $libro->titulo; ?>" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="autores">Autores:</label>
            <input type="text" class="form-control" id="autores" name="autores" value="<?php echo $libro->autores; ?>" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="genero">genero</label>
            <input type="text" class="form-control" id="genero" name="genero" value="<?php echo $libro->genero; ?>" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="npaginas">Nº Páginas</label>
            <input type="number" class="form-control" id="npaginas" name="npaginas" value="<?php echo $libro->npaginas; ?>" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="precio">Precio</label>
            <input type="number" class="form-control" id="precio" name="precio" value="<?php echo $libro->precio; ?>" readonly>
        </div>
        <br>
        <a href="<?php echo route('libros.index'); ?>"> <button type="button" class="btn btn-primary">Volver</button> </a>
    </div>
    </form>
@include('layouts.footer')