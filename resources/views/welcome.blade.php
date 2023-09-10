<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Analyse</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>
<body>
    <p class="m-10 text-3xl italic tracking-wide text-green-400 font-bold underline">
        This is Analyse application</p>

    <div x-data="{open: false}">
        <button 
        x-on:click="open = !open"
        class="ml-10 bg-slate-500 text-white px-4 py-2 rounded-xl">
        Toogle</button>

        <div x-show ="open" x-transition>
            <p class="bg-yellow-200 p-5 my-5 mx-auto rounded-xl container">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe ut provident magnam voluptatibus nemo minus 
                numquam magni sed, porro placeat delectus pariatur illum tempora vitae. Optio ea cupiditate dolor rem?
            </p>
        </div>
    </div>
    {{-- <img src="{{ asset('vendor/blade-untitledui-icons/activity.svg') }}" width="100" height="100"/> --}}
    <x-untitledui-activity width="100" height="100" class="ml-30"/>

<script src="{{asset('/js/app.js')}}"></script>
</body>
</html>