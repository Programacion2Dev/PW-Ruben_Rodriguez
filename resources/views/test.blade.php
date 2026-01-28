<!DOCTYPE html><html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Test Bootstrap 5.3</title>
        @vite(['resources/css/app.scss'])
    </head>
    <body>
        <div class="container py-5">
            <h1 class="text-primary">✅ Bootstrap 5.3 Instalado Correctamente</h1>
            
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card medical-shadow">
                        <div class="card-body">
                            <h5 class="card-title">Verificación de Componentes</h5>
                            
                            <!-- Botones de Bootstrap -->
                            <button class="btn btn-primary me-2">Primary</button>
                            <button class="btn btn-success me-2">Success</button>
                            <button class="btn btn-danger">Danger</button>
                            
                            <!-- Alertas -->
                            <div class="alert alert-info mt-3">
                                Bootstrap 5.3 funcionando con Vite
                            </div>
                            
                            <!-- Grid System -->
                            <div class="row mt-3">
                                <div class="col-4 bg-light p-3 border">Col 1</div>
                                <div class="col-4 bg-light p-3 border">Col 2</div>
                                <div class="col-4 bg-light p-3 border">Col 3</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Información de Instalación</h5>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <strong>Bootstrap:</strong> 
                                    <span id="bootstrap-version">Cargando...</span>
                                </li>
                                <li class="list-group-item">
                                    <strong>Modo:</strong> 
                                    <span class="badge bg-success">ES6 Modules</span>
                                </li>
                                <li class="list-group-item">
                                    <strong>Bundler:</strong> Vite
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @vite(['resources/js/app.js'])
        
        <script>
            // Verificar que Bootstrap está cargado
            document.addEventListener('DOMContentLoaded', function() {
                if (window.bootstrap) {
                    document.getElementById('bootstrap-version').textContent = '5.3.0 (Cargado)';
                }
            });
        </script>
    </body>
</html>