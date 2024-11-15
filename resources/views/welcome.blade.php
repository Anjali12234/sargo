<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
    <title>Sargo Paints</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header>
        <div class=" bg-blue-900 md:bg-red-900 lg:yellow-900  h-11  text-white text-sm">
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
    <nav id="mainNavbar" class="shadow-md shadow-neutral-300">
        <div class='flex flex-wrap items-center justify-between px-1 py-3 gap-4 w-full'>
            <div class='flex items-center gap-4 px-10'>
                <a href="javascript:void(0)">
                    <img src="{{ asset('assets/frontend/static image/logo1.jpg') }}" alt="logo" class='w-40 h-10' />
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
                    class='lg:flex lg:gap-x-10 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
                    <li class='mb-6 hidden max-lg:block'>
                        <a href="javascript:void(0)"><img src="../img/logo1.png" alt="logo" class='w-36' />
                        </a>
                    </li>

                    <li class='group text-[14px] max-lg:border-b max-lg:px-3 max-lg:py-2 relative'>
                        <a href='javascript:void(0)'
                            class='hover:text-[#007bff] hover:fill-[#007bff] text-gray-500 font-bold text-[15px] block'>Product<svg
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
                            class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold lg:hover:fill-[#007bff] block'>Ideas<svg
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
                            class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold lg:hover:fill-[#007bff] block'>Services<svg
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
                            class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>BathSense</a>
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
    <div class="fixed top-0 left-0 right-0 z-50 hidden bg-blue-900 bg-opacity-90" id="stickyNavbar">
        <div class='flex flex-wrap items-center justify-between px-10 py-2 gap-4 w-full'>
            <div class='flex items-center gap-4 px-10'>
                <a href="javascript:void(0)">
                    <img src="../img/logo1.png" alt="logo" class='w-20 h-20' />
                </a>
                <div class="h-20 border-l border-gray-300"></div> <!-- Vertical line -->
                <div class="flex flex-col text-white">
                    <span class="text-4xl font-bold tracking-widest">SVS</span>
                    <span class="text-xl ">Nepalgunj,Banke</span>
                </div>
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
                    class='lg:flex lg:gap-x-10 max-lg:space-y-3 text-white max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
                    <li class='mb-6 hidden max-lg:block'>
                        <a href="javascript:void(0)"><img src="../img/logo1.png" alt="logo" class='w-36' />
                        </a>
                    </li>
                    <li class='max-lg:border-b max-lg:py-3'><a href='javascript:void(0)'
                            class='hover:text-blue-600 text-[15px] font-bold block'>Home</a></li>
                    <li class='group max-lg:border-b max-lg:py-3 relative'>
                        <a href='javascript:void(0)'
                            class='hover:text-[#007bff]  text-[15px] font-bold lg:hover:fill-[#007bff] block'>About
                            Us<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                class="ml-1 inline-block" fill="white" viewBox="0 0 24 24">
                                <path
                                    d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                    data-name="16" data-original="#000000" />
                            </svg>
                        </a>
                        <ul
                            class='absolute shadow-lg text-black bg-white space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                            <li class='border-b py-2 '><a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-[15px] font-bold block'>About</a>
                            </li>
                            <li class='border-b py-2 '><a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-[15px] font-bold block'>Contact</a>
                            </li>
                            <li class='border-b py-2 '><a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-[15px] font-bold block'>Login</a>
                            </li>
                            <li class='border-b py-2 '><a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-[15px] font-bold block'>Sign
                                    up</a></li>
                            <li class='border-b py-2 '><a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-[15px] font-bold block'>Blog</a>
                            </li>
                        </ul>
                    </li>
                    <li class='group max-lg:border-b max-lg:py-3 relative'>
                        <a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-[15px] font-bold lg:hover:fill-[#007bff] block'>Academics<svg
                                xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                class="ml-1 inline-block" fill="white" viewBox="0 0 24 24">
                                <path
                                    d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                    data-name="16" data-original="#000000" />
                            </svg>
                        </a>
                        <ul
                            class='absolute shadow-lg text-black bg-white space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                            <li class='border-b py-2 '><a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-[15px] font-bold block'>Foods</a>
                            </li>
                            <li class='border-b py-2 '>
                                <a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-[15px] font-bold block'>Sale</a>
                            </li>
                            <li class='border-b py-2 '><a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-[15px] font-bold block'>Marketing</a>
                            </li>
                            <li class='border-b py-2 '><a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-[15px] font-bold block'>Investment</a>
                            </li>
                        </ul>
                    </li>
                    <li class='group max-lg:border-b max-lg:py-3 relative'>
                        <a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-[15px] font-bold lg:hover:fill-[#007bff] block'>Admission<svg
                                xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                class="ml-1 inline-block" fill="white" viewBox="0 0 24 24">
                                <path
                                    d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                    data-name="16" data-original="#000000" />
                            </svg>
                        </a>
                        <ul
                            class='absolute shadow-lg text-black bg-white space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                            <li class='border-b py-2 '><a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-[15px] font-bold block'>Foods</a>
                            </li>
                            <li class='border-b py-2 '>
                                <a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-[15px] font-bold block'>Sale</a>
                            </li>
                            <li class='border-b py-2 '><a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-[15px] font-bold block'>Marketing</a>
                            </li>
                            <li class='border-b py-2 '><a href='javascript:void(0)'
                                    class='hover:text-[#007bff] text-[15px] font-bold block'>Investment</a>
                            </li>
                        </ul>
                    </li>
                    <li class='max-lg:border-b max-lg:py-3'><a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-[15px] font-bold block'>Activities</a>
                    </li>
                    <li class='max-lg:border-b max-lg:py-3'><a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-[15px] font-bold block'>About</a>
                    </li>
                    <li class='max-lg:border-b max-lg:py-3'><a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-[15px] font-bold block'>Contact</a>
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

    <div id="carouselExampleCaptions" class="relative" data-twe-carousel-init data-twe-ride="carousel">
        <!--Carousel indicators-->
        <div class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
            data-twe-carousel-indicators>
            <button type="button" data-twe-target="#carouselExampleCaptions" data-twe-slide-to="0"
                data-twe-carousel-active
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-twe-target="#carouselExampleCaptions" data-twe-slide-to="1"
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                aria-label="Slide 2"></button>
            <button type="button" data-twe-target="#carouselExampleCaptions" data-twe-slide-to="2"
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                aria-label="Slide 3"></button>
        </div>

        <!--Carousel items-->
        <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
            <!--First item-->
            <div class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                data-twe-carousel-active data-twe-carousel-item style="backface-visibility: hidden">
                <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(15).jpg" class="block w-full"
                    alt="..." />
                <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                    <h5 class="text-xl">First slide label</h5>
                    <p>
                        Some representative placeholder content for the first slide.
                    </p>
                </div>
            </div>
            <!--Second item-->
            <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                data-twe-carousel-item style="backface-visibility: hidden">
                <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(22).jpg" class="block w-full"
                    alt="..." />
                <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                    <h5 class="text-xl">Second slide label</h5>
                    <p>
                        Some representative placeholder content for the second slide.
                    </p>
                </div>
            </div>
            <!--Third item-->
            <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                data-twe-carousel-item style="backface-visibility: hidden">
                <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(23).jpg" class="block w-full"
                    alt="..." />
                <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                    <h5 class="text-xl">Third slide label</h5>
                    <p>
                        Some representative placeholder content for the third slide.
                    </p>
                </div>
            </div>
        </div>

        <!--Carousel controls - prev item-->
        <button
            class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
            type="button" data-twe-target="#carouselExampleCaptions" data-twe-slide="prev">
            <span class="inline-block h-8 w-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </span>
            <span
                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
        </button>
        <!--Carousel controls - next item-->
        <button
            class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
            type="button" data-twe-target="#carouselExampleCaptions" data-twe-slide="next">
            <span class="inline-block h-8 w-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </span>
            <span
                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
        </button>
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


        var splide = new Splide('.splide', {
            type: 'loop',
            perPage: 3,
            autoplay: true,
        });

        splide.mount();

        // Initialization for ES Users
        //Carousel
        import {
            Carousel,
            initTWE,
        } from "tw-elements";

        initTWE({
            Carousel
        });
    </script>
</body>

</html>
