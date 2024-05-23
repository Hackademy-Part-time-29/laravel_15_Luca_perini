<x-layout>
        <div class="add-container">
            <h1>Create Your Category:</h1>
            @if(session()->has('success'))
            <div class="success-message" role="alert">
                {{session('success')}}
            </div>
            @endif
            <form method="post" action="{{route('categories.store')}}" class="article-form" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" value={{old('title')}}>
                    @error('title')
                    <div class="fail-message">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description">{{old('description')}}</textarea>
                    @error('description')
                    <div class="fail-message">
                        {{$message}}
                    </div>
                    @enderror
                </div>
        
                <button type="submit" class="btn-create">+ Add Category</button>
            </form>
        </div>
    </div>
</x-layout>