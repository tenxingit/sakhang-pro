<x-layout>
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
        <h1 class="text-center font-bold text-xl"> Change Password</h1>
        <form action="POST" action="#">
            <div class="mb-6 ">
                <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" for="Old Password">   Old Password
                </lable>
             
                <input class="border border-gray-400 p2 w-full" 
                type="password" 
                name="oldpass" 
                id="oldpass" 
                required>
            </div>

            <div class="mb-6">
                <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" for=""> New Password
                </lable>
               
                <input class="border border-gray-400 p2 w-full" 
                type="password" 
                name="newpass" 
                id="newpass" 
                required>
            </div>

            <div class="mb-6">
                <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" for="">Re-type New Password
                </lable>
                
                <input class="border border-gray-400 p2 w-full" 
                type="password" 
                name="repass" 
                id="repass" 
                required>
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
