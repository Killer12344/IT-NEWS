<table class="table table-bordered table-hover table-responsive-sm text-center">
    @if(session('message'))
        <p class="alert alert-success">
            {{ session('message') }}
        </p>
    @endif
    @if(session('messageDel'))
        <p class="alert alert-danger">
            {{ session('messageDel') }}
        </p>
    @endif
    <thead class="text-center table-active">
    <th>ID</th>
    <th>NAME</th>
    <th>OWNER</th>
    <th>CONTROL</th>
    <th class="text-nowrap">DATE & TIME</th>
    </thead>
    <tbody class="">
    @foreach($categories as $cat)
        <tr>
            <td>{{ $cat->id }}</td>
            <td class="text-capitalize">{{ $cat->title }}</td>
            <td class="text-nowrap">{{ $cat->user->name }}</td>
            <td>
                <a href="{{ route('category.edit',$cat->id) }}" class="btn btn-sm btn-outline-warning"> Edit </a>
                <form action="{{ route('category.destroy',$cat->id) }}" class="d-inline-block" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-sm btn-outline-danger" onclick="return confirm(`Are you sure to Delete '{{ $cat->title }}'`)">
                        Delete
                    </button>
                </form>
            </td>
            <td class="text-left text-nowrap">
                <i class="feather-calendar"></i>
                {{ $cat->created_at->format('d M Y') }}
                <br>
                <small class="">
                    <i class="feather-clock"></i>
                    {{ $cat->created_at->format('h:i a') }}
                </small>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
