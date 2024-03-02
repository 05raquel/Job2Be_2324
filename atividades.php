<?php

session_start();

if(isset($_SESSION["user_id"])){
    $mysqli = require __DIR__ . "/assets/database/database.php";
    $sql = "SELECT * FROM user WHERE id={$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Job2Be - Semana da Biomédica</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
        <link rel="stylesheet" href="assets/styles/style_geral.css">
        <meta charset="UTF-8">
        <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
        <style>
            .atividade{
                margin-top: 15px;
                margin-bottom: 15px;
            }

            .data-local{
                font-weight: 600;
                font-size: 18px;
            }
            .data-local2{
                font-weight: 600;
                font-size: 18px;
                padding-bottom: 10px;
            }
            .orador{
                display: flex;
                /*flex-wrap: wrap;*/
                gap: 2rem;
                margin: 1rem;
                align-items: center;
            }
            .orador img{
                border-radius: 30px;
                width: 170px;
            }            
            .orador.post img{
                border-radius: 30px;
                width: 200px;
            }         
            .orador.post.fe{
                display: flex;
                align-items: center;
                justify-content: center;
            }
        </style>
    </head>
    <body>
        <?php include("includes/new_menu.php");?>
        
        <div class="fundo-branco">
            <div id="sessoes">
                <h1 class="titulo-roxo"  style="text-align:center">SESSÕES DE ABERTURA E ENCERRAMENTO</h1>
                
                <div class="atividade" id="abertura">
                    
                    <div class="orador post">
                        
                        <img src="assets/img/posts/abertura.png"> 
                        <div class="descricao ">
                            <h2 class="titulo-roxo">Sessão de Abertura</h2>
                            <div class = "texto-roxo">
                                <p class="data-local">2ª feira, dia 4 das 09:00 às 09:30</p>
                                <p>Centro de Congressos</p>
                                <p>Para começar esta semana em grande, na sessão de abertura da JOB2BE contamos com a presença do Prof. João Sanches, Coordenador do Mestrado em Engenharia Biomédica, o Prof. João Conde, Presidente do Departamento de Bioengenharia do IST, e ainda Renata Fernandes, Presidente da ANEEB. 🧬 </p> 
                                <p> Contamos contigo no dia 4 de março, às 9h, no Centro de Congressos! Fica atento para saberes mais novidades!</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="atividade" id="encerramento">
                    <div class="orador post">
                        <div class="descricao ">
                            <h2 class="titulo-roxo">Sessão de Encerramento</h2>
                            <div class = "texto-roxo">
                                <p class="data-local">4ª feira, dia 6 das 15:30 às 16:00</p>
                                <p>Centro de Congressos</p>
                                <p>Para encerrar esta edição da JOB2BE contamos com a presença da Prof. Cláudia Lobato, Coordenadora da 
                                    Licenciatura em Engenharia Biomédica no IST, Gonçalo Ferreira, Presidente do Núcleo de Estudantes de 
                                    Engenharia Biomédica do IST, e Daniela Ferreira, que faz parte da Presidência desta edição da JOB2BE. 🦾</p>
                                <p>Contamos contigo no dia 6 de março, às 15.30h, no Centro de Congressos!</p>
                            </div>
                        </div>
                        <img src="assets/img/posts/encerramento.png"> 
                    </div>
                </div>

            </div>

            <div id="palestra">
                <h1 class="titulo-roxo"  style="text-align:center">PALESTRAS</h1>
                <div class="atividade" id="p-nova_era_saude">
                    <div class="orador post">
                        <img src="assets/img/posts/nova-era.png"> 
                        <div class="descricao ">
                            <h2 class="titulo-roxo">A Nova Era na Saúde | Wearables & Telemonitorização</h2>
                            <div class = "texto-roxo">
                                <p class="data-local">2ª feira, dia 4 das 10:00 às 11:30</p>
                                <p>Local:</p>
                                <p>Sabias que a tecnologia pode ajudar-te a cuidar melhor da tua saúde, mesmo à distância? Na palestra A Nova Era na Saúde: Wearables e Telemonitorização, vais descobrir como os wearables - dispositivos que usas no corpo, como relógios ou pulseiras inteligentes - e a telemonitorização - o acompanhamento remoto dos teus sinais vitais - podem fazer a diferença na prevenção e no tratamento de várias doenças. Nesta palestra poderás ficar a conhecer mais sobre wearables e invisibles, nomeadamente o LAMPSY: um aparelho de deteção automática por vídeo de crises epilépticas, que preserva a privacidade dos pacientes por raíz. Junta-te a nós nesta palestra imperdível! 🦾💻</p>
                                <p style="font-weight: bold; padding-top: 10px;">Oradores: Diogo Ramanho, Vicente Garção e Mariana Saraiva </p>
                                <p style="font-weight: bold; padding-top: 10px;">Moderador: Hugo Plácido Silva </p>
                            </div>
                        </div>
                    </div>
                        
        
                    <div class="orador dto">
                        
                        <div class="descricao">
                            <h3 class="titulo-roxo">Diogo Ramalho</h3>
                            <div class = "texto-roxo">
                                <p style="font-weight: bold;padding-top: 5px; padding-bottom: 5px;"></p>
                                <p>Diogo Ramalho nasceu em Lisboa, Portugal, em 1998. Obteve os graus de licenciado e mestre em Engenharia Informática pelo Instituto Superior Técnico (IST-UL), Lisboa, em 2019 e 2021. Os seus interesses de investigação incluem engenharia de sistemas, ciência de dados e telemedicina. Atualmente é Data Scientist na empresa de telemedicina knokcare.</p>
                                <p></p>
                            </div>
                        </div>
                        <img src="assets/img/oradores/Diogo-Ramalho.png"> 
                    </div>
                    <div class="orador esq">
                        <img src="assets/img/oradores/Vicente-Garcao.png">
                        <div class="descricao ">
                            <h3 class="titulo-roxo"> Vicente Garção</h3>
                            <div class = "texto-roxo">
                                <p style="font-weight: bold; padding-top: 5px;padding-bottom: 5px;"></p>
                                <p>O Vicente acabou o mestrado em Engenharia Biomédica em dezembro de 2021. Fez a sua tese de mestrado no Instituto de Telecomunicações, onde iniciou o desenvolvimento de um aparelho de deteção automática por vídeo de crises epilépticas chamado LAMPSY, que preserva a privacidade dos pacientes por raíz. Tendo gostado muito do projeto, continuou a desenvolver o LAMPSY no âmbito de um projeto de doutoramento, que está agora no seu 3º ano. Neste momento, o Vicente está a começar o processo de criar uma start-up para levar o LAMPSY aos indivíduos com epilepsia.</p>
                                <p></p>
                            </div>
                        </div>
                         
                    </div>
                    <div class="orador dto">
                        
                        <div class="descricao ">
                            <h3 class="titulo-roxo">Mariana Saraiva</h3>
                            <div class = "texto-roxo">
                            <p style="font-weight: bold;padding-top: 5px; padding-bottom: 5px;">Membro do Grupo de Trabalho permanente da CPLP em telemedicina e Telessaúde em representação da SPMS.
Gestora do projecto ibérico RISCAR de Saúde infaltil e juvenil em representação da SPMS. Co-Investigadora no projeto DERM.AI com o Instituto Fraunhofer Portugal
Co-Orientadora de diversas Teses de Mestrado na área da telessaúde com a UBI-Universidade da Beira Interior e ENSP-Escola Nacional de Saúde Pública da Universidade Nova de Lisboa.
Formadora Certificada na Academia SPMS e na Academia APAH
Autora e Co-Coordenadora de capítulo: «Telessaúde em Portugal» do Livro «Transformação Digital em Saúde» (2021)	</p>
                            <p>Licenciatura em Organização e Gestão de Empresas pela Universidade de Coimbra. 
Mestrado em Gestão de Unidades de Saúde com Tese no campo do Turismo de Saúde: «Turismo Médico - Conceção de um Modelo de Negócio, pela Tela de Canvas», na Universidade da Beira Interior. 
Pós-Graduação em Comunicação e Medias Sociais na Universidade Católica de Lisboa. 
Pós-Graduação em Direito da Medicina pela Universidade de Coimbra.
</p>
                            <p>Desde outubro de 2021, exerce funções de Manager na CUF Digital na área de desenvolvimento de negócio no desenho, teste e produtização de diversos serviços digitais em saúde, nomeadamente Teleobservação, Telemonitorização, Telereabilitação e Programas de Saúde Mental para B2B e B2C.
Exerceu funções na SPMS – Serviços Partilhados do Ministério da Saúde, na Direção do Centro Nacional de TeleSaúde, como Coordenadora da Unidade de Promoção e Desenvolvimento da Telessaúde e na Unidade de Acompanhamento de Projetos de Telessaúde no SNS. Participou no Grupo do Ministério da Saúde de suporte às operações da Covid-19 e na resposta de retoma da actividade no SNS.

Participou como responsável em diversos projetos, nomeadamente a Modelo de Governance do Centro Nacional de Telessaúde, Plano Estratégico Nacional da Telessaúde 2019-2022, Estratégia Digital do Portal SNS24, Modelo de Governance de conteúdos digitais do Portal SNS24, Living Lab, Modelo de Custo-Efetividade da Telessaúde, Modelo de Qualidade de Serviços de telessaúde, Custeio de serviços de teleconsulta e telemonitorização no SNS, Plataforma de Teleconsultas do SNS – RSE Live, Balcão SNS24-Definição do Modelo de Serviço e Implementação.

Participações em: Relatório da OCDE sobre Telessaúde, Revisão de NOC da DGS, Teleconsulta de Enfermagem com a Ordem dos Enfermeiros, Norma ISO TS 13131 com IPQ – Instituto Português de Qualidade.
</p>        </div>
                        </div>
                        <img src="assets/img/oradores/Mariana-Saraiva.png"> 
                    </div>
                    <div class="orador esq">
                        <img src="assets/img/oradores/Hugo-Silva.png"> 
                        <div class="descricao ">
                            <h3 class="titulo-roxo">Hugo Plácido Silva</h3>
                            <div class = "texto-roxo">
                            <p style="font-weight: bold; padding-top: 5px;padding-bottom: 5px;"> Investigador Sénior no Instituto de Telecomunicações. Professor Auxiliar Convidado no Departamento de Bioengenharia do Instituto Superior Técnico
Co-fundador e Director de Investigação na PLUX - Wireless Biosignals, S.A.
Membro do Pólo do IST do Laboratório Europeu para a Aprendizagem e Sistemas Inteligentes (LUMLIS/ELLIS)

</p>
                            <p>Inventor, investigador e empreendedor premiado, co-fundador de várias empresas inovadoras de base tecnológica e que desenvolvem actividade nas áreas de dispositivos biomédicos e ciência de dados para saúde. É Doutorado em Engenharia Electrotécnica e de Computadores pelo Instituto Superior Técnico (IST), Universidade de Lisboa (UL), e investigador no IT - Instituto de Telecomunicações (http://www.it.pt/person_detail_p.asp?id=1293) desde 2004. Tanto a nível técnico como científico, tem contribuído e participado ativamente em mais de 50 projetos nacionais e internacionais, financiados por programas como o Horizonte 2020, Portugal 2020, Fundação para a Ciência e Tecnologia (FCT), e várias outras fontes públicas e privadas tais como BBC, Vodafone, ou
Nokia. Tem 8 patentes concedidas e publicou mais de 260 artigos em revistas internacionais com revisão ​por pares, conferências internacionais com arbitragem científica e capítulos de livros.
Os seus interesses principais incluem investigação em instrumentação e aquisição de biossinais, engenharia de sistemas biomédicos, processamento de sinais e aprendizagem automática. O seu trabalho foi distinguido internacionalmente e nacionalmente com vários prémios, incluindo o “IEEE
Entrepreneurship Impact Award”, o “Career Award alumniIPS”, o “Best Industrial and Enabling Technology” no DG-CONNECT Innovation Radar Prize da Comissão Europeia, ou o Prémio de Inovação Jovem Engenheiro da Ordem dos Engenheiros, só para citar alguns.</p>
                            <p></p>
                            </div>
                        </div>
                        
                    </div>
                
                </div>


                <div class="atividade" id="p-eng_tecidos">
                    <div class="orador post">
                        <div class="descricao ">
                            <h2 class="titulo-roxo">R(e)volucionando a engenharia de tecidos | Do cultivo à impressão</h2>
                            <div class = "texto-roxo">
                                <p class="data-local">2ª feira, dia 4 das 13:30 às 15:00</p>
                                <p>Local:</p>
                                <p>Queres saber mais sobre como a engenharia de tecidos está a revolucionar a medicina? </p>
                                <p> Então não percas a palestra (R)evolucionando a engenharia de tecidos: do cultivo à impressão, onde poderás ouvir três especialistas na área. Estes vão falar sobre terapias inovadoras de bioengenharia de tecidos, explicar o uso de biomateriais e bioimpressão 3D para criar plataformas biomiméticas e explorar as aplicações da robótica na medicina, nomeadamente a impressão de tecidos, à reabilitação e à tele-medicina. Prepara-te para ficar impressionado! 🧬</p>
                                <p style="font-weight: bold; padding-top: 5px;padding-bottom: 5px;">Oradores: Rodrigo Val d'Oleiros, Rúben Pereira e Rui Cortesão</p>
                                <p style="font-weight: bold; padding-top: 5px;padding-bottom: 5px;">Moderador: Tiago Fernandes:</p>
                            </div>
                        </div>
                        <img src="assets/img/posts/tecidos.png"> 
                    </div>

                        <div class="orador dto">
                            <img src="assets/img/oradores/Rodrigo-Silva.jpeg"> 
                            <div class="descricao ">
                                <h3 class="titulo-roxo">Rodrigo Val d’Oleiros</h3>
                                <div class = "texto-roxo">
                                <p style="font-weight: bold;padding-top: 5px; padding-bottom: 5px;"></p>
                                <p>Rodrigo Val d'Oleiros e Silva, médico dentista, especialidade em cirurgia oral. Candidato a Médico pela Escola de Medicina da Universidade do Minho. Estudante de Doutoramento no Programa Internacional BioTechHealth no ICBAS, Universidade do Porto. Investigador no Instituto de Investigação e Inovação em Saúde (i3S) em medicina regenerativa e bioengenharia de tecidos. Representante da Investigação e Inovação e Membro do Conselho Diretivo da Aliança Europeia de Universidades para a Saúde Global, pela Universidade do Porto. Pós-Graduação em Empreendedorismo e Tecnologia pela Universidade de Stanford e U.C. Berkeley. MBA pela Porto Business School. CEO & Fundador da Orgavalue, uma startup focada em terapias inovadoras de bioengenharia de tecidos. Prémio Jovem Empreendedor 2022 pela ANJE com representação do Ministro da Cultura e da Presidência de Portugal, e Forbes 30 Under 30 em Saúde.</p>
                                <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="orador esq">
                            <div class="descricao ">
                                <h3 class="titulo-roxo">Rúben Pereira</h3>
                                <div class = "texto-roxo">
                                <p style="font-weight: bold; padding-top: 5px;padding-bottom: 5px;"></p>
                                <p>Rúben Pereira é Professor Auxiliar em Bioengenharia no Instituto de Ciências Biomédicas Abel Salazar (ICBAS, Universidade do Porto) e investigador no Grupo de Biofabricação do i3S - Instituto de Investigação e Inovação em Saúde. É Licenciado em Biomecânica e Mestre em Engenharia da Conceção e Desenvolvimento de Produto pelo Instituto Politécnico de Leiria e Doutor em Ciências Biomédicas pelo ICBAS. A sua principal área de investigação centra-se no desenvolvimento de estratégias integradas de bioengenharia envolvendo biomateriais avançados, tecnologias de bioimpressão 3D e células humanas para criar plataformas biomiméticas para realizar estudos mecanísticos e translacionais em engenharia de tecidos da pele.</p>
                                <p></p>
                                </div>
                            </div>
                            <img src="assets/img/oradores/Ruben-Pereira.png"> 
                        </div>

                        <div class="orador dto">
                            <img src="assets/img/oradores/Rui-Cortesao.jpg"> 
                            <div class="descricao ">
                                <h3 class="titulo-roxo">Rui Cortesão</h3>
                                <div class = "texto-roxo">
                                <p style="font-weight: bold;padding-top: 5px; padding-bottom: 5px;"></p>
                                <p>Rui Cortesão é professor na Universidade de Coimbra e diretor do departamento de engenharia eletrotécnica e de computadores da mesma universidade. Leciona robótica médica e controlo, fazendo investigação nestas áreas.</p>
                                <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="orador esq">
                            <div class="descricao ">
                                <h3 class="titulo-roxo">Tiago Fernandes</h3>
                                <div class = "texto-roxo">
                                <p style="font-weight: bold; padding-top: 5px;padding-bottom: 5px;"></p>
                                <p>O Prof. Tiago Fernandes obteve o doutoramento em Biotecnologia pelo Instituto Superior Técnico (IST) da Universidade de Lisboa em 2009. 
É professor auxiliar no IST e investigador no Instituto de Bioengenharia e Biociências (iBB), Lisboa, Portugal. 
Em 2020 ocupou um cargo temporário como professor convidado visitante no Departamento de Engenharia Biomédica e Wisconsin Institute for Discovery, University of Wisconsin-Madison, EUA. 
O seu trabalho no iBB está focado em fornecer uma plataforma integrada que reúna engenharia e biologia para acelerar o progresso em direção ao controlo do destino e microambiente de células estaminais pluripotentes humanas. 
Em 2008, recebeu o prestigiado Prémio Malcolm Lilly, apresentado pela Sociedade Europeia de Ciência da Engenharia Bioquímica (ESBES).</p>
                                <p></p>
                                </div>
                            </div>
                            <img src="assets/img/oradores/Tiago-Fernandes.jpg"> 
                        </div>
        </div>


                <div class="atividade" id="p-mobilidade">
                    <div class="orador post">
                    <img src="assets/img/posts/mobilidade.png"> 
                        <div class="descricao ">
                            <h2 class="titulo-roxo">Mobilidade Assistida  | Da inovação à acessibilidade</h2>
                            <div class = "texto-roxo">
                                <p class="data-local">3ª feira, dia 5 das 13:30 às 15:00</p>
                                <p>Local:</p>
                                <p>Não percas a palestra sobre mobilidade assistida, onde três oradores vão partilhar as suas experiências e projetos inovadores na área da saúde e da reabilitação. Vais ficar a conhecer uma neuroprótese que usa inteligência artificial para restaurar o movimento dos membros inferiores, algumas aplicações da impressão 3D que melhoram a mobilidade e a inclusão, e o sistema Nuada que ajuda a recuperar a força e a destreza das mãos. Junta-te já a esta conversa inspiradora! 🦾</p>
                                <p style="font-weight: bold; padding-top:10px; ">Oradores: Cláudia Quaresma, Filipe Quinaz e Simão Carvalho</p>
                                <p style="font-weight: bold; padding-top: 10px;">Moderador: Nuno Matela</p>
                            </div>
                        </div>
                        
                    </div>
                        <div class="orador dto">
                            
                            <div class="descricao ">
                                <h3 class="titulo-roxo">Cláudia Quaresma</h3>
                                <div class = "texto-roxo">
                                <p style="font-weight: bold;padding-top: 5px; padding-bottom: 5px;"></p>
                                <p>Claúdia Quaresma, Terapeuta Ocupacional, tem o doutoramento Engenharia Biomédica e é Professora Auxiliar NOVA School of Science and Technology - FCT NOVA e é membro efectivo do Centro de Investigação LIBPhys. Atualmente, é membro do Conselho Científico da FCT NOVA, da Comissão Executiva do Departamento de Física da FCT NOVA e do Conselho de Avaliação e Qualidade do IPBeja como membro externa. É, igualmente, coordenadora do 3D Printing Center for Health. É autor de artigos científicos e capítulos de livros, é titular de patentes. Nos últimos 5 anos coordenou cerca de 20 projetos em parceria com hospitais e empresas e tem 12 prémios científicos, pedagógicos e de inovação. As suas áreas científicas de investigação estão relacionadas com a biomecânica e o desenvolvimento de novas tecnologias com especial enfoque na reabilitação.</p>
                                <p></p>
                                </div>
                            </div>
                            <img src="assets/img/oradores/Claudia-Quaresma.jpg"> 
                        </div>
                        <div class="orador esq">
                            <img src="assets/img/oradores/Filipe-Quinaz.jpeg"> 
                            <div class="descricao ">
                                <h3 class="titulo-roxo">Filipe Quinaz</h3>
                                <div class = "texto-roxo">
                                    <p style="font-weight: bold; padding-top: 5px;padding-bottom: 5px;"></p>
                                    <p>Filipe Quinaz é um entusiasta da tecnologia, especialmente pelo potencial transformador na vida das pessoas. O seu percurso profissional inclui o ensino e a pesquisa na Universidade da Beira Interior, onde cultivou uma forte ligação entre a academia e a indústria. Com um mestrado em engenharia informática, colocou temporariamente de lado o seu doutoramento em Biomedicina para perseguir um conceito inovador que se materializou no sistema Nuada: um sistema para auxiliar as pessoas a recuperar a função da mão.</p>
                                </div>
                            </div>
                        </div>
                        <div class="orador dto">
                            
                            <div class="descricao ">
                                <h3 class="titulo-roxo">Simão Carvalho</h3>
                                <div class = "texto-roxo">
                                    <p style="font-weight: bold;padding-top: 5px; padding-bottom: 5px;"></p>
                                    <p>Simão é Engenheiro Biomédico com mestrado em eletrónica médica. A sua especialização está direcionada para o desenvolvimento de estratégias de controlo para dispositivos de assistência da marcha, bem como no desenvolvimento de algoritmos de inteligência artificial para reconhecer e prever intenções de movimento humano.
    Possui 8 artigos científicos indexados na base de dados Scopus.</p>
    <p>O Simão é neste momento candidato a doutoramento no BiRD Lab da Universidade do Minho, dedicando se ao desenvolvimento de uma neuroprótese para restabelecer o controlo
    motor de pessoas com paralisia dos membros inferiores através de estimulação elétrica.
    O sistema da neuroprótese possui uma estratégia de AI de descodificação de intenções de
    movimento dos sujeitos paralisados através de uma brain computer interface. As intenções são utilizadas para impor uma estratégia de controlo de forma a movimentar os membros
    inferiores de acordo com as intenções do sujeito utilizando estimulação elétrica funcional.
    A sua visão passa por potenciar a transferência de conhecimento e tecnologia da academia
    de forma a ter um real impacto n a vida das pessoas com incapacidades motoras. Com base
    nesta visão fundou a startup eDynamics Technologies em conjunto com outros 2 cofundadores. A eDynamics tem como missão potenciar a capacidade motora e redefinir
    a monitorização biomecânica através de tecnologia wearable, a qualquer momento e em
    qualquer lugar.                            </p>
                                </div>
                            </div>
                            <img src="assets/img/oradores/Simao-Carvalho.jpg"> 
                        </div>
                        <div class="orador esq">
                            <img src="assets/img/oradores/Nuno-Matela.jpg"> 
                            <div class="descricao ">
                                <h3 class="titulo-roxo">Nuno Matela</h3>
                                <div class = "texto-roxo">
                                    <p style="font-weight: bold; padding-top: 5px;padding-bottom: 5px;"></p>
                                    <p>Nuno Matela completou a sua licenciatura em Engenharia Física Tecnológica no Instituto Superior Técnico em 2002 e em 2008 completou o doutoramento em Engenharia Biomédica e Biofísica na Faculdade de Ciências da Universidade de Lisboa. Desde o seu doutoramento tem concentrado a sua investigação no diagnóstico de cancro da mama com base em imagens médicas. Começou por trabalhar no desenvolvimento de um equipamento para detecção de imagens da mama com base na tecnologia PET. Posteriormente, começou a trabalhar com técnicas de imagem com raios-X (mamografia e tomossíntese mamária). Desenvolveu novos algoritmos de reconstrução de imagem, propôs novas formas de visualização e de processamento de imagem, avaliou a possibilidade de redução de dose, desenvolveu métodos de extração de informação para o apoio à decisão clínica a agora trabalha com técnicas de deep-learning para determinar o risco de cancro da mama em contexto de rastreio. Além desta área de investigação, trabalha também em técnicas de aquisição e processamento de sinais e imagens biomédicas para dispositivos médicos.
    Atualmente é professor Auxiliar no Departamento de Física da FCUL, é coordenador da Licenciatura em Engenharia Biomédica e Biofísica e é membro do Conselho Pedagógico e da Comissão de Ética da FCUL. Em 2022 foi nomeado pela AICIB para o grupo de peritos em Diagóstico e Terapia de Cancro do National Cancer Hub.</p>
                                    <p></p>
                                </div>
                            </div>
                            
                        </div>
                    
                </div>


                <div class="atividade" id="p-ia_saude">
                    <div class="orador post">
                        <div class="descricao ">
                            <h2 class="titulo-roxo">Inteligência Artificial | No setor da Saúde</h2>
                            <div class = "texto-roxo">
                                <p class="data-local">4ª feira, dia 6 das 13:30 às 15:00</p>
                                <p>Local:</p>
                                <p style="font-weight: bold;">Como é que a inteligência artificial está a mudar a forma como cuidamos da saúde? </p>
                                <p>Se queres descobrir, não percas a oportunidade de assistir à palestra AI na saúde, onde vais ouvir falar de três temas incríveis. Vais conhecer o projeto do Digital Surgery LAB do Centro Clínico Champalimaud, que combina inteligência artificial e realidade aumentada para desenvolver novas soluções para o tratamento do cancro de mama. Vais explorar as potencialidades, os desafios e os progressos da inteligência artificial na saúde, com uma perspetiva abrangente do estado atual e das tendências futuras. E vais aprender como a inteligência artificial pode otimizar a qualidade de imagens de ultrassom, com um estudo comparativo entre filtros e modelos de AI, realizado no contexto de um projeto de doutoramento. Prepara-te para ficar maravilhado! 💻🧬</p>
                                <p style="font-weight: bold; padding-top:10px; ">Oradores: Duarte Saraiva, Helder Silva e Tiago Marques</p>
                                <p style="font-weight: bold; padding-top: 10px;">Moderador: Cláudia Antunes </p>
                            </div>
                        </div>
                        <img src="assets/img/posts/ia.png"> 
                    </div>
                        <div class="orador dto">
                            <img src="assets/img/oradores/Duarte-Saraiva.jpg"> 
                            <div class="descricao ">
                                <h3 class="titulo-roxo">Duarte Saraiva</h3>
                                <div class = "texto-roxo">
                                <p style="font-weight: bold;padding-top: 5px; padding-bottom: 5px;">Mestre em Engenharia Biomédica e Biofísica. Atualmente no 2º ano de Doutoramento de Engenharia Biomédica e Biofísica. </p>
                                <p>Duarte Saraiva tem 25 anos e nasceu em Torres Vedras. Finalizou o mestrado integrado em Engenharia Biomédica e Biofísica na Faculdade de Ciências da Universidade de Lisboa (FCUL) em 2022. </p>
                                <p>Durante o seu percurso académico, esteve envolvido em diversas atividades de associativismo, incluindo o cargo de vice-presidente do Núcleo de Estudantes de Engenharia Biomédica e Biofísica (NE2B2). Ele fez ainda parte da equipa portuguesa que competiu no evento internacional Sensus 2020 e que conquistou o prémio de segundo lugar. No fim da licenciatura, fez um estágio na área de medicina regenerativa no BIH Center for Regenerative Therapies (BCRT), em Berlim. A sua dissertação de mestrado foi realizada no Instituto de Biofísica e Engenharia Biomédica (IBEB), desenvolvendo um modelo de inteligência artificial para o diagnóstico de doenças neuropsiquiátricas. Atualmente é professor assistente convidado e estudante de doutoramento na FCUL. O seu projeto está ser realizado em colaboração com o IBEB e o LASIGE, propondo o desenvolvimento de uma solução de inteligência artificial para assistir na aquisição e avaliação de um exame de ecografia pulmonar.</p>
                                </div>
                            </div>
                        </div>
                        <div class="orador esq">
                            <div class="descricao ">
                                <h3 class="titulo-roxo">Hélder Silva</h3>
                                <div class = "texto-roxo">
                                <p style="font-weight: bold; padding-top: 5px;padding-bottom: 5px;">Diretor da área de Estratégia em Healthcare</p>
                                <p>Licenciado em Ciências Farmacêuticas, com duas pós-graduações (Fisiofarmacologia; Economia e Gestão) e o Curso de Especialização em Administração Hospitalar.Começou a sua carreira na área de IT em 2007, na Glintt, uma empresa portuguesa de consultoria e serviços tecnológicos, onde ocupou vários cargos, incluindo Team Leader, Senior Project Manager, Product Manager. Em 2021, deixou a Glintt para trabalhar no Banco CTT, onde ocupou o cargo de IT PMO Lead. Em 2022, ingressou na NTT DATA, onde ocupou o cargo de Manager. Em 2023, regressou à Glintt para assumir o atual cargo de Diretor da área de Estratégia em Healthcare. Neste seu novo cargo, é responsável por definir a estratégia e liderar uma parte da equipa da área de Healthcare da empresa (área recentemente reposicionada em Glintt Life, Hospitals)</p>
                                <p></p>
                                <p></p>
                                </div>
                            </div>
                            <img src="assets/img/oradores/Helder-Silva.jpg"> 
                        </div>
                        <div class="orador dto">
                            <img src="assets/img/oradores/Tiago-Marques.jpg"> 
                            <div class="descricao ">
                                <h3 class="titulo-roxo">Tiago Marques</h3>
                                <div class = "texto-roxo">
                                <p style="font-weight: bold;padding-top: 5px; padding-bottom: 5px;">Senior Research Scientist no Centro Clínico Champalimaud. MSc em Engenharia Física Tecnológica (IST) e PhD em Neurociência (Universidade NOVA de Lisboa / Champalimaud Neuroscience Programme) </p>
                                <p>Tiago Marques é um investigador sénior no Centro Clínico Champalimaud onde co-lidera o Digital Surgery LAB. O principal foco do seu trabalho é desenvolver dispositivos médicos inovadores que permitam aos cirurgiões acederem a informação anatómica de pacientes através da pele combinando novas tecnologias de Realidade Aumentada e Inteligência Artificial (IA). Antes disso, Tiago trabalhou no McGovern Institute for Brain and Cognitive Sciences no MIT, onde estudou como o cérebro reconhece objectos e desenvolveu algoritmos de IA que melhor aproximam a percepção visual de humanos. Tiago fez a sua tese de doutoramento no programa de neurociência da Fundação Champalimaud, estudando o papel de circuitos hierárquicos no cérebro durante a percepção visual. Tiago tem um mestrado em Engenharia Física Tecnológica do Instituto Superior Técnico, onde desenvolveu sistemas de controlo e aquisição de dados em Fusão Nuclear. Depois do mestrado, Tiago teve ainda uma experiência profissional em consultoria estratégica na The Boston Consulting Group. </p>
                                <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="orador esq">
                            <div class="descricao ">
                                <h3 class="titulo-roxo">Cláudia Antunes</h3>
                                <div class = "texto-roxo">
                                <p style="font-weight: bold; padding-top: 5px;padding-bottom: 5px;"></p>
                                <p>Cláudia Antunes é Professora Associada no Instituto Superior Técnico – Universidade de Lisboa, onde leciona desde 1998 e concluiu o doutoramento em Engenharia Informática e de Computadores. É uma das primeiras doutoradas europeias no domínio da Ciência de Dados numa perspetiva de engenharia, tendo proposto novos métodos e metodologias de Aprendizagem Automática para lidar com dados temporais. Os seus interesses de investigação centram-se na utilização do conhecimento de domínio e exploração da temporalidade para automatizar a etapa de preparação de dados. Coordenou e participou em vários projetos de investigação nacionais e europeus, tendo cerca de uma centena de artigos publicados em revistas e conferências internacionais. A par deste trabalho, orientou cerca de meia centena de alunos de mestrado e doutoramento, e tem lecionado disciplinas de ciência de dados, tanto em programas de graduação como de pós-graduação. Produziu dois MOOCs sobre Ciência de Dados, disponíveis na plataforma MOOC Técnico.
Cláudia é atualmente coordenadora de duas organizações locais sem fins lucrativos: o grupo de afinidade para as mulheres na engenharia no IEEE Portugal e o Colégio de Engenharia Informática da Ordem dos Engenheiros – Região Sul. Além disso, é uma das vice-presidentes do Departamento de Engenharia Informática do Instituto Superior Técnico – Universidade de Lisboa.</p>
                                <p></p>
                                </div>
                            </div>
                            <img src="assets/img/oradores/Claudia-Antunes.png"> 
                        </div>

                    
                </div>


            </div>  
            <div id="workshop">
                <h1 class="titulo-roxo"  style="text-align:center">WORKSHOPS</h1>
                <div class="atividade" id="ws1">
                    <div class="orador post">
                    <img src="assets/img/posts/ws-accenture.png"> 
                        <div class="descricao ">                             
                            <h2 class="titulo-roxo"> "Are you ready for Cloud?"</h2>
                            <div class = "texto-roxo">
                                <p class="data-local">2ª feira, dia 4 das 15:30 às 17:00</p>
                                <p class="data-local2">Sala: V1.15</p>
                                <p>O 1° workshop desta edição da JOB2BE é oferecido pela Accenture, apresentado por Francisco Prata. Juntos, vamos responder à questão: “Are you ready for Cloud?”. Contamos contigo? ☁️💻</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="atividade" id="ws2">
                    <div class="orador post">
                    
                        <div class="descricao "> 
                            <h2 class="titulo-roxo">Técnica Cirúrgica - Volar-e</h2>
                            <div class = "texto-roxo">
                                <p class="data-local">3ª feira, dia 5 das 15:30 às 17:00</p>
                                <p class="data-local2">Sala: V1.05</p>
                                <!--<p>Local: v1.05</p>-->
                                <p>Estás pronto para explorar o Workshop "Técnica Cirúrgica - Volar-e" da Astrolabe Medical?</p>
                                <p>Descobre os segredos por trás deste inovador procedimento cirúrgico projetado para corrigir fraturas do rádio distal.
        Durante este workshop, apresentado por Diogo Monteiro e Leonor Jud, serás guiado através dos detalhes do sistema Volar-e, e cada passo crucial para o sucesso desta cirurgia.
        Não percas esta oportunidade! 🦾</p>
                            </div>
                        </div>
                        <img src="assets/img/posts/ws-astrolabe.png"> 
                    </div>
                </div>
                <div class="atividade" id="ws3">
                    <div class="orador post">
                        <img src="assets/img/posts/ws-medtronic.png"> 
                        <div class="descricao ">
                            <h2 class="titulo-roxo">Inovação na Indústria dos Dispositivos Médicos</h2>
                            <div class = "texto-roxo">
                                <p class="data-local">4ª feira, dia 6 das 9:00 às 10:30</p>
                                <p class="data-local2">Sala: V1.07</p>
                                <p>Não percas o Workshop ‘Medtronic, a Inovação na Indústria dos Dispositivos Médicos’! Descobre os bastidores desta empresa: desde a sua magnitude até às suas áreas de interesse e visão estratégica. Vais ter ainda a oportunidade de ouvir dois engenheiros biomédicos, o João Silva e a Catarina Sousa, que abordarão dois domínios de atuação da Medtronic: Neuromodulação e Cirurgia Laparoscópica. 🔬 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="pitch">
                <h1 class="titulo-roxo"  style="text-align:center">PITCH</h1>
                <div class="atividade">
                    <div class="orador post ">
                        <div class="descricao ">
                            <h2 class="titulo-roxo">Descobre o mundo de possibilidades dentro da Glintt</h2>
                            <div class = "texto-roxo">
                                <p class="data-local">2ª feira, dia 4 das 11:30 às 12:00</p>
                                <p class="data-local2">Local:</p>
                                <p>Contamos com a presença da Joana Santos para nos dar uma overview dos desafios diários da Glintt Global. Ficamos à tua espera! 👀</p>
                            </div>
                        </div>
                        <img  src="assets/img/posts/pitch-glintt.png"> 
                    </div>
                </div>
            </div>


            <div id="feira-empresas">
                <h1 class="titulo-roxo"  style="text-align:center">FEIRA DE EMPRESAS</h1>
                <div class="atividade">
                    
                    <h2 class="titulo-roxo"></h2>
                    <div class = "texto-roxo">
                        <p class="data-local">3ª feira, dia 5 das 10:30 às 12:00</p>
                        <p class="data-local2">Átrio de Civil</p>
                        <p>Se estás interessado em estabelecer conexões para o teu futuro no setor de Engenharia Biomédica, não percas a JobFair! </p>
                        <p>Dia 5 de março, no átrio de civil, oferecemos-te esta sessão de Networking: uma oportunidade perfeita para imergires nas inovações e nos projetos atuais liderados por algumas das empresas mais influentes da área. Terás a chance de aprender diretamente com os profissionais da Accenture, Glintt Global, Astrolabe Medical e Teach for Portugal. Não deixes passar esta chance de expandir o teu conhecimento e rede de contatos no mundo da Engenharia Biomédica!💻</p>
                    </div>
                    <div class="orador post fe">
                    <img src="assets/img/posts/fe1.png">
                    <img src="assets/img/posts/fe2.png">
                    </div>

                </div>
            </div>  
            

            <div id="alumni">
                <h1 class="titulo-roxo"  style="text-align:center">ALUMNI SESSION</h1>
                <div class="atividade">
                    <div class="orador post">
                        <img  src="assets/img/posts/alumni.png"> 
                        <div class="descricao ">
                                <h2 class="titulo-roxo"></h2>
                                <div class = "texto-roxo">
                                    <p class="data-local"> Horário: 4ª feira, dia 6 das 11:00 às 12:00</p>
                                    <p class="data-local2">Local:</p>
                                    <p>Pronto para descobrir o teu futuro após a universidade? </p>
                                    <p> No dia 6 de março, no centro de congressos, apresentamos-te uma sessão única onde ex-alunos de Engenharia Biomédica irão revelar os seus percursos profissionais e experiências enriquecedoras. Uma oportunidade imperdível para inspirares a tua carreira.
            Junta-te a nós!🦿</p>
                                    <p style="font-weight: bold; padding-top: 10px;">Oradores</p>
                                </div>
                        </div>
                    </div>
                        
                        <div class="orador dto">
                            
                            <div class="descricao ">
                                <h3 class="titulo-roxo">Raquel Silva</h3>
                                <div class = "texto-roxo">
                                <p style="font-weight: bold;padding-top: 5px; padding-bottom: 5px;">Mestre em Engenharia Biomédica</p>
                                <p>Raquel Pessoa da Silva completou o Mestrado Integrado em Engenharia Biomédica em 2019 pelo Instituto Superior Técnico. Tendo escolhido o perfil de mestrado de Engenharia de Células e Tecidos, integrou o Laboratório de Imunofisiologia na Fundação Champalimaud no início de 2019 para desenvolver a sua tese de mestrado sobre a supervisão da Doutora Manuela Ferreira e do Doutor Henrique Veiga-Fernandes, onde estudou a regulação das células iNKT por derivados da dieta.</p>
                                <p>É atualmente aluna de doutoramento da turma de 2019 do International Neuroscience Doctoral Program (INDP), integrando o laboratório do Doutor Veiga-Fernandes, onde está a desenvolver a sua tese cujo estudo se foca nos mecanismos pelos quais circuitos neuronais periféricos regulam a fisiologia dos organismos, em contexto de saúde e de doença.</p>
                            </div>
                            </div>
                            <img src="assets/img/oradores/Raquel-Silva.png"> 
                        </div>
                        <div class="orador esq">
                        <img src="assets/img/oradores/Guilherme-Freches.jpeg"> 
                            <div class="descricao ">
                                <h3 class="titulo-roxo">Guilherme Freches</h3>
                                <div class = "texto-roxo">
                                <p style="font-weight: bold; padding-top: 5px;padding-bottom: 5px;"></p>
                                <p>Nascido no Fundão, Guilherme Freches concluiu o Mestrado Integrado em Engenharia Biomédica do Instituto Superior Técnico em 2016. Após uma curta experiência como Data Analyst no BNP Paribas, segue para a Holanda fazer um Doutoramento em Neurociências na Universidade de Radboud, em Nijmegen (ainda em curso). Em 2021 volta para Portugal e junta-se à Sword Health em 2021, passando a Team Leader em 2023. Atualmente, gere uma equipa de 5 pessoas, focada em dar visibilidade às tendências existentes na imensidão de dados que a empresa produz (desde a precisão dos sensores, à evolução clínica dos pacientes, passando pela eficácia das nossas campanhas de retenção). É casado e eleito autárquico.</p>
                                <p></p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="orador dto">
                            <img src="assets/img/oradores/Duarte-Saraiva.jpg"> 
                            <div class="descricao ">
                                <h3 class="titulo-roxo">Afonso Ferreira</h3>
                                <div class = "texto-roxo">
                                <p style="font-weight: bold;padding-top: 5px; padding-bottom: 5px;"></p>
                                <p></p>
                                <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="orador esq">
                            <div class="descricao ">
                                <h3 class="titulo-roxo"></h3>
                                <div class = "texto-roxo">
                                <p style="font-weight: bold; padding-top: 5px;padding-bottom: 5px;"></p>
                                <p></p>
                                <p></p>
                                </div>
                            </div>
                            <img src="assets/img/oradores/Helder-Silva.jpg"> 
                        </div>
                        <div class="orador dto">
                            <img src="assets/img/oradores/Duarte-Saraiva.jpg"> 
                            <div class="descricao ">
                                <h3 class="titulo-roxo">Ana Rita Fontes</h3>
                                <div class = "texto-roxo">
                                <p style="font-weight: bold;padding-top: 5px; padding-bottom: 5px;"></p>
                                <p></p>
                                <p></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> 
            
            
        </div>

        <?php include("includes/new_footer.php");?>
    </body>

</html>