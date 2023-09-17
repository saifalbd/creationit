<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ comInfo('institute') }} </title>

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100  overflow-auto p-4" style="min-width: 600px">
        <div class="md:w-3/5 bg-white shadow-lg">
            <div class=" p-4">
                <div class="grid grid-cols-2 ">
                    <div class="col-span-1 flex items-center ">
                        <img style="height: 60px" src="{{ comInfo('avatar')->url}}" alt="" srcset="">
                    </div>
                    <div class=" col-span-1 p-2  flex items-center justify-end">
                        <div id="qrcode" class="border-4 border-gray-300"></div>
                    </div>
                </div>
                <div class="flex justify-center items-center flex-col ">

                    <h1 class="text-2xl italic font-extrabold tracking-widest text-indigo-500">
                        {{ comInfo('institute') }}</h1>
                    {{-- <p class="text-base">If account is not paid within 7 days the credits details supplied as
                            confirmation.</p> --}}
                    <ul class="flex flex-col">

                        <li class="flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-sm">
                                {{ comInfo('address') }}
                            </span>
                        </li>
                        <li class="flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>

                            <span class="text-sm">
                                {{ config('app.url') }}
                            </span>
                        </li>
                    </ul>
                </div>
               
                
            </div>
            <div class="w-full h-0.5 bg-indigo-500"></div>
            <div class="grid grid-cols-6 p-4 w-full">
                <div class=" col-span-6 md:col-span-2" style="font-style: italic">
                    <h6 class="font-bold">Order Date : <span
                            class="text-sm font-medium">{{ format($order->date) }}</span></h6>
                    <h6 class="font-bold">Order ID : <span class="text-sm font-medium">{{ $order->id }}</span></h6>
                </div>
                <div class="col-span-6 sm:col-span-3 md:col-span-2 flex justify-center md:justify-start mt-4 md:mt-0">
                    <address class="text-sm flex flex-col">
                        <span class="font-bold"> Billed To : </span>
                        @if($order->billTo)
                        <span class="flex items-center"><svg class="w-4 h-4  text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                            </svg> <i class="ml-2">{{ $order->billTo->name }}</i></span>
                            @endif

                        <span class="flex items-center">
                            <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 17 21">
                                <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <path d="M8 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                    <path
                                        d="M13.8 12.938h-.01a7 7 0 1 0-11.465.144h-.016l.141.17c.1.128.2.252.3.372L8 20l5.13-6.248c.193-.209.373-.429.54-.66l.13-.154Z" />
                                </g>
                            </svg>
                            <i class="ml-2">{{ comInfo('address') }}</i></span>

                        <span class="flex items-center">
                            <svg class="w-4 h-4  text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m16.344 12.168-1.4-1.4a1.98 1.98 0 0 0-2.8 0l-.7.7a1.98 1.98 0 0 1-2.8 0l-2.1-2.1a1.98 1.98 0 0 1 0-2.8l.7-.7a1.981 1.981 0 0 0 0-2.8l-1.4-1.4a1.828 1.828 0 0 0-2.8 0C-.638 5.323 1.1 9.542 4.78 13.22c3.68 3.678 7.9 5.418 11.564 1.752a1.828 1.828 0 0 0 0-2.804Z" />
                            </svg>
                            <i class="ml-2">{{ comInfo('mobile') }}</i></span>


                        <span class="flex items-center">
                            <svg class="w-4 h-4  text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z" />
                            </svg>
                            <i class="ml-2">{{ comInfo('email') }}</i></span>



                    </address>
                </div>
                <div class="col-span-6  sm:col-span-3 md:col-span-2 flex justify-center mt-4 md:mt-0">
                    <address class="text-sm">
                        <span class="font-bold">Ship To :</span>
                        <div class="flex items-center"><svg class="w-4 h-4  text-gray-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                        </svg> <i class="ml-2">{{ $order->name }}</i></div>
                        <div class="flex items-center"><svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 17 21">
                            <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2">
                                <path d="M8 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                <path
                                    d="M13.8 12.938h-.01a7 7 0 1 0-11.465.144h-.016l.141.17c.1.128.2.252.3.372L8 20l5.13-6.248c.193-.209.373-.429.54-.66l.13-.154Z" />
                            </g>
                        </svg> <i class="ml-2">{{ $order->address }}</i></div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4  text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m16.344 12.168-1.4-1.4a1.98 1.98 0 0 0-2.8 0l-.7.7a1.98 1.98 0 0 1-2.8 0l-2.1-2.1a1.98 1.98 0 0 1 0-2.8l.7-.7a1.981 1.981 0 0 0 0-2.8l-1.4-1.4a1.828 1.828 0 0 0-2.8 0C-.638 5.323 1.1 9.542 4.78 13.22c3.68 3.678 7.9 5.418 11.564 1.752a1.828 1.828 0 0 0 0-2.804Z" />
                            </svg>
                            <i class="ml-2">{{ $order->mobile }}</i>
                            </div>
                    </address>
                </div>
               
            </div>
            <div class="flex justify-center p-4">
                <div class="border-b border-gray-200 shadow">
                    <table class="">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-xs text-gray-500 ">
                                    #
                                </th>
                                <th class="px-4 py-2 text-xs text-gray-500 ">
                                    Product Name
                                </th>
                                <th class="px-4 py-2 text-xs text-gray-500 ">
                                    Quantity
                                </th>
                                <th class="px-4 py-2 text-xs text-gray-500 ">
                                    Rate
                                </th>
                                <th class="px-4 py-2 text-xs text-gray-500 ">
                                    Subtotal
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($order->items as $key => $item)
                                <tr class="whitespace-nowrap">
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{ $key + 1 }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">
                                            {{ strtoupper($item->product->category->title) }} -
                                            {{ $item->product->title }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-500">
                                            {{ $item->quantity }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{ $item->rate }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->total }}
                                    </td>
                                </tr>
                            @endforeach

                            <tr class="">
                                <td colspan="2"></td>
                                <td  colspan="2" class="text-sm font-bold">Sub Total</td>
                                <td class="text-sm font-bold tracking-wider text-right"><b>{{ $order->items->sum('total') }}</b>
                                </td>
                            </tr>
                            <!--end tr-->


                            <tr>
                                <th colspan="2"></th>
                                <td  colspan="2" class="text-sm font-bold"><b>Tax Rate</b></td>
                                <td class="text-sm font-bold text-right"><b>0%</b></td>
                            </tr>

                            <!--end tr-->
                            <tr class="text-white">
                                <th colspan="2"></th>
                                <td  colspan="2" class="text-sm font-bold bg-gray-800"><b>Total</b></td>
                                <td class="text-sm font-bold text-right bg-gray-800"><b>{{ $order->items->sum('total') }} BDT</b></td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <th colspan="2"></th>
                                <td  colspan="2" class="text-sm font-bold"><b>Dicount</b></td>
                                <td class="text-sm font-bold text-right"><b>{{ $order->discount }} BDT</b></td>
                            </tr>
                            <tr>
                                <th colspan="2"></th>
                                <td  colspan="2" class="text-sm font-bold"><b>Paid</b></td>
                                <td class="text-sm font-bold text-right"><b>{{ $order->paid }} BDT</b></td>
                            </tr>

                            <tr class="text-white">
                                <th colspan="2"></th>
                                <td   colspan="2" class="text-sm font-bold bg-gray-800"><b>Due</b></td>
                                <td class="text-sm font-bold text-right bg-gray-800"><b>{{ $order->due }} BDT</b></td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>

            @if ($order->note)
                <div class="flex justify-center items-center px-4">
                    <div
                        class=" relative border border-green-100 flex min-h-[50px] items-center rounded-lg overflow-hidden">
                        <span
                            class="font-semibold bg-green-100 text-green-600 absolute top-[0] w-[50px] h-full flex justify-center items-center">Note</span>
                        <span class="ml-[50px] px-1 text-gray-500">{{ $order->note }}</span>
                    </div>
                </div>
            @endif
            <div class="flex flex-col md:flex-row justify-between p-4 mt-[50px]">
                <div>
                    <h3 class="text-xl">Terms And Condition :</h3>
                    <ul class="text-xs list-disc list-inside">
                        {{-- <li>All accounts are to be paid within 7 days from receipt of invoice.</li>
                            <li>To be paid by cheque or credit card or direct payment online.</li>
                            <li>If account is not paid within 7 days the credits details supplied.</li> --}}
                    </ul>
                </div>
                <div class="p-4">
                    <h3>Customer Signature</h3>
                    <div class="text-4xl italic text-indigo-500"></div>
                </div>
                <div class="p-4">
                    <h3>Authorized Signature</h3>
                    <div class="text-4xl italic text-indigo-500"></div>
                </div>
            </div>
            <div class="w-full h-0.5 bg-indigo-500"></div>

            <div class="p-4">
                <div class="flex items-center justify-center">
                    Thank you very much for doing business with us.
                </div>
                <div class="flex items-end justify-end space-x-3 print:hidden">
                    <button class="flex items-center px-4 py-2 text-sm text-green-600 bg-green-100" onclick="print()">
                        <svg class="w-4 h-4  dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 19">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 15h.01M4 12H2a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-3M9.5 1v10.93m4-3.93-4 4-4-4" />
                        </svg>
                        <span class="ml-2">Print</span></button>

                    <button class="px-4 py-2 text-sm flex items-center text-red-600 bg-red-100"
                        onclick="history.back()">
                        <svg class="w-4 h-4  text-red-600 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 12 16">
                            <path
                                d="M10.819.4a1.974 1.974 0 0 0-2.147.33l-6.5 5.773A2.014 2.014 0 0 0 2 6.7V1a1 1 0 0 0-2 0v14a1 1 0 1 0 2 0V9.3c.055.068.114.133.177.194l6.5 5.773a1.982 1.982 0 0 0 2.147.33A1.977 1.977 0 0 0 12 13.773V2.227A1.977 1.977 0 0 0 10.819.4Z" />
                        </svg>
                        <span class="ml-2">History Back</span>
                    </button>
                </div>
            </div>

        </div>
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.js"
    integrity="sha512-is1ls2rgwpFZyixqKFEExPHVUUL+pPkBEPw47s/6NDQ4n1m6T/ySeDW3p54jp45z2EJ0RSOgilqee1WhtelXfA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    var qrcode = new QRCode("qrcode", {
        text: "{{ route('sale.invoice', ['order' => $order->id]) }}",
        width: 100,
        height: 100,
        colorDark: "#000000",
        colorLight: "#ffffff",
        correctLevel: QRCode.CorrectLevel.H
    });
</script>

</html>
