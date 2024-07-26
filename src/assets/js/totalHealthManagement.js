import { makeElementsSameHeight } from "./utils/utils";

//header logic
jQuery(document).ready(function ($) {
    function makeInsightsSameHeight() {
        makeElementsSameHeight($, '.resources_video_card');
    }

    const { href } = window.location;
    if (href.includes('total-health-management')) {
        makeInsightsSameHeight();
    }
});
