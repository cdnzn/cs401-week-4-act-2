<div>
    <table>
        <thead>
           <th>Category Name</th>
            <th>Actions</th>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{$category->category_name}}</td>
                <td>View</td>
                <td>Edit</td>
                <td>Delete</td>

            </tr>
            @endforeach
        </tbody>   
        </thead>
    </table>
</div>
