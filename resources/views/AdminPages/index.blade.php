@extends('../templates/master')
@section('content')
    <div class="space50">&nbsp;</div>
        <div class="container beta-relative">
            <div class="List">
                <h1>List</h1>
            </div>
            <table id="AdminProduct" class="table ">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">Promotion Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Id Type</th>
                    <th scope="col"><a href="/formAdd" class="addBtn" style="width:80px;">Add</a></th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $pr)
                <tr class="productsListAdmin">
                    <th scope="row">{{$pr->id}}</th>
                    <td>{{$pr->name}}</td>
                    <th><img src="../../../public/Images/Products/{{$pr->image}}" alt="image" style="height: 100px;" /></th>
                    <td>{{$pr->price}}</td>
                    <td>{{$pr->promotionPrice}}</td>
                    <td>{{$pr->description}}</td>
                    <td>{{$pr->quantity}}</td>
                    <td>{{$pr->id_type}}</td>
                    <td>
                    <a href='formAdminEdit/{{$pr->id}}' class="editBtn" type="submit" style="width:80px;">Edit</a>
                    <form role="form" action="adminDelete/{{$pr->id}}" method="post">
                        @csrf
                        <button name="delete" class="deleteBtn" type="submit" style="width:80px;">Delete</button>
                    </form>
                    </td>

                </tr>
                @endforeach
                </tbody>
            </table>
        <div class="space50">&nbsp;</div>
    </div>
    <script>
        $(document).ready(function() {
        $('#AdminProduct').DataTable();
    });
    </script>
@endsection