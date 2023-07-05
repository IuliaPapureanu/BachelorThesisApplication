

<x-layouts.backend>
    <div class="row my-4">
        <div class="col-lg-4 my-5">
{{--            COMPANY INFORMATION--}}
            <div class="card">
{{--                <div class="card-title">{{$company->name}}</div>--}}
                <div class="card-body">
                    <h5 class="card-header">Company Information </h5>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="badge bg-secondary rounded-pill text-white">Company Name</span>
                            {{$company->name}}
                        </li>
                        <li class="list-group-item">
                            <span class="badge bg-secondary rounded-pill text-white">Address</span>
                            {{$company->address}}</li>
                        <li class="list-group-item">
                            <span class="badge bg-secondary rounded-pill text-white">City</span>
                            {{$company->city}}</li>
                        <li class="list-group-item">
                            <span class="badge bg-secondary rounded-pill text-white">County</span>
                            {{$company->county}}</li>
                        <li class="list-group-item">
                            <span class="badge bg-secondary rounded-pill text-white">Administrator</span>
                            {{$company->administrator}}</li>
                        <li class="list-group-item">
                            <span class="badge bg-secondary rounded-pill text-white">Email</span>
                            {{$company->admin_email}}</li>
                    </ul>

                </div>
            </div>
        </div>

        <div class="col-lg-8 my-2">
{{--            REPORT CHART--}}
            <div class="row">
                <div class="col-lg-3">
                    <div class="card text-white m-2 p-0" style="background-color: rgba(75, 192, 192, 1);">
                        <div class="card-body p-2 ">
                            <h4 class="">Yearly Profit</h4>
                            <div class="container d-inline-flex">
                                <svg class="m-2" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M512 80c0 18-14.3 34.6-38.4 48c-29.1 16.1-72.5 27.5-122.3 30.9c-3.7-1.8-7.4-3.5-11.3-5C300.6 137.4 248.2 128 192 128c-8.3 0-16.4 .2-24.5 .6l-1.1-.6C142.3 114.6 128 98 128 80c0-44.2 86-80 192-80S512 35.8 512 80zM160.7 161.1c10.2-.7 20.7-1.1 31.3-1.1c62.2 0 117.4 12.3 152.5 31.4C369.3 204.9 384 221.7 384 240c0 4-.7 7.9-2.1 11.7c-4.6 13.2-17 25.3-35 35.5c0 0 0 0 0 0c-.1 .1-.3 .1-.4 .2l0 0 0 0c-.3 .2-.6 .3-.9 .5c-35 19.4-90.8 32-153.6 32c-59.6 0-112.9-11.3-148.2-29.1c-1.9-.9-3.7-1.9-5.5-2.9C14.3 274.6 0 258 0 240c0-34.8 53.4-64.5 128-75.4c10.5-1.5 21.4-2.7 32.7-3.5zM416 240c0-21.9-10.6-39.9-24.1-53.4c28.3-4.4 54.2-11.4 76.2-20.5c16.3-6.8 31.5-15.2 43.9-25.5V176c0 19.3-16.5 37.1-43.8 50.9c-14.6 7.4-32.4 13.7-52.4 18.5c.1-1.8 .2-3.5 .2-5.3zm-32 96c0 18-14.3 34.6-38.4 48c-1.8 1-3.6 1.9-5.5 2.9C304.9 404.7 251.6 416 192 416c-62.8 0-118.6-12.6-153.6-32C14.3 370.6 0 354 0 336V300.6c12.5 10.3 27.6 18.7 43.9 25.5C83.4 342.6 135.8 352 192 352s108.6-9.4 148.1-25.9c7.8-3.2 15.3-6.9 22.4-10.9c6.1-3.4 11.8-7.2 17.2-11.2c1.5-1.1 2.9-2.3 4.3-3.4V304v5.7V336zm32 0V304 278.1c19-4.2 36.5-9.5 52.1-16c16.3-6.8 31.5-15.2 43.9-25.5V272c0 10.5-5 21-14.9 30.9c-16.3 16.3-45 29.7-81.3 38.4c.1-1.7 .2-3.5 .2-5.3zM192 448c56.2 0 108.6-9.4 148.1-25.9c16.3-6.8 31.5-15.2 43.9-25.5V432c0 44.2-86 80-192 80S0 476.2 0 432V396.6c12.5 10.3 27.6 18.7 43.9 25.5C83.4 438.6 135.8 448 192 448z"/></svg>
                                {{$yearlyProfit}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card text-white m-2 p-0" style="background-color: rgb(100,192,75);">
                        <div class="card-body p-2 ">
                            <h4 class="">Yearly Income</h4>
                            <div class="container d-inline-flex">
                                <svg class="m-2" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M512 80c0 18-14.3 34.6-38.4 48c-29.1 16.1-72.5 27.5-122.3 30.9c-3.7-1.8-7.4-3.5-11.3-5C300.6 137.4 248.2 128 192 128c-8.3 0-16.4 .2-24.5 .6l-1.1-.6C142.3 114.6 128 98 128 80c0-44.2 86-80 192-80S512 35.8 512 80zM160.7 161.1c10.2-.7 20.7-1.1 31.3-1.1c62.2 0 117.4 12.3 152.5 31.4C369.3 204.9 384 221.7 384 240c0 4-.7 7.9-2.1 11.7c-4.6 13.2-17 25.3-35 35.5c0 0 0 0 0 0c-.1 .1-.3 .1-.4 .2l0 0 0 0c-.3 .2-.6 .3-.9 .5c-35 19.4-90.8 32-153.6 32c-59.6 0-112.9-11.3-148.2-29.1c-1.9-.9-3.7-1.9-5.5-2.9C14.3 274.6 0 258 0 240c0-34.8 53.4-64.5 128-75.4c10.5-1.5 21.4-2.7 32.7-3.5zM416 240c0-21.9-10.6-39.9-24.1-53.4c28.3-4.4 54.2-11.4 76.2-20.5c16.3-6.8 31.5-15.2 43.9-25.5V176c0 19.3-16.5 37.1-43.8 50.9c-14.6 7.4-32.4 13.7-52.4 18.5c.1-1.8 .2-3.5 .2-5.3zm-32 96c0 18-14.3 34.6-38.4 48c-1.8 1-3.6 1.9-5.5 2.9C304.9 404.7 251.6 416 192 416c-62.8 0-118.6-12.6-153.6-32C14.3 370.6 0 354 0 336V300.6c12.5 10.3 27.6 18.7 43.9 25.5C83.4 342.6 135.8 352 192 352s108.6-9.4 148.1-25.9c7.8-3.2 15.3-6.9 22.4-10.9c6.1-3.4 11.8-7.2 17.2-11.2c1.5-1.1 2.9-2.3 4.3-3.4V304v5.7V336zm32 0V304 278.1c19-4.2 36.5-9.5 52.1-16c16.3-6.8 31.5-15.2 43.9-25.5V272c0 10.5-5 21-14.9 30.9c-16.3 16.3-45 29.7-81.3 38.4c.1-1.7 .2-3.5 .2-5.3zM192 448c56.2 0 108.6-9.4 148.1-25.9c16.3-6.8 31.5-15.2 43.9-25.5V432c0 44.2-86 80-192 80S0 476.2 0 432V396.6c12.5 10.3 27.6 18.7 43.9 25.5C83.4 438.6 135.8 448 192 448z"/></svg>
                                {{$yearlyIncome}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card text-white m-2 p-0" style="background-color: rgb(192,75,93);">
                        <div class="card-body p-2 ">
                            <h4 class="">Yearly Expenses</h4>
                            <div class="container d-inline-flex">
                                <svg class="m-2" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M512 80c0 18-14.3 34.6-38.4 48c-29.1 16.1-72.5 27.5-122.3 30.9c-3.7-1.8-7.4-3.5-11.3-5C300.6 137.4 248.2 128 192 128c-8.3 0-16.4 .2-24.5 .6l-1.1-.6C142.3 114.6 128 98 128 80c0-44.2 86-80 192-80S512 35.8 512 80zM160.7 161.1c10.2-.7 20.7-1.1 31.3-1.1c62.2 0 117.4 12.3 152.5 31.4C369.3 204.9 384 221.7 384 240c0 4-.7 7.9-2.1 11.7c-4.6 13.2-17 25.3-35 35.5c0 0 0 0 0 0c-.1 .1-.3 .1-.4 .2l0 0 0 0c-.3 .2-.6 .3-.9 .5c-35 19.4-90.8 32-153.6 32c-59.6 0-112.9-11.3-148.2-29.1c-1.9-.9-3.7-1.9-5.5-2.9C14.3 274.6 0 258 0 240c0-34.8 53.4-64.5 128-75.4c10.5-1.5 21.4-2.7 32.7-3.5zM416 240c0-21.9-10.6-39.9-24.1-53.4c28.3-4.4 54.2-11.4 76.2-20.5c16.3-6.8 31.5-15.2 43.9-25.5V176c0 19.3-16.5 37.1-43.8 50.9c-14.6 7.4-32.4 13.7-52.4 18.5c.1-1.8 .2-3.5 .2-5.3zm-32 96c0 18-14.3 34.6-38.4 48c-1.8 1-3.6 1.9-5.5 2.9C304.9 404.7 251.6 416 192 416c-62.8 0-118.6-12.6-153.6-32C14.3 370.6 0 354 0 336V300.6c12.5 10.3 27.6 18.7 43.9 25.5C83.4 342.6 135.8 352 192 352s108.6-9.4 148.1-25.9c7.8-3.2 15.3-6.9 22.4-10.9c6.1-3.4 11.8-7.2 17.2-11.2c1.5-1.1 2.9-2.3 4.3-3.4V304v5.7V336zm32 0V304 278.1c19-4.2 36.5-9.5 52.1-16c16.3-6.8 31.5-15.2 43.9-25.5V272c0 10.5-5 21-14.9 30.9c-16.3 16.3-45 29.7-81.3 38.4c.1-1.7 .2-3.5 .2-5.3zM192 448c56.2 0 108.6-9.4 148.1-25.9c16.3-6.8 31.5-15.2 43.9-25.5V432c0 44.2-86 80-192 80S0 476.2 0 432V396.6c12.5 10.3 27.6 18.7 43.9 25.5C83.4 438.6 135.8 448 192 448z"/></svg>
                                {{$yearlyExpenses}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    <div>
                        <canvas id="myChart"></canvas>
                        <a href="{{ route('balanceSheets.create',['company' => $company->id]) }}" class="btn btn-secondary  active m-2" role="button" aria-pressed="true">
                            Add Balance Sheet
                        </a>
                        <a href="{{ route('balanceSheets.index',['company' => $company->id]) }}" class="btn btn-secondary  active m-2" role="button" aria-pressed="true">
                            See balance sheet index
                        </a>
{{--                        <a href="{{ route('companies.sendReport',['company' => $company->id]) }}" class="btn btn-danger float-right  active m-2" role="button" aria-pressed="true">--}}
{{--                            Send Report--}}
{{--                        </a>--}}
                        <form action="{{ route('companies.sendReport',['company' => $company->id]) }}" method="POST">
                            @csrf
                            @method('POST')
                            <button type="submit" name="submit" value="submit" class="btn btn-danger float-right active"
                                    onclick="return confirm('Confirm Send Report?')">
                                Send Report
                            </button>
                        </form>
                        <script>
                            // Sample data for 12 months
                            {{--const data1 = [{{$balanceSheetsByMonth[1]['income'] ?? 0}}, {{$balanceSheetsByMonth[2]['income'] ?? 0}}, 15, 25, 30, 22, 18, 12, 8, 16, 28, 14];--}}

                            const data1 = [
                                @for($i = 1; $i <= 12; $i++)
                                    {{ $balanceSheetsByMonth[$i]['income'] ?? null }},
                                @endfor
                            ];
                            // const data2 = [5, 12, 8, 18, 20, 15, 10, 8, 6, 12, 24, 10];
                            const data2 = [
                                @for($i = 1; $i <= 12; $i++)
                                    {{ $balanceSheetsByMonth[$i]['profit'] ?? null }},
                                @endfor
                            ];
                            // const data3 = [5, 8, 7, 7, 10, 7, 8, 4, 2, 4, 4, 4];
                            const data3 = [
                                @for($i = 1; $i <= 12; $i++)
                                    {{ $balanceSheetsByMonth[$i]['expenses'] ?? null }},
                                @endfor
                            ];
                            // Get the canvas element
                            const ctx = document.getElementById('myChart').getContext('2d');

                            // Create the chart
                            new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                                    datasets: [{
                                        label: 'Profit/Loss',
                                        data: data2,
                                        fill: false,
                                        borderColor: 'rgba(75, 192, 192, 1)', // Customize the line color
                                        tension: 0.2 // Adjust the line curve
                                    }, {
                                        label: 'Total Income',
                                        data: data1,
                                        fill: false,
                                        borderColor: 'rgb(100,192,75)', // Customize the line color
                                        tension: 0.2 // Adjust the line curve
                                    },{
                                        label: 'Total Expenses',
                                        data: data3,
                                        fill: false,
                                        borderColor: 'rgb(192,75,93)', // Customize the line color
                                        tension: 0.2 // Adjust the line curve
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        </script>
                    </div>
        </div>
    </div>
    <div class="row my-4">
        <div class="col-lg-6">
{{--            TAGS--}}
            <div class="card">
                <div class="card-body">
                    <h5 class="card-header">Tags </h5>
{{--                    <div class="btn-group" role="group" aria-label="Basic example">--}}
{{--                        <button type="button" class="btn btn-primary">Left</button>--}}
{{--                        <button type="button" class="btn btn-primary">Middle</button>--}}
{{--                    </div>--}}

                    @foreach($allTagsOfCompany as $tag)
                        <h2>
                        <div class="d-flex align-items-center m-2">
{{--                            <button type="button" class="btn btn-secondary active">--}}
{{--                                {{$tag->name}}--}}
{{--                            </button>--}}
                            <span class="mr-2">{{$tag->name}}</span>
                            <form action="{{ route('companies.unassignTag',['company' => $company->id,'tag'=>$tag->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit" value="submit" class="btn btn-secondary active"
                                        onclick="return confirm('Confirm Unassign Tag')">
                                    {{--                                            <i class="icon-trash"></i>--}}<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg>
                                </button>
                            </form>
                        </div>
                        </h2>
                    @endforeach
                </div>

            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    @error('tag_id')
                    <div class="alert alert-danger" role="alert">
                        You must choose a company tag!
                    </div>
                    @enderror
                    <h5 class="card-header">Assign Tag </h5>
                    <form action="{{ route('companies.assignTag',['company' => $company->id]) }}" method="POST">
                        @csrf
                        @method('POST')
                        <select class="form-control form-select m-2" name="tag_id" aria-label="Default select example">
                            <option selected disabled>Select tag</option>

                            @foreach($allTagsNotAssigned as $assignTag)
                                <option name="tag_id" value="{{ $assignTag->id }}">{{ $assignTag->name }}</option>
                            @endforeach
                        </select>

                        <button type="submit" name="submit" value="submit" class="btn btn-danger active m-2" onclick="return confirm('Assign tag?')">Assign Tag</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-layouts.backend>
