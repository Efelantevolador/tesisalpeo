<script>
    function inicio(){
        alert("Debes iniciar sesion para entrar aquí");
        window.location="../view/index.php";
    }
</script>
<!DOCTYPE html>
<!--
	Interphase by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Elements - Interphase by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="../js/jquery.min.js"></script>
		<script src="../js/skel.min.js"></script>
		<script src="../js/skel-layers.min.js"></script>
		<script src="../js/init.js"></script>
		<link rel="stylesheet" href="../css/skel.css" />
		<link rel="stylesheet" href="../css/style.css" />
		<link rel="stylesheet" href="../css/style-xlarge.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<script type="text/javascript">
		function habi(){
			if(document.getElementById("category").value=="2"){
				document.getElementById("subcategoria").disabled=false;
				document.getElementeById("subcategoria").value="";
		}
		else{
			document.getElementById("subcategoria").disabled=true;
			document.getElementeById("subcategoria").value="";
		}
		}</script>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="index.php">Trabaja a tu medida</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="iniciarSesion.php">Iniciar sesion</a></li>
						<li><a href="registrarU.php">Registro usuario</a></li>
						
					</ul>
				</nav>
			</header>

		<!-- Main -->
		<?php
		require_once("../modelo/Postulante.php");
        require_once("../modelo/Trabajador.php");
        require_once("../modelo/Vivienda.php");
		session_start();
			if(isset($_SESSION["Trabajador"])){
				$t=new Trabajador();
				$t=$_SESSION["Trabajador"];
		?>
        <!-- BODY -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Perfil Empresa</h2>
					</header>

					<!-- Form -->
					<section>
						<h4>Informacion Reprecentante Empresa</h4>
						<form method="post" action="#">
							<div class="row uniform 50%">
                                <div class="4u 12u$(xsmall)">
                                    <h5>Rut</h5>
                                </div>
                                <div class="4u 12u$(xsmall)">
                                    <h5>Telefono</h5>
                                </div>
                                <div class="4u 12u$(xsmall)">
                                    <h5>Email</h5>
                                </div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="rut" id="rut" value="<?php echo $t->getId_rut();?>" placeholder="" disabled required/>
                                </div>
                                <div class="4u 12u$(xsmall)">
									<input type="text" name="telefono" id="fono" value="<?php echo $t->getTelefono();?>" placeholder="" required/>
								</div>
								<div class="4u 12u$(xsmall)">
									<input type="email" name="email" id="email" value="<?php echo $t->getMail();?>" placeholder="" required/>
                                </div>
                                
                                <div class="12u 12u$(xsmall)"></div>

                            
                                <div class="4u 12u$(xsmall)">
                                    <h5>Nombre</h5>
                                </div>
                                <div class="4u 12u$(xsmall)">
                                    <h5>Apellido Paterno</h5>
                                </div>
                                <div class="4u 12u$(xsmall)">
                                    <h5>Apellido Materno</h5>
                                </div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="nombre" id="nombre" value="<?php echo $t->getNombre();?>" placeholder="" required/>
								</div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="apellidoP" id="apellidoP" value="<?php echo $t->getApellido_p();?>" placeholder="" required/>
								</div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="apellidoM" id="apellidoM" value="<?php echo $t->getApellido_m();?>" placeholder="" required/>
								</div>
								<div class="12u 12u$(xsmall)">
								    <h4>Cargo</h4>
								</div>
								<div class="4u 12u$(xsmall)">
                                <input type="text" name="cargo" id="cargo" value="<?php echo $t->getCargo();?>" placeholder="" required/>
								</div>
								<div class="12u$" style="margin-top:20px;">
									<ul class="actions">
										<li><input type="submit" value="Guardar Información" class="special" /></li>
									</ul>
								</div>
							</div>
						</form>
					</section>
				</div>
			</section>
			
			<?php
                }
                elseif(isset($_SESSION["Postulante"])){
                    $p=new Postulante();
                    $viv=new Vivienda();
                    $p=$_SESSION["Postulante"];
                    $viv=$p->getVivienda();
                
			?>
            
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
			<!-- |||||||||||||||||||||||||||||||||||||||||||CAMBIO DE PERFIL||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Perfil Postulante</h2>
					</header>

					<!-- FORMULARIO POSTULANTE -->
					<section style="border:1px orange solid;margin-bottom:20px;padding:10px;">
						<header style="border:1px orange solid;margin-bottom:20px;padding:10px;">
							<h3>Informacion Postulante</h3>
						</header>
						<form method="post" action="../controlador/ControladorBase.php">
							<div class="row uniform 50%">
                                <div class="4u 12u$(xsmall)">
                                    <h5>Rut</h5>
                                </div>
                                <div class="4u 12u$(xsmall)">
                                    <h5>Email</h5>
                                </div>
                                <div class="4u 12u$(xsmall)">
                                    <h5>Telefono</h5>
                                </div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="name" id="rut" value="<?php echo $p->getRut();?>" placeholder="" disabled required/>
								</div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="email" id="email" value="<?php echo $p->getCorreo();?>" placeholder="" required/>
                                </div>
                                <div class="4u 12u$(xsmall)">
									<input type="text" name="telefono" id="telefono" value="<?php echo $p->getTelefono();?>" placeholder="" required/>
                                </div>
                                
                                <div class="12u 12u$(xsmall)"></div>

                                <div class="4u 12u$(xsmall)">
                                    <h5>Nombre</h5>
                                </div>
                                <div class="4u 12u$(xsmall)">
                                    <h5>Apellido Paterno</h5>
                                </div>
                                <div class="4u 12u$(xsmall)">
                                    <h5>Apellido Materno</h5>
                                </div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="name" id="name" value="<?php echo $p->getNombre();?>" placeholder="" required/>
								</div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="apellidoP" id="apellidoP" value="<?php echo $p->getApellido_Paterno();?>" placeholder="" required/>
								</div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="apellidoM" id="apellidoM" value="<?php echo $p->getApellido_Materno();?>" placeholder="" required/>
                                </div>
                                <div class="12u 12u$(xsmall)">
									<h5>Fecha de nacimiento</h5>
								</div>
                                <div class="2u 12u$(xsmall)">
                                    <div class="select-wrapper">
                                        <select name="day" id="category">
                                            <option value=""disabled>- Dia -</option>
                                            <?php
                                                for ($i = 1; $i <=31; $i++){
													if(substr($p->getFecha_nacimiento(),-2)==$i){
														echo '<option value="'.$i.'" selected>'.$i.'</option>';
													}else{
														echo '<option value="'.$i.'">'.$i.'</option>';
													}
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="2u 12u$(xsmall)">
                                    <div class="select-wrapper">
                                        <select name="month" id="category">
                                            <option value="" disabled>- Mes -</option>
                                            <option value="01" selected>Enero</option>
                                            <option value="02">Febrero</option>
                                            <option value="03">Marzo</option>
                                            <option value="04">Abril</option>
                                            <option value="05">Mayo</option>
                                            <option value="06">Junio</option>
                                            <option value="07">Julio</option>
                                            <option value="08">Agosto</option>
                                            <option value="09">Septiembre</option>
                                            <option value="10">Octubre</option>
                                            <option value="11">Noviembre</option>
                                            <option value="12">Diciembre</option>
                                        </select>
                                    </div>
                                </div>  
                                <div class="2u 12u$(xsmall)">
                                    <div class="select-wrapper">
                                        <select name="year" id="category">
                                            <option value=""disabled>- Año -</option>
                                            <?php
                                                $a=2019;
                                                for ($i = 1; $i <=70; $i++){
													if(substr($p->getFecha_nacimiento(),0,-6)==$i){
														echo '<option value="'.$a.'" selected>'.$a.'</option>';
													}
													else{
														echo '<option value="'.$a.'">'.$a.'</option>';
													}
                                                    $a=$a-1;
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
								<div class="12u 12u$(xsmall)">
								    <h5>Domicilio</h5>
								</div>
								<div class="4u 12u$(xsmall)">
									<div class="select-wrapper">
										<select name="region" id="category" >
											<option value="" select disabled>- Región -</option>
											<option value="15">Región de Arica y Parinacota</option>
											<option value="1">Región de Tarapacá</option>
											<option value="2">Región de Antofagasta</option>
											<option value="3">Región de Atacama</option>
											<option value="4">Región de Coquimbo</option>
											<option value="5">Región de Valparaíso</option>
											<option value="13">Región de Metropolitana de Santiago</option>
											<option value="6">Región de Libertador General Bernardo O'Higgins</option>
											<option value="7">Región de Maule</option>
											<option value="16">Región de Ñuble</option>
											<option value="8">Región de Biobío</option>
											<option value="9">Región de La Araucanía</option>
											<option value="14">Región de Los Ríos</option>
											<option value="10">Región de Los Lagos</option>
											<option value="11">Región de Aysén del General Carlos Ibáñez del Campo</option>
											<option value="12">Región de Magallanes y de la Antártica Chilena</option>
										</select>
									</div>
                                </div>
                                
                                <div class="12u 12u$(xsmall)"></div>
                                
                                <div class="3u 12u$(xsmall)">
                                    <h5>Ciudad</h5>
                                </div>
                                <div class="3u 12u$(xsmall)">
                                    <h5>Comuna</h5>
                                </div>
                                <div class="3u 12u$(xsmall)">
                                    <h5>Calle</h5>
                                </div>
                                <div class="3u 12u$(xsmall)">
                                    <h5>Numero de Calle</h5>
                                </div>
								<div class="3u 12u$(xsmall)">
									<input type="text" name="ciudad" id="ciudad" value="<?php echo $viv->getCiudad();?>" placeholder="" required/>
								</div>			
								<div class="3u 12u$(xsmall)">
									<input type="text" name="comuna" id="comuna" value="<?php echo $viv->getComuna();?>" placeholder="" required/>
								</div>	
								<div class="3u 12u$(xsmall)">
									<input type="text" name="calle" id="calle" value="<?php echo $viv->getCalle();?>" placeholder="" required/>
                                </div>
                                <div class="3u 12u$(xsmall)">
                                    <input type="text" name="ncalle" id="ncalle" value="<?php echo $viv->getNum_calle();?>" placeholder="" required/>
                                </div>

								<div class="12u$" style="margin-top:20px;">
									<ul class="actions">
										<li><input type="submit" value="Guardar informacion" class="special"/></li>
									</ul>
								</div>
                            </div>
                            <input type="hidden" name="c" value="Postulante_controller" />
        				    <input type="hidden" name="a" value="update" />
						</form>
					</section>




					
					<section style="border:1px blue solid;margin-bottom:20px;padding:10px;">
                        <header style="border:1px blue solid;margin-bottom:20px;">
                            <h3>Situación Educacional</h3>
                        </header>
                        <form method="post" action="../view/perfil.php">
                            <div class="row uniform 50%">
                                <div class="4u 12u$(xsmall)">
                                    <h5>Nivel Educacional</h5>
                                </div>
                                <div class="4u 12u$(xsmall)">
                                    <h5>Titulos cursados u obtenidos</h5>
                                </div>
                                <div class="4u 12u$(xsmall)">
                                    <h5>Institución</h5>
                                </div>
                                <div class="4u 12u$(xsmall)">
                                    <div class="select-wrapper">
                                        <select name="region" id="category" >
                                            <option value="" selected disabled>- Seleccione -</option>
                                            <option value="0">Educación Especial</option>
                                            <option value="0">Educación básica</option>
                                            <option value="0">Educación básica</option>
                                            <option value="0">Educación media incompleta</option>
                                            <option value="0">Educación media completa</option>
                                            <option value="0">Educación media técnico profecional incompleta</option>
                                            <option value="0">Educación media técnico profecional completa</option>
                                            <option value="0">Educación Superior incompleta</option>
                                            <option value="0">Educación Superior completa</option>
                                            <option value="0">Post-grado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="4u 12u$(xsmall)">
                                    <input type="text" name="" id="" value="" placeholder="" required/>
                                </div>
                                <div class="4u 12u$(xsmall)">
                                    <input type="text" name="" id="" value="" placeholder="" required/>
                                </div>
                                <div class="12u 12u$(xsmall)">
                                    <h5>Año egresado</h5>
                                </div>
                                <div class="2u 12u$(xsmall)">
                                    <div class="select-wrapper">
                                        <select name="year" id="category">
                                            <option value="" select disabled>- Año -</option>
                                            <?php
                                                $a=2019;
                                                for ($i = 1; $i <=70; $i++){
                                                    echo '<option value="'.$a.'">'.$a.'</option>';
                                                    $a=$a-1;
                                                }
                                            ?>
                                        </select>
									</div>
                                </div>
                                <div class="4u 12u$(xsmall)" style="margin-top:0px;">
									<ul class="actions">
										<li><input type="submit" value=" + Agregar Titulo" class="special"/></li>
									</ul>
                                </div> 
                                <div class="12u 12u$(xsmall)" style="margin-top:20px;">
                                    <div class="table-wrapper">
                                        <table class="alt">
                                            <thead>
                                                <tr>
                                                    <th>Nivel Educacional</th>
                                                    <th>Titulos Cursados u Obtenidos</th>
                                                    <th>Institución</th>
                                                    <th>Año Egresado</th>
                                                    <th>Eliminar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Educacion Superior Completa</td>
                                                    <td>Analista</td>
                                                    <td>Inacap</td>
                                                    <td>2019</td>
                                                    <td Style="text-decoration:underline;"><a href="">Eliminar</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Educacion Media Completa</td>
                                                    <td>4to medio</td>
                                                    <td>Boston Collegue</td>
                                                    <td>2015</td>
                                                    <td Style="text-decoration:underline;"><a href="">Eliminar</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>  
                                </div>
                            </div>    
                        </form>
                    </section>






                    <section style="border:1px black solid;padding:10px;">
                        <header style="border:1px black solid;margin-bottom:20px;">
                            <h3>Perfil Funcional</h3>
                        </header>
                        <form method="post" action="../view/perfil.php">
                            <div class="row uniform 50%">
                                <div class="2u 12u$(xsmall)"></div>
                                <div class="10u 12u$(xsmall)">
                                    <h5>Discapacidad</h5>
                                </div>
                                <div class="2u 12u$(xsmall)"></div>
                                <div class="6u 12u$(xsmall)">
                                    <div class="select-wrapper">
                                        <select name="region" id="category" >
                                            <option value="" selected disabled>- Seleccione -</option>
                                            <option value="0">DOGE</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="4u 12u$(xsmall)" style="margin-top:0px;">
									<ul class="actions">
										<li><input type="submit" value=" + Agregar" class="special"/></li>
									</ul>
                                </div> 
                                <div class="2u 12u$(xsmall)"></div>
                                <div class="7u 12u$(xsmall)" style="margin-top:20px;">
                                    <div class="table-wrapper">
                                        <table class="alt">
                                            <thead>
                                                <tr>
                                                    <th>Nombre discapacidad</th>
                                                    <th>Eliminar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Rodrigo (enfermito)</td>
                                                    <td Style="text-decoration:underline;"><a href="">Eliminar</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Doge (Enfermizo)</td>
                                                    <td Style="text-decoration:underline;"><a href="">Eliminar</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>  
                                </div>
                                
                            </div>    
                        </form>
                    </section>
				</div>
            </section>
            <?php
            }
            else{
                echo "<script>inicio()</script>";
            }
            ?>
			<ul class="actions">
            <form method="post" action="../controlador/ControladorBase.php">
                    <input type="hidden" name="c" value="Usuario_controller" />
        			<input type="hidden" name="a" value="cerrar" />
                    <input type="submit" value="Cerrar Sesión" class="special"/>
            </form>
			</ul>
            
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row">
						<section class="4u 6u(medium) 12u$(small)">
							<h3>Lorem ipsum</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, cumque!</p>
							<ul class="alt">
								<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
								<li><a href="#">Quod adipisci perferendis et itaque.</a></li>
								<li><a href="#">Itaque eveniet ullam, veritatis reiciendis?</a></li>
								<li><a href="#">Accusantium repellat accusamus a, soluta.</a></li>
							</ul>
						</section>
						<section class="4u 6u$(medium) 12u$(small)">
							<h3>Nostrum, repellat!</h3>
							<p>Tenetur voluptate exercitationem eius tempora! Obcaecati suscipit, soluta earum blanditiis.</p>
							<ul class="alt">
								<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
								<li><a href="#">Id inventore, qui necessitatibus sunt.</a></li>
								<li><a href="#">Deleniti eum odit nostrum eveniet.</a></li>
								<li><a href="#">Illum consectetur quibusdam eos corporis.</a></li>
							</ul>
						</section>
						<section class="4u$ 12u$(medium) 12u$(small)">
							<h3>Contact Us</h3>
							<ul class="icons">
								<li><a href="#" class="icon rounded fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon rounded fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon rounded fa-pinterest"><span class="label">Pinterest</span></a></li>
								<li><a href="#" class="icon rounded fa-google-plus"><span class="label">Google+</span></a></li>
								<li><a href="#" class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="tabular">
								<li>
									<h3>Address</h3>
									1234 Somewhere Road<br>
									Nashville, TN 00000
								</li>
								<li>
									<h3>Mail</h3>
									<a href="#">someone@untitled.tld</a>
								</li>
								<li>
									<h3>Phone</h3>
									(000) 000-0000
								</li>
							</ul>
						</section>
					</div>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
					</ul>
				</div>
			</footer>

	</body>
</html>