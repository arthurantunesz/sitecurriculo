<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo do Arthur</title>

    <link rel="stylesheet" href="./style.css">
    <link rel="icon" type="image/x-icon" href="./assets/favicon2.png">
</head>
<body>
    <header class="header">
        <a id="curriculo" href="#">Currículo</a>
        <nav>
            <ul class="menu">
                <li><a href="#formacao">Formação</a></li>
                <li><a href="#experiencia">Experiência</a></li>
                <li><a href="#habilidades">Habilidades</a></li>
                <li><a href="#certificacoes">Certificações</a></li>
                <li><a href="./projetos.php">Projetos</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>
    </header>

    <section class="background">
        <img src="./assets/skyscraper4-crop.jpg" alt="">
    </section>

    <section class="card"> 
        <div>
            <img src="./assets/Foto 3x4.png" alt="">
        </div>
        <div class="infos">
            <h1>Arthur Antunes Estrela</h1>
            <h2>Analista de Negócios</h2>

            <h3>Telefone:</h3>
            <p>(11) 95419-1629</p>

            <h3>E-mail</h3>
            <p>arthurantunes@usp.br</p>

            <h3>Endereço</h3>
            <p>Rua Anapurus, 60</p>
            <p>Guarulhos, SP. CEP: 07053-170</p>

            <h3>Data de Nascimento</h3>
            <p>01 de junho de 2001</p>
        </div>
        <div class="redes-sociais">
            <p>Redes Sociais</p>
        </div>
    </section>


    <main class="main">
        <section class="about">
            <h1>Sobre mim</h1>
            <p>Olá, meu nome é Arthur. Sou apaixonado por tecnologia e esportes.
                Desenvolvi esse site como um projeto 
                do curso que fiz de HTML e CSS, promovido pelo NEU (Núcleo de
                Empreendedorismo da USP). Decidi mantê-lo porque desta forma 
                você poderá me conhecer um pouquinho melhor do que por um currículo tradicional :)</p>
        </section>
    
        <section class="formacao" id="formacao">
            <h1>Formação</h1>
            <div class="formacao-content">
                
                <p class="data1">2021 a 2025</p>
                <img src="./assets/USP.png" alt="" class="img1">
                <div id="usp">
                    <ul>
                        <li><b>Universidade de São Paulo</b></li>
                        <p>Bacharel em Administração. Curso no período noturno.</p>
                    </ul>
                </div>
    
                <p class="data2">2016 a 2018</p>
                <img src="./assets/ENIAC.jpg" alt="" class="img2">
                <div id="eniac">
                    <ul>
                        <li><b>Colégio Eniac</b></li>
                        <p>Ensino médio integrado ao técnico</p>
                    </ul>
                </div>
            </div>
        </section>

        <section class="experiencia" id="experiencia">
            <h1>Experiência</h1>
            <div class="experiencia-content">

                <p class="data1">abril/2021 até o momento</p>
                <img src="./assets/Consorciei.png" alt="" class="img1">
                <div class="consorciei">
                    <h3>Consorciei Participações S.A.</h3>
                    <h4><u>Analista de Negócios</u></h4>
                    <ul>
                        <li>Elaboração de relatórios gerenciais</li>
                        <li>Avaliação e proposta de tecnologias para melhoria de procesos e satisfação do cliente</li>
                    </ul>

                    <h4><u>Supervisor de Atendimento</u></h4>
                    <ul>
                        <li>Controle e análise do atendimento ao cliente e resolução de ocorrências junto ao time de operações</li>
                    </ul>
                </div>

                <p class="data2">out/2019 até abril/2021</p>
                <img src="./assets/nipo.jpg" alt="" class="img2">
                <div class="nipo">
                    <h3>Hospital Nipo-Brasileiro</h3>
                    <h4><u>Atendente Bilíngue</u></h4>
                    <ul>
                        <li>Atendimento na recepção central</li>
                        <li>Suporte e orientação no setor de informações</li>
                    </ul>
                </div>
            </div>
        </section>
            
        <section class="habilidades" id="habilidades">
            <h1>Habilidades</h1>
            <div class="wrapper">
                <div class="lista-item">
                    <input type="checkbox" class="trigger-input" id="excel">
    
                    <div class="trigger-wrapper">
                        <label for="excel"><h2>Excel com Macros e VBA</h2></label>
                        <p>Por muito tempo utilizei o Excel diariamente no trabalho, utilizando todas as suas ferramentas
                            como tabela dinâmica, formatação condicional e validação de dados. <br><br> Sei importar, editar e atualizar
                            consultas com o Power Query. Além disso, dei um curso de Excel na empresa, onde ensinei automação 
                            com o VBA, seja para agilizar uma tarefa rotineira, seja para integrar com a web.
                        </p>
                    </div>
                </div>

                <div class="lista-item">
                    <input type="checkbox" class="trigger-input" id="power bi">
    
                    <div class="trigger-wrapper">
                        <label for="power bi"><h2>Power BI</h2></label>
                        <p>Eu elaboro e mantenho relatórios tanto para acompanhamento operacional, que discutimos com o time nas
                            reuniões diárias, quanto para visão estratégica do negócio. <br><br> Faço dashboards impactantes e munidos de 
                            insights para tomada de decisão. Após o curso que fiz e com a experiência, posso dizer que sou proficiente
                            nessa ferramenta.
                        </p>
                    </div>
                </div>

                <div class="lista-item">
                    <input type="checkbox" class="trigger-input" id="office">
    
                    <div class="trigger-wrapper">
                        <label for="office"><h2>Pacote Office</h2></label>
                        <p>Sei trabalhar com os programas Excel, PowerPoint, Word e Outlook.</p>
                    </div>
                </div>

                <div class="lista-item">
                    <input type="checkbox" class="trigger-input" id="python">
    
                    <div class="trigger-wrapper">
                        <label for="python"><h2>Python e R</h2></label>
                        <p>Fiz um curso de Python proporcionado pela FEA.dev, uma organização estudantil da minha
                            faculdade. Essa linguagem de sintaxe simples é extremamente útil para análise de dados e até
                            automações.
                        </p>
                    </div>
                </div>

                <div class="lista-item">
                    <input type="checkbox" class="trigger-input" id="ingles">
    
                    <div class="trigger-wrapper">
                        <label for="ingles"><h2>Inglês fluente</h2></label>
                        <p>Nunca fiz curso, mas compreendo perfeitamente a língua falada e escrita. Adquiri o inglês 
                            por consciência de sua necessidade em qualquer âmbito da vida. Hoje assisto a qualquer vídeo ou filme
                            sem legenda e entendo. Quanto à gramática, estudei intensivamente no ensino médio.
                        </p>
                    </div>
                </div>

                <div class="lista-item">
                    <input type="checkbox" class="trigger-input" id="html">
    
                    <div class="trigger-wrapper">
                        <label for="html"><h2>HTML e CSS</h2></label>
                        <p>Aprendi o básico dessas linguagens com um curso do NEU (Núcleo de Empreendedorismo da USP).
                            Fiz esse site como projeto de entrega, onde pude praticar os conceitos.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    
        <h1 id="certificacoes">Certificações</h1>
        <section class="certificacoes">
            <div>
                <a href="http://www1.intranet.sp.senac.br/senac_solution/pss/relatorios/certificados/NBAS/index.cfm?CRYPTALGID=943309da-569c-11ec-bf08-af54f048cef5&dt=2021-12-06-10.58.24.000000"
                target="_blank"><img src="./assets/Excel.png" alt=""></a>
                <p>Excel Avançado (com macros e VBA)</p>
            </div>
            <div>
                <a href="http://www1.intranet.sp.senac.br/senac_solution/pss/relatorios/certificados/NBAS/index.cfm?CRYPTALGID=56ec3dc4-f3de-11eb-986c-99315a2e188c&dt=2021-08-02-19.09.43.000000"
                target="_blank"><img src="./assets/Power BI.png" alt=""></a>
                <p>Business Inteligence com Power BI</p>
            </div>
            <div>
                <a href="https://skillshop.exceedlms.com/student/award/Uq9TyBfTwxatJWyQ6CwdqRRG?referer=https%3A%2F%2Fskillshop.exceedlms.com%2Fstudent%2Fpath%2F18330%2Factivity%2F26145%3Fconfirm_disclaimer%3Dtrue%26id%3D18286" 
                target="_blank"><img src="./assets/Google Ads.png" alt=""></a>
                <p>Google Ads Measurement Certification</p>
            </div>
            <div>
                <a href="https://moodle.abac.kaptiva.com.br/mod/customcert/verify_certificate.php"
                target="_blank"><img src="./assets/PCA.png" alt=""></a>
                <p>PCA-10</p>
            </div>
        </section>
    
        <section class="projetos">
            <h1>Projetos</h1>
            <div class="container">
                <div>
                    <h1>Feira de Empreendedorismo Inovac - 2018</h1>
                    <p>Organizamos uma feira de fomento à inovação e sustentabilidade, contando com a
                        participação de várias empresas patroninadoras. Nosso evento deu destaque a algumas
                        empresas júniores no ramo de tecnologia para conseguirem investimento.
                    </p>
                    <p>Como um projeto de conclusão de curso, colocamos em prática conceitos aprendidos em aula.
                        Sendo assim, fizemos o planejamento do evento e captação de recursos financeiros. Depois,
                        fizemos a mobilização de esforços de alunos e comunidade local, para apoiar o projeto.
                        Além disso, fizemos o plano de marketing e toda a organização logística.
                    </p>
                    <p>Conseguimos mais de 3 mil participantes no evento e duas empresas da nossa escola com investimento real.
                        Também arrecadamos 1,2 toneladas de alimentos para doação.
                    </p>
                    <img src="./assets/Projeto Eniac - Empreendedorismo.jpg" alt="">
                </div>

                <div>
                    <h1>Iniciativa Consorciei Learning - 2021</h1>
                    <p>Eu e uma colega do trabalho organizamos um curso de Excel avançado para
                        oferecer a todos os colaboradores da empresa, visto a importância dessa ferramenta em suas rotinas de operação.
                        Nós dois planejamos o cronograma e demos as aulas, duas vezes por semana, durante um mês.
                    </p>
                    <p>Abordamos várias funcionalidades do Excel, como tabelas dinâmicas e criação de dashboards.
                        Também explicamos o uso do Power Query para importação e atualização de dados.
                        Por último, praticamos muito o uso do VBA, criando automações e interação com a web.
                    </p>
                    <p>Tivemos quase metade da empresa inscrita no nosso curso e após avaliação final, 
                        recebemos um feedback muito positivo, o que nos motivou a prosseguir com a iniciativa e 
                        elaborar novas atividades dentro da empresa para o compartilhamento de conhecimentos e experiências.
                    </p>
                    <img src="./assets/cursoexcel.jpg" alt="">
                </div>
            </div>
        </section>

    
    <section class="contato" id="contato">
        <fieldset class="card-contato">
            <legend><h1>Contato</h1></legend>
       
            <div class="contato-content">
                <form class="form" method="post" action="./form-contato.php">
                    <fieldset class="fieldset">
                        <legend>Envie a sua mensagem</legend>
                        <div class="inputbox">
                            <input type="text" id="input-nome" class="inputuser" name="nome" autocomplete="name" required>
                            <label for="input-nome" class="inputlabel">Nome</label>
                        </div>
                        
                        <div class="inputbox">
                            <input type="email" id="input-email" class="inputuser" name="email" autocomplete="email" required>
                            <label for="input-email" class="inputlabel">E-mail</label>
                        </div>
    
                        <div class="inputbox">
                            <input type="tel" id="input-phone" class="inputuser" name="telefone" autocomplete="tel" required>
                            <label for="input-phone" class="inputlabel">Telefone</label>
                        </div>
    
    
                        <div>
                            <textarea id="textarea" placeholder="Digite aqui..." name="mensagem"></textarea>
                        </div>
    
                    </fieldset>
                </form>
    
                <div class="infos2">
                    <h1>Arthur Antunes Estrela</h1>
                    <h2>Analista de Negócios</h2>
    
                    <h3>Telefone:</h3>
                    <p>(11) 95419-1629</p>
    
                    <h3>E-mail</h3>
                    <p>arthurantunes@usp.br</p>

                    <div class="line">

                    </div>
                </div>

                
            </div>
            
        </fieldset>

        <div class="quadrado">
        </div>
            
    </section>


</main>

<footer>
</footer>

</body>
</html>