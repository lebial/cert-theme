<?php
    function render_partners() {
        $partnerOpts = get_field('partners_title');
        foreach ($partnerOpts as $partner){
            echo '<span>' . $partner['title'] . '</span>';
        }
    }

    function render_partners2() {
        $partnerOpts = get_field('partners_title');
        foreach ($partnerOpts as $partner){
            echo '<p>The <span>' . $partner['title'] . '</span> Partner of Choice for Value-based Care</p>';
        }
    }

    function render_cards() {
        $cards = get_field('credibility_cards');
        foreach ($cards as $card) {
            echo '<div class="card flex flex-col w-1/3 items-center">';
                echo '<div class="card__data flex flex-col h-48">';
                    echo '<h4 class="font-bold text-lg text-dark-blue-background text-center pb-6">' . $card['title'] . '</h4>';
                    echo '<div class="card__point text-center">';
                        foreach($card['point_description'] as $pointDescription) {
                            echo '<p class="mb-0 text-dark-blue-background">'. $pointDescription['point'] .'</p>';
                        }
                    echo '</div>';
                echo '</div>';
                echo '<div class="text-center p-0 pt-6">';
                    echo '<a class="px-3 py-2 border-primary border border-solid rounded-3xl text-dark-blue-background font-bold hover:cursor-pointer transition-all duration-300 hover:bg-primary text-center" href="https://www.google.com">Explore More</a>';
                echo '</div>';
            echo '</div>';
        }
    }
?>

<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
<script>
    const typed = new Typed('.typed', {
        stringsElement: '#cadenas-texto', // ID del elemento que contiene cadenas de texto a mostrar.
        typeSpeed: 30, // Velocidad en mlisegundos para poner una letra,
        startDelay: 0, // Tiempo de retraso en iniciar la animacion. Aplica tambien cuando termina y vuelve a iniciar,
        backSpeed: 15, // Velocidad en milisegundos para borrrar una letra,
        smartBackspace: true, // Eliminar solamente las palabras que sean nuevas en una cadena de texto.
        shuffle: false, // Alterar el orden en el que escribe las palabras.
        backDelay: 2000, // Tiempo de espera despues de que termina de escribir una palabra.
        loop: true, // Repetir el array de strings
        loopCount: false, // Cantidad de veces a repetir el array.  false = infinite
        showCursor: true, // Mostrar cursor palpitanto
        cursorChar: '|', // Caracter para el cursor
        contentType: 'html', // 'html' o 'null' para texto sin formato
    })

    const typed2 = new Typed('.typed2', {
        stringsElement: '#cadenas-texto2', // ID del elemento que contiene cadenas de texto a mostrar.
        typeSpeed: 10, // Velocidad en mlisegundos para poner una letra,
        startDelay: 0, // Tiempo de retraso en iniciar la animacion. Aplica tambien cuando termina y vuelve a iniciar,
        backSpeed: 5, // Velocidad en milisegundos para borrrar una letra,
        smartBackspace: true, // Eliminar solamente las palabras que sean nuevas en una cadena de texto.
        shuffle: false, // Alterar el orden en el que escribe las palabras.
        backDelay: 1500, // Tiempo de espera despues de que termina de escribir una palabra.
        loop: true, // Repetir el array de strings
        loopCount: false, // Cantidad de veces a repetir el array.  false = infinite
        showCursor: false, // Mostrar cursor palpitanto
        cursorChar: '|', // Caracter para el cursor
        contentType: 'html', // 'html' o 'null' para texto sin formato
    })

    const typed3 = new Typed('.typed3', {
        stringsElement: '#cadenas-texto3', // ID del elemento que contiene cadenas de texto a mostrar.
        typeSpeed: 30, // Velocidad en mlisegundos para poner una letra,
        startDelay: 0, // Tiempo de retraso en iniciar la animacion. Aplica tambien cuando termina y vuelve a iniciar,
        backSpeed: 15, // Velocidad en milisegundos para borrrar una letra,
        smartBackspace: true, // Eliminar solamente las palabras que sean nuevas en una cadena de texto.
        shuffle: false, // Alterar el orden en el que escribe las palabras.
        backDelay: 1500, // Tiempo de espera despues de que termina de escribir una palabra.
        loop: true, // Repetir el array de strings
        loopCount: false, // Cantidad de veces a repetir el array.  false = infinite
        showCursor: false, // Mostrar cursor palpitanto
        cursorChar: '|', // Caracter para el cursor
        contentType: 'html', // 'html' o 'null' para texto sin formato
    })
</script>

<section class="w-full h-full">
    <!-- option 1 -->
    <div class=" w-10/12 mx-auto max-w-4xl mb-0 lg:mb-8 flex">
        <h2 class="font-normal text-2xl lg:text-5xl text-center text-[#5e5e5e]">
            The <span class="typed"></span> Partner of Choice for Value-based Care
        </h2>
        
        <div id="cadenas-texto">
            <?php render_partners()?>
        </div>
    </div>

    <!-- option 2 -->
    <div class=" w-10/12 mx-auto max-w-4xl mb-0 lg:mb-8 flex">
        <h2 class="font-normal text-2xl lg:text-5xl text-center text-[#5e5e5e] flex">
            The 
            <div class="w-[450px]">
                <span class="typed3"></span>
            </div>
            <span class="text-left">Partner of Choice for <span class="ml-[-8rem]">Value-based Care</span></span>
        </h2>
        
        <div id="cadenas-texto3">
            <?php render_partners()?>
        </div>
    </div>

    <!-- option 3 -->
    <div class=" w-10/12 mx-auto max-w-4xl mb-0 lg:mb-8 flex">
        <h2 class="font-normal text-2xl lg:text-5xl text-center text-[#5e5e5e]">
            <span class="typed2"></span>
        </h2>
        
        <div id="cadenas-texto2">
            <?php render_partners2()?>
        </div>
    </div>

    <div class="w-7/12 mx-auto pb-20 pt-12 flex justify-center">
        <?php the_field('description')?>
    </div>

    <div class="w-full h-full bg-light-blue-background">
        <div class="cards__container w-11/12 mx-auto flex py-16 max-w-7xl">
            <?php render_cards()?>
        </div>
    </div>
</section>