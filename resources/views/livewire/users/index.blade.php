<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center mb-5">Users List</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-responsive table-striped">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Joined</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr wire:key="{{$user->id}}">
                            <td>{{$loop->index + $users->firstItem()}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at->format('d F Y')}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <x-pagination :items="$users"/>
        </div>
    </div>
</div>
