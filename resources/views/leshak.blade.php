<x-layout>
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
        <h1 class="text-center font-bold text-xl">Search Leshak</h1>
        <form>
            @csrf
            <div class="mb-6 ">
                <lable class="block mb-2 uppercase font-bold text-lg py-2 text-gray-700" for="New Building "> Building Name
                </lable>

                <select id="building" name="building_id" class="overflow-auto max-h-40">
                    <option value="0">Please Select</option>
                    @foreach ($buildings as $building)
                        <option value="{{ $building->id }}">{{ $building->BuildingName }}</option>
                    @endforeach
                </select>
                @error('Post')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-6">
                <button onclick="showBuilding()"
                    class="bg-bule-400  border border-black p-6 rounded-xl py-2 px-4 hover:bg-green-500">
                    Go
                </button>
            </div>
        </form>
        <script>
         

        </script>

    </main>
</x-layout>
