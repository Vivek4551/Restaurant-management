<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">
    @include("admin.admincss")

  </head>
  <body>

    <div class="container-scroller">
    @include("admin.navbar")

    <div style="position: relative; top:60px; right:-150px">
        <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Title</label>
                <input style="color: blue" type="text" name="title" id="" required value="{{$data->title}}">
            </div>

            <div>
                <label>Price</label>
                <input style="color: blue" type="number" name="price" id="" required value="{{$data->price}}">
            </div>

            <div>
                <label>Description</label>
                <input style="color: blue" type="text" name="description" id="" required value="{{$data->description}}">
            </div>

            <div>
                <label>Old Image</label>
                <img height="200" width="200" src="/foodimage/{{$data->image}}" alt="">
            </div>

            <div>
                <label>New Image</label>
                <input type="file" name="image" id="" required>
            </div>

            <div>
            <input style="color: black; background-color:antiquewhite" type="submit" value="Update">
        </div>


        </form>

        <div>

</div>

   @include("admin.adminscript")

  </body>
</html>
