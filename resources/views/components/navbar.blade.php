<div class="w-full">
    <nav class="px-2 my-10 mx-24">
        <div class="container items-baseline flex w-full ">
            <a href="{{ route('dashboard') }}" class="flex">
                <img src="/images/home.png" alt="home" class="h-6 w-6">
            </a>
            <p class="bold p-1 text-lg ">/ {{ $slot }}</p>
        </div>
    </nav>

</div>

<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
