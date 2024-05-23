<x-layout>
    <section class="hero">
        <div class="container">
            <h1>Add an Article</h1>
            <p>Create your personal article here!</p>
        </div>
    </section>
    <div class="add-container">
        <h1>Create Article</h1>
        @if(session()->has('success'))
        <div class="success-message" role="alert">
            {{session('success')}}
        </div>
        @endif
        <form method="post" action="{{route('store-article')}}" class="article-form" enctype="multipart/form-data">
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
                <textarea id="description" name="body">{{old('body')}}</textarea>
                @error('body')
                <div class="fail-message">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="fileInput">Select an Image:</label>
                <input type="file" id="fileInput" name="cover">
                @error('cover')
                <div class="fail-message">
                    {{$message}}
                </div>
                @enderror
              </div>
              <fieldset>
                <legend>Select Categories:</legend>
                @foreach($categories as $category)
                        <input type="checkbox" name="categories[]" value="{{$category->id}}">
                        <label>{{$category->title}}</label>
                    @endforeach
                    @error('categories')
                    <span class="fail-message">{{$message}}</span>
                @enderror
                @error('categories.*')
                    <span class="fail-message">{{$message}}</span>
                @enderror
            </fieldset>
            <button type="submit" class="btn-create">+Create Article</button>
        </form>
    </div>
</x-layout>