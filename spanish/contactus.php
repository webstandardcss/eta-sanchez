<?php	$title = "Contact Us"; 	include_once('header.php'); 	include_once('header_bottom.php'); ?>
<section class="contents col-sm-8 pull-right">
   <!-- Contents Starts --><br />	
   <div class="return"></div>
   <h1>Un abogado de inmigración, lesiones personales y de defensa criminal</h1>
   <p>¿Está tratando con lesiones producto de un accidente de un vehículo motorizado o enfrenta la deportación, una disputa contractual o cargos criminales? EL bufete de abogados José Sánchez, P.C., ofrece representación experimentada para inmigración, lesiones corporales, litigios civiles y casos de defensa criminal en Longview, Texas y áreas circundantes.</p>
   <p>Soy el abogado José Sánchez. He pasado la mayor parte de mi vida en Longview y me comprometo a ayudar a los residentes del este de Texas y pequeños negocios a la resolución sus asuntos legales. Mis prioridades como abogado son trabajar duro para mis clientes y hacer todo lo que pueda para ayudarlos a encontrar una resolución positiva a sus problemas legales.</p>
   <p>Contácteme hoy para una consulta sobre su problema legal.</p>
   <p>      Las etiquetas en <b>negrilla</b> y * indican la información requerida.    </p>
   <p>Información personal</p>
   <script type="text/javascript">    	$(document).ready(function(e) {						$("#contact_form").submit(function(){				$('#loader').show();				var data = {					"action": "test"				};				data = $(this).serialize() + "&" + $.param(data);				$.ajax({					type: "POST",					dataType: "json",					url: "send.php", 					data: data,					success: function(data) {						$(".return").html(							data["json"]						);					},					error: function(){						$('#loader').hide();						$('.return').html('<div class="alert alert-warning"><strong>Something went wrong!</strong></div>');					}				});				return false;			});        });    </script>    
   <form action="#" class="col-sm-9" id="contact_form">
      <ul>
         <li>                <label>Nombre: <span>*</span></label>                <input type="text" class="form-control" name="Name" required />            </li>
         <li>                <label>Correo electrónico: <span>*</span></label>                <input type="email" class="form-control" name="Email" required /></li>
         <li>                <label>Estado/Nombre de provincia: </label>                <input type="text" class="form-control" name="Province" />            </li>
         <li>                <label>Código postal: </label>                <input type="text" class="form-control" name="Zip" /> </li>
         <li>                <label>Número de teléfono: </label>                <input type="text" class="form-control" name="Phone" />            </li>
      </ul>
      <p>Preferencias de contacto</p>
      <p>¿Cómo le gustaría ser contactado?</p>
      <p>Marque todo lo que aplique.</p>
      <fieldset>          <label>Correo electrónico:            <input type="checkbox" name="replyEmail" value="Want to be Contacted by Email" />          </label>          <label>Teléfono:            <input type="checkbox" name="replyPhone" value="Want to be Contacted by Phone" />          </label>        </fieldset>
      <p>¿Cómo podemos ayudarlo?</p>
      <p>Breve descripción de sus problemas legales</p>
      <p>          <textarea class="form-control" rows="7" name="Message"></textarea>        </p>
      <input type="submit" class="btn btn-danger" value="Enviar Mensaje" />    
   </form>
   <div class="clearfix"></div>
   <br />    
   <p>El uso de la Internet o este formulario para la comunicación con el bufete o cualquier miembro individual de la firma no establece una relación abogado-cliente. La información confidencial o urgente no debe ser enviada mediante este formulario.</p>
   <div class="row">
      <h3>Jose Sanchez Law Firm, P.C</h3>
      <ul class="col-sm-4">
         <li><strong>Oficina en el Este de Texas</strong></li>
         <li>507 N Green Street</li>
         <li>Longview, TX 75601</li>
         <li>Teléfono: 903-758-8700</li>
         <li>Línea Gratuita: 888-709-9023</li>
         <li>Fax: 903-758-8712</li>
         <li>      <a href="https://www.google.com/maps?f=q&hl=en&geocode&q=507+N+Green+Street+Longview,+TX+75601+US" target="_blank">        <strong>Mapa e Indicaciones</strong>      </a>    </li>
      </ul>
      <ul class="col-sm-4">
         <li><strong>Oficina en Dallas</strong></li>
         <li>2911 Turtle Creek Blvd</li>
         <li>Suite 1400</li>
         <li>Dallas, Texas 75219</li>
         <li>Línea Gratuita: 888-709-9023</li>
         <li>Fax: 903-758-8712</li>
         <li>      <a href="https://www.google.com/maps?f=q&hl=en&geocode&q=2911+Turtle+Creek+Blvd+Dallas,+TX+75219+US" target="_blank">        <strong>Mapa e Indicaciones</strong>      </a>    </li>
      </ul>
   </div>
   <!-- Contents Ends -->
</section>
<aside class="col-sm-4 pull-left">
   <!-- Aside Starts -->	<br />	<img src="images/i-default.jpg" alt="Contact Us" class="img-responsive left-img" />	<br />	    <?php include_once('sidebar.php'); ?> <!-- Aside Ends -->
</aside>
<?php include_once('footer.php'); ?>