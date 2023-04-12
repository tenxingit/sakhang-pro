<x-layout>
   <main class="max-w-lg mx-auto mt-9 bg-gray-100 border border-gray-200 p-6 rounded-xl">
        <h1 class="text-center font-bold text-xl"> Add Leshak</h1>
        <form method="POST" action="{{ route('add-leshak') }}">
            @csrf
            <div class="mb-5 ">
                <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" for="building"> Building Name
                </lable>

                <select id="building" name="building_id" class="overflow-auto max-h-40">
                    <option value="">Please Select</option>
                    @foreach ($buildings as $building)
                        <option value="{{ $building->id }}">{{ $building->BuildingName }}</option>
                    @endforeach
                </select>
                @error('building')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-5">
                <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" for="houseno"> House No
                </lable>
                <input type="text" name="house_no" id="house_no" placeholder="latest leshak house no">
                <P class="color-red text-xs" style="color: red;">Note: Don't fill the same house-no to same building !</P>
                @error('house')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-5">
                <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" for="Derim"> Derim
                </lable>

                <select id="derim" name="derim_id" class="overflow-auto max-h-40">
                    <option value="0">Please Select</option>
                    @foreach ($derims as $derim)
                        <option value="{{ $derim->id }}">{{ $derim->DerimName }}</option>
                    @endforeach
                </select>
                @error('derim')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-5">
                <button type="submit"
                    class="bg-bule-400  border border-black p-6 rounded-xl py-2 px-4 hover:bg-green-500">
                    Add Now
                </button>
            </div>
        </form>
    </main>
</x-layout>
