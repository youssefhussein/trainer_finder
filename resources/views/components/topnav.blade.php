 <header class="sticky ">

{{--     @if (Route::has('login'))--}}
         <nav class="-mx-4 flex flex-1 justify-end gap-4  pe-7 py-2">
             @auth
                 <a
                     href="{{ url('/dashboard') }}"
                     class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                 >
                     Dashboard
                 </a>
             @else
                 <a
                     href="{{ route('login') }}"
                     class="text-white px-3 bg-green-900"
                 >
                     Log in
                 </a>

                 @if (Route::has('register'))
                     <a
                         href="{{ route('register') }}"
                         class="text-white pr-3"
                     >
                         Register
                     </a>
                 @endif
             @endauth
                 <a href="{{{route("home")}}}"></a>
                 <a href="{{{route("trainers.index")}}}"></a>
                 <a href="{{{route("aboutus")}}}"></a>



         </nav>
{{--     @endif--}}
 </header>
