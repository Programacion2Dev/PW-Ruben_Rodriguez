@extends('layouts.app')@section('content')
    <!-- SECCIÓN DOCTOR -->
    <section id="section_doctor">
        <div class="container margin-between">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-1">
                    <h1 class="title-page">DR. RUBEN RODRIGUEZ</h1>
                    <p class="title-page2 mb-3">Ginecología y Obstetricia</p>
                    <div class="text-gral">
                        <p>
                            Soy médico especialista con más de 10 años de experiencia en el cuidado integral de la salud femenina.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 form-group-custom text-center">
                    <x-picture
                        src="/imgs/dr/img-doctor-ruben-rodriguez-ginecologo-tijuana"
                        class="img-fluid float-md-end center-on-mobile"
                        alt="Foto del Doctor"
                        width="290"
                        height="290"
                        fetchpriority="high"
                        {{-- loading="lazy" --}}
                    />
                </div>
                <div class="col-12 col-md-10 offset-md-1 text-gral">
                    <p>
                        Brindo atención profesional y personalizada, con opciones avanzadas orientadas para el bienestar de la mujer en cada etapa de su vida.
                    </p>
                </div>
            </div>
        </div>

        <div style="background-color: var(--light-gray);">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1 margin-between text-gral">
                        <span class="subtitulo mb-3" style="color: #000;">Agenda con el ginecólogo</span>
                        <a href="https://api.whatsapp.com/send?phone=5216641743027" target="_blank" class="btn btn-custom text-center mb-3 text-gral margin-between-btns center-on-mobile">
                            Envíame un WhatsApp
                        </a>
                        <a href="#section_contact" class="btn btn-outline-custom text-center mb-3 text-gral center-on-mobile">Agenda tu cita</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <!-- CERTIFICACIONES -->
            <div class="row" style="margin-top: 40px;">
                <div class="col-12 col-md-5">
                    <!-- SLIDER DE CERTIFICACIONES - 2 EN 2 -->
                    <div id="credentialsCarousel" class="credentials-carousel">
                        <div class="credentials-carousel-wrapper">
                            <div class="credentials-carousel-slide active" data-slide="0">
                                <div class="credential-item">
                                    <x-picture
                                        src="/imgs/dr/img-certificaciones-1-ruben-rodriguez-ginecologo-tijuana"
                                        width="163"
                                        height="217"
                                        alt="Certificado 1"
                                        loading="lazy"
                                    />
                                </div>
                                <div class="credential-item">
                                    <x-picture
                                        src="/imgs/dr/img-certificaciones-2-ruben-rodriguez-ginecologo-tijuana"
                                        width="163"
                                        height="123"
                                        alt="Certificado 2"
                                        loading="lazy"
                                    />
                                </div>
                            </div>
                            <div class="credentials-carousel-slide" data-slide="1">
                                <div class="credential-item">
                                    <x-picture
                                        src="/imgs/dr/img-certificaciones-3-ruben-rodriguez-ginecologo-tijuana"
                                        width="163"
                                        height="123"
                                        alt="Certificado 3"
                                        loading="lazy"
                                    />
                                </div>
                                <div class="credential-item">
                                    <x-picture
                                        src="/imgs/dr/img-certificaciones-4-ruben-rodriguez-ginecologo-tijuana"
                                        width="163"
                                        height="217"
                                        alt="Certificado 4"
                                        loading="lazy"
                                    />
                                </div>
                            </div>
                            <div class="credentials-carousel-slide" data-slide="2">
                                <div class="credential-item">
                                    <x-picture
                                        src="/imgs/dr/img-certificaciones-5-ruben-rodriguez-ginecologo-tijuana"
                                        width="163"
                                        height="217"
                                        alt="Certificado 5"
                                        loading="lazy"
                                    />
                                </div>
                                <div class="credential-item">
                                    <x-picture
                                        src="/imgs/dr/img-certificaciones-6-ruben-rodriguez-ginecologo-tijuana"
                                        width="163"
                                        height="217"
                                        alt="Certificado 6"
                                        loading="lazy"
                                    />
                                </div>
                            </div>
                        </div>
                        {{-- <button class="carousel-control-custom carousel-prev-custom" onclick="prevCredentialSlide()">
                            <img src="/imgs/flechas-slide-imagenes-01.webp" loading="lazy" alt="Anterior" style="height: 20px; width: auto;">
                        </button>
                        <button class="carousel-control-custom carousel-next-custom" onclick="nextCredentialSlide()">
                            <img src="/imgs/flechas-slide-imagenes-02.webp" loading="lazy" alt="Siguiente" style="height: 20px; width: auto;">
                        </button> --}}
                    </div>
                    <!-- PUNTOS DE NAVEGACIÓN -->
                    <div class="carousel-dots" id="credentialsDots" style="margin-top: 15px;">
                        <span class="dot active" onclick="goToCredentialSlide(0)"></span>
                        <span class="dot" onclick="goToCredentialSlide(1)"></span>
                        <span class="dot" onclick="goToCredentialSlide(2)"></span>
                    </div>
                </div>

                <div class="col-12 col-md-7 text-gral">
                    <h2 class="subtitulo" style="color:#000; font-weight:normal;">Estudios y certificaciones del ginecólogo</h2>
                    <ul class="text-gral">
                        <li>Cedula profesional: 8964938</li>
                        <li>Cédula especialidad: 11624632</li>
                        <li>Certificado por el consejo mexicano de ginecología y obstetricia. </li>
                        <li>Licenciatura de Médico General egresado de la Universidad Autónoma de Sinaloa.</li>
                        <li>Especialidad en Ginecología y Obstetricia egresado de Centro Médico Nacional del Noroeste IMSS Cd. Obregón, Son.</li>
                        <li>Diplomado superior en ginecología estética, regenerativa y funcional avalado por la Universidad Nororiental Privada Gran Mariscal de Ayacucho, Venezuela.</li>
                        <li>Diplomado en colposcopia y patología vulvovaginal avalado por la universidad mesoamericana, San Cristóbal De las Casas, Chiapas.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    @include("web.services")
    @include("web.reviews")
    @include("web.contact")
    @include("web.contact-form")
@endsection

{{-- @section('scripts')
    <script>
        // JavaScript específico para la landing
        document.addEventListener('DOMContentLoaded', function() {
            // console.log('Landing page cargada');
        });
    </script>
@endsection --}}