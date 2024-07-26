import { makeElementsSameHeight } from "./utils/utils";

//header logic
jQuery(document).ready(function ($) {
    function makeInsightsSameHeight() {
        makeElementsSameHeight($, '.expand__body');
    }

    const { href } = window.location;
    if (href.includes('total-health-management')) {
        makeInsightsSameHeight();
    }
});
