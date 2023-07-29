<!-- resources/views/upload.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Upload Excel</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2>Upload Excel File</h2>

        @if (Session::has('success'))
            <div class="success-message fade-out">{{ Session::get('success') }}</div>
        @endif
        @if (Session::has('error'))
        <div class="error-message">{{ Session::get('error') }}</div>
        @endif
        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label class="custom-file-upload">
                Choose File
                <input type="file" name="excel_file" accept=".xlsx, .xls">
            </label>
            <button type="submit" class="custom-btn-upload">Upload</button>
            @if ($errors->has('excel_file'))
                <div class="error-message">{{ $errors->first('excel_file') }}</div>
            @endif
        </form>

        <p class="upload-message">Supported file formats: .xlsx, .xls</p>
          
        @if (count($employees) > 0)
            <h3>Inserted Data:   <a href="{{ route('download') }}" class="custom-file-download">Download Excel</a></h3>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->phone }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <script>
        // Auto-hide the success message after 3 seconds
        setTimeout(() => {
            const successMessage = document.querySelector('.success-message');
            if (successMessage) {
                successMessage.style.display = 'none';
            }
        }, 3000);
    </script>
</body>

</html>
