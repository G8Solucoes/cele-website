---
title: Contact
description: Get in touch with us
---
@extends('_layouts.main')

@section('body')
    <div class="bg-primary-color-500">
        <div class="container mx-auto my-0 py-16">
            <span><a href="/">Home</a> > <a href="/sobre">Contato</a></span>

            <h1 class="mb-0 text-primary-color-700">Contato</h1>

            <span>Comprometimento com o cliente</span>
        </div>
    </div>

    <div id="indicators-carousel" class="container relative mx-auto my-16" data-carousel="static">
        <div class="inline-flex rounded-b-md ronded-t-r-md shadow-sm w-1/5" role="group">
            <button type="button" class="inline-flex items-center py-2 px-4 text-sm font-bold um bg-secondary-color-500 text-white hover:text-white hover:bg-secondary-color-600 focus:bg-secondary-color-600 focus:text-white rounded-tl-md" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0">
                Contato
            </button>
            <button type="button" class="inline-flex items-center py-2 px-4 text-sm font-bold bg-secondary-color-500 text-white hover:text-white hover:bg-secondary-color-600 focus:bg-secondary-color-600 focus:text-white rounded-tr-md" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="1">
                Fale conosco
            </button>
        </div>

        <div class="relative h-96 overflow-hidden rounded-b-lg rounded-tr-lg">
            <!-- Item 1 -->
            <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20 bg-white p-8" data-carousel-item="active">
                <h2 class="text-justify" id="missao">Missão da Líder de Ensino</h2>
                <p class="text-2xl text-justify"> Atuando com um time de especialistas, somos uma empresa inovadora de treinamento, determinada a inovar e alcançar um padrão de excelência dentro do mercado. Com foco diferenciado, customizando suas soluções às necessidades do cliente, a Líder de Ensino se posiciona no mercado como alternativa de eficiência e eficácia para seus clientes, razão de existir da Líder.</p>            
            </div>

            <!-- Item 2 -->
            <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10 bg-white p-8" data-carousel-item="">
                <h2 id="visao">Visão da Líder de Ensino</h2>
                <p class="text-2xl text-justify">Atuar como a melhor empresa de treinamento da região, trazendo para o aluno o que há de melhor e mais moderno no mercado, com agilidade e soluções focadas pensando sempre no aluno razão de ser da Líder de Ensino.</p>            
            </div>
        </div>
    </div>
@stop
