<x-app-layout>

    <div class="max-w-5xl mx-auto px-2 sm:px-6 md:px-8 py-8">

        <h1 class="uppercase text-center text-3xl font-bold">Categoria: {{$category->name}}</h1>

    </div>
   
    @foreach ($posts as $post)

    <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
       
        <img class="w-full h-72 object-cover object-center" src="{{Storage::url($post->images->url)}}" alt="">

        <div class="px-6 py-4">

            <h1 class="font-bold text-xl mb-2">

               <a href="{{route('posts.show', $post)}}">

                  {{$post->name}}

               </a>

            </h1>

            <div class="text-gray-700 text-base">

                {{$post->extract}}

            </div>

        </div>

        <div class="px-6 pb-4 pb-2">

           @foreach ($post->tags as $tag)

           <a class="inline-block bg-gray-200 rounded-full text-sm text-gray-700" href="">

              {{$tag->name}}

           </a>
               
           @endforeach

        </div>

    </article>
        
    @endforeach

    <div class="max-w-2xl mt-4 mx-auto">

       {{$posts->links()}}

    </div>


</x-app-layout>



    