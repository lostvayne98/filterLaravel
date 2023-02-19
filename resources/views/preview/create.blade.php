<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Styles -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</head>
<body>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>DataTables</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">DataTables</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable with minimal features & hover style</h3>
                    </div>


                    <form action="{{route('test')}}" method="GET">

                        <input type="date" name="from">
                        <input type="date" name="to">
                        <select name="status">
                            <option value="hand">hand</option>
                            <option value="autooo">auto</option>
                        </select>
                        <button type="submit">save</button>
                    </form>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->created_at}}</td>
                                    <td>{{$user->updated_at}}</td>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->status}}</td>

                                </tr>

                            </tfoot>
                            @endforeach
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @if($users->count() != 0)
        {{$users->appends([
        'status' => request()->status,
        'from' => request()->from,
        'to' => request()->to
        ])->render()}}
    @endif
</section>

</body>
</html>

{{--<script src="js/route.js"></script>--}}

<script>
    /*   function sendobject() {
           $.ajax({
               type: "GET",
               url: "/previews/create",
               data: {},
               cache: false,
               contentType: "application/json; charset=utf-8",
               dataType: "html",
               error: (msg) => {
                   console.log('error' +  msg)
               },
               success: (msg) => {
                   console.log(msg)
                document.querySelector('body').innerHTML = msg
               },
               complete: () => {

               }
           });
       }*/

    // var create_preview = document.querySelector('#add-preview');
    //
    // create_preview.addEventListener('click',function (){
    //     $.ajax({
    //         method:"GET",
    //         url: "/previews/create",
    //         dataType: "json",
    //         cache:false,
    //         data:{
    //
    //         },
    //         error:(msg)=>{
    //             console.log(msg)
    //         },
    //         success:(msg)=>{
    //             console.log(msg)
    //         },
    //         complete:()=>{
    //
    //         }
    //     })
    // })
</script>
