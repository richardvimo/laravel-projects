<h1 class="text-center">Categories</h1>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    
    <tbody>
        <div id="load" style="position: relative;">
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <button class="edit-modal btn btn-info btn-sm" data-id="{{ $category->id }}" data-name="{{ $category->name }}" data-toggle="modal" data-target="#editCategoryModal"><i class="fa fa-edit"></i> Edit</button>
                        <button class="delete-modal btn btn-danger btn-sm" data-id="{{ $category->id }}" data-name="{{ $category->name }}"><i class="fa fa-trash"></i> Delete</button>
                    </td>
                </tr>
            @endforeach
            </div>
    </tbody>
</table>

<div class="text-center">
    {!! $categories->render() !!}    
</div>