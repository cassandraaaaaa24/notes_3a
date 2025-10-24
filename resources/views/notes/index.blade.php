<x-layout>
    <x-slot:title>All Notes</x-slot:title>

    <h1>My Notes</h1>

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <form action="/notes" method="POST">
        @csrf

        <div>
            <label for="title">Title</label>
            <input id="title" name="title" type="text" value="{{ old('title') }}">
            @error('title')<div class="error">{{ $message }}</div>@enderror
        </div>

        <div>
            <label for="content">Content</label>
            <textarea id="content" name="content">{{ old('content') }}</textarea>
            @error('content')<div class="error">{{ $message }}</div>@enderror
        </div>

        <button type="submit">Post note</button>
    </form>

    @foreach($notes as $note)
        <x-note-card
            :title="$note->title"
            :content="$note->content"
            :timestamp="$note->created_at->diffForHumans()"
        />
    @endforeach
</x-layout>
