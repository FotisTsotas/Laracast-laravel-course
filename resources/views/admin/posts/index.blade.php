<x-layout>
    <section class="w-full mx-auto py-8">
        <section class="antialiased bg-gray-100 text-gray-600 h-screen px-4">
            <div class="flex flex-col justify-center h-full">
                <!-- Table -->
                <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                    <header class="px-5 py-4 border-b border-gray-100">
                        <h1 class="m-2 p-5  text-xl font-bold text-center">My Posts</h1>
                    </header>
                    <div class="p-3">
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full">
                                <tbody class="text-sm divide-y divide-gray-100">
                                    @foreach ($posts as $post)                                    
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                            <a href="/posts/{{ $post->slug }}" class="hover:bg-blue-500 rounded-xl p-2" >
                                                <div class="font-medium text-gray-800"> {{ $post->title }}</div>
                                            </a>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <a href="/admin/posts/{{ $post->slug }}/edit"
                                                class="text-left font-medium bg-blue-500 text-white rounded-xl  pr-3 p-2 pl-3 hover:bg-red-500">Edit</a>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <form id="formid" method="POST" action="/admin/posts/{{ $post->slug }}">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="text-left font-medium bg-blue-500 text-white rounded-xl  pr-3 p-2 pl-3 hover:bg-red-500">Delete</button>
                                                </form>
                                            </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </section>
    <script>
        document.getElementById('formid').addEventListener('submit', function(e) {
           var answer = window.confirm("Are you sure to delete this post?");
                if (answer) {
                   return;
                }
                else {
                    e.preventDefault(); 
                }   
                });                         
    </script>
</x-layout>