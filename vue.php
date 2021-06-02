<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>belajar vue</title>
	<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
</head>
<body>
<div id="app">
	{{ message }}
</div>
<script>
	const app = new Vue({
		el: '#app',
		data: {
			message: 'Hello Vue'
		}
	})
</script>
</body>
</html>