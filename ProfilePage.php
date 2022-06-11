<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyle.css">
    <title>Profile Page</title>
</head>

<body>
     <div class="topnav">
             <a class="title" href="index.html" taret="_self">The Therapy Webbo</a>
             <a class="active" href="login.html" target="_self">login</a>
             <a href="logout.html" target="_self">logout</a>
             <a href="Questionnaire.html" target="_self">Questionnaire</a>
             <a href="TherapyInfo.html" target="_self">TherapyInfo</a>
         </div>
    
    <div>
        <a href="UpdateProfile.php">
          <button type="button" class="btn btn-primary btn-sm">Update Profile</button>
        </a>

        <form action="{{ route('Controllers.users.destroy', $user->id) }}" method="POST">
            {{ method_field('DELETE') }}
            @csrf
            <button type="submit" class="btn btn-danger btn-sm">Delete Account</button>
        </form>
    </div>

</body>
</html>
