<div>
  <nav class="bg-white shadow-md dark:bg-slate-800 " x-data="{ open: false }">
    <div class="w-full mx-auto px-4 sm:px-6 lg:px-20">
      <div class="flex justify-between h-16">
        <!-- Left side: Logo, Home, About -->
        <div class="flex">
          <a wire:navigate href="/" class="flex items-center space-x-2 text-gray-800 hover:text-gray-900">
            <img src="{{asset('images/cat.png')}}" class="w-10 h-10 " alt="logo">

          </a>
          <div class="hidden md:flex md:items-center md:ml-6">
            <a wire:navigate href="{{ route('home') }}" class="text-gray-800 dark:text-white hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('home') ? 'border-b-2 border-blue-500' : '' }}">Home</a>
            @auth
            <a wire:navigate href="{{ route('posts') }}" class="text-gray-800 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('posts') ? 'border-b-2 border-blue-500' : '' }}">Posts</a>
            @if(Auth::user()->role == 'admin')
            <a href="{{ route('dashboard.home') }}" class="text-gray-800 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('dashboard.home') ? 'border-b-2 border-blue-500' : '' }}">Admin</a>
            @endif


            @endauth


          </div>

        </div>

        <!-- Right side: Login, Register -->
        <div class="hidden md:flex md:items-center">


          <div class="flex justify-center items-center gap-2">
            <button
              type="button"
              class="mr-8"

              @click="isDarkMode = !isDarkMode">
              <span x-show="isDarkMode"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="dark:text-white icon icon-tabler icons-tabler-filled icon-tabler-brightness-up">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M12 8a4 4 0 1 1 -3.995 4.2l-.005 -.2l.005 -.2a4 4 0 0 1 3.995 -3.8z" />
                  <path d="M12 2a1 1 0 0 1 .993 .883l.007 .117v2a1 1 0 0 1 -1.993 .117l-.007 -.117v-2a1 1 0 0 1 1 -1z" />
                  <path d="M17.693 4.893a1 1 0 0 1 1.497 1.32l-.083 .094l-1.4 1.4a1 1 0 0 1 -1.497 -1.32l.083 -.094l1.4 -1.4z" />
                  <path d="M21 11a1 1 0 0 1 .117 1.993l-.117 .007h-2a1 1 0 0 1 -.117 -1.993l.117 -.007h2z" />
                  <path d="M16.293 16.293a1 1 0 0 1 1.32 -.083l.094 .083l1.4 1.4a1 1 0 0 1 -1.32 1.497l-.094 -.083l-1.4 -1.4a1 1 0 0 1 0 -1.414z" />
                  <path d="M12 18a1 1 0 0 1 .993 .883l.007 .117v2a1 1 0 0 1 -1.993 .117l-.007 -.117v-2a1 1 0 0 1 1 -1z" />
                  <path d="M6.293 16.293a1 1 0 0 1 1.497 1.32l-.083 .094l-1.4 1.4a1 1 0 0 1 -1.497 -1.32l.083 -.094l1.4 -1.4z" />
                  <path d="M6 11a1 1 0 0 1 .117 1.993l-.117 .007h-2a1 1 0 0 1 -.117 -1.993l.117 -.007h2z" />
                  <path d="M4.893 4.893a1 1 0 0 1 1.32 -.083l.094 .083l1.4 1.4a1 1 0 0 1 -1.32 1.497l-.094 -.083l-1.4 -1.4a1 1 0 0 1 0 -1.414z" />
                </svg></span>
              <span x-show="!isDarkMode"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-moon-stars">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                  <path d="M17 4a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2" />
                  <path d="M19 11h2m-1 -1v2" />
                </svg></span>
            </button>

            @auth

            <div
              x-data="{
            open: false,
            toggle() {
                if (this.open) {
                    return this.close()
                }

                this.$refs.button.focus()

                this.open = true
            },
            close(focusAfter) {
                if (! this.open) return

                this.open = false

                focusAfter && focusAfter.focus()
            }
        }"
              x-on:keydown.escape.prevent.stop="close($refs.button)"
              x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
              x-id="['dropdown-button']"
              class="relative">
              <!-- Button -->

              <button
                x-ref="button"
                x-on:click="toggle()"
                :aria-expanded="open"
                :aria-controls="$id('dropdown-button')"
                type="button"
                class="flex items-center bg-white">

                <img src="{{ Auth::user()->avatar_url }}" alt="" class="w-10 h-10 rounded-full object-cover">

                <!-- Heroicon: chevron-down -->
                <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg> -->
              </button>

              <!-- Panel -->
              <div
                x-ref="panel"
                x-show="open"
                x-transition.origin.top.left
                x-on:click.outside="close($refs.button)"
                :id="$id('dropdown-button')"
                style="display: none;"
                class="absolute right-0 mt-2 w-40 rounded-md bg-white border shadow-md">
                <div class="flex items-center gap-2 py-2 ml-2">
                  <img src="{{ Auth::user()->avatar_url }}" alt="" class="w-10 h-10 rounded-full object-cover">
                  <span class="text-xl font-semibold">{{ Auth::user()->name }}</span>
                </div>
                <hr>

                <a wire:navigate href="{{route('profile')}}" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-blue-50 disabled:text-gray-500">
                  Profile
                </a>
                <form action="{{ route('logout') }}" method="POST" class="block w-full">
                  @csrf
                  <button type="submit" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-blue-50 disabled:text-gray-500">
                    Logout
                  </button>
                </form>


              </div>
            </div>
          </div>

          @else
          <a href="{{ route('login') }}" class="text-gray-800 dark:text-white hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('login') ? 'border-b-2 border-blue-500' : '' }}">Login</a>
          <a href="{{ route('register') }}" class="text-gray-800 dark:text-white hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('register') ? 'border-b-2 border-blue-500' : '' }}">Register</a>
          @endauth
        </div>


        @auth

        <!-- Mobile menu button -->
        <div class="-mr-2 flex md:hidden">
          <button @click="open = !open" type="button" class="bg-white inline-flex items-center justify-center p-2 rounded-md text-gray-800 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg x-show="!open" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg x-show="open" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu -->
    <div x-show="open" class="md:hidden">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 text-gray-500">


        <a href="{{ route('home') }}" class="block hover:bg-blue-200 text-left px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('home') ? ' text-blue-800' : '' }}">Home</a>
        <form action="{{ route('logout') }}" method="POST" class="block w-full">
          @csrf
          <button type="submit" class="w-full text-left hover:bg-blue-200 px-3 py-2 rounded-md text-base font-medium text-blue-800">
            Logout
          </button>
        </form>

        @endauth
      </div>
    </div>
  </nav>

</div>