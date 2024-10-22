<x-app-layout>
    <div class="note-container">
        <a href=" {{ route('note.create') }}" class="new-note-btn">
            New Note
        </a>
        <div class="notes">

            @foreach ($notes as $note)
                <div class="note">
                    <div class="note-body">
                        {{-- Str:words($obj,length) to cut the length of the word --}}
                        {{ Str::words($note->note, 20) }}
                    </div>
                    <div class="note-buttons">
                        <a href="{{ route('note.edit', $note) }}" class="note-edit-button">Edit</a>
                        <a href="{{ route('note.show', $note) }}" class="note-edit-button">View</a>
                        <form action="{{ route('note.destroy', $note) }}" method="POST">
                            @csrf
                            @method('Delete')
                            <button class="note-delete-button">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach

            {{ $notes->links() }}
        </div>
    </div>
</x-app-layout>
