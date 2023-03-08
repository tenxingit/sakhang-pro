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
        <nav>
            <div>
               
                    <img src="{{ asset('images/banner.jpg') }}" alt="Sakhang Banner" width="100%">
                
                <ul
                    class="md:flex md:justify-between md:items-center px-3 py-1 border border-blue-300  text-whiite-300 text-xs uppercase font-semibold bg-gray-100">
                    <li><a href="/">Home</a> </li>
                    <li><a href="add-staff">Add Staff</a></li>
                    <li><a href="#">Derim 1(b)</a></li>
                    <li><a href="#">Derim 2(a)</a></li>
                    <li><a href="#">Derim 2(b)</a></li>
                    <li><a href="#">Derim 3</a></li>
                    <li><a href="#">Derim 4</a></li>
                    <li><a href="#">Derim 5</a></li>
                    <li><a href="#">Add New Building</a></li>
                    <li><a href="#">Edit/Add Leshak</a></li>
                    <li><a href="changepass">Change</a></li>
                    <li><a href="#">Logout</a></li>

                </ul>
            </div>
        </nav>
    </section>
    
{{ $slot }}
</body>
</html>
