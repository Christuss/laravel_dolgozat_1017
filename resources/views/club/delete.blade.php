@foreach ($clubs as $club)
    <form action='/api/clubs/{{$club->club_id}}' method="post">
        {{csrf_field()}}
        {{method_field('delete')}}
        <div class="form-group">
            <input type="submit" value="{{$club->establishment}}">
            <input type="submit" value="{{$club->location}}">
            <input type="submit" value="{{$club->max_number}}">
        </div>
    </form>
@endforeach