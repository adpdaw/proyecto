

    <p>Hy, i am in profile.blade</p>
    <p>The user is {{$user->name}}</p>


    <form action="/user/{{$user->id}}" method="post" >
        @method('put')
        {{method_field('put')}}

        @csrf
        <input type="text" name="phoneNumber" id="phoneNumber" />
        <button type="submit">Update</button>
    </form>


