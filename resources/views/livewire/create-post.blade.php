<div>
    <h2>New Post</h2>

    <form wire:submit='submit'>
        <label>
            <span>Title</span>
            <input type="text" wire:model='title'>
            @error('title')
                <em>{{ $message }}</span>
                @enderror
        </label>

        <label>
            <span>Content</span>
            <textarea wire:model='content'></textarea>
            @error('content')
                <em>{{ $message }}</span>
                @enderror
        </label>

        <button type="submit">Save</button>
    </form>
</div>
