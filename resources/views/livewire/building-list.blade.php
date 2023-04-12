<div>

    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
        <h1 class="text-center font-bold text-xl">Search Leshak</h1>


        <div class="mb-6 ">
            <lable class="block mb-2 uppercase font-bold text-lg py-2 text-gray-700" for="New Building "> Building Name
            </lable>

            <select wire:model="selectedValue" id="building" name="building_id" class="overflow-auto max-h-40">
                <option value="0">Please Select</option>
                @foreach ($buildings as $building)
                    <option value="{{ $building->id }}">{{ $building->BuildingName }}</option>
                @endforeach
            </select>
            @error('building')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <h1 class="text-center font-bold px-4" style="border-radius:1rem;background:#09609e; color:aliceblue">
                <a href="addleshak" >Add New Leshak</a>
            </h1>
        </div>
        {{-- <div class="mb-6">
                <button wire:click="selectedValue"
                    class="bg-bule-400  border border-black p-6 rounded-xl py-2 px-4 hover:bg-green-500">
                    Go
                </button>
            </div> --}}




    </main>



    <main class="max-w-lg mx-auto mt-5 bg-gray-100 border border-gray-200 p-4 rounded-xl">
        <article class="bg-gray-100 border border-black border-opacity-0 border-opacity-5 py-5 px-1 rounded-xl">

            <table class="border border-black border-opacity-2 mx-auto xl:font-serif text-sm sm:text-center px-3">
                <caption>Search Result Found for Building </caption>
                <tr class="leshak">
                    <td style="color: white">House No</td>
                    <td style="color: white">Derim</td>

                </tr>
                {{-- {{ ($fourths) }} --}}
                @if (!empty($leshaks))
                    @foreach ($leshaks as $leshak)
                        <tr>
                            <td>{{ $leshak->HouseNo }}</td>
                            <td>{{ $leshak->derim_id }}</td>

                        </tr>
                    @endforeach
                @else
                    No Rooms in Building.
                @endif


        </article>
    </main>
</div>
