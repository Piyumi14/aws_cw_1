
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="row">
    <h1 style="text-align:center;">Upload File</h1>
    <div class="card col-sm-12" style="text-align:center;">

        <form action="{{ url('/store') }}" method="POST" enctype="multipart/form-data" class="container">

            {{ csrf_field() }}

            <div class="form-group">
                <label class="label" for="file">Select File</label>
                <input class="form-control-file label" type="file" name="file" id="file">
                <button type="submit" class="button button1">Upload</button>
            </div>


        </form>
    </div>
</div>

<div class="row">
    <h3>Files</h3>
    <div class="card col-sm-12">
        @if (count($files) > 0)
            @foreach ($files as $file)
                <table>
                    <tr>
                        <th><a href="{{ url($file['downloadUrl']) }}">{{ $file['name'] }}</a></th>
                        <th><form action="{{ url($file['removeUrl']) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button><i class="w3-margin-center fa fa-trash w3-padding w3-xlarge w3-text-red" type="submit"></i></button>
                            </form></th>
                    </tr>
                </table>
{{--                <a href="{{ url($file['downloadUrl']) }}">{{ $file['name'] }}</a>--}}
{{--                <form action="{{ url($file['removeUrl']) }}" method="POST">--}}
{{--                    {{ csrf_field() }}--}}
{{--                    {{ method_field('DELETE') }}--}}
{{--                    <button ><i class="w3-margin-left fa fa-trash" type="submit"></i></button>--}}
{{--                </form>--}}
            @endforeach
        @else
            <p>Nothing found</p>
        @endif
    </div>
</div>

<style>
    .button {
        border: none;
        color: white;
        padding: 8px 16px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
    }

    .button1 {
        background-color: darkseagreen;
        color: black;
        border: 3px solid #4CAF50;
    }

    .button1:hover {
        background-color: #4CAF50;
        color: white;
    }

    .button2 {
        background-color: darkseagreen;
        color: black;
        border: 3px solid red;
    }

    .button2:hover {
        background-color: indianred;
        color: white;
    }

    .label {
        font-size: 20px;
        color: black;
    }

    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 25px;
    }

</style>
