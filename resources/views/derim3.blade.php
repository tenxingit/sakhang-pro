<x-layout>

    <main class="max-w-7xl mx-auto mt-6 lg:mt-19 space-y-4">
        <article class="bg-gray-100 border border-black border-opacity-0 border-opacity-5 py-5 px-1 rounded-xl">

            <table class="border border-black border-opacity-2 mx-auto xl:font-serif text-sm sm:text-center px-3">
                <caption>Derim2(a)</caption>
                <tr class="derim">
                    <td>Serial No</td>
                    <td>Application No</td>
                    <td>Application Date</td>
                    <td>Name</td>
                    <td>Post</td>
                    <td>Department</td>

                </tr>
                 @if (!empty($thirds))
                    @foreach ($thirds as $third)
                        <tr>
                            <td>{{ $third->id }}</td>
                            <td>{{ $third->Appno }}</td>
                            <td>{{ $third->Appdate }}</td>
                            <td>{{ $third->Name }}</td>
                            <td>{{ $third->post_id }}</td>
                            <td>{{ $third->department_id }}</td>
                        </tr>
                    @endforeach
                @else
                    Derim2(a) is empty
                @endif
            </table>
        </article>
    </main>
</x-layout>