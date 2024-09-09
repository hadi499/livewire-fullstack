<nav>


  <ul>
    <li class="mb-3 hover:bg-blue-100 rounded-lg list-none">
      <a wire:navigate href="{{route('home')}}" class="flex space-x-1 p-2 text-sm rounded-md text-blue-700  ">
        <svg xmlns=" http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-700 icon icon-tabler icons-tabler-outline icon-tabler-home">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
          <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
          <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
        </svg>
        <span class="hidden md:block">Home</span>

      </a>
    </li>

    <li class="mb-3 hover:bg-blue-100 rounded-lg list-none">
      <a wire:navigate href="{{ route('dashboard.category')}}" class="flex space-x-1 p-2 text-sm  rounded-md text-blue-700  {{ request()->routeIs('dashboard.category') ? 'border-b-2 border-blue-300' : '' }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-700 icon icon-tabler icons-tabler-outline icon-tabler-category">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M4 4h6v6h-6z" />
          <path d="M14 4h6v6h-6z" />
          <path d="M4 14h6v6h-6z" />
          <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
        </svg>
        <span class="hidden md:block">Category</span>
      </a>
    </li>
    <li class="mb-3 hover:bg-blue-100 rounded-lg list-none">
      <a wire:navigate href="{{ route('dashboard.note')}}" class="flex space-x-1 p-2 text-sm  rounded-md text-blue-700  {{ request()->routeIs('dashboard.note') ? 'border-b-2 border-blue-300' : '' }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-700  icon icon-tabler icons-tabler-outline icon-tabler-clipboard-text">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
          <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
          <path d="M9 12h6" />
          <path d="M9 16h6" />
        </svg>
        <span class="hidden md:block">Notes</span>
      </a>
    </li>
    <li class="mb-3 hover:bg-blue-100 rounded-lg list-none">
      <a wire:navigate href="{{ route('dashboard.user')}}" class="flex space-x-1 p-2 text-sm  rounded-md text-blue-700  {{ request()->routeIs('dashboard.user') ? 'border-b-2 border-blue-300' : '' }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-700 icon icon-tabler icons-tabler-outline icon-tabler-users">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
          <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
          <path d="M16 3.13a4 4 0 0 1 0 7.75" />
          <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
        </svg>
        <span class="hidden md:block">User</span>
      </a>
    </li>
    <li class="mb-3 hover:bg-blue-100 rounded-lg list-none">
      <a wire:navigate href="{{ route('log-user')}}" class="flex space-x-1 p-2 text-sm  rounded-md text-blue-700  {{ request()->routeIs('log-user') ? 'border-b-2 border-blue-300' : '' }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-700 icon icon-tabler icons-tabler-outline icon-tabler-users">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
          <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
          <path d="M16 3.13a4 4 0 0 1 0 7.75" />
          <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
        </svg>
        <span class="hidden md:block">Logs</span>
      </a>
    </li>
    <li class="my-8 hover:bg-blue-100 rounded-lg text-sm text-blue-700 p-2 flex gap-2">
      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-logout text-blue-700">
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
        <path d="M9 12h12l-3 -3" />
        <path d="M18 15l3 -3" />
      </svg>
      <span class="hidden md:block">
        <form action="{{route('logout')}}" method="POST" class=" text-blue-800">
          @csrf
          <button type="submit" class="text-center w-full">Logout</button>
        </form>


      </span>
    </li>

  </ul>
</nav>