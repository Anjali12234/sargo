<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
    <title>Sargo Paints</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <div class=" bg-blue-900 md:bg-slate-300 lg:yellow-900  h-9  text-black text-sm">
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 ">
                <div class=" flex gap-2 md:gap-1 items-center justify-center mt-1  mr-2 lg:ml-16">
                    <a href="#"><i class="ti ti-address-book"></i></a>
                    <a href="#">Design and Colour App</a>
                </div>
                <div class="hidden  md:flex  items-center gap-3 justify-center mt-1 ml-14">
                    <i class="ti ti-home-2 mt-1"></i><a href="#">Nepalgunj Fultekra # 6, Nepal</a>

                </div>
                <div class=" flex gap-3 items-center justify-center mt-1 ml-14">
                    <div class="hidden  lg:flex gap-1">
                        <span> <i class="ti ti-phone h-6 "></i></span>
                        <a href="#">+977 081-567896</a>
                    </div>

                    <button class="border rounded-lg px-2 py-1">
                        <a href="#">Enquiry Form</a>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <nav id="mainNavbar" class="">
        <div class='flex flex-wrap items-center justify-between px-1 py-3 gap-4 w-full  h-28'>
            <div class='flex items-center gap-4 px-10'>
                <a href="javascript:void(0)">
                    <img src="{{ asset('assets/frontend/static image/logo1.jpg') }}" alt="logo" class='w-44 h-20' />
                </a>

            </div>

            <div id="collapseMenu"
                class='max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50'>
                <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-black" viewBox="0 0 320.591 320.591">
                        <path
                            d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                            data-original="#000000"></path>
                        <path
                            d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                            data-original="#000000"></path>
                    </svg>
                </button>

                <ul
                    class='lg:flex lg:gap-x-10 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px]
                     max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
                    <li class='mb-6 hidden max-lg:block'>
                        <a href="javascript:void(0)"><img src="../img/logo1.png" alt="logo" class='w-36' />
                        </a>
                    </li>

                    <li class='group text-[14px] max-lg:border-b max-lg:px-3 max-lg:py-2 relative'>
                        <a href='javascript:void(0)'
                            class='hover:text-[#007bff] hover:fill-[#007bff] text-gray-500 font-semibold text-[18px] block'>Product<svg
                                xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                class="ml-1 inline-block" viewBox="0 0 24 24">
                                <path
                                    d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                    data-name="16" data-original="#000000" />
                            </svg>
                        </a>
                        <div
                            class='absolute lg:top-5 max-lg:top-8 -left-6 z-50 flex shadow-lg bg-white max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-8 group-hover:pb-8 group-hover:pt-6 transition-all duration-500'>
                            <div class="lg:min-w-[180px] max-lg:min-w-[140px]">
                                <h6 class="text-base text-[#007bff] font-bold">USA</h6>
                                <ul class='mt-3 pt-3 border-t border-1 space-y-3'>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>New
                                            York</a></li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>San
                                            Francisco</a></li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Houston</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Dallas</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Philadelphia</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>San
                                            Diego</a></li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Atlanta</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Austin</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Portland</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Denver</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="lg:min-w-[180px] max-lg:min-w-[140px]">
                                <h6 class="text-base text-[#007bff] font-bold">UK</h6>
                                <ul class='mt-3 pt-3 border-t border-1 space-y-3'>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>London</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Bristol</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Birmingham</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Liverpool</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Manchester</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Glasgow</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Edinburgh</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Leeds</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Leicester</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Sheffield</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h6 class="text-base text-[#007bff] font-bold">Canada</h6>
                                <ul class='mt-3 pt-3 border-t border-1 space-y-3'>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Toronto</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Calgary</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Ottawa</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Vancouver</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Montréal</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Edmonton</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Winnipeg</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Halifax</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Victoria</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Windsor</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class='group max-lg:border-b max-lg:py-3 relative'>
                        <a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-gray-600 text-[18px] font-semibold lg:hover:fill-[#007bff] block'>Ideas<svg
                                xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                class="ml-1 inline-block" viewBox="0 0 24 24">
                                <path
                                    d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                    data-name="16" data-original="#000000" />
                            </svg>
                        </a>
                        <ul
                            class='absolute shadow-lg bg-white space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                            <li class='border-b py-2 '><a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Foods</a>
                            </li>
                            <li class='border-b py-2 '>
                                <a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Sale</a>
                            </li>
                            <li class='border-b py-2 '><a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Marketing</a>
                            </li>
                            <li class='border-b py-2 '><a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Investment</a>
                            </li>
                        </ul>
                    </li>
                    <li class='group max-lg:border-b max-lg:py-3 relative'>
                        <a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-gray-600 text-[18px] font-semibold lg:hover:fill-[#007bff] block'>Services<svg
                                xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                class="ml-1 inline-block" viewBox="0 0 24 24">
                                <path
                                    d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                    data-name="16" data-original="#000000" />
                            </svg>
                        </a>
                        <ul
                            class='absolute shadow-lg bg-white space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                            <li class='border-b py-2 '><a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Foods</a>
                            </li>
                            <li class='border-b py-2 '>
                                <a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Sale</a>
                            </li>
                            <li class='border-b py-2 '><a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Marketing</a>
                            </li>
                            <li class='border-b py-2 '><a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Investment</a>
                            </li>
                        </ul>
                    </li>
                    <li class='max-lg:border-b max-lg:py-3'><a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-gray-600 text-[18px] font-semibold block'>BathSense</a>
                    </li>

                </ul>
            </div>

            <div class='flex items-center space-x-8 max-lg:ml-auto'>
                <div
                    class='flex xl:w-80 max-xl:w-full bg-gray-100 px-6 py-3 rounded outline outline-transparent focus-within:outline-[#007bff] focus-within:bg-transparent'>
                    <input type='text' placeholder='Search something...'
                        class='w-full text-sm bg-transparent rounded outline-none pr-2' />
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="16px"
                        class="cursor-pointer fill-gray-400">
                        <path
                            d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
                        </path>
                    </svg>
                </div>

                <button id="toggleOpen" class='lg:hidden'>
                    <svg class="w-7 h-7 z-10" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>

            </div>
        </div>
    </nav>
    <div class="fixed top-0 left-0 right-0 z-50 hidden bg-white shadow-lg shadow-slate-300 " id="stickyNavbar">
        <div class='flex flex-wrap items-center justify-between px-10 py-2 gap-4 w-full'>
            <div class='flex items-center gap-4 px-10'>
                <a href="javascript:void(0)">
                    <img src="{{ asset('assets/frontend/static image/logo1.jpg') }}" alt="logo" class='w-44 h-20' />
                </a>
                {{-- <div class="h-20 border-l border-gray-300"></div> <!-- Vertical line -->
                <div class="flex flex-col text-black">
                    <span class="text-4xl font-bold tracking-widest">SVS</span>
                    <span class="text-xl ">Nepalgunj,Banke</span>
                </div> --}}
            </div>

            <div id="collapseMenu"
                class='max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50'>
                <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-white" viewBox="0 0 320.591 320.591">
                        <path
                            d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                            data-original="#000000"></path>
                        <path
                            d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                            data-original="#000000"></path>
                    </svg>
                </button>

                <ul
                    class='lg:flex lg:gap-x-10 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px]
                     max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
                    <li class='mb-6 hidden max-lg:block'>
                        <a href="javascript:void(0)"><img src="../img/logo1.png" alt="logo" class='w-36' />
                        </a>
                    </li>

                    <li class='group text-[14px] max-lg:border-b max-lg:px-3 max-lg:py-2 relative'>
                        <a href='javascript:void(0)'
                            class='hover:text-[#007bff] hover:fill-[#007bff] text-gray-500 font-semibold text-[18px] block'>Product<svg
                                xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                class="ml-1 inline-block" viewBox="0 0 24 24">
                                <path
                                    d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                    data-name="16" data-original="#000000" />
                            </svg>
                        </a>
                        <div
                            class='absolute lg:top-5 max-lg:top-8 -left-6 z-50 flex shadow-lg bg-white max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-8 group-hover:pb-8 group-hover:pt-6 transition-all duration-500'>
                            <div class="lg:min-w-[180px] max-lg:min-w-[140px]">
                                <h6 class="text-base text-[#007bff] font-bold">USA</h6>
                                <ul class='mt-3 pt-3 border-t border-1 space-y-3'>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>New
                                            York</a></li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>San
                                            Francisco</a></li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Houston</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Dallas</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Philadelphia</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>San
                                            Diego</a></li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Atlanta</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Austin</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Portland</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Denver</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="lg:min-w-[180px] max-lg:min-w-[140px]">
                                <h6 class="text-base text-[#007bff] font-bold">UK</h6>
                                <ul class='mt-3 pt-3 border-t border-1 space-y-3'>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>London</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Bristol</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Birmingham</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Liverpool</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Manchester</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Glasgow</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Edinburgh</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Leeds</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Leicester</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Sheffield</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h6 class="text-base text-[#007bff] font-bold">Canada</h6>
                                <ul class='mt-3 pt-3 border-t border-1 space-y-3'>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Toronto</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Calgary</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Ottawa</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Vancouver</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Montréal</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Edmonton</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Winnipeg</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Halifax</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Victoria</a>
                                    </li>
                                    <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                            class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Windsor</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class='group max-lg:border-b max-lg:py-3 relative'>
                        <a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-gray-600 text-[18px] font-semibold lg:hover:fill-[#007bff] block'>Ideas<svg
                                xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                class="ml-1 inline-block" viewBox="0 0 24 24">
                                <path
                                    d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                    data-name="16" data-original="#000000" />
                            </svg>
                        </a>
                        <ul
                            class='absolute shadow-lg bg-white space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                            <li class='border-b py-2 '><a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Foods</a>
                            </li>
                            <li class='border-b py-2 '>
                                <a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Sale</a>
                            </li>
                            <li class='border-b py-2 '><a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Marketing</a>
                            </li>
                            <li class='border-b py-2 '><a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Investment</a>
                            </li>
                        </ul>
                    </li>
                    <li class='group max-lg:border-b max-lg:py-3 relative'>
                        <a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-gray-600 text-[18px] font-semibold lg:hover:fill-[#007bff] block'>Services<svg
                                xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                class="ml-1 inline-block" viewBox="0 0 24 24">
                                <path
                                    d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                    data-name="16" data-original="#000000" />
                            </svg>
                        </a>
                        <ul
                            class='absolute shadow-lg bg-white space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                            <li class='border-b py-2 '><a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Foods</a>
                            </li>
                            <li class='border-b py-2 '>
                                <a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Sale</a>
                            </li>
                            <li class='border-b py-2 '><a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Marketing</a>
                            </li>
                            <li class='border-b py-2 '><a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Investment</a>
                            </li>
                        </ul>
                    </li>
                    <li class='max-lg:border-b max-lg:py-3'><a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-gray-600 text-[18px] font-semibold block'>BathSense</a>
                    </li>

                </ul>
            </div>

            <div class='flex items-center space-x-8 max-lg:ml-auto'>
                <div class='group max-lg:border-b max-lg:py-3 relative mr-40'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24"
                        class="hover:fill-[#007bff] fill-white">
                        <circle cx="10" cy="7" r="6" data-original="#000000" />
                        <path
                            d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z"
                            data-original="#000000" />
                    </svg>
                    <ul
                        class='absolute shadow-lg space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-[15px] font-bold block'>About</a>
                        </li>

                    </ul>
                </div>
                <button id="toggleOpen" class='lg:hidden'>
                    <svg class="w-7 h-7 z-10" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Carousel --}}

    <!-- Slider -->
    <div data-hs-carousel='{
        "loadingClasses": "opacity-0",
        "dotsItemClasses": "hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500",
        "isAutoPlay": true
      }'
        class="relative">
        <div class="hs-carousel relative overflow-hidden w-full min-h-96 bg-white ">
            <div
                class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                <div class="hs-carousel-slide">
                    {{-- <div class="flex justify-center h-full bg-gray-100 p-6 dark:bg-neutral-900"> --}}
                    <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(15).jpg" alt="First slide"
                        class="w-full h-full object-cover ">
                    {{-- </div> --}}
                </div>
                <div class="hs-carousel-slide">
                    {{-- <div class="flex justify-center h-full bg-gray-200 p-6 dark:bg-neutral-800"> --}}
                    <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(22).jpg" alt="Second slide"
                        class="w-full h-full object-cover ">
                    {{-- </div> --}}
                </div>
                <div class="hs-carousel-slide">
                    {{-- <div class="flex justify-center h-full bg-gray-300 p-6 dark:bg-neutral-700"> --}}
                    <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(23).jpg" alt="Third slide"
                        class="w-full h-full object-cover ">
                    {{-- </div> --}}
                </div>
            </div>
        </div>

        <button type="button"
            class="hs-carousel-prev hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-s-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
            <span class="text-2xl" aria-hidden="true">
                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
            </span>
            <span class="sr-only">Previous</span>
        </button>
        <button type="button"
            class="hs-carousel-next hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-e-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
            <span class="sr-only">Next</span>
            <span class="text-2xl" aria-hidden="true">
                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </span>
        </button>

        <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 space-x-2"></div>
    </div>

    <!-- End Slider -->
    <div class="mx-20 my-20">

        <section>
            <div class="text-center ">
                <h1 class="font-bold text-3xl">Exquisite Finishes For Your Dream Home</h1>
            </div>
            <style>
                .carousel-item {
                    display: none;
                }

                .carousel-item.active {
                    display: block;
                }
            </style>
            <div class="max-w-5xl">
                <!-- Main image display -->
                <div class="relative bg-white shadow-lg  overflow-hidden mt-10">
                    <div class="carousel-container relative">
                        <img src="https://www.qatarliving.com/_next/image?url=https://www.qatarliving.com/q/s3/files/styles/detail_page_watermark_bottom_right/s3/vehicles/2024/09/09/7708756/B333BB7C-34D1-4574-A85B-B60F1BA14055.jpeg&w=1920&q=75"
                            alt="Room 1" class="carousel-item active w-full h-[24rem] object-cover">
                        <img src="https://www.qatarliving.com/_next/image?url=https://www.qatarliving.com/q/s3/files/styles/detail_page_watermark_bottom_right/s3/vehicles/2024/09/09/7708756/FF2AA9A9-7291-42D4-A8C1-C26F815149F8.jpeg&w=1920&q=75"
                            alt="Room 2" class="carousel-item w-full h-[24rem]  object-cover">
                        <img src="https://www.qatarliving.com/_next/image?url=https://www.qatarliving.com/q/s3/files/styles/detail_page_watermark_bottom_right/s3/vehicles/2024/09/09/7708756/B1BE1B8C-35DF-4BF7-B0B1-24D52F522B33.jpeg&w=1920&q=75"
                            alt="Room 3" class="carousel-item w-full h-[24rem]  object-cover">
                        <!-- Add more images as needed -->
                    </div>
                    <button
                        class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-r"
                        onclick="changeSlide(-1)">❮</button>
                    <button
                        class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-l"
                        onclick="changeSlide(1)">❯</button>
                    <div class="absolute top-0 right-0 bg-teal-500 text-white px-2 py-1 m-2 text-xs">FEATURED
                    </div>
                </div>

                <!-- Thumbnails -->
                <div class="flex space-x-2 mt-4 overflow-x-auto pb-2">
                    <img src="https://www.qatarliving.com/_next/image?url=https://www.qatarliving.com/q/s3/files/styles/detail_page_watermark_bottom_right/s3/vehicles/2024/09/09/7708756/B1BE1B8C-35DF-4BF7-B0B1-24D52F522B33.jpeg&w=1920&q=75"
                        alt="Thumbnail 1" class="w-24 h-16 object-cover cursor-pointer rounded"
                        onclick="setSlide(0)">
                    <img src="https://www.qatarliving.com/_next/image?url=https://www.qatarliving.com/q/s3/files/styles/detail_page_watermark_bottom_right/s3/vehicles/2024/09/09/7708756/FF2AA9A9-7291-42D4-A8C1-C26F815149F8.jpeg&w=1920&q=75"
                        alt="Thumbnail 2" class="w-24 h-16 object-cover cursor-pointer rounded"
                        onclick="setSlide(1)">
                    <img src="https://www.qatarliving.com/_next/image?url=https://www.qatarliving.com/q/s3/files/styles/detail_page_watermark_bottom_right/s3/vehicles/2024/09/09/7708756/B333BB7C-34D1-4574-A85B-B60F1BA14055.jpeg&w=1920&q=75"
                        alt="Thumbnail 3" class="w-24 h-16 object-cover cursor-pointer rounded"
                        onclick="setSlide(2)">
                    <!-- Add more thumbnails as needed -->
                </div>
            </div>
        </section>
    </div>


    {{-- <div>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus ratione porro quidem deserunt hic iure doloremque? Sit harum error soluta minus excepturi enim eos blanditiis! Quod cumque velit optio officia!</p>
    </div> --}}

    <script>
        const mainNavbar = document.getElementById('mainNavbar');
        const stickyNavbar = document.getElementById('stickyNavbar');
        const headerHeight = document.querySelector('header').offsetHeight + mainNavbar.offsetHeight;

        window.addEventListener('scroll', () => {
            if (window.scrollY > headerHeight) {
                stickyNavbar.classList.remove('hidden');
            } else {
                stickyNavbar.classList.add('hidden');
            }
        });

        var toggleOpen = document.getElementById('toggleOpen');
        var toggleClose = document.getElementById('toggleClose');
        var collapseMenu = document.getElementById('collapseMenu');

        function handleClick() {
            if (collapseMenu.style.display === 'block') {
                collapseMenu.style.display = 'none';
            } else {
                collapseMenu.style.display = 'block';
            }
        }

        toggleOpen.addEventListener('click', handleClick);
        toggleClose.addEventListener('click', handleClick);
    </script>
     <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-item');

        function showSlide(n) {
            slides[currentSlide].classList.remove('active');
            currentSlide = (n + slides.length) % slides.length;
            slides[currentSlide].classList.add('active');
        }

        function changeSlide(n) {
            showSlide(currentSlide + n);
        }

        function setSlide(n) {
            showSlide(n);
        }
    </script>
</body>

</html>
