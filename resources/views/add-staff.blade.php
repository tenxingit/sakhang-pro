<x-layout>
    <main class="max-w-lg mx-auto mt-9 bg-gray-100 border border-gray-200 p-6 rounded-xl">
        <h1 class="text-center font-bold text-xl"> Add Staff</h1>
        <form method="POST" action="add-staff">
            @csrf
            <div class="mb-5 ">
                <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" for="Application no">
                </lable>
               Application no
                <input class="border border-gray-400 p2 w-full" 
                type="text" 
                name="Appno" 
                id="Appno" 
                required>
                @error('Appno')
                <div class="alert alert-danger">{{ $message }}</div>                 
                @enderror
            </div>

            <div class="mb-5">
                <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" for="Application Date">
                </lable>
                Application Date
                <input class="border border-gray-400 p2 w-full" 
                type="date" 
                name="Appdate" 
                id="Appdate" 
                required>
                 @error('Appdate')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-5">
                <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" for="First Name">
                </lable>
                First Name
                <input class="border border-gray-400 p2 w-full" 
                type="text" 
                name="fname" 
                id="fname" 
                required>
                 @error('fname')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-5">
                <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" for="Last Name">
                </lable>
                Last Name
                <input class="border border-gray-400 p2 w-full" 
                type="text" 
                name="lname" 
                id="lname" 
                required>
                 @error('lname')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-5">
                <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" for="Post">
                </lable>
                Post
                <select  id="Post" name="post">
                    <option value="">Please Select</option>
                            <option value="Additional Secretary">Additional Secretary</option>
                            <option value="Chief Supreme Justice Commissioner">Chief Supreme Justice Commissioner</option>
                            <option value="Deputy Secretary">Deputy Secretary</option>
                            <option value="Deputy Speaker">Deputy Speaker</option>
                            <option value="Independent Bodies Heads">Independent Bodies Heads</option>
                            <option value="Joint Secretary">Joint Secretary</option>
                            <option value="Junior Clerk">Junior Clerk</option>
                            <option value="Kalon">Kalon</option>
                            <option value="Kalon Tripa">Kalon Tripa</option>
                            <option value="Office Assistant">Office Assistant</option>
                            <option value="Office Superintendent">Office Superintendent</option>
                            <option value="Peon">Peon</option>
                            <option value="Secretary">Secretary</option>
                            <option value="Section Officer">Section Officer</option>
                            <option value="Senior Clerk">Senior Clerk</option>
                            <option value="Speaker">Speaker</option>
                            <option value="Standing Committee">Standing Committee</option>
                            <option value="Supreme Justice Commissioner">Supreme Justice Commissioner</option>
                            <option value="Under Secretary ">Under Secretary </option>
                </select>
                 @error('post')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-5">
                <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" for="Department">
                </lable>
                Department
                <select id="Department" name="dept">
                            <option value="">Please Select</option>
                            <option value="Audit Office">Audit Office</option>
                            <option value="DIIR">DIIR</option>
                            <option value="Education Deptt">Education Deptt</option>
                            <option value="Election">Election</option>
                            <option value="Finance Deptt">Finance Deptt</option>
                            <option value="Health Deptt">Health Deptt</option>
                            <option value="Home Deptt">Home Deptt</option>
                            <option value="Kashag">Kashag</option>
                            <option value="Narthang">Narthang</option>
                            <option value="Ngemey">Ngemey</option>
                            <option value="Planning">Planning</option>
                            <option value="PSC">PSC</option>
                            <option value="Religion Deptt">Religion Deptt</option>
                            <option value="Security Deptt">Security Deptt</option>
                            <option value="TCRC">TCRC</option>
                            <option value="TPI">TPI</option>
                            <option value="TPIE">TPIE</option>
                            <option value="TSJC">TSJC</option>
                        </select>
                         @error('dept')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-5">
                <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" for="Appointment Date">
                </lable>
                Appointment Date
                <input class="border border-gray-400 p2 w-full" 
                type="date" 
                name="Appodate" 
                id="Appodate" 
                required>
                 @error('Appodate')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
             
            <div class="mb-5">
                <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" for="Status">
                </lable>
                Status
                <select id="Status" name="status">
                    <option value="">Please Select</option>
                    <option value="Exceptional Cases">Exceptional Cases</option>
                    <option value="General Waiting List">General Waiting List</option>
                    <option value="Transferred">Transferred</option>
                 </select>
                  @error('status')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-5">
                <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" for="Remarks">
                </lable>
                Remarks
               <textarea name="remarks" id="Remarks"></textarea>
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
