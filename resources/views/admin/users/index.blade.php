
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<header> <h1>Hello World</h1></header>
</head>
<style>
	header{

		color: white;
		width:100%;
		height:4em;
		text-align: center;
        padding-top: 1px;
        
        background-color: black;
	}
	.t1{
        background-color: red;


	}

</style>
<body class="t1">


@foreach($users as $user)

<ol>
 <li>{{ $user['first_name']}} {{ $user['last_name']}} from {{ $user['city']}}</li>
</ol> 

 @endforeach
</body>
</html>