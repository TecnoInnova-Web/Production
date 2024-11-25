
            <nav x-data="{ open: false }" class="bg-white border-b border-gray-200">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                  <div class="flex justify-between h-16">
                    <div class="flex">
                      <div class="shrink-0 flex items-center">
                        <a href="{{ url('/') }}">
                          <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                        </a>
                      </div>
                      <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="url('/')">
                          {{ __('Inicio') }}
                        </x-nav-link>
                        </div>
                    </div>
            
                    
                  </div>
                </div>
              </nav>
            

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('autobuses.index')" :active="request()->routeIs('Autobuses')">
                {{ __('Autobuses') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('conductors.index')" :active="request()->routeIs('conductors')">
                {{ __('Conductores') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('preguntas.index')" :active="request()->routeIs('preguntas')">
                {{ __('Preguntas Frecuentes') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('horarios.index')" :active="request()->routeIs('horarios')">
                {{ __('Horarios') }}
            </x-responsive-nav-link>
        </div>
        
        </div>
    </div>
</nav>

