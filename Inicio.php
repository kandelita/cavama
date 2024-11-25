<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cavama</title>
    <link rel="stylesheet" href="stylesindex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
        <header>
            <div class="container-hero">
                <div class="container hero">
                    <div class="customer-support">
                        <i class="fa-solid fa-headset"></i>
                        <div class="content-customer-support">
                            <span class="text">Atención al cliente</span>
                            <span class="number">11 2345-678</span>
                        </div>
                    </div>

                    <div class="container-logo">
                        <img src="img/logocavama.png" alt="" class="logo-cavama">

                        <h1 class="logo"><a href="/"></a></h1>
                    </div>

                    <div class="container-user">
                        <a href="../cavama/index.php">
                            <i class="fa-solid fa-user"></i>
                        </a>
                        <button class="open-cart">
						<div class="fa-solid fa-basket-shopping"></button>
                        <div class="cart-overlay" id="cart-overlay">
						<h2>Carrito de Compras</h2>
						<div class="cart-items">
       			     <ul id="cart-items-list"></ul>
						<ul id="cart-items-list"></ul>
					</div>
					<div class="total" id="cart-total">Total: $0</div>
					<button class="buy-button" id="buy-button">Comprar</button>
					<button class="close-cart">Cerrar</button>
                    </div>
                </div>
            </div>

            <div class="container-navbar">
                <nav class="navbar container">
                    <i class="fa-solid fa-bars"></i>
                    <ul class="menu">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#marcador">Menu</a></li>
                        <li><a href="#contacto">Contactanos</a></li>
                        <li><a href="#nosotros">Nosotros</a></li>
						<li><a href="../cavama/documentacion/pagina_documentacion.html">Documentación</a></li>
                    </ul>

                    <form class="search-form">
						<input type="search" placeholder="Buscar..." />
						<button class="btn-search">
							<i class="fa-solid fa-magnifying-glass"></i>
						</button>
					</form>
                </nav>
            </div>
        </header>

        <section class="banner">
            <div class="content-banner">
                <p>Amor en cada gota de café</p>
                <h2>Bienvenido a Cavama</h2>
               <a href="#marcador">comprar ahora</a>
            
            </div>
        </section>

        <main class="main-content">

			<section class="container top-products" id="marcador">
            <br>
				<h1 class="heading-1">Nuestro menú</h1>
            <br>
            <br>

				<div class="container-products">
                <!-- producto -->
					<div class="card-product" >
						<div class="container-img">
							<img src="img/cafe-moca.png" alt="moca" />
							<span class="discount">-13%</span>
							
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Café moca</h3>
							<span class="add-cart">
							<button class="add-to-cart" data-product="Café moca" data-price="3.900"  data-image="img/cafe-moca.png"><i class="fa-solid fa-basket-shopping"></i></button>
							</span>
							<p class="price">$3.900 <span>$5.450</span></p>
						</div>
					</div>
					<!-- producto -->
					<div class="card-product" >
						<div class="container-img">
							<img
								src="img/latte.png"
								alt="latte"
							/>
							<span class="discount">-22%</span>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Latte</h3>
							<span class="add-cart">
							<button class="add-to-cart" data-product="latte" data-price="3.900"  data-image="img/latte.png"><i class="fa-solid fa-basket-shopping"></i></button>
							</span>
							<p class="price">$3.900 <span>$5.450</span></p>
						</div>
			
					</div>
					<!--  -->
					<div class="card-product" >
						<div class="container-img">
							<img
								src="img/cafe-australiano.jpg"
								alt="Cafe Australiano"
							/>
							
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>Cafe Australiano</h3>
							<span class="add-cart">
							<button class="add-to-cart" data-product="Café australiano" data-price="3.200"  data-image="img/cafe-australiano.jpg"><i class="fa-solid fa-basket-shopping"></i></button>
							</span>
							<p class="price">$3.200</p>
				</div>
					</div>
					<!--  -->
					<div class="card-product" >
						<div class="container-img">
							<img src="img/frapuccino.png" alt="Frapuccino" />
							
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Frapuccino</h3>
							<span class="add-cart">
							<button class="add-to-cart" data-product="Frapuccino" data-price="2.600"  data-image="img/frapuccino.png"><i class="fa-solid fa-basket-shopping"></i></button>
							</span>
							<p class="price">$2.600</p>
						</div>
					</div>
				</div>
                <br>
                <br>
                <div class="container-products">
									<!-- producto -->
                                    <div class="card-product">
						<div class="container-img">
							<img src="img/cafe.png" alt="Cafe" />
							<span class="discount">-13%</span>
							
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Café</h3>
							<span class="add-cart">
							<button class="add-to-cart" data-product="Café" data-price="2.000"  data-image="img/cafe.png"><i class="fa-solid fa-basket-shopping"></i></button>
							</span>
							<p class="price">$2.000 <span>$2.800</span></p>
						</div>
					</div>
                    
					<!-- producto -->
					<div class="card-product">
						<div class="container-img">
							<img
								src="img/te.jpg"
								alt="te.jpg"
							/>
							<span class="discount">-12%</span>	
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Taza de té</h3>
							<span class="add-cart">
							<button class="add-to-cart" data-product="Taza de té" data-price="2.000"  data-image="img/te.jpg"><i class="fa-solid fa-basket-shopping"></i></button>
							</span>
							<p class="price">$2.000 <span>$2.800</span></p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img
								src="img/matcha.png"
								alt="matcha"
							/>
							
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>Matcha</h3>
							<span class="add-cart">
							<button class="add-to-cart" data-product="Matcha" data-price="3.200"  data-image="img/matcha.png"><i class="fa-solid fa-basket-shopping"></i></button>
							</span>
							<p class="price">$3.200</p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/cafe-helado.jpg" alt="Cafe Helado" />
		
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Cafe Helado</h3>
							<span class="add-cart">
							<button class="add-to-cart" data-product="Cafe Helado" data-price="4.500"  data-image="img/cafe-helado.jpg"><i class="fa-solid fa-basket-shopping"></i></button>
							</span>
							<p class="price">$4.500</p>
						</div>
					</div>
				</div>
			</section>
<br>
			<section class="container specials">
				<h1 class="heading-1">Pastelería</h1>
<br>
				<div class="container-products">
					<!-- producto -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/croissant.png" alt="Croissant" />
							<span class="discount">-12%</span>
							
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Croissant</h3>
							<span class="add-cart">
							<button class="add-to-cart" data-product="Croissant" data-price="4.600"  data-image="img/croissant.png"><i class="fa-solid fa-basket-shopping"></i></button>
							</span>
							<p class="price">$4.600 <span>$5.300</span></p>
						</div>
					</div>
					<!-- producto -->
					<div class="card-product">
						<div class="container-img">
							<img
								src="img/pan-molde.png"
								alt="Pan de semillas"
							/>
							<span class="discount">-10%</span>
					
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Pan de semillas</h3>
							<span class="add-cart">
							<button class="add-to-cart" data-product="Pan de semillas" data-price="4.500" data-image="img/pan-molde.png"><i class="fa-solid fa-basket-shopping"></i></button>
							</span>
							<p class="price">$4.500 <span>$6.300</span></p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/cookie.jpg" alt="cookie" />
							<span class="discount">-20%</span>
						
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>Cookie</h3>
							<span class="add-cart">
							<button class="add-to-cart" data-product="cookie" data-price="1.800" data-image="img/cookie.jpg"><i class="fa-solid fa-basket-shopping"></i></button>
							</span>
							<p class="price">$1.800 <span>$2.500</span></p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/muffin-doblechoco.png" alt="Muffin chocolate" />
						
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Muffin doble chocolate</h3>
							<span class="add-cart">
							<button class="add-to-cart" data-product="Muffin doble chocolate" data-price="2.600" data-image="img/muffin-doblechoco.png"><i class="fa-solid fa-basket-shopping"></i></button>
							</span>
							<p class="price">$2.600</p>
						</div>
					</div>
				</div>
                <br>
                <br>
                <div class="container-products">
					<!-- producto -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/muffin-avellanas.jpg" alt="Muffin Avellanas" />
							<span class="discount">-12%</span>
							
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Muffin de avellanas</h3>
							<span class="add-cart">
							<button class="add-to-cart" data-product="Muffin de avellanas" data-price="1.650" data-image="img/muffin-avellanas.jpg"><i class="fa-solid fa-basket-shopping"></i></button>
							</span>
							<p class="price">$1.650 <span>$2.600</span></p>
						</div>
					</div>
					<!-- producto -->
					<div class="card-product">
						<div class="container-img">
							<img
								src="img/brownie.png"
								alt="Brownie" />
							<span class="discount">-10%</span>
					
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Brownie</h3>
							<span class="add-cart">
							<button class="add-to-cart" data-product="Brownie" data-price="2.800" data-image="img/brownie.png"><i class="fa-solid fa-basket-shopping"></i></button>
							</span>
							<p class="price">$2.800 <span>$3.250</span></p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/roll.jpg" alt="Roll" />
							<span class="discount">-10%</span>
						
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>Roll de canela</h3>
							<span class="add-cart">
							<button class="add-to-cart" data-product="Roll de canela" data-price="2.500" data-image="img/roll.jpg"><i class="fa-solid fa-basket-shopping"></i></button>
							</span>
							<p class="price">$2.500 <span>$4.250</span></p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/lemon-pie.png" alt="lemon pie" />
						
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Lemon Pie</h3>
							<span class="add-cart">
							<button class="add-to-cart" data-product="Lemon Pie" data-price="5.600" data-image="img/lemon-pie.png"><i class="fa-solid fa-basket-shopping"></i></button>
							</span>
							<p class="price">$5.600</p>
						</div>
					</div>
				</div>
			</section>
            <section class="container blogs" id="nosotros">
                <br>
				<h1 class="heading-1">Nuestro café de especialidad</h1>
				<div class="container-blogs">
					<div class="card-blog">
						<div class="container-img">
							<img src="img/especialidad.jpg" alt="cafe de especialidad" />
						</div>
						<div class="content-blog">
							<h3>¿Qué es el café de especialidad?</h3>
							<p>
								Los cafés especiales son distinguidos por la
								ausencia de defectos en los granos y destacados
								por su aroma, sabor y personalidad excepcionales.
								Los granos, cuidadosamente seleccionados en
								origen, llevan un riguroso seguimiento desde su
								cosecha en las fincas hasta el tostado y envasado. 
							</p>
						</div>
					</div>
					<div class="card-blog">
						<div class="container-img">
							<img src="img/cereza.jpg" alt="cereza de cafe" />
						</div>
						<div class="content-blog">
							<h3>¿Cómo es su cultivo?</h3>
							<p>
								Empieza a gestarse desde el
								origen. El cultivo es un proceso muy cuidadoso y se
								realiza en una región específica con unas condiciones
								especiales de temperatura, sombra, humedad o altura.
								Todos estos factores influyen directamente en la calidad
								del grano, que se obtiene a través de un proceso de
								producción artesanal en el cual no se utiliza ningún tipo
								de herbicida o pesticida químico.
							</p>
						</div>
					</div>
					<div class="card-blog">
						<div class="container-img">
							<img src="img/granos.jpg" alt="granos de cafe" />
						</div>
						<div class="content-blog">
							<h3>¿Cómo es la recolección del grano?</h3>
							<p>
								Luego de ser recogidas, las cerezas pasan por una despulpadora
								que se para la parte carnosa del fruto del grano. Después, se
								dejan secar al sol para eliminar exceso de humedad y pasan al
								descascarado. En este momento, se seleccionan a mano y se desechan
								los granos con algún defecto visible.
							</p>
						</div>
					</div>
				</div>
			</section>
			<br>
       </main>
<br><br><br>
<footer class="footer">
  <div class="container container-footer">
    <div class="menu-footer" id="contacto">
      <div class="contact-info">
        <p class="title-footer">Información de Contacto</p>
          <li>Dirección: Caballito, Pujol 1093</li>
          <li>Teléfono: 11 2345-6789</li>
          <li>Email: cavama@support.com</li>
        </ul>
      </div>
    </div>
    
    <div class="contacto-footer">
      <form action="https://formspree.io/f/xzzbpkdd" method="POST" class="formulario-contacto">
        <label for="nombre">Nombre completo
          <input type="text" name="nombre" required>
        </label>
        <label for="email">Correo electrónico:
          <input type="email" name="email" required>
        </label>
        <label for="mensaje">Comentarios:
          <textarea name="mensaje" rows="5" required></textarea>
        </label>
        <button type="submit">Enviar</button>
      </form>
    </div>
    
    <div class="copyright">
      <p>Cavama. Todos los derechos reservados. &copy; 2024</p>
    </div>
  </div>
</footer>
		<script src="script.js"></script>
	</body>
</html>