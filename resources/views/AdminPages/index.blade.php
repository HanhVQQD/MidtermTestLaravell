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
                {{-- @foreach($products as $pr) --}}
                <tr class="productsListAdmin">
                    <th scope="row">1</th>
                    <td>1</td>
                    <th><img src="1" alt="image" style="height: 100px;" /></th>
                    <td>d</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>
                    <a href='1' class="editBtn" type="submit" style="width:80px;">Edit</a>
                    <form role="form" action="" method="post">
                        @csrf
                        <button name="delete" class="deleteBtn" type="submit" style="width:80px;">Delete</button>
                    </form>
                    </td>

                </tr>
                {{-- @endforeach --}}
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