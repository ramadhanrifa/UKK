@props(['itemName', 'price', 'quantity'])

<div class="bg-white shadow rounded w-64">
    <div class="h-36 w-64 bg-gray-200 flex flex-col p-4 bg-cover"
        style="background-image: url('https://images.pexels.com/photos/7989741/pexels-photo-7989741.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
    </div>
    <div class="p-4 flex flex-col items-center">
        <h1 class="text-gray-800 text-center mt-1">{{ $itemName }}</h1>
        <p class="text-center text-gray-800 mt-1">{{ $price }} </p>
        <div class="inline-flex items-center mt-2">
            <button onclick="changeQuantity(-1)"
                class="bg-white rounded-l border text-gray-600 hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50 inline-flex items-center px-2 py-1 border-r border-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4" fill="decrease" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                </svg>
            </button>
            <div id="quantity"
                class="bg-gray-100 border-t border-b border-gray-100 text-gray-600 hover:bg-gray-100 inline-flex items-center px-4 py-1 select-none">
                {{ $quantity }} </div>
            <button onclick="changeQuantity(1)"
                class="bg-white rounded-r border text-gray-600 hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50 inline-flex items-center px-2 py-1 border-r border-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
            </button>
        </div>

    </div>
</div>

<script>
    let currentNumber = 0;

    function changeQuantity(number) {
        currentNumber += number;
        document.getElementById("quantity").innerText = currentNumber;
    }

    console.log(currentNumber);
</script>
