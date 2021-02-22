<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ app_name() . ' | ' . __('labels.frontend.auth.login_box_title') }}</title>
    {{ style(mix('css/tailwind.css')) }}
</head>
<body class="bg-gray-200 h-screen w-screen py-8">
    <div class="w-32 mx-auto mb-6">
        <img src="{{ asset('img/frontend/brand/logo.png') }}" class="w-full"/>
    </div>
    <div class="bg-white border-api-redLighten border-2 border-opacity-50 w-5/6 md:w-1/3 mx-auto shadow-md p-6">
        <h4 class="text-lg font-semibold text-center m-0">LOGIN TO ADMINISTRATOR PAGE</h4>

        <form action="{{ route('frontend.auth.login.post') }}" class="w-full" method="POST">
            @csrf
            <div class="grid grid-cols-3 mt-4">
                <label for="email">Email</label>
                <input type="email" class="col-span-2 w-full p-2 border-gray-200 border focus:outline-none focus:border-2" name="email" autocomplete="email">
            </div>
            <div class="grid grid-cols-3 mt-4">
                <label for="password">Password</label>
                <input type="password" class="col-span-2 w-full p-2 border-gray-200 border focus:outline-none focus:border-2" name="password" autocomplete="current-password">
            </div>

            <div class="mt-4">
                <input type="checkbox" name="remember" id="remember"/><label class="inline-block ml-4" for="remember">Remember me</label>
            </div>

            <button class="bg-api-redLighten w-max font-semibold py-2 px-4 text-white mt-4 ml-auto" type="submit">Login</button>
        </form>
    </div>


</body>
</html>
