<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizador PDF</title>
    <style>
        body {
            font-family: Serif, sans-serif;
            background-color: #9c8d8c;  /* Gris claro de fondo */
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center; /* Centrado horizontal */
            height: 100vh;
            flex-direction: column;
            font-size: 25px;
            color: white; /* Cambiar color de texto a blanco */
        }
        
        .vertical-line {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%); /* Asegura que la línea esté centrada */
            width: 1200px; /* Línea extremadamente ancha (puedes ajustar aún más) */
            background-color: black; /* Color de la línea */
            z-index: -1; /* Coloca la línea detrás del contenido */
        }

        .content {
            text-align: center;
            position: relative;
            z-index: 1; /* Asegura que el contenido esté encima de la línea */
        }

        h1 {
            margin: 0;
            padding: 10px;
        }

        embed {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="vertical-line"></div> <!-- Línea vertical extremadamente ancha -->
    <div class="content">
        <h1>Visualizador PDF <br> ETAPA 2 Base de datos</h1>
        <embed src="PhpMyAdminEvidencia_compressed.pdf" width="900px" height="600px" type="application/pdf">
    </div>
</body>
</html>
