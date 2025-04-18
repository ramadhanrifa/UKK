    <!-- component -->
    <div x-data="setup()" x-init="$refs.loading.classList.add('hidden');" @resize.window="watchScreen()">
        <div class="flex max-h-screen antialiased text-gray-900 dark:bg-dark dark:text-light">
            <!-- Loading screen -->
            <div x-ref="loading"
                class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-indigo-800">
                Loading.....
            </div>

            <!-- Sidebar -->
            <div class="flex flex-shrink-0 transition-all">
                <div x-show="isSidebarOpen" @click="isSidebarOpen = false"
                    class="fixed inset-0 z-10 bg-black bg-opacity-50 lg:hidden"></div>
                <div x-show="isSidebarOpen" class="fixed inset-y-0 z-10 w-16 bg-white"></div>

                <!-- Mobile bottom bar -->
                <nav aria-label="Options"
                    class="fixed inset-x-0 bottom-0 flex flex-row-reverse items-center justify-between px-4 py-2 bg-white border-t border-indigo-100 sm:hidden shadow-t rounded-t-3xl">
                    <!-- Logo -->
                    <a href="#">
                        <img class="w-10 h-auto"
                            src="https://raw.githubusercontent.com/kamona-ui/dashboard-alpine/main/public/assets/images/logo.png"
                            alt="K-UI" />
                    </a>
                </nav>

                <!-- Left mini bar -->
                <nav aria-label="Options"
                    class="z-20 flex-col items-center flex-shrink-0 hidden w-16 py-4 bg-white border-r-2 border-indigo-100 shadow-md sm:flex rounded-tr-3xl rounded-br-3xl">
                    <!-- Logo -->
                    <div class="flex-shrink-0 py-4">
                        <a href="#">
                            <img class="w-10 h-auto"
                                src="https://raw.githubusercontent.com/kamona-ui/dashboard-alpine/main/public/assets/images/logo.png"
                                alt="K-UI" />
                        </a>
                    </div>
                    <div class="flex flex-col items-center flex-1 p-2 space-y-4">
                        <!-- Menu button -->
                        <button
                            @click="(isSidebarOpen && currentSidebarTab == 'linksTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'"
                            class="p-2 transition-colors rounded-lg shadow-md hover:bg-indigo-800 hover:text-white focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2"
                            :class="(isSidebarOpen && currentSidebarTab == 'linksTab') ? 'text-white bg-indigo-600' :
                            'text-gray-500 bg-white'">
                            <span class="sr-only">Toggle sidebar</span>
                            <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h7" />
                            </svg>
                        </button>
                    </div>

                    <!-- User avatar -->
                    <div class="relative flex items-center flex-shrink-0 p-2" x-data="{ isOpen: false }">
                        <button @click="isOpen = !isOpen; $nextTick(() => {isOpen ? $refs.userMenu.focus() : null})"
                            class="transition-opacity rounded-lg opacity-80 hover:opacity-100 focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2">
                            <img class="w-10 h-10 rounded-lg shadow-md" src="images/user.png" alt="User Icon" />
                            <span class="sr-only">User menu</span>
                        </button>
                        <div x-show="isOpen" @click.away="isOpen = false" @keydown.escape="isOpen = false"
                            x-ref="userMenu" tabindex="-1"
                            class="absolute w-48 origin-bottom-left bg-white rounded-md shadow-lg left-10 bottom-14 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-label="user menu">
                            <p class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">role</p>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                            <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">Logout</>
                            </form>
 
                        </div>
                    </div>
                </nav>

                <div x-transition:enter="transform transition-transform duration-300"
                    x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transform transition-transform duration-300"
                    x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                    x-show="isSidebarOpen"
                    class="fixed inset-y-0 left-0 z-10 flex-shrink-0 w-64 bg-white border-r-2 border-indigo-100 shadow-lg sm:left-16 rounded-tr-3xl rounded-br-3xl sm:w-72 lg:static lg:w-64">
                    <nav x-show="currentSidebarTab == 'linksTab'" aria-label="Main" class="flex flex-col h-full">
                        <!-- Logo -->
                        <div class="flex items-center justify-center flex-shrink-0 py-10">
                            <a href="#">
                                <img class="w-24 h-auto"
                                    src="https://raw.githubusercontent.com/kamona-ui/dashboard-alpine/main/public/assets/images/logo.png"
                                    alt="K-UI" />
                            </a>
                        </div>

                        <!-- Links -->
                        <div class="flex-1 px-4 space-y-2 overflow-hidden hover:overflow-auto">
                            <a href="#"
                                class="flex items-center w-full space-x-2 text-white bg-indigo-600 rounded-lg">
                                <span aria-hidden="true" class="p-2 bg-indigo-700 rounded-lg">
                                    <img src="images/dashboard.png" class="h-6 w-6" alt="">
                                </span>
                                <span>Home</span>
                            </a>

                            <a href="{{ route('product.index') }}"
                                class="flex items-center space-x-2 text-indigo-600 transition-colors rounded-lg group hover:bg-indigo-600 hover:text-white">
                                <span aria-hidden="true"
                                    class="p-2 transition-colors rounded-lg group-hover:bg-indigo-700 group-hover:text-white">
                                    <img src="images/store.png" class="h-6 w-6" alt="store">
                                </span>
                                <span>Produk</span>
                            </a>
                            <a href=""
                                class="flex items-center space-x-2 text-indigo-600 transition-colors rounded-lg group hover:bg-indigo-600 hover:text-white">
                                <span aria-hidden="true"
                                    class="p-2 transition-colors rounded-lg group-hover:bg-indigo-700 group-hover:text-white">
                                    <img src="images/shopping-cart.png" class="h-6 w-6" alt="cart">
                                </span>
                                <span>Pembelian</span>
                            </a>
                            <a href=""
                                class="flex items-center space-x-2 text-indigo-600 transition-colors rounded-lg group hover:bg-indigo-600 hover:text-white">
                                <span aria-hidden="true"
                                    class="p-2 transition-colors rounded-lg group-hover:bg-indigo-700 group-hover:text-white">
                                    <img src="images/notes.png" class="h-6 w-6" alt="notes">
                                </span>
                                <span>Penjualan</span>
                            </a>
                            <a href="{{ route('user.index') }}"
                                class="flex items-center space-x-2 text-indigo-600 transition-colors rounded-lg group hover:bg-indigo-600 hover:text-white">
                                <span aria-hidden="true"
                                    class="p-2 transition-colors rounded-lg group-hover:bg-indigo-700 group-hover:text-white">
                                    <img src="/images/group.png" class="h-6 w-6" alt="group">
                                </span>
                                <span>Users</span>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
            {{-- MAIN CONTENT --}}
            {{ $slot }}

        </div>

        @section('scripts')
            <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
            <script>
                const setup = () => {
                    return {
                        isSidebarOpen: false,
                        currentSidebarTab: null,
                        isSubHeaderOpen: false,
                        watchScreen() {
                            if (window.innerWidth <= 1024) {
                                this.isSidebarOpen = false
                            }
                        },
                    }
                }
            </script>
