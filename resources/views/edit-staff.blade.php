<x-layout>
    <main class="max-w-lg mx-auto mt-9 bg-gray-100 border border-gray-200 p-6 rounded-xl">
        <table class="edit" style="border: solid; padding: 10; margin: auto; text-align: left;">
            <caption>Staff Details</caption>
            <tr>
                <th>Name:</th>
                <td>{{ $data->Name }}</td>
            </tr>
            <tr>
                <th>Application No:</th>
                <td>{{ $data->Appno }}</td>
            </tr>
            <tr>
                <th>Application Date:</th>
                <td>{{ $data->Appdate }}</td>
            </tr>
            <tr>
                <th>Post:</th>
                <td>{{ $data->post_id }}</td>
            </tr>
            <tr>
                <th>Department:</th>
                <td>{{ $data->department_id }}</td>
            </tr>
            <tr>
                <th>Appointment Date:</th>
                <td>{{ $data->Appodate }}</td>
            </tr>
            <tr>
                <th>Housing Status:</th>
                <td>{{ $data->status }}</td>
            </tr>
        </table>

        <table style="border: solid; padding: 10; margin: auto; text-align: left;">
            <form action="#">
                <caption>House Available</caption>
                <tr>
                    <th>Building Name:</th>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th>Room No:</th>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit"
                            class="bg-bule-400  border border-black p-6 rounded-xl py-2 px-4 hover:bg-green-500"
                            style="margin-top: 20;">
                            Save Change
                        </button></td>
                </tr>
        </table>
        </form>
    </main>
</x-layout>




