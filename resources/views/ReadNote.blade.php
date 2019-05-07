@extends('index')
@section('QUICKBLOGGER')
    @parent
    <br>
    <p>----------------</p>
    <br>
    <p>YOUR NOTES</p>
@endsection

@section('NoteContent')
    <table border="1">
        <tr>
            <td>Note Title</td>
            <td>Note Content</td>
        </tr>


        @forelse($AllNotes as $Note)
            <tr>
                <td>{{$Note->NoteTitle}}</td>
                <td>{{$Note->NoteContent}}</td>
            </tr>
        @empty
            <tr>
                <td colspan="2">you have not any note now</td>
            </tr>
        @endforelse
    </table>
    <a href="{{route('Memo.create')}}">Insert another Notes</a>
@endsection