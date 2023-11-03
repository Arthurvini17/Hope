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
        <nav class="nav-1">
            <ul>
                <li>OFTALMOLOGIA</li>
                <li>OTORRINO</li>
                <li>TELESSAÚDE</li>
                <LI>UNIDADES</LI>
                <LI>QUEM SOMOS</LI>
                <LI>CONTATO</LI>
            </ul>
        </nav>

        <nav class="nav-2">
            <ul>
                <li>
                    <div class="boxs-header">
                        <div class="marcar-exame">
                            <p>RESULTADO DE EXAMES</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="urgencia">
                        <p>URGÊNCIA 24 HORAS</p>
                    </div>
                </li>


                <li>
                    <div class="atendimento">
                        <p>ATENDIMENTO AO CLIENTE </p>
                    </div>
                </li>
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

    <section id="convenio">
        <div class="container-conv">
            <div class="text-prin">
                <h1>Convênios</h1>
            </div>
            <div class="sub-text">
                <p>Contamos com uma ampla rede conveniada para atender voce e sua familia</p>
            </div>
            <div class="images">
                <div class="geap">
                    <img src="{{ Vite::asset('resources/images/geap-saude-logo-E9F617CC68-seeklogo.com-1.webp') }}"
                        alt="">
                </div>
                <div class="you">
                    <img src="{{ Vite::asset('resources/images/you.webp') }}" alt="">
                </div>
                <div class="saude">
                    <img src="{{ Vite::asset('resources/images/saude') }}" alt="">
                </div>

                <div class="marinha">
                    <img src="{{ Vite::asset('resources/images/marinha.webp') }}" alt="">
                </div>

                <div class="brasil">
                    <img src="{{ Vite::asset('resources/images/aeronautica.webp') }}" alt="">
                </div>

                <div class="life">
                    <img src="{{ Vite::asset('resources/images/life.webp') }}" alt="">
                </div>

                <div class="alianz">
                    <img src="{{ Vite::asset('resources/images/alianz.webp') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="client">
        <div class="container-cliente">
            <div class="text">
                <h1>Atendimento ao Cliente</h1>
            </div>
            <div class="boxs">
                <div class="talk">
                    <div class="icone">
                        <i class="fa-solid fa-microphone-lines"></i>
                    </div>
                    <div class="text-talk">
                        <h3>Fale com a ouvidoria</h3>
                        <p>Clique aqui</p>
                    </div>
                </div>

                <div class="marcar-exame">
                    <div class="icone">
                        <i class="fa-solid fa-phone"></i>
                    </div>

                    <div class="text">
                        <h3>Marcação de Consultas e Exames</h3>
                        <p>9 9999-9999</p>
                    </div>
                </div>

                <div class="resultados">
                    <div class="icone">
                        <i class="fa-solid fa-file-circle-check"></i>
                    </div>

                    <div class="text">
                        <h3>Resultados de Exames</h3>
                        <p>Clique aqui</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="saiba-mais">
        <div class="container-mais">
            <div class="text-prin">
                <h1>Saiba Mais</h1>
            </div>
            <div class="text-sub">
                <p>Aqui você encontra informações sobre quem somos, matérias e dicas de saúde, além de orientações sobre
                    o Alô HOPE</p>
            </div>

            <div class="boxs">
                <div class="quem-somos">
                    <div class="box-border">
                        <div class="icone">
                            <i class="fa-solid fa-people-group"></i>
                        </div>
                    </div>
                    <div class="text">
                        <h3>Quem Somos</h3>
                    </div>
                </div>




                <div class="blog">
                    <div class="box-border">
                        <div class="icone">
                            <i class="fa-solid fa-newspaper"></i>
                        </div>
                    </div>
                    <div class="text">
                        <h3>Blog</h3>
                    </div>
                </div>

                <div class="conteudo">
                    <div class="box-border">
                        <div class="icone">
                            <i class="fa-solid fa-book"></i>
                        </div>
                    </div>
                    <div class="text">
                        <h3>Conteúdos</h3>
                    </div>
                </div>

                <div class="telesaude">
                    <div class="box-border">
                        <div class="icone">
                            <i class="fa-solid fa-notes-medical"></i>
                        </div>
                    </div>
                    <div class="text">
                        <h3>telessaude</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container-footer">
            <div class="boxs-itens">
                <div class="box-left">
                    <ul>
                        <li>Oftalmologia</li>
                        <li>Otorrino</li>
                        <li>Unidades</li>
                        <li>Convenios</li>
                        <li>Atendimento ao cliente</li>
                    </ul>
                </div>

                <div class="box-center">
                    <ul>
                        <li>Quem somos</li>
                        <li>Blog</li>
                        <li>Conteudos</li>
                        <li>Privacidade</li>
                        <li>Telessaude</li>
                        <li>Contato</li>
                    </ul>
                </div>

                <div class="box-boxs">
                    <ul>
                        <li>
                            <div class="resultado">
                                <p>Resultado de exames</p>
                            </div>
                        </li>

                        <li>
                            <div class="fale">
                                <p>Fale com a ouvidoria</p>
                            </div>
                        </li>

                        <li>
                            <div class="canal">
                                <p>Canal de Denuncia</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
