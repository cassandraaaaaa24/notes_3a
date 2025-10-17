<x-layout>
    <x-slot:title>All Notes</x-slot:title>

    <h1>My Notes</h1>

    @foreach($notes as $note)
        <x-note-card
            :title="$note['title']"
            :content="$note['content']"
            timestamp="Just now"
        />
    @endforeach
</x-layout>
