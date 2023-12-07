jQuery(document).ready(function ($) {

  function getFormParts() {
    const form = $('#form_scheduledemoform');
    const body = form.find('.frm_form_fields ');
    const message = form.find('.frm_message');
    return { body, message };
  }

  function handleScheduleFormToggle() {
    const buttons = document.querySelectorAll(".schedule__demo__button");
    const closeButton = $(".schedule__demo__modal__close__button");
    const sideMenuCloseButton = $(".menu__side__bar__close");
    const contactModal = $(".schedule__demo__modal");

    buttons.forEach((button) =>
      $(button).click(function () {
        const urlActual = window.location.href.split("#")[0];
        const select = document.getElementById("field_meetingoptionsdrop");
        if (select) {
          const dropdownOptions = document.querySelectorAll(
            "#field_meetingoptionsdrop option"
          );
          if (dropdownOptions.length > 1) {
            select.value = $(dropdownOptions[1]).attr("value");
          }
        }
        contactModal.css("display", "flex");
        contactModal.animate({ opacity: 1 });
      })
    );
    closeButton.click(function () {
      const form = getFormParts();
      contactModal.animate({ opacity: 0 }, 400, function () {
        contactModal.css("display", "none");
        form.message.hide();
        form.body.show();
      });
    });



    //handle esc to close modal
    $(document).keydown(function (e) {
      const code = e.keyCode || e.which;
      if (code === 27) {
        closeButton.click();
        sideMenuCloseButton.click();
      }
    });

    //handle overlayClick Close
    $('.schedule__demo__modal').click((e) => {
      if ($(e.target).is($('.schedule__demo__modal'))) closeButton.click();
    })
  }

  function handleAfterFormSubmit() {
    $(document).on('frmFormComplete', function (event, form, response) {
      const { body: formBody } = getFormParts();
      formBody.hide();
    });
  }

  // Verify the URL when the page is loaded
  if (window.location.hash === "#schedule-meeting") {
    $(".schedule__demo__modal").css("display", "flex").animate({ opacity: 1 });
  }

  handleScheduleFormToggle();
  handleAfterFormSubmit();
});