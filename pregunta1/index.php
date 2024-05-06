<?php
	include("cabeza.php");
?>
	<nav class="navbar">
		<ul>
        	<li><a href="">Inicio</a></li>
        	<li><a href="">Acerca de</a></li>
        	<li><a href="">Servicios</a></li>
        	<li><a href="">Contacto</a></li>
    	</ul>
	</nav>
	<aside class="sidebar">
		<ul>
        	<li><a href="#cuentas_corrientes" id="cuentas_corrientes">Cuentas corrientes</a></li>
        	<li><a href="#cuentas_ahorro" id="cuentas_ahorro">Cuentas de ahorro</a></li>
        	<li><a href="#cuentas_inversion" id="cuentas_inversion">Cuentas de inversion</a></li>
    	</ul>
	</aside>
	<article class="main" id="contenido_principal">
		<h1>Aqui se veran los 3 tipos de cuentas bancarias usando JavaScript </h1>
	</article>
	<script>
        // referencia a los enlaces
        const cuentasCorrientesLink = document.getElementById('cuentas_corrientes');
        const cuentasAhorroLink = document.getElementById('cuentas_ahorro');
        const cuentasInversionLink = document.getElementById('cuentas_inversion');
        const contenidoPrincipal = document.getElementById('contenido_principal');

        // actualza contenido
        function actualizarContenido(event) {
            event.preventDefault(); 

            // Obtener el href del enlace al que se hace click
            const href = event.target.getAttribute('href');
			switch (href) {
            case '#cuentas_corrientes':
                mostrarTablaCuentasCorrientes();
                break;
            case '#cuentas_ahorro':
                mostrarTablaCuentasAhorro();
                break;
            case '#cuentas_inversion':
                mostrarTablaCuentasInversion();
                break;
            default:
                break;
        }

		function mostrarTablaCuentasCorrientes() {
        const tablaHTML = `
            <a>
			La cuenta corriente es una herramienta financiera fundamental que ofrece flexibilidad y conveniencia
             para administrar las finanzas diarias. Con esta cuenta, los clientes pueden realizar transacciones 
             frecuentes, como depósitos, retiros, transferencias y pagos de facturas. A menudo viene con un 
             conjunto de servicios adicionales, como cheques, tarjetas de débito y acceso a banca en línea, que 
             facilitan la gestión de las finanzas personales y comerciales. Es una opción ideal para aquellos que
              necesitan acceso constante a su dinero para gastos diarios y transacciones regulares.
            </a>
        `;
        contenidoPrincipal.innerHTML = tablaHTML;
    }

    function mostrarTablaCuentasAhorro() {
        const tablaHTML = `
            <a>
			La cuenta de ahorro es una opción segura y confiable para aquellos que desean guardar dinero 
            para metas a corto o largo plazo. Con esta cuenta, los clientes pueden depositar fondos y ganar 
            intereses sobre el saldo acumulado. Es ideal para aquellos que desean separar parte de sus ingresos 
            para emergencias, futuros proyectos o simplemente para hacer crecer sus ahorros con seguridad. 
            Además, brinda acceso fácil a los fondos cuando se necesiten, lo que la convierte en una opción 
            flexible y conveniente.
            </a>
        `;
        contenidoPrincipal.innerHTML = tablaHTML;
    }

    function mostrarTablaCuentasInversion() {
        const tablaHTML = `
            <a>
            La cuenta de inversión es una plataforma diseñada para aquellos que buscan hacer crecer su patrimonio
             a través de la inversión en diferentes instrumentos financieros, como acciones, bonos, fondos mutuos
              y más. Ofrece a los clientes la oportunidad de participar en los mercados financieros y diversificar 
              su cartera para alcanzar sus objetivos financieros a largo plazo, como la jubilación, la educación 
              universitaria o la compra de una vivienda. Además, brinda acceso a herramientas y recursos de
               inversión, así como asesoramiento profesional para ayudar a los clientes a tomar decisiones 
            informadas y maximizar sus rendimientos. Es una opción ideal para aquellos con un horizonte de 
            inversión a largo plazo y una tolerancia al riesgo adecuada.
            </a>
        `;
        contenidoPrincipal.innerHTML = tablaHTML;
    }
        }

        // agrego eventos
        cuentasCorrientesLink.addEventListener('click', actualizarContenido);
        cuentasAhorroLink.addEventListener('click', actualizarContenido);
        cuentasInversionLink.addEventListener('click', actualizarContenido);
    </script>
<?php
	include("pie.php");
?>