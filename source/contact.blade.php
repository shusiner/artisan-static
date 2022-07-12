@extends('_layouts.master')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>

    <form action="https://formcarry.com/s/{{ $page->services->formcarry }}" method="post">
        <div>
            <label for="sender">Name</label><br>
            <input type="text" name="sender" id="sender" required>
        </div>

        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="message">Message</label><br>
            <textarea name="message" id="message" required></textarea>
        </div>

        <input type="text" name="_gotcha" style="display: none;">

        <input type="submit" name="submit" value="Send">
    </form>

    <form name="contact" method="POST" data-netlify="true">
        <p>
            <label>Your Name: <input type="text" name="name" /></label>
        </p>
        <p>
            <label>Your Email: <input type="email" name="email" /></label>
        </p>
        <p>
            <label>Your Role: <select name="role[]" multiple>
                    <option value="leader">Leader</option>
                    <option value="follower">Follower</option>
                </select></label>
        </p>
        <p>
            <label>Message:
                <textarea name="message"></textarea>
            </label>
        </p>
        <p>
            <button type="submit">Send</button>
        </p>
    </form>

@endsection
