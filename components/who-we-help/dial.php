<?php
function get_dial_animation()
{
    return '
        <svg class="dial__animation" xmlns="http://www.w3.org/2000/svg" width="237" height="164" viewBox="0 0 237 164" fill="none">
            <g id="Group 1">
                <g id="path">
                    <path id="Rectangle 21"
                        d="M55.1919 27.305L72.9998 42.5002C35.0372 89.0002 75.7675 128.845 75.7675 128.845L62.0671 147.568C21.4364 108.717 33.0001 51.5 55.1919 27.305Z"
                        fill="#D9D9D9" />
                    <path id="Rectangle 22" d="M174 147L159 129C199.247 83 160 43 160 43L177.5 26C215.999 68 196 128 174 147Z"
                        fill="#205CDC" />
                    <path id="Rectangle 23"
                        d="M177.5 26L160 43C115 3.47834 72.5001 42.7557 72.5001 42.7557L55.0001 27.5C95.8575 -12.2102 150.5 0.499975 177.5 26Z"
                        fill="#F86C5C" />
                </g>
                <path id="pointer" fill-rule="evenodd" clip-rule="evenodd"
                    d="M111.682 87.5232L87.7186 118.041L115.518 90.9715C117.182 91.2904 118.967 90.7555 120.183 89.4035C122.029 87.3498 121.86 84.1885 119.806 82.3425C117.753 80.4965 114.591 80.6648 112.745 82.7186C111.53 84.0705 111.188 85.9025 111.682 87.5232ZM113.985 83.8327C115.216 82.4636 117.323 82.3513 118.692 83.582C120.061 84.8127 120.174 86.9202 118.943 88.2894C117.712 89.6585 115.605 89.7708 114.236 88.5401C112.866 87.3094 112.754 85.2019 113.985 83.8327Z"
                    fill="#D9D9D9" />
                <path id="30"
                    d="M37.8523 28.1193C37.2898 28.1193 36.7884 28.0227 36.348 27.8295C35.9105 27.6364 35.5625 27.3679 35.304 27.0241C35.0483 26.6776 34.9091 26.2756 34.8864 25.8182H35.9602C35.983 26.0994 36.0795 26.3423 36.25 26.5469C36.4205 26.7486 36.6435 26.9048 36.919 27.0156C37.1946 27.1264 37.5 27.1818 37.8352 27.1818C38.2102 27.1818 38.5426 27.1165 38.8324 26.9858C39.1222 26.8551 39.3494 26.6733 39.5142 26.4403C39.679 26.2074 39.7614 25.9375 39.7614 25.6307C39.7614 25.3097 39.6818 25.027 39.5227 24.7827C39.3636 24.5355 39.1307 24.3423 38.8239 24.2031C38.517 24.0639 38.142 23.9943 37.6989 23.9943H37V23.0568H37.6989C38.0455 23.0568 38.3494 22.9943 38.6108 22.8693C38.875 22.7443 39.081 22.5682 39.2287 22.3409C39.3793 22.1136 39.4545 21.8466 39.4545 21.5398C39.4545 21.2443 39.3892 20.9872 39.2585 20.7685C39.1278 20.5497 38.9432 20.3793 38.7045 20.2571C38.4688 20.1349 38.1903 20.0739 37.8693 20.0739C37.5682 20.0739 37.2841 20.1293 37.017 20.2401C36.7528 20.348 36.5369 20.5057 36.3693 20.7131C36.2017 20.9176 36.1108 21.1648 36.0966 21.4545H35.0739C35.0909 20.9972 35.2287 20.5966 35.4872 20.2528C35.7457 19.9062 36.0838 19.6364 36.5014 19.4432C36.9219 19.25 37.3835 19.1534 37.8864 19.1534C38.4261 19.1534 38.8892 19.2628 39.2756 19.4815C39.6619 19.6974 39.9588 19.983 40.1662 20.3381C40.3736 20.6932 40.4773 21.0767 40.4773 21.4886C40.4773 21.9801 40.348 22.3991 40.0895 22.7457C39.8338 23.0923 39.4858 23.3324 39.0455 23.4659V23.5341C39.5966 23.625 40.027 23.8594 40.3366 24.2372C40.6463 24.6122 40.8011 25.0767 40.8011 25.6307C40.8011 26.1051 40.6719 26.5312 40.4134 26.9091C40.1577 27.2841 39.8082 27.5795 39.3651 27.7955C38.9219 28.0114 38.4176 28.1193 37.8523 28.1193ZM45.3906 28.1193C44.7486 28.1193 44.2017 27.9446 43.75 27.5952C43.2983 27.2429 42.9531 26.733 42.7145 26.0653C42.4759 25.3949 42.3565 24.5852 42.3565 23.6364C42.3565 22.6932 42.4759 21.8878 42.7145 21.2202C42.956 20.5497 43.3026 20.0384 43.7543 19.6861C44.2088 19.331 44.7543 19.1534 45.3906 19.1534C46.027 19.1534 46.571 19.331 47.0227 19.6861C47.4773 20.0384 47.8239 20.5497 48.0625 21.2202C48.304 21.8878 48.4247 22.6932 48.4247 23.6364C48.4247 24.5852 48.3054 25.3949 48.0668 26.0653C47.8281 26.733 47.483 27.2429 47.0312 27.5952C46.5795 27.9446 46.0327 28.1193 45.3906 28.1193ZM45.3906 27.1818C46.027 27.1818 46.5213 26.875 46.8736 26.2614C47.2259 25.6477 47.402 24.7727 47.402 23.6364C47.402 22.8807 47.321 22.2372 47.1591 21.706C47 21.1747 46.7699 20.7699 46.4688 20.4915C46.1705 20.2131 45.8111 20.0739 45.3906 20.0739C44.7599 20.0739 44.267 20.3849 43.9119 21.0071C43.5568 21.6264 43.3793 22.5028 43.3793 23.6364C43.3793 24.392 43.4588 25.0341 43.6179 25.5625C43.777 26.0909 44.0057 26.4929 44.304 26.7685C44.6051 27.044 44.9673 27.1818 45.3906 27.1818Z"
                    fill="white" />
                <path id="Poor"
                    d="M1.05682 87V78.2727H4.00568C4.69034 78.2727 5.25 78.3963 5.68466 78.6435C6.12216 78.8878 6.44602 79.2188 6.65625 79.6364C6.86648 80.054 6.97159 80.5199 6.97159 81.0341C6.97159 81.5483 6.86648 82.0156 6.65625 82.4361C6.44886 82.8565 6.12784 83.1918 5.69318 83.4418C5.25852 83.6889 4.7017 83.8125 4.02273 83.8125H1.90909V82.875H3.98864C4.45739 82.875 4.83381 82.794 5.1179 82.6321C5.40199 82.4702 5.60795 82.2514 5.7358 81.9759C5.86648 81.6974 5.93182 81.3835 5.93182 81.0341C5.93182 80.6847 5.86648 80.3722 5.7358 80.0966C5.60795 79.821 5.40057 79.6051 5.11364 79.4489C4.8267 79.2898 4.44602 79.2102 3.97159 79.2102H2.11364V87H1.05682ZM11.1264 87.1364C10.5355 87.1364 10.017 86.9957 9.57102 86.7145C9.12784 86.4332 8.78125 86.0398 8.53125 85.5341C8.28409 85.0284 8.16051 84.4375 8.16051 83.7614C8.16051 83.0795 8.28409 82.4844 8.53125 81.9759C8.78125 81.4673 9.12784 81.0724 9.57102 80.7912C10.017 80.5099 10.5355 80.3693 11.1264 80.3693C11.7173 80.3693 12.2344 80.5099 12.6776 80.7912C13.1236 81.0724 13.4702 81.4673 13.7173 81.9759C13.9673 82.4844 14.0923 83.0795 14.0923 83.7614C14.0923 84.4375 13.9673 85.0284 13.7173 85.5341C13.4702 86.0398 13.1236 86.4332 12.6776 86.7145C12.2344 86.9957 11.7173 87.1364 11.1264 87.1364ZM11.1264 86.233C11.5753 86.233 11.9446 86.1179 12.2344 85.8878C12.5241 85.6577 12.7386 85.3551 12.8778 84.9801C13.017 84.6051 13.0866 84.1989 13.0866 83.7614C13.0866 83.3239 13.017 82.9162 12.8778 82.5384C12.7386 82.1605 12.5241 81.8551 12.2344 81.6222C11.9446 81.3892 11.5753 81.2727 11.1264 81.2727C10.6776 81.2727 10.3082 81.3892 10.0185 81.6222C9.72869 81.8551 9.5142 82.1605 9.375 82.5384C9.2358 82.9162 9.16619 83.3239 9.16619 83.7614C9.16619 84.1989 9.2358 84.6051 9.375 84.9801C9.5142 85.3551 9.72869 85.6577 10.0185 85.8878C10.3082 86.1179 10.6776 86.233 11.1264 86.233ZM18.2866 87.1364C17.6957 87.1364 17.1772 86.9957 16.7312 86.7145C16.288 86.4332 15.9414 86.0398 15.6914 85.5341C15.4442 85.0284 15.3207 84.4375 15.3207 83.7614C15.3207 83.0795 15.4442 82.4844 15.6914 81.9759C15.9414 81.4673 16.288 81.0724 16.7312 80.7912C17.1772 80.5099 17.6957 80.3693 18.2866 80.3693C18.8775 80.3693 19.3945 80.5099 19.8377 80.7912C20.2837 81.0724 20.6303 81.4673 20.8775 81.9759C21.1275 82.4844 21.2525 83.0795 21.2525 83.7614C21.2525 84.4375 21.1275 85.0284 20.8775 85.5341C20.6303 86.0398 20.2837 86.4332 19.8377 86.7145C19.3945 86.9957 18.8775 87.1364 18.2866 87.1364ZM18.2866 86.233C18.7354 86.233 19.1048 86.1179 19.3945 85.8878C19.6843 85.6577 19.8988 85.3551 20.038 84.9801C20.1772 84.6051 20.2468 84.1989 20.2468 83.7614C20.2468 83.3239 20.1772 82.9162 20.038 82.5384C19.8988 82.1605 19.6843 81.8551 19.3945 81.6222C19.1048 81.3892 18.7354 81.2727 18.2866 81.2727C17.8377 81.2727 17.4684 81.3892 17.1786 81.6222C16.8888 81.8551 16.6744 82.1605 16.5352 82.5384C16.396 82.9162 16.3263 83.3239 16.3263 83.7614C16.3263 84.1989 16.396 84.6051 16.5352 84.9801C16.6744 85.3551 16.8888 85.6577 17.1786 85.8878C17.4684 86.1179 17.8377 86.233 18.2866 86.233ZM22.7876 87V80.4545H23.7592V81.4432H23.8274C23.9467 81.1193 24.1626 80.8565 24.4751 80.6548C24.7876 80.4531 25.1399 80.3523 25.532 80.3523C25.6058 80.3523 25.6982 80.3537 25.8089 80.3565C25.9197 80.3594 26.0036 80.3636 26.0604 80.3693V81.392C26.0263 81.3835 25.9482 81.3707 25.826 81.3537C25.7067 81.3338 25.5803 81.3239 25.4467 81.3239C25.1286 81.3239 24.8445 81.3906 24.5945 81.5241C24.3473 81.6548 24.1513 81.8366 24.0064 82.0696C23.8643 82.2997 23.7933 82.5625 23.7933 82.858V87H22.7876Z"
                    fill="white" />
                <path id="0"
                    d="M45.75 161.119C45.108 161.119 44.5611 160.945 44.1094 160.595C43.6577 160.243 43.3125 159.733 43.0739 159.065C42.8352 158.395 42.7159 157.585 42.7159 156.636C42.7159 155.693 42.8352 154.888 43.0739 154.22C43.3153 153.55 43.6619 153.038 44.1136 152.686C44.5682 152.331 45.1136 152.153 45.75 152.153C46.3864 152.153 46.9304 152.331 47.3821 152.686C47.8366 153.038 48.1832 153.55 48.4219 154.22C48.6634 154.888 48.7841 155.693 48.7841 156.636C48.7841 157.585 48.6648 158.395 48.4261 159.065C48.1875 159.733 47.8423 160.243 47.3906 160.595C46.9389 160.945 46.392 161.119 45.75 161.119ZM45.75 160.182C46.3864 160.182 46.8807 159.875 47.233 159.261C47.5852 158.648 47.7614 157.773 47.7614 156.636C47.7614 155.881 47.6804 155.237 47.5185 154.706C47.3594 154.175 47.1293 153.77 46.8281 153.491C46.5298 153.213 46.1705 153.074 45.75 153.074C45.1193 153.074 44.6264 153.385 44.2713 154.007C43.9162 154.626 43.7386 155.503 43.7386 156.636C43.7386 157.392 43.8182 158.034 43.9773 158.562C44.1364 159.091 44.3651 159.493 44.6634 159.768C44.9645 160.044 45.3267 160.182 45.75 160.182Z"
                    fill="white" />
                <path id="70"
                    d="M183.176 25L187.08 17.2784V17.2102H182.58V16.2727H188.17V17.2614L184.284 25H183.176ZM192.418 25.1193C191.776 25.1193 191.229 24.9446 190.777 24.5952C190.326 24.2429 189.98 23.733 189.742 23.0653C189.503 22.3949 189.384 21.5852 189.384 20.6364C189.384 19.6932 189.503 18.8878 189.742 18.2202C189.983 17.5497 190.33 17.0384 190.782 16.6861C191.236 16.331 191.782 16.1534 192.418 16.1534C193.054 16.1534 193.598 16.331 194.05 16.6861C194.505 17.0384 194.851 17.5497 195.09 18.2202C195.331 18.8878 195.452 19.6932 195.452 20.6364C195.452 21.5852 195.333 22.3949 195.094 23.0653C194.855 23.733 194.51 24.2429 194.059 24.5952C193.607 24.9446 193.06 25.1193 192.418 25.1193ZM192.418 24.1818C193.054 24.1818 193.549 23.875 193.901 23.2614C194.253 22.6477 194.429 21.7727 194.429 20.6364C194.429 19.8807 194.348 19.2372 194.186 18.706C194.027 18.1747 193.797 17.7699 193.496 17.4915C193.198 17.2131 192.838 17.0739 192.418 17.0739C191.787 17.0739 191.294 17.3849 190.939 18.0071C190.584 18.6264 190.407 19.5028 190.407 20.6364C190.407 21.392 190.486 22.0341 190.645 22.5625C190.804 23.0909 191.033 23.4929 191.331 23.7685C191.632 24.044 191.995 24.1818 192.418 24.1818Z"
                    fill="white" />
                <path id="Good"
                    d="M213.023 81C212.929 80.7131 212.805 80.456 212.652 80.2287C212.501 79.9986 212.321 79.8026 212.111 79.6406C211.903 79.4787 211.668 79.3551 211.403 79.2699C211.139 79.1847 210.849 79.142 210.534 79.142C210.017 79.142 209.547 79.2756 209.124 79.5426C208.7 79.8097 208.364 80.2031 208.114 80.723C207.864 81.2429 207.739 81.8807 207.739 82.6364C207.739 83.392 207.865 84.0298 208.118 84.5497C208.371 85.0696 208.713 85.4631 209.145 85.7301C209.577 85.9972 210.063 86.1307 210.602 86.1307C211.102 86.1307 211.543 86.0241 211.923 85.8111C212.307 85.5952 212.605 85.2912 212.818 84.8991C213.034 84.5043 213.142 84.0398 213.142 83.5057L213.466 83.5739H210.841V82.6364H214.165V83.5739C214.165 84.2926 214.011 84.9176 213.705 85.4489C213.401 85.9801 212.98 86.392 212.443 86.6847C211.909 86.9744 211.295 87.1193 210.602 87.1193C209.83 87.1193 209.151 86.9375 208.565 86.5739C207.983 86.2102 207.528 85.6932 207.202 85.0227C206.878 84.3523 206.716 83.5568 206.716 82.6364C206.716 81.946 206.808 81.3253 206.993 80.7741C207.18 80.2202 207.445 79.7486 207.786 79.3594C208.126 78.9702 208.53 78.6719 208.996 78.4645C209.462 78.2571 209.974 78.1534 210.534 78.1534C210.994 78.1534 211.423 78.223 211.821 78.3622C212.222 78.4986 212.578 78.6932 212.891 78.946C213.206 79.196 213.469 79.4957 213.679 79.8452C213.889 80.1918 214.034 80.5767 214.114 81H213.023ZM218.498 87.1364C217.907 87.1364 217.388 86.9957 216.942 86.7145C216.499 86.4332 216.152 86.0398 215.902 85.5341C215.655 85.0284 215.532 84.4375 215.532 83.7614C215.532 83.0795 215.655 82.4844 215.902 81.9759C216.152 81.4673 216.499 81.0724 216.942 80.7912C217.388 80.5099 217.907 80.3693 218.498 80.3693C219.088 80.3693 219.605 80.5099 220.049 80.7912C220.495 81.0724 220.841 81.4673 221.088 81.9759C221.338 82.4844 221.463 83.0795 221.463 83.7614C221.463 84.4375 221.338 85.0284 221.088 85.5341C220.841 86.0398 220.495 86.4332 220.049 86.7145C219.605 86.9957 219.088 87.1364 218.498 87.1364ZM218.498 86.233C218.946 86.233 219.316 86.1179 219.605 85.8878C219.895 85.6577 220.11 85.3551 220.249 84.9801C220.388 84.6051 220.458 84.1989 220.458 83.7614C220.458 83.3239 220.388 82.9162 220.249 82.5384C220.11 82.1605 219.895 81.8551 219.605 81.6222C219.316 81.3892 218.946 81.2727 218.498 81.2727C218.049 81.2727 217.679 81.3892 217.39 81.6222C217.1 81.8551 216.885 82.1605 216.746 82.5384C216.607 82.9162 216.537 83.3239 216.537 83.7614C216.537 84.1989 216.607 84.6051 216.746 84.9801C216.885 85.3551 217.1 85.6577 217.39 85.8878C217.679 86.1179 218.049 86.233 218.498 86.233ZM225.658 87.1364C225.067 87.1364 224.548 86.9957 224.102 86.7145C223.659 86.4332 223.312 86.0398 223.062 85.5341C222.815 85.0284 222.692 84.4375 222.692 83.7614C222.692 83.0795 222.815 82.4844 223.062 81.9759C223.312 81.4673 223.659 81.0724 224.102 80.7912C224.548 80.5099 225.067 80.3693 225.658 80.3693C226.249 80.3693 226.766 80.5099 227.209 80.7912C227.655 81.0724 228.001 81.4673 228.249 81.9759C228.499 82.4844 228.624 83.0795 228.624 83.7614C228.624 84.4375 228.499 85.0284 228.249 85.5341C228.001 86.0398 227.655 86.4332 227.209 86.7145C226.766 86.9957 226.249 87.1364 225.658 87.1364ZM225.658 86.233C226.107 86.233 226.476 86.1179 226.766 85.8878C227.055 85.6577 227.27 85.3551 227.409 84.9801C227.548 84.6051 227.618 84.1989 227.618 83.7614C227.618 83.3239 227.548 82.9162 227.409 82.5384C227.27 82.1605 227.055 81.8551 226.766 81.6222C226.476 81.3892 226.107 81.2727 225.658 81.2727C225.209 81.2727 224.839 81.3892 224.55 81.6222C224.26 81.8551 224.045 82.1605 223.906 82.5384C223.767 82.9162 223.697 83.3239 223.697 83.7614C223.697 84.1989 223.767 84.6051 223.906 84.9801C224.045 85.3551 224.26 85.6577 224.55 85.8878C224.839 86.1179 225.209 86.233 225.658 86.233ZM232.63 87.1364C232.085 87.1364 231.603 86.9986 231.186 86.723C230.768 86.4446 230.441 86.0526 230.206 85.5469C229.97 85.0384 229.852 84.4375 229.852 83.7443C229.852 83.0568 229.97 82.4602 230.206 81.9545C230.441 81.4489 230.77 81.0582 231.19 80.7827C231.61 80.5071 232.096 80.3693 232.647 80.3693C233.074 80.3693 233.41 80.4403 233.657 80.5824C233.907 80.7216 234.098 80.8807 234.228 81.0597C234.362 81.2358 234.466 81.3807 234.539 81.4943H234.625V78.2727H235.63V87H234.659V85.9943H234.539C234.466 86.1136 234.36 86.2642 234.224 86.446C234.088 86.625 233.893 86.7855 233.64 86.9276C233.387 87.0668 233.051 87.1364 232.63 87.1364ZM232.767 86.233C233.17 86.233 233.511 86.1278 233.789 85.9176C234.068 85.7045 234.279 85.4105 234.424 85.0355C234.569 84.6577 234.642 84.2216 234.642 83.7273C234.642 83.2386 234.571 82.8111 234.429 82.4446C234.287 82.0753 234.076 81.7884 233.798 81.5838C233.52 81.3764 233.176 81.2727 232.767 81.2727C232.341 81.2727 231.985 81.3821 231.701 81.6009C231.42 81.8168 231.208 82.1108 231.066 82.483C230.927 82.8523 230.858 83.267 230.858 83.7273C230.858 84.1932 230.929 84.6165 231.071 84.9972C231.216 85.375 231.429 85.6761 231.71 85.9006C231.994 86.1222 232.346 86.233 232.767 86.233Z"
                    fill="white" />
                <path id="100"
                    d="M185.972 152.273V161H184.915V153.381H184.864L182.733 154.795V153.722L184.915 152.273H185.972ZM191.328 161.119C190.686 161.119 190.139 160.945 189.688 160.595C189.236 160.243 188.891 159.733 188.652 159.065C188.413 158.395 188.294 157.585 188.294 156.636C188.294 155.693 188.413 154.888 188.652 154.22C188.893 153.55 189.24 153.038 189.692 152.686C190.146 152.331 190.692 152.153 191.328 152.153C191.964 152.153 192.509 152.331 192.96 152.686C193.415 153.038 193.761 153.55 194 154.22C194.241 154.888 194.362 155.693 194.362 156.636C194.362 157.585 194.243 158.395 194.004 159.065C193.766 159.733 193.42 160.243 192.969 160.595C192.517 160.945 191.97 161.119 191.328 161.119ZM191.328 160.182C191.964 160.182 192.459 159.875 192.811 159.261C193.163 158.648 193.339 157.773 193.339 156.636C193.339 155.881 193.259 155.237 193.097 154.706C192.938 154.175 192.707 153.77 192.406 153.491C192.108 153.213 191.749 153.074 191.328 153.074C190.697 153.074 190.205 153.385 189.849 154.007C189.494 154.626 189.317 155.503 189.317 156.636C189.317 157.392 189.396 158.034 189.555 158.562C189.714 159.091 189.943 159.493 190.241 159.768C190.543 160.044 190.905 160.182 191.328 160.182ZM198.828 161.119C198.186 161.119 197.639 160.945 197.188 160.595C196.736 160.243 196.391 159.733 196.152 159.065C195.913 158.395 195.794 157.585 195.794 156.636C195.794 155.693 195.913 154.888 196.152 154.22C196.393 153.55 196.74 153.038 197.192 152.686C197.646 152.331 198.192 152.153 198.828 152.153C199.464 152.153 200.009 152.331 200.46 152.686C200.915 153.038 201.261 153.55 201.5 154.22C201.741 154.888 201.862 155.693 201.862 156.636C201.862 157.585 201.743 158.395 201.504 159.065C201.266 159.733 200.92 160.243 200.469 160.595C200.017 160.945 199.47 161.119 198.828 161.119ZM198.828 160.182C199.464 160.182 199.959 159.875 200.311 159.261C200.663 158.648 200.839 157.773 200.839 156.636C200.839 155.881 200.759 155.237 200.597 154.706C200.438 154.175 200.207 153.77 199.906 153.491C199.608 153.213 199.249 153.074 198.828 153.074C198.197 153.074 197.705 153.385 197.349 154.007C196.994 154.626 196.817 155.503 196.817 156.636C196.817 157.392 196.896 158.034 197.055 158.562C197.214 159.091 197.443 159.493 197.741 159.768C198.043 160.044 198.405 160.182 198.828 160.182Z"
                    fill="white" />
            </g>
        </svg>
    ';
}
?>