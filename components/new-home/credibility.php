<?php
    function render_partners() {
        $partnerOpts = get_field('partners_title');
        echo '<div class="partners__subcontainer">';
            echo '<span class="partners__subcontainer--partner font-medium text-4xl mb-0 text-dark-blue-background text-center">' . $partnerOpts[0]['title'] . '</span>';
            // echo '<span class="partners__subcontainer--partner font-medium text-4xl mb-0 text-dark-blue-background text-center">' . $partnerOpts[1]['title'] . '</span>';
            // echo '<span class="partners__subcontainer--partner font-medium text-4xl mb-0 text-dark-blue-background text-center">' . $partnerOpts[2]['title'] . '</span>';
        echo '</div>';
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

<script>
    const text = document.querySelector(".sec-text");
    const textLoad = () => {
        setTimeout(() => {
            text.textContent = "Data"
        }, 0);
        setTimeout(() => {
            text.textContent = "AI"
        }, 4000);
        setTimeout(() => {
            text.textContent = "Analytics"
        }, 8000);
    }

    textLoad();
    setInterval(textLoad, 12000)
</script>

<section class="w-full h-full">
    <div class=" w-10/12 mx-auto max-w-4xl mb-0 lg:mb-8 flex">
        <span class="text first-text font-normal text-2xl lg:text-5xl text-center text-[#5e5e5e]">The</span>
        <div class="partners__container relative">
            <span class="text sec-text font-normal text-2xl lg:text-5xl text-center text-[#5e5e5e]">Data</span>
        </div>
        <span class="text sec-text font-normal text-2xl lg:text-5xl text-center text-[#5e5e5e] z-10">Partner of Choice for Value-based Care</span>
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