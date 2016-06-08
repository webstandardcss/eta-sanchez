<?php	$title = "Contact Us"; 	include_once('header.php'); 	include_once('header_bottom.php'); ?>
<section class="contents col-sm-8 pull-right">
   <!-- Contents Starts --><br />	
   <div class="return"></div>
   <h1>Un abogado de inmigraci�n, lesiones personales y de defensa criminal</h1>
   <p>�Est� tratando con lesiones producto de un accidente de un veh�culo motorizado o enfrenta la deportaci�n, una disputa contractual o cargos criminales? EL bufete de abogados Jos� S�nchez, P.C., ofrece representaci�n experimentada para inmigraci�n, lesiones corporales, litigios civiles y casos de defensa criminal en Longview, Texas y �reas circundantes.</p>
   <p>Soy el abogado Jos� S�nchez. He pasado la mayor parte de mi vida en Longview y me comprometo a ayudar a los residentes del este de Texas y peque�os negocios a la resoluci�n sus asuntos legales. Mis prioridades como abogado son trabajar duro para mis clientes y hacer todo lo que pueda para ayudarlos a encontrar una resoluci�n positiva a sus problemas legales.</p>
   <p>Cont�cteme hoy para una consulta sobre su problema legal.</p>
   <p>      Las etiquetas en <b>negrilla</b> y * indican la informaci�n requerida.    </p>
   <p>Informaci�n personal</p>
   <script type="text/javascript">    	$(document).ready(function(e) {						$("#contact_form").submit(function(){				$('#loader').show();				var data = {					"action": "test"				};				data = $(this).serialize() + "&" + $.param(data);				$.ajax({					type: "POST",					dataType: "json",					url: "send.php", 					data: data,					success: function(data) {						$(".return").html(							data["json"]						);					},					error: function(){						$('#loader').hide();						$('.return').html('<div class="alert alert-warning"><strong>Something went wrong!</strong></div>');					}				});				return false;			});        });    </script>    
   <form action="#" class="col-sm-9" id="contact_form">
      <ul>
         <li>                <label>Nombre: <span>*</span></label>                <input type="text" class="form-control" name="Name" required />            </li>
         <li>                <label>Correo electr�nico: <span>*</span></label>                <input type="email" class="form-control" name="Email" required /></li>
         <li>                <label>Estado/Nombre de provincia: </label>                <input type="text" class="form-control" name="Province" />            </li>
         <li>                <label>C�digo postal: </label>                <input type="text" class="form-control" name="Zip" /> </li>
         <li>                <label>N�mero de tel�fono: </label>                <input type="text" class="form-control" name="Phone" />            </li>
      </ul>
      <p>Preferencias de contacto</p>
      <p>�C�mo le gustar�a ser contactado?</p>
      <p>Marque todo lo que aplique.</p>
      <fieldset>          <label>Correo electr�nico:            <input type="checkbox" name="replyEmail" value="Want to be Contacted by Email" />          </label>          <label>Tel�fono:            <input type="checkbox" name="replyPhone" value="Want to be Contacted by Phone" />          </label>        </fieldset>
      <p>�C�mo podemos ayudarlo?</p>
      <p>Breve descripci�n de sus problemas legales</p>
      <p>          <textarea class="form-control" rows="7" name="Message"></textarea>        </p>
      <input type="submit" class="btn btn-danger" value="Enviar Mensaje" />    
   </form>
   <div class="clearfix"></div>
   <br />    
   <p>El uso de la Internet o este formulario para la comunicaci�n con el bufete o cualquier miembro individual de la firma no establece una relaci�n abogado-cliente. La informaci�n confidencial o urgente no debe ser enviada mediante este formulario.</p>
   <div class="row">
      <h3>Jose Sanchez Law Firm, P.C</h3>
      <ul class="col-sm-4">
         <li><strong>Oficina en el Este de Texas</strong></li>
         <li>507 N Green Street</li>
         <li>Longview, TX 75601</li>
         <li>Tel�fono: 903-758-8700</li>
         <li>L�nea Gratuita: 888-709-9023</li>
         <li>Fax: 903-758-8712</li>
         <li>      <a href="https://www.google.com/maps?f=q&hl=en&geocode&q=507+N+Green+Street+Longview,+TX+75601+US" target="_blank">        <strong>Mapa e Indicaciones</strong>      </a>    </li>
      </ul>
      <ul class="col-sm-4">
         <li><strong>Oficina en Dallas</strong></li>
         <li>2911 Turtle Creek Blvd</li>
         <li>Suite 1400</li>
         <li>Dallas, Texas 75219</li>
         <li>L�nea Gratuita: 888-709-9023</li>
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