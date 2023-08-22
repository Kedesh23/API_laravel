<!DOCTYPE html>
<html>
      <head>
            <title>My form</title>
      </head>
      <body>
            <form action="/login" method="post">
                  @csrf
 
                  <label for="title">Title</label>
                  <input type="text" id="title" vlaue="Entrer un titre">

                  <label for="date">Date</label>
                  <input type="text" id="text" name="date" value="">

                  <label for="status">Status</label>
                  <input type="text" id="status" name="status">
                  <input type="submit">
            </form>
      </body>
</html>