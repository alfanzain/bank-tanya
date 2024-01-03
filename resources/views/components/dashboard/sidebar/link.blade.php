<div>
    <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors {{ Request::is('user-profile') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '' }}"
        href="{{ url('user-profile') }}">
        <div
            class="{{ Request::is('user-profile') ? ' bg-gradient-fuchsia' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

            <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>User Profile</title>
                <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Rounded-Icons" transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF"
                        fill-rule="nonzero">
                        <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                            <g id="customer-support" transform="translate(1.000000, 0.000000)">
                                <path class="{{ Request::is('user-profile') ? '' : 'fill-slate-800' }}"
                                    d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"
                                    id="Path" opacity="0.59858631"></path>
                                <path class="{{ Request::is('user-profile') ? '' : 'fill-slate-800' }}"
                                    d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"
                                    id="Path"></path>
                                <path class="{{ Request::is('user-profile') ? '' : 'fill-slate-800' }}"
                                    d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"
                                    id="Path"></path>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>


        </div>
        <span
            class="{{ Request::is('rtl') ? 'mr-1' : 'ml-1' }} duration-300 opacity-100 pointer-events-none ease-soft">User
            Profile</span>
    </a>
</div>
