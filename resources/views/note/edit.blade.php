<x-app-layout>
    <div class="note-container single-note">
        <h1>Edit your note</h1>
        <form action="{{ route('note.update', $note) }}" method="POST" class="note">
            @csrf
            @method('PUT')
            <textarea name="note" placeholder="Enter your note here" id="" cols="30" rows="10" class="note-body">{{ $note->note }}</textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
                <button type="submit" class="note-submit-button">Submit</button>
            </div>

        </form>

    </div>
</x-app-layout>
