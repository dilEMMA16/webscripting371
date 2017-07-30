<?php # CONNECT TO MySQL DATABASE.

# Connect  on 'localhost' for user 'mike' with password 'pass' to database 'site_db'.
if (!($database = @mysqli_connect ( 'rei.cs.ndsu.nodak.edu', 'mike', 'pass','site_db' )))
         die("cannot connect to db");
     else {
    print ("<p>you are connected to DB");
}
