<x-layout>
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
        <h1 class="text-center font-bold text-xl"> Add New Building</h1>
        <form method="POST" action="{{ route('add') }}">
            @csrf
            <div class="mb-6 ">
                <lable class="block mb-2 uppercase font-bold text-lg py-2 text-gray-700" for="New Building "> Building
                </lable>

                <input class="border border-gray-400 p2 w-full" type="text" name="building" placeholder="New Building"
                    id="building" required>
            </div>

            <div class="mb-6">
                <button type="submit"
                    class="bg-bule-400  border border-black p-6 rounded-xl py-2 px-4 hover:bg-green-500">
                    Submit
                </button>
            </div>
        </form>

    </main>
</x-layout>
