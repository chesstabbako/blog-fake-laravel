<x-app-layout>
   
    <div class="container py-8 max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 mt-5 bg-purple-500">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach($posts as $post) 

            <article class="w-full h-80 bg-cover bg-center 
            @if($loop->first) md:col-span-2 @endif  " 
            style="background-image: url({{Storage::url($post->images->url)}})">
             
               <div class="w-full h-full px-8 flex flex-col justify-center">
                  
                <h1 class="text-1xl text-white leading-8 font-bold">

                    <div>

                         @foreach($post->tags as $tag)

                        <a class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full" 
                           href="">{{$tag->name}}
                        </a>   

                         @endforeach

                    </div>
                   
                    <a href="">
                        
                        {{$post->name}}

                    </a>

                </h1>

               </div>
                    
            </article>
                
            @endforeach 

        </div>

    </div>

    <div class="mt-4">
     
        {{$posts->links()}}

    </div>

</x-app-layout>