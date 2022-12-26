<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Send Message</title>
  </head>
  <body>
      <center><h3>Send Message</h3></center>
      <br>
      <div>
        <form action="" method="post">
          <div class="form-group">
              <label>To Whom:</label>
              <select class="form-control" name="to_whom">
                <option>To Admin</option>
                <option>To Students</option>
              </select>
          </div>
          <div class="form-group">
            <label>Post Date:</label>
            <input type="date" class="form-control" name="post_date">
          </div>
          <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" name="subject" placeholder="Enter Your Name">
          </div>
          <div class="form-group">
            <label>Message:</label>
            <textarea name="message" rows="8" cols="80" class="form-control" placeholder="Type your message..."></textarea>
          </div>
          <button type="submit" class="btn btn-primary"name="send_message">Send message</button>
        </form>
      </div>
  </body>
</html>
