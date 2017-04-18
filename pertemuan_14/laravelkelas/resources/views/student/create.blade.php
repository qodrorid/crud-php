 @extends('default')

 @section('body')
    <h1 class="page-header">Add New Student</h1>

    <form method="POST" action="{!! route('student.store') !!}">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Email</label>
            <input type="email" name="email" class="form-control">
        </div>        
        <div class="form-group">
            <label for="name">Gender</label>
            <select name="gender" class="form-control">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>        
        <div class="form-group">
            <label for="name">Address</label>
            <textarea name="address" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok" aria-hidden="true"></i>&nbsp; Save</button>
    </form>

    @if(Session::has('success_message'))
        <div class="alert alert-success" style="margin-top: 2em">
            <p><strong>Well done!</strong> {{ Session::get('success_message') }}</p>
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger" style="margin-top: 2em">
            <strong>Oops!</strong> something errors:
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
     @endif     
 @endsection