jQuery(document).ready(function ($) {
  function getFormParts() {
    const form = $('#form-contact_us_form');
    const body = form.find('.frm_form_fields ');
    const message = form.find('.frm_message');
    return { body, message };
  }

  function handleAfterFormSubmit() {
    $(document).on('frmFormComplete', function (event, form, response) {
      const { body: formBody } = getFormParts();
      $('.frm_form_fields').hide();
      formBody.hide();
    });
  }

  const { href } = window.location;
  if (href.includes("contact-us")) {
    handleAfterFormSubmit();
  };
});