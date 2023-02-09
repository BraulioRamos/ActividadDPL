@include('layouts.header')

<body>
@include('layouts.menu')
        <table class="table">
            <thead>
                <tr>
                    <th>ISBN</th>
                    <th>Título</th>
                    <th>Autores</th>
                    <th>Género</th>
                    <th>Nº Páginas</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaLibros as $libro) {
                    echo "<tr>";
                    echo "<td>" .  $libro->isbn . "</td>";
                    echo "<td>" .  $libro->titulo . "</td>";
                    echo "<td>" .  $libro->autores . "</td>";
                    echo "<td>" .  $libro->genero . "</td>";
                    echo "<td>" .  $libro->npaginas . "</td>";
                    echo "<td>" .  $libro->precio . "</td>";
                    echo "<td><img src='" .  $libro->imagen . "' class='img-thumbnail' width=250 height=250></img></td>";
                    echo "
                    <td>
                    <a href=" . route('libros.edit', $libro) . "><button class='btn btn-primary' type='submit'>Editar</button></a>
                    </td>

                    <td>";
                        $csrf = csrf_field();
                        $methodDelete = method_field('DELETE');
                    echo "
                        <form action='" . route('libros.destroy', $libro) . "' method='POST'>
                            $csrf
                            $methodDelete
                            <button class='btn btn-danger' type='submit'>Eliminar</button>
                        </form>
                    </td>
                    </tr>";
                }
                ?>
                </ul>
            </tbody>
        </table>


@include('layouts.header')