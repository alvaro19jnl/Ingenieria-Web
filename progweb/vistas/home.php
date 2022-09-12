<!DOCTYPE html>
<html lang="es">

<head>

   


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <nav class="sidebar-navigation">
        <ul>
            <li class="active">
                <i class="fa fa-user-circle"></i>
                <span class="tooltip">Perfil</span>
               
            </li>
            <li>
                <i class="fa fa-search"></i>
                <span class="tooltip">consultas</span>
            </li>
            <li>
                <i class="fa fa-newspaper-o"></i>
                <span class="tooltip"></span>
            </li>
            <li>
                <i class="fa fa-print"></i>
                <span class="tooltip">Informes</span>
                <a href="eliminar.php">eliminar</a>
            </li>
            <li>
                <i class="fa fa-window-close"></i>
                <span class="tooltip">Close</span>
                <a href="logout.php">cerrar sesion</a>

            </li>
        </ul>
    </nav>
    </li>
    </ul>
    </nav>

    
    <p>
    </p>
    <table>
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Nom. Usuario</th>
          <th scope="col">Borrar</th>
          <th scope="col">Actualizar</th>
        </tr>
      </thead>
      <tbody>
            <?php  
            $link=mysqli_connect("localhost", "root", "", "seminarios");
            $resultados = mysqli_query($link,"SELECT * FROM usuarios  ");

            while($extraido = mysqli_fetch_assoc($resultados)){
            ?>
                <tr>
                  <td><?= $extraido['nombre'] ?></td>
                  <td><?= $extraido['username'] ?></td>
                  <td>
                    <!-- AQUI CREAMOS EL FORM PARA ELIMINAR APUNTANDO AL ARCHIVO QUE HARA LA TAREA -->
                    <form method="POST" action="eliminar.php">
                        <!-- CREAMOS UN CAMPO OCULTO CON EL name idUser  y como value el id-->
                        <input type="hidden" name="username" value="<?= $extraido['username'] ?>">
                        <button name='Borrar' type='submit' class='btn btn-danger btn-md'><img src='img/papelera.png' width='25'></button>
                    </form>
                  </td>
                  <!-- PODRIAMOS HACER LO MISMO PARA EL BOTON ACTUALIZAR -->
                  <td><button name='Actualizar' type='button' class='btn btn-success btn-md'><img src='img/refrescar.png' width='21'></button></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
                      </tbody>
                    </table>
                    </form>
 

</body>

</html>
