@extends('layouts.page')


{{-- Page Title --}}
@section('pgTitle')
{{ config('app.name', 'Laravel') }} - Dashboard
@endsection

{{-- Main Content --}}
@section('main')


{{-- msg --}}
@if (session('msg'))
<h1 class="text-red-500 font-bold pt-24 pb-3 text-center text-2xl">{{ session('msg') }}</h1>
<h1 class="font-bold my-5 py-20 text-center text-2xl"><a class="py-2 px-3 text-white bg-red-400 hover:bg-blue-400" href="{{ route('driver.apply') }}">Apply</a> for driver profile.</h1>
@endif
{{-- /msg --}}



{{-- Booking Results --}}
@if($bookingRequests->count() > 0)
<section class="text-gray-600 body-font">

    {{-- Counter Requested --}}
    <div class="py-6 sm:py-8 lg:py-12">
        <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">You have requested for({{ $totalBookingRequests }}) destination.</h2>
    </div>
    {{-- /Counter Requested --}}

        <h1 class="font-bold my-5 py-5 text-center text-2xl"><a class="py-2 px-3 text-white bg-red-400 hover:bg-blue-400" href="{{ route('driver.apply') }}">Apply</a> for driver profile.</h1>

    <div class="container px-5 mx-auto">
        <div class="grid grid-cols-12">
            @foreach($bookingRequests as $bookingRequest)
            <div class="space-x-2 p-4 col-span-1 md:col-span-4">
                <div class="h-full bg-white border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                    <svg class="my-5 h-auto" style="width: -webkit-fill-available;" xmlns="http://www.w3.org/2000/svg"
                        data-name="Layer 1" width="918.58215" height="432.0506" viewBox="0 0 918.58215 432.0506"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path
                            d="M325.10061,540.37506a10.22114,10.22114,0,0,0-10.20953,10.20973v23.88568a10.22114,10.22114,0,0,0,10.20953,10.20973h12.94974a10.22114,10.22114,0,0,0,10.20953-10.20973V550.58479a10.22114,10.22114,0,0,0-10.20953-10.20973Z"
                            transform="translate(-140.70892 -233.9747)" fill="#3f3d56" />
                        <path
                            d="M564.48154,585.4747H551.53181a11.01656,11.01656,0,0,1-11.004-11.00423V550.58479a11.01656,11.01656,0,0,1,11.004-11.00423h12.94973a11.01655,11.01655,0,0,1,11.004,11.00423v23.88568A11.01655,11.01655,0,0,1,564.48154,585.4747Z"
                            transform="translate(-140.70892 -233.9747)" fill="#3f3d56" />
                        <path
                            d="M555.88912,566.35017H332.89854c-10.14844,0-18.40471-5.98277-18.40471-13.33651V510.1338l11.06824-11.65635H565.37864l8.91519,11.68079v42.85542C574.29383,560.3674,566.03756,566.35017,555.88912,566.35017Z"
                            transform="translate(-140.70892 -233.9747)" fill="#ccc" />
                        <path
                            d="M564.338,519.92883H326.83353L324.42,482.92l1.53584-3.787,8.9276-21.96927H554.6805l12.07144,24.94747Z"
                            transform="translate(-140.70892 -233.9747)" fill="#ccc" />
                        <polygon
                            points="425.64 248.216 423.868 276.023 371.614 276.023 371.614 255.366 424.154 245.149 425.64 248.216"
                            fill="#fff" />
                        <polygon
                            points="237.345 255.366 237.345 276.023 185.877 276.023 184.113 249.01 185.615 245.308 237.345 255.366"
                            fill="#fff" />
                        <path
                            d="M553.35569,463.51965h-217.15l23.16063-77.20183a15.4952,15.4952,0,0,1,14.76295-11.09345l143.811-1.36981a15.56437,15.56437,0,0,1,15.219,11.6645Z"
                            transform="translate(-140.70892 -233.9747)" fill="#ccc" />
                        <path
                            d="M536.63916,456.21966,352.887,454.04078a1.48477,1.48477,0,0,1-1.39631-1.93785l17.61552-54.96041a1.48476,1.48476,0,0,1,1.41392-1.03159H518.31576a1.48476,1.48476,0,0,1,1.41372,1.031l18.341,57.1393A1.48477,1.48477,0,0,1,536.63916,456.21966Z"
                            transform="translate(-140.70892 -233.9747)" fill="#fff" />
                        <path
                            d="M469.54471,383.27562h-49.528c-.41737,0-.79594-.41083-.98795-1.07265a3.33948,3.33948,0,0,1,.07889-2.05917l4.08423-10.32844c.2082-.52643.54809-.84066.90906-.84066h41.35956c.361,0,.70086.31423.90906.84066l4.08423,10.32844a3.33948,3.33948,0,0,1,.07889,2.05917C470.34065,382.86479,469.96208,383.27562,469.54471,383.27562Z"
                            transform="translate(-140.70892 -233.9747)" fill="#f9a826" />
                        <path
                            d="M336.34245,461.93066H303.76814v-7.15977a8.73991,8.73991,0,0,1,8.73014-8.73014h23.84417Z"
                            transform="translate(-140.70892 -233.9747)" fill="#ccc" />
                        <path d="M585.814,461.93066H553.2397V446.04075h23.84417a8.7399,8.7399,0,0,1,8.73014,8.73014Z"
                            transform="translate(-140.70892 -233.9747)" fill="#ccc" />
                        <rect x="136.06773" y="602.08331" width="169.2105" height="1.99958"
                            transform="matrix(0.94112, -0.33808, 0.33808, 0.94112, -331.60746, -123.85679)"
                            fill="#3f3d56" />
                        <rect x="666.90949" y="518.47791" width="1.9995" height="169.21038"
                            transform="translate(-266.14038 793.87011) rotate(-70.24519)" fill="#3f3d56" />
                        <path d="M453.63975,615.0253h-9.532V602.71366h9.532Zm0-24.6242h-9.532V578.08945h9.532Z"
                            transform="translate(-140.70892 -233.9747)" fill="#e6e6e6" />
                        <path d="M453.63975,666.0253h-9.532V653.71366h9.532Zm0-24.6242h-9.532V629.08945h9.532Z"
                            transform="translate(-140.70892 -233.9747)" fill="#e6e6e6" />
                        <polygon points="731.758 389.521 721.26 389.521 716.264 349.028 731.758 349.028 731.758 389.521"
                            fill="#ffb8b8" />
                        <path
                            d="M875.14472,633.67228H841.294v-.42816A13.19085,13.19085,0,0,1,854.47,620.06826h20.67468Z"
                            transform="translate(-140.70892 -233.9747)" fill="#2f2e41" />
                        <polygon
                            points="867.137 369.628 858.138 375.035 833.001 342.898 846.282 334.918 867.137 369.628"
                            fill="#ffb8b8" />
                        <path
                            d="M986.36647,628.38052l-.22056-.36711a13.19131,13.19131,0,0,1,4.50819-18.08l17.72211-10.64748,7.00626,11.661Z"
                            transform="translate(-140.70892 -233.9747)" fill="#2f2e41" />
                        <path
                            d="M875.19656,615.13943l-.181-.00084a140.97355,140.97355,0,0,1-15.28467-.87972c-1.93444-.19109-4.03279-.39847-6.561-.60586l-.08676-.01631c-1.725-.51262-1.77284-16.69018-1.04155-72.06545.37464-28.3629.799-60.50938.29373-80.9819l-.005-.20112.152-.13254c18.72728-16.28837,42.77725-22.39421,67.7197-17.19235l.185.03847.09617.16265c10.31779,17.45785,25.89639,42.60456,40.962,66.9238,34.58414,55.826,44.47545,72.2444,43.39126,73.48288l-.13066.10118c-2.36156,1.18078-4.13461,2.08978-5.64215,2.86289-5.04778,2.58817-7.13713,3.6594-18.36309,8.28216l-.27721.11415-.20216-.22161c-35.09112-38.45219-64.29319-81.40546-82.35585-121.11285-2.11069,13.55594-4.67252,31.25714-7.37944,49.96017-7.784,53.78221-13.04479,89.19675-15.16258,91.353Z"
                            transform="translate(-140.70892 -233.9747)" fill="#2f2e41" />
                        <path
                            d="M929.6997,288.87763c3.53406-14.59194,6.52817-31.05011-.13679-44.48948-4.62448-9.32489-21.73208-12.4651-31.53891-9.10571s-16.8972,12.47368-20.01555,22.41111-2.756,20.64575-1.39688,30.9764C894.64766,288.32348,912.68376,287.977,929.6997,288.87763Z"
                            transform="translate(-140.70892 -233.9747)" fill="#2f2e41" />
                        <circle cx="758.55436" cy="33.86702" r="21.03196" fill="#ffb8b8" />
                        <path
                            d="M924.97464,263.50924a26.41687,26.41687,0,1,0-52.802.69608C890.17443,264.24354,908.17621,264.28176,924.97464,263.50924Z"
                            transform="translate(-140.70892 -233.9747)" fill="#2f2e41" />
                        <path
                            d="M884.65135,464.72625a183.81143,183.81143,0,0,1,61.46354,10.2904c.6876-33.1529-10.7263-66.36727-31.36355-91.215l-.15429-.18565.079-.22787c5.51231-15.92753,11.20985-32.39067,16.30091-48.77228l-.07715-.27513c-3.57055-12.69377-11.23452-25.52092-23.42926-39.21526a7.5049,7.5049,0,0,0-10.24483-.51889c-21.67608,19.87084-33.46211,49.64365-30.75832,77.70048l.00794.08237-.02362.07986c-9.54887,32.35053-13.01531,48.96671-16.07367,63.62691-2.23089,10.69431-4.16261,19.95446-8.0409,33.18552A199.25259,199.25259,0,0,1,884.65135,464.72625Z"
                            transform="translate(-140.70892 -233.9747)" fill="#3f3d56" />
                        <polygon points="774.749 128.486 743.685 196.115 725.939 178.152 774.749 128.486"
                            opacity="0.1" />
                        <path
                            d="M845.7319,400.02472l2.16588,4.20837a.16551.16551,0,0,1-.07119.22226l-.10444.05374L859.00492,426.432a2.57275,2.57275,0,0,1-1.11023,3.4647l-13.6984,7.05a2.57216,2.57216,0,0,1-3.464-1.11036l-.00009-.00017-10.88707-21.154-.07562.03891a.11654.11654,0,0,1-.15688-.04973L828.38,412.27622a.11669.11669,0,0,1,.05035-.1572l0,0,.07561-.03892-.46431-.90215-.07625.03925a.12226.12226,0,0,1-.16435-.0532l-1.21582-2.36241a.12207.12207,0,0,1,.05257-.164l.07625-.03925-.63382-1.2315-.07752.03989a.108.108,0,0,1-.14547-.04637l-.00013-.00028-.66346-1.28917a.10856.10856,0,0,1,.0463-.14622l.07753-.03991-1.34345-2.61039a2.572,2.572,0,0,1,1.10989-3.46373l13.6984-7.05a2.5726,2.5726,0,0,1,3.46438,1.10956l3.15845,6.137.10445-.05373A.16545.16545,0,0,1,845.7319,400.02472Z"
                            transform="translate(-140.70892 -233.9747)" fill="#3f3d56" />
                        <path
                            d="M841.3842,394.88633l16.623,32.29907a1.63223,1.63223,0,0,1-.70469,2.19755l-13.11277,6.74856a1.6294,1.6294,0,0,1-2.19562-.69932l-.00225-.00441-16.62295-32.29907a1.63213,1.63213,0,0,1,.70423-2.19813l.00012-.00006,1.96256-1.01006.12959.25182a1.34394,1.34394,0,0,0,1.81.58l6.66885-3.43216a1.344,1.344,0,0,0,.58-1.81l-.12958-.25181,2.09138-1.07634a1.6317,1.6317,0,0,1,2.19774.70337Z"
                            transform="translate(-140.70892 -233.9747)" fill="#f9a826" />
                        <path
                            d="M846.20208,434.34586a8.61088,8.61088,0,0,0,7.75389-10.68725l25.5958-16.76992-14.59752-6.30634L842.886,417.47419a8.65757,8.65757,0,0,0,3.31608,16.87167Z"
                            transform="translate(-140.70892 -233.9747)" fill="#ffb8b8" />
                        <path
                            d="M870.831,422.26469l-.32279-.2283c-6.09162-4.48352-12.85433-9.12008-19.39439-13.604l-.39283-.26927.30941-.36209c13.959-16.33186,27.93307-33.39082,41.4495-49.89327-.01045-.02634-.019-.04557-.02592-.05937l.12732-.06481.05393-.06565.02885.02384.08154-.0414-.36837.02843-4.166-32.67039c-3.76289-5.13329-4.48352-15.325.448-22.43936,5.10778-7.36982,15.91394-9.83633,23.12613-5.28047a15.175,15.175,0,0,1,6.66361,11.33237,13.68617,13.68617,0,0,1-3.62784,11.20693c1.77075,17.28977,1.83849,32.744,1.90434,47.69268l.00063.14927-.09241.12293C902.2244,386.149,886.39659,404.35777,871.09,421.967Z"
                            transform="translate(-140.70892 -233.9747)" fill="#3f3d56" />
                        <circle cx="303.79475" cy="51.81103" r="47.28997" fill="#f9a826" />
                        <polygon
                            points="299.288 71.773 285.134 53.574 293.365 47.172 300.067 55.789 322.707 31.889 330.278 39.062 299.288 71.773"
                            fill="#fff" />
                        <path d="M1058.29108,634.9747h-239a1,1,0,0,1,0-2h239a1,1,0,0,1,0,2Z"
                            transform="translate(-140.70892 -233.9747)" fill="#3f3d56" /></svg>
                    <div class="p-6">
                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                            {{ $bookingRequest->journeyDate }} | {{ $bookingRequest->journeyTime }} |
                            ({{ $bookingRequest->personCount }}) Person</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $bookingRequest->pickup }} >>
                            {{ $bookingRequest->destination }}</h1>
                        <p class="leading-relaxed mb-3">{{ $bookingRequest->journeyDetails}}</p>
                        <div class="flex items-center flex-wrap ">
                            <a class="text-yellow-500 inline-flex items-center md:mb-2 lg:mb-0">Show Response
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <span
                                class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>1.2K
                            </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                    </path>
                                </svg>6
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="grid grid-cols-12">
            <div class="space-x-2 p-4 col-span-1 md:col-span-4"></div>
            <div class="space-x-2 p-4 col-span-1 md:col-span-4">{{ $bookingRequests->links() }}</div>
            <div class="space-x-2 p-4 col-span-1 md:col-span-4"></div>
        </div>
    </div>
</section>
@else
<p>You have no booking requests.</p>
@endif
{{-- /Booking Results --}}

@endsection







{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
</h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-jet-welcome />
        </div>
    </div>
</div>
</x-app-layout> --}}
