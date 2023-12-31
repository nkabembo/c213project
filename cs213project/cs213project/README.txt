This is a website created by LAMP
Author :Naghmeh Kabembo
The Feature used is MYSQL prepared statements for registration and login to prevent SQL injection
I looked at the php official documentation website for reference for research feature php.net .

This is a art uploading website.All the Photo Files are not stored on the database they are stored 
in a folder called FinalFiles which is in the document root when upload
or retrieve for display onto the website,just their file names are stored in databases.That folder requires all necessary permissions to work effectively.

There are 4 Databases a user database for login and registration ,overall anything related to the user.
There is a music database storing music information that user uploads,
and two other databases photographs and paintings serving a similar purpose.
The music uploads only takes in MP3 audio files .
The Join operations are of the users and type of artists in The Art Info Page.There is no logout page
but there is an logout button on the home page and once that is clicked the session is ended
and the user is redirected to the home page.
