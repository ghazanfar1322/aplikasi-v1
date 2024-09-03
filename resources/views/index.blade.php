<!DOCTYPE html>
<html>
<head>
<title>TEST PAGE</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<body>
@include('navbar')

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>
<p>test</p>

<h2>test2</h2>
<p><i>Lorem ipsum</i> is the most popular filler text in history.</p>
<p>The <i>RMS Titanic</i>, a luxury steamship, sank on April 15, 1912 after striking an iceberg.</p>
<a href="https://open.spotify.com/collection/tracks"> <i>spotify</i> </a>
<a href="biodata.html"><button type="button">biodata</button></a>
<b>Test Button</b>
<b><p>BOLD</p></b>
<form action="/action_page.php">
    <label for="fname">First name:</label>
    <input type="text" id="fname" name="fname"><br><br>
    <label for="lname">Last name:</label>
    <input type="text" id="lname" name="lname"><br><br>
    <input type="submit" value="Submit">
  </form>
  <p><s>Only 50 tickets left!</s></p>
  <p>SOLD OUT!</p>

</body>
</html>