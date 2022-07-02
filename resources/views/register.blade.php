@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>  
        @endforeach
        
    </ul>

    
@endif
<form action="{{route('userRegister')}}" method="post">

    @csrf
    <input type="text" name="name" placeholder="Enter Your name">
    <br><br>
    <input type="email" name="email" placeholder="Enter Email">
    <br><br>
    <input type="password" name="password" placeholder="Enter Password">
    <br><br>
    <input type="password" name="password_confirmation" placeholder="Conform Password">
    <br><br>
    <input type="submit" value="Register">
</form>