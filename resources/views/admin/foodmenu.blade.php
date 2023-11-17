<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

    @include("admin.admincss")

  </head>
  <body>

    <div class="container-scroller">
    @include("admin.navbar")

    <div style="position: relative; top:60px; right:-150px">
        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Title</label>
                <input style="color: blue" type="text" name="title" id="" required placeholder="Write a title">
            </div>

            <div>
                <label for="">Price</label>
                <input style="color: blue" type="number" name="price" id="" required placeholder="price">
            </div>

            <div>
                <label for="">Image</label>
                <input type="file" name="image" id="" required >
            </div>

            <div>
                <label for="">Description</label>
                <input style="color: blue" type="text" name="description" id="" required placeholder="description">
            </div>

            {{-- <div>
                <label for="">shfd</label>
                <input style="color: blue" type="text" name="description" id="" required placeholder="description">
            </div> --}}

            <div>
            <input style="color: black; background-color:antiquewhite" type="submit" value="Save">
        </div>


        </form>

        <div>
            <table bgcolor="black">
                <tr>
                    <th style="padding: 30px">Food Name</th>
                    <th style="padding: 30px">Price</th>
                    <th style="padding: 30px">Description</th>
                    {{-- <th style="padding: 30px">shfd</th> --}}
                    <th style="padding: 30px">Image</th>
                    <th style="padding: 30px">Action</th>
                    <th style="padding: 30px">Action2</th>
                </tr>

                @foreach ($data as $data)
                <tr align="center">
                    <td>{{$data->title}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->description}}</td>
                    {{-- <td>{{$data->shfd}}</td> --}}
                    <td><img style="width:200px; height:200px" src="/foodimage/{{$data->image}}" alt=""></td>
                    <td><a style="text-decoration: none" href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                    <td><a style="text-decoration: none" href="{{url('/updateview',$data->id)}}">Update</a></td>

                </tr>
                @endforeach


            </table>
        </div>


    </div>

</div>
   @include("admin.adminscript")

  </body>
</html>
