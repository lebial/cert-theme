<div class="case__study__modal w-full flex h-screen fixed top-0 left-0 bg-black bg-opacity-60 justify-center items-center z-[999]" style="display: none;">
    <div class="case__study__modal__body w-11/12 md:w-1/2 relative h-fit bg-white p-3 md:p-32 ">
        <button type="button" class="case__modal__close__button absolute right-4 top-4">X</button>
        <div class="">
            <?php echo FrmFormsController::get_form_shortcode(array('id' => get_field('modal_form_id'), 'title' => true, 'description' => true)) ?>
        </div>
    </div>
</div>