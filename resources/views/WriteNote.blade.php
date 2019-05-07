@extends('index')
@section('QUICKBLOGGER')
    @parent
    <br>
    <p>----------------</p>
    <br>
    <p>Write Notes that your Need</p>
@endsection
@section('NoteContent')
    <form action="{{route('memo.store')}}" method="post">
        <h3>Note Title</h3>
        <input type="text" name="NT">
        <br><br>
        <h3>Note Content</h3>
        <textarea name="NC"></textarea>
        <br><br>
        <input type="submit" name="InsertNote" value="Insert Note">
    </form>
@endsection