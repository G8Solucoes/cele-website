---
title: Sobre a Líder
description: A little bit about the site
---
@extends('_layouts.main')

@section('body')
    <div style="background-color: #4FA39D">
        <div class="container mx-auto my-0 py-16">
            <span><a href="/">Home</a> > <a href="/sobre">Sobre</a></span>

            <h1 class="mb-0">Sobre</h1>

            <span>Excelência nos serviços prestados</span>
        </div>
    </div>

    <div id="indicators-carousel" class="container relative mx-auto my-16" data-carousel="static">
        <div class="inline-flex rounded-md shadow-sm" role="group">
            <button type="button" class="inline-flex items-center py-2 px-4 text-sm font-medium rounded-l-lg bg-gray-700 border-gray-600 text-white hover:text-white hover:bg-gray-600 focus:ring-blue-500 focus:text-white" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0">
                Missão
            </button>
            <button type="button" class="inline-flex items-center py-2 px-4 text-sm font-medium bg-gray-700 border-gray-600 text-white hover:text-white hover:bg-gray-600 focus:ring-blue-500 focus:text-white" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1">
                Visão
            </button>
            <button type="button" class="inline-flex items-center py-2 px-4 text-sm font-medium rounded-r-md bg-gray-700 border-gray-600 text-white hover:text-white hover:bg-gray-600 focus:ring-blue-500 focus:text-white" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2">
                Valores
            </button>
        </div>

        <div class="relative h-96 overflow-hidden rounded-lg" style="color: #4FA39D">
            <!-- Item 1 -->
            <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20 bg-white p-8" data-carousel-item="active">
                <h2 id="missao">Missão da Líder de Ensino</h2>
                <p class="text-2xl"> Atuando com um time de especialistas, somos uma empresa inovadora de treinamento, determinada a inovar e alcançar um padrão de excelência dentro do mercado. Com foco diferenciado, customizando suas soluções às necessidades do cliente, a Líder de Ensino se posiciona no mercado como alternativa de eficiência e eficácia para seus clientes, razão de existir da Líder.</p>            
            </div>

            <!-- Item 2 -->
            <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10 bg-white p-8" data-carousel-item="">
                <h2 id="visao">Visão da Líder de Ensino</h2>
                <p class="text-2xl">Atuar como a melhor empresa de treinamento da região, trazendo para o aluno o que há de melhor e mais moderno no mercado, com agilidade e soluções focadas pensando sempre no aluno razão de ser da Líder de Ensino.</p>            
            </div>

            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out absolute inset-0 transition-all transform bg-white p-8" data-carousel-item="">
                <h2 id="valores">Valores da Líder de Ensino</h2>

                <div class="grid grid-cols-3 justify-around py-8">
                    <div class="flex flex-col items-center self-end">
                        <img src="/assets/images/etica_icon.svg" width="100" height="100" alt="">
                        <h3 class="mb-0">ÉTICA</h3>
                        <p class="mt-0">PROFISSIONAL</p>
                    </div>
            
                    <div class="flex flex-col items-center self-end">
                        <img src="/assets/images/excelencia_icon.svg" width="100" height="100" alt="">
                        <h3 class="mb-0">EXCELÊNCIA</h3>
                        <p class="mt-0">NO ATENDIMENTO E NOS SERVIÇOS PRESTADOS</p>
                    </div>
            
                    <div class="flex flex-col items-center self-end">
                        <img src="/assets/images/comprometimento_icon.svg" width="100" height="100" alt="">
                        <h3 class="mb-0">COMPROMETIMENTO</h3>
                        <p class="mt-0">DA NOSSA EQUIPE COM O CLIENTE</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
