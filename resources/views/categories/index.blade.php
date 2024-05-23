<x-layout>
    <section class="hero">
        <div class="container">
            <h1>Category list</h1>
            <p>Browse here all the categories:</p>
            @if(session()->has('success'))
            <div class="success-message" role="alert">
                {{session('success')}}
            </div>
            @endif

            <div class="table-container">
                <table>
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th>N.ro Articoli</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->title}}</td>
                        <td>{{$category->articles->count()}}</td>
                        <td>
                            <a href="{{route('categories.show', $category)}}" class="btn-table">+More</a>
                            <a href="{{route('categories.edit', $category)}}" class="btn-table">Edit</a>
                            <form method="POST" action="{{route('categories.destroy',$category)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-table-delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>

        </div>
    </section>
</x-layout>