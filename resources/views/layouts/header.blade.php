<!-- NAVBAR RESPONSIVA PÁGINA DOCTOR -->
<nav class="navbar navbar-expand-lg navbar-custom navbar-doctor-page">
    <div class="container">
        <!-- LOGO A LA IZQUIERDA -->
        <a class="navbar-brand" href="/">
            <!-- Opción 1: Logo con texto -->
            {{-- <div class="d-flex align-items-center">
                <div class="logo-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 40px; height: 40px;">
                    <i class="fas fa-stethoscope"></i>
                </div>
                <span class="fw-bold fs-4 text-light">Dr<span class="text-dark">{{ config('app.name') }}</span></span>
            </div> --}}
            
            <!-- Opción 2: Solo imagen del logo -->
            <div class="d-flex align-items-center">
                {{-- "[Dr.'s data]" Logo del Dr. --}}
                <x-picture
                    src="/imgs/dr/img-logo-ruben-rodriguez-ginecologo-tijuana"
                    class="img-fluid"
                    width="270"
                    height="50"
                    alt="Logo del Dr."
                />
            </div>
        </a>
        
        <!-- BOTÓN TOGGLER (móvil) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse-doctor-page" aria-controls="navbar-collapse-doctor-page" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- MENÚ A LA DERECHA -->
        <div id="navbar-collapse-doctor-page" class="collapse navbar-collapse">
            <!-- ms-auto empuja el menú a la derecha -->
            <ul class="navbar-nav ms-auto" style="margin-top:0px !important;">
                <li class="nav-item margin-sec-menu active">
                    <a class="nav-link" href="#section_doctor">DOCTOR</a>
                </li>
                <li class="nav-item margin-sec-menu">
                    <a class="nav-link" href="#section_services">SERVICIOS</a>
                </li>
                <li class="nav-item margin-sec-menu">
                    <a class="nav-link" href="#section_reviews">REVIEWS</a>
                </li>
                <li class="nav-item margin-sec-menu">
                    <a class="nav-link" href="#section_contact">CONTACTO</a>
                </li>
                
                <!-- ICONOS SOCIALES -->
                <li class="nav-item navbar-social-icons d-flex align-items-center navbar-social-icons">
                    <a href="https://www.facebook.com/DrRubenRodriguezCastroGinecologo" title="Facebook" target="_blank" rel="nofollow noreferrer noopener">
                        <x-picture
                            src="/imgs/icons/fb-dental-tourism-footer"
                            width="36"
                            height="36"
                            alt="Facebook"
                        />
                    </a>
                    <a href="https://www.instagram.com/drrubenrodriguez.ginecologo" title="Instagram" target="_blank" rel="nofollow noreferrer noopener">
                        <x-picture
                            src="/imgs/icons/instagram"
                            width="36"
                            height="36"
                            alt="Instagram"
                        />
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=5216641743027" title="WhatsApp" target="_blank" rel="nofollow noreferrer noopener">
                        <x-picture
                            src="/imgs/icons/icon-tarjeta-digital-whatsapp"
                            width="36"
                            height="36"
                            alt="WhatsApp"
                        />
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>