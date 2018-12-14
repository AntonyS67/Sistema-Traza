<div class="part-top">
        <div class="text-center time">
            <br>
            <p>
            <?php
                // Formato date('w') devuelve la posicion del dia de la semana: domingo = 0 y sabado = 6
                // y el formado 'd' devuelve el numero del dia actual
                $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                // Formato date('n') devuelve la posicion del numero de mes, desde el 1 hasta el 12
                //y el formato 'Y' devuelve el año actual en 4 digitos
                $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");  
                echo $dias[date('w')].", ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
                ?>
            </p>
            <p id="reloj" onload="Comenzar('reloj');">
                    <?php 
                        $hora = new DateTime("now", new DateTimeZone('America/Lima'));
                        echo $hora->format('H:i:s');
                    ?>
            </p>
      
        </div>
        <div class="img-user">
            <img src="images/photo.jpg" alt="">
            <p id="member"><?php echo $_SESSION["usuario"]?><span id="agregar" class="fa fa-chevron-down" onclick="mostrar_ocultar('admin')"></span>
                <br>
                <ol id="admin" style="display:none" >
                    <li><a href=""><i class="fa fa-user"></i> Editar Perfil</a></li>
                    <!-- <li><a href=""><i class="fas fa-file-alt"></i> Términos y Condiciones</a></li> -->
                    <li><a href="salir"><i class="fa fa-times"></i> Salir</a></li>
                </ol>
            </p>
        </div>
    </div>