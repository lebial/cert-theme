jQuery(document).ready(function ($) {
  function handleNextButtonClick(e) {
    const firstName = $('.schedule__first');
    const lastName = $('.schedule__last');
    const email = $('.schedule__email');
    const fields = [firstName, lastName, email];
    if (fields.some(field => !$(field).find('input').val())) return e.preventDefault();
    fields.forEach(field => $(field).addClass('hidden'));
    $('.schedule__optin').addClass('hidden');
    $('.optin__description').addClass('hidden');
    $($($(this).parent()).parent()).css('display', 'none');
    $('.date__picker').removeClass('hidden');
    $('.frm_submit').removeClass('hidden');
    $('.first__step__pill').removeClass('bg-dark-blue-background w-7/12 text-white');
    $('.first__step__pill').addClass('w-5/12');
    $('.second__step__pill').removeClass('w-5/12');
    $('.second__step__pill').addClass('bg-dark-blue-background w-7/12 text-white');
  }

  function addClickToNextButton() {
    const button = $('.next__step__button');
    button.click(handleNextButtonClick);
  }

  function handleSubmit() {
    const dateTime = $('input[type="datetime-local"]');
    $('.frm_button_submit').click(function (e) {
      if (!dateTime.val()) {
        e.preventDefault()
        if (!$('.error_message_form').length) $(dateTime.parent()).append('<span class="text-primary error_message_form">This field is required</span>')
        return e.stopPropagation();
      }
      $('#field_scheduledtime').val(dateTime.val());
    });
  }

  handleSubmit();
  addClickToNextButton();
});