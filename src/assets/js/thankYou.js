jQuery(document).ready(function ($) {
  function downloadDocument() {
    const { search } = new URL(location.href);
    const searchUrl = new URLSearchParams(search);
    const form = searchUrl.get('form');
    const link = document.getElementById(`${form}_case_study`);
    link.click();
  }
  const { location: { href } } = window;
  if (href.includes("thank-you") && href.includes('?form')) {
    downloadDocument()
  }
});
