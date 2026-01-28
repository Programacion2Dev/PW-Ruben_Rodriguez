var CACHE_NAME = 'doctor-cache-v1';
var urlsToCache = [
    'sw.js?v3',
    'manifest.json?v3',
];

// console.log('Cargando Servicio Worker');

self.addEventListener('install', function(event) { // console.log('Instalando Servicio Worker');
    event.waitUntil(
        caches.open(CACHE_NAME)
            .then(function(cache) { // console.log('Abrio cache');
                var x = cache.addAll(urlsToCache);
                // console.log('Cache agregada');
                return x;
            })
    ); // console.log('Servicio Worker instalado');
});

self.addEventListener('fetch',function(event){
    event.respondWith(
        caches.match(event.request)
            .then(function(response){ //Hit de cache - Retorno de respuesta
                    if(response){ return response; }
                    return fetch(event.request);
                }
            )
    );
});