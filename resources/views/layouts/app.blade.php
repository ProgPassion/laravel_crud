<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Posts APP</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


	<style>
		html {
			height: 100%;
		}
        body {
        	margin: 0;
        	padding: 0;
        	height: 100%;
            font-family: 'Nunito', sans-serif;
            background-color: #f3f3f3;
        }
        .wrapper {
        	width: 80%;
        	height: 100%;
        	margin: auto;
        	padding: 20px 40px;
        	box-sizing: border-box;
        	background-color: #fff;
        }
       	.add_new_post {
       		color: blue;
       	}
       	.all_posts {
       		width: 70%;
       		height: 500px;
       		overflow: auto;
       		background-color: #dedede;
       		padding: 10px 30px;
       		margin: 50px auto;
       	}
    </style>
</head>
<body>
	<div class="wrapper">
		@yield('content')
	</div>
</body>
</html>