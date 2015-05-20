@include('partials.cssincludes')
<body>
    <div id="wrapper">
	
	@include('includes.sidebar')
<div id="page-wrapper" class="gray-bg">
	@include('includes.header')

	@yield('content')

</div>
@include('partials.jsincludes')