<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <style>
        body {
            padding: 50px;
        }

        .btn-tertiary {
            color: #555;
            padding: 0;
            line-height: 40px;
            width: 300px;
            margin: auto;
            display: block;
            border: 2px solid #555;

            &:hover,
            &:focus {
                color: lighten(#555, 20%);
                border-color: lighten(#555, 20%);
            }
        }

        /* input file style */

        .input-file {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;

            +.js-labelFile {
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
                padding: 0 10px;
                cursor: pointer;

                .icon:before {
                    //font-awesome
                    content: "\f093";
                }

                &.has-file {
                    .icon:before {
                        //font-awesome
                        content: "\f00c";
                        color: #5AAC7B;
                    }
                }
            }
        }
    </style>
</head>
<body>
    {{-- <form action="{{ route('excel.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="">
        <button type="submit">Submit</button>
    </form> --}}

    <form action="{{ route('excel.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="file" name="file" id="file" class="input-file">
            <label for="file" class="btn btn-tertiary js-labelFile">
                <i class="icon fa fa-check"></i>
                <span class="js-fileName">Choose a file</span>
            </label>
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>
        (function() {

            'use strict';

            $('.input-file').each(function() {
                var $input = $(this),
                    $label = $input.next('.js-labelFile'),
                    labelVal = $label.html();

                $input.on('change', function(element) {
                    var fileName = '';
                    if (element.target.value) fileName = element.target.value.split('\\').pop();
                    fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label
                        .removeClass('has-file').html(labelVal);
                });
            });

        })();
    </script>
</body>
</html>
