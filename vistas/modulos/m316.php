
    <main class="main">
        <div class="contenedor">
            <div class="contenedor__secundario">
                <div class="contenedor__secundario--titulo">
                    <h1>Asistencia de Laboratorios</h1>
                </div>
            <div class="titulos__curso">
                <h2>
                    Laboratorio de Informatica M-316
                </h2>
                <h3>
                    Ingresa tu carnet
                </h3>
            </div>
                <form id="formulario__carnet" method="POST" action="datos.php">
                    <input type="number" id="carnet__input" placeholder="Ingresa tu Carnet Aqui" name="carnet" required>
                    <input type="submit" value="Verificar" class="boton__enviar">  	
                    <input type="hidden" name="laboratorio" value="M-316">
                </form>
            </div>
        </div>
    </main>
