<html>
   <head>
      <title>View Accounts</title>
   </head>
   
   <body>

   <style>
         .del
         {
         margin: 0;
         position: absolute;
         top: 50%;
         left: 50%;
         margin-right: -50%;
         transform: translate(-50%, -50%);
               }
   </style>

      <table border = "3" class="del">
         <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Edit</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->users_id }}</td>
            <td>{{ $user->name }}</td>
            <td><a href='delete/{{ $user->users_id }}'>Delete account</a></td>
         </tr>
         @endforeach
      </table>
   </body>
</html>