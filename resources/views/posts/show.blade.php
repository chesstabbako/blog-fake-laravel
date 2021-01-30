<x-app-layout>

    <div class="container py-8 max-w-7xl mx-auto px-2">

        <h1 class="text-2xl font-bold text-gray-600">
            {!!$post->name!!}
        </h1>
        
        <div class="text-lg text-gray-400 mb-2">

           {!!$post->extract!!}

        </div>
    
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <div class="lg:col-span-2">
              
                <figure>

                    @if ($post->images)
                    <img class="w-full h-80 object-cover object-center" 
                    src="{{Storage::url($post->images->url)}}" alt="">
                    @else
                    <img class="w-full h-80 object-cover object-center" 
                    src="https://i.pinimg.com/originals/aa/cd/46/aacd46c3647727dffb01bae41bb9f69c.jpg" alt="">
                    @endif        

                </figure>

                <div class="text-base text-gray-500 mt-4">
                    {!!$post->body!!}
                </div>
                  
            </div>

            <aside>

                <h1 class="text-2xl font-bold text-gray-600 mb-4">
                    Más en {{$post->category->name}}
                </h1>
                
                <div>

                    <ul>
                         
                         @foreach ($similares as $similar)

                         <li class="mb-4">
                           
                            <a class="flex" href="{{route('posts.show', $similar)}}">
                               
                                @if ($similar->images)
                                <img class="w-36 h-20 object-cover object-center" 
                                src="{{Storage::url($similar->images->url)}}" 
                                alt="">
                                @else
                                <img class="w-36 h-20 object-cover object-center" 
                                src="https://i.pinimg.com/originals/aa/cd/46/aacd46c3647727dffb01bae41bb9f69c.jpg"
                                alt=""> 
                                @endif
                                
                                <span class="ml-2 text-gray-600">
                                    {{$similar->name}}
                                </span>

                            </a>

                         </li>
                             
                         @endforeach

                    </ul>

                </div>

            </aside>

        </div>

    </div>

</x-app-layout>