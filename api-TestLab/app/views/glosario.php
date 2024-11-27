<?php include __DIR__ . '/includes/header.php'; ?>
    <link rel="stylesheet" href="/api-TestLab/public/css/styles.css">
<style>
        /* Estilo para los tooltips */
       .tooltip {
            position: relative;
            display: inline-block;
            cursor: pointer;
        }

        /* Estilo para el texto emergente */
        .tooltip .tooltiptext {
            visibility: hidden;
            width: 220px;
            background-color: #556b2f; /* Verde oscuro */
            color: #fff;
            text-align: center;
            border-radius: 5px;
            padding: 10px;
            position: absolute;
            z-index: 1;
            bottom: 150%; /* Mostrar encima del texto */
            left: 50%;
            margin-left: -110px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        /* Mostrar el tooltip al pasar el cursor */
       .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }*/
    </style>
</head>
<body>
    <div class="container">
        <h1>Glosario Educativo</h1>
        
        <section>
            <h2>Matemáticas</h2>
            <p>
                <span class="tooltip">Álgebra
                    <span class="tooltiptext">Rama de las matemáticas que estudia las operaciones y relaciones usando símbolos y letras.</span>
                </span>, 
                <span class="tooltip">Geometría
                    <span class="tooltiptext">Estudio de las propiedades y relaciones de puntos, líneas, superficies y sólidos.</span>
                </span>, 
                <span class="tooltip">Cálculo
                    <span class="tooltiptext">Rama que se centra en las tasas de cambio y la acumulación de cantidades.</span>
                </span>.
            </p>
        </section>

        <section>
            <h2>Lengua</h2>
            <p>
                <span class="tooltip">Gramática
                    <span class="tooltiptext">Estudio de las reglas y principios que gobiernan el uso de un idioma.</span>
                </span>, 
                <span class="tooltip">Sintaxis
                    <span class="tooltiptext">Parte de la gramática que estudia el orden y estructura de las palabras en una oración.</span>
                </span>, 
                <span class="tooltip">Semántica
                    <span class="tooltiptext">Estudio del significado de las palabras y expresiones.</span>
                </span>.
            </p>
        </section>

        <section>
            <h2>Química</h2>
            <p>
                <span class="tooltip">Átomo
                    <span class="tooltiptext">Unidad básica de un elemento químico, compuesta por protones, neutrones y electrones.</span>
                </span>, 
                <span class="tooltip">Elemento
                    <span class="tooltiptext">Sustancia pura formada por átomos del mismo tipo.</span>
                </span>, 
                <span class="tooltip">Reacción Química
                    <span class="tooltiptext">Proceso en el que una o más sustancias se transforman en nuevas sustancias.</span>
                </span>.
            </p>
        </section>

        <section>
            <h2>Biología</h2>
            <p>
                <span class="tooltip">Célula
                    <span class="tooltiptext">Unidad básica de los seres vivos, capaz de realizar funciones vitales.</span>
                </span>, 
                <span class="tooltip">Ecosistema
                    <span class="tooltiptext">Conjunto de organismos y su entorno interactuando en un área determinada.</span>
                </span>, 
                <span class="tooltip">Fotosíntesis
                    <span class="tooltiptext">Proceso por el cual las plantas convierten la luz solar en energía.</span>
                </span>.
            </p>
        </section>

        <section>
            <h2>Historia</h2>
            <p>
                <span class="tooltip">Civilización
                    <span class="tooltiptext">Sociedad compleja con desarrollo en cultura, ciencia, y organización política.</span>
                </span>, 
                <span class="tooltip">Revolución
                    <span class="tooltiptext">Cambio drástico en la estructura política o social de una sociedad.</span>
                </span>, 
                <span class="tooltip">Imperio
                    <span class="tooltiptext">Conjunto de territorios y pueblos gobernados por un único estado o monarca.</span>
                </span>.
            </p>
        </section>

        <section>
            <h2>Geografía</h2>
            <p>
                <span class="tooltip">Continente
                    <span class="tooltiptext">Gran masa de tierra rodeada de océanos, como Asia o África.</span>
                </span>, 
                <span class="tooltip">Clima
                    <span class="tooltiptext">Condiciones atmosféricas promedio en una región durante un periodo largo.</span>
                </span>, 
                <span class="tooltip">Erosión
                    <span class="tooltiptext">Desgaste de la superficie terrestre por agentes naturales como el agua o el viento.</span>
                </span>.
            </p>
        </section>

        <section>
            <h2>Artes</h2>
            <p>
                <span class="tooltip">Pintura
                    <span class="tooltiptext">Arte de aplicar pigmento sobre una superficie para crear imágenes.</span>
                </span>, 
                <span class="tooltip">Escultura
                    <span class="tooltiptext">Arte de crear figuras tridimensionales, típicamente en materiales como piedra o metal.</span>
                </span>, 
                <span class="tooltip">Música
                    <span class="tooltiptext">Arte de combinar sonidos y silencios de una manera armónica.</span>
                </span>.
            </p>
        </section>
    </div>
    <?php include __DIR__ . '/Includes/footer.php'; ?>
</body>
</html>
