<!doctype html>
<html>
    <head>
        <title>Navigation Bar</title>
        <link rel="stylesheet" href="./css/rating_and_feedback.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
<div class="rating-container">
  <h3>How satisfied are you with our service?</h3>
  <form method="post" action="../src/save_rating_and_feedback.php">
    <label><input type="radio" name="rating" value="5">5 - Very satisfied</label><br>
    <label><input type="radio" name="rating" value="4">4 - Satisfied</label><br>
    <label><input type="radio" name="rating" value="3">3 - Neutral</label><br>
    <label><input type="radio" name="rating" value="2">2 - Unsatisfied</label><br>
    <label><input type="radio" name="rating" value="1">1 - Very unsatisfied</label><br>
    <textarea name="feedback" placeholder="Your feedback (optional)"></textarea><br>
    <button type="submit">Submit</button>
  </form>
</div>
</body>
</html>