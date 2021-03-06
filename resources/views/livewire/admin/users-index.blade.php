<div>

    <div class="card">

        <div class="card-header">
          
            <input wire:model="search" class="form-control" placeholder="Ingrese nombre o email">


        </div>

        @if ($users->count())
            
    <div class="card-body">

        <table class="table table-striped">

            <thead>
                
                <tr>
                    
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th></th>

                </tr>
               
            </thead>

            <tbody>

            @foreach ($users as $user)
                    
                <tr>

                   <td>{{$user->id}}</td>
                   <td>{{$user->name}}</td>
                   <td>{{$user->email}}</td>
                   <td>
                       <a class="btn btn-primary" href="{{route('admin.users.edit', $user)}}">
                          Editar
                       </a>





                   </td>

                </tr>

            @endforeach

            </tbody>

        </table>

      </div>

        <div class="card-footer">

           {{$users->links()}}

        </div>

   
    @else

    <div class="card-body">

        <strong class="alert alert-danger">No hay registros</strong>

    </div>
            
    @endif

    </div>

</div>
