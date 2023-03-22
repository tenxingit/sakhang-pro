<x-layout>
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
          <h1 class="text-center font-bold text-xl">Staff Details</h1>
            <table>
                <tr>
                
                </tr>
            </table>

        <h1 class="text-center font-bold text-xl">House Available</h1>
        <form>
            @csrf
            <div class="mb-6 ">
                
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
                <button type="submit"
                    class="bg-bule-400  border border-black p-6 rounded-xl py-2 px-4 hover:bg-green-500">
                    Save Changes
                </button>
            </div>
        </form>
       
    </main>
</x-layout>
