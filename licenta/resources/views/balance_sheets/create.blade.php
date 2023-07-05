<x-layouts.backend>

    <div class="card m-3">
        <div class="card-body">
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @error('year_id')
            <div class="alert alert-danger" role="alert">
                You must choose a year!
            </div>
            @enderror

            @error('month_id')
            <div class="alert alert-danger" role="alert">
                You must choose a month!
            </div>
            @enderror


            @error('excel-file')
            <div class="alert alert-danger" role="alert">
                Data needed not found in file
            </div>
            @enderror
            <div class="form-group">
                <label for="excel-file" class="form-label">Choose Balance Sheet File</label>
                <input class="form-control-file btn btn-primary" type="file" id="excel-file" accept=".xlsx, .xls" />
            </div>
            <form action="{{ route('balanceSheets.store',['company' => $company->id]) }}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <label for="year_id">{{__('balance_sheets.label.year')}}</label>
                        <select class="form-control form-select" name="year_id" aria-label="Default select example"
                                required>
                            <option selected disabled>Select Year</option>
                            @foreach($years as $year)
                                <option name="year_id" value="{{ $year->id }}">{{ $year->number }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-lg-6">
                        <label for="month_id">{{__('balance_sheets.label.month')}}</label>
                        <select class="form-control form-select" name="month_id" aria-label="Default select example"
                                required>
                            <option selected disabled>Select Month</option>
                            @foreach($months as $month)
                                <option name="month_id" value="{{ $month->id }}">{{ $month->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <x-global.form.input
                            id="difference"
                            :label="__('balance_sheets.label.profit')"
                            name="profit"
                            :value="old('profit') ?? '' ?? old('profit')"
                            required
                        />
                    </div>
                    <div class="col-lg-6">
                        <x-global.form.input
                            id="total-class6"
                            :label="__('balance_sheets.label.expenses')"
                            name="expenses"
                            :value="old('expenses') ?? '' ?? old('expenses')"
                            required
                        />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <x-global.form.input
                            id="total-class7"
                            :label="__('balance_sheets.label.income')"
                            name="income"
                            :value="old('income') ?? '' ?? old('income')"
                            required
                        />
                    </div>
                    <div class="col-lg-6">
                        <button type="submit" name="submit" value="submit" class="btn btn-danger active"
                                onclick="return confirm('Confirm balance sheet')"> Add Balance Sheet
                        </button>

                    </div>
                </div>
            </form>

            <script>
                document.getElementById('excel-file').addEventListener('change', handleFile, false);

                function handleFile(e) {
                    var files = e.target.files;
                    var file = files[0];

                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var data = new Uint8Array(e.target.result);
                        var workbook = XLSX.read(data, { type: 'array' });

                        var sheetName = workbook.SheetNames[0];
                        var worksheet = workbook.Sheets[sheetName];

                        var jsonData = XLSX.utils.sheet_to_json(worksheet, { header: 1 });

                        var totalClass6Cell;
                        var totalClass7Cell;
                        var totalClass6Value;
                        var totalClass7Value;

                        for (var i = 0; i < jsonData.length; i++) {
                            var row = jsonData[i];
                            for (var j = 0; j < row.length; j++) {
                                if (row[j] === 'Total clasa  6') {
                                    totalClass6Cell = {
                                        row: i + 1, // Adding 1 to adjust for 0-based indexing
                                        column: j + 1, // Adding 1 to adjust for 0-based indexing
                                    };
                                    totalClass6Value = jsonData[totalClass6Cell.row - 1][totalClass6Cell.column + 6];
                                } else if (row[j] === 'Total clasa  7') {
                                    totalClass7Cell = {
                                        row: i + 1, // Adding 1 to adjust for 0-based indexing
                                        column: j + 1, // Adding 1 to adjust for 0-based indexing
                                    };
                                    totalClass7Value = jsonData[totalClass7Cell.row - 1][totalClass7Cell.column + 6];
                                }
                            }
                        }

                        var totalClass6Input = document.getElementById('total-class6');
                        var totalClass7Input = document.getElementById('total-class7');
                        var differenceInput = document.getElementById('difference');

                        if (totalClass6Value) {
                            totalClass6Input.value = totalClass6Value;
                        } else {
                            alert('Expenses not found in the Excel file.');
                            // var errorField = document.getElementById('total-class6');
                            // errorField.classList.add('is-invalid');
                            // totalClass6Input.value = 'Total Class 6 not found in the Excel file.';
                        }

                        if (totalClass7Value) {
                            totalClass7Input.value = totalClass7Value;
                        } else {
                            // totalClass7Input.value = 'Total Class 7 not found in the Excel file.';
                        }

                        if (totalClass6Value && totalClass7Value) {
                            var difference = parseInt(totalClass7Value) - parseInt(totalClass6Value);
                            differenceInput.value = difference;
                        } else {
                            // differenceInput.value = 'Incomplete data.';
                            alert('Income not found in the Excel file.');
                        }
                    };

                    reader.readAsArrayBuffer(file);
                }
            </script>
        </div>
    </div>

</x-layouts.backend>
