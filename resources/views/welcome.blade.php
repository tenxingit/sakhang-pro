<x-layout>

    <main class="max-w-7xl mx-auto mt-6 lg:mt-19 space-y-4">
        <article class="bg-gray-100 border border-black border-opacity-0 border-opacity-5 py-5 px-1 rounded-xl">

            <table class="border border-black border-opacity-2 mx-auto xl:font-serif text-sm sm:text-center px-3" style="width: 60rem;">
                <caption>Derim1(a)</caption>
                <tr class="derim">
                    <th>Serial No</td>
                    <th>Application No</td>
                    <th>Application Date</td>
                    <th>Name</td>
                    <th>Post</td>
                    <th>Department</td>

                </tr>
                @if (!empty($firsts))
                   @foreach ($firsts as $first)
                        <tr>
                            <td>{{ $first->id }}</td>
                            <td>{{ $first->Appno }}</td>
                            <td>{{ $first->Appdate }}</td>
                            <td>{{ $first->Name }}</td>
                            <td>{{ $first->post_id }}</td>
                            <td>{{ $first->department_id }}</td>
                        </tr>
                    @endforeach
                @else
                    Derim1(a) is empty
                @endif
            </table>

        </article>

        <article class="bg-gray-100 border border-black border-opacity-0 border-opacity-5 py-5 px-1 rounded-xl">

            <table class="border border-black border-opacity-2 mx-auto xl:font-serif text-sm sm:text-center px-3" style="width: 60rem;">
                <caption>Derim1(b)</caption>
                <tr class="derim">
                    <th>Serial No</td>
                    <th>Application No</td>
                    <th>Application Date</td>
                    <th>Name</td>
                    <th>Post</td>
                    <th>Department</td>
                </tr>
                @if (!empty($secounds))
                     @foreach ($secounds as $secound)
                        <tr>
                            <td>{{ $secound->id }}</td>
                            <td>{{ $secound->Appno }}</td>
                            <td>{{ $secound->Appdate }}</td>
                            <td>{{ $secound->Name }}</td>
                            <td>{{ $secound->post_id }}</td>
                            <td>{{ $secound->department_id }}</td>
                        </tr>
                    @endforeach
                @else
                    Derim1(b) is empty
                @endif
            </table>
        </article>

        <article class="bg-gray-100 border border-black border-opacity-0 border-opacity-5 py-5 px-1 rounded-xl">

            <table class="border border-black border-opacity-2 mx-auto xl:font-serif text-sm sm:text-center px-3" style="width: 60rem;">
                <caption>Derim2(a)</caption>
                <tr class="derim">
                    <th>Serial No</td>
                    <th>Application No</td>
                    <th>Application Date</td>
                    <th>Name</td>
                    <th>Post</td>
                    <th>Department</td>
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

        <article class="bg-gray-100 border border-black border-opacity-0 border-opacity-5 py-5 px-1 rounded-xl">

            <table class="border border-black border-opacity-2 mx-auto xl:font-serif text-sm sm:text-center px-3" style="width: 60rem;">
                <caption>Derim2(b)</caption>
                <tr class="derim">
                    <th>Serial No</td>
                    <th>Application No</td>
                    <th>Application Date</td>
                    <th>Name</td>
                    <th>Post</td>
                    <th>Department</td>
                </tr>
                @if (!empty($fourths))
                    @foreach ($fourths as $fourth)
                        <tr>
                            <td>{{ $fourth->id }}</td>
                            <td>{{ $fourth->Appno }}</td>
                            <td>{{ $fourth->Appdate }}</td>
                            <td>{{ $fourth->Name }}</td>
                            <td>{{ $fourth->post_id }}</td>
                            <td>{{ $fourth->department_id }}</td>
                        </tr>
                    @endforeach
                @else
                    Derim2(b) is empty
                @endif
            </table>
        </article>
        <article class="bg-gray-100 border border-black border-opacity-0 border-opacity-5 py-5 px-1 rounded-xl">

            <table class="border border-black border-opacity-2 mx-auto xl:font-serif text-sm sm:text-center px-3" style="width: 60rem;">
                <caption>Derim3</caption>
                <tr class="derim">
                    <th>Serial No</td>
                    <th>Application No</td>
                    <th>Application Date</td>
                    <th>Name</td>
                    <th>Post</td>
                    <th>Department</td>
                </tr>
                @if (!empty($fifths))
                    @foreach ($fifths as $fifth)
                        <tr>
                            <td>{{ $fifth->id }}</td>
                            <td>{{ $fifth->Appno }}</td>
                            <td>{{ $fifth->Appdate }}</td>
                            <td>{{ $fifth->Name }}</td>
                            <td>{{ $fifth->post_id }}</td>
                            <td>{{ $fifth->department_id }}</td>
                        </tr>
                    @endforeach
                @else
                    Derim3 is empty
                @endif
            </table>
        </article>
        <article class="bg-gray-100 border border-black border-opacity-0 border-opacity-5 py-5 px-1 rounded-xl">

            <table class="border border-black border-opacity-2 mx-auto xl:font-serif text-sm sm:text-center px-3" style="width: 60rem;">
                <caption>Derim4</caption>
                <tr class="derim">
                    <th>Serial No</td>
                    <th>Application No</td>
                    <th>Application Date</td>
                    <th>Name</td>
                    <th>Post</td>
                    <th>Department</td>
                </tr>
                @if (!empty($sixths))
                    @foreach ($sixths as $sixth)
                        <tr>
                            <td>{{ $sixth->id }}</td>
                            <td>{{ $sixth->Appno }}</td>
                            <td>{{ $sixth->Appdate }}</td>
                            <td>{{ $sixth->Name }}</td>
                            <td>{{ $sixth->post_id }}</td>
                            <td>{{ $sixth->department_id }}</td>
                        </tr>
                    @endforeach
                @else
                    Derim4 is empty
                @endif
            </table>
        </article>
        <article class="bg-gray-100 border border-black border-opacity-0 border-opacity-5 py-5 px-1 rounded-xl">

            <table class="border border-black border-opacity-2 mx-auto xl:font-serif text-sm sm:text-center px-3" style="width: 60rem;">
                <caption>Derim5</caption>
                <tr class="derim">
                    <th>Serial No</td>
                    <th>Application No</td>
                    <th>Application Date</td>
                    <th>Name</td>
                    <th>Post</td>
                    <th>Department</td>
                </tr>
                @if (!empty($sevenths))
                    @foreach ($sevenths as $seventh)
                        <tr>
                            <td>{{ $seventh->id }}</td>
                            <td>{{ $seventh->Appno }}</td>
                            <td>{{ $seventh->Appdate }}</td>
                            <td>{{ $seventh->Name }}</td>
                            <td>{{ $seventh->post_id }}</td>
                            <td>{{ $seventh->department_id }}</td>
                        </tr>
                    @endforeach
                @else
                    Derim5 is empty
                @endif
            </table>
        </article>
    </main>
    </body>
</x-layout>
