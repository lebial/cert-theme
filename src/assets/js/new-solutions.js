import { makeElementsSameHeight } from "./utils/utils";

jQuery(document).ready(function ($) {
    function makeInsightsSameHeight() {
        makeElementsSameHeight($, '.cards__container .resources_video_card .expand__body');
    }
    const options = ['total-health-management', 'measurement-benchmarking', 'network-composition-care-delivery', 'network-reimbursement-cost-protection'];
    const { href } = window.location;
    if (options.some(el => href.includes(el))) {
        makeInsightsSameHeight();
    }
});
