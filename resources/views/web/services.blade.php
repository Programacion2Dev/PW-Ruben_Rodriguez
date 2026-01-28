<!-- SECCIÓN SERVICIOS -->
<section id="section_services">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center subtitle-page">SERVICIOS</h2>
                {{-- <p class="text-center text-gral" style="margin-bottom: 30px;">La clave está en crecer y mantener tu presencia en línea. Concentra toda tu información profesional en una sola página web, optimizada para celulares.</p> --}}
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-none d-md-block">
                <div id="servicesCarousel" class="services-carousel">
                    <div class="carousel-item-custom active">
                        <x-picture
                            src="/imgs/dr/img-servicios-1-ruben-rodriguez-ginecologo-tijuana"
                            class="img-fluid service-img"
                            width="300"
                            height="160"
                            alt="Servicio 1"
                            loading="lazy"
                        />
                        <x-picture
                            src="/imgs/dr/img-servicios-2-ruben-rodriguez-ginecologo-tijuana"
                            class="img-fluid service-img"
                            width="300"
                            height="160"
                            alt="Servicio 2"
                            loading="lazy"
                        />
                        <x-picture
                            src="/imgs/dr/img-servicios-3-ruben-rodriguez-ginecologo-tijuana"
                            class="img-fluid service-img"
                            width="300"
                            height="160"
                            alt="Servicio 3"
                            loading="lazy"
                        />
                    </div>
                    <div class="carousel-item-custom">
                        <x-picture
                            src="/imgs/dr/img-servicios-4-ruben-rodriguez-ginecologo-tijuana"
                            class="img-fluid service-img"
                            width="300"
                            height="160"
                            alt="Servicio 4"
                            loading="lazy"
                        />
                        <x-picture
                            src="/imgs/dr/img-servicios-5-ruben-rodriguez-ginecologo-tijuana"
                            class="img-fluid service-img"
                            width="300"
                            height="160"
                            alt="Servicio 5"
                            loading="lazy"
                        />
                        <x-picture
                            src="/imgs/dr/img-servicios-6-ruben-rodriguez-ginecologo-tijuana"
                            class="img-fluid service-img"
                            width="300"
                            height="160"
                            alt="Servicio 6"
                            loading="lazy"
                        />
                    </div>

                    <button class="carousel-control-custom carousel-prev-custom"
                            onclick="prevServiceSlide()">
                        <x-picture
                            src="/imgs/flechas-slide-imagenes-01"
                            width="35"
                            height="60"
                            loading="lazy"
                            alt="Flechas carrusel anterior"
                            style="height: 60px; width: auto;"
                        />
                    </button>
                    <button class="carousel-control-custom carousel-next-custom"
                            onclick="nextServiceSlide()">
                        <x-picture
                            src="/imgs/flechas-slide-imagenes-02"
                            width="35"
                            height="60"
                            loading="lazy"
                            alt="Flechas carrusel siguiente"
                            style="height: 60px; width: auto;"
                        />
                    </button>
                </div>
                <div id="carouselDots" class="carousel-dots" data-carousel="servicesCarousel">
                    <span class="dot active" onclick="goToServiceSlide(0)"></span>
                    <span class="dot" onclick="goToServiceSlide(1)"></span>
                </div>
            </div>
            {{-- Para moviles --}}
            <div class="col-12 d-block d-md-none">
                <div id="servicesCarouselXs" class="services-carousel">
                    <div class="carousel-item-custom active">
                        <x-picture
                            src="/imgs/dr/img-servicios-1-ruben-rodriguez-ginecologo-tijuana"
                            class="img-fluid"
                            width="300"
                            height="160"
                            alt="Servicio 1"
                            loading="lazy"
                        />
                    </div>
                    <div class="carousel-item-custom">
                        <x-picture
                            src="/imgs/dr/img-servicios-2-ruben-rodriguez-ginecologo-tijuana"
                            class="img-fluid"
                            width="300"
                            height="160"
                            alt="Servicio 2"
                            loading="lazy"
                        />
                    </div>
                    <div class="carousel-item-custom">
                        <x-picture
                            src="/imgs/dr/img-servicios-3-ruben-rodriguez-ginecologo-tijuana"
                            class="img-fluid"
                            width="300"
                            height="160"
                            alt="Servicio 3"
                            loading="lazy"
                        />
                    </div>
                    <div class="carousel-item-custom">
                        <x-picture
                            src="/imgs/dr/img-servicios-4-ruben-rodriguez-ginecologo-tijuana"
                            class="img-fluid"
                            width="300"
                            height="160"
                            alt="Servicio 4"
                            loading="lazy"
                        />
                    </div>
                    <div class="carousel-item-custom">
                        <x-picture
                            src="/imgs/dr/img-servicios-5-ruben-rodriguez-ginecologo-tijuana"
                            class="img-fluid"
                            width="300"
                            height="160"
                            alt="Servicio 5"
                            loading="lazy"
                        />
                    </div>
                    <div class="carousel-item-custom">
                        <x-picture
                            src="/imgs/dr/img-servicios-6-ruben-rodriguez-ginecologo-tijuana"
                            class="img-fluid"
                            width="300"
                            height="160"
                            alt="Servicio 6"
                            loading="lazy"
                        />
                    </div>

                    <button class="carousel-control-custom carousel-prev-custom" onclick="prevServiceXsSlide()">
                        <x-picture
                            src="/imgs/flechas-slide-imagenes-01"
                            width="35"
                            height="60"
                            loading="lazy"
                            alt="Flechas carrusel anterior"
                            style="height: 60px; width: auto;"
                        />
                    </button>
                    <button class="carousel-control-custom carousel-next-custom" onclick="nextServiceXsSlide()">
                        <x-picture
                            src="/imgs/flechas-slide-imagenes-02"
                            width="35"
                            height="60"
                            loading="lazy"
                            alt="Flechas carrusel siguiente"
                            style="height: 60px; width: auto;"
                        />
                    </button>
                </div>
                {{-- <div id="carouselDotsXs" class="carousel-dots" data-carousel="servicesCarousel">
                    <span class="dot active" onclick="goToServiceXsSlide(0)"></span>
                    <span class="dot" onclick="goToServiceXsSlide(1)"></span>
                    <span class="dot" onclick="goToServiceXsSlide(2)"></span>
                    <span class="dot" onclick="goToServiceXsSlide(3)"></span>
                    <span class="dot" onclick="goToServiceXsSlide(4)"></span>
                    <span class="dot" onclick="goToServiceXsSlide(5)"></span>
                </div> --}}
            </div>
        </div>

        <!-- LISTA DE SERVICIOS -->
        <div class="row text-gral">
            <div class="col-12 col-md-6">
                <ul style="margin-bottom: 0;">
                    <li>Control Prenatal de embarazo de bajo y alto riesgo</li>
                    <li>Atención de parto vía vaginal y cesárea.</li>
                    <li>Métodos Anticonceptivos.</li>
                    <li>Climaterio y Menopausia.</li>
                    <li>Endometriosis.</li>
                    <li>Hemorragia o sangrado vaginal anormal.</li>
                    <li>Leiomiomatosis / miomatosis uterina.</li>
                    <li>Infertilidad</li>
                    <li>Incontinencia urinaria femenina</li>
                    <li>Quiste o Tumores de ovario.</li>
                </ul>
            </div>
            <div class="col-12 col-md-6">
                <ul>
                    <li>Terapia de reemplazo hormonal.</li>
                    <li>Papanicolaou.</li>
                    <li>Colposcopia.</li>
                    <li>Cirugías Laparoscópicas.</li>
                    <li>Rejuvenecimiento vaginal.</li>
                    <li>Labioplastia.</li>
                    <li>Vaginoplastia.</li>
                    <li>Laser CO2</li>
                    <li>Reversión y recanalización tubárica.</li>
                    <li>Plasma rico en plaquetas.</li>
                </ul>
            </div>
        </div>
    </div>
</section>