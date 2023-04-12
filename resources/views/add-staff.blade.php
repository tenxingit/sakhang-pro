<x-layout>
    <main class="max-w-lg mx-auto mt-9 bg-gray-100 border border-gray-200 p-6 rounded-xl">
        <h1 class="text-center font-bold text-xl"> Add Staff</h1>
        <form method="POST" action="{{ route('store') }}">
            @csrf
            <div class="mb-5 ">
                <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" for="Application no"> Application no
                </lable>
                <input class="border border-gray-400 p2 w-full" type="text" name="Appno" id="Appno" required>
                @error('Appno')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-5">
                Application Date
                <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" for="Application Date">
                </lable>
                <input class="border border-gray-400 p2 w-full" type="date" name="Appdate" id="Appdate" required>
                @error('Appdate')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-5">
                <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" for="First Name">  Name
                </lable>
              
                <input class="border border-gray-400 p2 w-full" type="text" name="Name" id="Name" required>
                @error('Name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-5">
                <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" for="Post">Post
                </lable>
                
                <select id="Post" name="post_id">
                    <option value="0">Please Select</option>
                    @foreach ($posts as $post)
                        <option value="{{ $post->id }}">{{ $post->PostName }}</option>
                    @endforeach
                </select>



                @error('Post')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-5">
                <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" for="Department"> Department
                </lable>
               
                <select id="Department" name="department_id">
                    <option value="">Please Select</option>

                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->DepName }}</option>
                    @endforeach

                </select>
                @error('dept')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-5">
                <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" for="Appointment Date"> Appointment Date
                </lable>
               
                <input class="border border-gray-400 p2 w-full" type="date" name="Appodate" id="Appodate" required>
                @error('Appodate')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-5">
                <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" for="Status">Status
                </lable>
                
                <select id="Status" name="status">
                    <option value="">Please Select</option>
                    <option value="Exceptional_Case">Exceptional Case</option>
                    <option value="General_Waiting_List">General Waiting List</option>
                    <option value="Transferred">Transferred</option>
                </select>
                @error('status')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-5">
                <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" for="Remarks">Remarks
                </lable>
                
                <textarea name="Remarks" id="Remarks"></textarea>
                @error('remark')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-5">
                <button type="submit"
                    class="bg-bule-400  border border-black p-6 rounded-xl py-2 px-4 hover:bg-green-500">
                    Submit
                </button>
            </div>
        </form>

    </main>
</x-layout>
