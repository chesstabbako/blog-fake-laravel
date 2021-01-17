@props(['post'])

<article class="mb-8 bg-white-300 shadow-lg rounded-lg overflow-hidden">
       
    <img class="w-full h-72 object-cover object-center" 
    src="{{Storage::url($post->images->url)}}" alt="">

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

    <div class="px-6 py-4">

       @foreach ($post->tags as $tag)

       <a class="inline-block px-6 py-2 bg-{{$tag->color}}-500 rounded-full text-sm text-gray-700" 
       href="{{route('posts.tag', $tag)}}">

          {{$tag->name}}

       </a>
           
       @endforeach

    </div>

</article>