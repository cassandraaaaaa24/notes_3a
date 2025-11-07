<x-layout>
    <head>
        <style>
            #note {
                border: 1px solid #ccc;
                padding: 10px;
                margin-bottom: 10px;
                float: left;
                width: 20%;
                margin-right: 15px;
            }
            #submission {
                margin-bottom: 10px;
                border: 1px solid #ccc;
            }

            #submission div {
                margin: 10px;
                float: left;
                margin-bottom: 15px;
            }
        </style>
    </head>
    <x-slot:title>All Notes</x-slot:title>

    <h1>My Notes</h1>

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <form id="submission" action="/notes" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="title">Title</label>
            <input id="title" name="title" type="text" value="{{ old('title') }}">
            @error('title')<div class="error">{{ $message }}</div>@enderror
        </div>
   
        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" name="content">{{ old('content') }}</textarea>
            @error('content')<div class="error">{{ $message }}</div>@enderror
        </div>
        <br>
        <button type="submit">Post note</button>
    </form>

    @foreach($notes as $note)
    <div id="note">
        <x-note-card
            :title="$note['title']"
            :content="$note['content']"
            :timestamp="$note['created_at']"
        />
    </div>
    @endforeach
</x-layout>
