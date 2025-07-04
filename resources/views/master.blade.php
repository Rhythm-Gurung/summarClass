<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard with Header, Nav, Footer</title>
<style>
body {
  margin: 0;
  font-family: Arial, sans-serif;
  background: #f4f6f8;
}

header {
  background: #34495e;
  color: #fff;
  padding: 15px 20px;
  font-size: 1.2em;
}

nav {
  background: #2c3e50;
  width: 200px;
  min-height: calc(100vh - 100px);
  color: #fff;
  float: left;
  padding-top: 20px;
}

nav a {
  display: block;
  color: #ecf0f1;
  text-decoration: none;
  padding: 10px 20px;
}

nav a:hover {
  background: #3b5770;
}

main {
  margin-left: 200px;
  padding: 20px;
  min-height: calc(100vh - 100px);
}

footer {
  clear: both;
  background: #34495e;
  color: #fff;
  text-align: center;
  padding: 10px;
  position: relative;
}

.cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 20px;
}

.card {
  background: #fff;
  padding: 20px;
  border-radius: 6px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}
</style>
</head>
<body>

@include ('header.header')

@include ('header.nav')

@yield('content')

@include ('footer.footer')

</body>
</html>
