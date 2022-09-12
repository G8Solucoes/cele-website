@extends('_layouts.main')

@section('body')
    <div class="w-full bg-secondary-color-500">
        <div class="container mx-auto grid lg:grid-cols-2 grid-cols-1 overflow-hidden">
            <div class="flex flex-col justify-center text-white py-16">
                <h2 class="text-5xl text-white mb-8">Diversos cursos nas áreas de estética, indústria, saúde e serviço! Conheça todos os cursos oferecidos.</h2>
                <a href="#" class="p-4 rounded-lg bg-secondary-color-600" style="width: 300px; height: 150px; position: sticky">
                    <img src="/assets/images/lider_icon.svg" style="z-index: 1; width: 200px; height: 120px; position: absolute; left:-70px;" alt="" srcset="">
                    <h3 class="text-2xl text-white" style="position: sticky; z-index: 2">Encontre o curso perfeito para você!</h3>
                    <img src="/assets/images/arrow_1.svg" style="width: 50px; height: 50px; position: relative; left: 225px; top: -50px;" alt="" srcset="">
                </a>
            </div>
            <div class="bg-cover-image-01 bg-cover hidden lg:block"></div>
        </div>
    </div>

    <div class="container w-full py-16 my-0 mx-auto">
        <div class="text-center">
            <h2 class="m-0 text-primary-color-500">Metodologia de ensino</h2>
            <p class="text-justify text-2xl text-primary-color-500">Utilizamos as ferramentas mais modernas no mercado para trazer o que há de melhor no ensino, com exposição de temas e utilização de ferramentas interativas, propiciando ao aluno o conhecimento necessário no assunto, com exposição de casos reais e ambientes simulados, estimulando o conhecimento e o alto aprendizado.</p>
        </div>
    </div>

    <div class="w-full bg-primary-color-500">
        <div class="container mx-auto grid lg:grid-cols-2 grid-cols-1 h-96 overflow-hidden bg-primary-color-500">
            <div class="flex flex-col w-9/12 justify-center text-white">
                <h2 class="text-5xl text-white">Por que investir em um curso profissionalizante na líder?</h2>
                <p class="text-xl">Uma formação profissionalizante colabora para que os estudantes adquiram várias competências aplicáveis em um ramo de atuação. Assim, eles se tornam aptos a desempenhar mais de uma função, ampliando suas possibilidades de carreira.</p>
            </div>
            <div class="bg-cover-image-02 bg-cover bg-right bg-no-repeat hidden lg:block" style="background-position-y: -8rem"></div>
        </div>
    </div>

    <div class="container w-full py-16 my-0 mx-auto">
        <div class="text-center">
            <h2 class="m-0 text-primary-color-500">Nossa história</h2>
            <p class="text-justify text-2xl text-primary-color-500">Somos um novo conceito em educação, nascemos com a vontade de inovar e trazer aos nossos alunos o que há de mais moderno e inovador no mercado, trazendo novas experiencias e buscando aprimorar o sistema de ensino frente aos novos desafios.</p>
        </div>
    </div>
@stop