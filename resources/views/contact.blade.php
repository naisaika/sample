

    <h1>お問い合わせ</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contact.submit') }}" method="POST">
        @csrf
        <div>
            <label for="name">名前</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
            @error('name')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="email">メールアドレス</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
            @error('email')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="message">メッセージ</label>
            <textarea id="message" name="message">{{ old('message') }}</textarea>
            @error('message')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">送信</button>
    </form>

