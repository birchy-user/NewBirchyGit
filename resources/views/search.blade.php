<div class="container">
    @if(isset($details))
        <table class="table table-striped" cellpadding="10">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Profile</th>
                </tr>
            </thead>
            <tbody>
                @foreach($details as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><a href="/profile/{{ $user->users_id }}">{{$user->username}}</a></td>
                    <!-- <td><a href="/p/{{ $user->users_id }}"></a></td> -->
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>