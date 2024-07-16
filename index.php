<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Móvil</title>
    <link rel="stylesheet" href="style.css?1">
</head>
<body>

    <div class="header">
        <label class="menu-icon" for="menuToggle">☰</label>
        <div class="title">Título de la Página</div>
    </div>

    <input type="checkbox" id="menuToggle" style="display: none;">
    <div id="sideMenu" class="side-menu">
        <label class="close-btn" for="menuToggle">×</label>
        <label for="content1" onclick="document.getElementById('menuToggle').checked = false;">Enlace 1</label>
        <label for="content2" onclick="document.getElementById('menuToggle').checked = false;">Enlace 2</label>
        <label for="content3" onclick="document.getElementById('menuToggle').checked = false;">Enlace 3</label>
        <label for="content4" onclick="document.getElementById('menuToggle').checked = false;">Enlace 4</label>
    </div>

    <div class="content">
        <input type="radio" id="content1" name="content" style="display: none;" checked>
        <div class="content-section" id="section1">
            <section class="reservation" id="reservation">
                <h1 class="heading">Palabras</h1>
                <form class="form" method="post" action="ingresopalabra.php" enctype="multipart/form-data">
                    <fieldset>
                        <div class="container">
                            <div class="box">
                                <p>Palabra<span>*</span></p>
                                <input type="text" name="palabra" class="input" required placeholder="Ingresa el significado" maxlength="20">
                            </div>
                            <div class="box">
                                <p>Significado<span>*</span></p>
                                <input type="text" name="significado" class="input" required placeholder="Ingresa el significado" maxlength="20">
                            </div>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn" name="btn" id="btn"><i class="fa-solid fa-check"></i> Guardar</button>
                    <button type="reset" class="btn"><i class="fa-solid fa-trash"></i> Borrar</button>
                </form>
            </section>
            <div class="tablafondo">
                <main class="table">
                    <section class="table__header">
                        <h1>Registros</h1>
                    </section>
                    <section class="table__body">
                        <table>
                            <thead>
                                <tr>
                                    
                                    <th scope="col"><i class="fa-solid fa-user"></i> Palabra</th>
                                    <th scope="col"><i class="fa-solid fa-lock"></i> Significado</th>
                                    <th scope="col" colspan="2"><i class="fa-solid fa-gears"></i> Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $sql="SELECT*FROM palabras";
                                $result=mysqli_query($conexion,$sql);
                                while($mostrar=mysqli_fetch_array($result)){
    
                             ?>
                                <tr>
                                  
                                    <td><?php echo $mostrar['name']?></td>
                                    <td><?php echo $mostrar['mean']?></td>
                                    <td>
                                        <a href="editarusuario.php?IDUSUARIO=<?php echo $mostrar[id]?>" class="editar"><i class="fa-solid fa-pen"></i> Editar</a>
                                        <form action="eliminarusuario.php" method="post" onsubmit=" return confirmar();">
                                           <input type="hidden" value="<?php echo$mostrar['id']?>"name="txtID" readonly>
                                           <td>
                                           <i class="fa-solid fa-trash eliminar2">
                                               <input type="submit" value="Eliminar" name="btnELiminar" class="eliminar">
                                           </td>
                                        </form>
                                    </td>
                                </tr>
                                <?php 
                                }
    
                                ?>
                            </tbody>
                        </table>
                    </section>
                </main>
            </div>
    
        </div>

        <input type="radio" id="content2" name="content" style="display: none;">
        <div class="content-section" id="section2">
            <h2>Contenido 2</h2>
            <p>Este es el contenido de la sección 2.</p>
        </div>

        <input type="radio" id="content3" name="content" style="display: none;">
        <div class="content-section" id="section3">
            <h2>Contenido 3</h2>
            <p>Este es el contenido de la sección 3.</p>
        </div>

        <input type="radio" id="content4" name="content" style="display: none;">
        <div class="content-section" id="section4">
            <h2>Contenido 4</h2>
            <p>Este es el contenido de la sección 4.</p>
        </div>
    </div>

</body>
</html>
