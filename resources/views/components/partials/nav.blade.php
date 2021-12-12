<nav class="bg-indigo-500">
    <div class="flex items-center justify-between w-10/12 mx-auto">
        <div class="flex items-center flex-shrink-0">
            <a href="{{ route('dashboard') }}">
                <x-jet-application-mark class="block w-auto h-10 text-gray-600 fill-white" />
            </a>
            <ul class="container flex p-2 mx-auto ml-4 space-x-6 text-white">
                <li>
                    <a href="{{ route('home') }}">Accueil</a>
                </li>
                <li>
                    <a href="{{ route('classes') }}">Classes</a>
                </li>
                <li>
                    <a href="{{ route('students') }}">Elèves</a>
                </li>
            </ul>
        </div>
        <div>

        </div>
    </div>

</nav>
