<form role="search" method="get" id="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label class="input-group flex relative">
        <svg class=" w-9 absolute top-[6px] left-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 700 700" style="enable-background:new 0 0 700 700;" xml:space="preserve">
            <path class=" fill-slate-500" d="M562.5,467.8l-112-112c28.3-34.8,42.1-79.1,38.7-123.8c-3.4-44.7-23.8-86.4-57.1-116.4  c-33.2-30.1-76.7-46.2-121.5-45.2c-44.8,1.1-87.5,19.3-119.3,50.9c-31.6,31.8-49.8,74.5-50.9,119.3c-1.1,44.8,15.1,88.3,45.2,121.6  c30.1,33.2,71.8,53.7,116.4,57.1c44.7,3.4,89-10.5,123.8-38.7l112,112c4.5,3.9,10.7,5.2,16.3,3.5c5.7-1.7,10.1-6.1,11.8-11.8  C567.6,478.4,566.3,472.3,562.5,467.8L562.5,467.8z M216,344c-26.3-26.2-41-61.9-41-99c0-37.1,14.7-72.8,41-99  c26.3-26.3,61.9-41,99-41c37.1,0,72.8,14.8,99,41c26.3,26.3,41,61.9,41,99c0,37.1-14.8,72.7-41,99c-26.1,26.4-61.8,41.3-99,41.3  C277.7,385.4,242.1,370.5,216,344z" />
        </svg>
        <input type="search" class=" h-5" placeholder="Search" aria-label="search " name="s" id="search-input" value="<?php echo esc_attr(get_search_query()); ?>">
    </label>
</form>