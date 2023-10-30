<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d4d5949181.js" crossorigin="anonymous"></script>
    @vite(['resources/css/home.css', 'resources/js/app.js'])
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li>OFTALMOLOGIA</li>
                <li>OTORRINO</li>
                <li>TELESSAÚDE</li>
                <LI>UNIDADES</LI>
                <LI>QUEM SOMOS</LI>
                <LI>CONTATO</LI>
            </ul>
        </nav>
    </header>

    <section id="home">
        <div class="container-home">
            <div class="image-home">
                <img src="{{ Vite::asset('resources/images/Family-cuate.svg') }}" alt="">
            </div>
            <div class="text-home">
                <h1>Por cada olhar, <br> uma experiência única</h1>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container-services">
            <div class="boxs">
                <div class="eyes">
                    <i class="fa-solid fa-eye"></i>
                    <h1>Oftalmologia</h1>
                    <p>saiba mais</p>
                </div>

                <div class="otorrino">
                    <i class="fa-solid fa-ear-listen"></i>
                    <h1>Otorrino</h1>
                    <p>saiba mais</p>
                </div>
            </div>
        </div>
    </section>

    <section id="unidades">

        <div class="loc-unidade">
            <div class="plaza">
                <div class="icone-loc">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="text-plaza">
                    <h2>Unidade Plaza Casa Forte</h2>
                </div>
            </div>

            <div class="ilha">
                <div class="icone-loc">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="text-ilha">
                    <h2>Unidade Ilha do leite</h2>
                </div>
            </div>

            <div class="container-unidades">
                <div class="text-unidades">
                    <h1>Unidades</h1>
                    <p>Há sempre um HOPE perto de você. Confira todas as nossas unidades:</p>
                    <div class="box-unidade">
                        <div class="img-unidade">
                            <img src="{{ Vite::asset('resources/images/Fachada-Guararapes-Site.webp') }}"
                                alt="">
                        </div>
                        <div class="unidades">
                            <div class="text-unidade-shop">
                                <h1> Unidade Shopping <br> Guararapes </h1>
                                <p> Av. Barreto de Menezes, 800 Piedade, jaboatão dos guararapes </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="riomar">
                <div class="icone-loc">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="text-rio">
                    <h2>Unidade RioMar</h2>
                </div>
            </div>


            <div class="patteo-olinda">
                <div class="icone-loc">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="patteo">
                    <h2>Unidade Shopping Patto Olinda</h2>
                </div>
            </div>
        </div>

    </section>
</body>

</html>
