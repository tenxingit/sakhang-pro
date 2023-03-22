<?
namespace App\Models;

use App\Models\Post;

<!doctype html>

<title>Sakhang Database</title>

<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/tailwind.min.css') }}" >
 <link rel="stylesheet" href="{{ asset('css/addstf.css') }}">
<body style="font-family: Open Sans, sans-serif" bgcolor="#09609e">
    <section class="px-20 py-1">
       
    </section>
      <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
        <h1 class="text-center font-bold text-xl"> Login Form</h1>
        <div><img src="{{ asset('images/logo.png') }}" alt="CTA logo" style="height: 20%; margin-left: auto; margin-right: auto;"></div>
        <form method="#" action="#">
            @csrf
            <div class="mb-6 ">
                <lable class="block mb-2 uppercase font-bold text-lg py-2 text-gray-700" for="Username"> User-name
                </lable>

                <input class="border border-gray-400 p2 w-full" type="text" name="building" placeholder="User-name"
                    id="building" required>
            </div>
            <div class="mb-6 ">
                <lable class="block mb-2 uppercase font-bold text-lg py-2 text-gray-700" for="Password"> Password
                </lable>

                <input class="border border-gray-400 p2 w-full" type="password" name="password" placeholder="Password"
                    id="building" required>
            </div>

            <div class="mb-6">
                <button type="submit"
                    class="bg-bule-400  border border-black p-6 rounded-xl py-2 px-4 hover:bg-green-500">
                    Login
                </button>
                <div><a href="#"><h2 style="text-align: center;"> Check For Waiting List Without Loigin</a></h2></div>
             
            </div>
        </form>

    </main>

</body>
</html>
